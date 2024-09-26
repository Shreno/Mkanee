<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="{{ app()->getLocale()}}" dir="{{ app()->getLocale() == 'ar' || app()->getLocale() == 'fa' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <title>{{$settings['app_name_'.app()->getLocale()]}} | @yield('pageTitle')</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('app/dist/font-awesome.css')}}">
    
    <link rel="stylesheet" href="{{asset('app/dist/app.css')}}">
    <!--  -->
    @if(app()->getLocale() == 'ar' || app()->getLocale() == 'fa')
    <link id="rtl-style" rel="stylesheet" href="{{asset('app/dist/app.ar.css')}}" disabled>
    @endif
    <!--  -->
    <link rel="stylesheet" href="{{asset('app/dist/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('app/dist/owl.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/Favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/logo/Favicon.png')}}">

</head>

<body class="body  counter-scroll">

    <div class="preload preload-container">
        <div class="boxes ">
                <img src="{{asset('assets/images/logo/loading.PNG')}}" alt="Logo-loading" class="Logo-loading" width="197" height="48">
        </div>
    </div>

    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">
        @include('website.layouts.header')


          
                
                <!-- slider -->
                <section class="slider hero">
                    <div class="slider-item">
                        <div class="container  relative">
                            <div class="row">    
                                <div class="col-lg-7">
                                    <div class="heading">
                                        <h1 class="text-color-1 wow fadeInUp">سوف نجد لك المنزل المثالي</h1>
                                        <p class="fs-22 lh-24 fw-6 text-color-1 fadeInUp">ابحث عن مجموعة متنوعة من العقارات التي تناسبك بسهولة تامة، وانسى كل الصعوبات في العثور على سكن يناسبك</p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="content po-content-two">
                                        <div class="flat-tabs ">
                                            
                                            <div class="content-tab">
                                                <div class="content-inner tab-content">
                                                    <div class="form-sl">
                                                        <form method="post">                        
                                                            <div class="wd-find-select">
                                                                <div class="form-group form-group-1 ">
                                                                    <div class="group-select">
                                                                        <div class="nice-select" tabindex="0"><span class="current">المشروع</span>
                                                                            <ul class="list">    
                                                                                <li data-value class="option selected">المشروع</li>
                                                                                <li data-value="bungalow" class="option">استوديو</li>
                                                                                <li data-value="apartment" class="option">دوبلكس</li>
                                                                                <li data-value="house" class="option">عقار تجاري</li>
                                                                                <li data-value="Single family home" class="option">مكتب</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-group-2 ">
                                                                    <div class="group-select">
                                                                        <div class="nice-select" tabindex="0"><span class="current">نوع العقار</span>
                                                                            <ul class="list">    
                                                                                <li data-value class="option selected">نوع العقار</li>
                                                                                <li data-value="house" class="option"> منزل</li>
                                                                                <li data-value="bungalow" class="option">منزل من طابق واحد</li>
                                                                                <li data-value="apartment" class="option">شقة</li>
                                                                                <li data-value="smart-home" class="option">المنزل الذكي</li>                                                      
                                                                                <li data-value="Multi family home" class="option">فيلا</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-group-3">
                                                                    <div class="group-select">
                                                                        <div class="nice-select" tabindex="0"><span class="current">الموقع</span>
                                                                            <ul class="list">  
                                                                                <li data-value class="option selected">الموقع</li>                                                        
                                                                                <li data-value="Japan" class="option">اليابان</li>
                                                                                <li data-value="America" class="option d">امريكا</li>
                                                                                <li data-value="England" class="option ">انجلترا</li>   
                                                                                <li data-value="Japan" class="option">بلجيكا</li>  
                                                                                <li data-value="England" class="option ">فرنسا</li>                                                             
                                                                                <li data-value="VietNam" class="option">فيتنام</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>                                                    
                                                                </div>
                                                                <div class="form-group flex">
                                                                    <div class="button-search sc-btn-top center no-absolute">
                                                                        <a class="sc-button " href="#">
                                                                            <span>ابحث الان</span>
                                                                            <i class="far fa-search text-color-1"></i>
                                                                        </a>
                                                                    </div> 
                                                                    <div class="modal-button center d-md-none second" data-toggle="modal" data-target="#popup_bid">
                                                                        <a class="sc-button style-2 modal-btn">
                                                                            <span>ابدأ رحلتك العقارية</span>
                                                                        </a>
                                                                    </div>  
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- End Job  Search Form-->
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>                     
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>                                                                        
                </section> 
                <section class="flat-brand tf-section" >
                    <div class="container">
                        <div class="row">                      
                            <div class="col-lg-12">
                                <div class="title-section">
                                    <h4>المشــاريــع</h4>
                                </div>
                                <div class="swiper-container carousel-5">                            
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="assets/images/img-box/brand-1.png" alt="images">
                                                </a>
                                            </div>                         
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="assets/images/img-box/brand-2.png" alt="images">
                                                </a>
                                            </div>                         
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="assets/images/img-box/brand-3.png" alt="images">
                                                </a>
                                            </div>                         
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="assets/images/img-box/brand-4.png" alt="images">
                                                </a>
                                            </div>                         
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="assets/images/img-box/brand-5.png" alt="images">
                                                </a>
                                            </div>                         
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="#">
                                                    <img src="assets/images/img-box/brand-6.png" alt="images">
                                                </a>
                                            </div>                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="flat-sale wg-dream tf-section3" >
                    <div class="container">
                        <div class="row">                      
                            <div class="col-lg-12">
                                <div class="heading-section center">
                                    <h2>عقارات للبيع</h2>
                                    <p class="text-color-4">أفضل العروض على العقارات الآن</p>
                                </div>
                                <div class="swiper-container2" >    
                                    <div class="one-carousel owl-carousel owl-theme">
                                        <!-- col 1 -->
                                        <div class="slide-item">
                                            <div class="box box-dream hv-one">
                                                <div class="image-group relative ">                                                    <div class="swiper-container carousel-2 img-style">    
                                                        <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                                        <div class="swiper-wrapper ">
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-21.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-2.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-3.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-4.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-5.jpg" alt="images"></div>
                                                        </div>
                                                        <div class="pagi2"><div class="swiper-pagination2" data-chat="person1">  </div> </div>
                                                        <div class="swiper-button-next2 " data-chat="person1" ><i class="fal fa-arrow-right"></i></div>
                                                        <div class="swiper-button-prev2 " data-chat="person1" ><i class="fal fa-arrow-left"></i> </div>                                        
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3 class="link-style-1"><a href="property-detail.html">مبنى سكني رائع</a> </h3>
                                                    <div class="text-address"><p class="p-12">58 طريق هالبروك، بيلسلي، B13 0LA</p></div>
                                                    <div class="money fs-18 fw-6 text-color-6"><a href="property-detail.html">$7,500</a></div>  
                                                    <div class="days-box flex justify-space align-center">
                                                        <div class="img-author"><img src="assets/images/img-box/brand-2-thum.png" alt="images"></div>
                                                        <div class="days">المشروع</div>
                                                    </div>                                           
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 --> 

                                        <div class="slide-item">
                                            <div class="box box-dream hv-one">
                                                <div class="image-group relative ">
                                                    <div class="swiper-container  carousel-2 img-style" >    
                                                        <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                                        <div class="swiper-wrapper ">
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-22.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-2.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-3.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-4.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-5.jpg" alt="images"></div>
                                                        </div>
                                                        <div class="pagi2"><div class="swiper-pagination2" >  </div> </div>
                                                        <div class="swiper-button-next2 " ><i class="fal fa-arrow-right"></i></div>
                                                        <div class="swiper-button-prev2 " ><i class="fal fa-arrow-left"></i> </div>                                        
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3 class="link-style-1"><a href="property-detail.html">مبنى سكني رائع</a> </h3>
                                                    <div class="text-address"><p class="p-12">58 طريق هالبروك، بيلسلي، B13 0LA</p></div>
                                                    <div class="money fs-18 fw-6 text-color-6"><a href="property-detail.html">$7,500</a></div>  
                                                    <div class="days-box flex justify-space align-center">
                                                        <div class="img-author" ><img src="assets/images/img-box/brand-6-thum.png" alt="images"></div>
                                                        <div class="name">المشروع</div>
                                                    </div>                                           
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 3 -->
                                        <div class="slide-item" >
                                            <div class="box box-dream hv-one">
                                                <div class="image-group relative ">
                                                    <div class="swiper-container  carousel-2 img-style"  >    
                                                        <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                                        <div class="swiper-wrapper ">
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-23.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-2.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-3.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-4.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-5.jpg" alt="images"></div>
                                                        </div>
                                                        <div class="pagi2"><div class="swiper-pagination2" >  </div> </div>
                                                        <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i></div>
                                                        <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i> </div>                                        
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3 class="link-style-1"><a href="property-detail.html">مبنى سكني رائع</a> </h3>
                                                    <div class="text-address"><p class="p-12">58 طريق هالبروك، بيلسلي، B13 0LA</p></div>
                                                    <div class="money fs-18 fw-6 text-color-6"><a href="property-detail.html">$7,500</a></div>  
                                                    <div class="days-box flex justify-space align-center">
                                                        <div class="img-author" ><img src="assets/images/img-box/brand-3-thum.png" alt="images"></div>
                                                        <div class="days">المشروع</div>
                                                    </div>                                           
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 4 -->
                                        <div class="slide-item">
                                            <div class="box box-dream hv-one">
                                                <div class="image-group relative ">
                                                    <div class="swiper-container carousel-2 img-style" >    
                                                        <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                                        <div class="swiper-wrapper ">
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-8.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-2.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-3.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-4.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-5.jpg" alt="images"></div>
                                                        </div>
                                                        <div class="pagi2"><div class="swiper-pagination2" >  </div> </div>
                                                        <div class="swiper-button-next2 " ><i class="fal fa-arrow-right"></i></div>
                                                        <div class="swiper-button-prev2 " ><i class="fal fa-arrow-left"></i> </div>                                        
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3 class="link-style-1"><a href="property-detail.html">مبنى سكني رائع</a> </h3>
                                                    <div class="text-address"><p class="p-12">58 طريق هالبروك، بيلسلي، B13 0LA</p></div>
                                                    <div class="money fs-18 fw-6 text-color-6"><a href="property-detail.html">$7,500</a></div>  
                                                    <div class="days-box flex justify-space align-center">
                                                        <div class="img-author" ><img src="assets/images/img-box/brand-4-thum.png" alt="images"></div>
                                                        <div class="days">المشروع</div>
                                                    </div>                                           
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 5 -->
                                        <div class="slide-item">
                                            <div class="box box-dream hv-one">
                                                <div class="image-group relative ">
                                                    <div class="swiper-container  carousel-2 img-style" >    
                                                        <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                                        <div class="swiper-wrapper ">
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-21.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-2.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-3.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-4.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-5.jpg" alt="images"></div>
                                                        </div>
                                                        <div class="pagi2"><div class="swiper-pagination2" >  </div> </div>
                                                        <div class="swiper-button-next2 " ><i class="fal fa-arrow-right"></i></div>
                                                        <div class="swiper-button-prev2 " ><i class="fal fa-arrow-left"></i> </div>                                        
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3 class="link-style-1"><a href="property-detail.html">مبنى سكني رائع</a> </h3>
                                                    <div class="text-address"><p class="p-12">58 طريق هالبروك، بيلسلي، B13 0LA</p></div>
                                                    <div class="money fs-18 fw-6 text-color-6"><a href="property-detail.html">$7,500</a></div>  
                                                    <div class="days-box flex justify-space align-center">
                                                        <div class="img-author" ><img src="assets/images/img-box/brand-5-thum.png" alt="images"></div>
                                                        <div class="days">المشروع</div>
                                                    </div>                                           
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 6 -->
                                        <div class="slide-item">
                                            <div class="box box-dream hv-one">
                                                <div class="image-group relative ">
                                                    <div class="swiper-container  carousel-2 img-style" >    
                                                        <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                                        <div class="swiper-wrapper ">
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-22.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-2.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-3.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-4.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-5.jpg" alt="images"></div>
                                                        </div>
                                                        <div class="pagi2"><div class="swiper-pagination2" >  </div> </div>
                                                        <div class="swiper-button-next2 " ><i class="fal fa-arrow-right"></i></div>
                                                        <div class="swiper-button-prev2 " ><i class="fal fa-arrow-left"></i> </div>                                        
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3 class="link-style-1"><a href="property-detail.html">مبنى سكني رائع</a> </h3>
                                                    <div class="text-address"><p class="p-12">58 طريق هالبروك، بيلسلي، B13 0LA</p></div>
                                                    <div class="money fs-18 fw-6 text-color-6"><a href="property-detail.html">$7,500</a></div>  
                                                    <div class="days-box flex justify-space align-center">
                                                        <div class="img-author" ><img src="assets/images/img-box/brand-6-thum.png" alt="images"></div>
                                                        <div class="days">المشروع</div>
                                                    </div>                                           
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 7 -->
                                        <div class="slide-item" >
                                            <div class="box box-dream hv-one">
                                                <div class="image-group relative ">
                                                    <div class="swiper-container  carousel-2 img-style"  >    
                                                        <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                                        <div class="swiper-wrapper ">
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-23.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-2.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-3.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-4.jpg" alt="images"></div>
                                                            <div class="swiper-slide"><img src="assets/images/house/featured-5.jpg" alt="images"></div>
                                                        </div>
                                                        <div class="pagi2"><div class="swiper-pagination2" >  </div> </div>
                                                        <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i></div>
                                                        <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i> </div>                                        
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3 class="link-style-1"><a href="property-detail.html">مبنى سكني رائع</a> </h3>
                                                    <div class="text-address"><p class="p-12">58 طريق هالبروك، بيلسلي، B13 0LA</p></div>
                                                    <div class="money fs-18 fw-6 text-color-6"><a href="property-detail.html">$7,500</a></div>  
                                                    <div class="days-box flex justify-space align-center">
                                                        <div class="img-author" ><img src="assets/images/img-box/brand-4-thum.png" alt="images"></div>
                                                        <div class="days">المشروع</div>
                                                    </div>                                           
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale-button center mt-50">
                                    <a class="sc-button style-2">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.25 15.75V15H11.375C10.7547 15 10.25 14.4953 10.25 13.875V12.375C10.25 11.7547 10.7547 11.25 11.375 11.25H11.75V10.5H13.25V11.25H14C14.1989 11.25 14.3897 11.329 14.5303 11.4697C14.671 11.6103 14.75 11.8011 14.75 12C14.75 12.1989 14.671 12.3897 14.5303 12.5303C14.3897 12.671 14.1989 12.75 14 12.75H11.75V13.5H13.625C14.2453 13.5 14.75 14.0047 14.75 14.625V16.125C14.75 16.7453 14.2453 17.25 13.625 17.25H13.25V18H11.75V17.25H11C10.8011 17.25 10.6103 17.171 10.4697 17.0303C10.329 16.8897 10.25 16.6989 10.25 16.5C10.25 16.3011 10.329 16.1103 10.4697 15.9697C10.6103 15.829 10.8011 15.75 11 15.75H13.25Z" fill="white"/>
                                            <path d="M22.469 10.6447L14.315 2.96925C13.8234 2.50736 13.1742 2.25024 12.4996 2.25024C11.825 2.25024 11.1759 2.50736 10.6842 2.96925L8.74998 4.791V3C8.74998 2.80109 8.67096 2.61032 8.53031 2.46967C8.38966 2.32902 8.19889 2.25 7.99998 2.25H4.99998C4.80107 2.25 4.6103 2.32902 4.46965 2.46967C4.329 2.61032 4.24998 2.80109 4.24998 3V9.027L2.55273 10.6252C2.03748 11.0722 1.86348 11.784 2.10798 12.4387C2.34873 13.0837 2.93823 13.5 3.60948 13.5H4.24998V21C4.24998 21.1989 4.329 21.3897 4.46965 21.5303C4.6103 21.671 4.80107 21.75 4.99998 21.75H20C20.1989 21.75 20.3897 21.671 20.5303 21.5303C20.671 21.3897 20.75 21.1989 20.75 21V13.5H21.389C22.061 13.5 22.6512 13.083 22.892 12.438C23.1357 11.7832 22.961 11.0715 22.469 10.6447ZM5.74998 3.75H7.24998V6.2025L5.74998 7.61475V3.75ZM21.4865 11.9138C21.4542 12 21.4047 12 21.389 12H20C19.8011 12 19.6103 12.079 19.4697 12.2197C19.329 12.3603 19.25 12.5511 19.25 12.75V20.25H5.74998V12.75C5.74998 12.5511 5.67096 12.3603 5.53031 12.2197C5.38966 12.079 5.19889 12 4.99998 12H3.60948C3.59373 12 3.54498 12 3.51273 11.9138C3.50022 11.8834 3.49792 11.8498 3.50617 11.818C3.51442 11.7862 3.53278 11.7579 3.55848 11.7375L11.7125 4.062C11.9257 3.86178 12.2071 3.75032 12.4996 3.75032C12.7921 3.75032 13.0735 3.86178 13.2867 4.062L21.4625 11.7578C21.5187 11.8058 21.4977 11.883 21.4865 11.9138Z" fill="white"/>
                                        </svg>
                                        <span>عرض جميع العقارات</span>
                                    </a>
                                </div>  
                            </div>
                        </div>
                    </div>
                </section>

                <section class="flat-search-area wg-search-area">
                    <div class="container-full">
                        <div class="row">                      
                            <div class="col-lg-12">
                                <div class="heading-section center">
                                    <h2>ابحث عن العقارات حسب المشروع</h2>
                                    <p class="text-color-4">ابحث عن شقة أحلامك مع قائمتنا</p>
                                </div>
                                <div class="wrap-search-area flex">
                                    <div class="box">
                                        <div class="images">
                                            <img class="imgs" src="assets/images/img-box/search-area-1.jpg" alt="images">
                                            <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="link-style-3"><a href="property-detail.html">كاليفورنيا</a></h3>
                                            <p class="text-color-1">قائمة 1570</p>                       
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="images">
                                            <img class="imgs" src="assets/images/img-box/search-area-2.jpg" alt="images">
                                            <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="link-style-3"><a href="property-detail.html">كاليفورنيا</a></h3>
                                            <p class="text-color-1">قائمة 1570</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="images">
                                            <img class="imgs" src="assets/images/img-box/search-area-3.jpg" alt="images">
                                            <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="link-style-3"><a href="property-detail.html">كاليفورنيا</a></h3>
                                            <p class="text-color-1">قائمة 1570</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="images">
                                            <img class="imgs" src="assets/images/img-box/search-area-4.jpg" alt="images">
                                            <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="link-style-3"><a href="property-detail.html">كاليفورنيا</a></h3>
                                            <p class="text-color-1">قائمة 1570</p>
                                        </div>
                                    </div>  
                                    <div class="box">
                                        <div class="images">
                                            <img class="imgs" src="assets/images/img-box/search-area-5.jpg" alt="images">
                                            <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="link-style-3"><a href="property-detail.html">كاليفورنيا</a></h3>
                                            <p class="text-color-1">قائمة 1570</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="images">
                                            <img class="imgs" src="assets/images/img-box/search-area-6.jpg" alt="images">
                                            <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="link-style-3"><a href="property-detail.html">كاليفورنيا</a></h3>
                                            <p class="text-color-1">قائمة 1570</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="images">
                                            <img class="imgs" src="assets/images/img-box/search-area-7.jpg" alt="images">
                                            <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="link-style-3"><a href="property-detail.html">كاليفورنيا</a></h3>
                                            <p class="text-color-1">قائمة 1570</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="images">
                                            <img class="imgs" src="assets/images/img-box/search-area-8.jpg" alt="images">
                                            <a href="property-detail.html" class="icon-plus"><img src="assets/images/icon/plus.svg" alt="images"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="link-style-3"><a href="property-detail.html">كاليفورنيا</a></h3>
                                            <p class="text-color-1">قائمة 1570</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="tf-section flat-testimonial section-mb" >
                    <div class="container">
                        <div class="row">                      
                            <div class="col-lg-12">
                                <div class="heading-section center">
                                    <h2>من عملائنا السعداء</h2>
                                    <p class="text-color-4">اكتشف تجارب عملائنا السعداء وآرائهم حول خدماتنا وكيفية تحقيق رضاهم الكامل</p>
                                </div>
                                <div class="swiper-container carousel-6">    
                                    <div class="swiper-wrapper ">
                                        <div class="swiper-slide">
                                            <div class="box center">
                                                <div class="inner">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M28.0934 11.3076H25.2697V15.9908C25.2697 18.3363 23.3615 20.2445 21.0159 20.2445H14.1609V21.9843C14.1609 23.0355 15.0162 23.8909 16.0675 23.8909H22.1349L25.0277 27.3976C25.201 27.6074 25.4569 27.7249 25.7222 27.7249C25.7881 27.7249 25.8547 27.7175 25.9208 27.7027C26.252 27.6278 26.513 27.3726 26.5954 27.043L27.3836 23.8909H28.0934C29.1446 23.8909 30 23.0358 30 21.9843V13.2142C30 12.1627 29.1446 11.3076 28.0934 11.3076Z" fill="#222339"/>
                                                        <path d="M21.0159 0H2.45361C1.10069 0 0 1.10069 0 2.45361V15.9906C0 17.3435 1.10069 18.444 2.45361 18.444H4.25743L5.56664 23.6799C5.6488 24.0097 5.90973 24.2647 6.24115 24.3398C6.3073 24.3546 6.37367 24.362 6.43982 24.362C6.70509 24.3617 6.96098 24.2443 7.13402 24.0344L11.7462 18.444H21.0159C22.3689 18.444 23.4695 17.3435 23.4695 15.9906V2.45361C23.4695 1.10069 22.3689 0 21.0159 0V0ZM17.021 8.59955L15.0309 10.5396L15.5008 13.2786C15.5587 13.6164 15.4198 13.9577 15.1426 14.1591C14.9858 14.2731 14.8002 14.331 14.6134 14.331C14.4701 14.331 14.3264 14.2969 14.1946 14.2275L11.7348 12.9343L9.27475 14.2275C8.97148 14.3871 8.60413 14.3605 8.32672 14.1591C8.04955 13.9577 7.91084 13.6164 7.96875 13.2786L8.43864 10.5393L6.44829 8.59955C6.20316 8.36037 6.11481 8.00262 6.22055 7.67693C6.32652 7.351 6.60828 7.11342 6.94725 7.06421L9.69749 6.66458L10.9275 4.17229C11.0793 3.86513 11.3921 3.67058 11.7348 3.67058C12.0774 3.67058 12.3903 3.86513 12.5418 4.17229L13.7718 6.66458L16.5221 7.06421C16.8613 7.11342 17.143 7.351 17.2488 7.67693C17.3547 8.00285 17.2664 8.36037 17.021 8.59955Z" fill="#222339"/>
                                                        <path d="M12.367 7.8858L11.7348 6.60498L11.1026 7.8858C10.9715 8.15154 10.7181 8.33556 10.4249 8.37836L9.01111 8.58366L10.034 9.5809C10.2462 9.78758 10.343 10.0856 10.2928 10.3776L10.0514 11.7855L11.3159 11.1208C11.578 10.983 11.8914 10.983 12.1537 11.1208L13.418 11.7855L13.1765 10.3776C13.1264 10.0856 13.2232 9.78758 13.4354 9.5809L14.4583 8.58366L13.0447 8.37836C12.7515 8.33556 12.4981 8.15154 12.367 7.8858Z" fill="#222339"/>
                                                    </svg>
                                                    <div class="texts font-2 fs-16 fw-5 lh-24">
                                                        “ شركة العقارات هذه رائعة! كانت تجربة شراء المنزل سلسة بفضل احترافيتهم ودعمهم المستمر ”
                                                    </div>
                                                </div>
                                                <div class="author-box">
                                                    <h4>Esther Howard</h4>
                                                    <p>مساعد أمن الإنترنت</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box center">
                                                <div class="inner">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M28.0934 11.3076H25.2697V15.9908C25.2697 18.3363 23.3615 20.2445 21.0159 20.2445H14.1609V21.9843C14.1609 23.0355 15.0162 23.8909 16.0675 23.8909H22.1349L25.0277 27.3976C25.201 27.6074 25.4569 27.7249 25.7222 27.7249C25.7881 27.7249 25.8547 27.7175 25.9208 27.7027C26.252 27.6278 26.513 27.3726 26.5954 27.043L27.3836 23.8909H28.0934C29.1446 23.8909 30 23.0358 30 21.9843V13.2142C30 12.1627 29.1446 11.3076 28.0934 11.3076Z" fill="#222339"/>
                                                        <path d="M21.0159 0H2.45361C1.10069 0 0 1.10069 0 2.45361V15.9906C0 17.3435 1.10069 18.444 2.45361 18.444H4.25743L5.56664 23.6799C5.6488 24.0097 5.90973 24.2647 6.24115 24.3398C6.3073 24.3546 6.37367 24.362 6.43982 24.362C6.70509 24.3617 6.96098 24.2443 7.13402 24.0344L11.7462 18.444H21.0159C22.3689 18.444 23.4695 17.3435 23.4695 15.9906V2.45361C23.4695 1.10069 22.3689 0 21.0159 0V0ZM17.021 8.59955L15.0309 10.5396L15.5008 13.2786C15.5587 13.6164 15.4198 13.9577 15.1426 14.1591C14.9858 14.2731 14.8002 14.331 14.6134 14.331C14.4701 14.331 14.3264 14.2969 14.1946 14.2275L11.7348 12.9343L9.27475 14.2275C8.97148 14.3871 8.60413 14.3605 8.32672 14.1591C8.04955 13.9577 7.91084 13.6164 7.96875 13.2786L8.43864 10.5393L6.44829 8.59955C6.20316 8.36037 6.11481 8.00262 6.22055 7.67693C6.32652 7.351 6.60828 7.11342 6.94725 7.06421L9.69749 6.66458L10.9275 4.17229C11.0793 3.86513 11.3921 3.67058 11.7348 3.67058C12.0774 3.67058 12.3903 3.86513 12.5418 4.17229L13.7718 6.66458L16.5221 7.06421C16.8613 7.11342 17.143 7.351 17.2488 7.67693C17.3547 8.00285 17.2664 8.36037 17.021 8.59955Z" fill="#222339"/>
                                                        <path d="M12.367 7.8858L11.7348 6.60498L11.1026 7.8858C10.9715 8.15154 10.7181 8.33556 10.4249 8.37836L9.01111 8.58366L10.034 9.5809C10.2462 9.78758 10.343 10.0856 10.2928 10.3776L10.0514 11.7855L11.3159 11.1208C11.578 10.983 11.8914 10.983 12.1537 11.1208L13.418 11.7855L13.1765 10.3776C13.1264 10.0856 13.2232 9.78758 13.4354 9.5809L14.4583 8.58366L13.0447 8.37836C12.7515 8.33556 12.4981 8.15154 12.367 7.8858Z" fill="#222339"/>
                                                    </svg>
                                                    <div class="texts font-2 fs-16 fw-5 lh-24">
                                                        “ الخدمة ممتازة، وفريق العمل كان دائمًا متعاونًا في كل خطوة. وجدنا العقار المثالي بسرعة بفضلهم ”
                                                    </div>
                                                </div>
                                                <div class="author-box">
                                                    <h4>Esther Howard</h4>
                                                    <p>مساعد أمن الإنترنت</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box center">
                                                <div class="inner">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M28.0934 11.3076H25.2697V15.9908C25.2697 18.3363 23.3615 20.2445 21.0159 20.2445H14.1609V21.9843C14.1609 23.0355 15.0162 23.8909 16.0675 23.8909H22.1349L25.0277 27.3976C25.201 27.6074 25.4569 27.7249 25.7222 27.7249C25.7881 27.7249 25.8547 27.7175 25.9208 27.7027C26.252 27.6278 26.513 27.3726 26.5954 27.043L27.3836 23.8909H28.0934C29.1446 23.8909 30 23.0358 30 21.9843V13.2142C30 12.1627 29.1446 11.3076 28.0934 11.3076Z" fill="#222339"/>
                                                        <path d="M21.0159 0H2.45361C1.10069 0 0 1.10069 0 2.45361V15.9906C0 17.3435 1.10069 18.444 2.45361 18.444H4.25743L5.56664 23.6799C5.6488 24.0097 5.90973 24.2647 6.24115 24.3398C6.3073 24.3546 6.37367 24.362 6.43982 24.362C6.70509 24.3617 6.96098 24.2443 7.13402 24.0344L11.7462 18.444H21.0159C22.3689 18.444 23.4695 17.3435 23.4695 15.9906V2.45361C23.4695 1.10069 22.3689 0 21.0159 0V0ZM17.021 8.59955L15.0309 10.5396L15.5008 13.2786C15.5587 13.6164 15.4198 13.9577 15.1426 14.1591C14.9858 14.2731 14.8002 14.331 14.6134 14.331C14.4701 14.331 14.3264 14.2969 14.1946 14.2275L11.7348 12.9343L9.27475 14.2275C8.97148 14.3871 8.60413 14.3605 8.32672 14.1591C8.04955 13.9577 7.91084 13.6164 7.96875 13.2786L8.43864 10.5393L6.44829 8.59955C6.20316 8.36037 6.11481 8.00262 6.22055 7.67693C6.32652 7.351 6.60828 7.11342 6.94725 7.06421L9.69749 6.66458L10.9275 4.17229C11.0793 3.86513 11.3921 3.67058 11.7348 3.67058C12.0774 3.67058 12.3903 3.86513 12.5418 4.17229L13.7718 6.66458L16.5221 7.06421C16.8613 7.11342 17.143 7.351 17.2488 7.67693C17.3547 8.00285 17.2664 8.36037 17.021 8.59955Z" fill="#222339"/>
                                                        <path d="M12.367 7.8858L11.7348 6.60498L11.1026 7.8858C10.9715 8.15154 10.7181 8.33556 10.4249 8.37836L9.01111 8.58366L10.034 9.5809C10.2462 9.78758 10.343 10.0856 10.2928 10.3776L10.0514 11.7855L11.3159 11.1208C11.578 10.983 11.8914 10.983 12.1537 11.1208L13.418 11.7855L13.1765 10.3776C13.1264 10.0856 13.2232 9.78758 13.4354 9.5809L14.4583 8.58366L13.0447 8.37836C12.7515 8.33556 12.4981 8.15154 12.367 7.8858Z" fill="#222339"/>
                                                    </svg>
                                                    <div class="texts font-2 fs-16 fw-5 lh-24">
                                                        “ انا سعيد جدًا باختياري لهذه الشركة. التعامل كان احترافيًا، والموظفون كانوا متجاوبين للغاية مع احتياجاتنا ”
                                                    </div>
                                                </div>
                                                <div class="author-box">
                                                    <h4>Esther Howard</h4>
                                                    <p>مساعد أمن الإنترنت</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="col-lg-8 col-md-12 col-12 mx-auto">
                                    <div class="group-icon">
                                        <div class="box-icons flex">
                                            <div class="images">
                                                <img src="assets/images/icon/footer-icon-1.png" alt="images">
                                            </div>
                                            <div class="content">
                                                <div class="title-icon fs-30 lh-45 fw-7 text-color-1">انت بحاجة الى منزل</div>
                                                <p class="font-2 text-color-1">أخبرنا باحتياجاتك، وسنقدم لك آلاف الاقتراحات لمنزل أحلامك.</p>
                                            </div>
                                            <div class="button-footer center">
                                                <a class="sc-button light" href="contact.html">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.25 6.75C2.25 15.034 8.966 21.75 17.25 21.75H19.5C20.0967 21.75 20.669 21.5129 21.091 21.091C21.5129 20.669 21.75 20.0967 21.75 19.5V18.128C21.75 17.612 21.399 17.162 20.898 17.037L16.475 15.931C16.035 15.821 15.573 15.986 15.302 16.348L14.332 17.641C14.05 18.017 13.563 18.183 13.122 18.021C11.4849 17.4191 9.99815 16.4686 8.76478 15.2352C7.53141 14.0018 6.58087 12.5151 5.979 10.878C5.817 10.437 5.983 9.95 6.359 9.668L7.652 8.698C8.015 8.427 8.179 7.964 8.069 7.525L6.963 3.102C6.90214 2.85869 6.76172 2.6427 6.56405 2.48834C6.36638 2.33397 6.1228 2.25008 5.872 2.25H4.5C3.90326 2.25 3.33097 2.48705 2.90901 2.90901C2.48705 3.33097 2.25 3.90326 2.25 4.5V6.75Z" stroke="#222339" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                               
                                                    <span>اتصل بنا</span>
                                                </a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            <!-- Footer -->
            <footer id="footer" class="clearfix home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="widget widget-info">
                                <h3>عنوان المكتب</h3>
                                <p class="sub-title">المكتب الرئيسي:</p>
                                <h5 class="text-color-1">2118 Thornridge Cir. سيراكيوز، كونيتيكت 35624</h5>
                                <p class="sub-title">فرع:</p>
                                <p class="text-1 text-color-8">3891 رانشفيو دكتور ريتشاردسون، كاليفورنيا 62639</p>
                                <p class="text-2 text-color-8">3517 W. Gray St. يوتيكا، بنسلفانيا 57867</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="widget widget-menu style-2">
                                <h3>تواصل معنا</h3>                       
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
                                        <p>الخط الساخن:</p>
                                        <a href="tel:012345678"><h5>(201) 555-0124</h5></a>
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
                                        <p>ايميل:</p>
                                        <a href="mailto:Realestatecp@gmail.com"><h5 class="fw-4 text-color-8">Realestatecp@gmail.com</h5></a>
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
                                        <img class="one" src="assets/images/logo/logo-footer2xx.png" alt="logo-img" width="197" height="48">
                                        <img class="two" src="assets/images/logo/logo-footer2x.png" alt="logo-img" width="197" height="48">
                                        <img class="three" src="assets/images/logo/logo-footer3x.png" alt="logo-img" width="197" height="48">

                                    </a>
                                </div>
                                <div class="box-menu box-2">
                                    <ul class="menu-bottom flex align-center fs-16 fw-6">
                                        <li class="current"><a href="#">الرئيسية</a></li>
                                        <li><a href="properties.html">العقارات</a></li>
                                        <li><a href="contact.html">تواصل معنا</a></li>
                                    </ul>
                                </div>
                                <div class="icon-social box-3 text-color-1">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>                            
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
                            <div class="title-bottom center"> حقوق الطبع والنشر © 2023. تصميم وتطوير بواسطة <a href="#" class="text-color-1">SY.</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Bottom -->
        </div>
        <!-- /#page -->

    </div>
    <!-- /#wrapper -->

    <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <div class="wrap-modal flex">
                        <div class="content">
                            <div class="title-login fs-30 fw-7 lh-45">اتصل بنا</div>
                            <div class="title-login fs-20">سنقوم بالرد عليك فور استلام رسالتك.</div>
                            <div class="comments">
                                <div class="respond-comment">
                                    <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">
                                        <fieldset class="">
                                            <label class="fw-6">الاسم</label>
                                            <input type="text" id="text" class="tb-my-input" name="text" placeholder="الاسم كامل" required >
                                            <img class="img-icon img-email" src="assets/images/icon/contact-name.svg" alt="images">
                                        </fieldset>   
                                        <fieldset class="style-wrap">
                                            <label class="fw-6">الهاتف</label>
                                            <input type="tel" class="input-form" placeholder="رقم الهاتف" required >
                                            <img class="img-icon" src="assets/images/icon/contact-phone.svg" alt="images">
                                        </fieldset> 
                                        <button class="sc-button"  name="submit" type="submit">
                                            <span>إرسال</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>

    <a id="scroll" class="whats-go" href="#" ><i class="fab fa-whatsapp"></i></a>
    <a id="scroll-top" class="button-go"></a>

    <!-- Javascript -->
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/jquery.easing.js"></script>
    <script src="app/js/jquery.nice-select.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="app/js/swiper-bundle.min.js"></script>
    <script src="app/js/owl.js"></script>
    <script src="app/js/swiper.js"></script>
    
    <script src="app/js/jquery-validate.js"></script>

    <script src="app/js/countto.js"></script>
    <script src="app/js/plugin.js"></script>
    <script src="app/js/shortcodes.js"></script>
    <script src="app/js/main.js"></script>
    <script src="app/js/curved.js"></script>
    <script src="app/js/price-ranger.js"></script>

</body>

</html>

