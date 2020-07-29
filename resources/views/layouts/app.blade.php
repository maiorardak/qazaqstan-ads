<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Qazaqstan ADS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--tonsberg-script -->
    <script src="{{ asset('tonsberg/js/animate.js') }}"></script>
    <script src="{{ asset('tonsberg/js/loaders.js') }}"></script>
    <script src="{{ asset('tonsberg/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('tonsberg/js/modernizr.viewport.js') }}"></script>
    <script src="{{ asset('tonsberg/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('tonsberg/js/swipebox.js') }}"></script>
    <script src="{{ asset('tonsberg/js/tonsberg-custom.js') }}"></script>
    <script src="{{ asset('tonsberg/js/uisearch.js') }}"></script>
    <script src="{{ asset('tonsberg/js/wow.min.js') }}"></script>
    <script src="{{ asset('tonsberg/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('tonsberg/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('tonsberg/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('tonsberg/js/jquery.ketchup.js') }}"></script>
    <script src="{{ asset('tonsberg/js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('tonsberg/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('tonsberg/js/jquery.sticky-kit.js') }}"></script>
    <script src="{{ asset('tonsberg/js/jquery.validation.js') }}"></script>

    <!--end-tonsberg-script -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5d5a092e04.js" crossorigin="anonymous"></script>
    <!-- tonsberg style-->
    <link href="{{ asset('tonsberg/css/styles-module-blogloops.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/styles-module-navigations.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/styles-headers.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/styles-footer.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/loaders.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/swipebox.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/js_composer.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/gutenberg-frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/media-screens.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('tonsberg/css/styles.css') }}" rel="stylesheet">
    <!-- end--tonsberg-style -->

</head>
<body>
    <div id="page" class="hfeed site">
        {{--<header class="header3">--}}

            {{--<div class="logo-infos">--}}

                {{--<!-- BOTTOM BAR -->--}}
                {{--<div class="container">--}}


                    {{--<div class="row logo-infos-row add_place_banner">--}}

                        {{--<!-- LOGO HOLDER -->--}}
                        {{--<div class="navbar-header col-md-3">--}}

                            {{--<h1 class="logo">--}}
                                {{--<a href="https://tonsberg.modeltheme.com">--}}
                                    {{--<img src="https://tonsberg.modeltheme.com/wp-content/uploads/2018/11/logo-transparent.png" alt="Tonsberg">--}}
                                {{--</a>--}}
                            {{--</h1>--}}


                            {{--<!-- NAVIGATION BURGER MENU -->--}}
                            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}
                                {{--<span class="sr-only"></span>--}}
                                {{--<span class="icon-bar"></span>--}}
                                {{--<span class="icon-bar"></span>--}}
                                {{--<span class="icon-bar"></span>--}}
                            {{--</button>--}}
                        {{--</div>--}}

                        {{--<!-- RIGHT SIDE HOLDER -->--}}
                        {{--<div class="col-md-9 social-links-column">--}}
                            {{--<div class="add-banner-header">--}}
                                {{--<a href="https://" target="_blank">--}}
                                    {{--<img src="https://tonsberg.modeltheme.com/wp-content/themes/tonsberg/images/adplace-header.jpg" alt="">--}}
                                {{--</a>--}}

                            {{--</div>--}}


                            {{--<ul class="social-links social-links-labels text-right">--}}
                                {{--<li><a href="https://twitter.com/https://twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
                                {{--<li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>--}}
                                {{--<li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>--}}
                                {{--<li><a href="https://telegram.org/"><i class="fa fa-telegram"></i></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}



            {{--<!-- BOTTOM BAR -->--}}
            {{--<nav class="navbar navbar-default" id="modeltheme-main-head">--}}
                {{--<div class="container">--}}
                    {{--<div class="row modeltheme-main-head-row">--}}
                        {{--<!-- NAV MENU -->--}}
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


                        {{--<div id="navbar" class="navbar-collapse collapse col-md-10">--}}
                            {{--<ul class="menu nav navbar-nav nav-effect nav-menu">--}}
                                {{--<li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-7"><a href="https://tonsberg.modeltheme.com/">Home</a>--}}
                                    {{--<ul class="sub-menu">--}}
                                        {{--<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-250"><a href="https://tonsberg.modeltheme.com/">Home v1</a></li>--}}
                                        {{--<li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="https://tonsberg.modeltheme.com/home-2/">Home v2</a></li>--}}
                                        {{--<li id="menu-item-260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260"><a href="https://tonsberg.modeltheme.com/home-3/">Home v3</a></li>--}}
                                        {{--<li id="menu-item-270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-270"><a href="https://tonsberg.modeltheme.com/home-4/">Home v4</a></li>--}}
                                        {{--<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-274"><a href="https://tonsberg.modeltheme.com/home-5/">Home v5</a></li>--}}
                                        {{--<li id="menu-item-282" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-282"><a href="https://tonsberg.modeltheme.com/home-6/">Home v6</a></li>--}}
                                        {{--<li id="menu-item-287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287"><a href="https://tonsberg.modeltheme.com/home-7/">Home v7</a></li>--}}
                                        {{--<li id="menu-item-293" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-293"><a href="https://tonsberg.modeltheme.com/home-v8/">Home v8</a></li>--}}
                                        {{--<li id="menu-item-297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-297"><a href="https://tonsberg.modeltheme.com/home-9/">Home v9</a></li>--}}
                                        {{--<li id="menu-item-383" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-383"><a href="https://tonsberg.modeltheme.com/home-10/">Home v10</a></li>--}}
                                        {{--<li id="menu-item-382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-382"><a href="https://tonsberg.modeltheme.com/home-11/">Home v11</a></li>--}}
                                        {{--<li id="menu-item-1780" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1780"><a href="https://tonsberg.modeltheme.com/home-12/">Home v12</a></li>--}}
                                        {{--<li id="menu-item-713" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-709 current_page_item menu-item-713"><a href="https://tonsberg.modeltheme.com/home-slider/">Home Slider</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li id="menu-item-323" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-323"><a href="#">Features</a>--}}
                                    {{--<ul class="sub-menu">--}}
                                        {{--<li id="menu-item-644" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-644"><a href="https://tonsberg.modeltheme.com/suggest-a-trip/">Suggest a Trip</a></li>--}}
                                        {{--<li id="menu-item-717" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-717"><a href="#">Post Formats</a>--}}
                                            {{--<ul class="sub-menu">--}}
                                                {{--<li id="menu-item-325" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-325"><a href="https://tonsberg.modeltheme.com/2018/11/05/the-trail-of-genghis-khan-epic-journey-through-the-land-of-the-nomads/">Standard Post</a></li>--}}
                                                {{--<li id="menu-item-324" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-324"><a href="https://tonsberg.modeltheme.com/2018/11/21/to-travel-is-worth-any-cost-or-sacrifice/">Travel Post</a></li>--}}
                                                {{--<li id="menu-item-443" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-443"><a href="https://tonsberg.modeltheme.com/2018/10/31/the-true-story-the-chang-tang-pa/">Audio Post</a></li>--}}
                                                {{--<li id="menu-item-445" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-445"><a href="https://tonsberg.modeltheme.com/2018/11/02/the-journey-is-my-home/">Quote Post</a></li>--}}
                                                {{--<li id="menu-item-1786" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1786"><a href="https://tonsberg.modeltheme.com/2018/12/11/welcome-to-the-gutenberg-editor/">Gutenberg Post</a></li>--}}
                                                {{--<li id="menu-item-444" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-444"><a href="https://tonsberg.modeltheme.com/2018/10/31/journey-through-the-sahara/">Video Post</a></li>--}}
                                                {{--<li id="menu-item-442" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-442"><a href="https://tonsberg.modeltheme.com/2018/10/01/young-african-elephants-racing-toward-the-water/">Gallery Post</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-716" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-716"><a href="#">Gallery</a>--}}
                                            {{--<ul class="sub-menu">--}}
                                                {{--<li id="menu-item-669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-669"><a href="https://tonsberg.modeltheme.com/gallery-grid/">Gallery Grid</a></li>--}}
                                                {{--<li id="menu-item-664" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-664"><a href="https://tonsberg.modeltheme.com/gallery-cobbles/">Gallery Cobbles</a></li>--}}
                                                {{--<li id="menu-item-665" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-665"><a href="https://tonsberg.modeltheme.com/gallery-masonry/">Gallery Masonry</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-707" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-707"><a href="https://tonsberg.modeltheme.com/typography/">Typography</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li id="menu-item-253" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-253"><a href="https://tonsberg.modeltheme.com/category/discover/">Discover</a></li>--}}
                                {{--<li id="menu-item-501" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-501"><a href="https://tonsberg.modeltheme.com/destinations/">Destinations</a></li>--}}
                                {{--<li id="menu-item-1503" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1503"><a href="#">Pages</a>--}}
                                    {{--<ul class="sub-menu">--}}
                                        {{--<li id="menu-item-561" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-561"><a href="https://tonsberg.modeltheme.com/shop/">Shop</a></li>--}}
                                        {{--<li id="menu-item-248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-248"><a href="https://tonsberg.modeltheme.com/about-me/">About me</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li id="menu-item-1504" class="mega3menu menu-item menu-item-type-custom menu-item-object-custom menu-item-1504"><a href="#">News</a><div class="cf-mega-menu sub-menu">--}}
                                        {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1544114794173"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="blog-posts simple-posts blog-posts-shortcode-v2 blog-posts-shortcode"><div class="row"><article class="single-post  wow fadeInUp list-view col-md-3 small-h animated" style="visibility: visible; animation-name: fadeInUp;">--}}
                                                                    {{--<div class="blog_custom"><!-- POST THUMBNAIL --><div class="col-md-12 post-thumbnail"><a class="relative" href="https://tonsberg.modeltheme.com/2018/11/05/the-trail-of-genghis-khan-epic-journey-through-the-land-of-the-nomads/"><img class="blog_post_image" src="https://tonsberg.modeltheme.com/wp-content/uploads/2018/11/the_trail_of_genghis_khan-800x800.jpg" alt="The trail of Genghis Khan: Epic journey through the land of the nomads."></a></div><!-- POST DETAILS -->--}}
                                                                        {{--<div class="post-details col-md-12">--}}
                                                                            {{--<div class="title-n-excerpt">--}}
                                                                                {{--<div class="post-tags">--}}

                                                                                    {{--<!-- POST META: TAGS --><span class="post-tags">--}}
		                              		{{--<span class="post-tags-list"><a href="https://tonsberg.modeltheme.com/tag/africa/" rel="tag">Africa</a></span>--}}
		                              {{--</span></div><h3 class="post-name row">--}}
                                                                                    {{--<a href="https://tonsberg.modeltheme.com/2018/11/05/the-trail-of-genghis-khan-epic-journey-through-the-land-of-the-nomads/" title="The trail of Genghis Khan: Epic journey through the land of the nomads.">The trail of Genghis Khan: Epic journey through the land of the nomads.</a>--}}
                                                                                {{--</h3>--}}

                                                                                {{--<div class="post-excerpt"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci</p></div>--}}

                                                                                {{--<div class="post-category-comment-date row">--}}

		                          	  	{{--<span class="author">--}}
		                          	  		{{--by <a href="https://tonsberg.modeltheme.com/author/admin/">John Casper</a>--}}
		                          		{{--</span>--}}

                                                                                    {{--<span class="post-date">--}}
		                                    {{--<span class="post-date-list">November 5, 2018</span>--}}
		                                {{--</span>--}}

                                                                                {{--</div>--}}

                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div></article><article class="single-post  wow fadeInUp list-view col-md-3 small-h animated" style="visibility: visible; animation-name: fadeInUp;">--}}
                                                                    {{--<div class="blog_custom"><!-- POST THUMBNAIL --><div class="col-md-12 post-thumbnail"><a class="relative" href="https://tonsberg.modeltheme.com/2018/11/05/the-family-life-in-harmony-with-awesome-nature/"><img class="blog_post_image" src="https://tonsberg.modeltheme.com/wp-content/uploads/2018/11/family_harmony_nature-800x800.jpg" alt="The family life in Harmony with awesome nature."></a></div><!-- POST DETAILS -->--}}
                                                                        {{--<div class="post-details col-md-12">--}}
                                                                            {{--<div class="title-n-excerpt">--}}
                                                                                {{--<div class="post-tags">--}}

                                                                                    {{--<!-- POST META: TAGS --><span class="post-tags">--}}
		                              		{{--<span class="post-tags-list"><a href="https://tonsberg.modeltheme.com/tag/discover/" rel="tag">Discover</a></span>--}}
		                              {{--</span></div><h3 class="post-name row">--}}
                                                                                    {{--<a href="https://tonsberg.modeltheme.com/2018/11/05/the-family-life-in-harmony-with-awesome-nature/" title="The family life in Harmony with awesome nature.">The family life in Harmony with awesome nature.</a>--}}
                                                                                {{--</h3>--}}

                                                                                {{--<div class="post-excerpt"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci</p></div>--}}

                                                                                {{--<div class="post-category-comment-date row">--}}

		                          	  	{{--<span class="author">--}}
		                          	  		{{--by <a href="https://tonsberg.modeltheme.com/author/admin/">John Casper</a>--}}
		                          		{{--</span>--}}

                                                                                    {{--<span class="post-date">--}}
		                                    {{--<span class="post-date-list">November 5, 2018</span>--}}
		                                {{--</span>--}}

                                                                                {{--</div>--}}

                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div></article><article class="single-post  wow fadeInUp list-view col-md-3 small-h animated" style="visibility: visible; animation-name: fadeInUp;">--}}
                                                                    {{--<div class="blog_custom"><!-- POST THUMBNAIL --><div class="col-md-12 post-thumbnail"><a class="relative" href="https://tonsberg.modeltheme.com/2018/11/01/the-old-man-is-painting-in-a-clay-pot-in-durbar-square-near-old-hindu-temples/"><img class="blog_post_image" src="https://tonsberg.modeltheme.com/wp-content/uploads/2018/11/the_old_man_is_painting_in_a_clay-800x800.jpg" alt="The old man is painting in a clay pot in Durbar square near old hindu temples."></a></div><!-- POST DETAILS -->--}}
                                                                        {{--<div class="post-details col-md-12">--}}
                                                                            {{--<div class="title-n-excerpt">--}}
                                                                                {{--<div class="post-tags">--}}

                                                                                    {{--<!-- POST META: TAGS --><span class="post-tags">--}}
		                              		{{--<span class="post-tags-list"><a href="https://tonsberg.modeltheme.com/tag/animals/" rel="tag">Animals</a></span>--}}
		                              {{--</span></div><h3 class="post-name row">--}}
                                                                                    {{--<a href="https://tonsberg.modeltheme.com/2018/11/01/the-old-man-is-painting-in-a-clay-pot-in-durbar-square-near-old-hindu-temples/" title="The old man is painting in a clay pot in Durbar square near old hindu temples.">The old man is painting in a clay pot in Durbar square near old hindu temples.</a>--}}
                                                                                {{--</h3>--}}

                                                                                {{--<div class="post-excerpt"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci</p></div>--}}

                                                                                {{--<div class="post-category-comment-date row">--}}

		                          	  	{{--<span class="author">--}}
		                          	  		{{--by <a href="https://tonsberg.modeltheme.com/author/admin/">John Casper</a>--}}
		                          		{{--</span>--}}

                                                                                    {{--<span class="post-date">--}}
		                                    {{--<span class="post-date-list">November 1, 2018</span>--}}
		                                {{--</span>--}}

                                                                                {{--</div>--}}

                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div></article><article class="single-post  wow fadeInUp list-view col-md-3 small-h animated" style="visibility: visible; animation-name: fadeInUp;">--}}
                                                                    {{--<div class="blog_custom"><!-- POST THUMBNAIL --><div class="col-md-12 post-thumbnail"><a class="relative" href="https://tonsberg.modeltheme.com/2018/10/31/the-true-story-sacred-highlands/"><img class="blog_post_image" src="https://tonsberg.modeltheme.com/wp-content/uploads/2018/10/sacred_highlands-800x800.jpg" alt="The True Story – Sacred Highlands"></a></div><!-- POST DETAILS -->--}}
                                                                        {{--<div class="post-details col-md-12">--}}
                                                                            {{--<div class="title-n-excerpt">--}}
                                                                                {{--<div class="post-tags">--}}

                                                                                    {{--<!-- POST META: TAGS --><span class="post-tags">--}}
		                              		{{--<span class="post-tags-list"><a href="https://tonsberg.modeltheme.com/tag/india/" rel="tag">India</a></span>--}}
		                              {{--</span></div><h3 class="post-name row">--}}
                                                                                    {{--<a href="https://tonsberg.modeltheme.com/2018/10/31/the-true-story-sacred-highlands/" title="The True Story – Sacred Highlands">The True Story – Sacred Highlands</a>--}}
                                                                                {{--</h3>--}}

                                                                                {{--<div class="post-excerpt"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci</p></div>--}}

                                                                                {{--<div class="post-category-comment-date row">--}}

		                          	  	{{--<span class="author">--}}
		                          	  		{{--by <a href="https://tonsberg.modeltheme.com/author/admin/">John Casper</a>--}}
		                          		{{--</span>--}}

                                                                                    {{--<span class="post-date">--}}
		                                    {{--<span class="post-date-list">October 31, 2018</span>--}}
		                                {{--</span>--}}

                                                                                {{--</div>--}}

                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div></article></div></div></div></div></div></div></div>--}}
                                {{--</li>--}}
                                {{--<li id="menu-item-247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-247"><a href="https://tonsberg.modeltheme.com/contact-us/">Contact</a>--}}
                                    {{--<ul class="sub-menu">--}}
                                        {{--<li id="menu-item-411" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-411"><a href="https://tonsberg.modeltheme.com/contact-us/">Contact  Us v1</a></li>--}}
                                        {{--<li id="menu-item-410" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-410"><a href="https://tonsberg.modeltheme.com/contact-us-v2/">Contact  Us v2</a></li>--}}
                                        {{--<li id="menu-item-409" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-409"><a href="https://tonsberg.modeltheme.com/contact-us-v3/">Contact  Us v3</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<div class="header-nav-actions col-md-1 text-right">--}}
                            {{--<a href="#" class="mt-search-icon">--}}
                                {{--<i class="fa fa-search" aria-hidden="true"></i>--}}
                            {{--</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</nav>--}}
        {{--</header>--}}
        {{--<nav class="navbar navbar-expand-md navbar-light bg-white">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                  {{--<h3>  {{ config('app.name', 'Qazaqstan ADS') }}</h3>--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}
                        {{--<li class="nav-item add-banner-header">--}}
                                {{--<a class="" href="#"><img src="{{ asset('images/728x90/adplace-header.jpg') }}" alt="Adplace header 728x90" width="100%"></a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--@if (Route::has('register'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link text-black" href="#">--}}
                                {{--<h4>--}}
                                    {{--<i class="fa fa-instagram"></i>--}}
                                {{--</h4>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link text-black" href="#"><h4><i class="fa fa-telegram"></i></h4></a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link text-black" href="#"><h4><i class="fa fa-twitter"></i></h4></a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link text-black" href="#"><h4><i class="fa fa-youtube"></i></h4></a>--}}
                        {{--</li>--}}

                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--<main class="py-4">--}}
            {{--@yield('content')--}}
        {{--</main>--}}

     <header>
         <div class="container">
             <div class="row">
                 <div class="col-md-3">
                     <h1 class="logo">
                     <a href="https://tonsberg.modeltheme.com">
                     <img src="{{ asset('tonsbergs/images/logo.png') }}" alt="Tonsberg">
                     </a>
                     </h1>
                 </div>
                 <div class="col-md-6"></div>
                 <div class="col-md-3"></div>
             </div>
         </div>
     </header>
    </div>
</body>
</html>
