<script src="<?= urlOf('assets/vendors/jquery/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/jarallax/jarallax.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/jquery-appear/jquery.appear.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/jquery-validate/jquery.validate.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/nouislider/nouislider.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/odometer/odometer.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/swiper/swiper.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/tiny-slider/tiny-slider.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/wnumb/wNumb.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/wow/wow.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/isotope/isotope.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/countdown/countdown.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/owl-carousel/owl.carousel.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/twentytwenty/twentytwenty.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/twentytwenty/jquery.event.move.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/bxslider/jquery.bxslider.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/vegas/vegas.min.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/jquery-ui/jquery-ui.js') ?>"></script>
<script src="<?= urlOf('assets/vendors/timepicker/timePicker.js') ?>"></script>
<script src="<?= urlOf('admin/js/popper.min.js') ?>"></script>
<script src="<?= urlOf('admin/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
<!-- template js -->
<script src="<?= urlOf('assets/js/kontin.js') ?>"></script>
<script src="<?= urlOf('assets/js/index.js')?>"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchButton = document.querySelector('.fa-search');
        const searchDialog = document.querySelector('#searchModal');

        searchButton.addEventListener('click', () => {
            searchDialog.showModal();
        });
    });

    function setMapTarget() {
        $('#open-in-maps').text(getPlatform() === "Apple" ? 'Open in Apple Maps' : 'Open in Google Maps');
    }

    function openMap() {
        let href = $('#map-link').data(getPlatform() === "Apple" ? 'apple-href' : 'href');
        window.open(href);
    }

    function getPlatform() {
        const IS_IOS = (navigator.userAgent.match(/iPad/i) != null) || (navigator.userAgent.match(/iPhone/i) != null) || (navigator.userAgent.match(/iPod/i) != null);
        const IS_ANDROID = (navigator.userAgent.match(/android/i) != null) || (navigator.userAgent.match(/Android/i) != null);

       return IS_IOS ? "Apple" : (IS_ANDROID ? "Android" : "Desktop");
    }

</script>
<script nonce="1d5b96ff-d0c6-4321-97e5-3c68881fa8a4">
    (function(w, d) {
        ! function(j, k, l, m) {
            j[l] = j[l] || {};
            j[l].executed = [];
            j.zaraz = {
                deferred: [],
                listeners: []
            };
            j.zaraz.q = [];
            j.zaraz._f = function(n) {
                return async function() {
                    var o = Array.prototype.slice.call(arguments);
                    j.zaraz.q.push({
                        m: n,
                        a: o
                    })
                }
            };
            for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
            j.zaraz.init = () => {
                var q = k.getElementsByTagName(m)[0],
                    r = k.createElement(m),
                    s = k.getElementsByTagName("title")[0];
                s && (j[l].t = k.getElementsByTagName("title")[0].text);
                j[l].x = Math.random();
                j[l].w = j.screen.width;
                j[l].h = j.screen.height;
                j[l].j = j.innerHeight;
                j[l].e = j.innerWidth;
                j[l].l = j.location.href;
                j[l].r = k.referrer;
                j[l].k = j.screen.colorDepth;
                j[l].n = k.characterSet;
                j[l].o = (new Date).getTimezoneOffset();
                if (j.dataLayer)
                    for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                            ...x[1],
                            ...y[1]
                        })), {}))) zaraz.set(w[0], w[1], {
                        scope: "page"
                    });
                j[l].q = [];
                for (; j.zaraz.q.length;) {
                    const z = j.zaraz.q.shift();
                    j[l].q.push(z)
                }
                r.defer = !0;
                for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith("_zaraz_"))).forEach((B => {
                    try {
                        j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                    } catch {
                        j[l]["z_" + B.slice(7)] = A.getItem(B)
                    }
                }));
                r.referrerPolicy = "origin";
                r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                q.parentNode.insertBefore(r, q)
            };
            ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
</script>
</body>

</html>