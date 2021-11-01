<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\smscontroller;
use App\Http\Controllers\millscontroller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Manage_category;
use App\Http\Controllers\Sub_category;
use App\Http\Controllers\Unit;
use App\Http\Controllers\Manage_stock;
use App\Http\Controllers\Manage_product;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BiddingController;
use App\Http\Controllers\Transport_services;
use App\Http\Controllers\Rfqcontroller;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\SubmitQuotationController;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\EnquiriesController;
use App\Http\Controllers\MediaReleaseController;
use Illuminate\Http\Request;


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

Route::get('/', function () {
    return view('auth/login');
});




Route::get('/buy_product', function () {
    return view('buy_product');
});







Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/getdata', [HomeController::class, 'api']);

Route::get('/view_requests', [admincontroller::class, 'view_requests']);
Route::get('/getrole', [admincontroller::class, 'get_role']);


Route::post('/show_requests', [admincontroller::class, 'show_requests']);
Route::get('/view_users', [admincontroller::class, 'view_users'])->name('view_users');
Route::get('/enquiry_fields', [admincontroller::class, 'enquiry_fields']);

Route::get('/view_profile/{id}', [admincontroller::class, 'view_profile'])->name('view_profile');

Route::get('/users/{id}', [admincontroller::class, 'users'])->name('users');

Route::get('/approve_profile/{id}', [admincontroller::class, 'approve_profile'])->name('approve_profile');
Route::get('/cancel_profile/{id}', [admincontroller::class, 'cancel_profile'])->name('cancel_profile');


Route::get('/sendsms', [smscontroller::class, 'sendSms']);
Route::post('/verify', [RegisterController::class,'verify'])->name('verify');

Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');


/*agents profile*/
Route::post('/profile', [agentscontroller::class, 'update_profile']);


//-------------------Mills Routes Start ---------------------//

Route::group(['prefix' => 'mills', 'middleware' => 'auth'], function(){

   	Route::get('/profile', [millscontroller::class, 'profile'])->name('profile');
	Route::post('/profile', [millscontroller::class, 'update_profile']);

	Route::post('/save_interest', [InterestController::class, 'create']);

	Route::post('/save_picture', [millscontroller::class, 'update_picture']);

	/*category*/
	Route::get('/manage_category',[Manage_category::class,'index'])->name('manage_category');
	Route::post('/save_category',[Manage_category::class,'create'])->name('create');
	Route::post('/update_category',[Manage_category::class,'update']);
	/*category*/


	/*sub category*/
	Route::get('/manage_sub_category',[Sub_category::class,'index'])->name('manage_sub_category');
	Route::post('/save_sub_category',[Sub_category::class,'create'])->name('save_sub_category');
	Route::post('/update_sub_category',[Sub_category::class,'update']);
	/*sub category*/


	/*Units*/
	Route::get('/manage_unit',[Unit::class,'index'])->name('manage_unit');
	Route::post('/save_unit',[Unit::class,'create'])->name('save_unit');
	Route::post('/update_units',[Unit::class,'update']);
	/*Units*/


	/*manage stock*/
	Route::get('/manage_stock',[Manage_stock::class,'index'])->name('manage_stock');
	Route::get('/showproductunit/{product_id}',[Manage_stock::class,'showproductunit']);
	Route::post('/save_stock',[Manage_stock::class,'create'])->name('save_stock');
	/*manage stock*/


	/* RFQs */
	Route::get('/add_rfq',[Rfqcontroller::class,'add_rfq']);
	Route::post('/save_rfq',[Rfqcontroller::class,'save_rfq']);
	Route::get('/view_rfq',[Rfqcontroller::class,'view_rfq'])->name('view_rfq');
	Route::get('/new_rfq',[Rfqcontroller::class,'new_rfq']);
	Route::get('/rfq_detail/{id}', [Rfqcontroller::class, 'rfq_details']);
	Route::post('search_rfq', [RfqController::class, 'search_rfq']);

	Route::post('/accept_rfq',[RfqController::class,'update_rfq']);
	/* RFQs */

	/*Enquiries*/
	Route::get('/add_enquiries',[EnquiriesController::class,'view']);

	Route::post('/save_enquiry',[EnquiriesController::class,'save_enquiry']);
	Route::get('/view_enquiries',[EnquiriesController::class,'view_enquiries']);
	Route::get('/rejected/{id}',[EnquiriesController::class,'rejected']);
	Route::get('/edit/{id}',[EnquiriesController::class,'edit']);
	Route::post('/update_enquiry',[EnquiriesController::class,'update']);

	Route::post('add_bid',[EnquiriesController::class,'addbid']);

	Route::get('/enquiries_bid',[EnquiriesController::class,'mybids']);
	Route::get('/enquiry_bid_details/{id}',[EnquiriesController::class,'details']);

	Route::get('reject/{id}',[EnquiriesController::class,'reject']);
	Route::get('accept/{id}',[EnquiriesController::class,'accept']);
	
	Route::get('/showproductdetails/{product_name}',[EnquiriesController::class,'showproductdetails']);

	// Auto select values based on selected product in enquiries module
	Route::get('get-product/{product_id}', [EnquiriesController::class,'getProduct']);

/*
	Route::get('/ajax-unit/{id}',function (Request $request) {
		dd($request->all());
		$subcat_id = Input::get('subcat_id');
		$subcategories= Subcategories::where('category_id','=',$cat_id)->lists('category');
		return Response::json($subcategories);});
		*/
	
	/*Enquiries*/


	/*Submit Quotation*/
	Route::post('/submit_quotation',[SubmitQuotationController::class,'submit_quotation']);
	Route::get('/submitted_quotations/{id}', [SubmitQuotationController::class, 'submitted_quotations']);
	Route::get('/quotations_detail/{id}', [SubmitQuotationController::class, 'details']);
	Route::post('/accept',[SubmitQuotationController::class,'update']);
	Route::get('/accepted_quotations',[SubmitQuotationController::class,'accepted_quotations']);
	/*Submit Quotation*/

	/* Product */
	Route::get('/manage_product',[Manage_product::class,'view_products'])->name('manage_product');
	Route::post('/getsubcat',[Manage_product::class,'getsubcat']);
	Route::post('/save_product',[Manage_product::class,'create'])->name('save_product');
	Route::post('/upload',[Manage_product::class,'upload'])->name('upload');
	Route::get('/add_products',[Manage_product::class,'index']);
	Route::get('/showsubcat/{id}',[Manage_product::class,'showsubcat']);
	Route::get('/edit_product/{id}',[Manage_product::class,'edit']);
	Route::post('/editproduct',[Manage_product::class,'update']);
	Route::get('/product_delete/{id}',[Manage_product::class,'destroy']);
	/* Product */


	// Comments //
	Route::post('save-comment', [Rfqcontroller::class, 'save_comment']);

	//Accepted Transport Requests//
	Route::get('/accepted_requests',[Transport_services::class,'view_accepted_requests']);

	Route::post('/accepted_requests',[Transport_services::class,'save_accepted_requests']);

	/* Marketplace */
	Route::get('/marketplace',[MarketplaceController::class,'getApi']);




});

//---------------------Mills Routes End--------------------------//

/*announcment routes*/
Route::get('company_announcements', [AnnouncementsController::class, 'comapany']);
Route::get('product_announcements', [AnnouncementsController::class, 'product']);
Route::post('/save_productannouncements',[AnnouncementsController::class,'save_productannouncements']);
Route::post('/save_companyannouncements',[AnnouncementsController::class,'save_companyannouncements']);
Route::get('website/index', [MediaReleaseController::class, 'companyannouncement'])->name('company_data');

/*admin profile*/
Route::get('/profile', [admincontroller::class, 'profile'])->name('profile');
Route::post('/save_picture', [admincontroller::class, 'update_picture']);
Route::post('/profile', [admincontroller::class, 'update_profile']);

/*change password*/
Route::get('/change_password', [admincontroller::class, 'view_password']);
Route::post('save_password', [admincontroller::class, 'change_password'])->name('change_password');

/* show frontend index */
Route::get('frontend/index', [FrontendController::class, 'index'])->name('frontend/index');

/* show frontend category */
Route::get('frontend/category', [FrontendController::class, 'category']);

/* show frontend orders */
Route::get('frontend/orders', [FrontendController::class, 'orders']);

/* show frontend single_product */
Route::get('frontend/single_product/{id}', [FrontendController::class, 'single_product']);

/* show frontend login */
Route::get('frontend/login', [FrontendController::class, 'login']);

/* show frontend products */
Route::get('frontend/category/{id}', [FrontendController::class, 'category']);



/*------------------WESBITE ROUTES START----------------------*/
/* show website index */
Route::get('website/index', [WebsiteController::class, 'index'])->name('website/index');

/* show website about-us */
Route::get('website/about', [WebsiteController::class, 'about']);

/* show website company_announcements */
Route::get('website/company_announcements/{id}', [WebsiteController::class, 'company_announcements']);

/* show website product_announcements */
Route::get('website/product_announcements/{id}', [WebsiteController::class, 'product_announcements']);

/* show website media-release 
Route::get('website/release/{id}', [WebsiteController::class, 'release']);
*/
/* show website event-gallery */
Route::get('website/gallery', [WebsiteController::class, 'gallery']);

/* show website blogs */
Route::get('website/blogs', [WebsiteController::class, 'blogs']);

/* show website mills */
Route::get('website/mills', [WebsiteController::class, 'mills']);

/* show website transporters */
Route::get('website/transporters', [WebsiteController::class, 'transporters']);

/* show website agents */
Route::get('website/agents', [WebsiteController::class, 'agents']);

/* show website authorities */
Route::get('website/authorities', [WebsiteController::class, 'authorities']);

/* show website thankyou */
Route::get('website/thankyou', [CartController::class, 'thankyou']);

/* add website support message */
Route::post('support', [WebsiteController::class, 'support']);

/* show support messages on dashboard */
Route::get('support', [SupportController::class, 'showsupport']);

/*Send email route
Route::get('sendbasicemail', [SupportController::class, 'basic_email']);*/

/* show website cart */
//Route::get('website/cart', [WebsiteController::class, 'cart']);

/* show website category product */
Route::get('website/products/{id}', [WebsiteController::class, 'products'])->name('website/products');

Route::post('website/products/{id}', [WebsiteController::class, 'searchproduct'])->name('website/search_products');


/* show website single product */
Route::get('website/single_product/{id}', [WebsiteController::class, 'single_product']);

/*add to cart routes*/
Route::get('website/cart', [CartController::class,'cartcart']);

Route::post('website/insert', [CartController::class,'cartadd'])->name('cart.insert');


Route::post('website/cart', [CartController::class,'cartupdate'])->name('cart.updates');

Route::get('/viewcart', [CartController::class,'cartviewcart']);

Route::post('website/remove', [CartController::class,'itemremove'])->name('itemremove');

Route::post('website/clear', [CartController::class,'cartclear'])->name('cart_clear');

Route::get('website/checkout', [CartController::class, 'cartcheckout']);

/* show website single enquiry */
Route::get('website/single_enquiry/{id}', [WebsiteController::class, 'single_enquiry']);




/*-------------------WESBITE ROUTES ENDS----------------------*/


Route::get('/check', [CartController::class,'shop'])->name('shop');
Route::get('/cart', [CartController::class,'cart'])->name('cart.index');

Route::post('/add', [CartController::class,'add'])->name('cart.store');
Route::post('/update', [CartController::class,'update'])->name('cart.update');
Route::post('/remove', [CartController::class,'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class,'clear'])->name('cart.clear');

Route::get('/viewcart', [CartController::class,'viewcart']);

Route::get('/checkout', [CartController::class,'checkout']);
Route::post('/save_order', [CartController::class,'save_order']);


Route::get('frontend/view_order', [FrontendController::class,'view_order']);

Route::post('frontend/user_register', [FrontendController::class,'user_register']);



//admin panel bidding routes-----------------------------------------


Route::get('/biddings',[BiddingController::class,'biddings']);

Route::get('/accepted_bids',[BiddingController::class,'accepted_bids']);

Route::get('/your_bids',[BiddingController::class,'your_bids']);

Route::get('biddings/single_bidding/{id}',[BiddingController::class,'single_bidding']);

Route::get('reject/{id}',[BiddingController::class,'reject']);

Route::get('accept/{id}',[BiddingController::class,'update']);




//bidding routes
Route::post('save_bid',[BiddingController::class,'addbid']);

Route::group(['prefix' => 'transporter', 'middleware' => 'auth'], function(){
    Route::get('/services',[Transport_services::class,'index']);
    Route::get('/add_services',[Transport_services::class,'add_services']);
    Route::post('/save_service',[Transport_services::class,'save_services']);
    Route::post('/send_request',[Transport_services::class,'send_request']);
    Route::get('/requests',[Transport_services::class,'view_requests']);
    Route::get('/single_request/{id}',[Transport_services::class,'single_request']);

    
});








