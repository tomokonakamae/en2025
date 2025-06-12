<?php
    global $dir;
?>
        <!-- cm-footer -->
        <footer id="cm-footer">
            <div class="container">
                <div class="footer__img">
                    <img src="<?php echo $dir;?>/assets/images/common/child.png" alt="image" width="256" height="189">
                </div>
                <div class="footer__head">
                    <div class="footer__logo">
                        <a href="<?php echo home_url('/'); ?>">
                            <img src="<?php echo $dir;?>/assets/images/common/logo.png" alt="卒園アルバム.com" width="590" height="99">
                        </a>
                    </div>
                    <div class="footer__menu flex-jus-between">
                        <ul>
                            <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                            <li class="show-sp"><span>卒園アルバム</span>
                                <ul>
                                    <li><a href="<?php echo esc_url(get_page_link_by_slug('album'));?>">夢ふぉとの卒園アルバム</a></li>
                                    <li><a href="<?php echo esc_url(get_page_link_by_slug('request'));?>">こんなご要望も承ります</a></li>
                                    <li><a href="<?php echo esc_url(get_page_link_by_slug('rakuraku'));?>">らくらく制作ソフト</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo esc_url(get_page_link_by_slug('first'));?>">はじめての方へ</a></li>
                            <li><a href="<?php echo esc_url(get_page_link_by_slug('about'));?>">夢ふぉとについて</a></li>
                        </ul>
                        <ul class="show-pc">
                            <li><span>卒園アルバム</span>
                                <ul>
                                    <li><a href="<?php echo esc_url(get_page_link_by_slug('album'));?>">夢ふぉとの卒園アルバム</a></li>
                                    <li><a href="<?php echo esc_url(get_page_link_by_slug('request'));?>">こんなご要望も承ります</a></li>
                                    <li><a href="<?php echo esc_url(get_page_link_by_slug('rakuraku'));?>">らくらく制作ソフト</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="show-pc">
                            <li><a href="<?php echo esc_url(get_post_type_archive_link('voice'));?>">ご利用者さまの声</a></li>
                            <li><a href="<?php echo esc_url(get_post_type_archive_link('blog'));?>">まるわかりマガジン</a></li>
                            <li><a href="<?php echo esc_url(get_post_type_archive_link('newtopics'));?>">お知らせ</a></li>
                            <li><a href="<?php echo esc_url(get_post_type_archive_link('faq'));?>">よくある質問</a></li>
                        </ul>
                        <ul>
                            <li class="show-sp"><a href="<?php echo esc_url(get_post_type_archive_link('voice'));?>">ご利用者さまの声</a></li>
                            <li class="show-sp"><a href="<?php echo esc_url(get_post_type_archive_link('blog'));?>">まるわかりマガジン</a></li>
                            <li class="show-sp"><a href="<?php echo esc_url(get_post_type_archive_link('newtopics'));?>">お知らせ</a></li>
                            <li class="show-sp"><a href="<?php echo esc_url(get_post_type_archive_link('faq'));?>">よくある質問</a></li>
                            <li><a href="https://www.yumephoto.co.jp/company/" target="_blank" class="btn__links">会社概要</a></li>
                            <li><a href="https://www.yumephoto.co.jp/privacy/" target="_blank" class="btn__links">個人情報保護方針</a></li>
                            <li><a href="https://www.yumephoto.co.jp/law/" target="_blank" class="btn__links">特定商取引法に基づく表記</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__banner">
                <div class="container">
                    <ul class="flex">
                        <li>
                            <a href="https://www.yumephoto.com/navi/" target="_blank">
                                <img src="<?php echo $dir;?>/assets/images/common/bnr1.png" alt="株式会社夢ふぉと" width="260" height="90">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.yumephoto.com/award/" target="_blank">
                                <img src="<?php echo $dir;?>/assets/images/common/bnr2.png" alt="株式会社夢ふぉと" width="260" height="90">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.yumephoto.co.jp/" target="_blank">
                                <img src="<?php echo $dir;?>/assets/images/common/bnr3.png" alt="株式会社夢ふぉと｜思い出で人の心の温度を1℃上げます。｜大阪府" width="260" height="90">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.yumephoto.com/" target="_blank">
                                <img src="<?php echo $dir;?>/assets/images/common/bnr4.png" alt="ポータルサイト" width="260" height="90">
                            </a>
                        </li>
                        <!-- <li>
                            <a href="./">
                                <img src="<?php echo $dir;?>/assets/images/common/bnr5.png" alt="" width="260" height="90">
                            </a>
                        </li>
                        <li>
                            <a href="./">
                                <img src="<?php echo $dir;?>/assets/images/common/bnr6.png" alt="" width="260" height="90">
                            </a>
                        </li>
                        <li>
                            <a href="./">
                                <img src="<?php echo $dir;?>/assets/images/common/bnr7.png" alt="" width="260" height="90">
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="./">
                                <img src="<?php echo $dir;?>/assets/images/common/bnr8.png" alt="" width="260" height="90">
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="page-up">
                <a href="#wrapper">
                    <img src="<?php echo $dir;?>/assets/images/common/page-up.png" alt="page-up">
                </a>
            </div>
            <div class="copyright">Ⓒ2007-2025 Yumephoto Inc.</div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- end wrapper -->
    <?php wp_footer(); ?>
    <?php if ( is_home() || is_front_page() ) : ?>
      <script>
              document.addEventListener("DOMContentLoaded", function () {
              var splide = new Splide(".mainvisual__splide", {
                  type  : 'fade',
                  perPage : 1,
                  rewind: true,
                  autoplay: true,
                  interval: 3500,
                  speed: 2000,
                  arrows: false,
                  pagination: false,
              });
              splide.mount(window.splide.Extensions);
              });
              document.addEventListener("DOMContentLoaded", function () {
              var splide = new Splide(".sec01__splide", {
                  type: "loop",
                  perPage: 1,
                  arrows: false,
                  pagination: false,
                  autoScroll: {
                      speed: 1,
                      pauseOnHover: false,
                  },
              });
              splide.mount(window.splide.Extensions);
              });

              
      </script>
    <?php endif; ?>
    <?php if(is_page('about')): ?>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
        var splide = new Splide(".about3__splide", {
            type: "loop",
            perPage: 1,
            arrows: false,
            pagination: false,
            autoScroll: {
                speed: 1,
                pauseOnHover: false,
            },
        });
        splide.mount(window.splide.Extensions);
        });
      </script>
    <?php endif; ?>
    <?php if (is_page('album') ): ?>
      <script>
        jQuery(function($) {
          var currentPage = 0;

          $('.book')
              .on('click', '.active', nextPage)
              .on('click', '.flipped', prevPage);

          $('.book').on("swipeleft", nextPage);
          $('.book').on("swiperight", prevPage);

          function prevPage() {
              $('.flipped')
                  .last()
                  .removeClass('flipped')
                  .addClass('active')
                  .siblings('.page')
                  .removeClass('active');
          }
          function nextPage() {
              $('.active')
                  .removeClass('active')
                  .addClass('flipped')
                  .next('.page')
                  .addClass('active')
                  .siblings();
          }
        });//jQuery
      </script>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
            var splide = new Splide(".splide1", {
                type: 'loop',
                perPage: 2.5,
                focus: 'center',
                gap: '3rem',
                pagination: false,
                breakpoints: {
                    767: {
                        perPage: 1,
                        gap: '2rem',
                    },
                },
            });
            splide.mount();
        });
        document.addEventListener("DOMContentLoaded", function () {
            var splide = new Splide(".splide2", {
                type: 'loop',
                perPage: 2.5,
                focus: 'center',
                gap: '3rem',
                pagination: false,
                breakpoints: {
                    767: {
                        perPage: 1,
                        gap: '2rem',
                    },
                },
            });
            splide.mount();
        });
        document.addEventListener("DOMContentLoaded", function () {
            var splide = new Splide("#splide", {
                type: "loop",
                perPage: 6,
                gap: "10px",
                arrows: false,
                pagination: false,
                autoScroll: {
                    speed: 1,
                    breakpoints: {
                        767: {
                            perPage: 1,
                        },
                    },
                },
            });

            splide.mount(window.splide.Extensions);
        });
      </script>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
            var main = new Splide('.splide4', {
                type: 'loop',
                perPage: 2.5,
                focus: 'center',
                gap: '3rem',
                pagination: false,
                breakpoints: {
                    767: {
                        perPage: 1,
                        gap: '2rem',
                    },
                },
            });

            var thumbnails = new Splide('#thumbnail-carousel', {
                fixedWidth: 100,
                fixedHeight: 60,
                gap: 10,
                rewind: true,
                pagination: false,
                isNavigation: true,
                pagination: false,
                arrows: false,
                breakpoints: {
                    600: {
                        fixedWidth: 60,
                        fixedHeight: 44,
                        gap: 5,
                    },
                },
            });
            var thumbnailstxt = new Splide('#thumbnail-carousel-text', {
                type: 'fade',
                rewind: true,
                pagination: false,
                arrows: false,
            });
            main.sync(thumbnails);
            main.sync(thumbnailstxt);
            main.mount();
            thumbnails.mount();
            thumbnailstxt.mount();
        });
      </script>
    <?php endif; ?>
    <?php if(is_page('rakuraku')): ?>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
        var splide = new Splide("#splide", {
            type: "loop",
            perPage: 4,
            gap: "10px",
            arrows: false,
            pagination: false,
            autoScroll: {
            speed: 1,
            },
        });

        splide.mount(window.splide.Extensions);
        });

        document.addEventListener("DOMContentLoaded", function () {
        var splide = new Splide("#rakuraku06_slide", {
            type: "loop",
            perPage: 4,
            gap: "10px",
            arrows: false,
            pagination: false,
            autoScroll: {
            speed: 1,
            },
        });

        splide.mount(window.splide.Extensions);
        });

        document.addEventListener("DOMContentLoaded", function () {
        const tabGroups = document.querySelectorAll(".tab-group");

        tabGroups.forEach((group) => {
            const tabLinks = group.querySelectorAll(".tab-link");
            const tabContents = group.querySelectorAll(".tab-content");

            // Function to show the selected tab for each group
            function showTab(tabId) {
            tabContents.forEach(function (content) {
                content.classList.remove("active");
            });
            group.querySelector(`#${tabId}`).classList.add("active");

            tabLinks.forEach(function (link) {
                link.classList.remove("active");
            });
            group
                .querySelector(`[data-tab="${tabId}"]`)
                .classList.add("active");
            }

            // Add event listeners to each tab link within the group
            tabLinks.forEach(function (link) {
            link.addEventListener("click", function () {
                const tabId = this.getAttribute("data-tab");
                showTab(tabId);
            });
            });

            // Show the first tab by default in each group
            const firstTabId = tabLinks[0].getAttribute("data-tab");
            showTab(firstTabId);
        });
        });
      </script>
    <?php endif; ?>
    <?php if(is_post_type_archive('blog') || is_tax(['blog-category', 'blog-tag', 'blog-feature'])): ?>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
            const splideElements = document.querySelectorAll('.blog__splide');
            splideElements.forEach((element) => {
                const splide = new Splide(element, {
                    type: 'loop',
                    perPage: 3,
                    updateOnMove: true,
                    pagination: false,
                    throttle: 300,
                    gap: 15,
                    breakpoints: {
                    767: {
                        perPage: 1,
                    },
                    },
                });
                splide.mount();
            });
        });
      </script>
    <?php endif; ?>
    <?php if(is_singular('blog')): ?>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const content = document.getElementById("js-content");
            const toc = document.getElementById("js-table-of-contents");
            let tocHTML = "<ul>";
            let currentLevel = 1;
            let listStack = [tocHTML];
            let numbering = [0, 0, 0, 0]; // h1, h2, h3, h4 の番号管理用

            const headings = content.querySelectorAll("h1, h2, h3, h4");
            let h1Exists = Array.from(headings).some(h => h.tagName.toLowerCase() === 'h1');

            // h1がない場合はh2をトップレベルとして扱うための設定
            const baseLevel = h1Exists ? 1 : 2;

            headings.forEach((heading, index) => {
                const level = parseInt(heading.tagName.charAt(1));
                const adjustedLevel = level - baseLevel + 1;
                
                numbering[adjustedLevel - 1]++;
                
                for (let i = adjustedLevel; i < numbering.length; i++) {
                    numbering[i] = 0;
                }

                //見出しにアンカー用idを付与
                const id = `heading-${index}`;
                heading.setAttribute("id", id);
                
                const currentNumber = numbering.slice(0, adjustedLevel).join('.');
                const listItem = `<li><a href="#${id}">${currentNumber}. ${heading.textContent}</a>`;

                if (adjustedLevel > currentLevel) {
                    tocHTML += "<ul>".repeat(adjustedLevel - currentLevel);
                    currentLevel = adjustedLevel;
                } else if (adjustedLevel < currentLevel) {
                    tocHTML += "</li></ul>".repeat(currentLevel - adjustedLevel);
                    currentLevel = adjustedLevel;
                } else {
                    tocHTML += "</li>";
                }
                tocHTML += listItem;
            });

            tocHTML += "</li></ul>".repeat(currentLevel - 1);
            toc.innerHTML = tocHTML;
        });
        </script>
    <?php endif; ?>


    <?php // gaid ?> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6RG1CYE94B"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){ dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-6RG1CYE94B'); // GA4の測定IDに置き換える

    function getGA4ClientId(callback) {
      gtag('get', 'GG-6RG1CYE94B', 'client_id', function(client_id) {
        callback(client_id);
      });
    }

    window.onload = function() {
      getGA4ClientId(function(clientId) {
        if (clientId) {
          localStorage.setItem('ga_client_id', clientId);

          // フォームの hidden input に値を入れる
          const gaidInput = document.getElementById('gaid');
          if (gaidInput) {
            gaidInput.value = clientId;
          }

          // Cookieにも保存しておく（Safari対策やサーバー側取得用）
          document.cookie = "gaid=" + encodeURIComponent(clientId) + "; path=/; max-age=2592000";
        }
      });
    };
  </script>

</body>

</html>