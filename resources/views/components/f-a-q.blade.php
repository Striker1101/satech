@props(['ids', 'faq'])

<div class="no-position  elementor-element elementor-element-{{ $ids[0] }} e-flex e-con-boxed e-con e-parent"
    data-id="{{ $ids[0] }}" data-element_type="container"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="e-con-inner">
        <div class="no-position  elementor-element elementor-element-{{ $ids[1] }} e-con-full e-flex e-con e-child"
            data-id="{{ $ids[1] }}" data-element_type="container">
            <div class="elementor-element elementor-element-{{ $ids[2] }} elementor-widget__width-initial gsap-move-no elementor-widget elementor-widget-rs-heading"
                data-id="{{ $ids[2] }}" data-element_type="widget" data-widget_type="rs-heading.default">
                <div class="elementor-widget-container">
                    <div class="prelements-heading style1  center  animate-">
                        <div class="title-inner">
                            <span class="sub-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="9" viewBox="0 0 31 9"
                                    fill="none">
                                    <rect y="0.5" width="8" height="8" fill="#{{ $ids[3] }}"></rect>
                                    <line x1="8" y1="4" x2="31" y2="4"
                                        stroke="#{{ $ids[3] }}">
                                    </line>
                                </svg>Special Answer<svg xmlns="http://www.w3.org/2000/svg" width="31"
                                    height="9" viewBox="0 0 31 9" fill="none">
                                    <rect width="8" height="8" transform="matrix(-1 0 0 1 31 0.5)"
                                        fill="#{{ $ids[3] }}"></rect>
                                    <line y1="-0.5" x2="23" y2="-0.5"
                                        transform="matrix(-1 0 0 1 23 4.5)" stroke="#{{ $ids[3] }}"></line>
                                </svg> </span>
                            <h2 class="title rs-split-text-enable split-in-fade">Frequently Asked
                                Questions</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="no-position  elementor-element elementor-element-{{ $ids[4] }} e-con-full e-flex e-con e-child"
            data-id="{{ $ids[4] }}" data-element_type="container">
            <div class="no-position  elementor-element elementor-element-{{ $ids[5] }} e-con-full e-flex e-con e-child"
                data-id="{{ $ids[5] }}" data-element_type="container">
                <div class="elementor-element elementor-element-{{ $ids[6] }} gsap-move-no elementor-widget elementor-widget-rs-accordions-custom"
                    data-id="{{ $ids[6] }}" data-element_type="widget"
                    data-widget_type="rs-accordions-custom.default">
                    <div class="elementor-widget-container">

                        <div class="rs-accordion-area accordion style1" id="rs_accordion_inner_{{ $ids[8] }}">

                            @foreach ($faq as $f)
                                <div class="accordion-item {{ $f['id'] == 1 ? 'active' : '' }}">
                                    <div class="accordion-header" id="heading{{ $ids[7] }}{{ $f['id'] }}">
                                        <div class="accordion-button " data-bs-toggle="collapse"
                                            data-bs-target="#collapse_{{ $ids[7] }}{{ $f['id'] }}"
                                            aria-controls="collapse_{{ $ids[7] }}{{ $f['id'] }}">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path opacity="0.5"
                                                            d="M17.2501 8.25003H9.75003V0.74999C9.75003 0.335778 9.41425 0 9.00004 0C8.58582 0 8.25004 0.335778 8.25004 0.74999V8.24999H0.749991C0.335779 8.25003 0 8.58581 0 9.00002C0 9.41423 0.335779 9.75001 0.749991 9.75001H8.25001V17.25C8.25001 17.6642 8.58579 18 9 18C9.41421 18 9.74999 17.6642 9.74999 17.25V9.75001H17.25C17.6642 9.75001 18 9.41423 18 9.00002C18.0001 8.58581 17.6643 8.25003 17.2501 8.25003Z"
                                                            fill="#555555"></path>
                                                    </svg></span>
                                                <span class="elementor-accordion-icon-opened"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                                                        viewBox="0 0 18 17" fill="none">
                                                        <path
                                                            d="M16.778 15.3974L10.2962 8.95316L16.778 2.5089C17.136 2.153 17.136 1.57597 16.778 1.22007C16.42 0.864167 15.8396 0.864167 15.4817 1.22007L8.99984 7.6643L2.51799 1.22003C2.15998 0.864153 1.57959 0.864153 1.22161 1.22006C0.86363 1.57596 0.86363 2.15298 1.22161 2.50889L7.70344 8.95313L1.22162 15.3974C0.863644 15.7533 0.863645 16.3303 1.22162 16.6862C1.5796 17.0421 2.15999 17.0421 2.51797 16.6862L8.99978 10.242L15.4816 16.6862C15.8396 17.0421 16.42 17.0421 16.778 16.6862C17.136 16.3304 17.136 15.7533 16.778 15.3974Z"
                                                            fill="#0E0E0E"></path>
                                                    </svg></span>
                                            </span>
                                            <div class="tab-title">{{ $f['question'] }}</div>
                                        </div>
                                    </div>

                                    <div id="collapse_{{ $ids[7] }}{{ $f['id'] }}"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="heading{{ $ids[7] }}{{ $f['id'] }}"
                                        data-bs-parent="#rs_accordion_inner_{{ $ids[8] }}{{ $f['id'] }}"
                                        data-acc-id="{{ $ids[8] }}{{ $f['id'] }}">
                                        <div class="accordion-body">
                                            <div class="content_wrapper">
                                                <p>{{ $f['answer'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <script>
                            jQuery(document).ready(function($) {
                                $('.accordion-collapse').on('show.bs.collapse', function() {
                                    $(this).closest('.accordion-item').addClass('active');
                                });

                                $('.accordion-collapse').on('hide.bs.collapse', function() {
                                    $(this).closest('.accordion-item').removeClass('active');
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="no-position  elementor-element elementor-element-{{ $ids[9] }} e-con-full e-flex e-con e-child"
                data-id="{{ $ids[9] }}" data-element_type="container">
                <div class="elementor-element elementor-element-{{ $ids[10] }} gsap-move-no elementor-widget elementor-widget-rs-image"
                    data-id="{{ $ids[10] }}" data-element_type="widget" data-widget_type="rs-image.default">
                    <div class="elementor-widget-container">

                        <div class="rs-image no ruler_image_no ruler_position_  ">
                            <img decoding="async" class="rs-multi-image  reverse- blend_unset"
                                src="{{ asset('images/internal/faq_hm.jpg') }}" alt="faq_hm" />
                        </div>

                    </div>
                </div>
                <div class="no-position  elementor-element elementor-element-{{ $ids[11] }} e-con-full contact-clip-path e-flex e-con e-child"
                    data-id="{{ $ids[11] }}" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;position&quot;:&quot;absolute&quot;}">
                    <div class="elementor-element elementor-element-{{ $ids[12] }} elementor-widget-laptop__width-inherit gsap-move-no elementor-widget elementor-widget-rs-contact-box"
                        data-id="{{ $ids[12] }}" data-element_type="widget"
                        data-widget_type="rs-contact-box.default">
                        <div class="elementor-widget-container">



                            <!-- Style 1 Start -->
                            <div class="rs-contact-box">

                                <div class="address-item boxstyle2">

                                    <div class="address-icon icon_1 elementor-repeater-item-b244c9b">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.65471 0.66883C8.65471 0.491728 8.72506 0.32188 8.85029 0.19665C8.97552 0.0714199 9.14536 0.0010664 9.32246 0.0010664C11.0929 0.00301066 12.7902 0.70717 14.042 1.95905C15.2939 3.21093 15.9981 4.90828 16 6.6787C16 6.8558 15.9296 7.02565 15.8044 7.15088C15.6792 7.27611 15.5093 7.34647 15.3322 7.34647C15.1551 7.34647 14.9853 7.27611 14.8601 7.15088C14.7348 7.02565 14.6645 6.8558 14.6645 6.6787C14.6629 5.26237 14.0996 3.90451 13.0981 2.90302C12.0966 1.90152 10.7388 1.33818 9.32246 1.33659C9.14536 1.33659 8.97552 1.26624 8.85029 1.14101C8.72506 1.01578 8.65471 0.845932 8.65471 0.66883ZM9.32246 4.00765C10.0309 4.00765 10.7102 4.28906 11.2112 4.78998C11.7121 5.2909 11.9935 5.97029 11.9935 6.6787C11.9935 6.8558 12.0638 7.02565 12.1891 7.15088C12.3143 7.27611 12.4841 7.34647 12.6612 7.34647C12.8383 7.34647 13.0082 7.27611 13.1334 7.15088C13.2586 7.02565 13.329 6.8558 13.329 6.6787C13.3279 5.61642 12.9055 4.59794 12.1543 3.84679C11.4032 3.09564 10.3847 2.67318 9.32246 2.67212C9.14536 2.67212 8.97552 2.74247 8.85029 2.8677C8.72506 2.99293 8.65471 3.16278 8.65471 3.33988C8.65471 3.51699 8.72506 3.68683 8.85029 3.81206C8.97552 3.93729 9.14536 4.00765 9.32246 4.00765ZM15.3943 11.1788C15.7813 11.5668 15.9986 12.0925 15.9986 12.6405C15.9986 13.1885 15.7813 13.7142 15.3943 14.1022L14.7867 14.8027C9.31779 20.0386 -3.99055 6.73346 1.16451 1.24711L1.93243 0.57935C2.32091 0.203183 2.84186 -0.0049107 3.38259 8.80176e-05C3.92332 0.00508674 4.44034 0.222776 4.8218 0.60606C4.8425 0.626761 6.07985 2.23407 6.07985 2.23407C6.447 2.61979 6.65138 3.13216 6.65051 3.66469C6.64964 4.19721 6.44358 4.70891 6.07517 5.09343L5.30192 6.06569C5.72984 7.10548 6.35901 8.05045 7.15327 8.84633C7.94753 9.6422 8.89122 10.2733 9.93012 10.7033L10.9084 9.92537C11.2929 9.55724 11.8045 9.35142 12.3369 9.35068C12.8693 9.34993 13.3814 9.55431 13.767 9.92136C13.767 9.92136 15.3736 11.1581 15.3943 11.1788ZM14.4755 12.1497C14.4755 12.1497 12.8776 10.9203 12.8569 10.8996C12.7193 10.7632 12.5334 10.6867 12.3397 10.6867C12.146 10.6867 11.9601 10.7632 11.8225 10.8996C11.8045 10.9183 10.4576 11.9914 10.4576 11.9914C10.3669 12.0637 10.2589 12.111 10.1442 12.1288C10.0296 12.1466 9.91231 12.1343 9.80391 12.0929C8.45803 11.5918 7.23555 10.8073 6.2193 9.79254C5.20304 8.77776 4.41674 7.55643 3.91365 6.21127C3.86905 6.10139 3.8545 5.98162 3.87152 5.86426C3.88854 5.7469 3.9365 5.63619 4.01048 5.5435C4.01048 5.5435 5.08356 4.19596 5.10159 4.1786C5.23799 4.04103 5.31452 3.85514 5.31452 3.66141C5.31452 3.46768 5.23799 3.2818 5.10159 3.14423C5.08089 3.1242 3.85155 1.5249 3.85155 1.5249C3.71193 1.3997 3.5297 1.33265 3.34222 1.33749C3.15475 1.34233 2.97622 1.4187 2.84325 1.55095L2.07533 2.21871C-1.69214 6.74882 9.84064 17.642 13.8104 13.8905L14.4188 13.1894C14.5613 13.0574 14.6469 12.8751 14.6575 12.681C14.6681 12.487 14.6028 12.2965 14.4755 12.1497Z"
                                                fill="#{{ $ids[3] }}"></path>
                                        </svg>
                                    </div>

                                    <div class="address-text">
                                        <div class="text">
                                            <span class="des">
                                                <a
                                                    href="tel:{{ config('custom.phone') }}">{{ config('custom.phone') }}</a>
                                            </span>
                                        </div>




                                    </div>
                                    <span class="des-right-icon"></span>
                                </div>
                            </div>

                            <!-- Style 1 End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
