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

<section>
            <div class="container">

                <!-- breadcrumb -->
                <div class="entry-content">
                    <div id="breadcrumb" class="margin-bottom-15 font-size__small color__gray truncate"><span><span>
                                <a class="color__gray" href="/" aria-label="Home">Home</a></span> / <span><a class="color__gray" href="/games" aria-label="Games">Games</a></span> / <span><a class="color__gray" href="/games/football">Football</a></span> / <span class="color__gray" aria-current="page">Football League 2025</span></span>
                    </div>
                </div>

                <!-- Header App  -->
                <div class="app app__large">
                    <div class="app-icon">
                        <img fetchpriority="high" src="https://static.apkmody.com/play-lh.googleusercontent.com/koXfW3JR_z4_3KihWWL0k-Xhdc8Ak6kSMFrQFz2FqTULKuiC5L0w_LTTA37LFWYcF98=s180-rw" alt="Football League 2025 icon" width="90" height="90">
                    </div>
                    <div class="app-name">
                        <h1 class="font-size__medium no-margin"><strong>Football League 2025</strong> <span> MOD APK (Menu, Unlimited Money) v0.1.63</span></h1><span class="font-size__small truncate"><a href="#publisher-items" aria-label="Jump to publisher-items">MOBILE SOCCER</a></span>
                    </div>
                </div>
                <!-- screenshots -->
                <div class="screenshots-container">
                    <div class="screenshots horizontal-scroll" id="lightgallery-container">
                        <a class="screenshot" data-src="https://static.apkmody.com/play-lh.googleusercontent.com/ockaaHS5azBAVk_gXDAduOqqpSN8XYiTVIt6EYFkIkFpZ-eOOcw52NjTiWiiRsYPTAIk=-rw" data-lg-id="9c1f60f5-acfd-43ed-8f53-bad7a79b4817" aria-label="View screenshot"><img class="horizontal-screenshot" width="512" height="288" decoding="async" fetchpriority="high" src="https://static.apkmody.com/play-lh.googleusercontent.com/ockaaHS5azBAVk_gXDAduOqqpSN8XYiTVIt6EYFkIkFpZ-eOOcw52NjTiWiiRsYPTAIk=-rw" alt="Football League 2025 screenshot 1"></a><a class="screenshot" data-src="https://static.apkmody.com/play-lh.googleusercontent.com/hgpGsTiRbCVVpXx3hT3vyff_YRVQ3yLUHaXi3K6Cg2-BSsB4IC-sQNWW8f3YuyWuOa8=-rw" data-lg-id="c3ba47c3-320c-440a-94cc-daef04d8bd4e" aria-label="View screenshot"><img class="horizontal-screenshot loaded" width="512" height="288" decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/hgpGsTiRbCVVpXx3hT3vyff_YRVQ3yLUHaXi3K6Cg2-BSsB4IC-sQNWW8f3YuyWuOa8=-rw" alt="Football League 2025 screenshot 2"></a><a class="screenshot" data-src="https://static.apkmody.com/play-lh.googleusercontent.com/-HBcX-cd7HGDu5g-XH2d9KbQEmd8ZpeFnd3hj4uw50PJ-UL7SzdLAKV9SPljlHP8dk5j=-rw" data-lg-id="c326c8b4-9797-41fc-aba4-5fe69c15ac4d" aria-label="View screenshot"><img class="horizontal-screenshot loaded" width="512" height="288" decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/-HBcX-cd7HGDu5g-XH2d9KbQEmd8ZpeFnd3hj4uw50PJ-UL7SzdLAKV9SPljlHP8dk5j=-rw" alt="Football League 2025 screenshot 3"></a><a class="screenshot" data-src="https://static.apkmody.com/play-lh.googleusercontent.com/5IDRuyauJwzBed8m9cvDZg8l5YK9AaKO1UPEvQPJE1I4X858Iq05v6LnrFLwIs1wCfn-=-rw" data-lg-id="3b6e3232-8143-4d07-9b0d-020ee63a28f1" aria-label="View screenshot"><img class="horizontal-screenshot loaded" width="512" height="288" decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/5IDRuyauJwzBed8m9cvDZg8l5YK9AaKO1UPEvQPJE1I4X858Iq05v6LnrFLwIs1wCfn-=-rw" alt="Football League 2025 screenshot 4"></a><a class="screenshot" data-src="https://static.apkmody.com/play-lh.googleusercontent.com/egBVYHYXhodzaOcovqAe0zeGf8_JvMpkG1W1R7phmo3NWKunDLjDvNAtxDSVke42056P=-rw" data-lg-id="642d686e-36c2-4bd1-a7e7-f33c5a47a2d8" aria-label="View screenshot"><img class="horizontal-screenshot loaded" width="512" height="288" decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/egBVYHYXhodzaOcovqAe0zeGf8_JvMpkG1W1R7phmo3NWKunDLjDvNAtxDSVke42056P=-rw" alt="Football League 2025 screenshot 5"></a><a class="screenshot" data-src="https://static.apkmody.com/play-lh.googleusercontent.com/eEvYdVtG5tjzCH9FCRAZ0FhyAulkGtlyDpCjgX9e2tJ76JhpWzhsoWNdDtvAF-inemI=-rw" data-lg-id="a7468aea-9df4-43c8-be95-50ae1bd47802" aria-label="View screenshot"><img class="horizontal-screenshot loaded" width="512" height="288" decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/eEvYdVtG5tjzCH9FCRAZ0FhyAulkGtlyDpCjgX9e2tJ76JhpWzhsoWNdDtvAF-inemI=-rw" alt="Football League 2025 screenshot 6"></a><a class="screenshot" data-src="https://static.apkmody.com/play-lh.googleusercontent.com/XaQu51esZ7U233neypZq1_AwXCHH3fLbjxfy3GDN9yHItdiOJ_aUEwdwlZ0GjGUyAk2V=-rw" data-lg-id="fc6167af-903c-4777-b579-3911cc2eaf52" aria-label="View screenshot"><img class="horizontal-screenshot loaded" width="512" height="288" decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/XaQu51esZ7U233neypZq1_AwXCHH3fLbjxfy3GDN9yHItdiOJ_aUEwdwlZ0GjGUyAk2V=-rw" alt="Football League 2025 screenshot 7"></a></div>
                </div>
                <!-- app info -->
                <div class="entry-content border-block" id="app-info">
                    <h2 class="hide">App Info</h2>
                    <figure class="wp-block-table margin-bottom-5">
                        <table class="has-fixed-layout">
                            <tbody>
                                <tr>
                                    <th class="text-align__left font-size__small color__gray">Updated On</th>
                                    <td class="text-align__right"><time datetime="2025-09-04T13:15:19+07:00">September 4, 2025</time></td>
                                </tr>
                                <tr>
                                    <th class="text-align__left font-size__small color__gray">Google Play ID</th>
                                    <td class="text-align__right"><span class="truncate"><a class="color__black" href="https://play.google.com/store/apps/details?id=com.football.soccer.league" rel="noopener" target="_blank">com.football.soccer.league</a></span></td>
                                </tr>
                                <tr>
                                    <th class="text-align__left font-size__small color__gray">Category</th>
                                    <td class="text-align__right"><span class="truncate"><a class="color__black" href="/games/football">Football</a></span></td>
                                </tr>
                                <tr>
                                    <th class="text-align__left font-size__small color__gray">Version</th>
                                    <td class="text-align__right"><span class="truncate">0.1.63</span></td>
                                </tr>
                                <tr>
                                    <th class="text-align__left font-size__small color__gray">Size</th>
                                    <td class="text-align__right">204 MB</td>
                                </tr>
                                <tr>
                                    <th class="text-align__left font-size__small color__gray">MOD Features</th>
                                    <td class="text-align__right" aria-label="Link"><a href="#h-mod-apk-version-of-football-league-2025" class="color__black truncate">Menu, Unlimited Money</a></td>
                                </tr>
                                <tr>
                                    <th class="text-align__left font-size__small color__gray">Requires</th>
                                    <td class="text-align__right"><span class="color__green"><span class="svg-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 -960 960 960">
                                                    <path d="M73.85-259.62q8.61-98.92 60.7-181.94 52.1-83.01 138.76-131.9l-68.23-118q-5.62-8.62-2.81-17.65 2.81-9.04 12.04-14.04 8-4.62 16.85-1.81 8.84 2.81 14.38 11.13l68.31 118.29q79.38-33.27 166.15-33.27 86.77 0 166.15 33.27l68.31-118.29q5.54-8.32 14.38-11.13 8.85-2.81 16.85 1.81 9.23 5 12.04 14.04 2.81 9.03-2.81 17.65l-68.23 118q86.66 48.89 138.76 131.9 52.09 83.02 60.7 181.94H73.85Zm221.59-101.53q19.41 0 32.75-13.4 13.35-13.41 13.35-32.81 0-19.41-13.4-32.76-13.4-13.34-32.81-13.34-19.41 0-32.75 13.4-13.35 13.4-13.35 32.81 0 19.4 13.4 32.75 13.4 13.35 32.81 13.35Zm369.23 0q19.41 0 32.75-13.4 13.35-13.41 13.35-32.81 0-19.41-13.4-32.76-13.4-13.34-32.81-13.34-19.41 0-32.75 13.4-13.35 13.4-13.35 32.81 0 19.4 13.4 32.75 13.4 13.35 32.81 13.35Z"></path>
                                                </svg></span> </span> Android 5.0</td>
                                </tr>
                                <tr class="collapse-row">
                                    <th class="text-align__left font-size__small color__gray">Price</th>
                                    <td class="text-align__right">Free</td>
                                </tr>
                                <tr class="collapse-row">
                                    <th class="text-align__left font-size__small color__gray">Content Rating</th>
                                    <td class="text-align__right">Everyone</td>
                                </tr>
                                <tr class="collapse-row">
                                    <th class="text-align__left font-size__small color__gray">Internet Required</th>
                                    <td class="text-align__right">Not Required</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <span class="block text-align__center color__gray" id="unfold-table"><span class="svg-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 -960 960 960">
                                <path d="M249.23-420q-24.75 0-42.37-17.63-17.63-17.62-17.63-42.37 0-24.75 17.63-42.37Q224.48-540 249.23-540q24.75 0 42.38 17.63 17.62 17.62 17.62 42.37 0 24.75-17.62 42.37Q273.98-420 249.23-420ZM480-420q-24.75 0-42.37-17.63Q420-455.25 420-480q0-24.75 17.63-42.37Q455.25-540 480-540q24.75 0 42.37 17.63Q540-504.75 540-480q0 24.75-17.63 42.37Q504.75-420 480-420Zm230.77 0q-24.75 0-42.38-17.63-17.62-17.62-17.62-42.37 0-24.75 17.62-42.37Q686.02-540 710.77-540q24.75 0 42.37 17.63 17.63 17.62 17.63 42.37 0 24.75-17.63 42.37Q735.52-420 710.77-420Z"></path>
                            </svg></span> </span>
                </div>
                <!-- Button download -->
                <a id="main-download-button" href="/games/football-league-2023/download" class="button button__blue clickable" aria-label="Download now">
                    <span class="svg-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 -960 960 960">
                            <path d="M480-343.54q-7.23 0-13.46-2.31-6.23-2.3-11.85-7.92L330.31-478.15q-8.92-8.93-8.81-20.89.12-11.96 8.81-21.27 9.31-9.3 21.38-9.61 12.08-.31 21.39 9L450-444v-306q0-12.77 8.62-21.38Q467.23-780 480-780t21.38 8.62Q510-762.77 510-750v306l76.92-76.92q8.93-8.92 21.19-8.81 12.27.12 21.58 9.42 8.69 9.31 9 21.08.31 11.77-9 21.08L505.31-353.77q-5.62 5.62-11.85 7.92-6.23 2.31-13.46 2.31ZM252.31-180Q222-180 201-201q-21-21-21-51.31v-78.46q0-12.77 8.62-21.38 8.61-8.62 21.38-8.62t21.38 8.62q8.62 8.61 8.62 21.38v78.46q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85h455.38q4.62 0 8.46-3.85 3.85-3.84 3.85-8.46v-78.46q0-12.77 8.62-21.38 8.61-8.62 21.38-8.62t21.38 8.62q8.62 8.61 8.62 21.38v78.46Q780-222 759-201q-21 21-51.31 21H252.31Z"></path>
                        </svg>
                    </span> Download
                </a>
                <a id="join-telegram-button" href="https://t.me/" class="button button__blue clickable" aria-label="Join Telegram">
                    <span class="svg-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 240 240">
                            <path d="M120 0C53.73 0 0 53.73 0 120s53.73 120 120 120 120-53.73 120-120S186.27 0 120 0zm56.69 80.47l-19.92 94.23c-1.5 6.77-5.52 8.46-11.18 5.27l-30.89-22.8-14.9 14.34c-1.64 1.64-3.01 3.01-6.17 3.01l2.22-31.53 57.4-51.78c2.49-2.22-0.54-3.48-3.86-1.26l-71.01 44.74-30.56-9.55c-6.65-2.07-6.77-6.65 1.38-9.85l119.3-46.05c5.52-2.07 10.34 1.26 8.61 9.53z" fill="#fff" />
                        </svg>
                    </span>
                    Join Telegram
                </a>
                <!-- Contents -->
                <div class="entry-block entry-content main-entry-content">
                    <div class="entry-author" href="" aria-label="Author profile">
                        <a class="entry-author" href="/about/anh-pham" aria-label="Author profile">
                            <img decoding="async" loading="lazy" src="images/editors/anhpham.jpg" alt="Author avatar" width="36" height="36" class="avatar circle loaded">
                            <div class="font-size__small">
                                <span>Written by</span>
                                <strong>Anh Pham</strong>
                            </div>
                        </a>
                        <div class="font-size__small"><button id="toc-trigger" aria-label="Toggle table of contents">Show Contents</button></div>
                    </div>
                    <details id="table-of-content" class="table-of-contents">
                        <summary class="pointer"></summary>
                        <ul></ul>
                    </details>
                    <p>Playing Football League 2025 you will have to admit this is a few highly realistic football games where everything on the pitch is extremely clean, extremely sharp. Motion effects, controls are also very accurate. It’s rare to find a football game that makes players feel relaxed and not confused right from the start.</p>
                    <h2 class="font-size__medium wp-block-heading" id="h-introduce-about-football-league-2025">Introduce about Football League 2025</h2>
                    <p>Experience football in depth with a clean interface!</p>
                    <h3 class="font-size__normal wp-block-heading" id="h-football-game-with-clean-original-interface">Football game with clean, original interface</h3>
                    <p>You have known many soccer games across platforms. But probably like me, many times I feel a little sad when I see the interface of the field matches.</p>
                    <p>For many reasons, the previous football matches played always had something confusing. Sometimes because the game is greedy for too many control details, sometimes because of a detailed set of indicators in the corners of the screen. Some games are due to the wrong shooting angle, looking too closely at the player and forgetting the overall look. In summary, the most common drawback in other football games is that the graphic interface is not clean, not clear, and creates a feeling of originality.</p>
                    <p>Fortunately, I have found a game that meets the criteria of being clean, minimalist and completely pure as I wished when I tried Football League 2025.</p>
                    <h3 class="font-size__normal wp-block-heading" id="h-whats-special-about-football-league-2025">What’s special about Football League 2025?</h3>
                    <p>First, as I just shared above, Football League 2025 will give you an extremely clean football playing experience on bright, modern graphics, reducing all unnecessary details to fully focus on the game. pitch. If you have experience playing football, you must have been very annoyed with games that contain many details that make the pitch no longer look pristine. Feeling a game of veteran focus will increase your inspiration to play football many times over, while providing a much more comfortable, lighter experience.</p>
                    <p>Second, Football League 2025 is full of good features, players with smart AI. You can execute various soccer strategies with changing formations with soccer stars. Correspondingly, on the other side, your AI opponent also depends on your strategy to change the arrangement of people on the pitch, responding well to any changes from the player, making the match always happen coherently, smoothly and natural. The feeling of reciprocal interaction is therefore also going well.</p>
                    <p>Third, Football League 2025 has accurate moving and animation effects. Every shot, every pass on the pitch, especially the scoring phase, is presented beautifully, properly, and transparently. You can clearly see each striker, the player’s ball appears first on the pitch. The goals and stunts have never been this beautiful.</p>
                    <h3 class="font-size__normal wp-block-heading" id="h-is-it-difficult-to-control-everything-on-the-field">Is it difficult to control everything on the field?</h3>
                    <p>When playing Football League 2025, the freedom and control of the player is almost unlimited. You can set your own football strategy for your team, then take control of the entire strategy execution process on the pitch yourself. Pressure your opponents, create stunts and score goals in your own way.</p>
                    <p>Your ultimate goal in this game is to make your ideal team the world champion. Control strategy, formation, players, choose matches, focus talent on the team, change tactics that don’t fit… You have all the necessary rights to become a team manager.</p>
                    <p>Not to mention, once you start controlling the players in battle, you will enjoy a concise, intuitive, minimalist control tool in one corner of the screen. Especially each action gives extremely high response speed, the player instantly executes every control you give, making the game never lag or have lag points.</p>
                    <h3 class="font-size__normal wp-block-heading" id="h-many-competitive-game-modes">Many competitive game modes</h3>
                    <p>Unlike many other soccer games where the game modes are made just to “fill in” the gaps in gameplay. Football League 2025 offers game modes as a platform for you to showcase your team management and game control talents, in different ways, not a form of “filling in the void”. Each mode itself is full in terms of gameplay, complete in terms of form and mission. You play to feel the difference in each gameplay.</p>
                    <p>Players can choose to follow the Campaign Mode to follow the process of forming their ideal team, conquering all over the world, and pursuing their dream of becoming a world legend. You can choose to play against your friends to compete for your team management skills, or you can compete with players around the world on a list of the most talented managers. Every mode is fun, with comprehensive controls and a clean, dreamlike game interface.</p>
                    <h3 class="font-size__normal wp-block-heading" id="h-impressive-numbers-in-football-league-2025">Impressive numbers in Football League 2025</h3>
                    <p>Football League 2025 currently has more than 100 national teams and 330 world famous football clubs. You can choose any team, country or club to start different game modes of your choice.</p>
                    <p>To reach even more global players, Football League 2025 offers multilingual support that can be quickly customized in the menu. There is support for using a controller to control in case you are used to playing console games before.</p>
                    <h3 class="font-size__normal wp-block-heading" id="h-hundreds-of-top-leagues-in-the-world">Hundreds of top leagues in the world</h3>
                    <p>The game also brings countless professional football matches and tournaments across the region. Some prominent names can be mentioned such as European Championship Cup, South American Championship Cup, English Cup, French Super Cup, Brazil Super Cup. Each match is set up in a separate stadium space, with different colors of participating teams, fans and commentators. Every time you play, choose a new team, participate in a new match, you obviously have a whole new experience.</p>
                    <div class="wp-block-group">
                        <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                            <h2 class="font-size__medium wp-block-heading" id="h-mod-apk-version-of-football-league-2025">MOD APK version of Football League 2025</h2>
                            <h3 class="font-size__normal wp-block-heading" id="h-mod-feature">MOD feature</h3>
                            <ul class="wp-block-list">
                                <li>Menu</li>
                                <li>Unlimited Money</li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="font-size__medium wp-block-heading" id="h-download-football-league-2025-mod-apk-for-android">Download Football League 2025 MOD APK for Android</h2>
                    <p>If you love football games, Football League 2025 is definitely not to be missed. Professional football game with clean graphics, attractive gameplay, instantaneous speed control, accurate physics will bring you an unforgettable football playing experience for many years.</p>
                    <div class="wp-container-flex-center font-size__small">
                        <a class="button button__small no-border no-border-radius color__blue" href="#comments" aria-label="View comments">
                            <span class="svg-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 56 56">
                                    <path d="M42.1950364,4.70590037 C50.2325622,7.05798578 56,13.4885137 56,21.0515337 C56,26.1995677 53.3256367,30.8267622 49.0827722,33.9966405 L48.7137694,34.2597431 L48.1260756,34.6661104 L48.0663422,34.7054653 C46.5765241,35.8053078 47.498083,38.1200638 48.8783303,39.9705116 L49.1339041,40.3014664 C49.2204904,40.4098301 49.3083268,40.5161145 49.3969786,40.6199458 L49.6649456,40.9237066 L49.9022318,41.1800346 L50.0803516,41.3846967 C50.6153298,42.0299765 50.562871,42.3068231 49.926109,42.2403769 L49.7175544,42.2101694 C49.6045157,42.1899414 49.4783372,42.1620459 49.3390296,42.1265677 C47.7257449,41.7172882 46.4472546,41.2110785 45.3916999,40.6949439 L44.9199432,40.45634 C44.767696,40.3767817 44.6203181,40.2973053 44.4774021,40.2182276 L44.0616327,39.9825075 L43.6701911,39.7510807 L42.1442339,38.8137564 L41.8429107,38.6399208 L41.5500301,38.4827343 C40.7780995,38.0874586 40.0701543,37.8900488 39.2176494,38.0527145 L39.0491803,38.0891982 C37.8762441,38.2633863 36.6706309,38.3547919 35.4375,38.3547919 C34.7381162,38.3547919 34.0468863,38.3254083 33.3654587,38.2680281 C42.187391,34.8486247 48.3089659,27.3594362 48.3089659,18.6706341 C48.3089659,13.4293219 46.0806325,8.62426855 42.3754797,4.88628429 L42.1950364,4.70590037 Z M22.60125,0 C35.0833555,0 45.2025,8.49153689 45.2025,18.9641803 C45.2025,29.4387141 35.0833555,37.930251 22.60125,37.930251 C21.4717546,37.930251 20.3632633,37.8606749 19.279058,37.7269926 L18.6239139,37.6372439 C17.7193374,37.4216018 16.9692681,37.5679148 16.1806043,37.9264024 L15.8826691,38.0704884 L15.8826691,38.0704884 L15.5788527,38.2327105 L15.5788527,38.2327105 L15.2668923,38.4113135 L15.2668923,38.4113135 L14.4365106,38.9179687 L14.4365106,38.9179687 L13.8923518,39.2544298 L13.8923518,39.2544298 L13.3044111,39.6080014 L13.3044111,39.6080014 L12.8843559,39.8502962 L12.8843559,39.8502962 L12.4391847,40.0958077 C12.3627708,40.1368968 12.2852162,40.1780468 12.2064736,40.2192211 L11.7193856,40.4662664 C10.5478251,41.0420212 9.12495048,41.6082087 7.32139857,42.0644877 C7.22283864,42.0895188 7.13025777,42.1111063 7.04365905,42.1292255 L6.80181244,42.1731529 C5.98086794,42.2958864 5.88413878,41.9959452 6.51575156,41.2403166 L6.70607075,41.0229133 L6.70607075,41.0229133 L6.81477971,40.9056916 C6.90483001,40.8103998 6.99473189,40.7123779 7.08412638,40.6119338 L7.35042872,40.3036425 L7.35042872,40.3036425 L7.6115329,39.9826647 L7.6115329,39.9826647 L7.8652851,39.6508474 L7.8652851,39.6508474 L8.10953147,39.3100378 L8.10953147,39.3100378 L8.34211821,38.9620828 C8.37979137,38.9035975 8.41688897,38.8448914 8.45336614,38.786003 L8.66442499,38.4307932 C9.64508761,36.7063495 10.0284927,34.8933305 8.72027152,33.9302305 L7.76682092,33.2712283 L7.76682092,33.2712283 L7.60306352,33.1532889 L7.60306352,33.1532889 C2.93952357,29.678791 0,24.6069314 0,18.9641803 C0,8.49153689 10.1172541,0 22.60125,0 Z" transform="translate(0 7)"></path>
                                </svg></span> <span class="link-text">Comment </span></a>
                    </div>

                </div>
                <!-- versions -->
                <div class="entry-content" id="main-download-list">
                    <h2 class="font-size__medium no-margin">Available Versions</h2>
                    <div class="download-list margin-top-10"><a href="/games/football-league-2023/download/0" class="clickable" aria-label="Download football-league-2023">
                            <div class="download-item">
                                <div class="download-item-icon"><img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/koXfW3JR_z4_3KihWWL0k-Xhdc8Ak6kSMFrQFz2FqTULKuiC5L0w_LTTA37LFWYcF98=s180-rw" alt="Football League 2025 icon" width="90" height="90" class="loaded"></div>
                                <div class="download-item-name">
                                    <div class="color__blue">Football League 2025 v0.1.61</div>
                                    <div class="color__gray font-size__small"><span class="app-tag">APK</span><span class="app-tag">MOD Menu</span>Unlimited Money</div>
                                </div>
                            </div>
                        </a aria-label="Link"><a href="/games/football-league-2023/download/1" class="clickable">
                            <div class="download-item">
                                <div class="download-item-icon"><img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/koXfW3JR_z4_3KihWWL0k-Xhdc8Ak6kSMFrQFz2FqTULKuiC5L0w_LTTA37LFWYcF98=s180-rw" alt="Football League 2025 icon" width="90" height="90" class="loaded"></div>
                                <div class="download-item-name">
                                    <div class="color__blue">Football League 2025 v0.1.63</div>
                                    <div class="color__gray font-size__small"><span class="app-tag">XAPK</span><span class="app-tag">Original</span></div>
                                </div>
                            </div>
                        </a></div>
                </div>
                <!-- related -->
                <div class=" related-posts">
                    <div class="entry-content entry-block">
                        <h2 class="font-size__medium no-margin">Recommended For You</h2>
                        <div class="flex-container-2 horizontal-scroll">
                            <article class="flex-item"><a href="/games/dream-league-soccer-2025" class="app clickable" aria-label="dream-league-soccer-2025 game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/lpM-C7HKz9mZO02AgKU3i0kqCzXVLgOP3-C3HA-ZPw2L1przi79Xw-IgVKqCeCkJsh4=s180-rw" alt="Dream League Soccer 2025 icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">Dream League Soccer 2025</h3>
                                    </div>
                                </a></article>
                            <article class="flex-item"><a href="/games/soccer-manager-2025" class="app clickable" aria-label="soccer-manager-2025 game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/fTxtPTiZz9441g5EDb5ChqyM3QeNXWpElvnzwt2n88_9m5uBz36o-WfUW_eHNO7njcjc=s180-rw" alt="Soccer Manager 2025 icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">Soccer Manager 2025</h3>
                                    </div>
                                </a></article>
                            <article class="flex-item"><a href="/games/head-ball-2" class="app clickable" aria-label="head-ball-2 game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/GN0Y533q0pdeTlp1UABvhPadWbUN19lbnKPG0Gs0v2V4Iqpjd-vgiTxSvu72KWV-qFw=s180-rw" alt="Head Ball 2 icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">Head Ball 2</h3>
                                    </div>
                                </a></article>
                            <article class="flex-item"><a href="/games/soccer-club-management-2025" class="app clickable" aria-label="soccer-club-management-2025 game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/G3EVhySyxa4ElNSWEgoLZHpdnP59aEXg3z_9cSdHZmDgpLk0S2p-a-iiDW-RrvQzJ8E=s180-rw" alt="Soccer Club Management 2025 icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">Soccer Club Management 2025</h3>
                                    </div>
                                </a></article>
                            <article class="flex-item"><a href="/games/world-soccer-league" class="app clickable" aria-label="world-soccer-league game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/6KPq0FnZb7MO5Q0qmE0u8uZXyo1p6djpzOGBW-jfF-ao5afbTK9n4noRyZoprTuvYZc=s180-rw" alt="World Soccer League icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">World Soccer League</h3>
                                    </div>
                                </a></article>
                            <article class="flex-item"><a href="/games/top-football-manager-2024" class="app clickable" aria-label="top-football-manager-2024 game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/xcsuYsFo0yAInH_-k0qk8AMJA3pG9m9WDcPczD7t9s28adBc05gmzRxWM_1qAb80kmUL=s180-rw" alt="Top Football Manager 2025 icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">Top Football Manager 2025</h3>
                                    </div>
                                </a></article>
                            <article class="flex-item"><a href="/games/striker-manager-3" class="app clickable" aria-label="striker-manager-3 game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/dqQyVoFUVyZSFGGeyFZKyd0NXwM8-aDsGEYKMBZjKt-VMR70i6vdFPooR5EWuHexllI1=s180-rw" alt="Striker Manager 3 icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">Striker Manager 3</h3>
                                    </div>
                                </a></article>
                            <article class="flex-item"><a href="/games/retro-goal" class="app clickable" aria-label="retro-goal game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/HIZp9bVHS6FKdy-Lf813FfxfIK5XvUzq2-TQA6K1BlvEMcUacQhwRLl9XCtdIDEUGCM=s180-rw" alt="Retro Goal icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">Retro Goal</h3>
                                    </div>
                                </a></article>
                            <article class="flex-item"><a href="/games/fifa-mobile" class="app clickable" aria-label="fifa-mobile game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/iN2Ps0azmi8LXgqPQ8XSISrHx3BSugcIopD7fHr5GePrn4E-mE5wVXAxsu9Eu4YhXaU=s180-rw" alt="FIFA MOBILE icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">FIFA MOBILE</h3>
                                    </div>
                                </a></article>
                            <article class="flex-item"><a href="/games/soccer-cup-2023" class="app clickable" aria-label="soccer-cup-2023 game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/4dfqEAT4m2BHli1gXk9CXjvep5pDXzI1MBHxkDqXETcT95AtJSV33PWNlOQTIrNbh-1g=s180-rw" alt="Soccer Cup 2025 icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">Soccer Cup 2025</h3>
                                    </div>
                                </a></article>
                            <article class="flex-item"><a href="/games/total-football" class="app clickable" aria-label="total-football game">
                                    <div class="app-icon">
                                        <img decoding="async" loading="lazy" src="https://static.apkmody.com/play-lh.googleusercontent.com/3KmgOASAJukrvg2iErpimpORfG5amBe1_-by-2-BNuBmQBW4IUJWUEMlPy0W8A2RrCw=s180-rw" alt="Total Football icon" width="90" height="90" class="loaded"></div>
                                    <div class="app-name truncate">
                                        <h3 class="font-size__small no-margin no-padding truncate">Total Football</h3>
                                    </div>
                                </a></article>

                        </div>
                    </div>
                </div>
                <!-- comments -->
                <div class="">
                    <div class="">
                        <h2 class="font-size__medium text-align__center no-margin">Comments</h2>
                        <div class="text-align__center margin-top-15"></div>
                        <div id="comments" class="center">
                            <p class="text-align__center font-size__small">You have to <a href="/login" aria-label="Login">LOGIN</a> to submit &amp; see all comments</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

<?php get_footer(); ?>