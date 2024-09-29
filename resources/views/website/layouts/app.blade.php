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
        @yield('content')


          
                
          

                @include('website.layouts.footer')

         
        
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
                        <!-- عنوان الاتصال بنا -->
                        <div class="title-login fs-30 fw-7 lh-45">
                            {{ __('website.contact_us') }}
                        </div>
                        <div class="title-login fs-20">
                            {{ __('website.response_message') }}
                            <!-- @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif -->
                        </div>
                        <div class="comments">
                            <div class="respond-comment">
                                <form method="post" class="comment-form form-submit" action="{{ route('contact_us.store') }}" accept-charset="utf-8">
                                @csrf

                                    <fieldset class="">
                                        <label class="fw-6">
                                            {{ __('website.name') }}
                                        </label>
                                        <input type="text" id="text" class="tb-my-input" name="full_name" placeholder="{{ __('website.full_name') }}" required>
                                        <img class="img-icon img-email" src="{{asset('assets/images/icon/contact-name.svg')}}" alt="images">
                                    </fieldset>   
                                    <fieldset class="style-wrap">
                                        <label class="fw-6">
                                            {{ __('website.phone') }}
                                        </label>
                                        <input type="tel" name="phone" class="input-form" placeholder="{{ __('website.phone_number') }}" required>
                                        <img class="img-icon" src="{{asset('assets/images/icon/contact-phone.svg')}}" alt="images">
                                    </fieldset> 
                                    <button class="sc-button" name="submit" type="submit">
                                        <span>{{ __('website.send') }}</span>
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
    <script src="{{asset('app/js/jquery.min.js')}}"></script>
    <script src="{{asset('app/js/jquery.easing.js')}}"></script>
    <script src="{{asset('app/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('app/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('app/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('app/js/owl.js')}}"></script>
    <script src="{{asset('app/js/swiper.js')}}"></script>
    
    <script src="{{asset('app/js/jquery-validate.js')}}"></script>

    <script src="{{asset('app/js/countto.js')}}"></script>
    <script src="{{asset('app/js/plugin.js')}}"></script>
    <script src="{{asset('app/js/shortcodes.js')}}"></script>
    <script src="{{asset('app/js/main.js')}}"></script>
    <script src="{{asset('app/js/curved.js')}}"></script>
    <script src="{{asset('app/js/price-ranger.js')}}"></script>

</body>

</html>

