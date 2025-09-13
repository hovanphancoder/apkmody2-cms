<?php
use App\Blocks\Schema\SchemaGraph;
use App\Blocks\Schema\Templates\Organization;
use App\Blocks\Schema\Templates\WebSite;
use App\Blocks\Schema\Templates\WebPage;
use App\Blocks\Schema\Templates\BreadcrumbList;
use App\Blocks\Schema\Templates\FAQPage;
// Create meta tags for homepage
// Include Meta blocks
use App\Blocks\Meta\MetaBlock;
// Create meta tags for homepage directly from MetaBlock

$current_page = get_current_page();
$posttype = $current_page['page_slug'];
if($posttype != 'news'){
    $posttype = 'posts';
}



$slug = get_current_slug();
$post_data = get_post([
    'slug' => $slug,
    'posttype' => $posttype,
    'withCategories' => true,
    'active' => true,
    'lang' => APP_LANG // Thêm check ngôn ngữ
]);



$meta = new MetaBlock();

$meta
    ->title($post_data['seo_title'].' - '.option('site_title', APP_LANG))
    ->description( $post_data['seo_desc'])
    ->robots('index, follow')
    ->canonical(base_url());
// Add basic meta tags
$meta
    ->custom('<meta name="generator" content="CMSFullForm">')
    ->custom('<meta name="language" content="' . APP_LANG . '">')
    ->custom('<meta name="author" content="' .$post_data['seo_title'].' - '.option('site_title', APP_LANG) . '">')
    ->custom('<meta name="theme-color" content="#354BD9">');

// Add Open Graph tags
$meta
    ->og('locale', $locale)
    ->og('type', 'website')
    ->og('title',$post_data['seo_title'].' - '.option('site_title', APP_LANG))
    ->og('description', $post_data['seo_desc'])
    ->og('url', base_url())
    ->og('site_name',$post_data['seo_title'].' - '.option('site_title', APP_LANG))
    ->og('updated_time', date('c'));

// Add Twitter Card tags
$meta
    ->twitter('card', 'summary_large_image')
    ->twitter('title',$post_data['seo_title'].' - '.option('site_title', APP_LANG))
    ->twitter('description', $post_data['seo_desc'])
    ->twitter('site', '@' .$post_data['seo_title'].' - '.option('site_title', APP_LANG));

// Add favicon if available
if (option('site_logo')) {
    $logoUrl = theme_assets(option('favicon')['path'] ?? '/images/logo-icon.webp');
    $meta
        ->og('image', $logoUrl)
        ->twitter('image', $logoUrl)
        ->custom('<link rel="icon" href="' . $logoUrl . '" sizes="32x32" />')
        ->custom('<link rel="apple-touch-icon" href="' . $logoUrl . '" />');
}

// Create Schema Graph by format RankMath
$schemaGraph = new SchemaGraph(base_url());

// 1. WebPage Schema
$webPageSchema = new WebPage([
    'url' => base_url(),
    'name' =>$post_data['seo_title'].' - '.option('site_title', APP_LANG),
    'description' => $post_data['seo_desc']
]);

// 2. BreadcrumbList Schema
$breadcrumbSchema = BreadcrumbList::forHomepage([
    'url' => base_url(),
    'siteName' =>$post_data['seo_title'].' - '.option('site_title', APP_LANG)
]);

// 3. WebSite Schema  
$webSiteSchema = new WebSite([
    'name' =>$post_data['seo_title'].' - '.option('site_title', APP_LANG),
    'description' => $post_data['seo_desc']
]);

// 4. Organization Schema
$organizationSchema = new Organization([
    'name' =>$post_data['seo_title'].' - '.option('site_title', APP_LANG),
    'description' => $post_data['seo_desc'],
    'logo' => option('site_logo', APP_LANG),
    'email' => option('site_email'),
    'telephone' => option('site_phone'),
    'social' => option('social', APP_LANG)
]);

// 5. Add schema to graph
$schemaGraph
    ->addItem($webPageSchema)
    ->addItem($breadcrumbSchema)
    ->addItem($webSiteSchema)
    ->addItem($organizationSchema);

// 6. Create primary image if available
$logoUrl = option('site_logo', APP_LANG);
if (!empty($logoUrl)) {
    $imageSchema = [
        '@type' => 'ImageObject',
        '@id' => rtrim(base_url(), '/') . '/#/schema/logo/image/',
        'url' => is_string($logoUrl) ? $logoUrl : base_url('assets/images/logo.png'),
        'width' => 600,
        'height' => 60,
        'inLanguage' => option('site_lang') ?? 'en-US'
    ];
    $schemaGraph->addItem($imageSchema);
}

// Render meta tags and schema in header
get_header([
    'meta' => $meta->render(),
    'schema' => $schemaGraph->render(),
    'append' => '<link rel="stylesheet" href="/themes/'.APP_THEME_NAME.'/Frontend/Assets/css/styles.css" as="style" type="text/css" media="all" />'
]);
