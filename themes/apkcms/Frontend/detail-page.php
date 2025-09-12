<?php
App\Libraries\Fastlang::load('Homepage');
//Render::asset('js', 'js/home-index.js', ['area' => 'frontend', 'location' => 'footer']);

//Get Object Data for this Pages
$locale = APP_LANG.'_'.strtoupper(lang_country(APP_LANG));
get_template('_metas/meta_index', ['locale' => $locale]);
//....
//End Get Object Data
?>
<section>
    <div class="container">
        <div id="main-content">
            <h1>Detail Page</h1>
            chưa có dữ liệu động
        </div>
    </div>
</section>


<?php get_footer(); ?>