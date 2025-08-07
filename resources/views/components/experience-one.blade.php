@props(['ids'])

<div class="no-position  elementor-element elementor-element-{{ $ids[0] }} e-flex e-con-boxed e-con e-parent"
    data-id="{{ $ids[0] }}" data-element_type="container">
    <div class="e-con-inner">
        <div class="no-position  elementor-element elementor-element-{{ $ids[1] }} e-con-full e-flex e-con e-child"
            data-id="{{ $ids[1] }}" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-{{ $ids[2] }} elementor-absolute elementor-hidden-tablet elementor-hidden-mobile gsap-move-no elementor-widget elementor-widget-rs-image"
                data-id="{{ $ids[2] }}" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="rs-image.default">
                <div class="elementor-widget-container">

                    <div class="rs-image no ruler_image_no ruler_position_">
                        <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                            src="{{ asset('images/internal/line-2.png') }}" alt="line 2" />
                    </div>

                </div>
            </div>
            <div class="elementor-element elementor-element-{{ $ids[3] }} gsap-move-no elementor-widget elementor-widget-rs-image"
                data-id="{{ $ids[3] }}" data-element_type="widget" data-widget_type="rs-image.default">
                <div class="elementor-widget-container">

                    <div class="rs-image no ruler_image_no ruler_position_  ">
                        <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                            src="{{ asset('images/internal/Rectangle-6.png') }}" alt="Rectangle 6" />
                    </div>

                </div>
            </div>
            <div class="no-position  elementor-element elementor-element-{{ $ids[4] }} e-con-full elementor-hidden-mobile e-flex e-con e-child"
                data-id="{{ $ids[4] }}" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                <div class="elementor-element elementor-element-{{ $ids[5] }} gsap-move-no elementor-widget elementor-widget-rs-video"
                    data-id="{{ $ids[5] }}" data-element_type="widget" data-widget_type="rs-video.default">
                    <div class="elementor-widget-container">
                        <div class="rs-video video-item-1256 writing-normal   style1">

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

            <style>
                .elementor-element-{{ $ids[6] }}::before {
                    position: absolute;
                    content: "";
                    right: auto;
                    top: -30px;
                    width: 0;
                    height: 0;
                    border-bottom: 30px solid var(--e-global-color-primary);
                    border-left: 30px solid transparent;
                    z-index: 9;
                    left: 0;
                }
            </style>

            <div class="no-position  elementor-element elementor-element-{{ $ids[6] }} e-con-full e-transform e-flex e-con e-child"
                data-id="{{ $ids[6] }}" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;,&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                <div class="elementor-element elementor-element-{{ $ids[7] }} gsap-move-no elementor-widget elementor-widget-rs-counter"
                    data-id="{{ $ids[7] }}" data-element_type="widget" data-widget_type="rs-counter.default">
                    <div class="elementor-widget-container">
                        <div class="counter-top-area">
                            <div class="rs-counter-list">
                                <div class="count-text">
                                    <div class="count-number">
                                        <span class="rs-counter odometer"
                                            data-count="{{ config('custom.years') }}">00</span>
                                    </div>
                                    <span class="title">Years of Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="no-position  elementor-element elementor-element-{{ $ids[8] }} e-con-full e-flex e-con e-child"
            data-id="{{ $ids[8] }}" data-element_type="container">
            <div class="elementor-element elementor-element-{{ $ids[9] }} gsap-move-no elementor-widget elementor-widget-rs-heading"
                data-id="{{ $ids[9] }}" data-element_type="widget" data-widget_type="rs-heading.default">
                <div class="elementor-widget-container">

                    <div class="prelements-heading style1  left  animate-">
                        <div class="title-inner">
                            <span class="sub-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="9" viewBox="0 0 31 9"
                                    fill="none">
                                    <rect y="0.5" width="8" height="8" fill="#394EA1"></rect>
                                    <line x1="8" y1="4" x2="31" y2="4" stroke="#394EA1">
                                    </line>
                                </svg>Building company<svg xmlns="http://www.w3.org/2000/svg" width="31"
                                    height="9" viewBox="0 0 31 9" fill="none">
                                    <rect width="8" height="8" transform="matrix(-1 0 0 1 31 0.5)"
                                        fill="#394EA1"></rect>
                                    <line y1="-0.5" x2="23" y2="-0.5"
                                        transform="matrix(-1 0 0 1 23 4.5)" stroke="#394EA1"></line>
                                </svg> </span>
                            <h2 class="title rs-split-text-enable split-in-fade">Building Your Visions
                                Creating Reality</h2>
                        </div>
                        <div class="description">
                            <p>At the heart of every structure lies a dream. We transform your ideas into solid
                                foundations—crafting spaces that reflect purpose, precision, and passion. Whether
                                you're envisioning a modern home, a commercial hub, or a timeless renovation, we
                                bring creativity and craftsmanship together to make your vision a tangible reality.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-{{ $ids[10] }} elementor-widget-tablet__width-inherit gsap-move-no elementor-widget elementor-widget-rs-tab-advanced"
                data-id="{{ $ids[10] }}" data-element_type="widget" data-widget_type="rs-tab-advanced.default">
                <div class="elementor-widget-container">



                    <div class="rstab-main horizontal tab_{{ $ids[10] }} auto_switch_no full_tab_item  style1">
                        <nav class="tab-menu-wrapper">
                            <div class="nav nav-tabs none" id="nav-tab-{{ $ids[10] }}" role="tablist">
                                <button class="nav-link active count_number_no" id="nav-home-1-{{ $ids[11] }}"
                                    data-bs-toggle="tab" data-bs-target="#tab1-{{ $ids[11] }}" type="button"
                                    role="tab" aria-controls="nav-home-1-{{ $ids[11] }}"
                                    aria-selected="true">
                                    Our Mission </button>

                                <button class="nav-link  count_number_no" id="nav-home-2-{{ $ids[11] }}"
                                    data-bs-toggle="tab" data-bs-target="#tab2-{{ $ids[11] }}" type="button"
                                    role="tab" aria-controls="nav-home-2-{{ $ids[11] }}"
                                    aria-selected="true">
                                    Our Vision </button>

                                <button class="nav-link  count_number_no" id="nav-home-3-{{ $ids[11] }}"
                                    data-bs-toggle="tab" data-bs-target="#tab3-{{ $ids[11] }}" type="button"
                                    role="tab" aria-controls="nav-home-3-{{ $ids[11] }}"
                                    aria-selected="true">
                                    Our History </button>

                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent-{{ $ids[10] }}">
                            <div class="tab-pane fade show active" id="tab1-{{ $ids[11] }}" role="tabpanel"
                                aria-labelledby="nav-home-1-{{ $ids[11] }}">
                                <div class="content--teb-area full-sec">

                                    <div class="content--left-area">


                                        <div class="desc_btn_wrapper">
                                            <p>Our mission is to deliver exceptional construction solutions that
                                                combine quality, innovation, and integrity. We are committed to
                                                building lasting structures and lasting relationships—transforming
                                                visions into reality through reliable service, skilled
                                                craftsmanship, and sustainable practices.</p>
                                        </div>


                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade " id="tab2-{{ $ids[11] }}" role="tabpanel"
                                aria-labelledby="nav-home-2-{{ $ids[11] }}">
                                <div class="content--teb-area full-sec">

                                    <div class="content--left-area">


                                        <div class="desc_btn_wrapper">
                                            <p>To be a leading force in the construction industry, recognized for
                                                shaping modern skylines and setting new standards in quality,
                                                safety, and client satisfaction—building a future where every
                                                project inspires excellence.
                                            </p>
                                        </div>


                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade " id="tab3-{{ $ids[11] }}" role="tabpanel"
                                aria-labelledby="nav-home-3-{{ $ids[11] }}">
                                <div class="content--teb-area full-sec">

                                    <div class="content--left-area">


                                        <div class="desc_btn_wrapper">
                                            <p>Founded with a passion for building and a commitment to excellence,
                                                our journey began with small-scale projects rooted in trust and hard
                                                work. Over the years, we’ve grown into a reputable construction
                                                company, delivering residential, commercial, and industrial
                                                solutions across Nigeria and beyond. Our history is built on
                                                reliability, craftsmanship, and a relentless drive to exceed
                                                expectations—project after project</p>
                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="accordion tab-menu-wrapper accordion-menu-wrapper rs_horizontal"
                        id="accordionExample-{{ $ids[10] }}">

                        <div class="accordion-item nav-tabs">

                            <div class="accordion-headerd" id="heading_1-{{ $ids[11] }}">
                                <button class="nav-link accordion-button collapsed show" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse_1-{{ $ids[11] }}"
                                    aria-expanded="true" aria-controls="collapse_1-{{ $ids[11] }}">
                                    <span class="nav-btn-icon">
                                    </span>
                                    Our Mission </button>
                            </div>

                            <div id="collapse_1-{{ $ids[11] }}" class="accordion-collapse collapse show"
                                aria-labelledby="heading_1-{{ $ids[11] }}"
                                data-bs-parent="#accordionExample-{{ $ids[10] }}">
                                <div class="tab-pane">
                                    <div class="content--teb-area full-sec">

                                        <div class="content--left-area">


                                            <div class="desc_btn_wrapper">
                                                <p>
                                                    Our mission is to deliver exceptional construction solutions
                                                    that combine quality, innovation, and integrity. We are
                                                    committed to building lasting structures and lasting
                                                    relationships—transforming visions into reality through reliable
                                                    service, skilled craftsmanship, and sustainable practices.
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item nav-tabs">

                            <div class="accordion-headerd" id="heading_2-{{ $ids[11] }}">
                                <button class="nav-link accordion-button collapsed " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse_2-{{ $ids[11] }}"
                                    aria-expanded="true" aria-controls="collapse_2-{{ $ids[11] }}">
                                    <span class="nav-btn-icon">
                                    </span>
                                    Our Vision </button>
                            </div>

                            <div id="collapse_2-{{ $ids[11] }}" class="accordion-collapse collapse "
                                aria-labelledby="heading_2-{{ $ids[11] }}"
                                data-bs-parent="#accordionExample-{{ $ids[10] }}">
                                <div class="tab-pane">
                                    <div class="content--teb-area full-sec">

                                        <div class="content--left-area">


                                            <div class="desc_btn_wrapper">
                                                <p>To be a leading force in the construction industry, recognized
                                                    for shaping modern skylines and setting new standards in
                                                    quality, safety, and client satisfaction—building a future where
                                                    every project inspires excellence.</p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item nav-tabs">

                            <div class="accordion-headerd" id="heading_3-{{ $ids[11] }}">
                                <button class="nav-link accordion-button collapsed " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse_3-{{ $ids[11] }}"
                                    aria-expanded="true" aria-controls="collapse_3-{{ $ids[11] }}">
                                    <span class="nav-btn-icon">
                                    </span>
                                    Our History </button>
                            </div>

                            <div id="collapse_3-{{ $ids[11] }}" class="accordion-collapse collapse "
                                aria-labelledby="heading_3-{{ $ids[11] }}"
                                data-bs-parent="#accordionExample-{{ $ids[10] }}">
                                <div class="tab-pane">
                                    <div class="content--teb-area full-sec">

                                        <div class="content--left-area">


                                            <div class="desc_btn_wrapper">
                                                <p>Founded with a passion for building and a commitment to
                                                    excellence, our journey began with small-scale projects rooted
                                                    in trust and hard work. Over the years, we’ve grown into a
                                                    reputable construction company, delivering residential,
                                                    commercial, and industrial solutions across Nigeria and beyond.
                                                    Our history is built on reliability, craftsmanship, and a
                                                    relentless drive to exceed expectations—project after project
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-455de14 gsap-move-no elementor-widget elementor-widget-rs-button"
                data-id="455de14" data-element_type="widget" data-widget_type="rs-button.default">
                <div class="elementor-widget-container">
                    <div class="rs-button style1 unique-55378">


                        <a class="rs-btn anim-dir-" href="{{ route('contact') }}">
                            <span>Discover More
                                <em>
                                    <i aria-hidden="true" class="ri-arrow-right-line"></i> <i aria-hidden="true"
                                        class="ri-arrow-right-line"></i> </em>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-fdd42fb gsap-move-no elementor-widget elementor-widget-rs-button"
                data-id="fdd42fb" data-element_type="widget" data-widget_type="rs-button.default">
                <div class="elementor-widget-container">
                    <div class="rs-button style1 unique-62470">


                        <a class="rs-btn anim-dir-" href="{{ route('contact') }}">
                            <span>Read our Story
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
