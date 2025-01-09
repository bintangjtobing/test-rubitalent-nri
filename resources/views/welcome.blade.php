<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title') | RubiTalent - Your Trusted Recruitment Partner</title>
    <meta name="description"
        content="RubiTalent simplifies hiring with our 10-step recruitment process. We handle everything from job ads to background checks, saving you time and ensuring you hire the best talent.">
    <meta name="keywords"
        content="recruitment, hiring solutions, job ads, talent acquisition, HR services, background checks, psychometric tests, skill tests, RubiTalent">
    <meta name="author" content="RubiTalent">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title') | RubiTalent - Your Trusted Recruitment Partner">
    <meta property="og:description"
        content="Discover how RubiTalent's proven 10-step process simplifies hiring, saving you time and helping you build the perfect team.">
    <meta property="og:url" content="https://www.rubitalent.com">
    <meta property="og:image"
        content="https://res.cloudinary.com/dilb4d364/image/upload/w_1000/q_auto/f_auto/v1736236066/8_mtrtcw.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title') | RubiTalent - Your Trusted Recruitment Partner">
    <meta name="twitter:description"
        content="We streamline recruitment with targeted job ads, skill tests, and background checks. Hire better with RubiTalent!">
    <meta name="twitter:image"
        content="https://res.cloudinary.com/dilb4d364/image/upload/w_1000/q_auto/f_auto/v1736236066/8_mtrtcw.png">
    <meta property="og:site_name" content="RubiTalent">
    <meta name="theme-color" content="#007bff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="RubiTalent">
    <meta name="application-name" content="RubiTalent">
    <link rel="canonical" href="https://rubitalent-test.bintangtobing.com">
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/dilb4d364/image/upload/w_1000/q_auto/f_auto/v1736235886/7_kd7nhv.png"
        type="image/png">
    <link href="{{asset('fe/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('fe/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('fe/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('fe/css/style-magnific-popup.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('fe/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('fe/css/helper.css')}}">
    <link rel="stylesheet" href="{{asset('fe/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('fe/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('fe/css/owl.theme.default.min.css')}}">
    <link rel="shortcut icon" href="{{asset('fe/images/favicon.ico')}}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MV4280QWKQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MV4280QWKQ');
    </script>
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "pq3p757djz");
    </script>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header"><button data-target="#navbar-collapse-02" data-toggle="collapse"
                        class="navbar-toggle" type="button"><span class="sr-only">Toggle navigation</span><span
                            class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button><a href="/" class="navbar-brand" id="logo"><img
                            src="https://res.cloudinary.com/dilb4d364/image/upload/w_1000/q_auto/f_auto/v1736227399/6_y9hyz3.png"
                            alt="RubiTalent Logo - Your Recruitment Partner" style="max-height:50px;width:auto"></a>
                </div>
                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="#features" class="discover-btn">Get Started</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php $y = date('Y');?>
                    <p>Copyright ©{{ $y }}. Designed by<a
                            href="https://bintangtobing.com?utm_source=website-test-nri&utm_medium=footer&utm_campaign=website-test-nri"
                            style="color:#fff;text-decoration:none" target="_blank">&nbsp;Bintang Tobing</a></p>
                    <ul class="footer_social">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('fe/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('fe/js/bootstrap.js')}}"></script>
    <script src="{{asset('fe/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('fe/js/jquery.scrollTo-min.js')}}"></script>
    <script src="{{asset('fe/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('fe/js/jquery.nav.js')}}"></script>
    <script src="{{asset('fe/js/wow.js')}}"></script>
    <script src="{{asset('fe/js/jquery.vegas.js')}}"></script>
    <script src="{{asset('fe/js/plugins.js')}}"></script>
    <script src="{{asset('fe/js/custom.js')}}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/677ceb63af5bfec1dbe7be3d/1igvvevs5';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>