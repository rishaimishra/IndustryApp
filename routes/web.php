<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Industry\IndustryController;
use App\Http\Controllers\Industry\IndustryProfileController;
use App\Http\Controllers\Industry\ProductionController;
use App\Http\Controllers\Industry\SalesDomesticController;
use App\Http\Controllers\Industry\SalesExportController;
use App\Http\Controllers\Industry\RawMaterialController;
use App\Http\Controllers\Industry\CurrencyController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/custom-login',[App\Http\Controllers\Auth\LoginController::class,'customLogin'])->name('custom.login');
Route::get('logout',[App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::get('forget-password',[LoginController::class, 'forgetShow'])->name('user.forget.passoword');
Route::post('forget-password/email-send',[LoginController::class, 'forgetPassword'])->name('user.forget.password.send.mail');
Route::get('forget-password/forget-password/email-verify/{id}/{vcode}',[LoginController::class, 'resetPassowrd'])->name('user.forget.passoword.email.verify');
Route::post('forget-password/new-password',[LoginController::class, 'newPassword'])->name('user.forget.passoword.new.password');


Route::get('register/check-email-duplicate',[RegisterController::class, 'checkemail'])->name('manage.register.checkemail');
Route::post('register-industry',[RegisterController::class, 'registerIndustry'])->name('register.industry');
Route::get('success-registration',[RegisterController::class, 'splashScreen'])->name('register.industry.splash.screen');
Route::get('registration/email-verify/{id}/{vcode}',[RegisterController::class, 'verify'])->name('user.register.email.verify');

Route::get('change-password',[HomeController::class, 'changeView'])->name('change.password');
Route::get('change-password/check-old-password',[HomeController::class, 'checkOld'])->name('change.password.check');
Route::post('change-password/confirm-password',[HomeController::class, 'confrim'])->name('change.password.confirm');
// admin-profile 
Route::get('profile',[HomeController::class, 'profile'])->name('profile');
Route::get('profile/check-email',[HomeController::class, 'checkemail'])->name('manage.profile.checkemail');
Route::post('profile/update',[HomeController::class, 'profileUpdate'])->name('manage.profile.update');

// manage-agents
Route::get('manage-agent',[AgentController::class,'index'])->name('manage.agent');
Route::get('manage-agent/add',[AgentController::class,'addView'])->name('manage.agent.add.view');
Route::post('manage-agent/insert',[AgentController::class,'insert'])->name('manage.agent.insert');
Route::get('manage-agent/status/{id}',[AgentController::class,'status'])->name('manage.agent.status');
Route::get('manage-agent/delete/{id}',[AgentController::class,'delete'])->name('manage.agent.delete');
Route::get('manage-agent/edit/{id}',[AgentController::class,'edit'])->name('manage.agent.edit');
Route::post('manage-agent/update',[AgentController::class,'update'])->name('manage.agent.update');

// manage-industry
Route::get('manage-industry',[IndustryController::class,'index'])->name('manage.industry');
Route::get('manage-industry/edit/{id}',[IndustryController::class,'edit'])->name('manage.industry.edit');
Route::post('manage-industry/update',[IndustryController::class,'update'])->name('manage.industry.update');
Route::get('manage-industry/reset-password/{id}',[IndustryController::class,'reset'])->name('manage.industry.reset');

// manage-industry-profile
Route::get('manage-industry-profile',[IndustryProfileController::class,'index'])->name('manage.industry.profile');
Route::get('manage-industry-profile/add',[IndustryProfileController::class,'addView'])->name('manage.industry.profile.addview');
Route::post('manage-industry-profile/insert',[IndustryProfileController::class,'insert'])->name('manage.industry.profile.insert');
Route::get('manage-industry-profile/business-status-update/{id}',[IndustryProfileController::class,'businessStatus'])->name('manage.industry.profile.business.view');
Route::post('manage-industry-profile/csi-manufacturing-update',[IndustryProfileController::class,'csiManuUpdate'])->name('update.csi.csi_manufacturing');

Route::post('manage-industry-profile/ml-pam-update',[IndustryProfileController::class,'mlPamUpdate'])->name('update.ml.ml_pam');


Route::get('manage-industry-profile/edit/{id}',[IndustryProfileController::class,'edit'])->name('manage.industry.profile.edit');
Route::post('manage-industry-profile/update',[IndustryProfileController::class,'update'])->name('manage.industry.profile.update');


// production-manufactureing
Route::get('manage-production-manufactureing',[ProductionController::class,'index'])->name('manage.production.manufacture');
Route::get('manage-production-manufactureing/add',[ProductionController::class,'add'])->name('manage.production.manufacture.add');
Route::post('manage-production-manufactureing/insert',[ProductionController::class,'insert'])->name('manage.production.manufacture.insert');

Route::get('manage-production-manufactureing/delete/{id}',[ProductionController::class,'deleteView'])->name('manage.production.manufacture.delete');

Route::post('manage-production-manufactureing/delete-submit',[ProductionController::class,'deleteSubmit'])->name('manage.production.manufacture.delete.submit');

Route::get('manage-production-manufactureing/edit/{id}',[ProductionController::class,'edit'])->name('manage.production.manufacture.edit');

Route::post('manage-production-manufactureing/update',[ProductionController::class,'update'])->name('manage.production.manufacture.update');


// sales-domestic
Route::get('manage-sales-domestic',[SalesDomesticController::class,'index'])->name('manage.sales.domestic');
Route::get('manage-sales-domestic/add',[SalesDomesticController::class,'add'])->name('manage.sales.domestic.add');
Route::post('manage-sales-domestic/insert',[SalesDomesticController::class,'insert'])->name('manage.sales.domestic.insert');

Route::get('manage-sales-domestic/delete/{id}',[SalesDomesticController::class,'deleteView'])->name('manage.sales.domestic.delete');

Route::post('manage-sales-domestic/delete-submit',[SalesDomesticController::class,'deleteSubmit'])->name('manage.sales.domestic.delete.submit');

Route::get('manage-sales-domestic/edit/{id}',[SalesDomesticController::class,'edit'])->name('manage.sales.domestic.edit');

Route::post('manage-sales-domestic/update',[SalesDomesticController::class,'update'])->name('manage.sales.domestic.update');



// sales-export
Route::get('manage-sales-export',[SalesExportController::class,'index'])->name('manage.sales.export');
Route::get('manage-sales-export/add',[SalesExportController::class,'add'])->name('manage.sales.export.add');
Route::post('manage-sales-export/insert',[SalesExportController::class,'insert'])->name('manage.sales.export.insert');

Route::get('manage-sales-export/delete/{id}',[SalesExportController::class,'deleteView'])->name('manage.sales.export.delete');

Route::post('manage-sales-export/delete-submit',[SalesExportController::class,'deleteSubmit'])->name('manage.sales.export.delete.submit');

Route::get('manage-sales-export/edit/{id}',[SalesExportController::class,'edit'])->name('manage.sales.export.edit');

Route::post('manage-sales-export/update',[SalesExportController::class,'update'])->name('manage.sales.export.update');


// raw-material
Route::get('manage-raw-material',[RawMaterialController::class,'index'])->name('manage.raw.material');
Route::get('manage-raw-material/add',[RawMaterialController::class,'add'])->name('manage.raw.material.add');
Route::post('manage-raw-material/insert',[RawMaterialController::class,'insert'])->name('manage.raw.material.insert');

Route::get('manage-raw-material/delete/{id}',[RawMaterialController::class,'deleteView'])->name('manage.raw.material.delete');

Route::post('manage-raw-material/delete-submit',[RawMaterialController::class,'deleteSubmit'])->name('manage.raw.material.delete.submit');

Route::get('manage-raw-material/edit/{id}',[RawMaterialController::class,'edit'])->name('manage.raw.material.edit');

Route::post('manage-raw-material/update',[RawMaterialController::class,'update'])->name('manage.raw.material.update');

// convetible-currency

Route::get('manage-convetible-currency',[CurrencyController::class,'index'])->name('manage.currency');
Route::get('manage-convetible-currency/add',[CurrencyController::class,'add'])->name('manage.currency.add');
Route::post('manage-convetible-currency/insert',[CurrencyController::class,'insert'])->name('manage.currency.insert');

Route::get('manage-convetible-currency/delete/{id}',[CurrencyController::class,'deleteView'])->name('manage.currency.delete');

Route::post('manage-convetible-currency/delete-submit',[CurrencyController::class,'deleteSubmit'])->name('manage.currency.delete.submit');

Route::get('manage-convetible-currency/edit/{id}',[CurrencyController::class,'edit'])->name('manage.currency.edit');

Route::post('manage-convetible-currency/update',[CurrencyController::class,'update'])->name('manage.currency.update');
