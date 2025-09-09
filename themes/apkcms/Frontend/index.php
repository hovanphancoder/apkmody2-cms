<?php
App\Libraries\Fastlang::load('Homepage');
// \System\Libraries\Render::asset('css', 'css/home-index.min.css', ['area' => 'frontend', 'location' => 'head']);
// \System\Libraries\Render::asset('js', 'js/home-index.js', ['area' => 'frontend', 'location' => 'footer']);

//Get Object Data for this Pages
$locale = APP_LANG.'_'.strtoupper(lang_country(APP_LANG));
get_template('_metas/meta_index', ['locale' => $locale]);


?>


<?php get_footer(); ?>