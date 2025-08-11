@extends('layouts.app')

@section('title', 'Frequent Asked Question')

@section('home page-template page-template-elementor_header_footer page page-id-10844 ehf-header ehf-footer
    ehf-template-abuild ehf-stylesheet-abuild rs-smoother-yes elementor-default elementor-template-full-width
    elementor-kit-10911 elementor-page elementor-page-10844')

@section('content')
    <link rel="stylesheet"
        href="{{ asset('css/site/siteground-optimizer-combined-css-4e6c06c2e01fdf32896e3ca69cf91191.css') }}">


    <div data-elementor-type="wp-post" data-elementor-id="2117" class="elementor elementor-2117" style="transform: none;">
        <div class="no-position elementor-element elementor-element-9f43b0a e-flex e-con-boxed e-con e-parent e-lazyloaded"
            data-id="9f43b0a" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-e466bb4 gsap-move-no elementor-widget elementor-widget-page-title"
                    data-id="e466bb4" data-element_type="widget" data-settings="{&quot;align&quot;:&quot;center&quot;}"
                    data-widget_type="page-title.default">
                    <div class="elementor-widget-container">

                        <div class="hfe-page-title hfe-page-title-wrapper elementor-widget-heading">

                            <h1 class="elementor-heading-title elementor-size">
                                {{ $service['full_name'] }} </h1>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f366fb9 gsap-move-no elementor-widget elementor-widget-rs-breadcrumb"
                    data-id="f366fb9" data-element_type="widget" data-widget_type="rs-breadcrumb.default">
                    <div class="elementor-widget-container">
                        <div class="breadcrumb-area style2">
                            <div class="breadcrumbs-inner">
                                <!-- Breadcrumb NavXT 7.4.1 -->
                                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                        title="Go to Abuild Construction WordPress Theme." href="{{ route('homepage') }}"
                                        class="home"><span property="name">Home</span></a>
                                    <meta property="position" content="1">
                                </span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item"
                                        typeof="WebPage" title="Go to the Construction Service Categories archives."
                                        href="{{ route('service.service_detail') }}?name={{ $service['name'] }}"
                                        class="taxonomy services-category"><span property="name">
                                            {{ $service['name'] }}</span></a>
                                    <meta property="position" content="2">
                                </span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name"
                                        class="post post-services current-item"> {{ $service['full_name'] }}</span>
                                    <meta property="url"
                                        content="{{ route('service.service_detail') }}?name={{ $service['name'] }}">
                                    <meta property="position" content="3">
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="no-position elementor-element elementor-element-2ee2345a e-flex e-con-boxed e-con e-parent e-lazyloaded"
            data-id="2ee2345a" data-element_type="container" style="transform: none;">
            <div class="e-con-inner" style="transform: none;">
                <div class="no-position  elementor-element elementor-element-2a01a95d e-con-full e-flex e-con e-child"
                    data-id="2a01a95d" data-element_type="container">
                    <div class="elementor-element elementor-element-8deb721 gsap-move-no elementor-widget elementor-widget-rs-image"
                        data-id="8deb721" data-element_type="widget" data-widget_type="rs-image.default">
                        <div class="elementor-widget-container">

                            <div class="rs-image no ruler_image_no ruler_position_  ">
                                <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                                    src="{{ asset($service['show']) }}" alt="{{ $service['name'] }}">
                            </div>

                        </div>
                    </div>
                    <div class="elementor-element elementor-element-55f1c31a gsap-move-no elementor-widget elementor-widget-rs-heading"
                        data-id="55f1c31a" data-element_type="widget" data-widget_type="rs-heading.default">
                        <div class="elementor-widget-container">

                            <div class="prelements-heading default    animate-">
                                <div class="title-inner">
                                    <h3 class="title rs-split-text-disable ">{{ $service['full_name'] }} Service</h3>
                                </div>
                                <div class="description">
                                    {!! $service['content'] !!}
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="elementor-element elementor-element-3b0f9ca gsap-move-no elementor-widget elementor-widget-rspostnavigation"
                        data-id="3b0f9ca" data-element_type="widget" data-widget_type="rspostnavigation.default">
                        <div class="elementor-widget-container">
                            <div class="rs-post-navigation rs-portfolio-navigation">
                                <ul>
                                    <li class="prev">
                                        <a href="{{ route('service.service_detail') }}?name={{ $prev['name'] }}">
                                            <span class="next_link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="8"
                                                    viewBox="0 0 22 8" fill="none">
                                                    <path
                                                        d="M21 3.5C21.2761 3.5 21.5 3.72386 21.5 4C21.5 4.27614 21.2761 4.5 21 4.5V3.5ZM0.646446 4.35355C0.451185 4.15829 0.451185 3.84171 0.646446 3.64645L3.82843 0.464466C4.02369 0.269204 4.34027 0.269204 4.53553 0.464466C4.7308 0.659728 4.7308 0.976311 4.53553 1.17157L1.70711 4L4.53553 6.82843C4.7308 7.02369 4.7308 7.34027 4.53553 7.53553C4.34027 7.7308 4.02369 7.7308 3.82843 7.53553L0.646446 4.35355ZM21 4.5H1V3.5H21V4.5Z"
                                                        fill="white"></path>
                                                </svg> Prev Post </span>
                                            <span class="link_text">
                                                {{ $prev['full_name'] }} </span>
                                        </a>
                                    </li>
                                    <li class="next">
                                        <a href="{{ route('service.service_detail') }}?name={{ $next['name'] }}">
                                            <span class="next_link">
                                                Next Post <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    height="8" viewBox="0 0 22 8" fill="none">
                                                    <path
                                                        d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5V3.5ZM21.3536 4.35355C21.5488 4.15829 21.5488 3.84171 21.3536 3.64645L18.1716 0.464466C17.9763 0.269204 17.6597 0.269204 17.4645 0.464466C17.2692 0.659728 17.2692 0.976311 17.4645 1.17157L20.2929 4L17.4645 6.82843C17.2692 7.02369 17.2692 7.34027 17.4645 7.53553C17.6597 7.7308 17.9763 7.7308 18.1716 7.53553L21.3536 4.35355ZM1 4.5H21V3.5H1V4.5Z"
                                                        fill="white"></path>
                                                </svg> </span>
                                            <span class="link_text">
                                                {{ $next['full_name'] }}</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="no-position  contents-sticky elementor-element elementor-element-8d9a122 e-con-full e-flex e-con e-child"
                    data-id="8d9a122" data-element_type="container"
                    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 2421.32px;">

                    <div class="theiaStickySidebar"
                        style="padding-top: 0px; padding-bottom: 1px; position: absolute; transform: translateY(365.2px); top: 0px; width: 416.69px;">
                        <div class="elementor-element elementor-element-6fbd3b7f bs-sidebar dark-style gsap-move-no elementor-widget elementor-widget-sidebar"
                            data-id="6fbd3b7f" data-element_type="widget" data-widget_type="sidebar.default">
                            <div class="elementor-widget-container">

                                <section id="nav_menu-1" class="widget widget_nav_menu">
                                    <h4 class="widget-title">Services List</h4>
                                    <div class="menu-service-menu-container">
                                        <ul id="menu-service-menu" class="menu">

                                            @foreach ($services as $s)
                                                <li id="menu-item-3210"
                                                    class="menu-item menu-item-type-post_type menu-item-object-services menu-item-3210">
                                                    <a
                                                        href="{{ route('service.service_detail') }}?name={{ $s['name'] }}">{{ $s['full_name'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </section>
                                <section id="custom_html-2" class="widget_text widget widget_custom_html">
                                    <h4 class="widget-title">How Can We Help</h4>
                                    <div class="textwidget custom-html-widget">
                                        <p>If you need any helps, please feel free to contact us.</p>

                                        <div class="rs-contact-box">
                                            <div class="address-item boxstyle2">
                                                <div class="address-icon icon_1 elementor-repeater-item-0b836ed">
                                                    <img loading="lazy" decoding="async" width="164" height="53"
                                                        src="{{ asset('images/internal/contact-icon-2.svg') }}"
                                                        class="attachment-large size-large wp-image-408" alt="">
                                                </div>
                                                <div class="address-text">
                                                    <span class="label">Contact Phone</span>
                                                    <a
                                                        href="tel:+{{ config('custom.phone') }}">{{ config('custom.phone') }}</a>
                                                </div>
                                            </div>
                                            <div class="address-item boxstyle2">
                                                <div class="address-icon icon_1 elementor-repeater-item-0b836ed">
                                                    <img loading="lazy" decoding="async" width="164" height="53"
                                                        src="{{ asset('images/internal/contact-icon-3.svg') }}"
                                                        class="attachment-large size-large wp-image-408" alt="">
                                                </div>
                                                <div class="address-text">
                                                    <span class="label">Contact Mail</span>
                                                    <a
                                                        href="mailto:{{ config('custom.email') }}">{{ config('custom.email') }}</a>
                                                </div>
                                            </div>
                                            <div class="address-item boxstyle2">
                                                <div class="address-icon icon_1 elementor-repeater-item-0b836ed">
                                                    <img loading="lazy" decoding="async" width="164" height="53"
                                                        src="{{ asset('images/internal/icon-5.png') }}"
                                                        class="attachment-large size-large wp-image-408" alt="">
                                                </div>
                                                <div class="address-text">
                                                    <span class="label">Contact Location</span>
                                                    <a href="#">{{ config('custom.address') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="medvillsocialiconwi_widget-3"
                                    class="widget widget_medvillsocialiconwi_widget">
                                    <h4 class="widget-title">Social Icon</h4>

                                    <ul class="footer_social">
                                        <li>
                                            <a href="{{ $service['fb'] }}" target="_blank"><span> <i
                                                        class="ri-facebook-fill"></i>
                                                </span></a>
                                        </li>
                                        <li>
                                            <a href="{{ $service['tw'] }}" target="_blank"><span> <i
                                                        class="ri-twitter-x-fill"></i>
                                                </span></a>
                                        </li>

                                        <li>
                                            <a href="{{ $service['lk'] }}" target="_blank"><span> <i
                                                        class="ri-linkedin-fill"></i>
                                                </span></a>
                                        </li>

                                        <li>
                                            <a href="{{ $service['yt'] }}" target="_blank"><span> <i
                                                        class="ri-youtube-fill"></i>
                                                </span></a>
                                        </li>

                                    </ul>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
