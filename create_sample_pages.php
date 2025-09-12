<?php
// Bypass security for testing
define('APP_ENV', 'development');
require_once 'init';

use App\Models\PostsModel;

echo "=== TẠO TRANG MẪU ===\n";

$postsModel = new PostsModel('pages', 'en');

// Kiểm tra bảng pages có tồn tại không
if (!$postsModel->checkPosttypeExists()) {
    echo "❌ Bảng pages chưa tồn tại!\n";
    echo "Cần tạo posttype 'pages' trong backend trước.\n";
    exit;
}

echo "✅ Bảng pages đã tồn tại!\n\n";

// Dữ liệu trang mẫu
$sample_pages = [
    [
        'title' => 'About Us',
        'slug' => 'about-us',
        'content' => '<h1>About Our Company</h1><p>We are a leading technology company specializing in mobile applications and web development. Our mission is to provide innovative solutions that make technology accessible to everyone.</p><h2>Our Team</h2><p>We have a dedicated team of developers, designers, and content creators who work tirelessly to bring you the best mobile applications and gaming experiences.</p>',
        'description' => 'Learn more about our company and team',
        'status' => 'active',
        'lang' => 'en'
    ],
    [
        'title' => 'Contact Us',
        'slug' => 'contact',
        'content' => '<h1>Get in Touch</h1><p>Have questions or feedback? We\'d love to hear from you!</p><h2>Contact Information</h2><ul><li>Email: contact@apkmody.com</li><li>Phone: +1 (555) 123-4567</li><li>Address: 123 Tech Street, Digital City, DC 12345</li></ul>',
        'description' => 'Contact information and support',
        'status' => 'active',
        'lang' => 'en'
    ],
    [
        'title' => 'Privacy Policy',
        'slug' => 'privacy-policy',
        'content' => '<h1>Privacy Policy</h1><p>Your privacy is important to us. This privacy policy explains how we collect, use, and protect your information.</p><h2>Information We Collect</h2><p>We collect information you provide directly to us, such as when you create an account or contact us for support.</p>',
        'description' => 'Our privacy policy and data protection practices',
        'status' => 'active',
        'lang' => 'en'
    ]
];

// Tạo các trang mẫu
foreach ($sample_pages as $page_data) {
    echo "Creating page: {$page_data['title']}...\n";
    
    try {
        $result = $postsModel->addPost($postsModel->table, $page_data);
        if ($result) {
            echo "✅ Created: {$page_data['title']} (slug: {$page_data['slug']})\n";
        } else {
            echo "❌ Failed to create: {$page_data['title']}\n";
        }
    } catch (Exception $e) {
        echo "❌ Error creating {$page_data['title']}: " . $e->getMessage() . "\n";
    }
}

echo "\n=== KIỂM TRA TRANG ĐÃ TẠO ===\n";

// Lấy danh sách trang
$pages = $postsModel->getPostsLists('status = ?', ['active'], 'id DESC', 1, 10);
echo "Found " . count($pages) . " pages:\n";

foreach ($pages as $page) {
    echo "- ID: {$page['id']}, Title: {$page['title']}, Slug: {$page['slug']}\n";
}

echo "\n=== HOÀN THÀNH ===\n";
echo "Bây giờ bạn có thể truy cập:\n";
echo "- http://your-domain.com/about-us\n";
echo "- http://your-domain.com/contact\n";
echo "- http://your-domain.com/privacy-policy\n";
