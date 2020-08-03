<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('tonsberg/images/favicon.png') }}">

    <title>{{ config('app.name', 'Qazaqstan ADS') }}</title>


    <script src="https://kit.fontawesome.com/5d5a092e04.js" crossorigin="anonymous"></script>


    <link rel='stylesheet' id='tonsberg-mt-style-css'  href='{{asset('css/gallery.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-mt-style-css'  href='{{asset('css/seamless.css')}}' type='text/css' media='all' />

    <link rel='stylesheet' id='tonsberg-parent-style-css'  href='{{asset('tonsberg/style.css')}}' type='text/css' media='all' />
  <link rel='stylesheet' id='cryptocoins-css'  href='{{asset('tonsberg/fonts/cryptocoins.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-responsive-css'  href='{{asset('tonsberg/css/responsive.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-media-screens-css'  href='{{asset('tonsberg/css/media-screens.css')}}}' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel2-css'  href='{{asset('tonsberg/css/owl.carousel.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href='{{asset('tonsberg/css/animate.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-style-css'  href='{{asset('tonsberg/css/styles.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='tonsberg-mt-style-css'  href='{{asset('tonsberg-child/style.css')}}' type='text/css' media='all' />
    <style>
        #LeftFloatAds{
            left: 0px;
            position: fixed;
            text-align: center;
            top: 55%;
            font-size:14px;
            padding:5px 10px;
             height:250px;
            background-color: #ccc;
        }
        #RightFloatAds{
            right: 0px;
            position: fixed;
            text-align: center;
            top: 55%;
            font-size:14px;
            padding:5px 10px;
            height:250px;
            background-color: #ccc;
        }
    </style>
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




    <link rel='stylesheet' id='tp-open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-raleway-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-droid-serif-css'  href='https://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-barlow-condensed-css'  href='https://fonts.googleapis.com/css?family=Barlow+Condensed%3A100%2C200%2C300%2C400%2C500%2C600%2C700&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-source-code-pro-css'  href='https://fonts.googleapis.com/css?family=Source+Code+Pro%3A300%2C400%2C500%2C600%2C700&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-montserrat-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&#038;ver=5.0.10' type='text/css' media='all' />
    <link rel='stylesheet' id='tp-fontello-css'  href='https://tonsberg.modeltheme.com/wp-content/plugins/essential-gridzip/public/assets/font/fontello/css/fontello.css?ver=2.3.1' type='text/css' media='all' />

    <style type="text/css" title="dynamic-css" class="options-output">.fixed-sidebar-menu{background-color:rgba(34,34,34,0.95);}#navbar .menu-item > a,
                                                                                                                                .navbar-nav .search_products a,
                                                                                                                                .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus,
                                                                                                                                .navbar-default .navbar-nav > li > a{color:#ffffff;}#navbar .menu-item.selected > a, #navbar .menu-item:hover > a, .navstyle-v1.header3 #navbar .menu > .menu-item:hover > a{color:#ff2222;}#navbar .sub-menu, .navbar ul li ul.sub-menu{background-color:#ff2222;}#navbar ul.sub-menu li a{color:#ffffff;}#navbar ul.sub-menu li a:hover{background-color:transparent;}body #navbar ul.sub-menu li a:hover, body #navbar ul.sub-menu li:hover a{color:#ffffff;}.navbar-default{background-color:#252525;}.fixed-sidebar-menu{background-color:#ffffff;}footer .footer-top{background-color:#fafafa;}footer .footer-top h1.widget-title, footer .footer-top h3.widget-title, footer .footer-top .widget-title{color:#222222;}.footer-row-1{padding-top:95px;padding-bottom:60px;}.footer-row-1{margin-top:0;margin-bottom:0;}.footer-row-1{border-top:0px solid #515b5e;border-bottom:0px solid #515b5e;border-left:0px solid #515b5e;border-right:0px solid #515b5e;}.footer-row-3{padding-top:0;padding-bottom:90px;}.footer-row-3{margin-top:0;margin-bottom:0;}.footer-row-3{border-top:0px solid #515b5e;border-bottom:0px solid #515b5e;border-left:0px solid #515b5e;border-right:0px solid #515b5e;}footer .footer h1.widget-title, footer .footer h3.widget-title, footer .footer .widget-title, .copyright_left, .copyright_right{color:#929292;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1542725956068{margin-bottom: 40px !important;padding-top: 0px !important;}.vc_custom_1541084976568{margin-top: 25px !important;margin-bottom: 0px !important;}.vc_custom_1541756931124{margin-top: 0px !important;margin-bottom: 50px !important;}.vc_custom_1541757041988{margin-top: 25px !important;margin-bottom: 80px !important;}.vc_custom_1541757057075{margin-bottom: 40px !important;}.vc_custom_1543846840525{margin-top: 25px !important;margin-bottom: 45px !important;}.vc_custom_1543830632519{margin-top: 15px !important;margin-bottom: 35px !important;}.vc_custom_1542894196145{margin-bottom: 5px !important;margin-left: -3px !important;}.vc_custom_1542894204675{margin-bottom: 30px !important;}.vc_custom_1542894213740{margin-bottom: 5px !important;margin-left: -3px !important;}.vc_custom_1542894220064{margin-bottom: 50px !important;}.vc_custom_1542895891650{margin-bottom: 5px !important;margin-left: -3px !important;}.vc_custom_1542895897638{margin-bottom: 30px !important;}.vc_custom_1542895921467{margin-bottom: 5px !important;margin-left: -3px !important;}.vc_custom_1542895939329{margin-bottom: 30px !important;}.vc_custom_1542895969592{margin-bottom: 5px !important;margin-left: -3px !important;}.vc_custom_1542895977230{margin-bottom: 30px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>
{{--<link rel='stylesheet' href='{{asset('css/app.css')}}' type='text/css'/>--}}

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
                        <div class="add-banner-header" style="background-color: #000;">
                            <a href="@if($header_advert) {{$header_advert->link}} @else {{'#'}} @endif" target="_blank">
                                @if($header_advert)

                                    @if(in_array($header_advert->file_ext,['png','jpg','jpeg']))
                                        <img src="{{asset('upload/'.$header_advert->file_hash)}}" width="728px" height="90px" alt="{{$header_advert->title}}" />
                                    @else
                                        <video autoplay loop 	muted width="728" height="90"> <source src="{{asset('upload/'.$header_advert->file_hash)}}" ></video>
                                    @endif

                                @else
                                    <img src="{{asset('images/adplace-header.jpg')}}" alt="" />
                                @endif
                            </a>

                        </div>


                        <ul class="social-links social-links-labels text-right">

                            <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
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
                    {{--<div class="col-md-1 right-side-social-actions">--}}
                        {{--<!-- ACTIONS BUTTONS GROUP -->--}}
                        {{--<div class="actions-group">--}}
                            {{--<!-- MT BURGER -->--}}
                            {{--<div id="mt-nav-burger">--}}
                                {{--<span></span>--}}
                                {{--<span></span>--}}
                                {{--<span></span>--}}
                                {{--<span></span>--}}
                                {{--<span></span>--}}
                                {{--<span></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    <div id="navbar" class="navbar-collapse collapse col-md-8">
                        {{--<ul class="menu nav navbar-nav nav-effect nav-menu">/--}}
                            {{--<li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-reklama current-menu-ancestor current-menu-parent menu-item-has-children menu-item-7">--}}
                                {{--<a href="/">Реклама</a>--}}
                            {{--</li>--}}
                            {{--<li id="menu-item-323" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-323">--}}
                                {{--<a href="{{route('about')}}">Компания</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    </div>

                    <div id="navbar" class="col-md-4 navbar-collapse collapse text-right">

                        <ul class="menu nav navbar-nav nav-effect nav-menu">
                            <li id="menu-item" class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a href="{{route('contact-form')}}">Обратная связь <i class="fa fa-send"></i> </a>
                            </li>
                        <li id="menu-item" class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a href="{{asset('files/price_list.pdf')}}" download>Прайс лист  <i class="fa fa-download"></i> </a>
                        </li>
                        </ul>
                    </div>

                    {{--<div class="header-nav-actions col-md-2 text-right">--}}
                        {{--<a href="#" class="mt-search-icon">--}}
                            {{--<i class="fa fa-search" aria-hidden="true"></i>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                </div>
            </div>
        </nav>
    </header>
    <!-- HEADER TITLE BREADCRUBS SECTION -->


    <!-- Page content -->
    <div id="primary" class="no-padding content-area no-sidebar">


        <div class="container">
                <main id="main" class="col-md-12 site-main main-content">


                    <article id="post-15" class="post-15 page type-page status-publish hentry">

                        <div class="entry-content mt-lg-3" >
                                    @yield('content')

                        </div><!-- .entry-content -->

                    </article><!-- #post-## -->

                </main>
        </div>
        <div id="RightFloatAds">
            <p class="text-right small"><i class="fa fa-times"></i></p>
            <p class="small">Advert <br/> from <br/> GoogleAds</p> </div>
        <div id="LeftFloatAds"> <p class="text-right small"><i class="fa fa-times"></i></p>
            <p class="small">Advert <br/> from <br/> GoogleAds</p> </div>
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
                                    <div class="textwidget custom-html-widget">
                                        <div style="text-align:center;background-color: #000">
                                            <a href="@if($footer_advert) {{$footer_advert->link}} @else {{'#'}} @endif" target="_blank">

                                                @if($footer_advert)

                                                    @if(in_array($footer_advert->file_ext,['png','jpg','jpeg']))
                                                        <img src="{{asset('upload/'.$footer_advert->file_hash)}}" width="728px" height="90px" alt="{{$footer_advert->title}}" />

                                                    @else
                                                        <video autoplay width="728" height="90"> <source src="{{asset('upload/'.$footer_advert->file_hash)}}" ></video>
                                                    @endif

                                                @else
                                                    <img src="{{asset('images/adplace-header.jpg')}}" alt="" />
                                                @endif;



                                            </a>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div></div></div>
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
                                <span class="copyright_left">Qazaqstan-ADS. Все права защищены</span><span class="copyright_right">2020</span>                                                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>




{{--<script type='text/javascript' src='{{asset('js/app.js')}}'></script>--}}
<script type='text/javascript' src='https://tonsberg.modeltheme.com/wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='{{asset('js/gallery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/seamless.js')}}'></script>
<script type='text/javascript' src='{{asset('tonsberg/js/bootstrap.min.js')}}'></script>

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
<script type='text/javascript' src='{{asset('tonsberg/js/tonsberg-custom.js')}}'></script>

</body>
</html>
