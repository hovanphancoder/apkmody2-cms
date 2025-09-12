<?php
App\Libraries\Fastlang::load('Homepage');

// ===== LẤY DỮ LIỆU TRANG HIỆN TẠI =====
// Lấy thông tin trang hiện tại từ database
$current_page = get_current_page();
$page_data = null;

if ($current_page && isset($current_page['id'])) {
    // Lấy dữ liệu chi tiết của trang
    $page_data = get_post([
        'id' => $current_page['id'],
        'posttype' => 'pages',
        'withCategories' => true,
        'active' => true
    ]);
}

// Lấy nội dung từ trường content hoặc description
$page_content = '';
if ($page_data) {
    $page_content = $page_data['content'] ?? $page_data['description'] ?? '';
    // Xử lý shortcode nếu có
    if (!empty($page_content)) {
        $page_content = do_shortcode($page_content);
    }
}

//Get Object Data for this Pages
$locale = APP_LANG.'_'.strtoupper(lang_country(APP_LANG));
get_template('_metas/meta_index', ['locale' => $locale]);
?>

<!-- Page Content Section -->
<section>
    <div class="container">
        <?php if (!empty($page_content)): ?>
            <div class="page-content">
                <?php echo $page_content; ?>
            </div>
        <?php else: ?>
            <!-- Fallback content nếu không có nội dung -->
            <div class="page-content">
                <h1><?php echo get_current_page_title(); ?></h1>
                <p><?php echo __('No content available for this page.', 'Không có nội dung cho trang này.'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>