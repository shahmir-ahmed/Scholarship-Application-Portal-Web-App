<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailCOntroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Scholarships management route
Route::resource('admin/scholarships', App\Http\Controllers\ScholarshipsController::class);

// Admin routes
// Route::get('admin/login', function () {
//     return view('admin.login');
// });

// Route::get('/admin/auth', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.auth'); // authenticate admin

// Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.auth')->middleware(['']); // 

Route::get('admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.home'); // dashboard page route

Route::get('admin/login', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.login'); // login page route

Route::get('admin/', function(){
    return redirect()->route('admin.login');
}); // admin/ login route

Route::post('admin/auth', [App\Http\Controllers\AdminController::class, 'customLogin'])->name('login.custom'); // verify admin route

// Route::get('registration', [App\Http\Controllers\AdminController::class, 'registration'])->name('register-user');

// Route::post('custom-registration', [App\Http\Controllers\AdminController::class, 'customRegistration'])->name('register.custom'); 

Route::post('admin/signout', [App\Http\Controllers\AdminController::class, 'signOut'])->name('signout'); // logout admin route

// using multi auth laravel 9
// admin home route
// Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// admin view route 
// Route::get('admin/login', function () {
//     return view('admin.login');
// })->name('admin.login');

// Route::post('admin/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('admin.logout')->middleware('is_admin');

// // admin verify route
// Route::post('admin/auth', [App\Http\Controllers\LoginController::class, 'adminLogin'])->name('admin.auth')->middleware('is_admin');

// Event management route
Route::resource('admin/events', App\Http\Controllers\EventsController::class);

// News management route
Route::resource('admin/news', App\Http\Controllers\NewsController::class);

// Logout route
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Mail route
// Route::post('send-mail', [MailController::class, 'index'])->name('send-mail');

// Stripe Payment routes
Route::post('checkout', ['App\Http\Controllers\StripeController', 'checkout'])->name('checkout')->middleware(['auth']);
// Route::post('session', 'App\Http\Controllers\StripeController@session')->name('session')->middleware(['auth']);
Route::get('success', 'App\Http\Controllers\StripeController@success')->name('success')->middleware(['auth']);

// User profile page route
Route::get('profile',  ['App\Http\Controllers\ProfileController', 'showProfile'])->name('profile')->middleware(["auth"]);
// Route::get('profile', function(){
//     return view('account.account');
// })->name('profile')->middleware(["auth"]);

// User account profile update route
Route::post('/update-profile', ['App\Http\Controllers\ProfileController', 'updateProfile'])->name('update-profile')->middleware(['auth']);

// user account page
// Route::get('account', function(){
//     return view('account.account');
// })->name('account')->middleware(["auth"]);

// Scholarships webpage route
// Route::get('scholarships', [App\Http\Controllers\ScholarshipsController::class, 'viewAll'])->name('scholarships');

// User view a specific scholarship details route
Route::get('scholarship/{scholarshipId}/view', [App\Http\Controllers\ScholarshipsController::class, 'view'])->name('scholarship.view')->middleware(['auth']);

// show personal details form
/*
Route::get('scholarship/{scholarship}/apply/personal_details', [App\Http\Controllers\ApplicationsController::class, 'showPersonalDetailsForm'])->name('application.showPersonalDetailsForm')->middleware('auth');

// store personal details form
Route::post('scholarship/{scholarship}/store/personal_details', [App\Http\Controllers\ApplicationsController::class, 'storePersonalDetails'])->name('application.storePersonalDetails')->middleware('auth');


// show self employment details form
Route::get('scholarship/{scholarship}/apply/current_employment', [App\Http\Controllers\ApplicationsController::class, 'showEmploymentDetailsForm'])->name('application.showEmploymentDetailsForm')->middleware('auth');

// store self employment details form
Route::post('scholarship/{scholarship}/store/current_employment', [App\Http\Controllers\ApplicationsController::class, 'storeEmploymentDetails'])->name('application.storeEmploymentDetails')->middleware('auth');


// show family member details form
Route::get('scholarship/{scholarship}/apply/family_member', [App\Http\Controllers\ApplicationsController::class, 'showFamilyMemberDetailsForm'])->name('application.showFamilyMemberDetailsForm')->middleware('auth');

// store family member details form
Route::post('scholarship/{scholarship}/store/family_member', [App\Http\Controllers\ApplicationsController::class, 'storeFamilyMemberDetails'])->name('application.storeFamilyMemberDetails')->middleware('auth');
*/

/* Livewire MultiStep Form */
// Route to show application form
// Route::view('/scholarship/{scholarshipId}/apply', 'user.scholaship.application')->name('scholarship.apply');
Route::get('scholarship/{scholarshipId}/apply', [App\Http\Livewire\MultiStepForm::class, 'apply'])->name('scholarship.apply')->middleware(["auth"]);


// save/submit the application form
// Route::post('scholarship/{scholarshipId}/submit', [App\Http\Livewire\MultiStepForm::class, 'submitForm'])->name('application.submit')->middleware(["auth"]); // handled by livewire wire:click.prevent attribute which 


// Subscriptions management route
Route::resource('admin/subscriptions', App\Http\Controllers\SubscriptionsController::class);

// Update user profile
// Route::post('profile/update', App\Http\Controllers\ProfileController::class, 'updateProfile')->name('profile.update');

/* Admin manage applications route */

// Show all applications
Route::get('admin/applications', [App\Http\Controllers\AppliedScholarshipController::class, 'index'])->name('applications.index');

// Show specific application details
Route::get('admin/applications/show/a/{applicationId}/u/{userId}/s/{scholarshipId}', [App\Http\Controllers\AppliedScholarshipController::class, 'show'])->name('applications.show');

// Delete application and all the info route
Route::post('admin/applications/destroy/a/{applicationId}/u/{userId}/s/{scholarshipId}', [App\Http\Controllers\AppliedScholarshipController::class, 'destroy'])->name('applications.destroy');

// Edit application status route
Route::get('admin/applications/edit/a/{applicationId}', [App\Http\Controllers\AppliedScholarshipController::class, 'edit'])->name('applications.edit');

// Update application status route
Route::post('admin/applications/update/a/{applicationId}', [App\Http\Controllers\AppliedScholarshipController::class, 'update'])->name('applications.update');

// Users management route
Route::resource('admin/users', App\Http\Controllers\UserController::class);

/* END OF ROUTES */