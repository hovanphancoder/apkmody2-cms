<?php
App\Libraries\Fastlang::load('Homepage');
//Render::asset('js', 'js/home-index.js', ['area' => 'frontend', 'location' => 'footer']);

//Get Object Data for this Pages
$locale = APP_LANG.'_'.strtoupper(lang_country(APP_LANG));
get_template('_metas/meta_page', ['locale' => $locale]);
//....
//End Get Object Data

$slug = get_current_slug();

// ===== LẤY THÔNG TIN PAGE =====
// Lấy thông tin page theo slug sử dụng get_post function
$page = get_post([
    'slug' => $slug,
    'posttype' => 'pages',
    'active' => true,
    'columns' => ['*']
]);





?>
<section>
    <div class="container">
        <!-- Breadcrumb -->
        <div id="breadcrumb" class="font-size__small color__gray truncate margin-bottom-15">
            <span>
                <span><a class="color__gray" href="<?php echo (APP_LANG === APP_LANG_DF) ? '/' : page_url('', 'home'); ?>" aria-label="Home">Home</a></span> / 
                <span class="color__gray" aria-current="page"><?php echo htmlspecialchars($page['title'] ?? 'Page', ENT_QUOTES, 'UTF-8'); ?></span>
            </span>
        </div>

        <!-- Page Content -->
        <div id="main-content">
            <h1 class="font-size__larger margin-bottom-15"><?php echo htmlspecialchars($page['title'] ?? 'Page Title', ENT_QUOTES, 'UTF-8'); ?></h1>
         
   

            <div class="page-content font-size__normal">
                <?php if (!empty($page['content'])): ?>
                    <div class="content-html">
                        <?php echo $page['content']; ?>
                    </div>
                <?php else: ?>
                    <p class="color__gray">No content available for this page.</p>
                <?php endif; ?>
            </div>

          
        </div>
    </div>
</section>


<?php get_footer(); ?>