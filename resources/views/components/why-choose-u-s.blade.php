 <div class="no-position  elementor-element elementor-element-{{ $ids[0] }} e-con-full e-flex e-con e-parent"
     data-id="{{ $ids[0] }}" data-element_type="container"
     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
     <div class="no-position  elementor-element elementor-element-{{ $ids[1] }} e-flex e-con-boxed e-con e-child"
         data-id="{{ $ids[1] }}" data-element_type="container"
         data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;{{ asset('videos/video.mp4') }}&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
         <div class="e-con-inner">
             <div class="elementor-background-video-container">
                 <video class="elementor-background-video-hosted" autoplay muted playsinline loop></video>
             </div>
             <div class="no-position  elementor-element elementor-element-{{ $ids[2] }} e-con-full e-flex e-con e-child"
                 data-id="{{ $ids[2] }}" data-element_type="container">
             </div>
             <div class="no-position  elementor-element elementor-element-{{ $ids[3] }} e-con-full e-flex e-con e-child"
                 data-id="{{ $ids[3] }}" data-element_type="container"
                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                 <div class="elementor-element elementor-element-{{ $ids[4] }} gsap-move-no elementor-widget elementor-widget-rs-heading"
                     data-id="{{ $ids[4] }}" data-element_type="widget" data-widget_type="rs-heading.default">
                     <div class="elementor-widget-container">

                         <div class="prelements-heading style1  left  animate-">
                             <div class="title-inner">
                                 <span class="sub-text">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="31" height="9"
                                         viewBox="0 0 31 9" fill="none">
                                         <rect y="0.5" width="8" height="8" fill="#{{ $ids[5] }}">
                                         </rect>
                                         <line x1="8" y1="4" x2="31" y2="4"
                                             stroke="#{{ $ids[5] }}"></line>
                                     </svg>Why Choose Us<svg xmlns="http://www.w3.org/2000/svg" width="31"
                                         height="9" viewBox="0 0 31 9" fill="none">
                                         <rect width="8" height="8" transform="matrix(-1 0 0 1 31 0.5)"
                                             fill="#{{ $ids[5] }}"></rect>
                                         <line y1="-0.5" x2="23" y2="-0.5"
                                             transform="matrix(-1 0 0 1 23 4.5)" stroke="#{{ $ids[5] }}"></line>
                                     </svg> </span>
                                 <h2 class="title rs-split-text-enable split-in-fade">Expertise and
                                     Experience</h2>
                             </div>
                             <div class="description">
                                 <p>With years of hands-on experience in the industry, our team brings deep expertise
                                     to every project. From complex architectural designs to large-scale
                                     constructions, we deliver with precision, quality, and professionalism. Our
                                     proven track record shows we don’t just build — we build right.</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="elementor-element elementor-element-{{ $ids[6] }} gsap-move-no elementor-widget elementor-widget-rs-accordions-custom"
                     data-id="{{ $ids[6] }}" data-element_type="widget"
                     data-widget_type="rs-accordions-custom.default">
                     <div class="elementor-widget-container">

                         <div class="rs-accordion-area accordion style1" id="rs_accordion_inner_{{ $ids[7] }}">

                             <div class="accordion-item ">
                                 <div class="accordion-header" id="heading{{ $ids[7] }}">
                                     <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                         data-bs-target="#collapse_{{ $ids[7] }}"
                                         aria-controls="collapse_{{ $ids[7] }}">
                                         <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                             aria-hidden="true">
                                             <span class="elementor-accordion-icon-closed"><svg
                                                     xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                     viewBox="0 0 17 18" fill="none">
                                                     <path
                                                         d="M0.247423 16.3415C-0.116259 16.7571 -0.0741412 17.3889 0.341495 17.7526C0.757132 18.1163 1.38889 18.0741 1.75258 17.6585L0.247423 16.3415ZM15.9978 0.933481C15.961 0.38242 15.4845 -0.0345222 14.9335 0.00221496L5.95341 0.600887C5.40235 0.637624 4.98541 1.11413 5.02215 1.66519C5.05889 2.21625 5.53539 2.63319 6.08645 2.59646L14.0687 2.0643L14.6009 10.0466C14.6376 10.5976 15.1141 11.0146 15.6652 10.9779C16.2163 10.9411 16.6332 10.4646 16.5965 9.91355L15.9978 0.933481ZM1.75258 17.6585L15.7526 1.65851L14.2474 0.341496L0.247423 16.3415L1.75258 17.6585Z"
                                                         fill="white"></path>
                                                 </svg></span>
                                             <span class="elementor-accordion-icon-opened"><svg
                                                     xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                     viewBox="0 0 17 18" fill="none">
                                                     <path
                                                         d="M0.247423 16.3415C-0.116259 16.7571 -0.0741412 17.3889 0.341495 17.7526C0.757132 18.1163 1.38889 18.0741 1.75258 17.6585L0.247423 16.3415ZM15.9978 0.933481C15.961 0.38242 15.4845 -0.0345222 14.9335 0.00221496L5.95341 0.600887C5.40235 0.637624 4.98541 1.11413 5.02215 1.66519C5.05889 2.21625 5.53539 2.63319 6.08645 2.59646L14.0687 2.0643L14.6009 10.0466C14.6376 10.5976 15.1141 11.0146 15.6652 10.9779C16.2163 10.9411 16.6332 10.4646 16.5965 9.91355L15.9978 0.933481ZM1.75258 17.6585L15.7526 1.65851L14.2474 0.341496L0.247423 16.3415L1.75258 17.6585Z"
                                                         fill="white"></path>
                                                 </svg></span>
                                         </span>



                                         <div class="tab-title">Customer-Centered Approach</div>


                                     </div>
                                 </div>

                                 <div id="collapse_{{ $ids[7] }}" class="accordion-collapse collapse "
                                     aria-labelledby="heading{{ $ids[7] }}"
                                     data-bs-parent="#rs_accordion_inner_{{ $ids[10] }}">
                                     <div class="accordion-body">
                                         <div class="content_wrapper">
                                             <p>We prioritize your vision, needs, and satisfaction at every stage.
                                                 From initial consultation to project completion, we maintain clear
                                                 communication, offer tailored solutions, and ensure you're involved
                                                 in every key decision. Your goals drive our execution.</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item active">
                                 <div class="accordion-header" id="heading{{ $ids[8] }}">
                                     <div class="accordion-button " data-bs-toggle="collapse"
                                         data-bs-target="#collapse_{{ $ids[8] }}"
                                         aria-controls="collapse_{{ $ids[8] }}">
                                         <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                             aria-hidden="true">
                                             <span class="elementor-accordion-icon-closed"><svg
                                                     xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                     viewBox="0 0 17 18" fill="none">
                                                     <path
                                                         d="M0.247423 16.3415C-0.116259 16.7571 -0.0741412 17.3889 0.341495 17.7526C0.757132 18.1163 1.38889 18.0741 1.75258 17.6585L0.247423 16.3415ZM15.9978 0.933481C15.961 0.38242 15.4845 -0.0345222 14.9335 0.00221496L5.95341 0.600887C5.40235 0.637624 4.98541 1.11413 5.02215 1.66519C5.05889 2.21625 5.53539 2.63319 6.08645 2.59646L14.0687 2.0643L14.6009 10.0466C14.6376 10.5976 15.1141 11.0146 15.6652 10.9779C16.2163 10.9411 16.6332 10.4646 16.5965 9.91355L15.9978 0.933481ZM1.75258 17.6585L15.7526 1.65851L14.2474 0.341496L0.247423 16.3415L1.75258 17.6585Z"
                                                         fill="white"></path>
                                                 </svg></span>
                                             <span class="elementor-accordion-icon-opened"><svg
                                                     xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                     viewBox="0 0 17 18" fill="none">
                                                     <path
                                                         d="M0.247423 16.3415C-0.116259 16.7571 -0.0741412 17.3889 0.341495 17.7526C0.757132 18.1163 1.38889 18.0741 1.75258 17.6585L0.247423 16.3415ZM15.9978 0.933481C15.961 0.38242 15.4845 -0.0345222 14.9335 0.00221496L5.95341 0.600887C5.40235 0.637624 4.98541 1.11413 5.02215 1.66519C5.05889 2.21625 5.53539 2.63319 6.08645 2.59646L14.0687 2.0643L14.6009 10.0466C14.6376 10.5976 15.1141 11.0146 15.6652 10.9779C16.2163 10.9411 16.6332 10.4646 16.5965 9.91355L15.9978 0.933481ZM1.75258 17.6585L15.7526 1.65851L14.2474 0.341496L0.247423 16.3415L1.75258 17.6585Z"
                                                         fill="white"></path>
                                                 </svg></span>
                                         </span>



                                         <div class="tab-title">Sustainability Commitment</div>


                                     </div>
                                 </div>

                                 <div id="collapse_{{ $ids[8] }}" class="accordion-collapse collapse show"
                                     aria-labelledby="heading{{ $ids[8] }}"
                                     data-bs-parent="#rs_accordion_inner_{{ $ids[10] }}">
                                     <div class="accordion-body">
                                         <div class="content_wrapper">
                                             <p>
                                                 We integrate eco-friendly materials, energy-efficient practices, and
                                                 responsible construction methods to minimize environmental impact.
                                                 Our goal is to build structures that are not only durable and
                                                 functional but also kind to the planet.
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item ">
                                 <div class="accordion-header" id="heading{{ $ids[9] }}">
                                     <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                         data-bs-target="#collapse_{{ $ids[9] }}"
                                         aria-controls="collapse_{{ $ids[9] }}">
                                         <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                             aria-hidden="true">
                                             <span class="elementor-accordion-icon-closed"><svg
                                                     xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                     viewBox="0 0 17 18" fill="none">
                                                     <path
                                                         d="M0.247423 16.3415C-0.116259 16.7571 -0.0741412 17.3889 0.341495 17.7526C0.757132 18.1163 1.38889 18.0741 1.75258 17.6585L0.247423 16.3415ZM15.9978 0.933481C15.961 0.38242 15.4845 -0.0345222 14.9335 0.00221496L5.95341 0.600887C5.40235 0.637624 4.98541 1.11413 5.02215 1.66519C5.05889 2.21625 5.53539 2.63319 6.08645 2.59646L14.0687 2.0643L14.6009 10.0466C14.6376 10.5976 15.1141 11.0146 15.6652 10.9779C16.2163 10.9411 16.6332 10.4646 16.5965 9.91355L15.9978 0.933481ZM1.75258 17.6585L15.7526 1.65851L14.2474 0.341496L0.247423 16.3415L1.75258 17.6585Z"
                                                         fill="white"></path>
                                                 </svg></span>
                                             <span class="elementor-accordion-icon-opened"><svg
                                                     xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                     viewBox="0 0 17 18" fill="none">
                                                     <path
                                                         d="M0.247423 16.3415C-0.116259 16.7571 -0.0741412 17.3889 0.341495 17.7526C0.757132 18.1163 1.38889 18.0741 1.75258 17.6585L0.247423 16.3415ZM15.9978 0.933481C15.961 0.38242 15.4845 -0.0345222 14.9335 0.00221496L5.95341 0.600887C5.40235 0.637624 4.98541 1.11413 5.02215 1.66519C5.05889 2.21625 5.53539 2.63319 6.08645 2.59646L14.0687 2.0643L14.6009 10.0466C14.6376 10.5976 15.1141 11.0146 15.6652 10.9779C16.2163 10.9411 16.6332 10.4646 16.5965 9.91355L15.9978 0.933481ZM1.75258 17.6585L15.7526 1.65851L14.2474 0.341496L0.247423 16.3415L1.75258 17.6585Z"
                                                         fill="white"></path>
                                                 </svg></span>
                                         </span>



                                         <div class="tab-title">Customer-Centered Approach</div>


                                     </div>
                                 </div>

                                 <div id="collapse_{{ $ids[9] }}" class="accordion-collapse collapse "
                                     aria-labelledby="heading{{ $ids[9] }}"
                                     data-bs-parent="#rs_accordion_inner_{{ $ids[10] }}">
                                     <div class="accordion-body">
                                         <div class="content_wrapper">
                                             <p>We prioritize your vision, needs, and satisfaction at every stage.
                                                 From initial consultation to project completion, we maintain clear
                                                 communication, offer tailored solutions, and ensure you're involved
                                                 in every key decision. Your goals drive our execution.</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <script>
                             jQuery(document).ready(function($) {
                                 $('#rs_accordion_inner_{{ $ids[6] }} .accordion-collapse').on('show.bs.collapse', function() {
                                     $(this).closest('.accordion-item').addClass('active');
                                 });

                                 $('#rs_accordion_inner_{{ $ids[6] }} .accordion-collapse').on('hide.bs.collapse', function() {
                                     $(this).closest('.accordion-item').removeClass('active');
                                 });
                             });
                         </script>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
