<?php
/**
 * Theme Cache Manager
 * Quản lý cache riêng cho theme apkcms
 */

use App\Models\FastModel;

class ThemeCacheManager {
    private $cache_dir;
    private $lang;
    
    public function __construct() {
        $this->cache_dir = __DIR__ . '/';
        $this->lang = APP_LANG;
        
        // Tạo thư mục cache nếu chưa có
        if (!is_dir($this->cache_dir)) {
            mkdir($this->cache_dir, 0755, true);
        }
    }
    
    /**
     * Lấy dữ liệu từ cache
     */
    public function get($key, $max_age = 3600) {
        $cache_file = $this->cache_dir . $key . '_' . $this->lang . '.json';
        
        if (!file_exists($cache_file)) {
            return false;
        }
        
        // Kiểm tra thời gian cache
        $file_time = filemtime($cache_file);
        if (time() - $file_time > $max_age) {
            unlink($cache_file);
            return false;
        }
        
        // Kiểm tra cache có phải của ngày hôm nay không
        $cache_date = date('Y-m-d', $file_time);
        $today = date('Y-m-d');
        if ($cache_date !== $today) {
            unlink($cache_file);
            return false;
        }
        
        $content = file_get_contents($cache_file);
        return json_decode($content, true);
    }
    
    /**
     * Lưu dữ liệu vào cache
     */
    public function set($key, $data) {
        $cache_file = $this->cache_dir . $key . '_' . $this->lang . '.json';
        $cache_data = [
            'data' => $data,
            'cached_at' => date('Y-m-d H:i:s'),
            'lang' => $this->lang
        ];
        
        return file_put_contents($cache_file, json_encode($cache_data, JSON_PRETTY_PRINT));
    }
    
    /**
     * Xóa cache
     */
    public function delete($key) {
        $cache_file = $this->cache_dir . $key . '_' . $this->lang . '.json';
        if (file_exists($cache_file)) {
            return unlink($cache_file);
        }
        return true;
    }
    
    /**
     * Xóa tất cả cache
     */
    public function clear() {
        $files = glob($this->cache_dir . '*_' . $this->lang . '.json');
        $deleted = 0;
        foreach ($files as $file) {
            if (unlink($file)) {
                $deleted++;
            }
        }
        return $deleted;
    }
    
    /**
     * Load dữ liệu theme
     */
    public function loadThemeData() {
        
        // Games Categories
        $games_categories = (new FastModel('fast_terms'))
            ->where('posttype', 'posts')
            ->where('type', 'category')
            ->where('parent', 111)
            ->where('lang', $this->lang)
            ->get();
        
        // Apps Categories
        $apps_categories = (new FastModel('fast_terms'))
            ->where('posttype', 'posts')
            ->where('type', 'category')
            ->where('parent', 112)
            ->where('lang', $this->lang)
            ->get();
        
        // Footer Links
        $footer_links = [
            'information' => [
                ['name' => 'About us', 'url' => '/page/about'],
                ['name' => 'Contact', 'url' => '/page/contact']
            ],
            'products' => [
                ['name' => 'APK Downloader', 'url' => '/'],
                ['name' => 'APKMODY Installer', 'url' => '/apps/apkmody-installer']
            ],
            'legal' => [
                ['name' => 'Terms of service', 'url' => '/page/terms-of-service'],
                ['name' => 'Privacy policy', 'url' => '/page/privacy-policy']
            ],
            'languages' => [
                ['name' => 'English', 'url' => '/'],
                ['name' => 'Tiếng Việt', 'url' => '/vi/']
            ]
        ];
        
        // Lưu vào cache
        $this->set('games_categories', $games_categories);
        $this->set('apps_categories', $apps_categories);
        $this->set('footer_links', $footer_links);
        
        return [
            'games_categories' => $games_categories,
            'apps_categories' => $apps_categories,
            'footer_links' => $footer_links
        ];
    }
    
    /**
     * Lấy thông tin cache
     */
    public function getInfo() {
        $files = glob($this->cache_dir . '*_' . $this->lang . '.json');
        $info = [];
        
        foreach ($files as $file) {
            $info[] = [
                'file' => basename($file),
                'size' => filesize($file),
                'created' => date('Y-m-d H:i:s', filectime($file)),
                'modified' => date('Y-m-d H:i:s', filemtime($file)),
                'age' => time() - filemtime($file)
            ];
        }
        
        return $info;
    }
}

// Tạo instance global
$theme_cache = new ThemeCacheManager();
