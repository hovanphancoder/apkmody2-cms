<?php
/**
 * Theme Functions
 * 
 * This file is automatically loaded by FrontendController
 * Similar to WordPress functions.php
 * 
 * Add your custom functions here without modifying core files
 */

// Prevent direct access
if (!defined('APP_THEME_PATH')) {
    exit('Direct access not allowed');
}

/**
 * Custom function example
 * You can add your own functions here
 */
if (!function_exists('my_custom_function')) {
    function my_custom_function($param = '') {
        return 'Custom function: ' . $param;
    }
}

/**
 * Custom page title function
 * Override default page title behavior
 */
if (!function_exists('custom_page_title')) {
    function custom_page_title() {
        $current_page = get_current_page();
        
        // Custom logic for different pages
        switch ($current_page['page_type']) {
            case 'home':
                return 'Welcome to ' . option('site_title', APP_LANG);
            case 'blog':
                return 'Our Blog - ' . option('site_title', APP_LANG);
            case 'apps':
                return 'Download Apps - ' . option('site_title', APP_LANG);
            case 'games':
                return 'Download Games - ' . option('site_title', APP_LANG);
            default:
                return get_current_page_title();
        }
    }
}

/**
 * Custom navigation menu
 * Create custom menu structure
 */
if (!function_exists('custom_main_menu')) {
    function custom_main_menu() {
        $menu_items = [
            [
                'title' => __('Home', APP_LANG),
                'url' => base_url(),
                'active' => is_page('home')
            ],
            [
                'title' => __('Apps', APP_LANG),
                'url' => base_url('apps'),
                'active' => is_page('apps')
            ],
            [
                'title' => __('Games', APP_LANG),
                'url' => base_url('games'),
                'active' => is_page('games')
            ],
            [
                'title' => __('Blog', APP_LANG),
                'url' => base_url('blog'),
                'active' => is_page('blog')
            ]
        ];
        
        return $menu_items;
    }
}

/**
 * Custom footer content
 * Add custom content to footer
 */
if (!function_exists('custom_footer_content')) {
    function custom_footer_content() {
        $year = date('Y');
        $site_title = option('site_title', APP_LANG);
        
        return "&copy; {$year} {$site_title}. All rights reserved.";
    }
}

/**
 * Custom CSS/JS enqueue
 * Add custom assets to specific pages
 */
if (!function_exists('custom_enqueue_assets')) {
    function custom_enqueue_assets() {
        $current_page = get_current_page();
        
        // Add custom CSS for specific pages
        if (is_page('blog')) {
            \System\Libraries\Render::asset('css', theme_assets('Assets/css/blog-custom.css'), [
                'area' => 'frontend',
                'location' => 'head'
            ]);
        }
        
        // Add custom JS for specific pages
        if (is_page('apps') || is_page('games')) {
            \System\Libraries\Render::asset('js', theme_assets('Assets/js/download-counter.js'), [
                'area' => 'frontend',
                'location' => 'footer'
            ]);
        }
    }
}

/**
 * Custom post query
 * Modify post queries for specific pages
 */
if (!function_exists('custom_get_posts')) {
    function custom_get_posts($post_type = 'post', $limit = 10) {
        // Add custom logic here
        return get_posts($post_type, $limit);
    }
}

/**
 * Custom breadcrumb
 * Generate custom breadcrumb navigation
 */
if (!function_exists('custom_breadcrumb')) {
    function custom_breadcrumb() {
        $current_page = get_current_page();
        $breadcrumb = [];
        
        // Always start with home
        $breadcrumb[] = [
            'title' => __('Home', APP_LANG),
            'url' => base_url(),
            'active' => false
        ];
        
        // Add current page
        if (!is_page('home')) {
            $breadcrumb[] = [
                'title' => get_page_heading(),
                'url' => '',
                'active' => true
            ];
        }
        
        return $breadcrumb;
    }
}

/**
 * Custom social media links
 * Get social media links from options
 */
if (!function_exists('custom_social_links')) {
    function custom_social_links() {
        $social_links = option('social', APP_LANG);
        
        if (empty($social_links)) {
            return [];
        }
        
        $links = [];
        foreach ($social_links as $platform => $url) {
            if (!empty($url)) {
                $links[] = [
                    'platform' => $platform,
                    'url' => $url,
                    'icon' => 'icon-' . strtolower($platform)
                ];
            }
        }
        
        return $links;
    }
}

/**
 * Custom pagination
 * Generate custom pagination HTML
 */
if (!function_exists('custom_pagination')) {
    function custom_pagination($current_page = 1, $total_pages = 1, $base_url = '') {
        if ($total_pages <= 1) {
            return '';
        }
        
        $pagination = '<div class="pagination">';
        
        // Previous button
        if ($current_page > 1) {
            $prev_url = $base_url . '?page=' . ($current_page - 1);
            $pagination .= '<a href="' . $prev_url . '" class="pagination-link prev">← Previous</a>';
        }
        
        // Page numbers
        for ($i = 1; $i <= $total_pages; $i++) {
            $active_class = ($i == $current_page) ? ' active' : '';
            $page_url = $base_url . '?page=' . $i;
            $pagination .= '<a href="' . $page_url . '" class="pagination-link' . $active_class . '">' . $i . '</a>';
        }
        
        // Next button
        if ($current_page < $total_pages) {
            $next_url = $base_url . '?page=' . ($current_page + 1);
            $pagination .= '<a href="' . $next_url . '" class="pagination-link next">Next →</a>';
        }
        
        $pagination .= '</div>';
        
        return $pagination;
    }
}

/**
 * Initialize theme functions
 * Call this function to initialize all custom functions
 */
if (!function_exists('init_theme_functions')) {
    function init_theme_functions() {
        // Enqueue custom assets
        custom_enqueue_assets();
        
        // Add any other initialization code here
    }
}


// Auto-initialize theme functions
init_theme_functions();





/**
 * Get page title for specific page type
 * @param string $type
 * @param string $custom_title
 * @return string
 */
if (!function_exists('get_page_title')) {
    function get_page_title($type = '', $custom_title = '')
    {
        if (!empty($custom_title)) {
            return $custom_title . ' - ' . option('site_title', APP_LANG);
        }
        
        $current_page = get_current_page();
        $page_type = !empty($type) ? $type : $current_page['page_type'];
        
        switch ($page_type) {
            case 'home':
                return option('site_title', APP_LANG) ?: 'Home';
            case 'blog':
                return __('Blog', APP_LANG) . ' - ' . option('site_title', APP_LANG);
            case 'apps':
                return __('Apps', APP_LANG) . ' - ' . option('site_title', APP_LANG);
            case 'games':
                return __('Games', APP_LANG) . ' - ' . option('site_title', APP_LANG);
            case 'single':
                return ucwords(str_replace('-', ' ', $current_page['page_slug'])) . ' - ' . option('site_title', APP_LANG);
            default:
                return option('site_title', APP_LANG) ?: 'Page';
        }
    }
}

/**
 * Get page heading (H1) for current page
 * @return string
 */
if (!function_exists('get_page_heading')) {
    function get_page_heading()
    {
        $current_page = get_current_page();
        
        switch ($current_page['page_type']) {
            case 'home':
                return option('site_title', APP_LANG) ?: 'Welcome';
            case 'blog':
                return __('Blog', APP_LANG);
            case 'apps':
                return __('Apps', APP_LANG);
            case 'games':
                return __('Games', APP_LANG);
            case 'single':
                return ucwords(str_replace('-', ' ', $current_page['page_slug']));
            default:
                return 'Page';
        }
    }
}


if (!function_exists('get_page_description')) {
    function get_page_description()
    {
        $current_page = get_current_page();
        
        switch ($current_page['page_type']) {
            case 'home':
                return option('site_desc', APP_LANG) ?: 'Welcome to our website';
            case 'blog':
                return __('Discover the latest news, tips, and insights about mobile apps and games.', APP_LANG);
            case 'apps':
                return __('Download the latest mod APK apps for Android. Get premium features for free.', APP_LANG);
            case 'games':
                return __('Download the latest mod APK games for Android. Get unlimited features for free.', APP_LANG);
            case 'single':
                return 'Read more about ' . str_replace('-', ' ', $current_page['page_slug']);
            default:
                return option('site_desc', APP_LANG) ?: 'Page description';
        }
    }
}

