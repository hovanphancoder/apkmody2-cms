<?php
namespace App\Controllers;

use System\Core\BaseController;
use System\Core\AppException;
use System\Drivers\Cache\UriCache;
use System\Libraries\Render;
use App\Libraries\Fastlang as Flang;

class FrontendController extends BaseController
{
    public $query;
    public $cachingDefaultLevel;
    public function __construct()
    {
        parent::__construct(); 
        load_helpers(['frontend', 'images', 'string', 'database', 'shortcode', 'languges']);
        $this->cachingDefaultLevel = option('cache_gzip') ?? 0;

        //Render::asset('css', 'css/blaze-slider.css', ['area' => 'frontend', 'location' => 'head']);
        //Render::asset('css', 'css/swiper-bundle.min.css', ['area' => 'frontend', 'location' => 'head']);
        // Render::asset('css', 'css/main.css', ['area' => 'frontend', 'location' => 'head']);
        // Render::asset('css', 'css/layout_styles.css', ['area' => 'frontend', 'location' => 'head']);
        // Render::asset('css', 'css/custom-backgrounds.css', ['area' => 'frontend', 'location' => 'head']);

        //Render::asset('js', 'js/jfast.1.2.3.js', ['area' => 'frontend', 'location' => 'head']);
        // Render::asset('js', 'js/lazysizes.min.js', ['area' => 'frontend', 'location' => 'head']);
        // Render::asset('js', 'js/main.js', ['area' => 'frontend', 'location' => 'head']);
        // Render::asset('js', 'js/blaze-slider.min.js', ['area' => 'frontend', 'location' => 'head']);
        // Render::asset('js', 'js/styles.min.js', ['area' => 'frontend', 'location' => 'footer']);
        // Render::asset('js', 'js/feather.min.js', ['area' => 'frontend', 'location' => 'footer']);
       
    }

    public function index($layout = '', ...$params)
    {
        
        if (empty($layout)) {
            $layout = 'index';
        }
        $cache = $this->caching($layout);
        // $cachedata = $cache ?  $cache->get() : false;
        $cachedata = false;
        if(empty($cachedata)) {
            Flang::load('CMS', APP_LANG);

            $this->data['params'] = $params;

            // Scan shortcode as before
            $shortcodes = glob(PATH_ROOT . '/plugins/*/Shortcode/*.php');
            foreach ($shortcodes as $shortcode) {
                $shortcode_name = basename($shortcode, '.php');
                $this->data['shortcode_' . $shortcode_name] = require $shortcode;
            }
            $shortcodes = glob(APP_THEME_PATH . 'Frontend/shortcodes/*.php');
            foreach ($shortcodes as $shortcode) {
                $shortcode_name = basename($shortcode, '.php');
                $this->data['shortcode_' . $shortcode_name] = require $shortcode;
            }

            // throw new AppException('Invalid source path - not found 404', 404, null, 500);

            // //print_r($layout);
            
            // if (!empty($GLOBALS['APP_URI']['split'])){
            //     $pages_main = $GLOBALS['APP_URI']['split'][0];
            //     //if (slugValidNotHaveSqlInjection($pages_main)){
            //         //$layout = 'page';
            //         //echo 'Goi model check $pages_main co ton tai trong Posttype Pages khong<br />Neu co: $layout = page.php. Sau do check page-$pages_main.php co ton tai khong neu co set lay $layout.';
            //     //}
            //     if ($pages_main == 'search'){
            //         $layout = 'search';
            //         echo 'set layout la search';die;
            //     }
            //     if ($pages_main == 'author'){
            //         $layout = 'author';
            //         echo 'set layout la author';die;
            //     }
            //     if (in_array($pages_main, APP_POSTTYPES)){
            //         $layout = 'archive';
            //         echo 'Neu phan tu dau co trong list APP_POSTTYPES: set $layout = archive.<br />Sau do check neu co ton tai file archive-$posttype thi set lai $layout<br />';
            //         echo $pages_main;

            //         // /products/ - archive show all san pham va tab list category & terms.
            //         // /products/slug-ten-san-pham/ - detail show san pham.
            //         // /products/category/ten-danh-muc/ - archive show all san pham trong danh muc.
            //         // /products/tag/ten-tag/ - archive show all san pham trong tag.
            //         // /products/brand/ten-thuong-hieu/ - archive show all san pham trong thuong hieu.


            //         $pages_sub = $GLOBALS['APP_URI']['split'][1];


            //         die;
            //     }
            // }else{
            //     //code show page 404
            // }
            // echo '<br />'.$layout;
            // echo '<br />';
            // print_r(APP_POSTTYPES);
            // die;

            $result = Render::html('Frontend/' . $layout, $this->data);
             // cache
             if ($cache) {
                $cachedata = $cache->set($result, true);
            } else {
                echo $result;
                return;
            }
        }
        $cache->render($cachedata);

    }

    protected function caching($functionName = '')
    {
        $cacheConfig = option('cache_config') ?? [];
        // decode cache config
        $cacheConfig = is_string($cacheConfig) ? json_decode($cacheConfig, true) : $cacheConfig;
        $config      = [];
        foreach ($cacheConfig as $cache) {
            if ($cache['cache_function'] == $functionName) {
                $config = $cache;
                break;
            }
        }

        if (isset($config['cache_caching']) && $config['cache_caching']) {
            if (empty($config['cache_level']) || $config['cache_level'] == 'default') {
                $config['cache_level'] = $this->cachingDefaultLevel;
            }
            $cache = new UriCache($config['cache_level'], $config['cache_type']);
            $cache->cacheLogin($config['cache_login'] ?? 0);
            $cache->cacheMobile($config['cache_mobile'] ?? 0);
            return $cache;
        } else {
            return false;
        }
    }
}
