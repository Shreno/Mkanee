<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\PropertyType;
use App\Models\InitialPage;
use App\Models\User;
use App\Observers\BannerObserver;
use App\Observers\PropertytypeObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\InitialPageObserver;
use App\Observers\UserObserver;
use Illuminate\Pagination\Paginator;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Services\SettingService;
use App\Models\Setting;







class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); // Limits the length of indexed strings

        PropertyType       ::observe(PropertytypeObserver::class);
        Banner         ::observe(BannerObserver::class);
        InitialPage    ::observe(InitialPageObserver::class);
        User           ::observe(UserObserver::class);



        Paginator::useBootstrap(); // For Bootstrap 5



        app()->singleton('lang', function (){
            if ( session() -> has( 'lang' ) )
                return session( 'lang' );
            else
                return 'ar';

        });

        // Share notificationsBar with all views
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $notificationsBar = Notification::where('notifiable_id', $user->id)
                    ->Unread()
                    ->latest()
                    ->get();
                
                // Share the notifications with the view
                $view->with('notificationsBar', $notificationsBar);
            }
            // 
            $settings =  SettingService::appInformations( Setting::pluck('value', 'key'));
            $view->with('settings', $settings);


        });

    }
}
