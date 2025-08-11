@extends('layouts.app')

@section('title', 'Frequent Asked Question')

@section('home page-template page-template-elementor_header_footer page page-id-10844 ehf-header ehf-footer
    ehf-template-abuild ehf-stylesheet-abuild rs-smoother-yes elementor-default elementor-template-full-width
    elementor-kit-10911 elementor-page elementor-page-10844')

@section('content')


    <link rel="stylesheet"
        href="{{ asset('css/site/siteground-optimizer-combined-css-1a87ff0a163eeae93bca69474e997bc2.css') }}">


    <div data-elementor-type="wp-post" data-elementor-id="616" class="elementor elementor-616">
        <div class="no-position elementor-element elementor-element-8556aff e-flex e-con-boxed e-con e-parent e-lazyloaded"
            data-id="8556aff" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-09e87c8 gsap-move-no elementor-widget elementor-widget-page-title"
                    data-id="09e87c8" data-element_type="widget" data-settings="{&quot;align&quot;:&quot;center&quot;}"
                    data-widget_type="page-title.default">
                    <div class="elementor-widget-container">

                        <div class="hfe-page-title hfe-page-title-wrapper elementor-widget-heading">

                            <h1 class="elementor-heading-title elementor-size">
                                {{ $project['name'] }} </h1>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7b5b08d gsap-move-no elementor-widget elementor-widget-rs-breadcrumb"
                    data-id="7b5b08d" data-element_type="widget" data-widget_type="rs-breadcrumb.default">
                    <div class="elementor-widget-container">
                        <div class="breadcrumb-area style2">
                            <div class="breadcrumbs-inner">
                                <!-- Breadcrumb NavXT 7.4.1 -->
                                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                        title="Go to Abuild Construction WordPress Theme." href="{{ route('homepage') }}"
                                        class="home"><span property="name">Home</span></a>
                                    <meta property="position" content="1">
                                </span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item"
                                        typeof="WebPage" title="Go to the Building Portfolio Categories archives."
                                        href="{{ route('project.project_detail') }}?slug={{ $project['slug'] }}"
                                        class="taxonomy portfolios-category"><span
                                            property="name">{{ $project['slug'] }}</span></a>
                                    <meta property="position" content="2">
                                </span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name"
                                        class="post post-portfolios current-item">{{ $project['name'] }}</span>
                                    <meta property="url"
                                        content="{ route('project.project_detail') }}?slug={{ $project['slug'] }}">
                                    <meta property="position" content="3">
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="no-position elementor-element elementor-element-629c66d3 e-flex e-con-boxed e-con e-parent e-lazyloaded"
            data-id="629c66d3" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="no-position  rs-sticky-default elementor-element elementor-element-58a06139 e-flex e-con-boxed e-con e-child"
                    data-id="58a06139" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-6a7fec51 gsap-move-no elementor-widget elementor-widget-rs-image"
                            data-id="6a7fec51" data-element_type="widget" data-widget_type="rs-image.default">
                            <div class="elementor-widget-container">

                                <div class="rs-image no ruler_image_ ruler_position_ scroll_reveal reveal_left reveal-active"
                                    style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                    <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                                        src="{{ asset($project['show']) }}" alt="pro-details"
                                        style="transform: translate(0px, 0px);">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="no-position  rs-sticky-default elementor-element elementor-element-5e8979bb e-flex e-con-boxed e-con e-child"
                    data-id="5e8979bb" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="no-position  rs-sticky-default elementor-element elementor-element-36f35878 e-con-full e-flex e-con e-child"
                            data-id="36f35878" data-element_type="container">
                            <div class="no-position  rs-sticky-default elementor-element elementor-element-7596c3d2 e-con-full e-flex e-con e-child"
                                data-id="7596c3d2" data-element_type="container">
                                <div class="elementor-element elementor-element-4850718f gsap-move-no elementor-widget elementor-widget-rs-heading"
                                    data-id="4850718f" data-element_type="widget" data-widget_type="rs-heading.default">
                                    <div class="elementor-widget-container">

                                        <div class="prelements-heading default    animate-">
                                            <div class="title-inner">
                                                <span class="sub-text">
                                                    Clients: </span>
                                                <h6 class="title rs-split-text-disable ">{{ $project['client'] }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="no-position  rs-sticky-default elementor-element elementor-element-69a7f260 e-con-full e-flex e-con e-child"
                                data-id="69a7f260" data-element_type="container">
                                <div class="elementor-element elementor-element-57c20046 gsap-move-no elementor-widget elementor-widget-rs-heading"
                                    data-id="57c20046" data-element_type="widget" data-widget_type="rs-heading.default">
                                    <div class="elementor-widget-container">

                                        <div class="prelements-heading default    animate-">
                                            <div class="title-inner">
                                                <span class="sub-text">
                                                    Category: </span>
                                                <h6 class="title rs-split-text-disable ">{{ $project['category'] }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="no-position  rs-sticky-default elementor-element elementor-element-4c273ab0 e-con-full e-flex e-con e-child"
                                data-id="4c273ab0" data-element_type="container">
                                <div class="elementor-element elementor-element-5e8eafab gsap-move-no elementor-widget elementor-widget-rs-heading"
                                    data-id="5e8eafab" data-element_type="widget" data-widget_type="rs-heading.default">
                                    <div class="elementor-widget-container">

                                        <div class="prelements-heading default    animate-">
                                            <div class="title-inner">
                                                <span class="sub-text">
                                                    Timeframe: </span>
                                                <h6 class="title rs-split-text-disable ">{{ $project['timeframe'] }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="no-position  rs-sticky-default elementor-element elementor-element-1ca1fecb e-con-full e-flex e-con e-child"
                                data-id="1ca1fecb" data-element_type="container">
                                <div class="elementor-element elementor-element-3c00de0d gsap-move-no elementor-widget elementor-widget-rs-heading"
                                    data-id="3c00de0d" data-element_type="widget" data-widget_type="rs-heading.default">
                                    <div class="elementor-widget-container">

                                        <div class="prelements-heading default    animate-">
                                            <div class="title-inner">
                                                <span class="sub-text">
                                                    Website Link: </span>
                                                <h6 class="title rs-split-text-disable ">{{ $project['link'] }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="no-position  rs-sticky-default elementor-element elementor-element-3915b69c e-con-full e-flex e-con e-child"
                            data-id="3915b69c" data-element_type="container">
                            <div class="elementor-element elementor-element-3907b3fa elementor-widget__width-initial elementor-widget-mobile__width-inherit gsap-move-no elementor-widget elementor-widget-rs-heading"
                                data-id="3907b3fa" data-element_type="widget" data-widget_type="rs-heading.default">
                                <div class="elementor-widget-container">

                                    <div class="prelements-heading default    animate-">
                                        <div class="title-inner">

                                        </div>
                                        <div class="description">
                                            <p>{!! $project['content'] !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media-gallery">
                            <div class="images">
                                <h3>Images</h3>
                                <div class="image-list">
                                    @foreach ($project['images'] as $image)
                                        <img src="{{ asset($image) }}" alt="Project Image" />
                                    @endforeach
                                </div>
                            </div>

                            <div class="videos">
                                <h3>Videos</h3>
                                <div class="video-list">
                                    @foreach ($project['videos'] as $video)
                                        <video controls>
                                            <source src="{{ asset($video) }}" type="video/mp4" />
                                            Your browser does not support the video tag.
                                        </video>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <style>
                            .media-gallery {
                                display: flex;
                                gap: 40px;
                                flex-wrap: wrap;
                            }

                            .images,
                            .videos {
                                flex: 1 1 300px;
                            }

                            .image-list {
                                display: flex;
                                gap: 15px;
                                flex-wrap: wrap;
                            }

                            .image-list img {
                                width: 150px;
                                height: 100px;
                                object-fit: cover;
                                border-radius: 6px;
                                box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
                                cursor: pointer;
                                transition: transform 0.2s ease;
                            }

                            .image-list img:hover {
                                transform: scale(1.05);
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
                            }

                            .video-list video {
                                width: 100%;
                                max-width: 500px;
                                border-radius: 6px;
                                box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
                            }
                        </style>

                    </div>
                </div>
                <div class="no-position  rs-sticky-default elementor-element elementor-element-559f0182 e-flex e-con-boxed e-con e-child"
                    data-id="559f0182" data-element_type="container">
                    <div class="e-con-inner">
                        < <div
                            class="no-position  rs-sticky-default elementor-element elementor-element-41766d34 e-con-full e-flex e-con e-child"
                            data-id="41766d34" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-element elementor-element-464b026b gsap-move-no elementor-widget elementor-widget-rspostnavigation"
                                data-id="464b026b" data-element_type="widget"
                                data-widget_type="rspostnavigation.default">
                                <div class="elementor-widget-container">
                                    <div class="rs-post-navigation rs-portfolio-navigation">
                                        <ul>
                                            <li class="prev">
                                                <a href="{{ route('project.project_detail') }}?slug={{ $prev['slug'] }}">
                                                    <span class="next_link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="8" viewBox="0 0 22 8" fill="none">
                                                            <path
                                                                d="M21 3.5C21.2761 3.5 21.5 3.72386 21.5 4C21.5 4.27614 21.2761 4.5 21 4.5V3.5ZM0.646446 4.35355C0.451185 4.15829 0.451185 3.84171 0.646446 3.64645L3.82843 0.464466C4.02369 0.269204 4.34027 0.269204 4.53553 0.464466C4.7308 0.659728 4.7308 0.976311 4.53553 1.17157L1.70711 4L4.53553 6.82843C4.7308 7.02369 4.7308 7.34027 4.53553 7.53553C4.34027 7.7308 4.02369 7.7308 3.82843 7.53553L0.646446 4.35355ZM21 4.5H1V3.5H21V4.5Z"
                                                                fill="white"></path>
                                                        </svg> Prev Post </span>
                                                    <span class="link_text">
                                                        {{ $prev['name'] }} </span>
                                                </a>
                                            </li>
                                            <li class="next">
                                                <a href="{{ route('project.project_detail') }}?slug={{ $next['slug'] }}">
                                                    <span class="next_link">
                                                        Next Post <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="8" viewBox="0 0 22 8" fill="none">
                                                            <path
                                                                d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5V3.5ZM21.3536 4.35355C21.5488 4.15829 21.5488 3.84171 21.3536 3.64645L18.1716 0.464466C17.9763 0.269204 17.6597 0.269204 17.4645 0.464466C17.2692 0.659728 17.2692 0.976311 17.4645 1.17157L20.2929 4L17.4645 6.82843C17.2692 7.02369 17.2692 7.34027 17.4645 7.53553C17.6597 7.7308 17.9763 7.7308 18.1716 7.53553L21.3536 4.35355ZM1 4.5H21V3.5H1V4.5Z"
                                                                fill="white"></path>
                                                        </svg> </span>
                                                    <span class="link_text">
                                                        {{ $next['name'] }} </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
