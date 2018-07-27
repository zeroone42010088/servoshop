</section>
            </div>
            <!-- div filling-page -->

        </main>
        <!-- .content -->
        <footer class="foot" style="position:absolute;  width:100%; ">
            <div class="f-logo-l"><img src="../img/logo3.png" alt="kerneltlt"></div>
            <div class="f-title">ООО "КЕРНЕЛ" Ремонт промышленной электроники</div>
            <div class="f-logo-r"><img src="../img/logo3.png" alt="kerneltlt"></div>
        </footer>
        <!-- .footer -->

    </div>
    <!-- .wrapper -->

    <script>
        (function(d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter44532427 = new Ya.Metrika({
                        id: 44532427,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true
                    });
                } catch (e) {}
            });
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function() {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");

    </script> <noscript><div><img src="../https@mc.yandex.ru/watch/44532427" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script>
        (function() {
            var widget_id = 'ON5DROotFX';
            var d = document;
            var w = window;

            function l() {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = '//code.jivosite.com/script/widget/' + widget_id;
                var ss = document.getElementsByTagName('script')[0];
                ss.parentNode.insertBefore(s, ss);
            }
            if (d.readyState == 'complete') {
                l();
            } else {
                if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            }
        })();

    </script>
    <!-- {/literal} END JIVOSITE CODE -->

    <!-- загрузка изображений -->
    <script>
        /**
         * Проверяет элемент на попадание в видимую часть экрана.
         * Для попадания достаточно, чтобы верхняя или нижняя границы элемента были видны.
         */
        function isVisible(elem) {

            var coords = elem.getBoundingClientRect();

            var windowHeight = document.documentElement.clientHeight;

            // верхняя граница elem в пределах видимости ИЛИ нижняя граница видима
            var topVisible = coords.top > 0 && coords.top < windowHeight;
            var bottomVisible = coords.bottom < windowHeight && coords.bottom > 0;

            return topVisible || bottomVisible;
        }

        /**
        Вариант проверки, считающий элемент видимым,
        если он не более чем -1 страница назад или +1 страница вперед

        function isVisible(elem) {

          var coords = elem.getBoundingClientRect();

          var windowHeight = document.documentElement.clientHeight;

          var extendedTop = -windowHeight;
          var extendedBottom = 2 * windowHeight;

          // top visible || bottom visible
          var topVisible = coords.top > extendedTop && coords.top < extendedBottom;
          var bottomVisible = coords.bottom < extendedBottom && coords.bottom > extendedTop;

          return topVisible || bottomVisible;
        }
        */

        function showVisible() {
            var imgs = document.getElementsByTagName('img');
            for (var i = 0; i < imgs.length; i++) {

                var img = imgs[i];

                var realsrc = img.getAttribute('realsrc');
                if (!realsrc) continue;

                if (isVisible(img)) {
                    img.src = realsrc;
                    img.setAttribute('realsrc', '');
                }
            }

        }

        window.onscroll = showVisible;
        showVisible();

    </script> <!-- загрузка изображений -->

</body>

</html>