<?php

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

/*Route::get('/', function () {
    return view('index');
	//return redirect('/');
});*/

/*Route::get('/events', function () {
    return view('show.events');
	//return redirect('/');
});*/

Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
Route::get('/', 'Member\AccountController@home');

Route::get('/events', 'Member\AccountController@events');
Route::get('/downloads', 'Member\AccountController@downloads');
Route::get('/officials', 'Member\AccountController@officials');
Route::get('/gallery', 'Member\AccountController@gallery');

Route::get('/single-event/{id}', 'Member\AccountController@singleEvent');

Route::get('/single-gallery/{id}', 'Member\AccountController@singleGallery');

/*Route::get('/single-event', function () {
    return view('show.single-event');
	//return redirect('/');
});*/

/*Route::get('/gallery', function () {
    return view('show.gallery');
	//return redirect('/');
});*/

Route::get('/about', function () {
    return view('show.about');
	//return redirect('/');
});

Route::get('/contact-us', function () {
    return view('show.contact-us');
	//return redirect('/');
});

/*Route::get('/single-gallery', function () {
    return view('show.single-gallery');
	//return redirect('/');
});*/


Auth::routes();


Route::get('/home', 'HomeController@index');



Route::group(['middleware' => ['auth', 'member']], function(){
	   Route::get('/member', 'Member\AccountController@index');
	   Route::get('/member/edit-profile', 'Member\AccountController@editProfile');
	   Route::post('/member/update-profile', 'Member\AccountController@updateProfile');
	   Route::post('/member/store-subscription', 'Member\AccountController@storeSubscription');
	   Route::get('/member/members', 'Member\AccountController@members');
	   Route::get('/member/contributions', 'Member\AccountController@contributions');
	   Route::get('/member/subscriptions', 'Member\AccountController@subscriptions');
	   Route::get('/member/unsubscribe/{id}', 'Member\AccountController@unsubscribe');
	   Route::get('/member/create-subscription', 'Member\AccountController@createSubscription');
		
	});
	
	Route::group(['middleware' => ['auth', 'chairman']], function(){
	  
	   Route::get('/chairman/create-event', 'Chairman\AccountController@createEvent');
	   Route::get('/chairman/edit-event/{id}', 'Chairman\AccountController@editEvent');
	   Route::get('/chairman/create-image', 'Chairman\AccountController@createImage');
	   Route::post('/chairman/store-event', 'Chairman\AccountController@storeEvent');
	   Route::post('/chairman/update-event/{id}', 'Chairman\AccountController@updateEvent');
	   Route::post('/chairman/store-image', 'Chairman\AccountController@storeImage');
	  
		
	});


Route::group(['middleware' => ['auth', 'administrator']], function(){
	   Route::get('/administrator', 'Admin\AccountController@index');
	   Route::get('/administrator/administrator-member-autocomplete',array('as'=>'administrator.member-autocomplete','uses'=>'Admin\AccountController@administratorMemberAutocomplete'));
	    Route::get('/administrator/members', 'Admin\AccountController@members');
		Route::post('/administrator/update-download/{id}', 'Admin\AccountController@updateDownload');
		Route::post('/administrator/update-official/{id}', 'Admin\AccountController@updateOfficial');
		Route::post('/administrator/upload-download', 'Admin\AccountController@uploadDownload');
		Route::post('/administrator/store-official', 'Admin\AccountController@storeOfficial');
		Route::post('/administrator/destroy-download', 'Admin\AccountController@destroyDownload');
		Route::get('/administrator/delete-download/{id}', 'Admin\AccountController@deleteDownload');
		Route::post('/administrator/destroy-official', 'Admin\AccountController@destroyOfficial');
		Route::get('/administrator/delete-official/{id}', 'Admin\AccountController@deleteOfficial');
		Route::get('/administrator/downloads-list', 'Admin\AccountController@downloadsList');
		Route::get('/administrator/officials-list', 'Admin\AccountController@officialsList');
		Route::get('/administrator/edit-download/{id}', 'Admin\AccountController@editDownload');
		Route::get('/administrator/edit-official/{id}', 'Admin\AccountController@editOfficial');
		Route::get('/administrator/create-download', 'Admin\AccountController@createDownload');
		Route::get('/administrator/create-official', 'Admin\AccountController@createOfficial');
		Route::get('/administrator/universities', 'Admin\AccountController@universities');
		Route::get('/administrator/contributions', 'Admin\AccountController@contributions');
		Route::get('/administrator/create-contribution', 'Admin\AccountController@createContribution');
		Route::get('/administrator/show-committee-members/{id}', 'Admin\AccountController@showCommitteeMembers');
		Route::get('/administrator/show-member-contributions/{id}', 'Admin\AccountController@showMemberContributions');
		Route::get('/administrator/activate-member/{id}', 'Admin\AccountController@activateMember');
		Route::get('/administrator/deactivate-member/{id}', 'Admin\AccountController@deactivateMember');
		Route::get('/administrator/make-chairman/{id}', 'Admin\AccountController@makeChairman');
		Route::get('/administrator/more-details/{id}', 'Admin\AccountController@moreDetails');
		Route::get('/administrator/show-member-profile/{id}', 'Admin\AccountController@showMemberProfile');
		Route::get('/administrator/remove-chairman/{id}', 'Admin\AccountController@removeChairman');
		Route::get('/administrator/edit-contribution/{id}', 'Admin\AccountController@editContribution');
		Route::get('/administrator/delete-contribution/{id}', 'Admin\AccountController@deleteContribution');
		Route::post('/administrator/store-contribution', 'Admin\AccountController@storeContribution');
		Route::post('/administrator/update-contribution/{id}', 'Admin\AccountController@updateContribution');
		Route::post('/administrator/destroy-contribution', 'Admin\AccountController@destroyContribution');
		
		
	});
	

	
	
	Route::group(['middleware' => ['auth']], function(){
		Route::get('/user', 'User\AccountController@index');
		Route::get('/user/edit-profile', 'User\AccountController@editProfile');
		Route::post('/user/update-profile', 'User\AccountController@updateProfile');
		Route::get('/user/edit-password', 'User\AccountController@editPassword');
		Route::post('/user/change-password', 'User\AccountController@changePassword');
		
		
	});
	
		
		
	?>
	
