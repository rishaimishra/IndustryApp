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
use App\Http\Controllers\Industry\PowerController;
use App\Http\Controllers\Industry\Employe\EmployeController;
use App\Http\Controllers\Industry\TrainingController;
use App\Http\Controllers\Industry\IssueController;
use App\Http\Controllers\Industry\FinanceController;
use App\Http\Controllers\Industry\OtherController;
use App\Http\Controllers\CsiPam\ProductionControlleryealy;
use App\Http\Controllers\CsiPam\SalesDomesticYearly;
use App\Http\Controllers\CsiPam\SalesExportYearly;
use App\Http\Controllers\CsiPam\RawYearly;
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
    return redirect()->route('login');
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


// manage-power-consumption

Route::get('manage-power-consumption',[PowerController::class,'index'])->name('manage.power');
Route::get('manage-power-consumption/add',[PowerController::class,'add'])->name('manage.power.add');
Route::post('manage-power-consumption/insert',[PowerController::class,'insert'])->name('manage.power.insert');

Route::get('manage-power-consumption/delete/{id}',[PowerController::class,'deleteView'])->name('manage.power.delete');

Route::post('manage-power-consumption/delete-submit',[PowerController::class,'deleteSubmit'])->name('manage.power.delete.submit');

Route::get('manage-power-consumption/edit/{id}',[PowerController::class,'edit'])->name('manage.power.edit');

Route::post('manage-power-consumption/update',[PowerController::class,'update'])->name('manage.power.update');


// manage-employment-record
Route::get('manage-employment-record',[EmployeController::class,'index'])->name('manage.employe');
Route::get('manage-employment-record/add',[EmployeController::class,'add'])->name('manage.employe.add');
Route::post('manage-employment-record/insert',[EmployeController::class,'insert'])->name('manage.employe.insert');

Route::get('manage-employment-record/delete/{id}',[EmployeController::class,'deleteView'])->name('manage.employe.delete');

Route::post('manage-employment-record/delete-submit',[EmployeController::class,'deleteSubmit'])->name('manage.employe.delete.submit');

Route::get('manage-employment-record/edit/{id}',[EmployeController::class,'edit'])->name('manage.employe.edit');

Route::post('manage-employment-record/update',[EmployeController::class,'update'])->name('manage.employe.update');


// manage-training-record
Route::get('manage-training-record',[TrainingController::class,'index'])->name('manage.training');
Route::get('manage-training-record/add',[TrainingController::class,'add'])->name('manage.training.add');
Route::post('manage-training-record/insert',[TrainingController::class,'insert'])->name('manage.training.insert');

Route::get('manage-training-record/delete/{id}',[TrainingController::class,'deleteView'])->name('manage.training.delete');

Route::post('manage-training-record/delete-submit',[TrainingController::class,'deleteSubmit'])->name('manage.training.delete.submit');

Route::get('manage-training-record/edit/{id}',[TrainingController::class,'edit'])->name('manage.training.edit');

Route::post('manage-training-record/update',[TrainingController::class,'update'])->name('manage.training.update');


// manage-issues-challenges
Route::get('manage-issues-challenges',[IssueController::class,'index'])->name('manage.issues');
Route::get('manage-issues-challenges/add',[IssueController::class,'add'])->name('manage.issues.add');
Route::post('manage-issues-challenges/insert',[IssueController::class,'insert'])->name('manage.issues.insert');

Route::get('manage-issues-challenges/delete/{id}',[IssueController::class,'deleteView'])->name('manage.issues.delete');

Route::post('manage-issues-challenges/delete-submit',[IssueController::class,'deleteSubmit'])->name('manage.issues.delete.submit');

Route::get('manage-issues-challenges/edit/{id}',[IssueController::class,'edit'])->name('manage.issues.edit');

Route::post('manage-issues-challenges/update',[IssueController::class,'update'])->name('manage.issues.update');



// manage-financial-information
Route::get('manage-financial-information',[FinanceController::class,'index'])->name('manage.finance');
Route::get('manage-financial-information/add',[FinanceController::class,'add'])->name('manage.finance.add');
Route::post('manage-financial-information/insert',[FinanceController::class,'insert'])->name('manage.finance.insert');

Route::get('manage-financial-information/delete/{id}',[FinanceController::class,'deleteView'])->name('manage.finance.delete');

Route::post('manage-financial-information/delete-submit',[FinanceController::class,'deleteSubmit'])->name('manage.finance.delete.submit');

Route::get('manage-financial-information/edit/{id}',[FinanceController::class,'edit'])->name('manage.finance.edit');

Route::post('manage-financial-information/update',[FinanceController::class,'update'])->name('manage.finance.update');


// manage-other-information
Route::get('manage-other-information',[OtherController::class,'index'])->name('manage.other');
Route::get('manage-other-information/add',[OtherController::class,'add'])->name('manage.other.add');
Route::post('manage-other-information/insert',[OtherController::class,'insert'])->name('manage.other.insert');

Route::get('manage-other-information/delete/{id}',[OtherController::class,'deleteView'])->name('manage.other.delete');

Route::post('manage-other-information/delete-submit',[OtherController::class,'deleteSubmit'])->name('manage.other.delete.submit');

Route::get('manage-other-information/edit/{id}',[OtherController::class,'edit'])->name('manage.other.edit');

Route::post('manage-other-information/update',[OtherController::class,'update'])->name('manage.other.update');




// production-manufactureing-yearly
Route::get('manage-production-manufactureing-yearly',[ProductionControlleryealy::class,'index'])->name('manage.production.manufacture.yearly');
Route::get('manage-production-manufactureing-yearly/add',[ProductionControlleryealy::class,'add'])->name('manage.production.manufacture.add.yearly');
Route::post('manage-production-manufactureing-yearly/insert',[ProductionControlleryealy::class,'insert'])->name('manage.production.manufacture.insert.yearly');

Route::get('manage-production-manufactureing-yearly/delete/{id}',[ProductionControlleryealy::class,'deleteView'])->name('manage.production.manufacture.delete.yearly');

Route::post('manage-production-manufactureing-yearly/delete-submit',[ProductionControlleryealy::class,'deleteSubmit'])->name('manage.production.manufacture.delete.submit.yearly');

Route::get('manage-production-manufactureing-yearly/edit/{id}',[ProductionControlleryealy::class,'edit'])->name('manage.production.manufacture.edit.yearly');

Route::post('manage-production-manufactureing-yearly/update',[ProductionControlleryealy::class,'update'])->name('manage.production.manufacture.update.yearly');


// sales-domestic-yearly
Route::get('manage-sales-domestic-yearly',[SalesDomesticYearly::class,'index'])->name('manage.sales.domestic.yearly');
Route::get('manage-sales-domestic-yearly/add',[SalesDomesticYearly::class,'add'])->name('manage.sales.domestic.add.yearly');
Route::post('manage-sales-domestic-yearly/insert',[SalesDomesticYearly::class,'insert'])->name('manage.sales.domestic.insert.yearly');

Route::get('manage-sales-domestic-yearly/delete/{id}',[SalesDomesticYearly::class,'deleteView'])->name('manage.sales.domestic.delete.yearly');

Route::post('manage-sales-domestic-yearly/delete-submit',[SalesDomesticYearly::class,'deleteSubmit'])->name('manage.sales.domestic.delete.submit.yearly');

Route::get('manage-sales-domestic-yearly/edit/{id}',[SalesDomesticYearly::class,'edit'])->name('manage.sales.domestic.edit.yearly');

Route::post('manage-sales-domestic-yearly/update',[SalesDomesticYearly::class,'update'])->name('manage.sales.domestic.update.yearly');


// sales-export-yearly
Route::get('manage-sales-export-yearly',[SalesExportYearly::class,'index'])->name('manage.sales.export.yearly');
Route::get('manage-sales-export-yearly/add',[SalesExportYearly::class,'add'])->name('manage.sales.export.add.yearly');
Route::post('manage-sales-export-yearly/insert',[SalesExportYearly::class,'insert'])->name('manage.sales.export.insert.yearly');

Route::get('manage-sales-export-yearly/delete/{id}',[SalesExportYearly::class,'deleteView'])->name('manage.sales.export.delete.yearly');

Route::post('manage-sales-export-yearly/delete-submit',[SalesExportYearly::class,'deleteSubmit'])->name('manage.sales.export.delete.submit.yearly');

Route::get('manage-sales-export-yearly/edit/{id}',[SalesExportYearly::class,'edit'])->name('manage.sales.export.edit.yearly');

Route::post('manage-sales-export-yearly/update',[SalesExportYearly::class,'update'])->name('manage.sales.export.update.yearly');

// raw-material-yearly
Route::get('manage-raw-material-yearly',[RawYearly::class,'index'])->name('manage.raw.material.yearly');
Route::get('manage-raw-material-yearly/add',[RawYearly::class,'add'])->name('manage.raw.material.add.yearly');
Route::post('manage-raw-material-yearly/insert',[RawYearly::class,'insert'])->name('manage.raw.material.insert.yearly');

Route::get('manage-raw-material-yearly/delete/{id}',[RawYearly::class,'deleteView'])->name('manage.raw.material.delete.yearly');

Route::post('manage-raw-material-yearly/delete-submit',[RawYearly::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.yearly');

Route::get('manage-raw-material-yearly/edit/{id}',[RawYearly::class,'edit'])->name('manage.raw.material.edit.yearly');

Route::post('manage-raw-material-yearly/update',[RawYearly::class,'update'])->name('manage.raw.material.update.yearly');