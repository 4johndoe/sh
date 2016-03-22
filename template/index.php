

<!DOCTYPE html>
<html manifest="/html/offline/manifest"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="google-site-verification" content="o-FIvojVB6AHxe7k01F7DG86E8o6JNh39S3HJvJmYjk" />
    <meta name="fragment" content="!">
    <meta name="description" content="A free tool for rapid prototyping, fun wireframing and quick mockups.
        Create mobile app wireframes for iOS, Android, Windows Phone, Surface, design website mockups, share, collaborate and test usability for free!">
    <meta name="keywords" content="free wireframe software, wireframes, wire frames, mockups, prototypes, prototyping,
        website mockups, mobile app design, usability testing, ux design, user interface design">
    
    <link rel="canonical" href="https://ninjamock.com/" />

    <meta property="og:url" content="https://ninjamock.com" />
    <meta property="og:site_name" content="NinjaMock" />
    <meta property="og:image" content="https://ninjacdn.blob.core.windows.net/cdnfiles/fb/clickmap.png" />
    <meta property="og:image" content="https://ninjacdn.blob.core.windows.net/cdnfiles/fb/screenshot-pdf.png" />
    <meta property="og:image" content="https://ninjacdn.blob.core.windows.net/cdnfiles/fb/screenshot-toolbox.png" />
    <meta property="og:image" content="https://ninjacdn.blob.core.windows.net/cdnfiles/fb/screenshot-vectors.png" />    

        <link rel="stylesheet" href="https://az632987.vo.msecnd.net/cdn/1.53.23884.0/target/site.styles.min.css">

    <title>NinjaMock - free tool for mobile app wireframes and website mockups.</title>

    
</head>

<body>
    <header data-bind="class: activeView">
        <div class="hero">
            <div class="container">
                <div class="navbar">
                    <div class="navbar-inner">
                        <a class="brand shared-ninja-head" href="/home/index?v=2"></a>

                        <div class="pull-right account-area">
                            <div data-bind="visible: loggedIn()" style="display: none">
                                <form action="/idsrv/logout" method="POST">
                                    <div class="btn-group">
                                        <a href="/project/list?v=2" class="btn btn-primary alternative btn-my-projects">My projects</a>
                                        <button class="btn btn-primary alternative dropdown-toggle" data-toggle="dropdown" name="account-dropdown"><span class="nmicon arrow">&#xe600;</span></button>

                                        <ul class="dropdown-menu">
                                            <li><a href="/myCompany/index" name="my-account">My account</a></li>
                                            <li><a data-bind="formSubmit: true">Log out</a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div data-bind="if: !loggedIn()">
                                <a class="btn btn-primary alternative" data-bind="click: login">Log in</a>    
                            </div>
                        </div>

                        <ul class="nav">
                            <li class="logo" data-bind="css: {'active': activeModuleId() === 'areas/home/viewmodels/index' }">
                                <a href="/home/index?v=2" class="shared-ninja-text"></a>
                            </li>
                            <li data-bind="css: {'active': activeModuleId() === 'areas/doc/viewmodels/features' }">                                
                                <a href="/features">Features</a>                                
                            </li>                                
                            <li data-bind="css: {'active': activeModuleId() === 'areas/account/viewmodels/pricing' }">
                                <a href="/account/pricing">Plans</a>
                            </li>



                        </ul>
                    </div>
                </div>

                <div class="hero-content">
                    <div class="slogan">Slice your work in half</div>
                    <h1 class="message">Create & share wireframe designs for</h1>
                    <div class="platforms home-platforms"></div>
                    <a class="btn btn-primary alternative" href="/project/create">Start designing now!</a>
                    <div class="snipe home-snipe-free">&nbsp;</div>

                    <div class="social-buttons">
                        <div class="fb-like" data-href="https://facebook.com/NinjaMock"
                             data-layout="button_count"
                             data-action="like"
                             data-show-faces="true"
                             data-share="false">
                        </div>
                        <br />
                        <a class="twitter-share-button hidden"
                           href="https://twitter.com/intent/tweet?text=I%20am%20now%20prototyping%20like%20a%20ninja%20at&hashtags=webdesign,ui,ux&via=ninjamock"
                           data-count="horizontal">
                            Tweet
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="applicationHost"></div>

    <footer>
        <div class="box">            
            <div class="column">                
                <div>&copy; 2016 NinjaMock.com</div>                    
                <div><a href="/shared/termsAndConditions">Terms & Conditions</a></div>
                <div><a href="/shared/privacyPolicy">Privacy policy</a></div>
                <div><a href="/about-us">About us</a></div>
            </div>
            <div class="column">
                <div>Support</div>
                <div><a href="mailto:ninjas@ninjamock.com">Customer service</a></div>
                <div><a href="/shared/purchasingFAQ">Purchasing FAQ</a></div>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        var params = {};        
        params.exportServiceUrl = "//services.ninjamock.com/";        
        params.appBuild = "1.53.23884.0";        

        var config = {
            datePattern: 'MMMM dd, yyyy',
            currencyPattern: '$$n USD',
            currencyPatternShort: '$$n',
            subscription: {
  "pricePro": 15,
  "priceProPlus": 25,
  "trialDays": 30,
  "freeProjects": 3,
  "daysBeforeBlocking": 30,
  "trialEndNotificationDays": 7,
  "discountMonths": 6,
  "discountedPricePro": 10,
  "discountActive": false
}
            };
    </script>
    
    <script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m);
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-32615751-3', 'auto');
</script>    

    <script type="text/javascript">
        goog_snippet_vars = function () {
            var w = window;
            w.google_conversion_id = 981303957;
            w.google_conversion_label = "3fj0COODrAcQlYX20wM";
            w.google_conversion_value = 0;
            w.google_remarketing_only = false;
        }
        
        goog_report_conversion = function (url) {
            goog_snippet_vars();
            window.google_conversion_format = "3";
            window.google_is_call = true;
            var opt = new Object();
            opt.onload_callback = function () {
                if (typeof (url) != 'undefined') {
                    window.location = url;
                }
            }
            var conv_handler = window['google_trackConversion'];
            if (typeof (conv_handler) == 'function') {
                conv_handler(opt);
            }
        }
    </script>
    <script type="text/javascript"
            src="//www.googleadservices.com/pagead/conversion_async.js">
    </script>


<script type="text/javascript">
    window.goog_report_conversion = window.goog_report_conversion || function () {
    }
</script>
    <script type="text/javascript">
    var fb_param = {};
    fb_param.pixel_id = '6012138180207';
    fb_param.value = '0.00';
    fb_param.currency = 'USD';
    (function(){
      var fpw = document.createElement('script');
      fpw.async = true;
      fpw.src = '//connect.facebook.net/en_US/fp.js';
      var ref = document.getElementsByTagName('script')[0];
      ref.parentNode.insertBefore(fpw, ref);
    })();
</script>
    <div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=470403253077828";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

                                               
        <script type="text/javascript" src="https://az632987.vo.msecnd.net/cdnfiles/js/libs/require.js" ></script>
            <script type="text/javascript" src="https://az632987.vo.msecnd.net/cdn/1.53.23884.0/target/site.min.js"></script>
            <script type="text/javascript" src="https://az632987.vo.msecnd.net/cdn/1.53.23884.0/target/site.html.js"></script>
        

    
</body>
</html>                