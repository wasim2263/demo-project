<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//$val= Auth::user()->email;

//$val=auth::login

 

Route::get('/logout', function () {
    Session::forget('key');
    Session::forget('keyname');
    Session::forget('kept');
    return view('index');

});
///razin part

Route::resource('index2','index2controller');
Route::resource('signin','signincontroller');
Route::resource('Profile','Profilecontroller');
Route::resource('setting','settingcontroller');
Route::resource('Suggestion','Suggestioncontroller');
Route::resource('Complain','complaincontroller');
Route::resource('Create_Employee','Create_Employeecontroller');
Route::resource('Update_employee','Update_Homecontroller');
Route::resource('Update_Product','Update_Productcontroller');
Route::resource('Update_Achieve','Update_Achievecontroller');
Route::resource('Our_Company_achieve','Our_Company_achievecontroller');
Route::resource('memberachieve','memberachievecontroller');
Route::resource('detail','detailcontroller');
Route::post('imu','ApplyController@imu');
Route::resource('_degi','_degiController');
Route::resource('_name','_nameController');
Route::resource('_email','_emailController');
Route::resource('_Password','_PasswordController');
Route::resource('_salary','_salaryController');
Route::resource('_phone','_phoneController');
Route::resource('_photo','_photoController');
Route::post('empimg','empController@empimg');
Route::post('achimg','achController@achimg');
Route::resource('message','messageController');
Route::resource('sugges','suggesController');
Route::resource('detailsec','detailsecController');
/////////////////////edmin start
Route::get('/', function () {
    return view('Agency.signin');
});
Route::resource('Shipment','shipmentController');
Route::resource('Orderlist','orderlistController');
Route::resource('Payment','paymentController');
//////////admin end///////////////////////
/////////////men controller
Route::resource('Men','menController');
Route::resource('Panjabi','menController@panjabi');
Route::resource('Pajama','menController@pajama');
Route::resource('PPSet','menController@ppSet');
Route::resource('Shirt','menController@shirt');
Route::resource('TShirt','menController@tshirt');
Route::resource('Polo','menController@polo');
Route::resource('Fatua','menController@fatua');
Route::resource('Lungi','menController@lungi');
/////men controller end
/////////////women controller
Route::resource('women','womenController');
Route::resource('Sare','womenController@sare');
Route::resource('Salwarkameez','womenController@salwarkameez');
Route::resource('Nightwear','womenController@nightwear');
Route::resource('Scarves','womenController@scarves');
Route::resource('Dupatta','womenController@dupatta');
Route::resource('Shawls','womenController@shawls');
Route::resource('Fabric','womenController@fabric');

/////women controller end
/////////////kids controller
Route::resource('kids','kidsController');
Route::resource('Newborn','kidsController@newborn');
Route::resource('Juniorgirl','kidsController@juniorgirl');
Route::resource('Girl','kidsController@girl');
Route::resource('Boy','kidsController@boy');
Route::resource('Juniorboy','kidsController@juniorboy');
////kids controller end
////wedding controller start
Route::resource('wedding','weddingController');
Route::resource('wedWoman','weddingController@woman');
Route::resource('wedMan','weddingController@man');
////wedding controller end
Route::resource('order','orderController');
Route::resource('order1','orderController1');
Route::resource('index','indexController');

Route::resource('wedding','weddingController');
Route::resource('signup2','signupController');
Route::resource('signin2','signinController2');

///previous///////////
Route::resource('customer_profile','customer_profileController');
Route::resource('cust_setting','cust_settingController');
Route::post('cust_imu','cust_imuController@cust_imu');