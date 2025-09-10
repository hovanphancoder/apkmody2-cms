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
get_template('_metas/meta_index', ['locale' => $locale]);

?>

     <!-- Apps Section -->
     <section>
            <div class="container">
                <div id="breadcrumb" class="font-size__small color__gray truncate"><span><span><a class="color__gray" href="/" aria-label="Home">Home</a></span> / <span class="color__gray" aria-current="page">Apps</span></span></div>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h1 class="font-size__larger">Apps</h1>
                </div>
                <div class="text-align__justify" style="font-size: 0.9em;">
                    <p>Add convenience to your phone with new apps updated on APKMODY. In this section, you can easily find different apps in every aspect such as watching movies, calculating, editing photos, finance, health… All of which have been researched, selected and trusted by us. Immediately download these applications to turn your phone into a “miniature library” with full of desirable utilities and entertainment.</p>
                </div>
                <div id="orderby" class="flex-cat-container">
                    <div class="flex-cat-item active" aria-label="Link"><a href="#" aria-label="Empty link">Updated</a></div>
                    <div class="flex-cat-item " aria-label="Link"><a href="/new" aria-label="New content">New</a></div>
                    <div class="flex-cat-item " aria-label="Link"><a href="/popular" aria-label="Popular content">Popular</a></div>
                    <div class="flex-cat-item " aria-label="Link"><a href="/premium" aria-label="Premium content">Premium</button></div>
                </div>
            </div>
        </section>

        <!-- Apps Section -->
        <section>
            <div class="container">
                <div class="flex-container">
                    <article class="flex-item"><a href="single-app.html?app= room-planner" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img fetchpriority="high" src="https://static.apkmody.com/play-lh.googleusercontent.com/e6kUFH_MspS1SZbCUDGVYnifmYmGkS9GnjD59NTcREArZ3WezoalwxJolzzpqLyZFUQ=s180-rw" alt="Room Planner icon" width="90" height="90"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">Room Planner</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v1271
                                    • Unlocked
                                    <span class="app-genre">
                                        • Art &amp; Design </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= avast-antivirus" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img fetchpriority="high" src="https://static.apkmody.com/play-lh.googleusercontent.com/iB6BymhdMsbDMyHddcNlv-a5isSKanuw8fOD9Y2A_qdVWIoU9nCl0XM_GYTskFm4V60=s180-rw" alt="Avast Antivirus icon" width="90" height="90"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">Avast Antivirus</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v25.17.1
                                    • Premium Unlocked
                                    <span class="app-genre">
                                        • Utilities </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= imprint" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img fetchpriority="high" src="https://static.apkmody.com/play-lh.googleusercontent.com/0l4M8q6BfoqPtzU88cBPwLSCeHo8RtxQfmjd_09Bu9ZqJFThSnAJ3p2nkzl1TLbPfkI=s180-rw" alt="Imprint icon" width="90" height="90"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">Imprint</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v3.4.3
                                    • Premium Unlocked
                                    <span class="app-genre">
                                        • Education </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= oculus" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/9FQK0AyVygCW__S12wPnysnzRNKJ1uxcev2aBwfgONKeSiqUIDqjHAYP4892yywhvA=s180-rw" alt="Meta Quest icon" width="90" height="90" class="loaded"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">Meta Quest</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v335.0.0.17.109
                                    <span class="app-genre">
                                        • Entertainment </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= toontap" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/SblkPuV4TJws08ei9XkebZz8y1Kw2ehD-PrPK6ZtCnlUxnWM_2sFCcuLO2IcIePZouc=s180-rw" alt="ToonTap icon" width="90" height="90" class="loaded"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">ToonTap</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v1.31.70
                                    • Pro Unlocked
                                    <span class="app-genre">
                                        • Photos &amp; Videos </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= bandlab" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/wfWpJxIMDymGBN2IxIrHjFqS1HD-JZbaLYO5d1Vly2yCtKLUiiDz38LxB3dMh8L1WTA=s180-rw" alt="BandLab icon" width="90" height="90" class="loaded"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">BandLab</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v11.6.2
                                    • Pro Unlocked
                                    <span class="app-genre">
                                        • Music &amp; Audio </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= babilala" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/mhb9RjCx7G7paMfKpXra4Gt33FcrbCQz7cPrILjm6d-VNSVYenAkPmpzN2UFdtvxJL-R=s180-rw" alt="Babilala icon" width="90" height="90" class="loaded"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">Babilala</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v2.53
                                    <span class="app-genre">
                                        • Education </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= perfect365" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/gG8W_LKwH7j7zHeYbQMQnStRq406uY7mIZIVCVAhtxKvnpMe5MYRi8xUQlnwl6ABYVs=s180-rw" alt="Perfect365 icon" width="90" height="90" class="loaded"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">Perfect365</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v10.5.26
                                    • Pro Unlocked
                                    <span class="app-genre">
                                        • Photos &amp; Videos </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= filmorago" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/CLFmTKx4N6WymzRPO5jsd_-bgDOj_YKPNKFfZIS9oiHzq8LOJM4P7dUTu0C6m57rDYE=s180-rw" alt="FilmoraGo icon" width="90" height="90" class="loaded"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">FilmoraGo</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v14.9.60
                                    • Premium Unlocked
                                    <span class="app-genre">
                                        • Photos &amp; Videos </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= cast-to-tv" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/4jy6KJtgO2ICYqUOg98wJ_SYuaROGudW-KibPjlhehxzCbsPHGmSNY8wIhyquvCqTqA=s180-rw" alt="Cast to TV icon" width="90" height="90" class="loaded"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">Cast to TV</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v12.269
                                    • Premium Unlocked
                                    <span class="app-genre">
                                        • Utilities </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= microsoft-teams" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/jKU64njy8urP89V1O63eJxMtvWjDGETPlHVIhDv9WZAYzsSxRWyWZkUlBJZj_HbkHA=s180-rw" alt="Microsoft Teams icon" width="90" height="90" class="loaded"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">Microsoft Teams</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v1416/1.0.0.2025171603
                                    <span class="app-genre">
                                        • Utilities </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                    <article class="flex-item"><a href="single-app.html?app= real-drum" class="app clickable" aria-label="View app">
                            <div class="app-icon">
                                <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/A32tc8f0mo23wYkdY8Aax8mpJScTAI-rIELt9VgyULdpPLq4_GPMkT17YOSdkLw--w=s180-rw" alt="Real Drum icon" width="90" height="90" class="loaded"></div>
                            <div class="app-name truncate">
                                <h2 class="font-size__normal no-margin no-padding truncate">Real Drum</h2>
                                <div class="app-sub-text font-size__small color__gray truncate">v11.11.3
                                    • Premium Unlocked
                                    <span class="app-genre">
                                        • Music &amp; Audio </span></div>
                                <div class="app-tags font-size__small">
                                    <div class="app-rating">
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span>
                                        <span class="star "></span></div>
                                </div>
                                <span class="app-sub-action font-size__small">
                                    <span class="app-sub-action-button">
                                        Get </span>
                                </span>
                            </div>
                        </a></article>
                </div>
            </div>
        </section>

    
        <!-- Pagination -->
        <section>
            <div class="container">
                <div class="wp-container archive-pagination">
                    <div class="paginate-button active"><span aria-current="page" class="button clickable">1</span></div>
                    <div class="paginate-button"><a class="button clickable" href="single-app.html?page=2" aria-label="Go to page 2">2</a></div>
                    <div class="paginate-button"><a class="button clickable" href="single-app.html?page=311" aria-label="Go to page 311">311</a></div>
                    <div class="paginate-button"><a class="next button clickable" href="single-app.html?page=2" aria-label="Next page"><span class="svg-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 -960 960 960">
                                    <path d="M517.85-480 354.92-642.92q-8.3-8.31-8.5-20.89-.19-12.57 8.5-21.27 8.7-8.69 21.08-8.69 12.38 0 21.08 8.69l179.77 179.77q5.61 5.62 7.92 11.85 2.31 6.23 2.31 13.46t-2.31 13.46q-2.31 6.23-7.92 11.85L397.08-274.92q-8.31 8.3-20.89 8.5-12.57.19-21.27-8.5-8.69-8.7-8.69-21.08 0-12.38 8.69-21.08L517.85-480Z"></path>
                                </svg></span> </a></div>
                </div>
            </div>
        </section>


<?php get_footer(); ?>