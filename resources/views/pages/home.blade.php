@extends('layouts.app')

@section('title', 'Homepage')

@section('body_att',
    'home page-template page-template-elementor_header_footer page page-id-10844 ehf-header ehf-footer
    ehf-template-abuild ehf-stylesheet-abuild rs-smoother-yes elementor-default elementor-template-full-width
    elementor-kit-10911 elementor-page elementor-page-10844')

@section('content')

    <link rel="stylesheet" id="siteground-optimizer-combined-css-d9463f1e692b96fb73f878ded50123d6"
        href="{{ asset('css/site/siteground-optimizer-combined.css') }}" media="all" />
    <link rel="preload" href="{{ asset('css/site/siteground-optimizer-combined.css') }}" as="style">

    <div data-elementor-type="wp-page" data-elementor-id="10844" class="elementor elementor-10844">
        <div class="no-position  elementor-element elementor-element-d58309a e-con-full e-flex elementor-invisible e-con e-parent"
            data-id="d58309a" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
            <div class="no-position  elementor-element elementor-element-01ccee9 e-con-full e-flex e-con e-child"
                data-id="01ccee9" data-element_type="container">
                <div class="elementor-element elementor-element-4e200bd animated-slow gsap-move-no elementor-invisible elementor-widget elementor-widget-rs-heading"
                    data-id="4e200bd" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="rs-heading.default">
                    <div class="elementor-widget-container">

                        <div class="prelements-heading style1    animate-">
                            <div class="title-inner">
                                <span class="sub-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="123" height="24"
                                        viewBox="0 0 123 24" fill="none">
                                        <path d="M0 5.74514H6V17.7451H0V5.74514Z" fill="#394EA1"></path>
                                        <path d="M6 8.74514H103V14.7451H6V8.74514Z" fill="#394EA1"></path>
                                        <path d="M99 11.7451L110.745 0L122.49 11.7451L110.745 23.4903L99 11.7451Z"
                                            fill="#394EA1"></path>
                                    </svg> </span>
                                <h1 class="title rs-split-text-disable ">Different Thinking for
                                    <span>Construction</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d005905 animated-slow elementor-widget-tablet__width-inherit gsap-move-no elementor-invisible elementor-widget elementor-widget-rs-divider"
                    data-id="d005905" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="rs-divider.default">
                    <div class="elementor-widget-container">

                        <div class="rs-divider"> </div>

                    </div>
                </div>
                <div class="elementor-element elementor-element-082383b elementor-widget__width-initial animated-slow elementor-widget-tablet__width-inherit gsap-move-no elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="082383b" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>{{ config('custom.site_name') }} is a leading construction company dedicated to briefly describe
                            what your company
                            does. We specialize in constructions building.</p>
                    </div>
                </div>

                <style>
                    .elementor-element-4bb143c .title-inner span {
                        display: inline-block;
                        position: relative;
                    }

                    .elementor-element-4bb143c .title-inner span::before {
                        position: absolute;
                        content: "";
                        height: 100%;
                        width: 95%;
                        background: transparent;
                        top: -8px;
                        border: 1px solid var(--e-global-color-primary);
                        left: 0;
                    }
                </style>

                <div class="elementor-element elementor-element-4bb143c elementor-absolute e-transform animated-slow elementor-hidden-mobile gsap-move-no elementor-invisible elementor-widget elementor-widget-rs-heading"
                    data-id="4bb143c" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_laptop&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="rs-heading.default">
                    <div class="elementor-widget-container">

                        <div class="prelements-heading default    animate-">
                            <div class="title-inner">
                                <span class="sub-text">
                                    {{ config('custom.years') }}+ Years of Experience </span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f770b31 animated-slow gsap-move-no elementor-invisible elementor-widget elementor-widget-rs-button"
                    data-id="f770b31" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="rs-button.default">
                    <div class="elementor-widget-container">
                        <div class="rs-button style1 unique-62161">


                            <a class="rs-btn anim-dir-" href="{{ route('contact') }}">
                                <span>Free Consultations
                                    <em>
                                        <i aria-hidden="true" class="ri-arrow-right-line"></i> <i aria-hidden="true"
                                            class="ri-arrow-right-line"></i> </em>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="no-position  elementor-element elementor-element-f0cd699 e-con-full e-flex e-con e-child"
                data-id="f0cd699" data-element_type="container">
                <div class="elementor-element elementor-element-3f1f496 elementor-absolute animated-slow elementor-hidden-mobile gsap-move-no elementor-invisible elementor-widget elementor-widget-rs-button-rotating"
                    data-id="3f1f496" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeIn&quot;}"
                    data-widget_type="rs-button-rotating.default">
                    <div class="elementor-widget-container">

                        <div
                            class="rs-button-rotating text-anim-yes text-anim-pause-yes image-anim-yes button-anim-2406718">
                            <div class="button-logo">
                                <img decoding="async" src="{{ asset('logo.png') }}" alt="fab" />
                            </div>


                            <div class="text-wrapper-parent gsap-rotate">
                                <div class="text-wrapper">
                                    .abuild.construction. </div>
                            </div>
                        </div>

                        <style>
                            .button-anim-2406718 .text-wrapper .char1 {
                                transform: rotate(18deg);
                            }

                            .button-anim-2406718 .text-wrapper .char2 {
                                transform: rotate(36deg);
                            }

                            .button-anim-2406718 .text-wrapper .char3 {
                                transform: rotate(54deg);
                            }

                            .button-anim-2406718 .text-wrapper .char4 {
                                transform: rotate(72deg);
                            }

                            .button-anim-2406718 .text-wrapper .char5 {
                                transform: rotate(90deg);
                            }

                            .button-anim-2406718 .text-wrapper .char6 {
                                transform: rotate(108deg);
                            }

                            .button-anim-2406718 .text-wrapper .char7 {
                                transform: rotate(126deg);
                            }

                            .button-anim-2406718 .text-wrapper .char8 {
                                transform: rotate(144deg);
                            }

                            .button-anim-2406718 .text-wrapper .char9 {
                                transform: rotate(162deg);
                            }

                            .button-anim-2406718 .text-wrapper .char10 {
                                transform: rotate(180deg);
                            }

                            .button-anim-2406718 .text-wrapper .char11 {
                                transform: rotate(198deg);
                            }

                            .button-anim-2406718 .text-wrapper .char12 {
                                transform: rotate(216deg);
                            }

                            .button-anim-2406718 .text-wrapper .char13 {
                                transform: rotate(234deg);
                            }

                            .button-anim-2406718 .text-wrapper .char14 {
                                transform: rotate(252deg);
                            }

                            .button-anim-2406718 .text-wrapper .char15 {
                                transform: rotate(270deg);
                            }

                            .button-anim-2406718 .text-wrapper .char16 {
                                transform: rotate(288deg);
                            }

                            .button-anim-2406718 .text-wrapper .char17 {
                                transform: rotate(306deg);
                            }

                            .button-anim-2406718 .text-wrapper .char18 {
                                transform: rotate(324deg);
                            }

                            .button-anim-2406718 .text-wrapper .char19 {
                                transform: rotate(342deg);
                            }

                            .button-anim-2406718 .text-wrapper .char20 {
                                transform: rotate(360deg);
                            }

                            .button-anim-2406718 .text-wrapper .char21 {
                                transform: rotate(378deg);
                            }

                            .button-anim-2406718 .text-wrapper .char22 {
                                transform: rotate(396deg);
                            }

                            .button-anim-2406718 .text-wrapper .char23 {
                                transform: rotate(414deg);
                            }

                            .button-anim-2406718 .text-wrapper .char24 {
                                transform: rotate(432deg);
                            }

                            .button-anim-2406718 .text-wrapper .char25 {
                                transform: rotate(450deg);
                            }

                            .button-anim-2406718 .text-wrapper .char26 {
                                transform: rotate(468deg);
                            }

                            .button-anim-2406718 .text-wrapper .char27 {
                                transform: rotate(486deg);
                            }

                            .button-anim-2406718 .text-wrapper .char28 {
                                transform: rotate(504deg);
                            }

                            .button-anim-2406718 .text-wrapper .char29 {
                                transform: rotate(522deg);
                            }

                            .button-anim-2406718 .text-wrapper .char30 {
                                transform: rotate(540deg);
                            }

                            .button-anim-2406718 .text-wrapper .char31 {
                                transform: rotate(558deg);
                            }

                            .button-anim-2406718 .text-wrapper .char32 {
                                transform: rotate(576deg);
                            }

                            .button-anim-2406718 .text-wrapper .char33 {
                                transform: rotate(594deg);
                            }

                            .button-anim-2406718 .text-wrapper .char34 {
                                transform: rotate(612deg);
                            }

                            .button-anim-2406718 .text-wrapper .char35 {
                                transform: rotate(630deg);
                            }

                            .button-anim-2406718 .text-wrapper .char36 {
                                transform: rotate(648deg);
                            }

                            .button-anim-2406718 .text-wrapper .char37 {
                                transform: rotate(666deg);
                            }

                            .button-anim-2406718 .text-wrapper .char38 {
                                transform: rotate(684deg);
                            }

                            .button-anim-2406718 .text-wrapper .char39 {
                                transform: rotate(702deg);
                            }

                            .button-anim-2406718 .text-wrapper .char40 {
                                transform: rotate(720deg);
                            }

                            .button-anim-2406718 .text-wrapper .char41 {
                                transform: rotate(738deg);
                            }

                            .button-anim-2406718 .text-wrapper .char42 {
                                transform: rotate(756deg);
                            }

                            .button-anim-2406718 .text-wrapper .char43 {
                                transform: rotate(774deg);
                            }

                            .button-anim-2406718 .text-wrapper .char44 {
                                transform: rotate(792deg);
                            }

                            .button-anim-2406718 .text-wrapper .char45 {
                                transform: rotate(810deg);
                            }

                            .button-anim-2406718 .text-wrapper .char46 {
                                transform: rotate(828deg);
                            }

                            .button-anim-2406718 .text-wrapper .char47 {
                                transform: rotate(846deg);
                            }

                            .button-anim-2406718 .text-wrapper .char48 {
                                transform: rotate(864deg);
                            }

                            .button-anim-2406718 .text-wrapper .char49 {
                                transform: rotate(882deg);
                            }

                            .button-anim-2406718 .text-wrapper .char50 {
                                transform: rotate(900deg);
                            }

                            .button-anim-2406718 .text-wrapper .char51 {
                                transform: rotate(918deg);
                            }

                            .button-anim-2406718 .text-wrapper .char52 {
                                transform: rotate(936deg);
                            }

                            .button-anim-2406718 .text-wrapper .char53 {
                                transform: rotate(954deg);
                            }

                            .button-anim-2406718 .text-wrapper .char54 {
                                transform: rotate(972deg);
                            }

                            .button-anim-2406718 .text-wrapper .char55 {
                                transform: rotate(990deg);
                            }

                            .button-anim-2406718 .text-wrapper .char56 {
                                transform: rotate(1008deg);
                            }

                            .button-anim-2406718 .text-wrapper .char57 {
                                transform: rotate(1026deg);
                            }

                            .button-anim-2406718 .text-wrapper .char58 {
                                transform: rotate(1044deg);
                            }

                            .button-anim-2406718 .text-wrapper .char59 {
                                transform: rotate(1062deg);
                            }

                            .button-anim-2406718 .text-wrapper .char60 {
                                transform: rotate(1080deg);
                            }

                            .button-anim-2406718 .text-wrapper .char61 {
                                transform: rotate(1098deg);
                            }

                            .button-anim-2406718 .text-wrapper .char62 {
                                transform: rotate(1116deg);
                            }

                            .button-anim-2406718 .text-wrapper .char63 {
                                transform: rotate(1134deg);
                            }

                            .button-anim-2406718 .text-wrapper .char64 {
                                transform: rotate(1152deg);
                            }

                            .button-anim-2406718 .text-wrapper .char65 {
                                transform: rotate(1170deg);
                            }

                            .button-anim-2406718 .text-wrapper .char66 {
                                transform: rotate(1188deg);
                            }

                            .button-anim-2406718 .text-wrapper .char67 {
                                transform: rotate(1206deg);
                            }

                            .button-anim-2406718 .text-wrapper .char68 {
                                transform: rotate(1224deg);
                            }

                            .button-anim-2406718 .text-wrapper .char69 {
                                transform: rotate(1242deg);
                            }

                            .button-anim-2406718 .text-wrapper .char70 {
                                transform: rotate(1260deg);
                            }

                            .button-anim-2406718 .text-wrapper .char71 {
                                transform: rotate(1278deg);
                            }

                            .button-anim-2406718 .text-wrapper .char72 {
                                transform: rotate(1296deg);
                            }

                            .button-anim-2406718 .text-wrapper .char73 {
                                transform: rotate(1314deg);
                            }

                            .button-anim-2406718 .text-wrapper .char74 {
                                transform: rotate(1332deg);
                            }

                            .button-anim-2406718 .text-wrapper .char75 {
                                transform: rotate(1350deg);
                            }

                            .button-anim-2406718 .text-wrapper .char76 {
                                transform: rotate(1368deg);
                            }

                            .button-anim-2406718 .text-wrapper .char77 {
                                transform: rotate(1386deg);
                            }

                            .button-anim-2406718 .text-wrapper .char78 {
                                transform: rotate(1404deg);
                            }

                            .button-anim-2406718 .text-wrapper .char79 {
                                transform: rotate(1422deg);
                            }

                            .button-anim-2406718 .text-wrapper .char80 {
                                transform: rotate(1440deg);
                            }

                            .button-anim-2406718 .text-wrapper .char81 {
                                transform: rotate(1458deg);
                            }

                            .button-anim-2406718 .text-wrapper .char82 {
                                transform: rotate(1476deg);
                            }

                            .button-anim-2406718 .text-wrapper .char83 {
                                transform: rotate(1494deg);
                            }

                            .button-anim-2406718 .text-wrapper .char84 {
                                transform: rotate(1512deg);
                            }

                            .button-anim-2406718 .text-wrapper .char85 {
                                transform: rotate(1530deg);
                            }

                            .button-anim-2406718 .text-wrapper .char86 {
                                transform: rotate(1548deg);
                            }

                            .button-anim-2406718 .text-wrapper .char87 {
                                transform: rotate(1566deg);
                            }

                            .button-anim-2406718 .text-wrapper .char88 {
                                transform: rotate(1584deg);
                            }

                            .button-anim-2406718 .text-wrapper .char89 {
                                transform: rotate(1602deg);
                            }

                            .button-anim-2406718 .text-wrapper .char90 {
                                transform: rotate(1620deg);
                            }

                            .button-anim-2406718 .text-wrapper .char91 {
                                transform: rotate(1638deg);
                            }

                            .button-anim-2406718 .text-wrapper .char92 {
                                transform: rotate(1656deg);
                            }

                            .button-anim-2406718 .text-wrapper .char93 {
                                transform: rotate(1674deg);
                            }

                            .button-anim-2406718 .text-wrapper .char94 {
                                transform: rotate(1692deg);
                            }

                            .button-anim-2406718 .text-wrapper .char95 {
                                transform: rotate(1710deg);
                            }

                            .button-anim-2406718 .text-wrapper .char96 {
                                transform: rotate(1728deg);
                            }

                            .button-anim-2406718 .text-wrapper .char97 {
                                transform: rotate(1746deg);
                            }

                            .button-anim-2406718 .text-wrapper .char98 {
                                transform: rotate(1764deg);
                            }

                            .button-anim-2406718 .text-wrapper .char99 {
                                transform: rotate(1782deg);
                            }

                            .button-anim-2406718 .text-wrapper .char100 {
                                transform: rotate(1800deg);
                            }
                        </style>

                        <script>
                            jQuery(function() {
                                jQuery(".button-anim-2406718 .text-wrapper").lettering();
                            });
                        </script>
                    </div>
                </div>
                <div class="elementor-element elementor-element-c48350c animated-slow gsap-move-no elementor-invisible elementor-widget elementor-widget-rs-image"
                    data-id="c48350c" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="rs-image.default">
                    <div class="elementor-widget-container">

                        <div class="rs-image no ruler_image_no ruler_position_  ">
                            <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                                src="{{ asset('images/internal/man.png') }}" alt="man" />
                        </div>

                    </div>
                </div>
            </div>

            <style>
                .elementor-element-4e0020c::before {
                    position: absolute;
                    content: "";
                    height: 100%;
                    width: 60px;
                    background: #394EA1;
                    left: -60px;
                    clip-path: polygon(100% 0, 0% 100%, 100% 100%);
                }
            </style>

            <div class="no-position  elementor-element elementor-element-4e0020c e-con-full animated-slow e-flex elementor-invisible e-con e-child"
                data-id="4e0020c" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                <div class="no-position  elementor-element elementor-element-9c4a3c7 e-con-full e-flex e-con e-child"
                    data-id="9c4a3c7" data-element_type="container">
                    <div class="elementor-element elementor-element-c365461 gsap-move-no elementor-widget elementor-widget-rs-heading"
                        data-id="c365461" data-element_type="widget" data-widget_type="rs-heading.default">
                        <div class="elementor-widget-container">

                            <div class="prelements-heading style1    animate-">
                                <div class="title-inner">
                                    <span class="sub-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M17.9985 6.54333H11.1262L9.00344 0L6.87416 6.54333L0.00189209 6.53681L5.56742 10.5848L3.43791 17.1216L9.00344 13.0801L14.5622 17.1216L12.4395 10.5848L17.9985 6.54333Z"
                                                fill="#00B67A"></path>
                                        </svg>Trustipilot </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7fa9752 gsap-move-no elementor-widget elementor-widget-rs-testimonial-slider"
                        data-id="7fa9752" data-element_type="widget" data-widget_type="rs-testimonial-slider.default">
                        <div class="elementor-widget-container">

                            <div class="rsaddon-unique-slider ">
                                <div class="rs-testimonial-slider style1 ">
                                    <div class="row">

                                        <div class="grid-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="testimonial-inner">
                                                <div class="quote_icon">
                                                </div>
                                                <div class="ratings">
                                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-half-line"></i>
                                                </div>
                                                <div class="description">
                                                    450+ reviews
                                                </div>
                                                <div class="testi-card-bottom ">
                                                    <div class="vendor-img">
                                                        <img decoding="async"
                                                            src="{{ asset('images/internal/Avatar-Group.png') }}"
                                                            alt="Avatar Group">
                                                    </div>
                                                    <div class="content-part">
                                                        <h5 class="name"></h5>
                                                        <div class="testi-designation"></div>
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
                <div class="no-position  elementor-element elementor-element-7642e18 e-con-full e-flex e-con e-child"
                    data-id="7642e18" data-element_type="container">
                    <div class="elementor-element elementor-element-bad71ba gsap-move-no elementor-widget elementor-widget-rs-heading"
                        data-id="bad71ba" data-element_type="widget" data-widget_type="rs-heading.default">
                        <div class="elementor-widget-container">

                            <div class="prelements-heading style1    animate-">
                                <div class="title-inner">
                                    <span class="sub-text">
                                        Google </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-0626b79 gsap-move-no elementor-widget elementor-widget-rs-testimonial-slider"
                        data-id="0626b79" data-element_type="widget" data-widget_type="rs-testimonial-slider.default">
                        <div class="elementor-widget-container">

                            <div class="rsaddon-unique-slider ">
                                <div class="rs-testimonial-slider style1 ">
                                    <div class="row">

                                        <div class="grid-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="testimonial-inner">
                                                <div class="quote_icon">
                                                </div>
                                                <div class="ratings">
                                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-fill"></i>
                                                </div>
                                                <div class="description">
                                                    950+ reviews
                                                </div>
                                                <div class="testi-card-bottom ">
                                                    <div class="vendor-img">
                                                        <img decoding="async"
                                                            src="{{ asset('images/internal/Avatar-Group.png') }}"
                                                            alt="Avatar Group">
                                                    </div>
                                                    <div class="content-part">
                                                        <h5 class="name"></h5>
                                                        <div class="testi-designation"></div>
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
            </div>
        </div>
        <x-experience-one :ids="[
            '8828176',
            '13be66e',
            'c9a0a2f',
            '0a245b7',
            'a58dfb9',
            '23da1cd',
            '440b204',
            'da79d66',
            '659fdfd',
            'c94cd03',
            '46f12bd',
            '3135488',
        ]" />

        <div class="no-position  elementor-element elementor-element-f91b422 e-flex e-con-boxed e-con e-parent"
            data-id="f91b422" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-ae37b0b elementor-absolute elementor-hidden-tablet elementor-hidden-mobile gsap-move-no elementor-widget elementor-widget-rs-image"
                    data-id="ae37b0b" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="rs-image.default">
                    <div class="elementor-widget-container">

                        <div class="rs-image no ruler_image_no ruler_position_  ">
                            <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                                src="{{ asset('images/internal/image-1.png') }}" alt="image 1" />
                        </div>

                    </div>
                </div>
                <div class="elementor-element elementor-element-ad9cdf4 elementor-widget__width-initial elementor-absolute gsap-move-no elementor-widget elementor-widget-rs-image"
                    data-id="ad9cdf4" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="rs-image.default">
                    <div class="elementor-widget-container">

                        <div class="rs-image no ruler_image_no ruler_position_  ">
                            <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                                src="{{ asset('images/internal/element.png') }}" alt="element" />
                        </div>

                    </div>
                </div>
                <div class="elementor-element elementor-element-056775d elementor-absolute gsap-move-no elementor-widget elementor-widget-rs-image"
                    data-id="056775d" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="rs-image.default">
                    <div class="elementor-widget-container">

                        <div class="rs-image no ruler_image_no ruler_position_  ">
                            <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                                src="{{ asset('images/internal/element1.png') }}" alt="element(1)" />
                        </div>

                    </div>
                </div>
                <div class="no-position  elementor-element elementor-element-ec012fe e-flex e-con-boxed e-con e-child"
                    data-id="ec012fe" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-2cc4532 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit gsap-move-no elementor-widget elementor-widget-rs-heading"
                            data-id="2cc4532" data-element_type="widget" data-widget_type="rs-heading.default">
                            <div class="elementor-widget-container">

                                <div class="prelements-heading style1  center  animate-">
                                    <div class="title-inner">
                                        <span class="sub-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="9"
                                                viewBox="0 0 31 9" fill="none">
                                                <rect y="0.5" width="8" height="8" fill="#394EA1">
                                                </rect>
                                                <line x1="8" y1="4" x2="31" y2="4"
                                                    stroke="#394EA1"></line>
                                            </svg>Our Awesome Services<svg xmlns="http://www.w3.org/2000/svg"
                                                width="31" height="9" viewBox="0 0 31 9" fill="none">
                                                <rect width="8" height="8" transform="matrix(-1 0 0 1 31 0.5)"
                                                    fill="#394EA1"></rect>
                                                <line y1="-0.5" x2="23" y2="-0.5"
                                                    transform="matrix(-1 0 0 1 23 4.5)" stroke="#394EA1"></line>
                                            </svg> </span>
                                        <h2 class="title rs-split-text-enable split-in-fade">We Provide Our
                                            Services All Over The World</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="no-position  elementor-element elementor-element-6816b46 e-con-full e-flex e-con e-child"
                    data-id="6816b46" data-element_type="container">
                    <div class="elementor-element elementor-element-c106b69 gsap-move-no elementor-widget elementor-widget-rs-service-slider"
                        data-id="c106b69" data-element_type="widget" data-widget_type="rs-service-slider.default">
                        <div class="elementor-widget-container">

                            <div class="rsaddon-unique-slider ">
                                <div id="rsaddon-slick-slider-5231"
                                    class="rs-addon-slider rs-addon-slider-5231  rs-services-slider arrow_show_enable  service-style-4 slick-dots-1 nav-icon-2">

                                    @foreach ($services as $service)
                                        <div class="grid-item">
                                            <div class="rs-service-slider elementor-repeater-item-73b70c5">
                                                <div class="feature-img">
                                                    <img loading="lazy" decoding="async" width="784" height="472"
                                                        src="{{ asset($service['show']) }}"
                                                        class="attachment-full size-full" alt="services_03"
                                                        sizes="(max-width: 784px) 100vw, 784px" />
                                                </div>

                                                <div class="service-title-holder btn_box">
                                                    <div class="service-img icon-type">
                                                        {!! $service['svg'] !!}
                                                    </div>

                                                    <div class="service-content-area">
                                                        <div class="service-title no">
                                                            <h4 class="title">
                                                                <a
                                                                    href="{{ route('service.service_detail') }}?name={{ $service['name'] }}">
                                                                    {{ $service['full_name'] }} </a>
                                                            </h4>
                                                        </div>

                                                        <div class="service-desc"> {{ $service['desc'] }}
                                                        </div>
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
                                <div class="rsaddon-slider-conf wpsisac-hide"
                                    data-conf="{&quot;slidesToShow&quot;:&quot;3&quot;,&quot;autoplaySpeed&quot;:&quot;3000&quot;,&quot;interval&quot;:&quot;3000&quot;,&quot;slidesToScroll&quot;:&quot;1&quot;,&quot;slider_autoplay&quot;:&quot;false&quot;,&quot;pauseOnHover&quot;:&quot;false&quot;,&quot;sliderDots&quot;:&quot;false&quot;,&quot;sliderNav&quot;:&quot;true&quot;,&quot;infinite&quot;:&quot;false&quot;,&quot;centerMode&quot;:&quot;false&quot;,&quot;col_lg&quot;:&quot;3&quot;,&quot;col_md&quot;:&quot;3&quot;,&quot;col_sm&quot;:&quot;2&quot;,&quot;col_xs&quot;:&quot;1&quot;}">
                                </div>
                            </div>
                            <script>
                                jQuery(document).ready(function($) {
                                    $('.rs-addon-slider-5231').each(function(index) {
                                        var slider_id = jQuery(this).attr('id');
                                        var slider_conf = jQuery.parseJSON(jQuery(this).closest('.rsaddon-unique-slider').find(
                                            '.rsaddon-slider-conf').attr('data-conf'));

                                        if (typeof(slider_id) != 'undefined' && slider_id != '') {
                                            jQuery('#' + slider_id).not('.slick-initialized').slick({
                                                slidesToShow: parseInt(slider_conf.col_lg),
                                                centerMode: (slider_conf.centerMode) == "true" ? true : false,
                                                dots: (slider_conf.sliderDots) == "true" ? true : false,
                                                arrows: (slider_conf.sliderNav) == "true" ? true : false,
                                                autoplay: (slider_conf.slider_autoplay) == "true" ? true : false,
                                                slidesToScroll: parseInt(slider_conf.slidesToScroll),
                                                centerPadding: '15px',
                                                rtl: false,
                                                autoplaySpeed: parseInt(slider_conf.autoplaySpeed),
                                                pauseOnHover: (slider_conf.pauseOnHover) == "true" ? true : false,
                                                loop: false,
                                                responsive: [{
                                                        breakpoint: 1200,
                                                        settings: {
                                                            slidesToShow: parseInt(slider_conf.col_md),
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 992,
                                                        settings: {
                                                            slidesToShow: parseInt(slider_conf.col_sm),
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 768,
                                                        settings: {
                                                            arrows: false,
                                                            slidesToShow: parseInt(slider_conf.col_xs),
                                                        }
                                                    },
                                                ]
                                            });
                                        }

                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="no-position  elementor-element elementor-element-37b703f e-con-full e-flex e-con e-child"
                        data-id="37b703f" data-element_type="container">
                        <div class="elementor-element elementor-element-7711ba0 elementor-widget-mobile__width-initial gsap-move-no elementor-widget elementor-widget-rs-button"
                            data-id="7711ba0" data-element_type="widget" data-widget_type="rs-button.default">
                            <div class="elementor-widget-container">
                                <div class="rs-button style1 unique-39527">


                                    <a class="rs-btn anim-dir-" href="{{ route('contact') }}">
                                        <span>Free Consultations
                                            <em>
                                                <i aria-hidden="true" class="ri-arrow-right-line"></i> <i
                                                    aria-hidden="true" class="ri-arrow-right-line"></i> </em>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7eca16b elementor-widget-mobile__width-inherit elementor-widget-laptop__width-initial gsap-move-no elementor-widget elementor-widget-rs-divider"
                            data-id="7eca16b" data-element_type="widget" data-widget_type="rs-divider.default">
                            <div class="elementor-widget-container">

                                <div class="rs-divider"> </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="no-position  elementor-element elementor-element-4b7ce65 e-flex e-con-boxed e-con e-parent"
            data-id="4b7ce65" data-element_type="container">
            <div class="e-con-inner">
                <div class="no-position  elementor-element elementor-element-277d8b8 e-con-full e-flex e-con e-child"
                    data-id="277d8b8" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-element elementor-element-441bc5b gsap-move-no elementor-widget elementor-widget-rs-video"
                        data-id="441bc5b" data-element_type="widget" data-widget_type="rs-video.default">
                        <div class="elementor-widget-container">
                            <div class="rs-video video-item-1991 writing-normal   style1">

                                <div class="overly-border">
                                    <a class="popup-videos icon-type" href="https://www.youtube.com/watch?v=vo9Y_mP31HM">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-play" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z">
                                            </path>
                                        </svg> </a>

                                </div>




                            </div>
                            <script type="text/javascript">
                                jQuery(document).ready(function() {
                                    jQuery('.popup-videos, .popup-text-video').magnificPopup({
                                        disableOn: 10,
                                        type: 'iframe',
                                        mainClass: 'mfp-fade',
                                        removalDelay: 160,
                                        preloader: false,
                                        fixedContentPos: false
                                    });
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="no-position  elementor-element elementor-element-a3cd54b e-con-full e-flex e-con e-parent"
            data-id="a3cd54b" data-element_type="container">
            <div class="no-position  elementor-element elementor-element-54c5266 e-con-full e-flex e-con e-child"
                data-id="54c5266" data-element_type="container">
                <div class="elementor-element elementor-element-b46942a elementor-widget__width-initial elementor-widget-tablet__width-inherit gsap-move-no elementor-widget elementor-widget-rs-heading"
                    data-id="b46942a" data-element_type="widget" data-widget_type="rs-heading.default">
                    <div class="elementor-widget-container">

                        <div class="prelements-heading style1  center  animate-">
                            <div class="title-inner">
                                <span class="sub-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="9"
                                        viewBox="0 0 31 9" fill="none">
                                        <rect y="0.5" width="8" height="8" fill="#394EA1"></rect>
                                        <line x1="8" y1="4" x2="31" y2="4"
                                            stroke="#394EA1"></line>
                                    </svg>OUR LATEST WORK<svg xmlns="http://www.w3.org/2000/svg" width="31"
                                        height="9" viewBox="0 0 31 9" fill="none">
                                        <rect width="8" height="8" transform="matrix(-1 0 0 1 31 0.5)"
                                            fill="#394EA1"></rect>
                                        <line y1="-0.5" x2="23" y2="-0.5"
                                            transform="matrix(-1 0 0 1 23 4.5)" stroke="#394EA1"></line>
                                    </svg> </span>
                                <h2 class="title rs-split-text-enable split-in-fade">Delivering Our Clients More
                                    Project Clarity.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="no-position  elementor-element elementor-element-ab3827a e-con-full e-flex e-con e-child"
                data-id="ab3827a" data-element_type="container">
                <div class="elementor-element elementor-element-32789a0 elementor-widget__width-inherit gsap-move-no elementor-widget elementor-widget-portfolio-slider"
                    data-id="32789a0" data-element_type="widget" data-widget_type="portfolio-slider.default">
                    <div class="elementor-widget-container">

                        <div
                            class="rsaddon-unique-slider uni-32789a0 rs-addon-slider rs-portfolio-slider rs-portfolio rs-portfolio-style4 slider-style-4  overlay- ">

                            <div id="rsaddon-slick-slider-25098" class=" rs-addon-sliders slick-dots- nav-icon-2">

                                @foreach ($projects as $project)
                                    <div class="grid-item">
                                        <div class="portfolio-item">
                                            <div class="portfolio-img">
                                                <img loading="lazy" decoding="async" width="723" height="510"
                                                    src="{{ asset($project['show']) }}" class="attachment-full size-full"
                                                    alt="projects_new03" sizes="(max-width: 723px) 100vw, 723px" />
                                                <div class="img-overlay"></div>
                                            </div>
                                            <div class="portfolio-content">
                                                <div class="content-details">
                                                    <p class="p-category"> <a
                                                            href="{{ route('service.service_get') }}?slug={{ $project['category']['slug'] }}"
                                                            rel="tag">{{ $project['category']['name'] }}</a></p>
                                                    <h4 class="p-title"><a
                                                            href="{{ route('service.service_detail') }}?slug={{ $project['slug'] }}">{{ $project['name'] }}</a>
                                                    </h4>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="rsaddon-slider-conf d-none"
                                data-conf="{&quot;slidesToShow&quot;:3,&quot;variableWidth&quot;:&quot;false&quot;,&quot;autoplaySpeed&quot;:3000,&quot;interval&quot;:3000,&quot;slidesToScroll&quot;:&quot;1&quot;,&quot;slider_autoplay&quot;:&quot;false&quot;,&quot;pauseOnHover&quot;:&quot;false&quot;,&quot;sliderDots&quot;:&quot;false&quot;,&quot;sliderNav&quot;:&quot;true&quot;,&quot;infinite&quot;:&quot;false&quot;,&quot;centerMode&quot;:&quot;true&quot;,&quot;col_lg&quot;:3,&quot;col_md&quot;:&quot;1&quot;,&quot;col_sm&quot;:&quot;1&quot;,&quot;col_xs&quot;:1,&quot;slider_centers_pad_xl&quot;:&quot;400px&quot;,&quot;slider_centers_pad_lg&quot;:&quot;250px&quot;,&quot;slider_centers_pad_md&quot;:&quot;100px&quot;,&quot;col_lg_2&quot;:&quot;1&quot;}">
                            </div>
                        </div>
                        <script>
                            jQuery(document).ready(function($) {
                                jQuery('#rsaddon-slick-slider-25098').each(function(index) {
                                    var slider_id = jQuery(this).attr('id');
                                    var slider_conf = jQuery.parseJSON(jQuery(this).closest(
                                        '.rsaddon-unique-slider.uni-32789a0').find('.rsaddon-slider-conf').attr(
                                        'data-conf'));

                                    if (typeof(slider_id) != 'undefined' && slider_id != '') {
                                        jQuery('#' + slider_id).not('.slick-initialized').slick({
                                            slidesToShow: parseInt(slider_conf.col_lg),
                                            centerMode: (slider_conf.centerMode) == "true" ? true : false,
                                            dots: (slider_conf.sliderDots) == "true" ? true : false,
                                            arrows: (slider_conf.sliderNav) == "true" ? true : false,
                                            autoplay: (slider_conf.slider_autoplay) == "true" ? true : false,
                                            slidesToScroll: parseInt(slider_conf.slidesToScroll),
                                            centerPadding: slider_conf.slider_centers_pad_xl,
                                            autoplaySpeed: parseInt(slider_conf.autoplaySpeed),
                                            pauseOnHover: (slider_conf.pauseOnHover) == "true" ? true : false,
                                            variableWidth: (slider_conf.variableWidth) == "true" ? true : false,
                                            infinite: true,
                                            loop: (slider_conf.slider_loop) == "true" ? true : false,
                                            rtl: false,
                                            responsive: [{
                                                    breakpoint: 1200,
                                                    settings: {
                                                        slidesToShow: parseInt(slider_conf.col_md),
                                                        slidesToScroll: 1,
                                                    }
                                                },
                                                {
                                                    breakpoint: 1199,
                                                    settings: {
                                                        slidesToShow: parseInt(slider_conf.col_lg_2),
                                                        centerPadding: slider_conf.slider_centers_pad_xl,
                                                    }
                                                },
                                                {
                                                    breakpoint: 992,
                                                    settings: {
                                                        slidesToShow: parseInt(slider_conf.col_sm),
                                                        slidesToScroll: 1,
                                                        centerPadding: slider_conf.slider_centers_pad_lg,
                                                    }
                                                },
                                                {
                                                    breakpoint: 768,
                                                    settings: {
                                                        arrows: false,
                                                        slidesToShow: parseInt(slider_conf.col_xs),
                                                        slidesToScroll: 1,
                                                        centerPadding: slider_conf.slider_centers_pad_md,
                                                    }
                                                },
                                                {
                                                    breakpoint: 600,
                                                    settings: {
                                                        slidesToShow: 1,
                                                        arrows: false,
                                                        slidesToScroll: 1,
                                                        centerPadding: '0px',
                                                    }
                                                }
                                            ]
                                        });
                                    }
                                });
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>

        <div class="no-position  elementor-element elementor-element-433155f elementor-hidden-mobile e-flex e-con-boxed e-con e-parent"
            data-id="433155f" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="no-position  elementor-element elementor-element-4c1b8d2 e-con-full elementor-hidden-laptop elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child"
                    data-id="4c1b8d2" data-element_type="container">
                    <div class="elementor-element elementor-element-1d2fca3 elementor-widget__width-initial elementor-widget-mobile__width-inherit gsap-move-no elementor-widget elementor-widget-rs-divider"
                        data-id="1d2fca3" data-element_type="widget" data-widget_type="rs-divider.default">
                        <div class="elementor-widget-container">

                            <div class="rs-divider"> </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="no-position  elementor-element elementor-element-cb865fb e-flex e-con-boxed e-con e-parent"
            data-id="cb865fb" data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-d30d0fa elementor-widget__width-initial gsap-move-no elementor-widget elementor-widget-rs-heading"
                    data-id="d30d0fa" data-element_type="widget" data-widget_type="rs-heading.default">
                    <div class="elementor-widget-container">

                        <div class="prelements-heading style1  center  animate-">
                            <div class="title-inner">
                                <span class="sub-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="9"
                                        viewBox="0 0 31 9" fill="none">
                                        <rect y="0.5" width="8" height="8" fill="#394EA1"></rect>
                                        <line x1="8" y1="4" x2="31" y2="4"
                                            stroke="#394EA1"></line>
                                    </svg>TESTIMONIALS<svg xmlns="http://www.w3.org/2000/svg" width="31"
                                        height="9" viewBox="0 0 31 9" fill="none">
                                        <rect width="8" height="8" transform="matrix(-1 0 0 1 31 0.5)"
                                            fill="#394EA1"></rect>
                                        <line y1="-0.5" x2="23" y2="-0.5"
                                            transform="matrix(-1 0 0 1 23 4.5)" stroke="#394EA1"></line>
                                    </svg> </span>
                                <h2 class="title rs-split-text-enable split-in-fade">Recent Client Feedback</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="no-position  elementor-element elementor-element-9476351 e-con-full e-flex e-con e-child"
                    data-id="9476351" data-element_type="container">
                    <div class="elementor-element elementor-element-c94ef71 gsap-move-no elementor-widget elementor-widget-rs-testimonial-slider"
                        data-id="c94ef71" data-element_type="widget" data-widget_type="rs-testimonial-slider.default">
                        <div class="elementor-widget-container">

                            <div class="rsaddon-unique-slider ">
                                <div id="rsaddon-slick-slider-28283"
                                    class="addon-slider-28283 rs-addon-slider rs-testimonial-slider style2  slick-dots- ">

                                    @foreach ($testimonies as $t)
                                        <div class="grid-item ">
                                            <div class="testimonial-inner">
                                                <div class="quote_icon">
                                                </div>
                                                <div class="vendor-img">
                                                    <img decoding="async" src="{{ asset($t['show']) }}" alt="2-1.jpg">
                                                </div>

                                                <div class="testi-card-bottom">
                                                    <div class="description">
                                                        <span style="color: #0e0e0e">
                                                            {{ $t['content'] }}
                                                        </span>
                                                    </div>
                                                    <div class="content-part">
                                                        <h5 class="name">{{ $t['name'] }}</h5>
                                                        <div class="testi-designation">{{ $t['role'] }}</div>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                                        class="ri-star-half-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="rsaddon-slider-conf d-none"
                                    data-conf="{&quot;slidesToShow&quot;:&quot;3&quot;,&quot;autoplaySpeed&quot;:&quot;5000&quot;,&quot;interval&quot;:&quot;5000&quot;,&quot;slidesToScroll&quot;:&quot;1&quot;,&quot;slider_autoplay&quot;:&quot;true&quot;,&quot;pauseOnHover&quot;:&quot;false&quot;,&quot;sliderDots&quot;:&quot;false&quot;,&quot;sliderNav&quot;:&quot;false&quot;,&quot;infinite&quot;:&quot;true&quot;,&quot;centerMode&quot;:&quot;false&quot;,&quot;col_lg&quot;:&quot;3&quot;,&quot;col_md&quot;:&quot;2&quot;,&quot;col_sm&quot;:&quot;2&quot;,&quot;col_xs&quot;:1,&quot;slider_centers_pad_xl&quot;:&quot;400px&quot;,&quot;slider_centers_pad_lg&quot;:&quot;250px&quot;,&quot;slider_centers_pad_md&quot;:&quot;100px&quot;,&quot;col_lg_2&quot;:&quot;2&quot;}">
                                </div>
                            </div>
                            <script>
                                jQuery(document).ready(function($) {
                                    $('.addon-slider-28283').each(function(index) {
                                        var slider_id = $(this).attr('id');
                                        var slider_conf = jQuery.parseJSON($(this).closest('.rsaddon-unique-slider').find(
                                            '.rsaddon-slider-conf').attr('data-conf'));

                                        if (typeof(slider_id) != 'undefined' && slider_id != '') {
                                            jQuery('#' + slider_id).not('.slick-initialized').slick({
                                                slidesToShow: parseInt(slider_conf.col_lg),
                                                centerMode: (slider_conf.centerMode) == "true" ? true : false,
                                                dots: (slider_conf.sliderDots) == "true" ? true : false,
                                                arrows: (slider_conf.sliderNav) == "true" ? true : false,
                                                autoplay: (slider_conf.slider_autoplay) == "true" ? true : false,
                                                slidesToScroll: parseInt(slider_conf.slidesToScroll),
                                                centerPadding: slider_conf.slider_centers_pad_xl,
                                                autoplaySpeed: parseInt(slider_conf.autoplaySpeed),
                                                pauseOnHover: (slider_conf.pauseOnHover) == "true" ? true : false,
                                                infinite: (slider_conf.infinite) == "true" ? true : false,
                                                rtl: false,


                                                responsive: [{
                                                        breakpoint: 1200,
                                                        settings: {
                                                            slidesToShow: parseInt(slider_conf.col_md),
                                                            slidesToScroll: 1,
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 1199,
                                                        settings: {
                                                            slidesToShow: parseInt(slider_conf.col_lg_2),
                                                            centerPadding: slider_conf.slider_centers_pad_xl,
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 992,
                                                        settings: {
                                                            slidesToShow: parseInt(slider_conf.col_sm),
                                                            slidesToScroll: 1,
                                                            centerPadding: slider_conf.slider_centers_pad_lg,
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 768,
                                                        settings: {
                                                            arrows: false,
                                                            slidesToShow: parseInt(slider_conf.col_xs),
                                                            slidesToScroll: 1,
                                                            centerPadding: slider_conf.slider_centers_pad_md,
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 600,
                                                        settings: {
                                                            slidesToShow: 1,
                                                            arrows: false,
                                                            slidesToScroll: 1,
                                                            centerPadding: '0px',
                                                        }
                                                    }
                                                ]
                                            });
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="no-position  elementor-element elementor-element-19fe28c e-flex e-con-boxed e-con e-parent"
            data-id="19fe28c" data-element_type="container">
            <div class="e-con-inner">
                <div class="no-position  elementor-element elementor-element-f7bcdca e-con-full e-flex e-con e-child"
                    data-id="f7bcdca" data-element_type="container">
                    <div class="no-position  elementor-element elementor-element-7a071bb e-con-full e-flex e-con e-child"
                        data-id="7a071bb" data-element_type="container">
                        <div class="elementor-element elementor-element-340d4db gsap-move-no elementor-widget elementor-widget-image"
                            data-id="340d4db" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="164" height="53"
                                    src="{{ asset('images/internal/clients.png') }}"
                                    class="attachment-large size-large wp-image-408" alt="" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d4630aa gsap-move-no elementor-widget elementor-widget-heading"
                            data-id="d4630aa" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <span class="elementor-heading-title elementor-size-default">Our Website 75000+
                                    VIP Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-fc4a2f7 elementor-widget__width-inherit gsap-move-no elementor-widget elementor-widget-rs-divider"
                        data-id="fc4a2f7" data-element_type="widget" data-widget_type="rs-divider.default">
                        <div class="elementor-widget-container">

                            <div class="rs-divider"> </div>

                        </div>
                    </div>
                </div>
                <div class="no-position  elementor-element elementor-element-7c67456 e-con-full e-flex e-con e-child"
                    data-id="7c67456" data-element_type="container">
                    <div class="elementor-element elementor-element-fdbcc29 elementor-widget__width-inherit gsap-move-no elementor-widget elementor-widget-rs-logo"
                        data-id="fdbcc29" data-element_type="widget" data-widget_type="rs-logo.default">
                        <div class="elementor-widget-container">
                            <div class="rsaddons-logo-showcase rsl_logo_style1 bg_animation_ overlay_edge_">
                                <div class="rsaddon-unique-slider ">
                                    <div id="rsaddon-slick-slider-124114"
                                        class="rs-addon-slider-124114 rs-addon-slider nav-icon-">

                                        @foreach ($partners as $p)
                                            <div class="grid-item ">
                                                <div class="rs-grid-figure">
                                                    <div class="logo-img">
                                                        <a>
                                                            <img decoding="async" class="mains-logos rs-grid-img "
                                                                src="{{ asset($p['show']) }}" title=""
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <span class="left-bottom-shape"></span>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="rsaddon-slider-conf wpsisac-hide"
                                        data-conf="{&quot;slidesToShow&quot;:&quot;6&quot;,&quot;autoplaySpeed&quot;:&quot;4000&quot;,&quot;interval&quot;:&quot;4000&quot;,&quot;slidesToScroll&quot;:&quot;1&quot;,&quot;slider_autoplay&quot;:&quot;true&quot;,&quot;pauseOnHover&quot;:&quot;false&quot;,&quot;sliderDots&quot;:&quot;false&quot;,&quot;sliderNav&quot;:&quot;false&quot;,&quot;infinite&quot;:&quot;true&quot;,&quot;centerMode&quot;:&quot;false&quot;,&quot;col_lg&quot;:&quot;6&quot;,&quot;col_md&quot;:&quot;5&quot;,&quot;col_sm&quot;:&quot;4&quot;,&quot;col_xs&quot;:3,&quot;col_mobile&quot;:2}">
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery(document).ready(function() {
                                    jQuery('.rs-addon-slider-124114').each(function(index) {
                                        var slider_id = jQuery(this).attr('id');
                                        var slider_conf = jQuery.parseJSON(jQuery(this).closest('.rsaddon-unique-slider').find(
                                            '.rsaddon-slider-conf').attr('data-conf'));

                                        if (typeof(slider_id) != 'undefined' && slider_id != '') {
                                            jQuery('#' + slider_id).not('.slick-initialized').slick({
                                                slidesToShow: parseInt(slider_conf.col_lg),
                                                centerMode: (slider_conf.centerMode) == "true" ? true : false,
                                                dots: (slider_conf.sliderDots) == "true" ? true : false,
                                                arrows: (slider_conf.sliderNav) == "true" ? true : false,
                                                autoplay: (slider_conf.slider_autoplay) == "true" ? true : false,
                                                slidesToScroll: parseInt(slider_conf.slidesToScroll),
                                                centerPadding: '15px',
                                                rtl: false,
                                                autoplaySpeed: parseInt(slider_conf.autoplaySpeed),
                                                pauseOnHover: (slider_conf.pauseOnHover) == "true" ? true : false,
                                                loop: false,

                                                responsive: [{
                                                        breakpoint: 1200,
                                                        settings: {
                                                            slidesToShow: parseInt(slider_conf.col_md),
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 992,
                                                        settings: {
                                                            slidesToShow: parseInt(slider_conf.col_sm),
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 768,
                                                        settings: {
                                                            arrows: false,
                                                            slidesToShow: parseInt(slider_conf.col_xs),
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 576,
                                                        settings: {
                                                            arrows: false,
                                                            slidesToShow: parseInt(slider_conf.col_mobile),
                                                        }
                                                    },
                                                ]
                                            });
                                        }

                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-why-choose-u-s :ids="[
            '429cd7b',
            'ac3383c',
            'eb28a59',
            '44e8260',
            '1d49779',
            '394EA1',
            '8bffc7b',
            '13310',
            '245588',
            '245589',
            '245590',
        ]"></x-why-choose-u-s>

        <x-team :ids="[
            '70a756a',
            '980d5fb',
            'b60b65b',
            '394EA1',
            '333ad14',
            '55871',
            '6be1bbf',
            '80a485e',
            '31442',
            '3048354',
            '0778d29',
        ]" :teams="$teams" />

        {{-- <div class="no-position  elementor-element elementor-element-30b2b24 e-flex e-con-boxed e-con e-parent"
            data-id="30b2b24" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="no-position  elementor-element elementor-element-5cb8644 e-con-full e-flex e-con e-child"
                    data-id="5cb8644" data-element_type="container">
                    <div class="elementor-element elementor-element-0ec3335 elementor-widget__width-initial elementor-widget-mobile__width-inherit gsap-move-no elementor-widget elementor-widget-rs-heading"
                        data-id="0ec3335" data-element_type="widget" data-widget_type="rs-heading.default">
                        <div class="elementor-widget-container">

                            <div class="prelements-heading style1  center  animate-">
                                <div class="title-inner">
                                    <span class="sub-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="9"
                                            viewBox="0 0 31 9" fill="none">
                                            <rect y="0.5" width="8" height="8" fill="#394EA1"></rect>
                                            <line x1="8" y1="4" x2="31" y2="4"
                                                stroke="#394EA1"></line>
                                        </svg>Our Blog and News<svg xmlns="http://www.w3.org/2000/svg" width="31"
                                            height="9" viewBox="0 0 31 9" fill="none">
                                            <rect width="8" height="8" transform="matrix(-1 0 0 1 31 0.5)"
                                                fill="#394EA1"></rect>
                                            <line y1="-0.5" x2="23" y2="-0.5"
                                                transform="matrix(-1 0 0 1 23 4.5)" stroke="#394EA1"></line>
                                        </svg> </span>
                                    <h2 class="title rs-split-text-enable split-in-fade">Latest Insights and
                                        Updates</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-1cfab36 gsap-move-no elementor-widget elementor-widget-prelements-blog-gird"
                        data-id="1cfab36" data-element_type="widget" data-widget_type="prelements-blog-gird.default">
                        <div class="elementor-widget-container">

                            <div class="prelements-blog-grid">
                                <!-- Default Old Style -->
                                <div class="row blog_style_defaultlayout">

                                    <div class="pre-blog-item col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="blog-inner-wrap">
                                            <div class="pre-image-wrap">
                                                <a href="https://demo.rstheme.com/wordpress/abuild/most-successful-projects-best-building-case-studies-2/"
                                                    class="rs--thum">
                                                    <img loading="lazy" decoding="async" width="416"
                                                        height="340"
                                                        src="https://demo.rstheme.com/wordpress/abuild/wp-content/uploads/2025/01/cons_blog-416x340.jpg"
                                                        class="attachment-abuild_portfolio-slider-four size-abuild_portfolio-slider-four"
                                                        alt="cons_blog" /> </a>
                                                <a href="https://demo.rstheme.com/wordpress/abuild/category/pre-construction/"
                                                    class="rs-cate">
                                                    Pre-Construction </a>
                                            </div>

                                            <div class="pre-blog-content">
                                                <ul class="pre-blog-meta">

                                                    <li> By <span>abuild</span></li>


                                                    <li> Jan 9, 2025 </li>

                                                </ul>

                                                <h3 class="pre-post-title"><a class="pre-pointer-events"
                                                        href="https://demo.rstheme.com/wordpress/abuild/most-successful-projects-best-building-case-studies-2/">
                                                        most successful projects best building case studies.</a>
                                                </h3>




                                                <div class="blog-btn-part">
                                                    <a
                                                        href="https://demo.rstheme.com/wordpress/abuild/most-successful-projects-best-building-case-studies-2/">
                                                        <span class="btn-txt">Read More</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path
                                                                d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                            </path>
                                                        </svg> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="pre-blog-item col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="blog-inner-wrap">
                                            <div class="pre-image-wrap">
                                                <a href="https://demo.rstheme.com/wordpress/abuild/construction-of-a-new-high-tech-plant-in-washingtons-2/"
                                                    class="rs--thum">
                                                    <img loading="lazy" decoding="async" width="416"
                                                        height="340"
                                                        src="https://demo.rstheme.com/wordpress/abuild/wp-content/uploads/2025/01/cons_blog2-416x340.jpg"
                                                        class="attachment-abuild_portfolio-slider-four size-abuild_portfolio-slider-four"
                                                        alt="cons_blog2" /> </a>
                                                <a href="https://demo.rstheme.com/wordpress/abuild/category/pre-construction/"
                                                    class="rs-cate">
                                                    Pre-Construction </a>
                                            </div>

                                            <div class="pre-blog-content">
                                                <ul class="pre-blog-meta">

                                                    <li> By <span>abuild</span></li>


                                                    <li> Jan 9, 2025 </li>

                                                </ul>

                                                <h3 class="pre-post-title"><a class="pre-pointer-events"
                                                        href="https://demo.rstheme.com/wordpress/abuild/construction-of-a-new-high-tech-plant-in-washingtons-2/">
                                                        Construction of a new high tech plant in washingtons</a>
                                                </h3>




                                                <div class="blog-btn-part">
                                                    <a
                                                        href="https://demo.rstheme.com/wordpress/abuild/construction-of-a-new-high-tech-plant-in-washingtons-2/">
                                                        <span class="btn-txt">Read More</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path
                                                                d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                            </path>
                                                        </svg> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="pre-blog-item col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="blog-inner-wrap">
                                            <div class="pre-image-wrap">
                                                <a href="https://demo.rstheme.com/wordpress/abuild/building-resilient-supply-chains-for-industries-2/"
                                                    class="rs--thum">
                                                    <img loading="lazy" decoding="async" width="416"
                                                        height="340"
                                                        src="https://demo.rstheme.com/wordpress/abuild/wp-content/uploads/2025/01/cons_blog3-416x340.jpg"
                                                        class="attachment-abuild_portfolio-slider-four size-abuild_portfolio-slider-four"
                                                        alt="cons_blog3" /> </a>
                                                <a href="https://demo.rstheme.com/wordpress/abuild/category/pre-construction/"
                                                    class="rs-cate">
                                                    Pre-Construction </a>
                                            </div>

                                            <div class="pre-blog-content">
                                                <ul class="pre-blog-meta">

                                                    <li> By <span>abuild</span></li>


                                                    <li> Jan 9, 2025 </li>

                                                </ul>

                                                <h3 class="pre-post-title"><a class="pre-pointer-events"
                                                        href="https://demo.rstheme.com/wordpress/abuild/building-resilient-supply-chains-for-industries-2/">
                                                        Building resilient supply chains for industries</a>
                                                </h3>




                                                <div class="blog-btn-part">
                                                    <a
                                                        href="https://demo.rstheme.com/wordpress/abuild/building-resilient-supply-chains-for-industries-2/">
                                                        <span class="btn-txt">Read More</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path
                                                                d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                            </path>
                                                        </svg> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- End Default Old Style -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <x-f-a-q :ids="[
            'd9306b7',
            '99ed783',
            '8760b4a',
            '394EA1',
            '7322461',
            '15fe421',
            '1a0682f',
            '130962',
            '11833',
            '675f60d',
            'a99845a',
            'd4f8783',
            'f286e91',
        ]" :faq="$faq" />

        <div class="no-position  elementor-element elementor-element-70679ac e-flex e-con-boxed e-con e-parent"
            data-id="70679ac" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="no-position  elementor-element elementor-element-452e9de e-con-full e-flex e-con e-child"
                    data-id="452e9de" data-element_type="container">
                    <div class="elementor-element elementor-element-a0f3ebe elementor-widget-tablet__width-inherit gsap-move-no elementor-widget elementor-widget-rs-heading"
                        data-id="a0f3ebe" data-element_type="widget" data-widget_type="rs-heading.default">
                        <div class="elementor-widget-container">

                            <div class="prelements-heading style1  left  animate-">
                                <div class="title-inner">
                                    <span class="sub-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="9"
                                            viewBox="0 0 31 9" fill="none">
                                            <rect y="0.5" width="8" height="8" fill="#394EA1"></rect>
                                            <line x1="8" y1="4" x2="31" y2="4"
                                                stroke="#394EA1"></line>
                                        </svg>Contact Us<svg xmlns="http://www.w3.org/2000/svg" width="31"
                                            height="9" viewBox="0 0 31 9" fill="none">
                                            <rect width="8" height="8" transform="matrix(-1 0 0 1 31 0.5)"
                                                fill="#394EA1"></rect>
                                            <line y1="-0.5" x2="23" y2="-0.5"
                                                transform="matrix(-1 0 0 1 23 4.5)" stroke="#394EA1"></line>
                                        </svg> </span>
                                    <h2 class="title rs-split-text-enable split-in-fade">Supporting You in Shaping
                                        Communities Worldwide</h2>
                                </div>
                                <div class="description">
                                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                        ridiculus mus. Ut finibus nisl mi, sed venenatis lectus into congue at
                                        semper tellus consectetur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-position  elementor-element elementor-element-a2e549d e-con-full e-flex e-con e-child"
                        data-id="a2e549d" data-element_type="container">
                        <div class="elementor-element elementor-element-8bed515 gsap-move-no elementor-widget elementor-widget-rs-contact-box"
                            data-id="8bed515" data-element_type="widget" data-widget_type="rs-contact-box.default">
                            <div class="elementor-widget-container">



                                <!-- Style 1 Start -->
                                <div class="rs-contact-box">

                                    <div class="address-item boxstyle1">
                                        <div class="address-text">
                                            <div class="text">
                                                <span class="label">Nigeri</span>
                                                <span class="des">
                                                    {{ config('custom.address') }}</span>
                                            </div>
                                        </div>
                                        <span class="des-right-icon"></span>
                                    </div>
                                </div>

                                <!-- Style 1 End -->

                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2e43500 gsap-move-no elementor-widget elementor-widget-rs-contact-box"
                            data-id="2e43500" data-element_type="widget" data-widget_type="rs-contact-box.default">
                            <div class="elementor-widget-container">



                                <!-- Style 1 Start -->
                                {{-- <div class="rs-contact-box">

                                    <div class="address-item boxstyle1">


                                        <div class="address-text">
                                            <div class="text">
                                                <span class="label">California</span>
                                                <span class="des">
                                                    Richardson California 62639<br />
                                                    abuild@example.com<br />
                                                    888 999 0005 </span>
                                            </div>




                                        </div>
                                        <span class="des-right-icon"></span>
                                    </div>
                                </div> --}}

                                <!-- Style 1 End -->

                            </div>
                        </div>
                    </div>
                    <div class="no-position  elementor-element elementor-element-be053ba e-con-full e-flex e-con e-child"
                        data-id="be053ba" data-element_type="container">
                        <div class="elementor-element elementor-element-7cd04eb gsap-move-no elementor-widget elementor-widget-rs-contact-box"
                            data-id="7cd04eb" data-element_type="widget" data-widget_type="rs-contact-box.default">
                            <div class="elementor-widget-container">



                                <!-- Style 1 Start -->
                                {{-- <div class="rs-contact-box">

                                    <div class="address-item boxstyle1">


                                        <div class="address-text">
                                            <div class="text">
                                                <span class="label">Texas</span>
                                                <span class="des">
                                                    206 Mail Parking Nuages 14529<br />
                                                    abuild@example.com<br />
                                                    888 999 0004 </span>
                                            </div>




                                        </div>
                                        <span class="des-right-icon"></span>
                                    </div>
                                </div> --}}

                                <!-- Style 1 End -->

                            </div>
                        </div>
                        <div class="elementor-element elementor-element-33a9001 gsap-move-no elementor-widget elementor-widget-rs-contact-box"
                            data-id="33a9001" data-element_type="widget" data-widget_type="rs-contact-box.default">
                            <div class="elementor-widget-container">



                                <!-- Style 1 Start -->
                                {{-- <div class="rs-contact-box">

                                    <div class="address-item boxstyle1">


                                        <div class="address-text">
                                            <div class="text">
                                                <span class="label">Los Angeles</span>
                                                <span class="des">
                                                    2464 Royal New Jersey 45463<br />
                                                    abuild@example.com<br />
                                                    888 999 0008 </span>
                                            </div>




                                        </div>
                                        <span class="des-right-icon"></span>
                                    </div>
                                </div> --}}

                                <!-- Style 1 End -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="no-position  elementor-element elementor-element-8fc3f79 e-con-full e-flex e-con e-child"
                    data-id="8fc3f79" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-element elementor-element-e7c0a97 gsap-move-no elementor-widget elementor-widget-rs-heading"
                        data-id="e7c0a97" data-element_type="widget" data-widget_type="rs-heading.default">
                        <div class="elementor-widget-container">

                            <div class="prelements-heading default    animate-">
                                <div class="title-inner">
                                    <h3 class="title rs-split-text-disable ">Get In Tech</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-43a194c gsap-move-no elementor-widget elementor-widget-rs-cf7"
                        data-id="43a194c" data-element_type="widget" data-widget_type="rs-cf7.default">
                        <div class="elementor-widget-container">

                            <div class="wpcf7 no-js" id="wpcf7-f2844-p10844-o1" lang="en-US" dir="ltr"
                                data-wpcf7-id="2844">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="{{ route('contact.store') }}" method="post" class="wpcf7-form init"
                                    aria-label="Contact form" novalidate="novalidate" data-status="init">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><span class="wpcf7-form-control-wrap" data-name="First-name"><input
                                                        size="40" maxlength="400"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        autocomplete="fname" aria-required="true" aria-invalid="false"
                                                        placeholder="First Name*" value="" type="text"
                                                        name="first_name" /></span>
                                            </p>
                                            @error('first_name')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <p><span class="wpcf7-form-control-wrap" data-name="Last-name"><input
                                                        size="40" maxlength="400"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        autocomplete="lname" aria-required="true" aria-invalid="false"
                                                        placeholder="Last Name*" value="" type="text"
                                                        name="last_name" /></span>
                                            </p>
                                            @error('last_name')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="wpcf7-form-control-wrap" data-name="your-email"><input
                                                        size="40" maxlength="400"
                                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                        autocomplete="email" aria-required="true" aria-invalid="false"
                                                        placeholder="Email*" value="" type="email"
                                                        name="email" /></span>
                                            </p>
                                            @error('email')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="wpcf7-form-control-wrap" data-name="phone"><input
                                                        size="40" maxlength="400"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false" placeholder="Phone No*"
                                                        value="" type="text" name="phone" /></span>
                                            </p>
                                            @error('phone')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <p><span class="wpcf7-form-control-wrap" data-name="your-message">
                                                    <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea"
                                                        aria-invalid="false" placeholder="Message*" name="message"></textarea>
                                                    @error('message')
                                                        <div class="text-danger small">{{ $message }}</div>
                                                    @enderror
                                                </span>
                                            </p>
                                            <div class="form-btn-area">
                                                <p><input class="wpcf7-form-control wpcf7-submit has-spinner"
                                                        type="submit" value="Submit Now" />
                                                </p>
                                            </div>
                                        </div>

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    <div class="text-red-500">{{ $error }}</div>
                                                @endforeach
                                            </div>
                                        @endif

                                        @if (session('success'))
                                            <div class="alert alert-success text-green-500">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        @if (session('error'))
                                            <div class="text-red-500 alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        <div>
                                        </div>
                                    </div>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
