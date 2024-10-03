   <!-- Footer -->
   <footer id="footer" class="clearfix home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="widget widget-info">
                            <h3>@lang('website.office_title')</h3>
                            <p class="sub-title">@lang('website.main_office')</p>
                                <h5 class="text-color-1">{{$settings['address_'.app()->getLocale().'']}}</h5>
                                <!-- <p class="sub-title">فرع:</p>
                                <p class="text-1 text-color-8">3891 رانشفيو دكتور ريتشاردسون، كاليفورنيا 62639</p>
                                <p class="text-2 text-color-8">3517 W. Gray St. يوتيكا، بنسلفانيا 57867</p> -->
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="widget widget-menu style-2">
                                <h3>@lang('website.contact_us')</h3>                       
                                <div class="box-icon flex align-center">
                                    <div class="icon flex-none">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.3">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.26135 17.3176L10.3744 14.2041C10.8085 13.7699 11.3522 13.5664 11.9646 13.6085C12.577 13.6507 13.0877 13.9271 13.4581 14.4166L18.0679 20.5097C18.6893 21.331 18.611 22.4676 17.8827 23.1959L15.7252 25.3537C19.0452 28.1764 21.8211 30.9536 24.6433 34.2735L26.8013 32.1152C27.5296 31.3868 28.666 31.3086 29.4872 31.9301L35.5794 36.5405C36.0689 36.9109 36.3452 37.4216 36.3874 38.0341C36.4296 38.6466 36.226 39.1904 35.7919 39.6245L32.6783 42.7385C25.5089 49.909 0.0917082 24.4882 7.26135 17.3176ZM33.8537 6C39.4572 6 43.9997 10.2467 43.9997 15.4854C43.9997 20.724 39.4572 24.9707 33.8537 24.9707C31.9295 24.9707 30.1305 24.4699 28.5975 23.6002C27.3492 24.1528 26.0098 24.3125 24.728 24.123C25.208 23.2144 25.5656 22.2462 25.7915 21.2437C24.4847 19.647 23.7077 17.6511 23.7077 15.4854C23.7077 10.2467 28.2502 6 33.8537 6Z" stroke="white" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M33.8308 20.0552V14.4344H32.5506M32.4907 20.1123H35.171M33.8308 10.7305V10.7595" stroke="white" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <p>@lang('website.Hotline'):</p>
                                        <a href="tel:012345678"><h5>{{$settings['phone']}}</h5></a>
                                    </div>
                                </div>
                                <div class="box-icon flex align-center">
                                    <div class="icon flex-none">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.3">
                                            <mask id="mask0_2290_9114" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="6" y="6" width="39" height="38">
                                            <path d="M43.5001 43.5V6.49987H6.5V43.5H43.5001Z" fill="white" stroke="white"/>
                                            </mask>
                                            <g mask="url(#mask0_2290_9114)">
                                            <path d="M27.1876 21.5002C27.1876 23.3585 26.0473 24.75 24.6819 24.75C23.3166 24.75 22.1093 23.3778 22.1093 21.5195C22.1093 19.6614 23.3837 18.4233 24.7491 18.4233C26.1143 18.4233 27.1876 19.6421 27.1876 21.5002Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M24.868 27.8945C22.1524 27.8194 19.6763 25.9815 18.9411 23.1859C18.0924 19.9591 19.9485 16.5889 23.1278 15.5769C26.4903 14.5065 30.0664 16.3982 31.0824 19.7644C31.4419 21.1114 31.2321 22.2832 30.7557 23.481C30.5668 23.956 29.9439 25.0679 28.5581 25.0679C27.8016 25.0679 27.1708 24.3429 27.175 23.5078L27.2024 17.9739" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M31.0829 19.7649C31.4424 21.1118 31.2326 22.2836 30.7562 23.4814" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M30.366 11.5664L24.9999 7.11327L19.6339 11.5664" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.3828 17.5839L7.11328 21.957V42.8867H42.8868V21.957L37.6173 17.5839" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M25 33.0898L37.6173 25.2368V11.5663H12.3828V25.2368L25 33.0898Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M42.8868 21.957L25.0001 33.0898L7.11328 21.957V42.8867H42.8868V21.957Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            </g>
                                        </svg>                                     
                                    </div>
                                    <div class="content">
                                        <p>@lang('website.Email'):</p>
                                        <a href="mailto:{{$settings['email']}}"><h5 class="fw-4 text-color-8">{{$settings['email']}}</h5></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </footer><!-- /#footer -->

            <div class="widget-logo-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-logo flex align-center justify-space">
                                <div class="logo-footer style box-1" id="logo-footer">
                                    <a href="index.html">
                                        <img class="one" src="{{asset('assets/images/logo/logo-footer2xx.png')}}" alt="logo-img" width="197" height="48">
                                        <img class="two" src="{{asset('assets/images/logo/logo-footer2x.png')}}" alt="logo-img" width="197" height="48">
                                        <img class="three" src="{{asset('assets/images/logo/logo-footer3x.png')}}" alt="logo-img" width="197" height="48">

                                    </a>
                                </div>
                                <div class="box-menu box-2">
                                    <ul class="menu-bottom flex align-center fs-16 fw-6">
                                    <li class="current"><a href="{{route('homepage')}}">@lang('website.home')</a></li>
                            <li><a href="{{route('all-properties.index')}}">@lang('website.properties')</a></li>
                            <!-- <li><a href="{{route('about_us')}}">@lang('website.about_us')</a></li> -->
                            <li><a href="{{route('contact_us')}}">@lang('website.contact_us') </a></li>
                                    </ul>
                                </div>
                                <div class="icon-social box-3 text-color-1">
                                    <a href="{{$settings['facebook']}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{$settings['twitter']}}"><i class="fab fa-twitter"></i></a>
                                    <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
                                    <a href="{{$settings['instagram']}}"><i class="fab fa-instagram"></i></a>                            
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget-bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="title-bottom center">
                        @lang('website.copyright', ['name' => $settings['name_'.app()->getLocale().'']])
                        </div>                        </div>
                    </div>
                </div>
            </div>