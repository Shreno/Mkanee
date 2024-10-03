<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */




// website routes

Route::group(['middleware' => [  'admin-lang' , 'web'] , 'namespace' => 'Website'], function () {

Route::get('/', "ForntEndController@home")->name('homepage');
Route::get('about_us', "ForntEndController@aboutUs")->name('about_us');
Route::get('contact_us', "ContactUsController@index")->name('contact_us');
Route::post('contact_us', "ContactUsController@store")->name('contact_us.store');


Route::resource('all-properties', "PropertiesController");
Route::get('website/set-lang/{lang}', 'ForntEndController@SetLanguage');

});



// Auth::routes();
Route::group(['middleware' => ['web']] , function () {
    Route::get('admin-login', [LoginController::class, 'showloginform'])->name('show.login');
    Route::post('admin-login', [LoginController::class, 'login'])->name('admin-login');
});

Route::group(['middleware' => ['auth' , 'web' , 'check-role'] , 'namespace' => 'Dashboard'], function () {

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('edit-profile', [AdminController::class, 'editProfile'])->name('edit-profile');
    Route::put('update-profile', [AdminController::class, 'updateProfile'])->name('update-profile');
    Route::get('home', [
        'uses'      => 'HomeController@index',
        'as'        => 'home',
        'title'     => 'dashboard.home',
        'type'      => 'parent'
    ]);
/*------------ start Of roles ----------*/
    Route::get('roles', [
        'uses'      => 'RoleController@index',
        'as'        => 'roles.index',
        'title'     => 'dashboard.roles',
        'type'      => 'parent',
        'child'     => [ 'roles.store','roles.edit', 'roles.update', 'roles.destroy'  ,'roles.deleteAll']
    ]);

    # roles store
    Route::get('roles/create', [
        'uses'  => 'RoleController@create',
        'as'    => 'roles.create',
        'type'      => 'child',
        'title' => ['actions.add', 'dashboard.role']
    ]);

    # roles store
    Route::post('roles/store', [
        'uses'  => 'RoleController@store',
        'as'    => 'roles.store',
        'type'      => 'child',
        'title' => ['actions.add', 'dashboard.role']
    ]);

    # roles update
    Route::get('roles/{id}/edit', [
        'uses'  => 'RoleController@edit',
        'as'    => 'roles.edit',
        'type'      => 'child',
        'title' => ['actions.edit', 'dashboard.role']
    ]);

    # roles update
    Route::put('roles/{id}', [
        'uses'  => 'RoleController@update',
        'as'    => 'roles.update',
        'type'      => 'child',
        'title' => ['actions.edit', 'dashboard.role']
    ]);

    # roles delete
    Route::delete('roles/{id}', [
        'uses'  => 'RoleController@destroy',
        'as'    => 'roles.destroy',
        'type'      => 'child',
        'title' => ['actions.delete', 'dashboard.role']
    ]);
    #delete all roles
    Route::post('delete-all-roles', [
        'uses'  => 'RoleController@deleteAll',
        'as'    => 'roles.deleteAll',
        'title' => ['actions.delete_all', 'dashboard.roles']
    ]);
/*------------ end Of roles ----------*/
/*------------ start Of admins ----------*/
    Route::get('admins', [
        'uses'      => 'AdminController@index',
        'as'        => 'admins.index',
        'title'     => 'dashboard.admins',
        'type'      => 'parent',
        'child'     => [ 'admins.store','admins.edit', 'admins.update', 'admins.destroy'  ,'admins.deleteAll' , 'activations-status' ,'admin-permission']
    ]);

    # admins store
    Route::get('admins/create', [
        'uses'  => 'AdminController@create',
        'as'    => 'admins.create',
        'title' => ['actions.add', 'dashboard.admin']
    ]);

    # admins store
    Route::post('admins/store', [
        'uses'  => 'AdminController@store',
        'as'    => 'admins.store',
        'title' => ['actions.add', 'dashboard.admin']
    ]);

    # admins update
    Route::get('admins/{id}/edit', [
        'uses'  => 'AdminController@edit',
        'as'    => 'admins.edit',
        'title' => ['actions.edit', 'dashboard.admin']
    ]);

    # admins update
    Route::put('admins/{id}', [
        'uses'  => 'AdminController@update',
        'as'    => 'admins.update',
        'title' => ['actions.edit','dashboard.admin']
    ]);

    # admins delete
    Route::delete('admins/{id}', [
        'uses'  => 'AdminController@destroy',
        'as'    => 'admins.destroy',
        'title' => ['actions.delete', 'dashboard.admin']
    ]);
    #delete all admins
    Route::post('delete-all-admins', [
        'uses'  => 'AdminController@deleteAll',
        'as'    => 'admins.deleteAll',
        'title' => ['actions.delete_all', 'dashboard.admins']
    ]);

    Route::get('admin-permissions/{admin_id}', [
        'uses'  => 'AdminController@adminPermissions',
        'as'    => 'admin-permission',
        'title' => ['actions.show', 'dashboard.permissions']
    ]);
    Route::post('activations-status/{admin_id}', [
        'uses'  => 'AdminController@activationStatus',
        'as'    => 'activations-status',
        'title' => ['actions.change', 'dashboard.account_status']
    ]);

/*------------ end Of admins ----------*/

/*------------ start Of property_types ----------*/
    Route::get('property_types', [
        'uses'      => 'PropertyTypeController@index',
        'as'        => 'property_types.index',
        'title'     => 'dashboard.property_types',
        'type'      => 'parent',
        'child'     => [ 'property_types.store','property_types.edit', 'property_types.update', 'property_types.destroy'  ,'property_types.deleteAll']
    ]);

    # property_types store
    Route::get('property_types/create', [
        'uses'  => 'PropertyTypeController@create',
        'as'    => 'property_types.create',
        'title' => ['actions.add', 'dashboard.property_types']
    ]);

    # property_types store
    Route::post('property_types/store', [
        'uses'  => 'PropertyTypeController@store',
        'as'    => 'property_types.store',
        'title' => ['actions.add', 'dashboard.property_types']
    ]);

    # property_types update
    Route::get('property_types/{id}/edit', [
        'uses'  => 'PropertyTypeController@edit',
        'as'    => 'property_types.edit',
        'title' => ['actions.edit', 'dashboard.property_types']
    ]);

    # property_types update
    Route::put('property_types/{id}', [
        'uses'  => 'PropertyTypeController@update',
        'as'    => 'property_types.update',
        'title' => ['actions.edit', 'dashboard.category']
    ]);

    # property_types delete
    Route::delete('property_types/{id}', [
        'uses'  => 'PropertyTypeController@destroy',
        'as'    => 'property_types.destroy',
        'title' => ['actions.delete', 'dashboard.category']
    ]);
    #delete all property_types
    Route::post('delete-all-property_types', [
        'uses'  => 'PropertyTypeController@deleteAll',
        'as'    => 'property_types.deleteAll',
        'title' => ['actions.delete_all', 'dashboard.property_types']
    ]);
/*------------ end Of property_types ----------*/
/*------------ start Of projects ----------*/
Route::get('projects', [
    'uses'      => 'ProjectController@index',
    'as'        => 'projects.index',
    'title'     => 'dashboard.projects',
    'type'      => 'parent',
    'child'     => [ 'projects.store','projects.edit', 'projects.update', 'projects.destroy'  ,'projects.deleteAll']
]);

# projects store
Route::get('projects/create', [
    'uses'  => 'ProjectController@create',
    'as'    => 'projects.create',
    'title' => ['actions.add', 'dashboard.projects']
]);

# projects store
Route::post('projects/store', [
    'uses'  => 'ProjectController@store',
    'as'    => 'projects.store',
    'title' => ['actions.add', 'dashboard.projects']
]);

# projects update
Route::get('projects/{id}/edit', [
    'uses'  => 'ProjectController@edit',
    'as'    => 'projects.edit',
    'title' => ['actions.edit', 'dashboard.projects']
]);

# projects update
Route::put('projects/{id}', [
    'uses'  => 'ProjectController@update',
    'as'    => 'projects.update',
    'title' => ['actions.edit', 'dashboard.projects']
]);

# projects delete
Route::delete('projects/{id}', [
    'uses'  => 'ProjectController@destroy',
    'as'    => 'projects.destroy',
    'title' => ['actions.delete', 'dashboard.projects']
]);
#delete all projects
Route::post('delete-all-projects', [
    'uses'  => 'ProjectController@deleteAll',
    'as'    => 'projects.deleteAll',
    'title' => ['actions.delete_all', 'dashboard.projects']
]);
/*------------ end Of projects ----------*/

/*------------ start Of testimonials ----------*/
Route::get('testimonials', [
    'uses'      => 'TestimonialController@index',
    'as'        => 'testimonials.index',
    'title'     => 'dashboard.testimonials',
    'type'      => 'parent',
    'child'     => [ 'testimonials.store','testimonials.edit', 'testimonials.update', 'testimonials.destroy'  ,'testimonials.deleteAll']
]);

# testimonials store
Route::get('testimonials/create', [
    'uses'  => 'TestimonialController@create',
    'as'    => 'testimonials.create',
    'title' => ['actions.add', 'dashboard.testimonials']
]);

# testimonials store
Route::post('testimonials/store', [
    'uses'  => 'TestimonialController@store',
    'as'    => 'testimonials.store',
    'title' => ['actions.add', 'dashboard.testimonials']
]);

# testimonials update
Route::get('testimonials/{id}/edit', [
    'uses'  => 'TestimonialController@edit',
    'as'    => 'testimonials.edit',
    'title' => ['actions.edit', 'dashboard.testimonials']
]);

# testimonials update
Route::put('testimonials/{id}', [
    'uses'  => 'TestimonialController@update',
    'as'    => 'testimonials.update',
    'title' => ['actions.edit', 'dashboard.testimonials']
]);

# testimonials delete
Route::delete('testimonials/{id}', [
    'uses'  => 'TestimonialController@destroy',
    'as'    => 'testimonials.destroy',
    'title' => ['actions.delete', 'dashboard.testimonials']
]);
#delete all testimonials
Route::post('delete-all-testimonials', [
    'uses'  => 'TestimonialController@deleteAll',
    'as'    => 'testimonials.deleteAll',
    'title' => ['actions.delete_all', 'dashboard.testimonials']
]);



/*------------ end Of testimonials ----------*/


/*------------ start Of cities ----------*/
Route::get('cities', [
    'uses'      => 'CitiesController@index',
    'as'        => 'cities.index',
    'title'     => 'dashboard.cities',
    'type'      => 'parent',
    'child'     => [ 'cities.store','cities.edit', 'cities.update', 'cities.destroy'  ,'cities.deleteAll']
]);

# cities store
Route::get('cities/create', [
    'uses'  => 'CitiesController@create',
    'as'    => 'cities.create',
    'title' => ['actions.add', 'dashboard.category']
]);

# cities store
Route::post('cities/store', [
    'uses'  => 'CitiesController@store',
    'as'    => 'cities.store',
    'title' => ['actions.add', 'dashboard.category']
]);

# cities update
Route::get('cities/{id}/edit', [
    'uses'  => 'CitiesController@edit',
    'as'    => 'cities.edit',
    'title' => ['actions.edit', 'dashboard.category']
]);

# cities update
Route::put('cities/{id}', [
    'uses'  => 'CitiesController@update',
    'as'    => 'cities.update',
    'title' => ['actions.edit', 'dashboard.category']
]);

# cities delete
Route::delete('cities/{id}', [
    'uses'  => 'CitiesController@destroy',
    'as'    => 'cities.destroy',
    'title' => ['actions.delete', 'dashboard.category']
]);
#delete all cities
Route::post('delete-all-cities', [
    'uses'  => 'CitiesController@deleteAll',
    'as'    => 'cities.deleteAll',
    'title' => ['actions.delete_all', 'dashboard.cities']
]);
/*------------ end Of cities ----------*/
/*------------ start Of neighborhoods ----------*/
Route::get('neighborhoods', [
    'uses'      => 'NeighborhoodsController@index',
    'as'        => 'neighborhoods.index',
    'title'     => 'dashboard.neighborhoods',
    'type'      => 'parent',
    'child'     => [ 'neighborhoods.store','neighborhoods.edit', 'neighborhoods.update', 'neighborhoods.destroy'  ,'neighborhoods.deleteAll']
]);

# neighborhoods store
Route::get('neighborhoods/create', [
    'uses'  => 'NeighborhoodsController@create',
    'as'    => 'neighborhoods.create',
    'title' => ['actions.add', 'dashboard.neighborhoods']
]);

# neighborhoods store
Route::post('neighborhoods/store', [
    'uses'  => 'NeighborhoodsController@store',
    'as'    => 'neighborhoods.store',
    'title' => ['actions.add', 'dashboard.neighborhoods']
]);

# neighborhoods update
Route::get('neighborhoods/{id}/edit', [
    'uses'  => 'NeighborhoodsController@edit',
    'as'    => 'neighborhoods.edit',
    'title' => ['actions.edit', 'dashboard.neighborhoods']
]);

# neighborhoods update
Route::put('neighborhoods/{id}', [
    'uses'  => 'NeighborhoodsController@update',
    'as'    => 'neighborhoods.update',
    'title' => ['actions.edit', 'dashboard.neighborhoods']
]);

# neighborhoods delete
Route::delete('neighborhoods/{id}', [
    'uses'  => 'NeighborhoodsController@destroy',
    'as'    => 'neighborhoods.destroy',
    'title' => ['actions.delete', 'dashboard.neighborhoods']
]);
#delete all neighborhoods
Route::post('delete-all-neighborhoods', [
    'uses'  => 'NeighborhoodsController@deleteAll',
    'as'    => 'neighborhoods.deleteAll',
    'title' => ['actions.delete_all', 'dashboard.neighborhoods']
]);
/*------------ end Of neighborhoods ----------*/
/*------------ start Of properties ----------*/
Route::get('properties', [
    'uses'      => 'PropertyController@index',
    'as'        => 'properties.index',
    'title'     => 'dashboard.properties',
    'type'      => 'parent',
    'child'     => [ 'properties.store','properties.edit', 'properties.update', 'properties.destroy'  ,'properties.deleteAll']
]);

# properties store
Route::get('properties/create', [
    'uses'  => 'PropertyController@create',
    'as'    => 'properties.create',
    'title' => ['actions.add', 'dashboard.category']
]);

# properties store
Route::post('properties/store', [
    'uses'  => 'PropertyController@store',
    'as'    => 'properties.store',
    'title' => ['actions.add', 'dashboard.category']
]);

//show
Route::get('properties/{id}/show', [
    'uses'  => 'PropertyController@show',
    'as'    => 'properties.show',
    'title' => ['actions.show', 'dashboard.category']
]);

# properties update
Route::get('properties/{id}/edit', [
    'uses'  => 'PropertyController@edit',
    'as'    => 'properties.edit',
    'title' => ['actions.edit', 'dashboard.category']
]);


# properties update
Route::put('properties/{id}', [
    'uses'  => 'PropertyController@update',
    'as'    => 'properties.update',
    'title' => ['actions.edit', 'dashboard.category']
]);
Route::get('properties/active/{id}', [
    'uses'  => 'PropertyController@active',
    'as'    => 'properties.active',
    'title' => ['actions.edit', 'dashboard.category']
]);


# properties delete
Route::delete('properties/{id}', [
    'uses'  => 'PropertyController@destroy',
    'as'    => 'properties.destroy',
    'title' => ['actions.delete', 'dashboard.category']
]);
#delete all properties
Route::post('delete-all-properties', [
    'uses'  => 'PropertyController@deleteAll',
    'as'    => 'properties.deleteAll',
    'title' => ['actions.delete_all', 'dashboard.properties']
]);
/*------------ end Of properties ----------*/
/*********************************************/
/*------------ start Of primary-amenities ----------*/
Route::get('primary-amenities', [
    'uses'      => 'PrimaryAmenitiesController@index',
    'as'        => 'primary-amenities.index',
    'title'     => 'dashboard.primary-amenities',
    'type'      => 'parent',
    'child'     => [ 'primary-amenities.store','primary-amenities.edit', 'primary-amenities.update', 'primary-amenities.destroy'  ,'primary-amenities.deleteAll']
]);

# sub-amenities update
Route::get('primary-amenities/{id}/show', [
    'uses'  => 'PrimaryAmenitiesController@show',
    'as'    => 'primary-amenities.show',
    'title' => ['actions.show', 'dashboard.primary-amenities']
]);
Route::get('primary-amenities/create', [
    'uses'  => 'PrimaryAmenitiesController@create',
    'as'    => 'primary-amenities.create',
    'title' => ['actions.add', 'dashboard.primary-amenities']
]);

# sub-amenities store
Route::post('primary-amenities/store', [
    'uses'  => 'PrimaryAmenitiesController@store',
    'as'    => 'primary-amenities.store',
    'title' => ['actions.add', 'dashboard.primary-amenities']
]);

# sub-amenities update
Route::get('primary-amenities/{id}/edit', [
    'uses'  => 'PrimaryAmenitiesController@edit',
    'as'    => 'primary-amenities.edit',
    'title' => ['actions.edit', 'dashboard.primary-amenities']
]);

# sub-amenities update
Route::put('primary-amenities/{id}', [
    'uses'  => 'PrimaryAmenitiesController@update',
    'as'    => 'primary-amenities.update',
    'title' => ['actions.edit', 'dashboard.primary-amenities']
]);

# sub-amenities delete
Route::delete('primary-amenities/{id}', [
    'uses'  => 'PrimaryAmenitiesController@destroy',
    'as'    => 'primary-amenities.destroy',
    'title' => ['actions.delete', 'dashboard.primary-amenities']
]);
#delete all sub-amenities
Route::post('delete-all-primary-amenities', [
    'uses'  => 'PrimaryAmenitiesController@deleteAll',
    'as'    => 'primary-amenities.deleteAll',
    'title' => ['actions.delete_all', 'dashboard.primary-amenities']
]);

/*------------ end Of primary-amenities ----------*/

/*------------ start Of property-features ----------*/
Route::get('property-features', [
    'uses'      => 'PropertyFeaturesController@index',
    'as'        => 'property-features.index',
    'title'     => 'dashboard.property-features',
    'type'      => 'parent',
    'child'     => [ 'property-features.store','property-features.edit', 'property-features.update', 'property-features.destroy'  ,'property-features.deleteAll']
]);

# property-features store
Route::get('property-features/create', [
    'uses'  => 'PropertyFeaturesController@create',
    'as'    => 'property-features.create',
    'title' => ['actions.add', 'dashboard.property-features']
]);

# property-features store
Route::post('property-features/store', [
    'uses'  => 'PropertyFeaturesController@store',
    'as'    => 'property-features.store',
    'title' => ['actions.add', 'dashboard.property-features']
]);

# property-features update
Route::get('property-features/{id}/edit', [
    'uses'  => 'PropertyFeaturesController@edit',
    'as'    => 'property-features.edit',
    'title' => ['actions.edit', 'dashboard.property-features']
]);

# property-features update
Route::put('property-features/{id}', [
    'uses'  => 'PropertyFeaturesController@update',
    'as'    => 'property-features.update',
    'title' => ['actions.edit', 'dashboard.property-features']
]);

# property-features delete
Route::delete('property-features/{id}', [
    'uses'  => 'PropertyFeaturesController@destroy',
    'as'    => 'property-features.destroy',
    'title' => ['actions.delete', 'dashboard.property-features']
]);
#delete all property-features
Route::post('delete-all-property-features', [
    'uses'  => 'PropertyFeaturesController@deleteAll',
    'as'    => 'property-features.deleteAll',
    'title' => ['actions.delete_all', 'dashboard.property-features']
]);
/*------------ end Of property-features ----------*/

/*------------ start Of Settings----------*/
    Route::get('settings', [
        'uses'      => 'SettingController@index',
        'as'        => 'settings',
        'title'     => 'dashboard.settings',
        'type'      => 'parent',
        'child'     => [
            'update-settings','sms-update' ,
        ]
    ]);

    #update
    Route::post('settings', [
        'uses' => 'SettingController@update',
        'as' => 'update-settings', 
        'title' =>  ['actions.edit', 'dashboard.settings']
    ]);

    #message all
    Route::post('settings/{type}/message-all', [
        'uses'  => 'SettingController@messageAll',
        'as'    => 'settings.message.all',
        'title' => ['actions.send', 'dashboard.all_users']
    ])->where('type','email|sms|notification');

    #message one
    Route::post('settings/{type}/message-one', [
        'uses'  => 'SettingController@messageOne',
        'as'    => 'settings.message.one',
        'title' => ['actions.send', 'dashboard.user']
    ])->where('type','email|sms|notification');

    #send email
    Route::post('settings/send-email', [
        'uses'  => 'SettingController@sendEmail',
        'as'    => 'settings.send_email',
        'title' =>  ['actions.send_email', 'dashboard.user']
    
    ]);

    Route::post('sms-update',[
        'uses'  => 'SettingController@updateSms',
        'as'    => 'sms-update',
        'title' => ['actions.edit', 'dashboard.sms_providers']
    ]);
    
    Route::get('set-lang/{lang}', [
        'uses'  => 'SettingController@SetLanguage',
        'as'    => 'set-lang',
        'title' => 'dashboard.set_lang'
    ]);

/*------------ end Of Settings ----------*/







/*------------ start Of statuses ----------*/
Route::get('statuses', [
    'uses'      => 'StatusController@index',
    'as'        => 'statuses.index',
    'title'     => 'dashboard.statuses',
    'type'      => 'parent',
    'child'     => [ 'statuses.create','statuses.edit', 'statuses.destroy'  ,'statuses.deleteAll']
]);

# statuses store
Route::get('statuses/create', [
    'uses'  => 'StatusController@create',
    'as'    => 'statuses.create',
    'title' => ['actions.add', 'dashboard.statuses']
]);

# statuses store
Route::post('statuses/store', [
    'uses'  => 'StatusController@store',
    'as'    => 'statuses.store',
    'title' => ['actions.add', 'dashboard.statuses']
]);
# statuses show
Route::get('statuses/{id}/show', [
    'uses'  => 'StatusController@show',
    'as'    => 'statuses.show',
    'title' => ['actions.show', 'dashboard.statuses']
]);

# statuses update
Route::get('statuses/{id}/edit', [
    'uses'  => 'StatusController@edit',
    'as'    => 'statuses.edit',
    'title' => ['actions.edit', 'dashboard.statuses']
]);

# statuses update
Route::put('statuses/{id}', [
    'uses'  => 'StatusController@update',
    'as'    => 'statuses.update',
    'title' => ['actions.edit', 'dashboard.statuses']
]);

# statuses delete
Route::delete('statuses/{id}', [
    'uses'  => 'StatusController@destroy',
    'as'    => 'statuses.destroy',
    'title' => ['actions.delete', 'dashboard.statuses']
]);
#delete all statuses
Route::post('delete-all-statuses', [
    'uses'  => 'StatusController@deleteAll',
    'as'    => 'statuses.deleteAll',
    'title' => ['actions.delete_all', 'dashboard.statuses']
]);
/*------------ end Of StatusController ----------*/


/*------------ start Of contacts ----------*/
Route::get('contacts', [
    'uses'      => 'ContactUsController@index',
    'as'        => 'contacts.index',
    'title'     => 'dashboard.contacts',
    'type'      => 'parent',
    'child'     => [ 'contacts.create','contacts.edit', 'contacts.destroy'  ,'contacts.deleteAll']
]);

# contacts store
Route::get('contacts/create', [
    'uses'  => 'ContactUsController@create',
    'as'    => 'contacts.create',
    'title' => ['actions.add', 'dashboard.contacts']
]);

# contacts store
Route::post('contacts/store', [
    'uses'  => 'ContactUsController@store',
    'as'    => 'contacts.store',
    'title' => ['actions.add', 'dashboard.contacts']
]);
# contacts show
Route::get('contacts/{id}/show', [
    'uses'  => 'ContactUsController@show',
    'as'    => 'contacts.show',
    'title' => ['actions.show', 'dashboard.contacts']
]);

# contacts update
Route::get('contacts/{id}/edit', [
    'uses'  => 'ContactUsController@edit',
    'as'    => 'contacts.edit',
    'title' => ['actions.edit', 'dashboard.contacts']
]);

# contacts update
Route::put('contacts/{id}', [
    'uses'  => 'ContactUsController@update',
    'as'    => 'contacts.update',
    'title' => ['actions.edit', 'dashboard.contacts']
]);

# contacts delete
Route::delete('contacts/{id}', [
    'uses'  => 'ContactUsController@destroy',
    'as'    => 'contacts.destroy',
    'title' => ['actions.delete', 'dashboard.contacts']
]);
#delete all contacts
Route::post('delete-all-contacts', [
    'uses'  => 'ContactUsController@deleteAll',
    'as'    => 'contacts.deleteAll',
    'title' => ['actions.delete_all', 'dashboard.contacts']
]);
/*------------ end Of contact_us ----------*/






  

/*------------ Never remove this line ----------*/
    

    #new_routes_here
                     
         

});




/*** update route if i added new routes  */
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

Route::get('update-routes', function (){
    $routes_data    = [];

    foreach (Route::getRoutes() as $route) {
        if ($route->getName()){
            
            $check_permission = Permission::where('name',$route->getName())->count();

            if(!$check_permission)
            {
                $routes_data []   = [ 'name' => $route->getName() , 
                    'nickname_en' =>  $route->getName() ,
                    'nickname_ar' =>  $route->getName() ,
                    'guard_name' => 'web'
                ];
            }
            
        }
    }
    Permission::insert( $routes_data );

    $admin = App\Models\User::find(1);
    $role = Role::find(1);

    $role->givePermissionTo(Permission::all());
    $admin->assignRole('super-admin');

});






Route::get('files/storage/{filePath}', [AdminController::class,'fileStorageServe'])->where(['filePath' => '.*'])->name('serve.file');





 /*** USE AUTH AREA  */
 Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
 Route::get('client/logout', [LoginController::class, 'logout'])->name('client.logout');

 Route::post('login', [LoginController::class, 'login']);
 // REHIESTER
 Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
 Route::post('register', [RegisterController::class, 'register']);
 // routes/web.php
 Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
 Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
 Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
 Route::post('reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');
/*** USE AUTH AREA  */



