<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('tonsberg/images/favicon.png') }}">

    <title>{{ config('app.name', 'Qazaqstan ADS') }}</title>
    <script>
        /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
        if ( typeof WebFontConfig === "undefined" ) {
            WebFontConfig = new Object();
        }
        WebFontConfig['google'] = {families: ['Montserrat', 'Libre+Baskerville']};

        (function() {
            var wf = document.createElement( 'script' );
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName( 'script' )[0];
            s.parentNode.insertBefore( wf, s );
        })();
    </script>
    {{--<link rel='dns-prefetch' href='//fonts.googleapis.com' />--}}
    {{--<link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />--}}
    {{--<link rel='dns-prefetch' href='//s.w.org' />--}}
    {{--<link rel="alternate" type="application/rss+xml" title="Tonsberg &raquo; Feed" href="https://tonsberg.modeltheme.com/feed/" />--}}
    {{--<link rel="alternate" type="application/rss+xml" title="Tonsberg &raquo; Comments Feed" href="https://tonsberg.modeltheme.com/comments/feed/" />--}}
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/tonsberg.modeltheme.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.10"}};
        !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'  href='https://tonsberg.modeltheme.com/wp-includes/css/dist/block-library/style.min.css?ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-theme-css'  href='https://tonsberg.modeltheme.com/wp-includes/css/dist/block-library/theme.min.css?ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1' type='text/css' media='all' />
    <link rel='stylesheet' id='essential-grid-plugin-settings-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/essential-gridzip/public/assets/css/settings.css?ver=2.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-raleway-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-droid-serif-css'  href='https://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-barlow-condensed-css'  href='https://fonts.googleapis.com/css?family=Barlow+Condensed%3A100%2C200%2C300%2C400%2C500%2C600%2C700&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-source-code-pro-css'  href='https://fonts.googleapis.com/css?family=Source+Code+Pro%3A300%2C400%2C500%2C600%2C700&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-montserrat-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-fontello-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/essential-gridzip/public/assets/font/fontello/css/fontello.css?ver=2.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='sb_instagram_styles-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/instagram-feed/css/sb-instagram.min.css?ver=1.10.2' type='text/css' media='all' />
    <link rel='stylesheet' id='sb-font-awesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='style-shortcodes-inc-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/inc/shortcodes/shortcodes.css?ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='style-mt-mega-menu-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/css/mt-mega-menu.css?ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='style-select2-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/css/select2.min.css?ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='style-animations-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/css/animations.css?ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.8' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>

    <link rel='stylesheet' id='tonsberg-parent-style-css'  href='{{asset('tonsberg/style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=5.6' type='text/css' media='all' />
    <link rel='stylesheet' id='cryptocoins-css'  href='{{asset('tonsberg/fonts/cryptocoins.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-responsive-css'  href='{{asset('tonsberg/css/responsive.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-media-screens-css'  href='{{asset('tonsberg/css/media-screens.css')}}}' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel2-css'  href='{{asset('tonsberg/css/owl.carousel.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href='{{asset('tonsberg/css/animate.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-style-css'  href='{{asset('tonsberg/css/styles.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-mt-style-css'  href='{{asset('tonsberg-child/style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-mt-style-css'  href='{{asset('css/gallery.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-mt-style-css'  href='{{asset('css/seamless.css')}}' type='text/css' media='all' />
    <style id='tonsberg-mt-style-inline-css' type='text/css'>
        body .tonsberg_preloader_holder{
            background-color: #ffffff;
        }
        body .tonsberg_preloader_holder .globe-loader {
            color: #ff2121 !important;
        }

        .is_header_semitransparent .navbar-default {
            background: rgba(35, 35, 49, 0.2) none repeat scroll 0 0;
        }
        .is_header_semitransparent .sticky-wrapper.is-sticky .navbar-default {
            background: rgba(35, 35, 49, 0.9) none repeat scroll 0 0;
        }.back-to-top {
             color: #ffffff !important;
         }
        .back-to-top:hover {
            color: #ffffff !important;
        }.single article .article-content p,
         p,
         .post-excerpt,
         ul,
         ul.tonsberg-list,
         ol,
         th,
         td,
         dt,
         dd,
         address{
             font-size: 15px;
             line-height: 25px;
             font-family: Montserrat;
             color: #686868;
         }
        .header3 #navbar .menu .menu-item a {
            font-family: Montserrat;
        }
        body{
            font-family: Montserrat;
        }
        h1,
        h1 span {
            font-family: "Libre Baskerville";
            font-size: 36px;
        }
        h2 {
            font-family: "Libre Baskerville";
            font-size: 30px;
        }
        h3 {
            font-family: "Libre Baskerville";
            font-size: 24px;
        }
        h4 {
            font-family: "Libre Baskerville";
            font-size: 18px;
        }
        h5 {
            font-family: "Libre Baskerville";
            font-size: 14px;
        }
        h6 {
            font-family: "Libre Baskerville";
            font-size: 12px;
        }
        input,
        textarea {
            font-family: Montserrat;
        }
        input[type="submit"] {
            font-family: Montserrat;
        }

        @media only screen and (max-width: 767px) {
            body h1,
            body h1 span{
                font-size: 26px !important;
                line-height: 29px !important;
            }
            body h2{
                font-size: 24px !important;
                line-height: 27px !important;
            }
            body h3{
                font-size: 22px !important;
                line-height: 25px !important;
            }
            body h4{
                font-size: 19px !important;
                line-height: 22px !important;
            }
            body h5{
                font-size: 16px !important;
                line-height: 19px !important;
            }
            body h6{
                font-size: 14px !important;
                line-height: 17px !important;
            }
        }
        @media only screen and (max-width: 767px) {
            #navbar .sub-menu .menu-item > a:hover {
                color: #ff2222 !important;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            body h1,
            body h1 span{
                font-size: 36px !important;
                line-height: 39px !important;
            }
            body h2{
                font-size: 32px !important;
                line-height: 36px !important;
            }
            body h3{
                font-size: 28px !important;
                line-height: 32px !important;
            }
            body h4{
                font-size: 24px !important;
                line-height: 27px !important;
            }
            body h5{
                font-size: 20px !important;
                line-height: 23px !important;
            }
            body h6{
                font-size: 18px !important;
                line-height: 21px !important;
            }
        }.breadcrumb a::after {
             content: "/";
         }
        body{
            background: #ffffff;
        }
        .logo img,
        .navbar-header .logo img {
            max-width: 200px;
        }
        ::selection{
            color: #ffffff;
            background: #222222;
        }
        ::-moz-selection { /* Code for Firefox */
            color: #ffffff;
            background: #222222;
        }

        a{
            color: #222222;
        }
        a:focus,
        a:hover{
            color: #222222;
        }

        /*------------------------------------------------------------------
            COLOR
        ------------------------------------------------------------------*/
        a,
        a:hover,
        a:focus,
        .mt_car--tax-type,
        span.amount,
        .widget_popular_recent_tabs .nav-tabs li.active a,
        .widget_archive li:hover a,
        .pricing-table.recomended .button.solid-button,
        .pricing-table .table-content:hover .button.solid-button,
        .pricing-table.Recommended .button.solid-button,
        .pricing-table.recommended .button.solid-button,
        #sync2 .owl-item.synced .post_slider_title,
        #sync2 .owl-item:hover .post_slider_title,
        #sync2 .owl-item:active .post_slider_title,
        .pricing-table.recomended .button.solid-button,
        .pricing-table .table-content:hover .button.solid-button,
        .testimonial-author,
        .testimonials-container blockquote::before,
        .testimonials-container blockquote::after,
        .post-author > a,
        h2 span,
        label.error,
        .author-name,
        .prev-next-post a:hover,
        .prev-text,
        .wpb_button.btn-filled:hover,
        .next-text,
        .social ul li a:hover i,
        .wpcf7-form span.wpcf7-not-valid-tip,
        .text-dark .statistics .stats-head *,
        .wpb_button.btn-filled,
        footer ul.menu li.menu-item a:hover,
        .widget_meta li:hover,
        .widget_meta li:hover a,
        .widget_meta a:hover,
        .widget_pages li a:hover,
        .widget_pages li .children li a:hover,
        .blogloop-v1 .post-name a:hover,
        .blogloop-v2 .post-name a:hover,
        .blogloop-v3 .post-name a:hover,
        .blogloop-v4 .post-name a:hover,
        .blogloop-v5 .post-name a:hover,
        .post-category-comment-date span a:hover,
        .list-view .post-details .post-category-comment-date a:hover,
        .simple_sermon_content_top h4,
        .page_404_v1 h1,
        .mt_cars--single-main-pic .post-name > a,
        .widget_recent_comments li:hover a,
        .sidebar-content .widget-title a:hover,
        .widget_rss li a:hover,
        .list-view .post-details .post-name a:hover,
        .blogloop-v5 .post-details .post-sticky-label i,
        header.header2 .header-info-group .header_text_title strong,
        .widget_recent_entries li:hover a,
        .blogloop-v1 .post-details .post-sticky-label i,
        .blogloop-v2 .post-details .post-sticky-label i,
        .blogloop-v3 .post-details .post-sticky-label i,
        .blogloop-v4 .post-details .post-sticky-label i,
        .blogloop-v5 .post-details .post-sticky-label i,
        .mt_listing--price-day.mt_listing--price .mt_listing_price,
        .mt_listing--price-day.mt_listing--price .mt_listing_currency,
        .mt_listing--price-day.mt_listing--price .mt_listing_per,
        .error-404.not-found h1,
        .header-info-group i,
        .related.products ul.products li.product .button,
        .error-404.not-found h1,
        .header-info-group i,
        body .lms-course-infos i,
        h4.testimonial02_title,
        .action-expand::after,
        .single-icondrops-content .skill,
        .tonsberg-single-list-item i.cc,
        .single .single-icondrops-related-listings i.cc,
        .list-view .post-details .post-excerpt .more-link:hover,
        .header4 header .right-side-social-actions .social-links a:hover i,
        .single-icondrops-content h5 strong,
        .modeltheme-countdown .days-digit,
        .modeltheme-countdown .hours-digit,
        .modeltheme-countdown .minutes-digit,
        .modeltheme-countdown .seconds-digit,
        .widget_tonsberg_recent_entries_with_thumbnail li:hover a,
        #mt_posts_carousel_small .group-meta a:hover,
        #mt_posts_carousel_big_centered .group-meta a:hover,
        .blog-posts-shortcode-v2 .post-details .post-category,
        .mtlistings-ico-style-v2.iconfilter-shortcode .blog_custom_listings .post-name-listings a:hover,
        .mtlistings-events-style-v2 .events-title-subtitle h4 a:hover,
        .mtlistings-events-style-v2 .mt-single-event .mt-event-cat a:hover  {
            color: #222222;
        }

        .widget_popular_recent_tabs .nav-tabs li.active a,
        .widget_product_categories .cat-item:hover,
        .widget_product_categories .cat-item a:hover,
        .widget_archive li:hover,
        .widget_archive li:hover a,
        .widget_archive li a:hover,
        .widget_categories li a:hover,
        .widget_meta li:hover,
        .widget_meta li:hover a,
        .widget_meta a:hover,
        .widget_pages li a:hover,
        .widget_pages li .children li a:hover,
        .widget_recent_entries_with_thumbnail li:hover a,
        .widget_recent_entries li:hover,
        .widget_recent_entries li:hover a,
        .widget_recent_entries li a:hover,
        .widget_recent_comments li a:hover,
        .widget_rss li a:hover,
        .widget_nav_menu li a:hover
        {
            color: #222222;
        }


        /* NAVIGATION */
        .navstyle-v8.header3 #navbar .menu > .menu-item.current-menu-item > a,
        .navstyle-v8.header3 #navbar .menu > .menu-item:hover > a,
        .navstyle-v1.header2 #navbar .menu > .menu-item:hover > a,
        .navstyle-v4 #navbar .menu > .menu-item.current-menu-item > a,
        .navstyle-v4 #navbar .menu > .menu-item:hover > a,
        .navstyle-v3 #navbar .menu > .menu-item.current-menu-item > a,
        .navstyle-v3 #navbar .menu > .menu-item:hover > a,
        .navstyle-v3 #navbar .menu > .menu-item > a::before,
        .navstyle-v3 #navbar .menu > .menu-item > a::after,
        .navstyle-v2 #navbar .menu > .menu-item.current-menu-item > a,
        .navstyle-v2 #navbar .menu > .menu-item:hover > a{
            color: #222222;
        }
        .navstyle-v2.header3 #navbar .menu > .menu-item > a::before,
        .navstyle-v2.header3 #navbar .menu > .menu-item > a::after,
        .navstyle-v8 #navbar .menu > .menu-item > a::before,
        .navstyle-v7 #navbar .menu > .menu-item .sub-menu > .menu-item > a:hover,
        .navstyle-v7 #navbar .menu > .menu-item.current_page_item > a,
        .navstyle-v7 #navbar .menu > .menu-item.current-menu-item > a,
        .navstyle-v7 #navbar .menu > .menu-item:hover > a,
        .navstyle-v6 #navbar .menu > .menu-item.current_page_item > a,
        .navstyle-v6 #navbar .menu > .menu-item.current-menu-item > a,
        .navstyle-v6 #navbar .menu > .menu-item:hover > a,
        .navstyle-v5 #navbar .menu > .menu-item.current_page_item > a,
        .navstyle-v5 #navbar .menu > .menu-item.current-menu-item > a,
        .navstyle-v5 #navbar .menu > .menu-item:hover > a,
        .navstyle-v2 #navbar .menu > .menu-item > a::before,
        .navstyle-v2 #navbar .menu > .menu-item > a::after{
            background: #222222;
        }


        /* Color Dark / Hovers */
        .tonsberg-single-list-item i.cc:hover,
        .single .single-icondrops-related-listings i.cc:hover,
        .related-posts .post-name:hover a{
            color: #222222 !important;
        }

        /*------------------------------------------------------------------
            BACKGROUND + BACKGROUND-COLOR
        ------------------------------------------------------------------*/
        .tagcloud > a:hover,
        .modeltheme-icon-search,
        .wpb_button::after,
        .rotate45,
        .latest-posts .post-date-day,
        .latest-posts h3,
        .latest-tweets h3,
        .latest-videos h3,
        .button.solid-button,
        button.vc_btn,
        .pricing-table.recomended .table-content,
        .pricing-table .table-content:hover,
        .pricing-table.Recommended .table-content,
        .pricing-table.recommended .table-content,
        .pricing-table.recomended .table-content,
        .pricing-table .table-content:hover,
        .block-triangle,
        .owl-theme .owl-controls .owl-page span,
        body .vc_btn.vc_btn-blue,
        body a.vc_btn.vc_btn-blue,
        body button.vc_btn.vc_btn-blue,
        .pagination .page-numbers.current,
        .pagination .page-numbers:hover,
        #subscribe > button[type='submit'],
        .prev-next-post a:hover .rotate45,
        .masonry_banner.default-skin,
        .form-submit input,
        .member-header::after,
        .member-footer .social::before,
        .member-footer .social::after,
        .subscribe > button[type='submit'],
        .no-results input[type='submit'],
        h3#reply-title::after,
        .newspaper-info,
        header.header1 .header-nav-actions .shop_cart,
        .categories_shortcode .owl-controls .owl-buttons i:hover,
        .widget-title:after,
        h2.heading-bottom:after,
        .single .content-car-heading:after,
        .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active,
        #primary .main-content ul li:not(.rotate45)::before,
        .wpcf7-form .wpcf7-submit,
        ul.ecs-event-list li span,
        #contact_form2 .solid-button.button,
        .navbar-default .navbar-toggle .icon-bar,
        .modeltheme-search .search-submit,
        .pricing-table.recommended .table-content .title-pricing,
        .pricing-table .table-content:hover .title-pricing,
        .pricing-table.recommended .button.solid-button,
        .blogloop-v5 .absolute-date-badge span,
        .post-category-date a[rel="tag"],
        #navbar .mt-icon-list-item:hover,
        .mt_car--single-gallery.mt_car--featured-single-gallery:hover,
        footer .mc4wp-form-fields input[type="submit"],
        .modeltheme-pagination.pagination .page-numbers.current,
        .pricing-table .table-content:hover .button.solid-button,
        footer .footer-top .menu .menu-item a::before,
        .mt-car-search .submit .form-control,
        .blogloop-v4.list-view .post-date,
        header .top-header,
        .navbar-toggle .icon-bar,
        .hover-components .component a:hover,
        .related.products span.onsale,
        table.compare-list .add-to-cart td a,
        .shop_cart,
        .panel-single-icondrops,
        .single-mt_listing .single-icondrops,
        #listings_metaboxs input[type="submit"],
        .mt_listing--single-price-inner,
        input.wpcf7-form-control.wpcf7-submit,
        .mt-single-event-head,
        .mt_listing .single-icondrops-content .progress,
        .post-password-form input[type="submit"],
        .widget.widget_product_search button,
        .search-form input[type="submit"],
        .slider_navigation .btn,
        .pagination .page-numbers,
        .modeltheme-content > div,
        .single-mt_listing .mt_listing_website_button:hover,
        .single-mt_listing .mt_listing_website_button:hover,
        .single-mt_listing .mt_listing_whitepaper_button:hover,
        .single-mt_listing .mt_listing_purchase_button:hover,
        .single-mt_listing .mt_listing_video_button:hover,
        #listings_metaboxs .cmb-type-title,
        .wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header a,
        .post-password-form input[type='submit'] {
            background: #222222;
        }
        .um-login input[type=submit].um-button,
        body .courses-list .featured_image_courses .course_badge i,
        body .courses-list .shortcode_course_content,
        .blog-posts-shortcode .time-n-date {
            background-color: #222222 !important;
        }
        .modeltheme-search.modeltheme-search-open .modeltheme-icon-search,
        .no-js .modeltheme-search .modeltheme-icon-search,
        .modeltheme-icon-search:hover,
        .latest-posts .post-date-month,
        .button.solid-button:hover,
        body .vc_btn.vc_btn-blue:hover,
        body a.vc_btn.vc_btn-blue:hover,
        .post-category-date a[rel="tag"]:hover,
        body button.vc_btn.vc_btn-blue:hover,
        .blogloop-v5 .absolute-date-badge span:hover,
        .mt-car-search .submit .form-control:hover,
        #contact_form2 .solid-button.button:hover,
        .subscribe > button[type='submit']:hover,
        footer .mc4wp-form-fields input[type="submit"]:hover,
        .no-results.not-found .search-submit:hover,
        .no-results input[type='submit']:hover,
        ul.ecs-event-list li span:hover,
        .pricing-table.recommended .table-content .price_circle,
        .pricing-table .table-content:hover .price_circle,
        #modal-search-form .modal-content input.search-input,
        .wpcf7-form .wpcf7-submit:hover,
        .form-submit input:hover,
        .wpcf7-form .wpcf7-submit,
        .mt_listing_end_date_pick,
        .mt_listing_start_date_pick,
        .blogloop-v4.list-view .post-date a:hover,
        .pricing-table.recommended .button.solid-button:hover,
        .search-form input[type="submit"]:hover,
        .modeltheme-pagination.pagination .page-numbers.current:hover,
        .error-return-home.text-center > a:hover,
        .pricing-table .table-content:hover .button.solid-button:hover,
        .post-password-form input[type="submit"]:hover,
        .navbar-toggle .navbar-toggle:hover .icon-bar,
        .widget.widget_product_search button:hover,
        .slider_navigation .btn:hover,
        .post-password-form input[type='submit']:hover,
        .tonsberg-filters .filter:hover {
            background: #222222;
        }
        .um-login input[type=submit].um-button:hover{
            background: #222222 !important;
        }

        .hover-components .component a,
        .flickr_badge_image a::after,
        .thumbnail-overlay,
        .portfolio-hover,
        .mt_listing--single-gallery .ico-screenshot:hover .flex-zone,
        .pastor-image-content .details-holder,
        .item-description .holder-top,
        blockquote::before {
            background: rgba(37,37,37, .7);
        }

        /*------------------------------------------------------------------
            BORDER-COLOR
        ------------------------------------------------------------------*/
        .comment-form input:focus,
        .comment-form textarea:focus,
        blockquote,
        .widget_popular_recent_tabs .nav-tabs > li.active,
        body .left-border,
        body .right-border,
        body .member-header,
        body .member-footer .social,
        body .button[type='submit'],
        .navbar ul li ul.sub-menu,
        .wpb_content_element .wpb_tabs_nav li.ui-tabs-active,
        #contact-us .form-control:focus,
        .sale_banner_holder:hover,
        .testimonial-img,
        .wpcf7-form input:focus,
        .wpcf7-form textarea:focus,
        .navbar-default .navbar-toggle:hover,
        .header_search_form,
        body .course-review-head, body .course-content > h3:first-child, body .course-curriculum-title,
        .list-view .post-details .post-excerpt .more-link:hover{
            border-color: #222222;
        }

        header .navbar-toggle,
        .navbar-default .navbar-toggle{
            border: 3px solid #222222;
        }
    </style>
    <link rel='stylesheet' id='tonsberg-blogloops-style-css'  href='{{asset('tonsberg/css/styles-module-blogloops.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-navigations-style-css'  href='{{asset('tonsberg/css/styles-module-navigations.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-header-style-css'  href='{{asset('tonsberg/css/styles-headers.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-footer-style-css'  href='{{asset('tonsberg/css/styles-footer.css')}}' type='text/css' media='all' />
    {{--<link rel='stylesheet' id='loaders-css'  href='{{asset('tonsberg/css/loaders.css')}}' type='text/css' media='all' />--}}
    <link rel='stylesheet' id='simple-line-icons-css'  href='{{asset('tonsberg/css/simple-line-icons.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='swipebox-css'  href='{{asset('tonsberg/css/swipebox.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='js-composer-css'  href='{{asset('tonsberg/css/js_composer.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-gutenberg-frontend-css'  href='{{asset('tonsberg/css/gutenberg-frontend.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-fonts-css'  href='//fonts.googleapis.com/css?family=Libre+Baskerville%3Aregular%2Citalic%2C700%2Clatin-ext%2Clatin%7CMontserrat%3A200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i&#038;ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.6' type='text/css' media='all' />
    <script>if (document.location.protocol != "https:") {document.location = document.URL.replace(/^http:/i, "https:");}</script>
    <script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/essential-gridzip/public/assets/js/jquery.esgbox.min.js?ver=2.3.1'></script>
    <script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/essential-gridzip/public/assets/js/jquery.themepunch.tools.min.js?ver=2.3.1'></script>
    <script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.8'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/tonsberg.modeltheme.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
        /* ]]> */
    </script>
    <link rel='https://api.w.org/' href='https://tonsberg.modeltheme.com/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://tonsberg.modeltheme.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://tonsberg.modeltheme.com/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.0.10" />

    <link rel="canonical" href="https://tonsberg.modeltheme.com/" />
    <link rel='shortlink' href='https://tonsberg.modeltheme.com/' />
    <link rel="alternate" type="application/json+oembed" href="https://tonsberg.modeltheme.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftonsberg.modeltheme.com%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://tonsberg.modeltheme.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftonsberg.modeltheme.com%2F&#038;format=xml" />
    <script type="text/javascript">
        var ajaxRevslider;

        jQuery(document).ready(function() {
            // CUSTOM AJAX CONTENT LOADING FUNCTION
            ajaxRevslider = function(obj) {

                // obj.type : Post Type
                // obj.id : ID of Content to Load
                // obj.aspectratio : The Aspect Ratio of the Container / Media
                // obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content

                var content = "";

                data = {};

                data.action = 'revslider_ajax_call_front';
                data.client_action = 'get_slider_html';
                data.token = 'dac91a9bef';
                data.type = obj.type;
                data.id = obj.id;
                data.aspectratio = obj.aspectratio;

                // SYNC AJAX REQUEST
                jQuery.ajax({
                    type:"post",
                    url:"https://tonsberg.modeltheme.com/wp-admin/admin-ajax.php",
                    dataType: 'json',
                    data:data,
                    async:false,
                    success: function(ret, textStatus, XMLHttpRequest) {
                        if(ret.success == true)
                            content = ret.data;
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });

                // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
                return content;
            };

            // CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
            var ajaxRemoveRevslider = function(obj) {
                return jQuery(obj.selector+" .rev_slider").revkill();
            };

            // EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
            var extendessential = setInterval(function() {
                if (jQuery.fn.tpessential != undefined) {
                    clearInterval(extendessential);
                    if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
                        jQuery.fn.tpessential.defaults.ajaxTypes.push({type:"revslider",func:ajaxRevslider,killfunc:ajaxRemoveRevslider,openAnimationSpeed:0.3});
                        // type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
                        // func: the Function Name which is Called once the Item with the Post Type has been clicked
                        // killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
                        // openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
                    }
                }
            },30);
        });
    </script>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://tonsberg.modeltheme.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.8 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">function setREVStartSize(e){
            try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
            }catch(d){console.log("Failure at Presize of Slider:"+d)}
        };</script>
    <style type="text/css" title="dynamic-css" class="options-output">.fixed-sidebar-menu{background-color:rgba(34,34,34,0.95);}#navbar .menu-item > a,
                                                                                                                                .navbar-nav .search_products a,
                                                                                                                                .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus,
                                                                                                                                .navbar-default .navbar-nav > li > a{color:#ffffff;}#navbar .menu-item.selected > a, #navbar .menu-item:hover > a, .navstyle-v1.header3 #navbar .menu > .menu-item:hover > a{color:#ff2222;}#navbar .sub-menu, .navbar ul li ul.sub-menu{background-color:#ff2222;}#navbar ul.sub-menu li a{color:#ffffff;}#navbar ul.sub-menu li a:hover{background-color:transparent;}body #navbar ul.sub-menu li a:hover, body #navbar ul.sub-menu li:hover a{color:#ffffff;}.navbar-default{background-color:#252525;}.fixed-sidebar-menu{background-color:#ffffff;}footer .footer-top{background-color:#fafafa;}footer .footer-top h1.widget-title, footer .footer-top h3.widget-title, footer .footer-top .widget-title{color:#222222;}.footer-row-1{padding-top:95px;padding-bottom:60px;}.footer-row-1{margin-top:0;margin-bottom:0;}.footer-row-1{border-top:0px solid #515b5e;border-bottom:0px solid #515b5e;border-left:0px solid #515b5e;border-right:0px solid #515b5e;}.footer-row-3{padding-top:0;padding-bottom:90px;}.footer-row-3{margin-top:0;margin-bottom:0;}.footer-row-3{border-top:0px solid #515b5e;border-bottom:0px solid #515b5e;border-left:0px solid #515b5e;border-right:0px solid #515b5e;}footer .footer h1.widget-title, footer .footer h3.widget-title, footer .footer .widget-title, .copyright_left, .copyright_right{color:#929292;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1542725956068{margin-bottom: 40px !important;padding-top: 0px !important;}.vc_custom_1541084976568{margin-top: 25px !important;margin-bottom: 0px !important;}.vc_custom_1541756931124{margin-top: 0px !important;margin-bottom: 50px !important;}.vc_custom_1541757041988{margin-top: 25px !important;margin-bottom: 80px !important;}.vc_custom_1541757057075{margin-bottom: 40px !important;}.vc_custom_1543846840525{margin-top: 25px !important;margin-bottom: 45px !important;}.vc_custom_1543830632519{margin-top: 15px !important;margin-bottom: 35px !important;}.vc_custom_1542894196145{margin-bottom: 5px !important;margin-left: -3px !important;}.vc_custom_1542894204675{margin-bottom: 30px !important;}.vc_custom_1542894213740{margin-bottom: 5px !important;margin-left: -3px !important;}.vc_custom_1542894220064{margin-bottom: 50px !important;}.vc_custom_1542895891650{margin-bottom: 5px !important;margin-left: -3px !important;}.vc_custom_1542895897638{margin-bottom: 30px !important;}.vc_custom_1542895921467{margin-bottom: 5px !important;margin-left: -3px !important;}.vc_custom_1542895939329{margin-bottom: 30px !important;}.vc_custom_1542895969592{margin-bottom: 5px !important;margin-left: -3px !important;}.vc_custom_1542895977230{margin-bottom: 30px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body data-rsssl=1 class="home page-template-default page page-id-15 widgets_v2 active-modeltheme-framework active-redux-framework navstyle-v1        header3   wpb-js-composer js-comp-ver-5.6 vc_responsive">




<div class="modeltheme-overlay"></div>

<!-- Fixed Search Form -->
<div class="fixed-search-overlay">
    <!-- Close Sidebar Menu + Close Overlay -->
    <i class="icon-close icons"></i>
    <!-- INSIDE SEARCH OVERLAY -->
    <div class="fixed-search-inside">
        <div class="modeltheme-search container">
            <form method="GET" action="https://tonsberg.modeltheme.com/">
                <input class="search-input" placeholder="Введите поисковый запрос..." type="search" value="" name="s" id="search" />
                <i class="fa fa-search"></i>
                <input type="hidden" name="post_type" value="post" />
            </form>
            <div class="esc-search">Нажмите клавишу ESC, чтобы закрыть поиск</div>
        </div>
    </div>
</div>

<!-- Fixed Sidebar Overlay -->
<div class="fixed-sidebar-menu-overlay"></div>
<!-- Fixed Sidebar Menu -->
<div class="relative fixed-sidebar-menu-holder header7">
    <div class="fixed-sidebar-menu">
        <!-- Close Sidebar Menu + Close Overlay -->
        <i class="icon-close icons"></i>
        <!-- Sidebar Menu Holder -->
        <div class="header7 sidebar-content">
            <!-- RIGHT SIDE -->
            <div class="left-side"></div>
        </div>
    </div>
</div>


<!-- PAGE #page -->
<div id="page" class="hfeed site">
    <header class="header3">

        <div class="logo-infos">

            <!-- BOTTOM BAR -->
            <div class="container">


                <div class="row logo-infos-row add_place_banner">

                    <!-- LOGO HOLDER -->
                    <div class="navbar-header col-md-3">
                        <h3 class="logo">
                            <a href="/" class="text-uppercase">
                                {{--<img src="{{asset('images/logo.png')}}" alt="Qazaqstan-ADS" />--}}
                                Qazaqstan <span class="text-danger">ADS</span>
                            </a>
                        </h3>

                        <!-- NAVIGATION BURGER MENU -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- RIGHT SIDE HOLDER -->
                    <div class="col-md-9 social-links-column">
                        <div class="add-banner-header">
                            <a href="@if($header_advert) {{$header_advert->link}} @else {{'#'}} @endif" target="_blank">
                                @if($header_advert)
                                    <img src="{{asset('upload/'.$header_advert->file_hash)}}" width="728px" height="90px" alt="{{$header_advert->title}}" />

                                @else
                                    <img src="{{asset('images/adplace-header.jpg')}}" alt="" />
                                @endif
                            </a>

                        </div>


                        <ul class="social-links social-links-labels text-right">
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://telegram.org/"><i class="fa fa-telegram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>



        <!-- BOTTOM BAR -->
        <nav class="navbar navbar-default" id="modeltheme-main-head">
            <div class="container">
                <div class="row modeltheme-main-head-row">
                    <!-- NAV MENU -->
                    <div class="col-md-1 right-side-social-actions">
                        <!-- ACTIONS BUTTONS GROUP -->
                        <div class="actions-group">
                            <!-- MT BURGER -->
                            <div id="mt-nav-burger">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>


                    <div id="navbar" class="navbar-collapse collapse col-md-10">
                        <ul class="menu nav navbar-nav nav-effect nav-menu">
                            <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-reklama current-menu-ancestor current-menu-parent menu-item-has-children menu-item-7">
                                <a href="/">Реклама</a>
                            </li>
                            <li id="menu-item-323" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-323">
                                <a href="{{route('about')}}">Компания</a>
                            </li>

                        </ul>
                    </div>

                    <div class="header-nav-actions col-md-1 text-right">
                        <a href="#" class="mt-search-icon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- HEADER TITLE BREADCRUBS SECTION -->


    <!-- Page content -->
    <div id="primary" class="no-padding content-area no-sidebar">
        <div class="container">
            <div class="row">
                <main id="main" class="col-md-12 site-main main-content">


                    <article id="post-15" class="post-15 page type-page status-publish hentry">

                        <div class="entry-content mt-lg-3" >
                            @yield('content')

                        </div><!-- .entry-content -->

                    </article><!-- #post-## -->

                </main>
            </div>
        </div>
    </div>

    <!-- loader -->
{{--<div class="tonsberg_preloader_holder">--}}
{{--<div class="globe-wrapper">--}}
{{--<div class="globe-loader fa fa-globe">--}}
{{--<i class="fa fa-fighter-jet"></i>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<!-- BEGIN: FLOATING SOCIAL BUTTON -->
    <!-- END: FLOATING SOCIAL BUTTON -->

    <!-- BACK TO TOP BUTTON -->
    <a class="back-to-top modeltheme-is-visible modeltheme-fade-out" href="#0">
        <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
    </a>

    <!-- FOOTER -->
    <footer>

        <!-- FOOTER TOP -->
        <div class="row footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 footer-row-1">
                        <div class="row"><div class="col-md-12 sidebar-1">
                                <aside id="custom_html-6" class="widget_text widget vc_column_vc_container widget_custom_html">
                                    <div class="textwidget custom-html-widget"><div style="text-align:center">
                                            <a href="@if($footer_advert) {{$footer_advert->link}} @else {{'#'}} @endif" target="_blank">

                                                @if($footer_advert)
                                                    <img src="{{asset('upload/'.$footer_advert->file_hash)}}" width="728px" height="90px" alt="{{$footer_advert->title}}" />

                                                @else
                                                    <img src="{{asset('images/adplace-header.jpg')}}" alt="" />
                                                @endif;


                                            </a>
                                        </div></div></aside></div></div></div></div>
                <div class="row"><div class="col-md-12 footer-row-2"><div class="row"></div></div></div>

            </div>
        </div>

        <!-- FOOTER BOTTOM -->
        <div class="footer-div-parent">
            <div class="container footer">
                <div class="container_inner_footer">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="copyright text-center">
                                <span class="copyright_left">Qazaqstan-ADS. All Rights Reserved</span><span class="copyright_right">2020</span>                                                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


<link rel='stylesheet' id='animate-css-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css?ver=5.6' type='text/css' media='all' />
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"https:\/\/tonsberg.modeltheme.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
    /* ]]> */
</script>
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var sb_instagram_js_options = {"sb_instagram_at":"","font_method":"svg"};
    /* ]]> */
</script>
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/instagram-feed/js/sb-instagram.min.js?ver=1.10.2'></script>
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/js/classie.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/js/mt-plugins.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/js/select2.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/js/modeltheme-custom.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/js/mt-video/jquery.magnific-popup.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/js/mt-coundown-version2/flipclock.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-content/plugins/modeltheme-framework/js/map-pins.js?ver=1.0.0'></script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_a73f0699c4ef6d41ce82babb8321ee94","fragment_name":"wc_fragments_a73f0699c4ef6d41ce82babb8321ee94"};
    /* ]]> */
</script>
<script type='text/javascript'>
    jQuery( 'body' ).bind( 'wc_fragments_refreshed', function() {
        jQuery( 'body' ).trigger( 'jetpack-lazy-images-load' );
    } );

</script>
{{--<script type='text/javascript' src='{{asset('js/app.js')}}'></script>--}}
<script type='text/javascript' src='{{asset('js/gallery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/seamless.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/bootstrap.min.js')}}'></script>
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-includes/js/jquery/jquery.form.min.js?ver=4.2.1'></script>


<script type='text/javascript' src='{{asset('tonsberg/js/modernizr.custom.js')}}'></script>

<script type='text/javascript' src='{{asset('tonsberg/js/jquery.ketchup.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/jquery.validation.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/jquery.sticky.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/uisearch.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/jquery.parallax.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/jquery.appear.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/jquery.countTo.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/owl.carousel.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/modernizr.viewport.js')}}'></script>

<script type='text/javascript' src='{{asset('tonsberg/js/animate.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/jquery.countdown.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/wow.min.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/jquery.sticky-kit.min.js')}}'></script>
{{--<script type='text/javascript' src='{{asset('tonsberg/js/loaders.js')}}'></script>--}}
<script type='text/javascript' src='{{asset('tonsberg/js/swipebox.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/owl.carousel.min.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/tonsberg-custom.js')}}'></script>

</body>
</html>
