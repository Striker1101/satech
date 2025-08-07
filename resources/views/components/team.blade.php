  <div class="no-position  elementor-element elementor-element-{{ $ids[0] }} e-con-full e-flex e-con e-parent"
      data-id="{{ $ids[0] }}" data-element_type="container"
      data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
      <div class="no-position  elementor-element elementor-element-{{ $ids[1] }} e-flex e-con-boxed e-con e-child"
          data-id="{{ $ids[1] }}" data-element_type="container">
          <div class="e-con-inner">
              <div class="elementor-element elementor-element-{{ $ids[2] }} elementor-widget__width-initial elementor-widget-tablet__width-inherit gsap-move-no elementor-widget elementor-widget-rs-heading"
                  data-id="{{ $ids[2] }}" data-element_type="widget" data-widget_type="rs-heading.default">
                  <div class="elementor-widget-container">

                      <div class="prelements-heading style1  left  animate-">
                          <div class="title-inner">
                              <span class="sub-text">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="31" height="9"
                                      viewBox="0 0 31 9" fill="none">
                                      <rect y="0.5" width="8" height="8" fill="#{{ $ids[3] }}"></rect>
                                      <line x1="8" y1="4" x2="31" y2="4"
                                          stroke="#{{ $ids[3] }}"></line>
                                  </svg>Our TEAM MEMBER<svg xmlns="http://www.w3.org/2000/svg" width="31"
                                      height="9" viewBox="0 0 31 9" fill="none">
                                      <rect width="8" height="8" transform="matrix(-1 0 0 1 31 0.5)"
                                          fill="#{{ $ids[3] }}"></rect>
                                      <line y1="-0.5" x2="23" y2="-0.5"
                                          transform="matrix(-1 0 0 1 23 4.5)" stroke="#{{ $ids[3] }}"></line>
                                  </svg> </span>
                              <h2 class="title rs-split-text-enable split-in-fade">Our Dedicated Team</h2>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="elementor-element elementor-element-{{ $ids[4] }} gsap-move-no elementor-widget elementor-widget-rs-button"
                  data-id="{{ $ids[4] }}" data-element_type="widget" data-widget_type="rs-button.default">
                  <div class="elementor-widget-container">
                      <div class="rs-button style1 unique-{{ $ids[5] }}">


                          <a class="rs-btn anim-dir-" href="#">
                              <span>Join Our Best Team
                                  <em>
                                      <i aria-hidden="true" class="ri-arrow-right-line"></i> <i aria-hidden="true"
                                          class="ri-arrow-right-line"></i> </em>
                              </span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="no-position  elementor-element elementor-element-{{ $ids[6] }} e-flex e-con-boxed e-con e-child"
          data-id="{{ $ids[6] }}" data-element_type="container">
          <div class="e-con-inner">
              <div class="elementor-element elementor-element-{{ $ids[7] }} gsap-move-no elementor-widget elementor-widget-rsteam-slider"
                  data-id="{{ $ids[7] }}" data-element_type="widget" data-widget_type="rsteam-slider.default">
                  <div class="elementor-widget-container">


                      <div class="rsaddon-unique-slider rs-team-slider rs-team team-slider-style12 clip-path-enable">

                          <div id="rsaddon-slick-slider" class="rs-addon-slider nav-icon-2">

                              @foreach ($teams as $team)
                                  <div class="team-item">
                                      <div class="team-inner-wrap">
                                          <div class="image-wrap">
                                              <div class="social-trigger-btn {{ $ids[7] }}">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                      viewBox="0 0 18 18" fill="none">
                                                      <path
                                                          d="M17.2501 8.25003H9.75003V0.74999C9.75003 0.335778 9.41425 0 9.00004 0C8.58582 0 8.25004 0.335778 8.25004 0.74999V8.24999H0.749991C0.335779 8.25003 0 8.58581 0 9.00002C0 9.41423 0.335779 9.75001 0.749991 9.75001H8.25001V17.25C8.25001 17.6642 8.58579 18 9 18C9.41421 18 9.74999 17.6642 9.74999 17.25V9.75001H17.25C17.6642 9.75001 18 9.41423 18 9.00002C18.0001 8.58581 17.6643 8.25003 17.2501 8.25003Z"
                                                          fill="black"></path>
                                                  </svg>
                                              </div>
                                              <div>
                                                  <img loading="lazy" decoding="async" width="832" height="912"
                                                      src="{{ asset($team['show']) }}"
                                                      class="attachment-full size-full" alt="team-thumb-4"
                                                      sizes="(max-width: 832px) 100vw, 832px" />
                                              </div>
                                              <div class="social-icons">
                                                  <a href="{{$team['facebook']}}" class="social-icon"><i
                                                          class="ri-facebook-fill"></i></a> 
                                                          <a href="{{$team['instagram']}}"
                                                      class="social-icon"><i class="ri-instagram-line"></i></a> 
                                                      <a
                                                      href="{{$team['twitter']}}" class="social-icon"><i
                                                          class="ri-twitter-fill"></i></a>
                                              </div>

                                          </div>
                                          <div class="team-content">
                                              <h4 class="team-name">
                                                  <p>
                                                      {{ $team['name'] }} </p>
                                              </h4>

                                              <span class="team-title">{{ $team['role'] }}</span>
                                          </div>
                                      </div>
                                  </div>
                              @endforeach
                          </div>


                          <div class="rsaddon-slider-conf d-none"
                              data-conf="{&quot;slidesToShow&quot;:3,&quot;autoplaySpeed&quot;:&quot;5000&quot;,&quot;interval&quot;:&quot;5000&quot;,&quot;slidesToScroll&quot;:&quot;1&quot;,&quot;slider_autoplay&quot;:&quot;true&quot;,&quot;pauseOnHover&quot;:&quot;false&quot;,&quot;sliderDots&quot;:&quot;false&quot;,&quot;sliderNav&quot;:&quot;true&quot;,&quot;infinite&quot;:&quot;true&quot;,&quot;centerMode&quot;:&quot;false&quot;,&quot;col_lg&quot;:3,&quot;col_md&quot;:&quot;2&quot;,&quot;col_sm&quot;:2,&quot;col_xs&quot;:1}">
                          </div>
                      </div>

                      <script>
                          jQuery(document).ready(function($) {
                              $('#rsaddon-slick-slider').each(function(index) {
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
                                          autoplaySpeed: parseInt(slider_conf.autoplaySpeed),
                                          pauseOnHover: (slider_conf.pauseOnHover) == "true" ? true : false,
                                          loop: false,
                                          rtl: false,

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
                              $('.social-trigger-btn.{{ $ids[7] }}').click(function() {
                                  $(this).closest('.team-inner-wrap').toggleClass('active');
                              });
                          });
                      </script>



                  </div>
              </div>
          </div>
      </div>
      <div class="no-position  elementor-element elementor-element-{{$ids[9]}} e-flex e-con-boxed e-con e-child"
          data-id="{{$ids[9]}}" data-element_type="container">
          <div class="e-con-inner">
              <div class="elementor-element elementor-element-{{$ids[10]}} elementor-widget__width-inherit gsap-move-no elementor-widget elementor-widget-rs-divider"
                  data-id="{{$ids[10]}}" data-element_type="widget" data-widget_type="rs-divider.default">
                  <div class="elementor-widget-container">

                      <div class="rs-divider"> </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
