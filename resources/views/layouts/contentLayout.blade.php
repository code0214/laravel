<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="keywords" content="Deparment of Agriculture Negeri Sembilan">
    <meta name="author" content="Super User">
    <meta name="description" content="Laman Web Rasmi Jabatan Pertanian Negeri Sembilan, Jabatan Pertanian Negeri Sembilan,Agriculture Department Negeri Sembilan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> {{env('APP_NAME')}} | @yield('title')</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="css/red/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/system.css" rel="stylesheet" type="text/css">
    <link href="css/red/template.css" rel="stylesheet" type="text/css">
    <link href="css/red/megamenu.css" rel="stylesheet" type="text/css">
    <link href="css/red/off-canvas.css" rel="stylesheet" type="text/css">
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom/custom.css" rel="stylesheet" type="text/css">
    <link href="css/red/layouts/corporate.css" rel="stylesheet" type="text/css">
    <link href="css/default.css" rel="stylesheet" type="text/css">
    <link href="css/rssocial.css" rel="stylesheet" type="text/css">
    <link href="css/rssocial-anim.css" rel="stylesheet" type="text/css">
    <link href="css/rssocial-font.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.ibxslider.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="css/settings.css" rel="stylesheet" type="text/css">
    <link href="css/dynamic-captions.css" rel="stylesheet" type="text/css">
    <link href="css/static-captions.css" rel="stylesheet" type="text/css">
    <link href="css/style(1).css" rel="stylesheet" type="text/css">
    <link href="css/jtoolboxcache.css" rel="stylesheet" type="text/css">
    
    <style>
      .linkbox {
        position: absolute;
        right: 50px;
      }

      .t3-topbar {
        min-height: 35px !important;
      }

      input[type="text"].top-search {
        height: 23px !important;
        top: -14px;
      }

      td,
      tr td {
        border-top: unset !important;
      }

      button.top-search {
        height: 23px !important;
        top: 6px;
        position: absolute;
        padding-top: 1px !important;
        padding-bottom: 1px !important;
        padding-left: 5px !important;
        padding-right: 5px !important;
      }
    </style>
    <style type="text/css">
      .rssocial-sharing-facebook-container-left {
        width: 124px;
        height: 20px;
      }

      #rssocial-151 .rssocial-icons li {
        font-size: 24px;
      }

      #rssocial-151 .rssocial-caption a {
        font-size: 14px;
      }

      #rssocial-151 .rssocial-icons-bg .rssocial-link {
        color: rgb(255, 255, 255);
      }

      #rssocial-151 .rssocial-icons-bg .rssocial-link {
        background-color: rgba(255, 76, 59, 0.75);
      }

      #rssocial-151 .rssocial-icons-bg .rssocial-link:hover {
        background-color: rgba(255, 76, 59, 0.5);
      }

      #rssocial-151 .rssocial-icons .rssocial-caption a {
        color: rgb(255, 255, 255);
      }

      #rssocial-151 .rssocial-icons .rssocial-caption {
        background-color: rgba(0, 0, 0, 0.75);
      }

      #rssocial-151 .rssocial-icons .rssocial-caption:hover {
        background-color: rgba(0, 0, 0, 0.5);
      }

      #client163 .ibx-wrapper .ibx-controls-direction a {
        color: #cccccc !important;
      }

      #client163 .ibx-wrapper .ibx-controls-direction a:hover {
        color: #edde13 !important;
      }

      #client163 .ibx-wrapper .ibx-pager .ibx-pager-link {
        background: #cccccc !important;
      }

      #client163 .ibx-wrapper .ibx-pager-link.active {
        background: #edde13 !important;
      }

      #client163 .ibx-wrapper {
        max-width: 1062px !important;
      }

      #client163 .sliderContent:hover .ibx-overlay {
        background: rgba(0, 0, 0, 0.8);
        opacity: 1;
      }

      #client163 .ibx-bottom,
      #client163 .ibx-top {
        background: rgba(0, 0, 0, 0.8);
      }

      #client163 .ibx-text,
      #client163 .ibx-text a {
        color: #ffffff;
        font-size: 14px;
        text-align: left;
        text-decoration: none;
      }

      #client163 .ibx-viewport {
        height: 130px !important;
      }

      #client163 .slide-contents-horizontal,
      #client163 .slide-contents-vertical {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        border: 2px solid #cccccc;
        border-radius: 4px;
        height: 130px;
        background: #efefef;
        opacity: 0.6;
        transition: background 0.2s linear 0s, border 0.2s linear 0s, opacity 0.2s linear 0s;
      }

      #client163 .slide-contents-horizontal:hover,
      #client163 .slide-contents-vertical img:hover {
        opacity: 1;
      }

      #je_accord129.je_acc {
        color: #FFFFFF;
        font-family: 'Open Sans', Arial, sans-serif;
      }

      #je_accord129.je_acc>ul>li>a {
        border-left: 1px solid #d72413;
        border-right: 1px solid #d72413;
        border-top: 1px solid #d72413;
        color: #FFFFFF;
        background: #FF4C3B;
      }

      #je_accord129.je_acc>ul>li>a:hover,
      #je_accord129.je_acc>ul>li.active>a,
      #je_accord129.je_acc>ul>li.open>a {
        color: #FFFFFF;
        background: #eb3827;
      }

      #je_accord129.je_acc>ul>li.open>a {
        border-bottom: 1px solid #d72413;
      }

      #je_accord129.je_acc>ul>li:last-child>a,
      #je_accord129.je_acc>ul>li.last>a {
        border-bottom: 1px solid #d72413;
      }

      #je_accord129 .holder::after {
        border-top: 2px solid #FFFFFF;
        border-left: 2px solid #FFFFFF;
      }

      #je_accord129.je_acc>ul>li>a:hover>span::after,
      #je_accord129.je_acc>ul>li.active>a>span::after,
      #je_accord129.je_acc>ul>li.open>a>span::after {
        border-color: #FFFFFF;
      }

      #je_accord129.je_acc ul ul li a {
        border-bottom: 1px solid #212a36;
        border-left: 1px solid #212a36;
        border-right: 1px solid #212a36;
        color: #ffffff;
        background: #49525E;
      }

      #je_accord129.je_acc ul ul li:hover>a,
      #je_accord129.je_acc ul ul li.open>a,
      #je_accord129.je_acc ul ul li.active>a {
        color: #ffffff;
        background: #353e4a;
      }

      #je_accord129.je_acc>ul>li>ul>li.open:last-child>a,
      #je_accord129.je_acc>ul>li>ul>li.last.open>a {
        border-bottom: 1px solid #212a36;
      }

      #je_accord129.je_acc ul ul li.has-sub>a::after {
        border-top: 2px solid #ffffff;
        border-left: 2px solid #ffffff;
      }

      #je_accord129.je_acc ul ul li.active>a::after,
      #je_accord129.je_acc ul ul li.open>a::after,
      #je_accord129.je_acc ul ul li>a:hover::after {
        border-color: #ffffff;
      }

      #sp-nh177 {
        color: #000000;
        background: #efefef
      }

      .sp-nh-item {
        background: #efefef
      }

      a.sp-nh-link {
        color: #601407
      }

      a.sp-nh-link:hover {
        color: #039ee1
      }

      .sp-nh-buttons,
      .sp-nh-item,
      .sp-nh-prev,
      .sp-nh-next {
        height: 30px;
        line-height: 30px
      }

      .sp-nh-prev,
      .sp-nh-next {
        background-image: url(/modules/mod_sp_news_highlighter/assets/images/style1.png)
      }
    </style>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="js/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="js/caption.js" type="text/javascript"></script>
    <script src="js/base-bs3/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="js/base-bs3/js/jquery.tap.min.js" type="text/javascript"></script>
    <script src="js/base-bs3/js/off-canvas.js" type="text/javascript"></script>
    <script src="js/base-bs3/js/script.js" type="text/javascript"></script>
    <script src="js/base-bs3/js/menu.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/base-bs3/js/nav-collapse.js" type="text/javascript"></script>
    <script src="js/mod_rssocial/js/rssocial.js" type="text/javascript"></script>
    <script src="js/mod_rssocial/js/jquery-migrate.js" type="text/javascript"></script>
    <script src="js/mod_rssocial/js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="js/jquery.ibxSlider.js" type="text/javascript"></script>
    <script src="js/calnav.js?3.4.43" type="text/javascript"></script>
    <script src="js/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <script src="js/sp_highlighter.js" type="text/javascript"></script>
    <script src="js/jtoolboxcache.js" type="text/javascript"></script>
    <script type="text/javascript">
      jQuery(window).on('load', function() {
        new JCaption('img.caption');
      });
      jQuery(function($) {
        $(".hasTooltip").tooltip({
          "html": true,
          "container": "body"
        });
      });
      RSSocial.captionEqualWidth();
      RSSocial.showOnClick('inline', 'left', '151', 'icons', '0', '0', '4');
      RSSocial.setListWidth('151', '0');
      RSSocial.floatingResize('151', 'inline', 'left');
      jQuery.noConflict();
      jQuery(window).load(function() {
        // When the page has loaded
        jQuery(".client-logo-slider").css('visibility', 'visible');
        jQuery(".client-logo-slider").fadeIn(2000);
      });
      jQuery(document).ready(function() {
        jQuery(".client-overlay").mouseover(function() {
          jQuery(this).find(".ibxOverlay").show();
        }).mouseout(function() {
          jQuery(this).find(".ibxOverlay").hide();
        });
        jQuery('#slider163').ibxSlider({
          mode: 'horizontal',
          pause: 3000,
          maxSlides: 8,
          slideWidth: 120,
          minSlides: 2,
          speed: 2000,
          moveSlides: 1,
          slideMargin: 10,
          useCSS: false,
          controls: true,
          pager: false,
          auto: true,
          stopAuto: false,
          pagerType: 'full',
          autoHover: true,
          adaptiveHeight: false,
          autoDirection: 'prev',
          nextText: ' <i class="fa fa-angle-right fa-3x"></i>',
          prevText: ' <i class="fa fa-angle-left fa-3x"></i>',
          responsive: true
        });
      });
      jQuery(function() {
        jQuery(document).ready(function() {
          jQuery('.active').addClass('open');
          jQuery('.active').children('ul').slideDown();
          jQuery('#je_accord129 li.has-sub>a').on('mouseenter', function() {
            var element = jQuery(this).parent('li');
            if (element.hasClass('open')) {
              element.removeClass('open');
              element.find('li').removeClass('open');
              element.find('ul').slideUp('normal');
            } else {
              element.addClass('open');
              element.children('ul').slideDown('normal');
              element.siblings('li').children('ul').slideUp('normal');
              element.siblings('li').removeClass('open');
              element.siblings('li').find('li').removeClass('open');
              element.siblings('li').find('ul').slideUp('normal');
            }
          });
          jQuery('#je_accord129>ul>li.has-sub>a').append(' <span class="holder"></span>');
          });
        });
    </script>
	@yield('page-style')
</head>
<body>
    @yield('content')
</body>
</html>