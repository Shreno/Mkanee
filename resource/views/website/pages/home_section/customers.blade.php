<section class="tf-section flat-testimonial section-mb" >
                    <div class="container">
                        <div class="row">                      
                            <div class="col-lg-12">
                                <div class="heading-section center">
                                    <h2>@lang('website.From our happy customers')</h2>
                                    <p class="text-color-4">@lang("website.Discover our happy customers' experiences and opinions about our services and how to achieve their complete satisfaction")</p>
                                </div>
                                <div class="swiper-container carousel-6">    
                                    <div class="swiper-wrapper ">
                                        @foreach($testimonials as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="box center">
                                                <div class="inner">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M28.0934 11.3076H25.2697V15.9908C25.2697 18.3363 23.3615 20.2445 21.0159 20.2445H14.1609V21.9843C14.1609 23.0355 15.0162 23.8909 16.0675 23.8909H22.1349L25.0277 27.3976C25.201 27.6074 25.4569 27.7249 25.7222 27.7249C25.7881 27.7249 25.8547 27.7175 25.9208 27.7027C26.252 27.6278 26.513 27.3726 26.5954 27.043L27.3836 23.8909H28.0934C29.1446 23.8909 30 23.0358 30 21.9843V13.2142C30 12.1627 29.1446 11.3076 28.0934 11.3076Z" fill="#222339"/>
                                                        <path d="M21.0159 0H2.45361C1.10069 0 0 1.10069 0 2.45361V15.9906C0 17.3435 1.10069 18.444 2.45361 18.444H4.25743L5.56664 23.6799C5.6488 24.0097 5.90973 24.2647 6.24115 24.3398C6.3073 24.3546 6.37367 24.362 6.43982 24.362C6.70509 24.3617 6.96098 24.2443 7.13402 24.0344L11.7462 18.444H21.0159C22.3689 18.444 23.4695 17.3435 23.4695 15.9906V2.45361C23.4695 1.10069 22.3689 0 21.0159 0V0ZM17.021 8.59955L15.0309 10.5396L15.5008 13.2786C15.5587 13.6164 15.4198 13.9577 15.1426 14.1591C14.9858 14.2731 14.8002 14.331 14.6134 14.331C14.4701 14.331 14.3264 14.2969 14.1946 14.2275L11.7348 12.9343L9.27475 14.2275C8.97148 14.3871 8.60413 14.3605 8.32672 14.1591C8.04955 13.9577 7.91084 13.6164 7.96875 13.2786L8.43864 10.5393L6.44829 8.59955C6.20316 8.36037 6.11481 8.00262 6.22055 7.67693C6.32652 7.351 6.60828 7.11342 6.94725 7.06421L9.69749 6.66458L10.9275 4.17229C11.0793 3.86513 11.3921 3.67058 11.7348 3.67058C12.0774 3.67058 12.3903 3.86513 12.5418 4.17229L13.7718 6.66458L16.5221 7.06421C16.8613 7.11342 17.143 7.351 17.2488 7.67693C17.3547 8.00285 17.2664 8.36037 17.021 8.59955Z" fill="#222339"/>
                                                        <path d="M12.367 7.8858L11.7348 6.60498L11.1026 7.8858C10.9715 8.15154 10.7181 8.33556 10.4249 8.37836L9.01111 8.58366L10.034 9.5809C10.2462 9.78758 10.343 10.0856 10.2928 10.3776L10.0514 11.7855L11.3159 11.1208C11.578 10.983 11.8914 10.983 12.1537 11.1208L13.418 11.7855L13.1765 10.3776C13.1264 10.0856 13.2232 9.78758 13.4354 9.5809L14.4583 8.58366L13.0447 8.37836C12.7515 8.33556 12.4981 8.15154 12.367 7.8858Z" fill="#222339"/>
                                                    </svg>
                                                    <div class="texts font-2 fs-16 fw-5 lh-24">
                                                        “{{$testimonial->desc}}”
                                                    </div>
                                                </div>
                                                <div class="author-box">
                                                    <h4>{{$testimonial->name}}</h4>
                                                    <p>{{$testimonial->job_title}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                       
                                    </div>                                       
                                </div>
                                <div class="col-lg-8 col-md-12 col-12 mx-auto">
                                    <div class="group-icon">
                                        <div class="box-icons flex">
                                            <div class="images">
                                                <img src="{{asset('assets/images/icon/footer-icon-1.png')}}" alt="images">
                                            </div>
                                            <div class="content">
                                                <div class="title-icon fs-30 lh-45 fw-7 text-color-1">@lang('website.You need a home')</div>
                                                <p class="font-2 text-color-1">@lang('website.Tell us your needs, and we will give you thousands of suggestions for your dream home.')</p>
                                            </div>
                                            <div class="button-footer center">
                                                <a class="sc-button light" href="{{route('contact_us')}}">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.25 6.75C2.25 15.034 8.966 21.75 17.25 21.75H19.5C20.0967 21.75 20.669 21.5129 21.091 21.091C21.5129 20.669 21.75 20.0967 21.75 19.5V18.128C21.75 17.612 21.399 17.162 20.898 17.037L16.475 15.931C16.035 15.821 15.573 15.986 15.302 16.348L14.332 17.641C14.05 18.017 13.563 18.183 13.122 18.021C11.4849 17.4191 9.99815 16.4686 8.76478 15.2352C7.53141 14.0018 6.58087 12.5151 5.979 10.878C5.817 10.437 5.983 9.95 6.359 9.668L7.652 8.698C8.015 8.427 8.179 7.964 8.069 7.525L6.963 3.102C6.90214 2.85869 6.76172 2.6427 6.56405 2.48834C6.36638 2.33397 6.1228 2.25008 5.872 2.25H4.5C3.90326 2.25 3.33097 2.48705 2.90901 2.90901C2.48705 3.33097 2.25 3.90326 2.25 4.5V6.75Z" stroke="#222339" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                               
                                                    <span>@lang('website.contact_us')</span>
                                                </a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>