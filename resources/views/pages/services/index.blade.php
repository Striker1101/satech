@extends('layouts.app')

@section('title', 'Frequent Asked Question')

@section('home page-template page-template-elementor_header_footer page page-id-10844 ehf-header ehf-footer
    ehf-template-abuild ehf-stylesheet-abuild rs-smoother-yes elementor-default elementor-template-full-width
    elementor-kit-10911 elementor-page elementor-page-10844')

@section('content')

    <link rel="stylesheet"
        href="{{ asset('css/site/siteground-optimizer-combined-css-59dcc067dd3be84756dfc09709ea8dcd.css') }}">


    <div data-elementor-type="wp-page" data-elementor-id="123" class="elementor elementor-123">
        <div class="no-position elementor-element elementor-element-fd08454 e-flex e-con-boxed e-con e-parent e-lazyloaded"
            data-id="fd08454" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-79b4202 gsap-move-no elementor-widget elementor-widget-page-title"
                    data-id="79b4202" data-element_type="widget" data-settings="{&quot;align&quot;:&quot;center&quot;}"
                    data-widget_type="page-title.default">
                    <div class="elementor-widget-container">

                        <div class="hfe-page-title hfe-page-title-wrapper elementor-widget-heading">

                            <h1 class="elementor-heading-title elementor-size">
                                Services 01 </h1>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b36522b gsap-move-no elementor-widget elementor-widget-rs-breadcrumb"
                    data-id="b36522b" data-element_type="widget" data-widget_type="rs-breadcrumb.default">
                    <div class="elementor-widget-container">
                        <div class="breadcrumb-area style2">
                            <div class="breadcrumbs-inner">
                                <!-- Breadcrumb NavXT 7.4.1 -->
                                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                        title="Go to Abuild Construction WordPress Theme." href="{{ route('homepage') }}"
                                        class="home"><span property="name">Home</span></a>
                                    <meta property="position" content="1">
                                </span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name"
                                        class="post post-page current-item">Services</span>
                                    <meta property="url" content="{{ route('service.service_get') }}">
                                    <meta property="position" content="2">
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="no-position elementor-element elementor-element-567e1d8 e-flex e-con-boxed e-con e-parent e-lazyloaded"
            data-id="567e1d8" data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-1576d98 gsap-move-no elementor-widget elementor-widget-rs-service-slider"
                    data-id="1576d98" data-element_type="widget" data-widget_type="rs-service-slider.default">
                    <div class="elementor-widget-container">

                        <div class="rsaddon-unique-slider rs-unique-grid-services">
                            <div class="rs-addon-slider rs-services-slider service-style-4 row">

                                @foreach ($services as $service)
                                    <div class="grid-item col-lg-4 col-md-6">
                                        <div class="rs-service-slider elementor-repeater-item-73b70c5">
                                            <div class="feature-img">
                                                <img loading="lazy" decoding="async" width="784" height="472"
                                                    src="{{ asset($service['show']) }}" class="attachment-full size-full"
                                                    alt="services_03" sizes="(max-width: 784px) 100vw, 784px">
                                            </div>

                                            <div class="service-title-holder btn_box">
                                                <div class="service-img icon-type ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                        viewBox="0 0 40 40" fill="none">
                                                        <path
                                                            d="M1.48519 16.1276C1.61446 16.2835 1.77434 16.4113 1.95493 16.503C2.13553 16.5948 2.33302 16.6485 2.5352 16.6609H2.62988C2.87664 16.6605 3.11945 16.5989 3.33654 16.4816V26.9801C3.33798 28.2791 4.39075 29.3319 5.68983 29.3334H19.3103L15.4297 33.8206C14.08 35.3807 14.2505 37.7397 15.8107 39.0895C17.3709 40.4392 19.7299 40.2687 21.0796 38.7085L29.0795 29.4546C32.0224 30.2579 35.1708 29.4504 37.3638 27.3298C39.5567 25.2092 40.4694 22.0896 39.7653 19.1214C39.7113 18.889 39.594 18.6762 39.4262 18.5066C39.2585 18.337 39.047 18.2173 38.8152 18.1608C38.5868 18.1036 38.347 18.1112 38.1226 18.1828C37.8983 18.2544 37.6984 18.3871 37.5453 18.5661L33.8394 22.852L29.9148 22.78L29.2775 18.9061L32.984 14.6214C33.1384 14.4441 33.2407 14.2274 33.2794 13.9954C33.3181 13.7635 33.2918 13.5254 33.2034 13.3075C33.1136 13.0867 32.9644 12.895 32.7724 12.7538C32.5803 12.6126 32.3529 12.5274 32.1154 12.5075C31.2526 12.4359 30.3838 12.4952 29.5388 12.6835L26.6695 10.0715V4.1738C26.6684 3.34215 25.9944 2.66824 25.1629 2.66719H22.1763C21.3446 2.6683 20.6707 3.34222 20.6696 4.1738V4.62378L16.0137 0.395846C15.4443 -0.131949 14.5644 -0.131949 13.9951 0.395846L0.503875 12.6443C-0.110595 13.213 -0.169319 14.1643 0.370549 14.8042L1.48519 16.1276ZM12.003 28V20.6669C12.003 20.2987 12.3014 20.0002 12.6696 20.0002H17.3362C17.7043 20.0002 18.0028 20.2987 18.0028 20.6669V28.0001H12.003V28ZM19.3362 28V20.6669C19.3362 19.5623 18.4408 18.6669 17.3362 18.6669H12.6697C11.5651 18.6669 10.6697 19.5623 10.6697 20.6669V28.0001H5.68977C5.12674 27.9994 4.67053 27.5431 4.66981 26.9801V15.337L15.0029 5.95442L25.1215 15.1482C25.0208 15.2529 24.9135 15.3482 24.8181 15.4589C22.6367 17.9733 22.0972 21.5187 23.4322 24.5681L20.4636 28H19.3362ZM31.3587 13.8036C31.5427 13.8036 31.7274 13.8103 31.9113 13.8243L28.0694 18.2669C28.0055 18.3408 27.9586 18.428 27.9321 18.5221C27.9056 18.6162 27.9001 18.715 27.9161 18.8115L28.694 23.5407C28.7193 23.6946 28.7977 23.8348 28.9156 23.9369C29.0335 24.0389 29.1834 24.0964 29.3394 24.0994L34.1313 24.1874C34.3295 24.1912 34.519 24.1066 34.6486 23.9567L38.4925 19.5115C39.0706 22.0806 38.2223 24.7621 36.2718 26.5313C34.3213 28.3005 31.57 28.8839 29.0694 28.0587C28.944 28.0177 28.8093 28.0149 28.6823 28.0505C28.5554 28.0861 28.4418 28.1585 28.356 28.2587L20.0695 37.8359C19.6519 38.3145 19.0616 38.6083 18.4279 38.6528C17.7942 38.6974 17.1686 38.4891 16.6881 38.0736C16.2075 37.6581 15.9111 37.0692 15.8637 36.4357C15.8162 35.8022 16.0216 35.1757 16.435 34.6933L24.7228 25.1134C24.8088 25.0139 24.8634 24.8912 24.8797 24.7607C24.8961 24.6302 24.8735 24.4978 24.8148 24.3801C24.2583 23.2653 23.9959 22.0268 24.0526 20.7821C24.1093 19.5374 24.4833 18.3278 25.1389 17.2683C25.7945 16.2087 26.71 15.3343 27.7986 14.728C28.8872 14.1218 30.1126 13.8038 31.3586 13.8044V13.8036H31.3587ZM22.0028 4.1738C22.004 4.1282 22.0227 4.08479 22.0549 4.05253C22.0872 4.02027 22.1306 4.00163 22.1762 4.00045H25.1628C25.2084 4.00163 25.2518 4.02027 25.2841 4.05253C25.3163 4.08479 25.335 4.1282 25.3361 4.1738V8.86103L22.0028 5.83441V4.1738ZM1.40317 13.6269L14.8936 1.37854C14.9233 1.34988 14.963 1.33386 15.0043 1.33386C15.0456 1.33386 15.0852 1.34988 15.1149 1.37854L28.056 13.1337C27.3648 13.4226 26.7139 13.7998 26.1194 14.2556L15.4529 4.56315C15.3302 4.45165 15.1704 4.38987 15.0046 4.38987C14.8388 4.38987 14.6789 4.45165 14.5562 4.56315L3.53646 14.567H3.53246L2.7365 15.2903C2.70492 15.3184 2.66407 15.3338 2.62181 15.3336C2.59909 15.3319 2.577 15.3253 2.557 15.3144C2.53701 15.3035 2.51955 15.2885 2.50581 15.2703L1.38782 13.9463C1.35153 13.9002 1.33311 13.8424 1.33593 13.7838C1.33875 13.7251 1.36262 13.6694 1.40317 13.6269Z"
                                                            fill="white"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M19.2355 34.1386L18.0122 35.5659C17.9026 35.7009 17.8501 35.8733 17.8658 36.0464C17.8814 36.2195 17.9641 36.3797 18.0962 36.4927C18.2283 36.6058 18.3993 36.6627 18.5728 36.6515C18.7463 36.6403 18.9085 36.5617 19.0249 36.4325L20.2482 35.0053C20.3573 34.8703 20.4095 34.698 20.3936 34.5252C20.3778 34.3523 20.2951 34.1925 20.1632 34.0796C20.0313 33.9667 19.8606 33.9098 19.6874 33.9208C19.5142 33.9318 19.352 34.01 19.2355 34.1386Z"
                                                            fill="white"></path>
                                                    </svg>
                                                </div>

                                                <div class="service-content-area">
                                                    <div class="service-title no">
                                                        <h4 class="title">
                                                            <a
                                                                href="{{ route('service.service_detail') }}?name={{ $service['name'] }}">
                                                                {{ $service['full_name'] }} </a>
                                                        </h4>
                                                    </div>

                                                    <div class="service-desc">
                                                        {{ $service['desc'] }}</div>
                                                    <!-- Button Style -->
                                                    <div class="read__more">
                                                        <a href="{{ route('service.service_detail') }}?name={{ $service['name'] }}"
                                                            class="btn-area">
                                                            Explore More <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="17" height="19" viewBox="0 0 17 19"
                                                                fill="none">
                                                                <path
                                                                    d="M0.247423 16.8415C-0.116259 17.2571 -0.0741412 17.8889 0.341495 18.2526C0.757132 18.6163 1.38889 18.5741 1.75258 18.1585L0.247423 16.8415ZM15.9978 1.43348C15.961 0.88242 15.4845 0.465478 14.9335 0.502215L5.95341 1.10089C5.40235 1.13762 4.98541 1.61413 5.02215 2.16519C5.05889 2.71625 5.53539 3.13319 6.08645 3.09646L14.0687 2.5643L14.6009 10.5466C14.6376 11.0976 15.1141 11.5146 15.6652 11.4779C16.2163 11.4411 16.6332 10.9646 16.5965 10.4135L15.9978 1.43348ZM1.75258 18.1585L15.7526 2.15851L14.2474 0.841496L0.247423 16.8415L1.75258 18.1585Z"
                                                                    fill="white"></path>
                                                            </svg> </a>
                                                    </div>
                                                    <!-- Button Style End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-why-choose-u-s :ids="[
            '3b9a7cf',
            '20f07a5',
            '6a055bc',
            'd8dd0d1',
            '5779232',
            '394EA1',
            '8f32c25',
            '29236',
            '67586',
            '67587',
            '245590',
        ]"></x-why-choose-u-s>


        <div class="no-position elementor-element elementor-element-0dc974b e-flex e-con-boxed e-con e-parent e-lazyloaded"
            data-id="0dc974b" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="no-position  elementor-element elementor-element-bbab05e e-con-full e-flex e-con e-child"
                    data-id="bbab05e" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="no-position  elementor-element elementor-element-da30e5b e-con-full e-flex e-con e-child"
                        data-id="da30e5b" data-element_type="container">
                        <div class="elementor-element elementor-element-0a95485 elementor-widget__width-initial elementor-widget-mobile__width-inherit gsap-move-no elementor-widget elementor-widget-rs-heading"
                            data-id="0a95485" data-element_type="widget" data-widget_type="rs-heading.default">
                            <div class="elementor-widget-container">

                                <div class="prelements-heading style1  center  animate-">
                                    <div class="title-inner">
                                        <span class="sub-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="9"
                                                viewBox="0 0 31 9" fill="none">
                                                <rect y="0.5" width="8" height="8" fill="#394EA1"></rect>
                                                <line x1="8" y1="4" x2="31" y2="4"
                                                    stroke="#394EA1"></line>
                                            </svg>Working Process<svg xmlns="http://www.w3.org/2000/svg" width="31"
                                                height="9" viewBox="0 0 31 9" fill="none">
                                                <rect width="8" height="8" transform="matrix(-1 0 0 1 31 0.5)"
                                                    fill="#394EA1"></rect>
                                                <line y1="-0.5" x2="23" y2="-0.5"
                                                    transform="matrix(-1 0 0 1 23 4.5)" stroke="#394EA1"></line>
                                            </svg> </span>
                                        <h2 class="title rs-split-text-enable split-in-fade" style="perspective: 400px;">
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    E</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    x</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    p</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    l</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    o</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    r</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    a</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    t</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    i</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    o</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    n</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    T</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    o</div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    P</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    r</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    o</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    c</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    e</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    s</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    s</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    i</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    n</div>
                                                <div
                                                    style="position: relative; display: inline-block; opacity: 0; transform: translate(0px, 0px);">
                                                    g</div>
                                            </div>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="no-position  elementor-element elementor-element-6439480 e-con-full e-flex e-con e-child"
                    data-id="6439480" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="no-position  elementor-element elementor-element-861d950 e-con-full e-flex e-con e-child"
                        data-id="861d950" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-2ab942c elementor-widget__width-initial gsap-move-no elementor-widget elementor-widget-rs-service-grid"
                            data-id="2ab942c" data-element_type="widget" data-widget_type="rs-service-grid.default">
                            <div class="elementor-widget-container">

                                <div class="rs-addon-services style7">
                                    <div class="services-inner box clip-no">
                                        <div class="numbering">
                                            <span>01</span>
                                        </div>
                                        <div class="media_wrap">
                                            <div class="image_style media-cmn">
                                                <img decoding="async"
                                                    src="https://demo.rstheme.com/wordpress/abuild/wp-content/uploads/2024/10/process-h4-img1.png"
                                                    alt="process-h4-img1">
                                            </div>
                                        </div>
                                        <div class="content_part">
                                            <div class="services-title">
                                                <h4 class="title"> Share your Projects</h4>
                                            </div>

                                            <div class="desc-text">
                                                Choose a convenient time and date for your cleaning service. </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="no-position  elementor-element elementor-element-26eae21 e-con-full e-flex e-con e-child"
                        data-id="26eae21" data-element_type="container">
                        <div class="elementor-element elementor-element-6329df7 elementor-widget__width-initial gsap-move-no elementor-widget elementor-widget-rs-service-grid"
                            data-id="6329df7" data-element_type="widget" data-widget_type="rs-service-grid.default">
                            <div class="elementor-widget-container">

                                <div class="rs-addon-services style7">
                                    <div class="services-inner box clip-no">
                                        <div class="numbering">
                                            <span>02</span>
                                        </div>
                                        <div class="media_wrap">
                                            <div class="image_style media-cmn">
                                                <img decoding="async"
                                                    src="https://demo.rstheme.com/wordpress/abuild/wp-content/uploads/2024/10/process-h4-img2.png"
                                                    alt="process-h4-img2">
                                            </div>
                                        </div>
                                        <div class="content_part">
                                            <div class="services-title">
                                                <h4 class="title"> Testing Your Projects</h4>
                                            </div>

                                            <div class="desc-text">
                                                Choose a convenient time and date for your cleaning service. </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ebc716e elementor-absolute elementor-widget-laptop__width-initial elementor-hidden-tablet elementor-hidden-mobile gsap-move-no elementor-widget elementor-widget-rs-image"
                            data-id="ebc716e" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="rs-image.default">
                            <div class="elementor-widget-container">

                                <div class="rs-image no ruler_image_no ruler_position_  ">
                                    <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                                        src="https://demo.rstheme.com/wordpress/abuild/wp-content/uploads/2024/10/circle.png"
                                        alt="circle">
                                </div>

                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c660bee elementor-absolute elementor-widget-laptop__width-initial elementor-hidden-tablet elementor-hidden-mobile gsap-move-no elementor-widget elementor-widget-rs-image"
                            data-id="c660bee" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="rs-image.default">
                            <div class="elementor-widget-container">

                                <div class="rs-image no ruler_image_no ruler_position_  ">
                                    <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                                        src="https://demo.rstheme.com/wordpress/abuild/wp-content/uploads/2024/10/circle.png"
                                        alt="circle">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="no-position  elementor-element elementor-element-075aece e-con-full e-flex e-con e-child"
                        data-id="075aece" data-element_type="container">
                        <div class="elementor-element elementor-element-ed1e061 elementor-widget__width-initial gsap-move-no elementor-widget elementor-widget-rs-service-grid"
                            data-id="ed1e061" data-element_type="widget" data-widget_type="rs-service-grid.default">
                            <div class="elementor-widget-container">

                                <div class="rs-addon-services style7">
                                    <div class="services-inner box clip-no">
                                        <div class="numbering">
                                            <span>03</span>
                                        </div>
                                        <div class="media_wrap">
                                            <div class="image_style media-cmn">
                                                <img decoding="async"
                                                    src="https://demo.rstheme.com/wordpress/abuild/wp-content/uploads/2024/10/process-h4-img3.png"
                                                    alt="process-h4-img3">
                                            </div>
                                        </div>
                                        <div class="content_part">
                                            <div class="services-title">
                                                <h4 class="title"> Complete Project</h4>
                                            </div>

                                            <div class="desc-text">
                                                Choose a convenient time and date for your cleaning service. </div>


                                        </div>
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
