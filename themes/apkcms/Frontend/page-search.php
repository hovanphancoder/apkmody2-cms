<?php
App\Libraries\Fastlang::load('Homepage');

// Load CSS assets (minified for production)
// get_template('_metas/css_assets');

// Load JavaScript assets
// \System\Libraries\Render::asset('js', theme_assets('Assets/js/script.min.js'), [
//     'area' => 'frontend', 
//     'location' => 'footer'
// ]);

//Get Object Data for this Pages
$locale = APP_LANG.'_'.strtoupper(lang_country(APP_LANG));
get_template('_metas/meta_page', ['locale' => $locale]);
$searchQuery = $_GET['s'];



$search_data = get_posts([
   'posttype' => 'posts',           // Sử dụng posttype 'posts'
   'perPage' => 20,                 // 20 results mỗi trang
   'withCategories' => true,        // Lấy categories
   'sort' => ['created_at', 'DESC'], // Sắp xếp theo ngày tạo mới nhất
   'paged' => S_GET('page', 1),     // Trang hiện tại từ URL
   'active' => true,                // Chỉ lấy bài active
   'search' => $searchQuery,       // Search query
   'searchcolumns' => ['title'],    // Tìm kiếm trong title
   'lang' => APP_LANG               // Thêm check ngôn ngữ
]);
?>

         <section>
            <div class="container">
                  <h1 class="font-size__medium no-margin" id="title-post">
                     <strong>Search Results</strong> 
                     <?php if (!empty($search_query)): ?>
                        <!-- <span>for: "<?php echo htmlspecialchars($search_query, ENT_QUOTES, 'UTF-8'); ?>"</span> -->
                     <?php endif; ?>
                  </h1>
                  
                  <?php
                  // Xử lý cấu trúc dữ liệu
                  $search_results = isset($search_data['data']) ? $search_data['data'] : $search_data;
                  $pagination = $search_data['pagination'] ?? [];
                  ?>
                  
                  <div class="flex-container">
                    <?php if (!empty($search_results)): ?>
                        <?php foreach ($search_results as $index => $post): ?>
                            <article class="flex-item">
                                <a href="<?php echo (APP_LANG === APP_LANG_DF) ? '/post/' . ($post['slug'] ?? '') : page_url($post['slug'] ?? '', 'posts'); ?>" class="app clickable" aria-label="<?php echo htmlspecialchars($post['title'] ?? 'Untitled', ENT_QUOTES, 'UTF-8'); ?>">
                                    <div class="app-icon">
                                        <?php
                                        $featured_image = '';
                                        if (!empty($post['feature'])) {
                                            $image_data = is_string($post['feature']) ? json_decode($post['feature'], true) : $post['feature'];
                                            if (isset($image_data['path'])) {
                                                $featured_image = rtrim(base_url(), '/') . '/uploads/' . $image_data['path'];
                                            }
                                        }
                                        if (empty($featured_image)) {
                                            $featured_image = 'https://via.placeholder.com/90x90/2196F3/FFFFFF?text=App';
                                        }
                                        ?>
                                        <img fetchpriority="<?php echo $index < 3 ? 'high' : 'low'; ?>"
                                             src="<?php echo htmlspecialchars($featured_image, ENT_QUOTES, 'UTF-8'); ?>"
                                             alt="<?php echo htmlspecialchars($post['title'] ?? 'Untitled', ENT_QUOTES, 'UTF-8'); ?> icon"
                                             width="90" height="90"
                                             loading="<?php echo $index < 3 ? 'eager' : 'lazy'; ?>"
                                             class="<?php echo $index >= 3 ? 'loaded' : ''; ?>">
                                    </div>
                                    <div class="app-name truncate">
                                        <h2 class="font-size__normal no-margin no-padding truncate"><?php echo htmlspecialchars($post['title'] ?? 'Untitled', ENT_QUOTES, 'UTF-8'); ?></h2>
                                        <div class="app-sub-text font-size__small color__gray truncate">
                                            <?php
                                            $version = $post['version'] ?? 'v1.0';
                                            $status = $post['status'] ?? 'Free';
                                            $genre = !empty($post['categories']) ? $post['categories'][0]['name'] ?? 'App' : 'App';
                                            echo htmlspecialchars($version . ' • ' . $status . ' • ' . $genre, ENT_QUOTES, 'UTF-8');
                                            ?>
                                        </div>
                                        <div class="app-tags font-size__small">
                                            <div class="app-rating">
                                                <?php
                                                $rating = $post['rating_avg'] ?? 0;
                                                for ($i = 1; $i <= 5; $i++):
                                                    $class = $i <= $rating ? 'star filled' : 'star';
                                                ?>
                                                    <span class="<?php echo $class; ?>"></span>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <span class="app-sub-action font-size__small">
                                            <span class="app-sub-action-button">
                                                Get
                                            </span>
                                        </span>
                                    </div>
                                </a>
                            </article>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="no-results">
                            <p>
                                <?php if (!empty($search_query)): ?>
                                    No results found for "<?php echo htmlspecialchars($search_query, ENT_QUOTES, 'UTF-8'); ?>"
                                <?php else: ?>
                                    Please enter a search term
                                <?php endif; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

<?php get_footer(); ?>