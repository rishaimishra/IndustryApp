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
use App\Http\Controllers\Industry\CostController;
use App\Http\Controllers\Industry\OtherCostController;
use App\Http\Controllers\Industry\CurrencyController;
use App\Http\Controllers\Industry\PowerController;
use App\Http\Controllers\Industry\Employe\EmployeController;
use App\Http\Controllers\Industry\TrainingController;
use App\Http\Controllers\Industry\IssueController;
use App\Http\Controllers\Industry\FinanceController;
use App\Http\Controllers\Industry\OtherController;
use App\Http\Controllers\Industry\RevenueCsi;
use App\Http\Controllers\CsiPam\ProductionControlleryealy;
use App\Http\Controllers\CsiPam\SalesDomesticYearly;
use App\Http\Controllers\CsiPam\SalesExportYearly;
use App\Http\Controllers\CsiPam\CostControllerYearly;
use App\Http\Controllers\CsiPam\OtherCostControllerYearly;
use App\Http\Controllers\CsiPam\RawYearly;
use App\Http\Controllers\CsiPam\CurrencyYearly;
use App\Http\Controllers\CsiPam\PowerYearly;
use App\Http\Controllers\CsiPam\TrainYearly;
use App\Http\Controllers\CsiPam\Employyearly;
use App\Http\Controllers\CsiPam\Issueyearly;
use App\Http\Controllers\MlPam\Production;
use App\Http\Controllers\MlPam\SalesDomesticMlPam;
use App\Http\Controllers\MlPam\SalesExportMlPam;
use App\Http\Controllers\MlPam\RawMlPam;
use App\Http\Controllers\MlPam\CurrencyMl;
use App\Http\Controllers\MlPam\PowerMl;
use App\Http\Controllers\MlPam\EmployeeMl;
use App\Http\Controllers\MlPam\TraingMl;
use App\Http\Controllers\MlPam\IssueMl;
use App\Http\Controllers\Time\TimeController;
use App\Http\Controllers\Submission\CsiPamController;
use App\Http\Controllers\Submission\MlDomestic;

use App\Http\Controllers\MlPam\ProductionYearly;
use App\Http\Controllers\MlPam\SalesDomesticMlPamYearly;
use App\Http\Controllers\MlPam\SalesExportMlPamYearly;
use App\Http\Controllers\MlPam\RawMlPamYearly;
use App\Http\Controllers\MlPam\CurrencyMlYearly;
use App\Http\Controllers\MlPam\PowerMlYearly;
use App\Http\Controllers\MlPam\EmployeeMlYearly;
use App\Http\Controllers\MlPam\TraingMlYearly;
use App\Http\Controllers\MlPam\IssueMlYearly;
use App\Http\Controllers\MlPam\FinanceMl;
use App\Http\Controllers\MlPam\OtherMl;
use App\Http\Controllers\MlPam\RevenueMlController;


// ml-pam-fdi
use App\Http\Controllers\MlPamFdi\ProductionMlPamFdi;
use App\Http\Controllers\MlPamFdi\SalesDomesticMlPamFdi;
use App\Http\Controllers\MlPamFdi\SalesExportMlPamFdi;
use App\Http\Controllers\MlPamFdi\RawMlPamFdi;
use App\Http\Controllers\MlPamFdi\CurrencyMlPamFdi;
use App\Http\Controllers\MlPamFdi\EmployeMlPamFdi;
use App\Http\Controllers\MlPamFdi\TrainingMlPamFdi;
use App\Http\Controllers\MlPamFdi\IssueMlPamFdi;
use App\Http\Controllers\MlPamFdi\PowerMlPamFdi;

// ml-pam-fdi-yearly
use App\Http\Controllers\MlPamFdi\ProductionMlPamFdiYealy;
use App\Http\Controllers\MlPamFdi\SalesDomesticMlPamFdiYearly;
use App\Http\Controllers\MlPamFdi\SalesExportMlPamFdiYearly;
use App\Http\Controllers\MlPamFdi\RawMlPamFdiYearly;
use App\Http\Controllers\MlPamFdi\CurrencyMlPamFdiYearly;
use App\Http\Controllers\MlPamFdi\EmployeMlPamFdiYearly;
use App\Http\Controllers\MlPamFdi\TrainingMlPamFdiYearly;
use App\Http\Controllers\MlPamFdi\IssueMlPamFdiYearly;
use App\Http\Controllers\MlPamFdi\FinanceMlPamFdi;
use App\Http\Controllers\MlPamFdi\MlOther;
use App\Http\Controllers\MlPamFdi\RevenueMlPamFdi;
use App\Http\Controllers\MlPamFdi\PowerMlPamFdiYearly;

// csi-fdi-pam
use App\Http\Controllers\CsiPamFdi\ProductionCsiPamFdi;
use App\Http\Controllers\CsiPamFdi\SalesCsiPamFdi;
use App\Http\Controllers\CsiPamFdi\RawCsiPamFdi;
use App\Http\Controllers\CsiPamFdi\CostCsiPamFdi;
use App\Http\Controllers\CsiPamFdi\OtherCostCsiPamFdi;
use App\Http\Controllers\CsiPamFdi\EmployeCsiPamFdi;
use App\Http\Controllers\CsiPamFdi\TrainingCsiPamFdi;

// csi-fdi-pam-yearly
use App\Http\Controllers\CsiPamFdi\ProductionCsiPamFdiYearly;
use App\Http\Controllers\CsiPamFdi\SalesCsiPamFdiYearly;
use App\Http\Controllers\CsiPamFdi\RawCsiPamFdiYearly;
use App\Http\Controllers\CsiPamFdi\CostCsiPamFdiYearly;
use App\Http\Controllers\CsiPamFdi\OtherCostCsiPamFdiYearly;
use App\Http\Controllers\CsiPamFdi\EmployeCsiPamFdiYearly;
use App\Http\Controllers\CsiPamFdi\TrainingCsiPamFdiYearly;
use App\Http\Controllers\CsiPamFdi\FinanceCsiPamFdiYearly;
use App\Http\Controllers\CsiPamFdi\OtherCsiPamFdiYearly;
use App\Http\Controllers\CsiPamFdi\RevenueCsiPamFdiYearly;

// csi-service
use App\Http\Controllers\CsiService\ProductionCsiService;
use App\Http\Controllers\CsiService\SalesCsiService;
use App\Http\Controllers\CsiService\RawCsiService;
use App\Http\Controllers\CsiService\CostCsiService;
use App\Http\Controllers\CsiService\OtherCostCsiService;
use App\Http\Controllers\CsiService\EmployeCsiService;
use App\Http\Controllers\CsiService\TrainingCsiService;

// csi-service-yearly
use App\Http\Controllers\CsiService\ProductionServiceYearly;
use App\Http\Controllers\CsiService\SalesCsiServiceYearly;
use App\Http\Controllers\CsiService\RawCsiServiceYearly;
use App\Http\Controllers\CsiService\CostCsiServiceYearly;
use App\Http\Controllers\CsiService\OtherCostCsiServiceYearly;
use App\Http\Controllers\CsiService\EmployeCsiServiceYearly;
use App\Http\Controllers\CsiService\TrainingCsiServiceYearly;
use App\Http\Controllers\CsiService\FinanceCsiServiceYearly;
use App\Http\Controllers\CsiService\OtherCsiServiceYearly;
use App\Http\Controllers\CsiService\RevenueCsiServiceYearly;


// ml-domestic-service
use App\Http\Controllers\MlService\SalesMlService;
use App\Http\Controllers\MlService\ServiceMlService;
use App\Http\Controllers\MlService\RawMlService;
use App\Http\Controllers\MlService\CostMlService;
use App\Http\Controllers\MlService\EmployeMlService;
use App\Http\Controllers\MlService\TrainingMlService;

// ml-domestic-service-yearly
use App\Http\Controllers\MlService\SalesYearlyMlService;
use App\Http\Controllers\MlService\ServiceYearlyMlService;
use App\Http\Controllers\MlService\RawYearlyMlService;
use App\Http\Controllers\MlService\CostYearlyMlService;
use App\Http\Controllers\MlService\EmployeYearlyMlService;
use App\Http\Controllers\MlService\TrainingYearlyMlService;
use App\Http\Controllers\MlService\FinanceYearlyMlService;
use App\Http\Controllers\MlService\OtherYearlyMlService;
use App\Http\Controllers\MlService\RevenueYearlyMlService;


// csi-construction
use App\Http\Controllers\CsiConstruction\ServiceCsiConstruction;
use App\Http\Controllers\CsiConstruction\SalesCsiConstruction;
use App\Http\Controllers\CsiConstruction\RawCsiConstruction;
use App\Http\Controllers\CsiConstruction\CostCsiConstruction;
use App\Http\Controllers\CsiConstruction\OtherCostCsiConstruction;
use App\Http\Controllers\CsiConstruction\EmployeCsiConstruction;
use App\Http\Controllers\CsiConstruction\TrainingCsiConstruction;

// csi-construction-yearly
use App\Http\Controllers\CsiConstruction\ServiceYearlyCsiConstruction;
use App\Http\Controllers\CsiConstruction\SalesYearlyCsiConstruction;
use App\Http\Controllers\CsiConstruction\RawYearlyCsiConstruction;
use App\Http\Controllers\CsiConstruction\CostYearlyCsiConstruction;
use App\Http\Controllers\CsiConstruction\OtherCostYearlyCsiConstruction;
use App\Http\Controllers\CsiConstruction\EmployeYearlyCsiConstruction;
use App\Http\Controllers\CsiConstruction\TrainingYearlyCsiConstruction;
use App\Http\Controllers\CsiConstruction\FinanceYearlyCsiConstruction;
use App\Http\Controllers\CsiConstruction\OtherYearlyCsiConstruction;
use App\Http\Controllers\CsiConstruction\RevenueYearlyCsiConstruction;


// ml-domestic-construction
use App\Http\Controllers\MlConstruction\ServiceMlConstruction;
use App\Http\Controllers\MlConstruction\SalesMlConstruction;
use App\Http\Controllers\MlConstruction\RawMlConstruction;
use App\Http\Controllers\MlConstruction\CostMlConstruction;
use App\Http\Controllers\MlConstruction\EmployeMlConstruction;
use App\Http\Controllers\MlConstruction\TrainingMlConstruction;
// ml-domestic-construction-yearly
use App\Http\Controllers\MlConstruction\ServiceYearlyMlConstruction;
use App\Http\Controllers\MlConstruction\SalesYearlyMlConstruction;
use App\Http\Controllers\MlConstruction\RawYearlyMlConstruction;
use App\Http\Controllers\MlConstruction\CostYearlyMlConstruction;
use App\Http\Controllers\MlConstruction\EmployeYearlyMlConstruction;
use App\Http\Controllers\MlConstruction\TrainingYearlyMlConstruction;
use App\Http\Controllers\MlConstruction\FinanceYearlyMlConstruction;
use App\Http\Controllers\MlConstruction\OtherYearlyMlConstruction;
use App\Http\Controllers\MlConstruction\RevenueYearlyMlConstruction;


// csi-construction-fdi
use App\Http\Controllers\CsiConstructionFdi\ServiceCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\SalesCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\RawCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\CostCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\OtherCostCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\EmpployeCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\TrainingCsiConstructionFdi;

// csi-construction-fdi
use App\Http\Controllers\CsiConstructionFdi\ServiceYearlyCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\SalesYearlyCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\RawYearlyCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\CostYearlyCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\OtherCostYearlyCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\EmployeYearlyCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\TrainingYearlyCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\FinanceYearlyCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\OtherYearlyCsiConstructionFdi;
use App\Http\Controllers\CsiConstructionFdi\RevenueYearlyCsiConstructionFdi;


// ml-construction-fdi
use App\Http\Controllers\MlConstructionFdi\ServiceMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\SalesMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\RawMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\CostMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\EmployeMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\TrainingMlConstructionFdi;

// ml-construction-fdi-yearly
use App\Http\Controllers\MlConstructionFdi\ServiceYearlyMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\SalesYearlyMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\RawYearlyMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\CostYearlyMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\EmployeYearlyMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\TrainingYearlyMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\FinanceYearlyMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\OtherYearlyMlConstructionFdi;
use App\Http\Controllers\MlConstructionFdi\RevenueYearlyMlConstructionFdi;
// ml-service-fdi
use App\Http\Controllers\MlServiceFdi\ServiceMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\SalesMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\RawMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\CostlServiceFdi;
use App\Http\Controllers\MlServiceFdi\EmployelServiceFdi;
use App\Http\Controllers\MlServiceFdi\TraininglServiceFdi;

// ml-service-fdi-yearly
use App\Http\Controllers\MlServiceFdi\ServiceYearlyMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\SalesYearlyMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\RawYearlyMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\CostYearlyMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\EmployeYearlyMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\TrainingYearlyMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\FinanceYearlyMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\OtherYearlyMlServiceFdi;
use App\Http\Controllers\MlServiceFdi\RevenueYearlyMlServiceFdi;


// csi-service-fdi
use App\Http\Controllers\CsiServiceFdi\ServiceCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\SalesCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\RawCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\CostCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\OtherCostCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\EmployeCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\TrainingCsiServiceFdi;

// csi-service-fdi-yearly
use App\Http\Controllers\CsiServiceFdi\ServiceYearlyCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\SalesYearlyCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\RawYearlyCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\CostYearlyCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\OtherCostYearlyCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\EmployeYearlyCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\TrainingYearlyCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\FinanceYearlyCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\OtherYearlyCsiServiceFdi;
use App\Http\Controllers\CsiServiceFdi\RevenueYearlyCsiServiceFdi;
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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    echo "clear-cache".$exitCode;
    // return what you want
});

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



Route::get('select-profile',[IndustryProfileController::class,'select_profile'])->name('manage.select.profile');
Route::post('select-profile/update',[IndustryProfileController::class,'select_profile_update'])->name('manage.select.profile.update');


// csi-manufacturing////////////////////////////////////////////////////////////


// production-manufactureing
Route::get('manage-production-manufactureing',[ProductionController::class,'index'])->name('manage.production.manufacture');
Route::post('manage-production-manufactureing/save-save-next',[ProductionController::class,'save_next'])->name('manage.production.manufacture.save.save.next');


Route::get('manage-production-manufactureing/add',[ProductionController::class,'add'])->name('manage.production.manufacture.add');
Route::post('manage-production-manufactureing/insert',[ProductionController::class,'insert'])->name('manage.production.manufacture.insert');

Route::get('manage-production-manufactureing/delete/{id}',[ProductionController::class,'deleteView'])->name('manage.production.manufacture.delete');

Route::post('manage-production-manufactureing/delete-submit',[ProductionController::class,'deleteSubmit'])->name('manage.production.manufacture.delete.submit');

Route::get('manage-production-manufactureing/edit/{id}',[ProductionController::class,'edit'])->name('manage.production.manufacture.edit');

Route::post('manage-production-manufactureing/update',[ProductionController::class,'update'])->name('manage.production.manufacture.update');






// // sales-domestic
// Route::get('manage-sales-domestic',[SalesDomesticController::class,'index'])->name('manage.sales.domestic');
// Route::post('manage-sales-domestic/save-save-next',[SalesDomesticController::class,'save_next'])->name('manage.sales.domestic.save.save.next');

// Route::get('manage-sales-domestic/add',[SalesDomesticController::class,'add'])->name('manage.sales.domestic.add');
// Route::post('manage-sales-domestic/insert',[SalesDomesticController::class,'insert'])->name('manage.sales.domestic.insert');

// Route::get('manage-sales-domestic/delete/{id}',[SalesDomesticController::class,'deleteView'])->name('manage.sales.domestic.delete');

// Route::post('manage-sales-domestic/delete-submit',[SalesDomesticController::class,'deleteSubmit'])->name('manage.sales.domestic.delete.submit');

// Route::get('manage-sales-domestic/edit/{id}',[SalesDomesticController::class,'edit'])->name('manage.sales.domestic.edit');

// Route::post('manage-sales-domestic/update',[SalesDomesticController::class,'update'])->name('manage.sales.domestic.update');



// sales-export
Route::get('manage-sales-export',[SalesExportController::class,'index'])->name('manage.sales.export');
Route::post('manage-sales-export/save-save-next',[SalesExportController::class,'save_next'])->name('manage.sales.export.save.save.next');
Route::get('manage-sales-export/add',[SalesExportController::class,'add'])->name('manage.sales.export.add');
Route::post('manage-sales-export/insert',[SalesExportController::class,'insert'])->name('manage.sales.export.insert');

Route::get('manage-sales-export/delete/{id}',[SalesExportController::class,'deleteView'])->name('manage.sales.export.delete');

Route::post('manage-sales-export/delete-submit',[SalesExportController::class,'deleteSubmit'])->name('manage.sales.export.delete.submit');

Route::get('manage-sales-export/edit/{id}',[SalesExportController::class,'edit'])->name('manage.sales.export.edit');

Route::post('manage-sales-export/update',[SalesExportController::class,'update'])->name('manage.sales.export.update');


// raw-material
Route::get('manage-raw-material',[RawMaterialController::class,'index'])->name('manage.raw.material');

Route::post('manage-raw-material/save-save-next',[RawMaterialController::class,'save_next'])->name('manage.raw.material.save.save.next');


Route::get('manage-raw-material/add',[RawMaterialController::class,'add'])->name('manage.raw.material.add');
Route::post('manage-raw-material/insert',[RawMaterialController::class,'insert'])->name('manage.raw.material.insert');

Route::get('manage-raw-material/delete/{id}',[RawMaterialController::class,'deleteView'])->name('manage.raw.material.delete');

Route::post('manage-raw-material/delete-submit',[RawMaterialController::class,'deleteSubmit'])->name('manage.raw.material.delete.submit');

Route::get('manage-raw-material/edit/{id}',[RawMaterialController::class,'edit'])->name('manage.raw.material.edit');

Route::post('manage-raw-material/update',[RawMaterialController::class,'update'])->name('manage.raw.material.update');

// // manage-cost-details

Route::get('manage-cost-details',[CostController::class,'index'])->name('manage.cost');
Route::post('manage-cost-details/save-save-next',[CostController::class,'save_next'])->name('manage.cost.save.save.next');
Route::get('manage-cost-details/edit/{id}',[CostController::class,'edit'])->name('manage.cost.edit');

Route::post('manage-cost-details/update',[CostController::class,'update'])->name('manage.cost.update');

// // manage-other-cost-details

Route::get('manage-other-cost-details',[OtherCostController::class,'index'])->name('manage.other.cost.other');
Route::post('manage-other-cost-details/save-save-next',[OtherCostController::class,'save_next'])->name('manage.other.cost.other.save.save.next');
Route::get('manage-other-cost-details/edit/{id}',[OtherCostController::class,'edit'])->name('manage.other.cost.other.edit');

Route::post('manage-other-cost-details/update',[OtherCostController::class,'update'])->name('manage.other.cost.other.update');




// // convetible-currency

Route::get('manage-convetible-currency',[CurrencyController::class,'index'])->name('manage.currency');

Route::post('manage-convetible-currency/save-save-next',[CurrencyController::class,'save_next'])->name('manage.currency.save.save.next');


Route::get('manage-convetible-currency/add',[CurrencyController::class,'add'])->name('manage.currency.add');
Route::post('manage-convetible-currency/insert',[CurrencyController::class,'insert'])->name('manage.currency.insert');

Route::get('manage-convetible-currency/delete/{id}',[CurrencyController::class,'deleteView'])->name('manage.currency.delete');

Route::post('manage-convetible-currency/delete-submit',[CurrencyController::class,'deleteSubmit'])->name('manage.currency.delete.submit');

Route::get('manage-convetible-currency/edit/{id}',[CurrencyController::class,'edit'])->name('manage.currency.edit');

Route::post('manage-convetible-currency/update',[CurrencyController::class,'update'])->name('manage.currency.update');


// // manage-power-consumption

Route::get('manage-power-consumption',[PowerController::class,'index'])->name('manage.power');
Route::post('manage-power-consumption/save-save-next',[PowerController::class,'save_next'])->name('manage.power.save.save.next');
Route::get('manage-power-consumption/add',[PowerController::class,'add'])->name('manage.power.add');
Route::post('manage-power-consumption/insert',[PowerController::class,'insert'])->name('manage.power.insert');

Route::get('manage-power-consumption/delete/{id}',[PowerController::class,'deleteView'])->name('manage.power.delete');

Route::post('manage-power-consumption/delete-submit',[PowerController::class,'deleteSubmit'])->name('manage.power.delete.submit');

Route::get('manage-power-consumption/edit/{id}',[PowerController::class,'edit'])->name('manage.power.edit');

Route::post('manage-power-consumption/update',[PowerController::class,'update'])->name('manage.power.update');


// manage-employment-record
Route::get('manage-employment-record',[EmployeController::class,'index'])->name('manage.employe');
Route::post('manage-employment-record/save-save-next',[EmployeController::class,'save_next'])->name('manage.employe.save.save.next');
Route::get('manage-employment-record/add',[EmployeController::class,'add'])->name('manage.employe.add');
Route::post('manage-employment-record/insert',[EmployeController::class,'insert'])->name('manage.employe.insert');

Route::get('manage-employment-record/delete/{id}',[EmployeController::class,'deleteView'])->name('manage.employe.delete');

Route::post('manage-employment-record/delete-submit',[EmployeController::class,'deleteSubmit'])->name('manage.employe.delete.submit');

Route::get('manage-employment-record/edit/{id}',[EmployeController::class,'edit'])->name('manage.employe.edit');

Route::post('manage-employment-record/update',[EmployeController::class,'update'])->name('manage.employe.update');
Route::get('manage-employment-record/statistics',[EmployeController::class,'statistics'])->name('manage.employe.statistics');


// manage-training-record
Route::get('manage-training-record',[TrainingController::class,'index'])->name('manage.training');
Route::post('manage-training-record/save-save-next',[TrainingController::class,'save_next'])->name('manage.training.save.save.next');

Route::get('manage-training-record/add',[TrainingController::class,'add'])->name('manage.training.add');
Route::post('manage-training-record/insert',[TrainingController::class,'insert'])->name('manage.training.insert');

Route::get('manage-training-record/delete/{id}',[TrainingController::class,'deleteView'])->name('manage.training.delete');

Route::post('manage-training-record/delete-submit',[TrainingController::class,'deleteSubmit'])->name('manage.training.delete.submit');

Route::get('manage-training-record/edit/{id}',[TrainingController::class,'edit'])->name('manage.training.edit');

Route::post('manage-training-record/update',[TrainingController::class,'update'])->name('manage.training.update');


// manage-issues-challenges
Route::get('manage-issues-challenges',[IssueController::class,'index'])->name('manage.issues');

Route::post('manage-issues-challenges/save-save-next',[IssueController::class,'save_next'])->name('manage.issues.save.save.next');


Route::get('manage-issues-challenges/add',[IssueController::class,'add'])->name('manage.issues.add');
Route::post('manage-issues-challenges/insert',[IssueController::class,'insert'])->name('manage.issues.insert');

Route::get('manage-issues-challenges/delete/{id}',[IssueController::class,'deleteView'])->name('manage.issues.delete');

Route::post('manage-issues-challenges/delete-submit',[IssueController::class,'deleteSubmit'])->name('manage.issues.delete.submit');

Route::get('manage-issues-challenges/edit/{id}',[IssueController::class,'edit'])->name('manage.issues.edit');

Route::post('manage-issues-challenges/update',[IssueController::class,'update'])->name('manage.issues.update');



Route::get('manage-half-yearly-submission',[CsiPamController::class,'half'])->name('manage.half.yearly.submission');



// manage-financial-information
Route::get('manage-financial-information',[FinanceController::class,'index'])->name('manage.finance');
Route::get('manage-financial-information/add',[FinanceController::class,'add'])->name('manage.finance.add');
Route::post('manage-financial-information/save-next',[FinanceController::class,'insert'])->name('manage.finance.insert.csi.pam');

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


// manage-revenue-csi

Route::get('manage-revenue-csi',[RevenueCsi::class,'index'])->name('manage.revenue.csi-yearly');
Route::post('manage-revenue-csi/insert',[RevenueCsi::class,'insert'])->name('manage.revenue.insert.csi-yearly');
Route::get('manage-revenue-csi/edit/{id}',[RevenueCsi::class,'edit'])->name('manage.revenue.edit.csi-yearly');
Route::post('manage-revenue-csi/update',[RevenueCsi::class,'update'])->name('manage.revenue.update.csi-yearly');




// production-manufactureing-yearly
Route::get('manage-production-manufactureing-yearly',[ProductionControlleryealy::class,'index'])->name('manage.production.manufacture.yearly');

Route::post('manage-production-manufactureing-yearly/save-save-next',[ProductionControlleryealy::class,'save_next'])->name('manage.production.manufacture.yearly.save.save.next');


Route::get('manage-production-manufactureing-yearly/add',[ProductionControlleryealy::class,'add'])->name('manage.production.manufacture.add.yearly');
Route::post('manage-production-manufactureing-yearly/insert',[ProductionControlleryealy::class,'insert'])->name('manage.production.manufacture.insert.yearly');

Route::get('manage-production-manufactureing-yearly/delete/{id}',[ProductionControlleryealy::class,'deleteView'])->name('manage.production.manufacture.delete.yearly');

Route::post('manage-production-manufactureing-yearly/delete-submit',[ProductionControlleryealy::class,'deleteSubmit'])->name('manage.production.manufacture.delete.submit.yearly');

Route::get('manage-production-manufactureing-yearly/edit/{id}',[ProductionControlleryealy::class,'edit'])->name('manage.production.manufacture.edit.yearly');

Route::post('manage-production-manufactureing-yearly/update',[ProductionControlleryealy::class,'update'])->name('manage.production.manufacture.update.yearly');


// sales-domestic-yearly
Route::get('manage-sales-domestic-yearly',[SalesDomesticYearly::class,'index'])->name('manage.sales.domestic.yearly');

Route::post('manage-sales-domestic-yearly/save-save-next',[SalesDomesticYearly::class,'save_next'])->name('manage.sales.domestic.yearly.save.save.next');


Route::get('manage-sales-domestic-yearly/add',[SalesDomesticYearly::class,'add'])->name('manage.sales.domestic.add.yearly');
Route::post('manage-sales-domestic-yearly/insert',[SalesDomesticYearly::class,'insert'])->name('manage.sales.domestic.insert.yearly');

Route::get('manage-sales-domestic-yearly/delete/{id}',[SalesDomesticYearly::class,'deleteView'])->name('manage.sales.domestic.delete.yearly');

Route::post('manage-sales-domestic-yearly/delete-submit',[SalesDomesticYearly::class,'deleteSubmit'])->name('manage.sales.domestic.delete.submit.yearly');

Route::get('manage-sales-domestic-yearly/edit/{id}',[SalesDomesticYearly::class,'edit'])->name('manage.sales.domestic.edit.yearly');

Route::post('manage-sales-domestic-yearly/update',[SalesDomesticYearly::class,'update'])->name('manage.sales.domestic.update.yearly');


// sales-export-yearly
Route::get('manage-sales-export-yearly',[SalesExportYearly::class,'index'])->name('manage.sales.export.yearly');

Route::post('manage-sales-export-yearly/save-save-next',[SalesExportYearly::class,'save_next'])->name('manage.sales.export.yearly.save.save.next');


Route::get('manage-sales-export-yearly/add',[SalesExportYearly::class,'add'])->name('manage.sales.export.add.yearly');
Route::post('manage-sales-export-yearly/insert',[SalesExportYearly::class,'insert'])->name('manage.sales.export.insert.yearly');

Route::get('manage-sales-export-yearly/delete/{id}',[SalesExportYearly::class,'deleteView'])->name('manage.sales.export.delete.yearly');

Route::post('manage-sales-export-yearly/delete-submit',[SalesExportYearly::class,'deleteSubmit'])->name('manage.sales.export.delete.submit.yearly');

Route::get('manage-sales-export-yearly/edit/{id}',[SalesExportYearly::class,'edit'])->name('manage.sales.export.edit.yearly');

Route::post('manage-sales-export-yearly/update',[SalesExportYearly::class,'update'])->name('manage.sales.export.update.yearly');

// raw-material-yearly
Route::get('manage-raw-material-yearly',[RawYearly::class,'index'])->name('manage.raw.material.yearly');
Route::post('manage-raw-material-yearly/save-save-next',[RawYearly::class,'save_next'])->name('manage.raw.material.yearly.save.save.next');


Route::get('manage-raw-material-yearly/add',[RawYearly::class,'add'])->name('manage.raw.material.add.yearly');
Route::post('manage-raw-material-yearly/insert',[RawYearly::class,'insert'])->name('manage.raw.material.insert.yearly');

Route::get('manage-raw-material-yearly/delete/{id}',[RawYearly::class,'deleteView'])->name('manage.raw.material.delete.yearly');

Route::post('manage-raw-material-yearly/delete-submit',[RawYearly::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.yearly');

Route::get('manage-raw-material-yearly/edit/{id}',[RawYearly::class,'edit'])->name('manage.raw.material.edit.yearly');

Route::post('manage-raw-material-yearly/update',[RawYearly::class,'update'])->name('manage.raw.material.update.yearly');


// convetible-currency-yearly

Route::get('manage-convetible-currency-yearly',[CurrencyYearly::class,'index'])->name('manage.currency.yearly');

Route::post('manage-convetible-currency-yearly/save-save-next',[CurrencyYearly::class,'save_next'])->name('manage.currency.yearly.save.save.next');


Route::get('manage-convetible-currency-yearly/add',[CurrencyYearly::class,'add'])->name('manage.currency.add.yearly');
Route::post('manage-convetible-currency-yearly/insert',[CurrencyYearly::class,'insert'])->name('manage.currency.insert.yearly');

Route::get('manage-convetible-currency-yearly/delete/{id}',[CurrencyYearly::class,'deleteView'])->name('manage.currency.delete.yearly');

Route::post('manage-convetible-currency-yearly/delete-submit',[CurrencyYearly::class,'deleteSubmit'])->name('manage.currency.delete.submit.yearly');

Route::get('manage-convetible-currency-yearly/edit/{id}',[CurrencyYearly::class,'edit'])->name('manage.currency.edit.yearly');

Route::post('manage-convetible-currency-yearly/update',[CurrencyYearly::class,'update'])->name('manage.currency.update.yearly');



// // manage-cost-details-yearly

Route::get('manage-cost-details-yearly',[CostControllerYearly::class,'index'])->name('manage.cost.yearly');
Route::post('manage-cost-details-yearly/save-save-next',[CostControllerYearly::class,'save_next'])->name('manage.cost.save.save.next.yearly');
Route::get('manage-cost-details-yearly/edit/{id}',[CostControllerYearly::class,'edit'])->name('manage.cost.edit.yearly');
Route::post('manage-cost-details-yearly/update',[CostControllerYearly::class,'update'])->name('manage.cost.update.yearly');





// // manage-other-cost-details-yearly

Route::get('manage-other-cost-details-yearly',[OtherCostControllerYearly::class,'index'])->name('manage.other.cost.other.yearly');
Route::post('manage-other-cost-details-yearly/save-save-next',[OtherCostControllerYearly::class,'save_next'])->name('manage.other.cost.other.save.save.next.yearly');
Route::get('manage-other-cost-consumption-yearly/edit/{id}',[OtherCostControllerYearly::class,'edit'])->name('manage.other.cost.other.edit.yearly');

Route::post('manage-other-cost-consumption-yearly/update',[OtherCostControllerYearly::class,'update'])->name('manage.other.cost.other.update.yearly');





// manage-power-consumption-yearly

Route::get('manage-power-consumption-yearly',[PowerYearly::class,'index'])->name('manage.power.yearly');

Route::post('manage-power-consumption-yearly/save-save-next',[PowerYearly::class,'save_next'])->name('manage.power.yearly.save.save.next');


Route::get('manage-power-consumption-yearly/edit/{id}',[PowerYearly::class,'edit'])->name('manage.power.edit.yearly');

Route::post('manage-power-consumption-yearly/update',[PowerYearly::class,'update'])->name('manage.power.update.yearly');



// manage-training-record-yearly
Route::get('manage-training-record-yearly',[TrainYearly::class,'index'])->name('manage.training.yearly');

Route::post('manage-training-record-yearly/save-save-next',[TrainYearly::class,'save_next'])->name('manage.training.yearly.save.save.next');


Route::get('manage-training-record-yearly/add',[TrainYearly::class,'add'])->name('manage.training.add.yearly');
Route::post('manage-training-record-yearly/insert',[TrainYearly::class,'insert'])->name('manage.training.insert.yearly');

Route::get('manage-training-record-yearly/delete/{id}',[TrainYearly::class,'deleteView'])->name('manage.training.delete.yearly');

Route::post('manage-training-record-yearly/delete-submit',[TrainYearly::class,'deleteSubmit'])->name('manage.training.delete.submit.yearly');

Route::get('manage-training-record-yearly/edit/{id}',[TrainYearly::class,'edit'])->name('manage.training.edit.yearly');

Route::post('manage-training-record-yearly/update',[TrainYearly::class,'update'])->name('manage.training.update.yearly');



// manage-employment-record-yearly
Route::get('manage-employment-record-yearly',[Employyearly::class,'index'])->name('manage.employe.yearly');

Route::post('manage-employment-record-yearly/save-save-next',[Employyearly::class,'save_next'])->name('manage.employe.yearly.save.save.next');


Route::get('manage-employment-record-yearly/add',[Employyearly::class,'add'])->name('manage.employe.add.yearly');
Route::post('manage-employment-record-yearly/insert',[Employyearly::class,'insert'])->name('manage.employe.insert.yearly');

Route::get('manage-employment-record-yearly/delete/{id}',[Employyearly::class,'deleteView'])->name('manage.employe.delete.yearly');

Route::post('manage-employment-record-yearly/delete-submit',[Employyearly::class,'deleteSubmit'])->name('manage.employe.delete.submit.yearly');

Route::get('manage-employment-record-yearly/edit/{id}',[Employyearly::class,'edit'])->name('manage.employe.edit.yearly');

Route::post('manage-employment-record-yearly/update',[Employyearly::class,'update'])->name('manage.employe.update.yearly');

Route::get('manage-employment-record-yearly/statistics',[Employyearly::class,'statistics'])->name('manage.employe.statistics.yearly');


// manage-issues-challenges-yearly
Route::get('manage-issues-challenges-yearly',[Issueyearly::class,'index'])->name('manage.issues.yearly');

Route::post('manage-issues-challenges-yearly/save-save-next',[Issueyearly::class,'save_next'])->name('manage.issues.yearly.save.save.next');



Route::get('manage-issues-challenges-yearly/add',[Issueyearly::class,'add'])->name('manage.issues.add.yearly');
Route::post('manage-issues-challenges-yearly/insert',[Issueyearly::class,'insert'])->name('manage.issues.insert.yearly');

Route::get('manage-issues-challenges-yearly/delete/{id}',[Issueyearly::class,'deleteView'])->name('manage.issues.delete.yearly');

Route::post('manage-issues-challenges-yearly/delete-submit',[Issueyearly::class,'deleteSubmit'])->name('manage.issues.delete.submit.yearly');

Route::get('manage-issues-challenges-yearly/edit/{id}',[Issueyearly::class,'edit'])->name('manage.issues.edit.yearly');

Route::post('manage-issues-challenges-yearly/update',[Issueyearly::class,'update'])->name('manage.issues.update.yearly');


Route::get('manage-yearly-submission',[CsiPamController::class,'yearly'])->name('manage.yearly.submission');

// date-management
Route::get('manage-date',[TimeController::class,'index'])->name('manage.date');
Route::get('manage-date/add',[TimeController::class,'add'])->name('manage.date.add');
Route::post('manage-date/insert',[TimeController::class,'insert'])->name('manage.date.insert');
Route::get('manage-date/delete/{id}',[TimeController::class,'delete'])->name('manage.date.delete');
Route::get('manage-date/edit/{id}',[TimeController::class,'edit'])->name('manage.date.edit');
Route::post('manage-date/update',[TimeController::class,'update'])->name('manage.date.update');












// // ml-domestic-pam-production-manufactureing
Route::get('ml-domestic-pam-production-manufactureing',[Production::class,'index'])->name('manage.production.manufacture.ml-pam-domestic');

Route::post('ml-domestic-pam-production-manufactureing/save-save-next',[Production::class,'save_next'])->name('manage.production.manufacture.ml-pam-domestic.save.save.next');



Route::get('ml-domestic-pam-production-manufactureing/add',[Production::class,'add'])->name('manage.production.manufacture.add.ml-pam-domestic');
Route::post('ml-domestic-pam-production-manufactureing/insert',[Production::class,'insert'])->name('manage.production.manufacture.insert.ml-pam-domestic');

Route::get('ml-domestic-pam-production-manufactureing/delete/{id}',[Production::class,'deleteView'])->name('manage.production.manufacture.delete.ml-pam-domestic');

Route::post('ml-domestic-pam-production-manufactureing/delete-submit',[Production::class,'deleteSubmit'])->name('manage.production.manufacture.delete.submit.ml-pam-domestic');

Route::get('ml-domestic-pam-production-manufactureing/edit/{id}',[Production::class,'edit'])->name('manage.production.manufacture.edit.ml-pam-domestic');

Route::post('ml-domestic-pam-production-manufactureing/update',[Production::class,'update'])->name('manage.production.manufacture.update.ml-pam-domestic');





// // ml-domestic-pam-sales-domestic
Route::get('ml-domestic-pam-manage-sales-domestic',[SalesDomesticMlPam::class,'index'])->name('manage.sales.domestic.ml.pam.domestic');

Route::post('ml-domestic-pam-manage-sales-domestic/save-save-next',[SalesDomesticMlPam::class,'save_next'])->name('manage.sales.domestic.ml.pam.domestic.save.save.next');


Route::get('ml-domestic-pam-manage-sales-domestic/edit/{id}',[SalesDomesticMlPam::class,'edit'])->name('manage.sales.domestic.edit.ml.pam.domestic');

Route::post('ml-domestic-pam-manage-sales-domestic/update',[SalesDomesticMlPam::class,'update'])->name('manage.sales.domestic.update.ml.pam.domestic');




// // ml-domestic-pam-sales-export
Route::get('ml-domestic-pam-manage-sales-export',[SalesExportMlPam::class,'index'])->name('manage.sales.export.ml.pam.domestic');
Route::post('ml-domestic-pam-manage-sales-export/save-save-next',[SalesExportMlPam::class,'save_next'])->name('manage.sales.export.ml.pam.domestic.save.save.next');
Route::get('ml-domestic-pam-manage-sales-export/edit/{id}',[SalesExportMlPam::class,'edit'])->name('manage.sales.export.edit.ml.pam.domestic');
Route::post('ml-domestic-pam-manage-sales-export/update',[SalesExportMlPam::class,'update'])->name('manage.sales.export.update.ml.pam.domestic');



// // ml-domestic-pam-raw-material
Route::get('ml-domestic-pam-manage-raw-material',[RawMlPam::class,'index'])->name('manage.raw.material.ml.pam.domestic');

Route::post('ml-domestic-pam-manage-raw-material/save-save-next',[RawMlPam::class,'save_next'])->name('manage.raw.material.ml.pam.domestic.save.save.next');



Route::get('ml-domestic-pam-manage-raw-material/add',[RawMlPam::class,'add'])->name('manage.raw.material.add.ml.pam.domestic');
Route::post('ml-domestic-pam-manage-raw-material/insert',[RawMlPam::class,'insert'])->name('manage.raw.material.insert.ml.pam.domestic');

Route::get('ml-domestic-pam-manage-raw-material/delete/{id}',[RawMlPam::class,'deleteView'])->name('manage.raw.material.delete.ml.pam.domestic');

Route::post('ml-domestic-pam-manage-raw-material/delete-submit',[RawMlPam::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml.pam.domestic');

Route::get('ml-domestic-pam-manage-raw-material/edit/{id}',[RawMlPam::class,'edit'])->name('manage.raw.material.edit.ml.pam.domestic');

Route::post('ml-domestic-pam-manage-raw-material/update',[RawMlPam::class,'update'])->name('manage.raw.material.update.ml.pam.domestic');


// // ml-domestic-pam-currency
Route::get('ml-domestic-pam-currency',[CurrencyMl::class,'index'])->name('manage.currency.ml.pam.domestic');

Route::post('ml-domestic-pam-currency/save-save-next',[CurrencyMl::class,'save_next'])->name('manage.currency.ml.pam.domestic.save.save.next');
Route::get('ml-domestic-pam-currency/add',[CurrencyMl::class,'add'])->name('manage.currency.add.ml.pam.domestic');
Route::post('ml-domestic-pam-currency/insert',[CurrencyMl::class,'insert'])->name('manage.currency.insert.ml.pam.domestic');

Route::get('ml-domestic-pam-currency/delete/{id}',[CurrencyMl::class,'deleteView'])->name('manage.currency.delete.ml.pam.domestic');

Route::post('ml-domestic-pam-currency/delete-submit',[CurrencyMl::class,'deleteSubmit'])->name('manage.currency.delete.submit.ml.pam.domestic');

Route::get('ml-domestic-pam-currency/edit/{id}',[CurrencyMl::class,'edit'])->name('manage.currency.edit.ml.pam.domestic');

Route::post('ml-domestic-pam-currency/update',[CurrencyMl::class,'update'])->name('manage.currency.update.ml.pam.domestic');

// ml-domestic-pam-manage-power-consumption

Route::get('ml-domestic-pam-manage-power-consumption',[PowerMl::class,'index'])->name('manage.power.ml-domestic-pam');
Route::post('ml-domestic-pam-manage-power-consumption/save-save-next',[PowerMl::class,'save_next'])->name('manage.power.save.save.next.ml-domestic-pam');

Route::get('ml-domestic-pam-manage-power-consumption/edit/{id}',[PowerMl::class,'edit'])->name('manage.power.edit.ml-domestic-pam');

Route::post('ml-domestic-pam-manage-power-consumption/update',[PowerMl::class,'update'])->name('manage.power.update.ml-domestic-pam');


// ml-domestic-pam-employment-record
Route::get('ml-domestic-pam-employment-record',[EmployeeMl::class,'index'])->name('manage.employeml.pam.domestic');
Route::post('ml-domestic-pam-employment-record/save-save-next',[EmployeeMl::class,'save_next'])->name('manage.employe.save.save.nextml.pam.domestic');
Route::get('ml-domestic-pam-employment-record/add',[EmployeeMl::class,'add'])->name('manage.employe.addml.pam.domestic');
Route::post('ml-domestic-pam-employment-record/insert',[EmployeeMl::class,'insert'])->name('manage.employe.insertml.pam.domestic');

Route::get('ml-domestic-pam-employment-record/delete/{id}',[EmployeeMl::class,'deleteView'])->name('manage.employe.deleteml.pam.domestic');

Route::post('ml-domestic-pam-employment-record/delete-submit',[EmployeeMl::class,'deleteSubmit'])->name('manage.employe.delete.submitml.pam.domestic');

Route::get('ml-domestic-pam-employment-record/edit/{id}',[EmployeeMl::class,'edit'])->name('manage.employe.editml.pam.domestic');

Route::post('ml-domestic-pam-employment-record/update',[EmployeeMl::class,'update'])->name('manage.employe.updateml.pam.domestic');

Route::get('ml-domestic-pam-manage-employment-record/statistics',[EmployeeMl::class,'statistics'])->name('manage.employe.statisticsml.pam.domestic');



// ml-domestic-pam-traing-record
Route::get('ml-domestic-pam-traing-record',[TraingMl::class,'index'])->name('manage.training.pam.domestic');
Route::post('ml-domestic-pam-traing-record/save-save-next',[TraingMl::class,'save_next'])->name('manage.training.save.save.nextml.pam.domestic');
Route::get('ml-domestic-pam-traing-record/add',[TraingMl::class,'add'])->name('manage.training.addml.pam.domestic');
Route::post('ml-domestic-pam-traing-record/insert',[TraingMl::class,'insert'])->name('manage.training.insertml.pam.domestic');

Route::get('ml-domestic-pam-traing-record/delete/{id}',[TraingMl::class,'deleteView'])->name('manage.training.deleteml.pam.domestic');

Route::post('ml-domestic-pam-traing-record/delete-submit',[TraingMl::class,'deleteSubmit'])->name('manage.training.delete.submitml.pam.domestic');

Route::get('ml-domestic-pam-traing-record/edit/{id}',[TraingMl::class,'edit'])->name('manage.training.editml.pam.domestic');

Route::post('ml-domestic-pam-traing-record/update',[TraingMl::class,'update'])->name('manage.training.updateml.pam.domestic');


// ml-domestic-pam-issues
Route::get('ml-domestic-pam-issues',[IssueMl::class,'index'])->name('manage.issues.ml.pam.domestic');
Route::post('ml-domestic-pam-issues/save-save-next',[IssueMl::class,'save_next'])->name('manage.issues.save.save.nextml.pam.domestic');
Route::get('ml-domestic-pam-issues/add',[IssueMl::class,'add'])->name('manage.issues.addml.pam.domestic');
Route::post('ml-domestic-pam-issues/insert',[IssueMl::class,'insert'])->name('manage.issues.insertml.pam.domestic');

Route::get('ml-domestic-pam-issues/delete/{id}',[IssueMl::class,'deleteView'])->name('manage.issues.deleteml.pam.domestic');

Route::post('ml-domestic-pam-issues/delete-submit',[IssueMl::class,'deleteSubmit'])->name('manage.issues.delete.submitml.pam.domestic');

Route::get('ml-domestic-pam-issues/edit/{id}',[IssueMl::class,'edit'])->name('manage.issues.editml.pam.domestic');

Route::post('ml-domestic-pam-issues/update',[IssueMl::class,'update'])->name('manage.issues.updateml.pam.domestic');


Route::get('ml-domestic-pam-manage-half-yearly-submission',[MlDomestic::class,'half'])->name('manage.half.yearly.submission.ml.pam.domestic');



// // ml-domestic-pam-production-manufactureing-yearly
Route::get('ml-domestic-pam-production-manufactureing-yearly',[ProductionYearly::class,'index'])->name('manage.production.manufacture.ml-pam-domestic.yearly');

Route::post('ml-domestic-pam-production-manufactureing-yearly/save-save-next',[ProductionYearly::class,'save_next'])->name('manage.production.manufacture.ml-pam-domestic.save.save.next.yearly');

Route::get('ml-domestic-pam-production-manufactureing-yearly/add',[ProductionYearly::class,'add'])->name('manage.production.manufacture.add.ml-pam-domestic.yearly');
Route::post('ml-domestic-pam-production-manufactureing-yearly/insert',[ProductionYearly::class,'insert'])->name('manage.production.manufacture.insert.ml-pam-domestic.yearly');

Route::get('ml-domestic-pam-production-manufactureing-yearly/delete/{id}',[ProductionYearly::class,'deleteView'])->name('manage.production.manufacture.delete.ml-pam-domestic.yearly');

Route::post('ml-domestic-pam-production-manufactureing-yearly/delete-submit',[ProductionYearly::class,'deleteSubmit'])->name('manage.production.manufacture.delete.submit.ml-pam-domestic.yearly');

Route::get('ml-domestic-pam-production-manufactureing-yearly/edit/{id}',[ProductionYearly::class,'edit'])->name('manage.production.manufacture.edit.ml-pam-domestic.yearly');

Route::post('ml-domestic-pam-production-manufactureing-yearly/update',[ProductionYearly::class,'update'])->name('manage.production.manufacture.update.ml-pam-domestic.yearly');


// // ml-domestic-pam-sales-domestic-yearly
Route::get('ml-domestic-pam-manage-sales-domestic-yearly',[SalesDomesticMlPamYearly::class,'index'])->name('manage.sales.domestic.ml.pam.domestic.yearly');

Route::post('ml-domestic-pam-manage-sales-domestic-yearly/save-save-next',[SalesDomesticMlPamYearly::class,'save_next'])->name('manage.sales.domestic.ml.pam.domestic.save.save.next.yearly');

Route::get('ml-domestic-pam-manage-sales-domestic-yearly/edit/{id}',[SalesDomesticMlPamYearly::class,'edit'])->name('manage.sales.domestic.edit.ml.pam.domestic.yearly');

Route::post('ml-domestic-pam-manage-sales-domestic-yearly/update',[SalesDomesticMlPamYearly::class,'update'])->name('manage.sales.domestic.update.ml.pam.domestic.yearly');


// // ml-domestic-pam-sales-export-yearly
Route::get('ml-domestic-pam-manage-sales-export-yearly',[SalesExportMlPamYearly::class,'index'])->name('manage.sales.export.ml.pam.domestic.yearly');
Route::post('ml-domestic-pam-manage-sales-export-yearly/save-save-next',[SalesExportMlPamYearly::class,'save_next'])->name('manage.sales.export.ml.pam.domestic.save.save.next.yearly');
Route::get('ml-domestic-pam-manage-sales-export-yearly/edit/{id}',[SalesExportMlPamYearly::class,'edit'])->name('manage.sales.export.edit.ml.pam.domestic.yearly');
Route::post('ml-domestic-pam-manage-sales-export-yearly/update',[SalesExportMlPamYearly::class,'update'])->name('manage.sales.export.update.ml.pam.domestic.yearly');


// // ml-domestic-pam-raw-material-yearly
Route::get('ml-domestic-pam-manage-raw-material-yearly',[RawMlPamYearly::class,'index'])->name('manage.raw.material.ml.pam.domestic.yearly');

Route::post('ml-domestic-pam-manage-raw-material-yearly/save-save-next',[RawMlPamYearly::class,'save_next'])->name('manage.raw.material.ml.pam.domestic.save.save.next.yearly');
Route::get('ml-domestic-pam-manage-raw-material-yearly/add',[RawMlPamYearly::class,'add'])->name('manage.raw.material.add.ml.pam.domestic.yearly');
Route::post('ml-domestic-pam-manage-raw-material-yearly/insert',[RawMlPamYearly::class,'insert'])->name('manage.raw.material.insert.ml.pam.domestic.yearly');

Route::get('ml-domestic-pam-manage-raw-material-yearly/delete/{id}',[RawMlPamYearly::class,'deleteView'])->name('manage.raw.material.delete.ml.pam.domestic.yearly');

Route::post('ml-domestic-pam-manage-raw-material-yearly/delete-submit',[RawMlPamYearly::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml.pam.domestic.yearly');

Route::get('ml-domestic-pam-manage-raw-material-yearly/edit/{id}',[RawMlPamYearly::class,'edit'])->name('manage.raw.material.edit.ml.pam.domestic.yearly');

Route::post('ml-domestic-pam-manage-raw-material-yearly/update',[RawMlPamYearly::class,'update'])->name('manage.raw.material.update.ml.pam.domestic.yearly');


// // ml-domestic-pam-currency-yearly
Route::get('ml-domestic-pam-currency-yearly',[CurrencyMlYearly::class,'index'])->name('manage.currency.ml.pam.domestic.yearly');

Route::post('ml-domestic-pam-currency-yearly/save-save-next',[CurrencyMlYearly::class,'save_next'])->name('manage.currency.ml.pam.domestic.save.save.next.yearly');

Route::get('ml-domestic-pam-currency-yearly/add',[CurrencyMlYearly::class,'add'])->name('manage.currency.add.ml.pam.domestic.yearly');
Route::post('ml-domestic-pam-currency-yearly/insert',[CurrencyMlYearly::class,'insert'])->name('manage.currency.insert.ml.pam.domestic.yearly');

Route::get('ml-domestic-pam-currency-yearly/delete/{id}',[CurrencyMlYearly::class,'deleteView'])->name('manage.currency.delete.ml.pam.domestic.yearly');

Route::post('ml-domestic-pam-currency-yearly/delete-submit',[CurrencyMlYearly::class,'deleteSubmit'])->name('manage.currency.delete.submit.ml.pam.domestic.yearly');

Route::get('ml-domestic-pam-currency-yearly/edit/{id}',[CurrencyMlYearly::class,'edit'])->name('manage.currency.edit.ml.pam.domestic.yearly');

Route::post('ml-domestic-pam-currency-yearly/update',[CurrencyMlYearly::class,'update'])->name('manage.currency.update.ml.pam.domestic.yearly');


// ml-domestic-pam-manage-power-consumption-yearly

Route::get('ml-domestic-pam-manage-power-consumption-yearly',[PowerMlYearly::class,'index'])->name('manage.power.ml-domestic-pam.yearly');
Route::post('ml-domestic-pam-manage-power-consumption-yearly/save-save-next',[PowerMlYearly::class,'save_next'])->name('manage.power.save.save.next.ml-domestic-pam.yearly');

Route::get('ml-domestic-pam-manage-power-consumption-yearly/edit/{id}',[PowerMlYearly::class,'edit'])->name('manage.power.edit.ml-domestic-pam.yearly');

Route::post('ml-domestic-pam-manage-power-consumption-yearly/update',[PowerMlYearly::class,'update'])->name('manage.power.update.ml-domestic-pam.yearly');


// ml-domestic-pam-employment-record-yearly
Route::get('ml-domestic-pam-employment-record-yearly',[EmployeeMlYearly::class,'index'])->name('manage.employeml.pam.domestic.yearly');
Route::post('ml-domestic-pam-employment-record-yearly/save-save-next',[EmployeeMlYearly::class,'save_next'])->name('manage.employe.save.save.nextml.pam.domestic.yearly');
Route::get('ml-domestic-pam-employment-record-yearly/add',[EmployeeMlYearly::class,'add'])->name('manage.employe.addml.pam.domestic.yearly');
Route::post('ml-domestic-pam-employment-record-yearly/insert',[EmployeeMlYearly::class,'insert'])->name('manage.employe.insertml.pam.domestic.yearly');

Route::get('ml-domestic-pam-employment-record-yearly/delete/{id}',[EmployeeMlYearly::class,'deleteView'])->name('manage.employe.deleteml.pam.domestic.yearly');

Route::post('ml-domestic-pam-employment-record-yearly/delete-submit',[EmployeeMlYearly::class,'deleteSubmit'])->name('manage.employe.delete.submitml.pam.domestic.yearly');

Route::get('ml-domestic-pam-employment-record-yearly/edit/{id}',[EmployeeMlYearly::class,'edit'])->name('manage.employe.editml.pam.domestic.yearly');

Route::post('ml-domestic-pam-employment-record-yearly/update',[EmployeeMlYearly::class,'update'])->name('manage.employe.updateml.pam.domestic.yearly');

Route::get('ml-domestic-pam-manage-employment-record-yearly/statistics',[EmployeeMlYearly::class,'statistics'])->name('manage.employe.statisticsml.pam.domestic.yearly');


// ml-domestic-pam-traing-record-yearly
Route::get('ml-domestic-pam-traing-record-yearly',[TraingMlYearly::class,'index'])->name('manage.training.pam.domestic.yearly');
Route::post('ml-domestic-pam-traing-record-yearly/save-save-next',[TraingMlYearly::class,'save_next'])->name('manage.training.save.save.nextml.pam.domestic.yearly');
Route::get('ml-domestic-pam-traing-record-yearly/add',[TraingMlYearly::class,'add'])->name('manage.training.addml.pam.domestic.yearly');
Route::post('ml-domestic-pam-traing-record-yearly/insert',[TraingMlYearly::class,'insert'])->name('manage.training.insertml.pam.domestic.yearly');

Route::get('ml-domestic-pam-traing-record-yearly/delete/{id}',[TraingMlYearly::class,'deleteView'])->name('manage.training.deleteml.pam.domestic.yearly');

Route::post('ml-domestic-pam-traing-record-yearly/delete-submit',[TraingMlYearly::class,'deleteSubmit'])->name('manage.training.delete.submitml.pam.domestic.yearly');

Route::get('ml-domestic-pam-traing-record-yearly/edit/{id}',[TraingMlYearly::class,'edit'])->name('manage.training.editml.pam.domestic.yearly');

Route::post('ml-domestic-pam-traing-record-yearly/update',[TraingMlYearly::class,'update'])->name('manage.training.updateml.pam.domestic.yearly');


// ml-domestic-pam-issues-yearly
Route::get('ml-domestic-pam-issues-yearly',[IssueMlYearly::class,'index'])->name('manage.issues.pam.domestic.yearly');
Route::post('ml-domestic-pam-issues-yearly/save-save-next',[IssueMlYearly::class,'save_next'])->name('manage.issues.save.save.nextml.pam.domestic.yearly');
Route::get('ml-domestic-pam-issues-yearly/add',[IssueMlYearly::class,'add'])->name('manage.issues.addml.pam.domestic.yearly');
Route::post('ml-domestic-pam-issues/insert',[IssueMlYearly::class,'insert'])->name('manage.issues.insertml.pam.domestic.yearly');

Route::get('ml-domestic-pam-issues-yearly/delete/{id}',[IssueMlYearly::class,'deleteView'])->name('manage.issues.deleteml.pam.domestic.yearly');

Route::post('ml-domestic-pam-issues-yearly/delete-submit',[IssueMlYearly::class,'deleteSubmit'])->name('manage.issues.delete.submitml.pam.domestic.yearly');

Route::get('ml-domestic-pam-issues-yearly/edit/{id}',[IssueMlYearly::class,'edit'])->name('manage.issues.editml.pam.domestic.yearly');

Route::post('ml-domestic-pam-issues-yearly/update',[IssueMlYearly::class,'update'])->name('manage.issues.updateml.pam.domestic.yearly');



//ml-domestic-pam-manage-financial-information
Route::get('ml-domestic-pam-manage-financial-information',[FinanceMl::class,'index'])->name('manage.finance.ml-domestic-pam-yearly');

Route::post('ml-domestic-pam-manage-financial-information/insert',[FinanceMl::class,'insert'])->name('manage.finance.insert.ml-domestic-pam-yearly');

Route::get('ml-domestic-pam-manage-financial-information/edit/{id}',[FinanceMl::class,'edit'])->name('manage.finance.edit.ml-domestic-pam-yearly');

Route::post('ml-domestic-pam-manage-financial-information/update',[FinanceMl::class,'update'])->name('manage.finance.update.ml-domestic-pam-yearly');


// ml-domestic-pam-manage-revenue

Route::get('ml-domestic-pam-manage-revenue',[RevenueMlController::class,'index'])->name('manage.revenue.ml-domestic-pam');
Route::post('ml-domestic-pam-manage-revenue/insert',[RevenueMlController::class,'insert'])->name('manage.revenue.insert.ml-domestic-pam');
Route::get('ml-domestic-pam-manage-revenue/edit/{id}',[RevenueMlController::class,'edit'])->name('manage.revenue.edit.ml-domestic-pam');
Route::post('ml-domestic-pam-manage-revenue/update',[RevenueMlController::class,'update'])->name('manage.revenue.update.ml-domestic-pam');


// ml-domestic-pam-manage-other-information
Route::get('ml-domestic-pam-manage-other-information',[OtherMl::class,'index'])->name('manage.other.ml-domestic-pam');
Route::get('ml-domestic-pam-manage-other-information/add',[OtherMl::class,'add'])->name('manage.other.add.ml-domestic-pam');
Route::post('ml-domestic-pam-manage-other-information/insert',[OtherMl::class,'insert'])->name('manage.other.insert.ml-domestic-pam');

Route::get('ml-domestic-pam-manage-other-information/edit/{id}',[OtherMl::class,'edit'])->name('manage.other.edit.ml-domestic-pam');

Route::post('ml-domestic-pam-manage-other-information/update',[OtherMl::class,'update'])->name('manage.other.update.ml-domestic-pam');


Route::get('ml-domestic-pam-manage-half-yearly-submission-yearly',[MlDomestic::class,'yearly'])->name('manage.half.yearly.submission.ml.pam.domestic.yearly');






















// // ml-pam-fdi-production-manufactureing
Route::get('ml-pam-fdi-production-manufactureing',[ProductionMlPamFdi::class,'index'])->name('manage.production.manufacture.ml-pam-fdi-production-manufactureing');

Route::post('ml-pam-fdi-production-manufactureing/save-save-next',[ProductionMlPamFdi::class,'save_next'])->name('manage.production.manufacture.ml-pam-fdi-production-manufactureing.save.save.next');

Route::get('ml-pam-fdi-production-manufactureing/add',[ProductionMlPamFdi::class,'add'])->name('manage.production.manufacture.add.ml-pam-fdi-production-manufactureing');
Route::post('ml-pam-fdi-production-manufactureing/insert',[ProductionMlPamFdi::class,'insert'])->name('manage.production.manufacture.insert.ml-pam-fdi-production-manufactureing');

Route::get('ml-pam-fdi-production-manufactureing/delete/{id}',[ProductionMlPamFdi::class,'deleteView'])->name('manage.production.manufacture.delete.ml-pam-fdi-production-manufactureing');

Route::post('ml-pam-fdi-production-manufactureing/delete-submit',[ProductionMlPamFdi::class,'deleteSubmit'])->name('manage.production.manufacture.delete.submit.ml-pam-fdi-production-manufactureing');

Route::get('ml-pam-fdi-production-manufactureing/edit/{id}',[ProductionMlPamFdi::class,'edit'])->name('manage.production.manufacture.edit.ml-pam-fdi-production-manufactureing');

Route::post('ml-pam-fdi-production-manufactureing/update',[ProductionMlPamFdi::class,'update'])->name('manage.production.manufacture.update.ml-pam-fdi-production-manufactureing');


// // ml-domestic-pam-sales-domestic
Route::get('ml-pam-fdi-manage-sales-domestic',[SalesDomesticMlPamFdi::class,'index'])->name('manage.sales.domestic.ml-pam-fdi');

Route::post('ml-pam-fdi-manage-sales-domestic/save-save-next',[SalesDomesticMlPamFdi::class,'save_next'])->name('manage.sales.domestic.ml-pam-fdi.save.save.next');

Route::get('ml-pam-fdi-pam-manage-sales-domestic/edit/{id}',[SalesDomesticMlPamFdi::class,'edit'])->name('manage.sales.domestic.edit.ml-pam-fdi');

Route::post('ml-pam-fdi-manage-sales-domestic/update',[SalesDomesticMlPamFdi::class,'update'])->name('manage.sales.domestic.update.ml-pam-fdi');




// // ml-pam-fdi-sales-export
Route::get('ml-pam-fdi-manage-sales-export',[SalesExportMlPamFdi::class,'index'])->name('manage.sales.export.ml-pam-fdi');
Route::post('ml-pam-fdi-manage-sales-export/save-save-next',[SalesExportMlPamFdi::class,'save_next'])->name('manage.sales.export.ml-pam-fdi.save.save.next');
Route::get('ml-pam-fdi-manage-sales-export/edit/{id}',[SalesExportMlPamFdi::class,'edit'])->name('manage.sales.export.edit.ml-pam-fdi');
Route::post('ml-pam-fdi-pam-manage-sales-export/update',[SalesExportMlPamFdi::class,'update'])->name('manage.sales.export.update.ml-pam-fdi');

// // ml-pam-fdi-raw-material
Route::get('ml-pam-fdi-manage-raw-material',[RawMlPamFdi::class,'index'])->name('manage.raw.material.ml-fdi-pam');

Route::post('ml-pam-fdi-manage-raw-material/save-save-next',[RawMlPamFdi::class,'save_next'])->name('manage.raw.material.ml-fdi-pam.save.save.next');
Route::get('ml-pam-fdi-manage-raw-material/add',[RawMlPamFdi::class,'add'])->name('manage.raw.material.add.ml-fdi-pam');
Route::post('ml-pam-fdi-manage-raw-material/insert',[RawMlPamFdi::class,'insert'])->name('manage.raw.material.insert.ml-fdi-pam');

Route::get('ml-pam-fdi-manage-raw-material/delete/{id}',[RawMlPamFdi::class,'deleteView'])->name('manage.raw.material.delete.ml-fdi-pam');

Route::post('ml-pam-fdi-manage-raw-material/delete-submit',[RawMlPamFdi::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml-fdi-pam');

Route::get('ml-pam-fdi-manage-raw-material/edit/{id}',[RawMlPamFdi::class,'edit'])->name('manage.raw.material.edit.ml-fdi-pam');

Route::post('ml-pam-fdi-manage-raw-material/update',[RawMlPamFdi::class,'update'])->name('manage.raw.material.update.ml-fdi-pam');



// // ml-pam-fdi-currency
Route::get('ml-pam-fdi-currency',[CurrencyMlPamFdi::class,'index'])->name('manage.currency.ml-pam-fdi');

Route::post('ml-pam-fdi-currency/save-save-next',[CurrencyMlPamFdi::class,'save_next'])->name('manage.currency.ml-pam-fdi.save.save.next');
Route::get('ml-pam-fdi-currency/add',[CurrencyMlPamFdi::class,'add'])->name('manage.currency.add.ml-pam-fdi');
Route::post('ml-pam-fdi-currency/insert',[CurrencyMlPamFdi::class,'insert'])->name('manage.currency.insert.ml-pam-fdi');

Route::get('ml-pam-fdi-currency/delete/{id}',[CurrencyMlPamFdi::class,'deleteView'])->name('manage.currency.delete.ml-pam-fdi');

Route::post('ml-pam-fdi-currency/delete-submit',[CurrencyMlPamFdi::class,'deleteSubmit'])->name('manage.currency.delete.submit.ml-pam-fdi');

Route::get('ml-pam-fdi-currency/edit/{id}',[CurrencyMlPamFdi::class,'edit'])->name('manage.currency.edit.ml-pam-fdi');

Route::post('ml-pam-fdi-currency/update',[CurrencyMlPamFdi::class,'update'])->name('manage.currency.update.ml-pam-fdi');





// // ml-pam-fdi-power
Route::get('ml-pam-fdi-power',[PowerMlPamFdi::class,'index'])->name('manage.power.ml-pam-fdi');

Route::post('ml-pam-fdi-power/save-save-next',[PowerMlPamFdi::class,'save_next'])->name('manage.power.ml-pam-fdi.save.save.next');

Route::get('ml-pam-fdi-power/edit/{id}',[PowerMlPamFdi::class,'edit'])->name('manage.power.edit.ml-pam-fdi');

Route::post('ml-pam-fdi-power/update',[PowerMlPamFdi::class,'update'])->name('manage.power.update.ml-pam-fdi');




// ml-pam-fdi-employment-record
Route::get('ml-pam-fdi-employment-record',[EmployeMlPamFdi::class,'index'])->name('manage.employe.ml-pam-fdi');
Route::post('ml-pam-fdi-employment-record/save-save-next',[EmployeMlPamFdi::class,'save_next'])->name('manage.employe.save.save.next.ml-pam-fdi');
Route::get('ml-pam-fdi-employment-record/add',[EmployeMlPamFdi::class,'add'])->name('manage.employe.add.ml-pam-fdi');
Route::post('ml-pam-fdi-employment-record/insert',[EmployeMlPamFdi::class,'insert'])->name('manage.employe.insert.ml-pam-fdi');

Route::get('ml-pam-fdi-employment-record/delete/{id}',[EmployeMlPamFdi::class,'deleteView'])->name('manage.employe.delete.ml-pam-fdi');

Route::post('ml-pam-fdi-employment-record/delete-submit',[EmployeMlPamFdi::class,'deleteSubmit'])->name('manage.employe.delete.submit.ml-pam-fdi');

Route::get('ml-pam-fdi-employment-record/edit/{id}',[EmployeMlPamFdi::class,'edit'])->name('manage.employe.edit.ml-pam-fdi');

Route::post('ml-pam-fdi-employment-record/update',[EmployeMlPamFdi::class,'update'])->name('manage.employe.update.ml-pam-fdi');




// ml-pam-fdi-traing-record
Route::get('ml-pam-fdi-traing-record',[TrainingMlPamFdi::class,'index'])->name('manage.training.ml-pam-fdi');
Route::post('ml-pam-fdi-traing-record/save-save-next',[TrainingMlPamFdi::class,'save_next'])->name('manage.training.save.save.next.ml-pam-fdi');
Route::get('ml-pam-fdi-traing-record/add',[TrainingMlPamFdi::class,'add'])->name('manage.training.add.ml-pam-fdi');
Route::post('ml-pam-fdi-traing-record/insert',[TrainingMlPamFdi::class,'insert'])->name('manage.training.insert.ml-pam-fdi');

Route::get('ml-pam-fdi-traing-record/delete/{id}',[TrainingMlPamFdi::class,'deleteView'])->name('manage.training.delete.ml-pam-fdi');

Route::post('ml-pam-fdi-traing-record/delete-submit',[TrainingMlPamFdi::class,'deleteSubmit'])->name('manage.training.delete.submit.ml-pam-fdi');

Route::get('ml-pam-fdi-traing-record/edit/{id}',[TrainingMlPamFdi::class,'edit'])->name('manage.training.edit.ml-pam-fdi');

Route::post('ml-pam-fdi-traing-record/update',[TrainingMlPamFdi::class,'update'])->name('manage.training.update.ml-pam-fdi');


// ml-pam-fdi-issues
Route::get('ml-pam-fdi-issues',[IssueMlPamFdi::class,'index'])->name('manage.issues.ml-pam-fdi');
Route::post('ml-pam-fdi-issues/save-save-next',[IssueMlPamFdi::class,'save_next'])->name('manage.issues.save.save.next.ml-pam-fdi');
Route::get('ml-pam-fdi-issues/add',[IssueMlPamFdi::class,'add'])->name('manage.issues.add.ml-pam-fdi');
Route::post('ml-pam-fdi-issues/insert',[IssueMlPamFdi::class,'insert'])->name('manage.issues.insert.ml-pam-fdi');

Route::get('ml-pam-fdi-issues/delete/{id}',[IssueMlPamFdi::class,'deleteView'])->name('manage.issues.delete.ml-pam-fdi');

Route::post('ml-pam-fdi-issues/delete-submit',[IssueMlPamFdi::class,'deleteSubmit'])->name('manage.issues.delete.submit.ml-pam-fdi');

Route::get('ml-pam-fdi-issues/edit/{id}',[IssueMlPamFdi::class,'edit'])->name('manage.issues.edit.ml-pam-fdi');

Route::post('ml-pam-fdi-issues/update',[IssueMlPamFdi::class,'update'])->name('manage.issues.update.ml-pam-fdi');



// // ml-pam-fdi-production-manufactureing-yearly
Route::get('ml-pam-fdi-production-manufactureing-yearly',[ProductionMlPamFdiYealy::class,'index'])->name('manage.production.manufacture.ml-pam-fdi-production-manufactureing.yearly');

Route::post('ml-pam-fdi-production-manufactureing-yearly/save-save-next',[ProductionMlPamFdiYealy::class,'save_next'])->name('manage.production.manufacture.ml-pam-fdi-production-manufactureing.save.save.next.yearly');

Route::get('ml-pam-fdi-production-manufactureing-yearly/add',[ProductionMlPamFdiYealy::class,'add'])->name('manage.production.manufacture.add.ml-pam-fdi-production-manufactureing.yearly');
Route::post('ml-pam-fdi-production-manufactureing-yearly/insert',[ProductionMlPamFdiYealy::class,'insert'])->name('manage.production.manufacture.insert.ml-pam-fdi-production-manufactureing.yearly');

Route::get('ml-pam-fdi-production-manufactureing-yearly/delete/{id}',[ProductionMlPamFdiYealy::class,'deleteView'])->name('manage.production.manufacture.delete.ml-pam-fdi-production-manufactureing.yearly');

Route::post('ml-pam-fdi-production-manufactureing-yearly/delete-submit',[ProductionMlPamFdiYealy::class,'deleteSubmit'])->name('manage.production.manufacture.delete.submit.ml-pam-fdi-production-manufactureing.yearly');

Route::get('ml-pam-fdi-production-manufactureing-yearly/edit/{id}',[ProductionMlPamFdiYealy::class,'edit'])->name('manage.production.manufacture.edit.ml-pam-fdi-production-manufactureing.yearly');

Route::post('ml-pam-fdi-production-manufactureing-yearly/update',[ProductionMlPamFdiYealy::class,'update'])->name('manage.production.manufacture.update.ml-pam-fdi-production-manufactureing.yearly');


// // ml-domestic-pam-sales-domestic-yearly
Route::get('ml-pam-fdi-manage-sales-domestic-yearly',[SalesDomesticMlPamFdiYearly::class,'index'])->name('manage.sales.domestic.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-manage-sales-domestic-yearly/save-save-next',[SalesDomesticMlPamFdiYearly::class,'save_next'])->name('manage.sales.domestic.ml-pam-fdi.save.save.next.yearly');

Route::get('ml-pam-fdi-pam-manage-sales-domestic-yearly/edit/{id}',[SalesDomesticMlPamFdiYearly::class,'edit'])->name('manage.sales.domestic.edit.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-manage-sales-domestic-yearly/update',[SalesDomesticMlPamFdiYearly::class,'update'])->name('manage.sales.domestic.update.ml-pam-fdi.yearly');




// // ml-pam-fdi-sales-export-yearly
Route::get('ml-pam-fdi-manage-sales-export-yearly',[SalesExportMlPamFdiYearly::class,'index'])->name('manage.sales.export.ml-pam-fdi.yearly');
Route::post('ml-pam-fdi-manage-sales-export-yearly/save-save-next',[SalesExportMlPamFdiYearly::class,'save_next'])->name('manage.sales.export.ml-pam-fdi.save.save.next.yearly');
Route::get('ml-pam-fdi-manage-sales-export-yearly/edit/{id}',[SalesExportMlPamFdiYearly::class,'edit'])->name('manage.sales.export.edit.ml-pam-fdi.yearly');
Route::post('ml-pam-fdi-pam-manage-sales-export-yearly/update',[SalesExportMlPamFdiYearly::class,'update'])->name('manage.sales.export.update.ml-pam-fdi.yearly');



// // ml-pam-fdi-raw-material-yearly
Route::get('ml-pam-fdi-manage-raw-material-yearly',[RawMlPamFdiYearly::class,'index'])->name('manage.raw.material.ml-fdi-pam.yearly');

Route::post('ml-pam-fdi-manage-raw-material-yearly/save-save-next',[RawMlPamFdiYearly::class,'save_next'])->name('manage.raw.material.ml-fdi-pam.save.save.next.yearly');
Route::get('ml-pam-fdi-manage-raw-material-yearly/add',[RawMlPamFdiYearly::class,'add'])->name('manage.raw.material.add.ml-fdi-pam.yearly');
Route::post('ml-pam-fdi-manage-raw-material-yearly/insert',[RawMlPamFdiYearly::class,'insert'])->name('manage.raw.material.insert.ml-fdi-pam.yearly');

Route::get('ml-pam-fdi-manage-raw-material-yearly/delete/{id}',[RawMlPamFdiYearly::class,'deleteView'])->name('manage.raw.material.delete.ml-fdi-pam.yearly');

Route::post('ml-pam-fdi-manage-raw-material-yearly/delete-submit',[RawMlPamFdiYearly::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml-fdi-pam.yearly');

Route::get('ml-pam-fdi-manage-raw-material-yearly/edit/{id}',[RawMlPamFdiYearly::class,'edit'])->name('manage.raw.material.edit.ml-fdi-pam.yearly');

Route::post('ml-pam-fdi-manage-raw-material-yearly/update',[RawMlPamFdiYearly::class,'update'])->name('manage.raw.material.update.ml-fdi-pam.yearly');



// // ml-pam-fdi-currency-yearly
Route::get('ml-pam-fdi-currency-yearly',[CurrencyMlPamFdiYearly::class,'index'])->name('manage.currency.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-currency-yearly/save-save-next',[CurrencyMlPamFdiYearly::class,'save_next'])->name('manage.currency.ml-pam-fdi.save.save.next.yearly');
Route::get('ml-pam-fdi-currency-yearly/add',[CurrencyMlPamFdiYearly::class,'add'])->name('manage.currency.add.ml-pam-fdi.yearly');
Route::post('ml-pam-fdi-currency-yearly/insert',[CurrencyMlPamFdiYearly::class,'insert'])->name('manage.currency.insert.ml-pam-fdi.yearly');

Route::get('ml-pam-fdi-currency-yearly/delete/{id}',[CurrencyMlPamFdiYearly::class,'deleteView'])->name('manage.currency.delete.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-currency-yearly/delete-submit',[CurrencyMlPamFdiYearly::class,'deleteSubmit'])->name('manage.currency.delete.submit.ml-pam-fdi.yearly');

Route::get('ml-pam-fdi-currency-yearly/edit/{id}',[CurrencyMlPamFdiYearly::class,'edit'])->name('manage.currency.edit.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-currency-yearly/update',[CurrencyMlPamFdiYearly::class,'update'])->name('manage.currency.update.ml-pam-fdi.yearly');


// // ml-pam-fdi-power-yearly
Route::get('ml-pam-fdi-power-yearly',[PowerMlPamFdiYearly::class,'index'])->name('manage.power.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-power-yearly/save-save-next',[PowerMlPamFdiYearly::class,'save_next'])->name('manage.power.ml-pam-fdi.save.save.next.yearly');

Route::get('ml-pam-fdi-power-yearly/edit/{id}',[PowerMlPamFdiYearly::class,'edit'])->name('manage.power.edit.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-power-yearly/update',[PowerMlPamFdiYearly::class,'update'])->name('manage.power.update.ml-pam-fdi.yearly');


// ml-pam-fdi-employment-record-yearly
Route::get('ml-pam-fdi-employment-record-yearly',[EmployeMlPamFdiYearly::class,'index'])->name('manage.employe.ml-pam-fdi.yearly');
Route::post('ml-pam-fdi-employment-record-yearly/save-save-next',[EmployeMlPamFdiYearly::class,'save_next'])->name('manage.employe.save.save.next.ml-pam-fdi.yearly');
Route::get('ml-pam-fdi-employment-record-yearly/add',[EmployeMlPamFdiYearly::class,'add'])->name('manage.employe.add.ml-pam-fdi.yearly');
Route::post('ml-pam-fdi-employment-record-yearly/insert',[EmployeMlPamFdiYearly::class,'insert'])->name('manage.employe.insert.ml-pam-fdi.yearly');

Route::get('ml-pam-fdi-employment-record-yearly/delete/{id}',[EmployeMlPamFdiYearly::class,'deleteView'])->name('manage.employe.delete.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-employment-record-yearly/delete-submit',[EmployeMlPamFdiYearly::class,'deleteSubmit'])->name('manage.employe.delete.submit.ml-pam-fdi.yearly');

Route::get('ml-pam-fdi-employment-record-yearly/edit/{id}',[EmployeMlPamFdiYearly::class,'edit'])->name('manage.employe.edit.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-employment-record-yearly/update',[EmployeMlPamFdiYearly::class,'update'])->name('manage.employe.update.ml-pam-fdi.yearly');




// ml-pam-fdi-traing-record-yearly
Route::get('ml-pam-fdi-traing-record-yearly',[TrainingMlPamFdiYearly::class,'index'])->name('manage.training.ml-pam-fdi.yearly');
Route::post('ml-pam-fdi-traing-record-yearly/save-save-next',[TrainingMlPamFdiYearly::class,'save_next'])->name('manage.training.save.save.next.ml-pam-fdi.yearly');
Route::get('ml-pam-fdi-traing-record-yearly/add',[TrainingMlPamFdiYearly::class,'add'])->name('manage.training.add.ml-pam-fdi.yearly');
Route::post('ml-pam-fdi-traing-record-yearly/insert',[TrainingMlPamFdiYearly::class,'insert'])->name('manage.training.insert.ml-pam-fdi.yearly');

Route::get('ml-pam-fdi-traing-record-yearly/delete/{id}',[TrainingMlPamFdiYearly::class,'deleteView'])->name('manage.training.delete.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-traing-record-yearly/delete-submit',[TrainingMlPamFdiYearly::class,'deleteSubmit'])->name('manage.training.delete.submit.ml-pam-fdi.yearly');

Route::get('ml-pam-fdi-traing-record-yearly/edit/{id}',[TrainingMlPamFdiYearly::class,'edit'])->name('manage.training.edit.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-traing-record-yearly/update',[TrainingMlPamFdiYearly::class,'update'])->name('manage.training.update.ml-pam-fdi.yearly');


// ml-pam-fdi-issues-yearly
Route::get('ml-pam-fdi-issues-yearly',[IssueMlPamFdiYearly::class,'index'])->name('manage.issues.ml-pam-fdi.yearly');
Route::post('ml-pam-fdi-issues-yearly/save-save-next',[IssueMlPamFdiYearly::class,'save_next'])->name('manage.issues.save.save.next.ml-pam-fdi.yearly');
Route::get('ml-pam-fdi-issues-yearly/add',[IssueMlPamFdiYearly::class,'add'])->name('manage.issues.add.ml-pam-fdi.yearly');
Route::post('ml-pam-fdi-issues-yearly/insert',[IssueMlPamFdiYearly::class,'insert'])->name('manage.issues.insert.ml-pam-fdi.yearly');

Route::get('ml-pam-fdi-issues-yearly/delete/{id}',[IssueMlPamFdiYearly::class,'deleteView'])->name('manage.issues.delete.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-issues-yearly/delete-submit',[IssueMlPamFdiYearly::class,'deleteSubmit'])->name('manage.issues.delete.submit.ml-pam-fdi.yearly');

Route::get('ml-pam-fdi-issues-yearly/edit/{id}',[IssueMlPamFdiYearly::class,'edit'])->name('manage.issues.edit.ml-pam-fdi.yearly');

Route::post('ml-pam-fdi-issues-yearly/update',[IssueMlPamFdiYearly::class,'update'])->name('manage.issues.update.ml-pam-fdi.yearly');


// ml-pam-fdi-manage-financial-information
Route::get('ml-pam-fdi-manage-financial-information',[FinanceMlPamFdi::class,'index'])->name('manage.finance.ml-pam-fdi-yearly');
Route::get('ml-pam-fdi-manage-financial-information/add',[FinanceMlPamFdi::class,'add'])->name('manage.finance.add.ml-pam-fdi-yearly');
Route::post('manage-financial-information/insert',[FinanceMlPamFdi::class,'insert'])->name('manage.finance.insert.ml-pam-fdi-yearly');

Route::get('ml-pam-fdi-manage-financial-information/delete/{id}',[FinanceMlPamFdi::class,'deleteView'])->name('manage.finance.delete.ml-pam-fdi-yearly');

Route::post('ml-pam-fdi-manage-financial-information/delete-submit',[FinanceMlPamFdi::class,'deleteSubmit'])->name('manage.finance.delete.submit.ml-pam-fdi-yearly');

Route::get('ml-pam-fdi-manage-financial-information/edit/{id}',[FinanceMlPamFdi::class,'edit'])->name('manage.finance.edit.ml-pam-fdi-yearly');

Route::post('ml-pam-fdi-manage-financial-information/update',[FinanceMlPamFdi::class,'update'])->name('manage.finance.update.ml-pam-fdi-yearly');


// ml-pam-fdi-manage-revenue
Route::get('ml-pam-fdi-manage-revenue',[RevenueMlPamFdi::class,'index'])->name('manage.revenue.ml-pam-fdi-yearly');
Route::get('ml-pam-fdi-manage-revenue/add',[RevenueMlPamFdi::class,'add'])->name('manage.revenue.add.ml-pam-fdi-yearly');
Route::post('manage-revenue/insert',[RevenueMlPamFdi::class,'insert'])->name('manage.revenue.insert.ml-pam-fdi-yearly');

Route::get('ml-pam-fdi-manage-revenue/delete/{id}',[RevenueMlPamFdi::class,'deleteView'])->name('manage.revenue.delete.ml-pam-fdi-yearly');

Route::post('ml-pam-fdi-manage-revenue/delete-submit',[RevenueMlPamFdi::class,'deleteSubmit'])->name('manage.revenue.delete.submit.ml-pam-fdi-yearly');

Route::get('ml-pam-fdi-manage-revenue/edit/{id}',[RevenueMlPamFdi::class,'edit'])->name('manage.revenue.edit.ml-pam-fdi-yearly');

Route::post('ml-pam-fdi-manage-revenue/update',[RevenueMlPamFdi::class,'update'])->name('manage.revenue.update.ml-pam-fdi-yearly');


// manage-other-information
Route::get('ml-pam-fdi-manage-other-information',[MlOther::class,'index'])->name('manage.other.ml-pam-fdi');
Route::get('ml-pam-fdi-manage-other-information/add',[MlOther::class,'add'])->name('manage.other.add.ml-pam-fdi');
Route::post('ml-pam-fdi-manage-other-information/insert',[MlOther::class,'insert'])->name('manage.other.insert.ml-pam-fdi');

Route::get('ml-pam-fdi-manage-other-information/delete/{id}',[MlOther::class,'deleteView'])->name('manage.other.delete.ml-pam-fdi');

Route::post('ml-pam-fdi-manage-other-information/delete-submit',[MlOther::class,'deleteSubmit'])->name('manage.other.delete.submit.ml-pam-fdi');

Route::get('ml-pam-fdi-manage-other-information/edit/{id}',[MlOther::class,'edit'])->name('manage.other.edit.ml-pam-fdis');

Route::post('ml-pam-fdi-manage-other-information/update',[MlOther::class,'update'])->name('manage.other.update.ml-pam-fdi');











// manage-production-manufacture-csi-pam-fdi

Route::get('manage-production-manufacture-csi-pam-fdi',[ProductionCsiPamFdi::class,'index'])->name('manage.production.manufacture.csi-fdi-pam');

Route::post('manage-production-manufacture-csi-pam-fdi/save-save-next',[ProductionCsiPamFdi::class,'save_next'])->name('manage.production.manufacture.csi-fdi-pam.save.save.next');

Route::get('manage-production-manufacture-csi-pam-fdi/add',[ProductionCsiPamFdi::class,'add'])->name('manage.production.manufacture.add.csi-fdi-pam');
Route::post('manage-production-manufacture-csi-pam-fdi/insert',[ProductionCsiPamFdi::class,'insert'])->name('manage.production.manufacture.insert.csi-fdi-pam');

Route::get('manage-production-manufacture-csi-pam-fdi/delete/{id}',[ProductionCsiPamFdi::class,'deleteView'])->name('manage.production.manufacture.delete.csi-fdi-pam');

Route::post('manage-production-manufacture-csi-pam-fdi/delete-submit',[ProductionCsiPamFdi::class,'deleteSubmit'])->name('manage.production.manufacture.delete.submit.csi-fdi-pam');

Route::get('manage-production-manufacture-csi-pam-fdi/edit/{id}',[ProductionCsiPamFdi::class,'edit'])->name('manage.production.manufacture.edit.csi-fdi-pam');

Route::post('manage-production-manufacture-csi-pam-fdi/update',[ProductionCsiPamFdi::class,'update'])->name('manage.production.manufacture.update.csi-fdi-pam');


// sales-export-csi-pam-fdi
Route::get('sales-export-csi-pam-fdi',[SalesCsiPamFdi::class,'index'])->name('manage.sales.export.csi-fdi-pam');
Route::post('sales-export-csi-pam-fdi/save-save-next',[SalesCsiPamFdi::class,'save_next'])->name('manage.sales.export.save.save.next.csi-fdi-pam');
Route::get('sales-export-csi-pam-fdi/edit/{id}',[SalesCsiPamFdi::class,'edit'])->name('manage.sales.export.edit.csi-fdi-pam');

Route::post('sales-export-csi-pam-fdi/update',[SalesCsiPamFdi::class,'update'])->name('manage.sales.export.update.csi-fdi-pam');

// // raw-material-csi-pam-fdi
Route::get('raw-material-csi-pam-fdi',[RawCsiPamFdi::class,'index'])->name('manage.raw.material.csi-pam-fdi');

Route::post('raw-material-csi-pam-fdi/save-save-next',[RawCsiPamFdi::class,'save_next'])->name('manage.raw.material.csi-pam-fdi.save.save.next.yearly');
Route::get('raw-material-csi-pam-fdi/add',[RawCsiPamFdi::class,'add'])->name('manage.raw.material.add.csi-pam-fdi');
Route::post('raw-material-csi-pam-fdi/insert',[RawCsiPamFdi::class,'insert'])->name('manage.raw.material.insert.csi-pam-fdi');

Route::get('raw-material-csi-pam-fdi/delete/{id}',[RawCsiPamFdi::class,'deleteView'])->name('manage.raw.material.delete.csi-pam-fdi');

Route::post('raw-material-csi-pam-fdi/delete-submit',[RawCsiPamFdi::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.csi-pam-fdi');

Route::get('raw-material-csi-pam-fdi/edit/{id}',[RawCsiPamFdi::class,'edit'])->name('manage.raw.material.edit.csi-pam-fdi');

Route::post('raw-material-csi-pam-fdi/update',[RawCsiPamFdi::class,'update'])->name('manage.raw.material.update.csi-pam-fdi');


// // manage-cost-details-csi-pam-fdi

Route::get('manage-cost-details-csi-pam-fdi',[CostCsiPamFdi::class,'index'])->name('manage.cost.csi-pam-fdi');
Route::post('manage-cost-details-csi-pam-fdi/save-save-next',[CostCsiPamFdi::class,'save_next'])->name('manage.cost.save.save.next.csi-pam-fdi');
Route::get('manage-cost-details-csi-pam-fdi/edit/{id}',[CostCsiPamFdi::class,'edit'])->name('manage.cost.edit.csi-pam-fdi');

Route::post('manage-cost-details-csi-pam-fdi/update',[CostCsiPamFdi::class,'update'])->name('manage.cost.update.csi-pam-fdi');

// // manage-other-cost-details-csi-pam-fdi

Route::get('manage-other-cost-details-csi-pam-fdi',[OtherCostCsiPamFdi::class,'index'])->name('manage.other.cost.other.-csi-pam-fdi');
Route::post('manage-other-cost-details-csi-pam-fdi/save-save-next',[OtherCostCsiPamFdi::class,'save_next'])->name('manage.other.cost.other.save.save.next.-csi-pam-fdi');
Route::get('manage-other-cost-details-csi-pam-fdi/edit/{id}',[OtherCostCsiPamFdi::class,'edit'])->name('manage.other.cost.other.edit.-csi-pam-fdi');

Route::post('manage-other-cost-details-csi-pam-fdi/update',[OtherCostCsiPamFdi::class,'update'])->name('manage.other.cost.other.update.-csi-pam-fdi');


// manage-employment-record-csi-pam-fdi
Route::get('manage-employment-record-csi-pam-fdi',[EmployeCsiPamFdi::class,'index'])->name('manage.employe.manage-employment-record-csi-pam-fdi');
Route::post('manage-employment-record-csi-pam-fdi/save-save-next',[EmployeCsiPamFdi::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-csi-pam-fdi');
Route::get('manage-employment-record-csi-pam-fdi/add',[EmployeCsiPamFdi::class,'add'])->name('manage.employe.add.manage-employment-record-csi-pam-fdi');
Route::post('manage-employment-record-csi-pam-fdi/insert',[EmployeCsiPamFdi::class,'insert'])->name('manage.employe.insert.manage-employment-record-csi-pam-fdi');

Route::get('manage-employment-record-csi-pam-fdi/delete/{id}',[EmployeCsiPamFdi::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-csi-pam-fdi');

Route::post('manage-employment-record-csi-pam-fdi/delete-submit',[EmployeCsiPamFdi::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-csi-pam-fdi');

Route::get('manage-employment-record-csi-pam-fdi/edit/{id}',[EmployeCsiPamFdi::class,'edit'])->name('manage.employe.edit.manage-employment-record-csi-pam-fdi');

Route::post('manage-employment-record-csi-pam-fdi/update',[EmployeCsiPamFdi::class,'update'])->name('manage.employe.update.manage-employment-record-csi-pam-fdi');
Route::get('manage-employment-record-csi-pam-fdi/statistics',[EmployeCsiPamFdi::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-csi-pam-fdi');


// manage-training-record-csi-pam-fdi
Route::get('manage-training-record-csi-pam-fdi',[TrainingCsiPamFdi::class,'index'])->name('manage.training-csi-pam-fdi');
Route::post('manage-training-record-csi-pam-fdi/save-save-next',[TrainingCsiPamFdi::class,'save_next'])->name('manage.training.save.save.next-csi-pam-fdi');

Route::get('manage-training-record-csi-pam-fdi/add',[TrainingCsiPamFdi::class,'add'])->name('manage.training.add-csi-pam-fdi');
Route::post('manage-training-record-csi-pam-fdi/insert',[TrainingCsiPamFdi::class,'insert'])->name('manage.training.insert-csi-pam-fdi');

Route::get('manage-training-record-csi-pam-fdi/delete/{id}',[TrainingCsiPamFdi::class,'deleteView'])->name('manage.training.delete-csi-pam-fdi');

Route::post('manage-training-record-csi-pam-fdi/delete-submit',[TrainingCsiPamFdi::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-pam-fdi');

Route::get('manage-training-record-csi-pam-fdi/edit/{id}',[TrainingCsiPamFdi::class,'edit'])->name('manage.training.edit-csi-pam-fdi');

Route::post('manage-training-record-csi-pam-fdi/update',[TrainingCsiPamFdi::class,'update'])->name('manage.training.update-csi-pam-fdi');


// manage-investment-csi-pam-fdi

Route::get('manage-investment-csi-pam-fdi',[TrainingCsiPamFdi::class,'index'])->name('manage.training-csi-pam-fdi');
Route::post('manage-investment-csi-pam-fdi/save-save-next',[TrainingCsiPamFdi::class,'save_next'])->name('manage.training.save.save.next-csi-pam-fdi');

Route::get('manage-investment-csi-pam-fdi/add',[TrainingCsiPamFdi::class,'add'])->name('manage.training.add-csi-pam-fdi');
Route::post('manage-investment-csi-pam-fdi/insert',[TrainingCsiPamFdi::class,'insert'])->name('manage.training.insert-csi-pam-fdi');

Route::get('manage-investment-csi-pam-fdi/delete/{id}',[TrainingCsiPamFdi::class,'deleteView'])->name('manage.training.delete-csi-pam-fdi');

Route::post('manage-investment-csi-pam-fdi/delete-submit',[TrainingCsiPamFdi::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-pam-fdi');

Route::get('manage-investment-csi-pam-fdi/edit/{id}',[TrainingCsiPamFdi::class,'edit'])->name('manage.training.edit-csi-pam-fdi');

Route::post('manage-investment-csi-pam-fdi/update',[TrainingCsiPamFdi::class,'update'])->name('manage.training.update-csi-pam-fdi');














// manage-production-manufacture-csi-pam-fdi-yearly

Route::get('manage-production-manufacture-csi-pam-fdi-yearly',[ProductionCsiPamFdiYearly::class,'index'])->name('manage.production.manufacture.csi-fdi-pam.yearly');

Route::post('manage-production-manufacture-csi-pam-fdi-yearly/save-save-next',[ProductionCsiPamFdiYearly::class,'save_next'])->name('manage.production.manufacture.csi-fdi-pam.save.save.next.yearly');

Route::get('manage-production-manufacture-csi-pam-fdi-yearly/add',[ProductionCsiPamFdiYearly::class,'add'])->name('manage.production.manufacture.add.csi-fdi-pam.yearly');
Route::post('manage-production-manufacture-csi-pam-fdi-yearly/insert',[ProductionCsiPamFdiYearly::class,'insert'])->name('manage.production.manufacture.insert.csi-fdi-pam.yearly');

Route::get('manage-production-manufacture-csi-pam-fdi-yearly/delete/{id}',[ProductionCsiPamFdiYearly::class,'deleteView'])->name('manage.production.manufacture.delete.csi-fdi-pam.yearly');

Route::post('manage-production-manufacture-csi-pam-fdi-yearly/delete-submit',[ProductionCsiPamFdiYearly::class,'deleteSubmit'])->name('manage.production.manufacture.delete.submit.csi-fdi-pam.yearly');

Route::get('manage-production-manufacture-csi-pam-fdi-yearly/edit/{id}',[ProductionCsiPamFdiYearly::class,'edit'])->name('manage.production.manufacture.edit.csi-fdi-pam.yearly');

Route::post('manage-production-manufacture-csi-pam-fdi-yearly/update',[ProductionCsiPamFdiYearly::class,'update'])->name('manage.production.manufacture.update.csi-fdi-pam.yearly');

// sales-export-csi-pam-fdi-yearly
Route::get('sales-export-csi-pam-fdi-yearly',[SalesCsiPamFdiYearly::class,'index'])->name('manage.sales.export.csi-fdi-pam.yearly');
Route::post('sales-export-csi-pam-fdi-yearly/save-save-next',[SalesCsiPamFdiYearly::class,'save_next'])->name('manage.sales.export.save.save.next.csi-fdi-pam.yearly');
Route::get('sales-export-csi-pam-fdi-yearly/edit/{id}',[SalesCsiPamFdiYearly::class,'edit'])->name('manage.sales.export.edit.csi-fdi-pam.yearly');

Route::post('sales-export-csi-pam-fdi-yearly/update',[SalesCsiPamFdiYearly::class,'update'])->name('manage.sales.export.update.csi-fdi-pam.yearly');


// // raw-material-csi-pam-fdi-yearly
Route::get('raw-material-csi-pam-fdi-yearly',[RawCsiPamFdiYearly::class,'index'])->name('manage.raw.material.csi-pam-fdi.yearly');

Route::post('raw-material-csi-pam-fdi-yearly/save-save-next',[RawCsiPamFdiYearly::class,'save_next'])->name('manage.raw.material.csi-pam-fdi.save.save.next.yearly.yearly');
Route::get('raw-material-csi-pam-fdi-yearly/add',[RawCsiPamFdiYearly::class,'add'])->name('manage.raw.material.add.csi-pam-fdi.yearly');
Route::post('raw-material-csi-pam-fdi-yearly/insert',[RawCsiPamFdiYearly::class,'insert'])->name('manage.raw.material.insert.csi-pam-fdi.yearly');

Route::get('raw-material-csi-pam-fdi-yearly/delete/{id}',[RawCsiPamFdiYearly::class,'deleteView'])->name('manage.raw.material.delete.csi-pam-fdi.yearly');

Route::post('raw-material-csi-pam-fdi-yearly/delete-submit',[RawCsiPamFdiYearly::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.csi-pam-fdi.yearly');

Route::get('raw-material-csi-pam-fdi-yearly/edit/{id}',[RawCsiPamFdiYearly::class,'edit'])->name('manage.raw.material.edit.csi-pam-fdi.yearly');

Route::post('raw-material-csi-pam-fdi-yearly/update',[RawCsiPamFdiYearly::class,'update'])->name('manage.raw.material.update.csi-pam-fdi.yearly');

// // manage-cost-details-csi-pam-fdi

Route::get('manage-cost-details-csi-pam-fdi-yearly',[CostCsiPamFdiYearly::class,'index'])->name('manage.cost.csi-pam-fdi.yearly');
Route::post('manage-cost-details-csi-pam-fdi-yearly/save-save-next',[CostCsiPamFdiYearly::class,'save_next'])->name('manage.cost.save.save.next.csi-pam-fdi.yearly');
Route::get('manage-cost-details-csi-pam-fdi-yearly/edit/{id}',[CostCsiPamFdiYearly::class,'edit'])->name('manage.cost.edit.csi-pam-fdi.yearly');

Route::post('manage-cost-details-csi-pam-fdi-yearly/update',[CostCsiPamFdiYearly::class,'update'])->name('manage.cost.update.csi-pam-fdi.yearly');

// // manage-other-cost-details-csi-pam-fdi-yearly

Route::get('manage-other-cost-details-csi-pam-fdi-yearly',[OtherCostCsiPamFdiYearly::class,'index'])->name('manage.other.cost.other.-csi-pam-fdi.yearly');
Route::post('manage-other-cost-details-csi-pam-fdi-yearly/save-save-next',[OtherCostCsiPamFdiYearly::class,'save_next'])->name('manage.other.cost.other.save.save.next.-csi-pam-fdi.yearly');
Route::get('manage-other-cost-details-csi-pam-fdi-yearly/edit/{id}',[OtherCostCsiPamFdiYearly::class,'edit'])->name('manage.other.cost.other.edit.-csi-pam-fdi.yearly');

Route::post('manage-other-cost-details-csi-pam-fdi-yearly/update',[OtherCostCsiPamFdiYearly::class,'update'])->name('manage.other.cost.other.update.-csi-pam-fdi.yearly');


// manage-employment-record-csi-pam-fdi-yearly
Route::get('manage-employment-record-csi-pam-fdi-yearly',[EmployeCsiPamFdiYearly::class,'index'])->name('manage.employe.manage-employment-record-csi-pam-fdi-yearly');
Route::post('manage-employment-record-csi-pam-fdi-yearly/save-save-next',[EmployeCsiPamFdiYearly::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-csi-pam-fdi-yearly');
Route::get('manage-employment-record-csi-pam-fdi-yearly/add',[EmployeCsiPamFdiYearly::class,'add'])->name('manage.employe.add.manage-employment-record-csi-pam-fdi-yearly');
Route::post('manage-employment-record-csi-pam-fdi-yearly/insert',[EmployeCsiPamFdiYearly::class,'insert'])->name('manage.employe.insert.manage-employment-record-csi-pam-fdi-yearly');

Route::get('manage-employment-record-csi-pam-fdi-yearly/delete/{id}',[EmployeCsiPamFdiYearly::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-csi-pam-fdi-yearly');

Route::post('manage-employment-record-csi-pam-fdi-yearly/delete-submit',[EmployeCsiPamFdiYearly::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-csi-pam-fdi-yearly');

Route::get('manage-employment-record-csi-pam-fdi-yearly/edit/{id}',[EmployeCsiPamFdiYearly::class,'edit'])->name('manage.employe.edit.manage-employment-record-csi-pam-fdi-yearly');

Route::post('manage-employment-record-csi-pam-fdi-yearly/update',[EmployeCsiPamFdiYearly::class,'update'])->name('manage.employe.update.manage-employment-record-csi-pam-fdi-yearly');
Route::get('manage-employment-record-csi-pam-fdi-yearly/statistics',[EmployeCsiPamFdiYearly::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-csi-pam-fdi-yearly');

// manage-training-record-csi-pam-fdi-yearly
Route::get('manage-training-record-csi-pam-fdi-yearly',[TrainingCsiPamFdiYearly::class,'index'])->name('manage.training-csi-pam-fdi.yearly');
Route::post('manage-training-record-csi-pam-fdi-yearly/save-save-next',[TrainingCsiPamFdiYearly::class,'save_next'])->name('manage.training.save.save.next-csi-pam-fdi.yearly');

Route::get('manage-training-record-csi-pam-fdi-yearly/add',[TrainingCsiPamFdiYearly::class,'add'])->name('manage.training.add-csi-pam-fdi.yearly');
Route::post('manage-training-record-csi-pam-fdi-yearly/insert',[TrainingCsiPamFdiYearly::class,'insert'])->name('manage.training.insert-csi-pam-fdi.yearly');

Route::get('manage-training-record-csi-pam-fdi-yearly/delete/{id}',[TrainingCsiPamFdiYearly::class,'deleteView'])->name('manage.training.delete-csi-pam-fdi.yearly');

Route::post('manage-training-record-csi-pam-fdi-yearly/delete-submit',[TrainingCsiPamFdiYearly::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-pam-fdi.yearly');

Route::get('manage-training-record-csi-pam-fdi-yearly/edit/{id}',[TrainingCsiPamFdiYearly::class,'edit'])->name('manage.training.edit-csi-pam-fdi.yearly');

Route::post('manage-training-record-csi-pam-fdi-yearly/update',[TrainingCsiPamFdiYearly::class,'update'])->name('manage.training.update-csi-pam-fdi.yearly');


// manage-financial-information-csi-pam-fdi-yearly
Route::get('manage-financial-information-csi-pam-fdi-yearly',[FinanceCsiPamFdiYearly::class,'index'])->name('manage.financemanage-financial-information-csi-pam-fdi-yearly');

Route::post('manage-financial-information-csi-pam-fdi-yearly/save-next',[FinanceCsiPamFdiYearly::class,'insert'])->name('manage.finance.insert.csi.pammanage-financial-information-csi-pam-fdi-yearly');

Route::get('manage-financial-information-csi-pam-fdi-yearly/edit/{id}',[FinanceCsiPamFdiYearly::class,'edit'])->name('manage.finance.editmanage-financial-information-csi-pam-fdi-yearly');

Route::post('manage-financial-information-csi-pam-fdi-yearly/update',[FinanceCsiPamFdiYearly::class,'update'])->name('manage.finance.updatemanage-financial-information-csi-pam-fdi-yearly');


// manage-other-information-csi-pam-fdi-yearly
Route::get('manage-other-information-csi-pam-fdi-yearly',[OtherCsiPamFdiYearly::class,'index'])->name('manage.other-csi-pam-fdi-yearly');

Route::post('manage-other-information-csi-pam-fdi-yearly/insert',[OtherCsiPamFdiYearly::class,'insert'])->name('manage.other.insert-csi-pam-fdi-yearly');
Route::get('manage-other-information-csi-pam-fdi-yearly/edit/{id}',[OtherCsiPamFdiYearly::class,'edit'])->name('manage.other.edit-csi-pam-fdi-yearly');
Route::post('manage-other-information-csi-pam-fdi-yearly/update',[OtherCsiPamFdiYearly::class,'update'])->name('manage.other.update-csi-pam-fdi-yearly');


// manage-revenue-csi-pam-fdi-yearly

Route::get('manage-revenue-csi-pam-fdi-yearly',[RevenueCsiPamFdiYearly::class,'index'])->name('manage.revenue.manage-revenue-csi-pam-fdi-yearly');
Route::post('manage-revenue-csi-pam-fdi-yearly/insert',[RevenueCsiPamFdiYearly::class,'insert'])->name('manage.revenue.insert.manage-revenue-csi-pam-fdi-yearly');
Route::get('manage-revenue-csi-pam-fdi-yearly/edit/{id}',[RevenueCsiPamFdiYearly::class,'edit'])->name('manage.revenue.edit.manage-revenue-csi-pam-fdi-yearly');
Route::post('manage-revenue-csi-pam-fdi-yearly/update',[RevenueCsiPamFdiYearly::class,'update'])->name('manage.revenue.update.manage-revenue-csi-pam-fdi-yearly');






// manage-service-csi-service
 


// manage-service-csi-service

Route::get('manage-service-csi-service',[ProductionCsiService::class,'index'])->name('manage.service.manufacture.csi-service');

Route::post('manage-service-csi-service/save-save-next',[ProductionCsiService::class,'save_next'])->name('manage.service.manufacture.csi-service.save.save.next');

Route::get('manage-service-csi-service/add',[ProductionCsiService::class,'add'])->name('manage.service.manufacture.add.csi-service');
Route::post('manage-service-csi-service/insert',[ProductionCsiService::class,'insert'])->name('manage.service.manufacture.insert.csi-service');

Route::get('manage-service-csi-service/delete/{id}',[ProductionCsiService::class,'deleteView'])->name('manage.service.manufacture.delete.csi-service');

Route::post('manage-service-csi-service/delete-submit',[ProductionCsiService::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.csi-service');

Route::get('manage-service-csi-service/edit/{id}',[ProductionCsiService::class,'edit'])->name('manage.service.manufacture.edit.csi-service');

Route::post('manage-service-csi-service/update',[ProductionCsiService::class,'update'])->name('manage.service.manufacture.update.csi-service');


// sales-market-csi
Route::get('sales-market-csi-service',[SalesCsiService::class,'index'])->name('manage.sales.export.csi-service');
Route::post('sales-market-csi-service/save-save-next',[SalesCsiService::class,'save_next'])->name('manage.sales.export.save.save.next.csi-service');
Route::get('sales-market-csi-service/edit/{id}',[SalesCsiService::class,'edit'])->name('manage.sales.export.edit.csi-service');

Route::post('sales-market-csi-service/update',[SalesCsiService::class,'update'])->name('manage.sales.export.update.csi-service');


// // raw-material-csi-service
Route::get('raw-material-csi-service',[RawCsiService::class,'index'])->name('manage.raw.material.csi-service');

Route::post('raw-material-csi-service/save-save-next',[RawCsiService::class,'save_next'])->name('manage.raw.material.csi-service.save.save.next.yearly');
Route::get('raw-material-csi-service/add',[RawCsiService::class,'add'])->name('manage.raw.material.add.csi-service');
Route::post('raw-material-csi-service/insert',[RawCsiService::class,'insert'])->name('manage.raw.material.insert.csi-service');

Route::get('raw-material-csi-service/delete/{id}',[RawCsiService::class,'deleteView'])->name('manage.raw.material.delete.csi-service');

Route::post('raw-material-csi-service/delete-submit',[RawCsiService::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.csi-service');

Route::get('raw-material-csi-service/edit/{id}',[RawCsiService::class,'edit'])->name('manage.raw.material.edit.csi-service');

Route::post('raw-material-csi-service/update',[RawCsiService::class,'update'])->name('manage.raw.material.update.csi-service');


// // manage-cost-details-csi-service

Route::get('manage-cost-details-csi-service',[CostCsiService::class,'index'])->name('manage.cost.csi-service');
Route::post('manage-cost-details-csi-service/save-save-next',[CostCsiService::class,'save_next'])->name('manage.cost.save.save.next.csi-service');
Route::get('manage-cost-details-csi-service/edit/{id}',[CostCsiService::class,'edit'])->name('manage.cost.edit.csi-service');

Route::post('manage-cost-details-csi-service/update',[CostCsiService::class,'update'])->name('manage.cost.update.csi-service');

// // manage-other-cost-details-csi-service

Route::get('manage-other-cost-details-csi-service',[OtherCostCsiService::class,'index'])->name('manage.other.cost.other.csi-service');
Route::post('manage-other-cost-details-csi-service/save-save-next',[OtherCostCsiService::class,'save_next'])->name('manage.other.cost.other.save.save.next.csi-service');
Route::get('manage-other-cost-details-csi-service/edit/{id}',[OtherCostCsiService::class,'edit'])->name('manage.other.cost.other.edit.csi-service');

Route::post('manage-other-cost-details-csi-service/update',[OtherCostCsiService::class,'update'])->name('manage.other.cost.other.update.csi-service');



// manage-employment-record-csi-service
Route::get('manage-employment-record-csi-service',[EmployeCsiService::class,'index'])->name('manage.employe.manage-employment-record-csi-service');
Route::post('manage-employment-record-csi-service/save-save-next',[EmployeCsiService::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-csi-service');
Route::get('manage-employment-record-csi-service/add',[EmployeCsiService::class,'add'])->name('manage.employe.add.manage-employment-record-csi-service');
Route::post('manage-employment-record-csi-service/insert',[EmployeCsiService::class,'insert'])->name('manage.employe.insert.manage-employment-record-csi-service');

Route::get('manage-employment-record-csi-service/delete/{id}',[EmployeCsiService::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-csi-service');

Route::post('manage-employment-record-csi-service/delete-submit',[EmployeCsiService::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-csi-service');

Route::get('manage-employment-record-csi-service/edit/{id}',[EmployeCsiService::class,'edit'])->name('manage.employe.edit.manage-employment-record-csi-service');

Route::post('manage-employment-record-csi-service/update',[EmployeCsiService::class,'update'])->name('manage.employe.update.manage-employment-record-csi-service');
Route::get('manage-employment-record-csi-service/statistics',[EmployeCsiService::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-csi-service');


// manage-training-record-csi-service
Route::get('manage-training-record-csi-service',[TrainingCsiService::class,'index'])->name('manage.training-csi-service');
Route::post('manage-training-record-csi-service/save-save-next',[TrainingCsiService::class,'save_next'])->name('manage.training.save.save.next-csi-service');

Route::get('manage-training-record-csi-service/add',[TrainingCsiService::class,'add'])->name('manage.training.add-csi-service');
Route::post('manage-training-record-csi-service/insert',[TrainingCsiService::class,'insert'])->name('manage.training.insert-csi-service');

Route::get('manage-training-record-csi-service/delete/{id}',[TrainingCsiService::class,'deleteView'])->name('manage.training.delete-csi-service');

Route::post('manage-training-record-csi-service/delete-submit',[TrainingCsiService::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-service');

Route::get('manage-training-record-csi-service/edit/{id}',[TrainingCsiService::class,'edit'])->name('manage.training.edit-csi-service');

Route::post('manage-training-record-csi-service/update',[TrainingCsiService::class,'update'])->name('manage.training.update-csi-service');







// manage-service-csi-service-yearly

Route::get('manage-service-csi-service-yearly',[ProductionServiceYearly::class,'index'])->name('manage.service.manufacture.csi-service.yearly');

Route::post('manage-service-csi-service-yearly/save-save-next',[ProductionServiceYearly::class,'save_next'])->name('manage.service.manufacture.csi-service.save.save.next.yearly');

Route::get('manage-service-csi-service-yearly/add',[ProductionServiceYearly::class,'add'])->name('manage.service.manufacture.add.csi-service.yearly');
Route::post('manage-service-csi-service-yearly/insert',[ProductionServiceYearly::class,'insert'])->name('manage.service.manufacture.insert.csi-service.yearly');

Route::get('manage-service-csi-service-yearly/delete/{id}',[ProductionServiceYearly::class,'deleteView'])->name('manage.service.manufacture.delete.csi-service.yearly');

Route::post('manage-service-csi-service-yearly/delete-submit',[ProductionServiceYearly::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.csi-service.yearly');

Route::get('manage-service-csi-service-yearly/edit/{id}',[ProductionServiceYearly::class,'edit'])->name('manage.service.manufacture.edit.csi-service.yearly');

Route::post('manage-service-csi-service-yearly/update',[ProductionServiceYearly::class,'update'])->name('manage.service.manufacture.update.csi-service.yearly');


// sales-market-csi-yearly
Route::get('sales-market-csi-yearly',[SalesCsiServiceYearly::class,'index'])->name('manage.sales.export.csi-service.yearly');
Route::post('sales-market-csi-yearly/save-save-next',[SalesCsiServiceYearly::class,'save_next'])->name('manage.sales.export.save.save.next.csi-service.yearly');
Route::get('sales-market-csi-yearly/edit/{id}',[SalesCsiServiceYearly::class,'edit'])->name('manage.sales.export.edit.csi-service.yearly');

Route::post('sales-market-csi-yearly/update',[SalesCsiServiceYearly::class,'update'])->name('manage.sales.export.update.csi-service.yearly');

// // raw-material-csi-service-yearly
Route::get('raw-material-csi-service-yearly',[RawCsiServiceYearly::class,'index'])->name('manage.raw.material.csi-service.yearly');

Route::post('raw-material-csi-service-yearly/save-save-next',[RawCsiServiceYearly::class,'save_next'])->name('manage.raw.material.csi-service.save.save.next.yearly.yearly');
Route::get('raw-material-csi-service-yearly/add',[RawCsiServiceYearly::class,'add'])->name('manage.raw.material.add.csi-service.yearly');
Route::post('raw-material-csi-service-yearly/insert',[RawCsiServiceYearly::class,'insert'])->name('manage.raw.material.insert.csi-service.yearly');

Route::get('raw-material-csi-service-yearly/delete/{id}',[RawCsiServiceYearly::class,'deleteView'])->name('manage.raw.material.delete.csi-service.yearly');

Route::post('raw-material-csi-service-yearly/delete-submit',[RawCsiServiceYearly::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.csi-service.yearly');

Route::get('raw-material-csi-service-yearly/edit/{id}',[RawCsiServiceYearly::class,'edit'])->name('manage.raw.material.edit.csi-service.yearly');

Route::post('raw-material-csi-service-yearly/update',[RawCsiServiceYearly::class,'update'])->name('manage.raw.material.update.csi-service.yearly');


// // manage-cost-details-csi-service-yearly

Route::get('manage-cost-details-csi-service-yearly',[CostCsiServiceYearly::class,'index'])->name('manage.cost.csi-service.yearly');
Route::post('manage-cost-details-csi-service-yearly/save-save-next',[CostCsiServiceYearly::class,'save_next'])->name('manage.cost.save.save.next.csi-service.yearly');
Route::get('manage-cost-details-csi-service-yearly/edit/{id}',[CostCsiServiceYearly::class,'edit'])->name('manage.cost.edit.csi-service.yearly');

Route::post('manage-cost-details-csi-service-yearly/update',[CostCsiServiceYearly::class,'update'])->name('manage.cost.update.csi-service.yearly');

// // manage-other-cost-details-csi-service-yearly

Route::get('manage-other-cost-details-csi-service-yearly',[OtherCostCsiServiceYearly::class,'index'])->name('manage.other.cost.other.csi-service.yearly');
Route::post('manage-other-cost-details-csi-service-yearly/save-save-next',[OtherCostCsiServiceYearly::class,'save_next'])->name('manage.other.cost.other.save.save.next.csi-service.yearly');
Route::get('manage-other-cost-details-csi-service-yearly/edit/{id}',[OtherCostCsiServiceYearly::class,'edit'])->name('manage.other.cost.other.edit.csi-service.yearly');

Route::post('manage-other-cost-details-csi-service-yearly/update',[OtherCostCsiServiceYearly::class,'update'])->name('manage.other.cost.other.update.csi-service.yearly');

// manage-employment-record-csi-service-yearly
Route::get('manage-employment-record-csi-service-yearly',[EmployeCsiServiceYearly::class,'index'])->name('manage.employe.manage-employment-record-csi-service-yearly');
Route::post('manage-employment-record-csi-service-yearly/save-save-next',[EmployeCsiServiceYearly::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-csi-service-yearly');
Route::get('manage-employment-record-csi-service-yearly/add',[EmployeCsiServiceYearly::class,'add'])->name('manage.employe.add.manage-employment-record-csi-service-yearly');
Route::post('manage-employment-record-csi-service-yearly/insert',[EmployeCsiServiceYearly::class,'insert'])->name('manage.employe.insert.manage-employment-record-csi-service-yearly');

Route::get('manage-employment-record-csi-service-yearly/delete/{id}',[EmployeCsiServiceYearly::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-csi-service-yearly');

Route::post('manage-employment-record-csi-service-yearly/delete-submit',[EmployeCsiServiceYearly::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-csi-service-yearly');

Route::get('manage-employment-record-csi-service-yearly/edit/{id}',[EmployeCsiServiceYearly::class,'edit'])->name('manage.employe.edit.manage-employment-record-csi-service-yearly');

Route::post('manage-employment-record-csi-service-yearly/update',[EmployeCsiServiceYearly::class,'update'])->name('manage.employe.update.manage-employment-record-csi-service-yearly');
Route::get('manage-employment-record-csi-service-yearly/statistics',[EmployeCsiServiceYearly::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-csi-service-yearly');

// manage-training-record-csi-service-yearly
Route::get('manage-training-record-csi-service-yearly',[TrainingCsiServiceYearly::class,'index'])->name('manage.training-csi-service.yearly');
Route::post('manage-training-record-csi-service-yearly/save-save-next',[TrainingCsiServiceYearly::class,'save_next'])->name('manage.training.save.save.next-csi-service.yearly');

Route::get('manage-training-record-csi-service-yearly/add',[TrainingCsiServiceYearly::class,'add'])->name('manage.training.add-csi-service.yearly');
Route::post('manage-training-record-csi-service-yearly/insert',[TrainingCsiServiceYearly::class,'insert'])->name('manage.training.insert-csi-service.yearly');

Route::get('manage-training-record-csi-service-yearly/delete/{id}',[TrainingCsiServiceYearly::class,'deleteView'])->name('manage.training.delete-csi-service.yearly');

Route::post('manage-training-record-csi-service-yearly/delete-submit',[TrainingCsiServiceYearly::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-service.yearly');

Route::get('manage-training-record-csi-service-yearly/edit/{id}',[TrainingCsiServiceYearly::class,'edit'])->name('manage.training.edit-csi-service.yearly');

Route::post('manage-training-record-csi-service-yearly/update',[TrainingCsiServiceYearly::class,'update'])->name('manage.training.update-csi-service.yearly');



// manage-financial-information-csi-service-yearly
Route::get('manage-financial-information-csi-service-yearly',[FinanceCsiServiceYearly::class,'index'])->name('manage.financemanage-financial-information-csi-service-yearly');

Route::post('manage-financial-information-csi-service-yearly/save-next',[FinanceCsiServiceYearly::class,'insert'])->name('manage.finance.insert.csi.pammanage-financial-information-csi-service-yearly');

Route::get('manage-financial-information-csi-service-yearly/edit/{id}',[FinanceCsiServiceYearly::class,'edit'])->name('manage.finance.editmanage-financial-information-csi-service-yearly');

Route::post('manage-financial-information-csi-service-yearly/update',[FinanceCsiServiceYearly::class,'update'])->name('manage.finance.updatemanage-financial-information-csi-service-yearly');


// manage-other-information-csi-service-yearly
Route::get('manage-other-information-csi-service-yearly',[OtherCsiServiceYearly::class,'index'])->name('manage.other-csi-service-yearly');

Route::post('manage-other-information-csi-service-yearly/insert',[OtherCsiServiceYearly::class,'insert'])->name('manage.other.insert-csi-service-yearly');
Route::get('manage-other-information-csi-service-yearly/edit/{id}',[OtherCsiServiceYearly::class,'edit'])->name('manage.other.edit-csi-service-yearly');
Route::post('manage-other-information-csi-service-yearly/update',[OtherCsiServiceYearly::class,'update'])->name('manage.other.update-csi-service-yearly');


// manage-revenue-csi-service-yearly

Route::get('manage-revenue-csi-service-yearly',[RevenueCsiServiceYearly::class,'index'])->name('manage.revenue.manage-revenue-csi-service-yearly');
Route::post('manage-revenue-csi-service-yearly/insert',[RevenueCsiServiceYearly::class,'insert'])->name('manage.revenue.insert.manage-revenue-csi-service-yearly');
Route::get('manage-revenue-csi-service-yearly/edit/{id}',[RevenueCsiServiceYearly::class,'edit'])->name('manage.revenue.edit.manage-revenue-csi-service-yearly');
Route::post('manage-revenue-csi-service-yearly/update',[RevenueCsiServiceYearly::class,'update'])->name('manage.revenue.update.manage-revenue-csi-service-yearly');



// ml-domestic-service/////////////////////////////////////////////////////////////

// manage-service-ml-domestic-service

Route::get('manage-service-ml-domestic-service',[ServiceMlService::class,'index'])->name('manage.service.manufacture.ml-domestic-service');

Route::post('manage-service-ml-domestic-service/save-save-next',[ServiceMlService::class,'save_next'])->name('manage.service.manufacture.ml-domestic-service.save.save.next');

Route::get('manage-service-ml-domestic-service/add',[ServiceMlService::class,'add'])->name('manage.service.manufacture.add.ml-domestic-service');
Route::post('manage-service-ml-domestic-service/insert',[ServiceMlService::class,'insert'])->name('manage.service.manufacture.insert.ml-domestic-service');

Route::get('manage-service-ml-domestic-service/delete/{id}',[ServiceMlService::class,'deleteView'])->name('manage.service.manufacture.delete.ml-domestic-service');

Route::post('manage-service-ml-domestic-service/delete-submit',[ServiceMlService::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.ml-domestic-service');

Route::get('manage-service-ml-domestic-service/edit/{id}',[ServiceMlService::class,'edit'])->name('manage.service.manufacture.edit.ml-domestic-service');

Route::post('manage-service-ml-domestic-service/update',[ServiceMlService::class,'update'])->name('manage.service.manufacture.update.ml-domestic-service');


// sales-ml-domestic-service
Route::get('sales-ml-domestic-service',[SalesMlService::class,'index'])->name('manage.sales.export.ml-domestic-service');
Route::post('sales-ml-domestic-service/save-save-next',[SalesMlService::class,'save_next'])->name('manage.sales.export.save.save.next.ml-domestic-service');
Route::get('sales-ml-domestic-service/edit/{id}',[SalesMlService::class,'edit'])->name('manage.sales.export.edit.ml-domestic-service');

Route::post('sales-ml-domestic-service/update',[SalesMlService::class,'update'])->name('manage.sales.export.update.ml-domestic-service');

// // raw-material-ml-domestic-service
Route::get('raw-material-ml-domestic-service',[RawMlService::class,'index'])->name('manage.raw.material.ml-domestic-service');

Route::post('raw-material-ml-domestic-service/save-save-next',[RawMlService::class,'save_next'])->name('manage.raw.material.ml-domestic-service.save.save.next.yearly');
Route::get('raw-material-ml-domestic-service/add',[RawMlService::class,'add'])->name('manage.raw.material.add.ml-domestic-service');
Route::post('raw-material-ml-domestic-service/insert',[RawMlService::class,'insert'])->name('manage.raw.material.insert.ml-domestic-service');

Route::get('raw-material-ml-domestic-service/delete/{id}',[RawMlService::class,'deleteView'])->name('manage.raw.material.delete.ml-domestic-service');

Route::post('raw-material-ml-domestic-service/delete-submit',[RawMlService::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml-domestic-service');

Route::get('raw-material-ml-domestic-service/edit/{id}',[RawMlService::class,'edit'])->name('manage.raw.material.edit.ml-domestic-service');

Route::post('raw-material-ml-domestic-service/update',[RawMlService::class,'update'])->name('manage.raw.material.update.ml-domestic-service');


// // manage-cost-details-ml-domestic-service

Route::get('manage-cost-details-ml-domestic-service',[CostMlService::class,'index'])->name('manage.cost.ml-domestic-service');
Route::post('manage-cost-details-ml-domestic-service/save-save-next',[CostMlService::class,'save_next'])->name('manage.cost.save.save.next.ml-domestic-service');
Route::get('manage-cost-details-ml-domestic-service/edit/{id}',[CostMlService::class,'edit'])->name('manage.cost.edit.ml-domestic-service');

Route::post('manage-cost-details-ml-domestic-service/update',[CostMlService::class,'update'])->name('manage.cost.update.ml-domestic-service');


// manage-employment-record-ml-domestic-service
Route::get('manage-employment-record-ml-domestic-service',[EmployeMlService::class,'index'])->name('manage.employe.manage-employment-record-ml-domestic-service');
Route::post('manage-employment-record-ml-domestic-service/save-save-next',[EmployeMlService::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-ml-domestic-service');
Route::get('manage-employment-record-ml-domestic-service/add',[EmployeMlService::class,'add'])->name('manage.employe.add.manage-employment-record-ml-domestic-service');
Route::post('manage-employment-record-ml-domestic-service/insert',[EmployeMlService::class,'insert'])->name('manage.employe.insert.manage-employment-record-ml-domestic-service');

Route::get('manage-employment-record-ml-domestic-service/delete/{id}',[EmployeMlService::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-ml-domestic-service');

Route::post('manage-employment-record-ml-domestic-service/delete-submit',[EmployeMlService::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-ml-domestic-service');

Route::get('manage-employment-record-ml-domestic-service/edit/{id}',[EmployeMlService::class,'edit'])->name('manage.employe.edit.manage-employment-record-ml-domestic-service');

Route::post('manage-employment-record-ml-domestic-service/update',[EmployeMlService::class,'update'])->name('manage.employe.update.manage-employment-record-ml-domestic-service');
Route::get('manage-employment-record-ml-domestic-service/statistics',[EmployeMlService::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-ml-domestic-service');


// manage-training-record-ml-domestic-service
Route::get('manage-training-record-ml-domestic-service',[TrainingMlService::class,'index'])->name('manage.training-ml-domestic-service');
Route::post('manage-training-record-ml-domestic-service/save-save-next',[TrainingMlService::class,'save_next'])->name('manage.training.save.save.next-ml-domestic-service');

Route::get('manage-training-record-ml-domestic-service/add',[TrainingMlService::class,'add'])->name('manage.training.add-ml-domestic-service');
Route::post('manage-training-record-ml-domestic-service/insert',[TrainingMlService::class,'insert'])->name('manage.training.insert-ml-domestic-service');

Route::get('manage-training-record-ml-domestic-service/delete/{id}',[TrainingMlService::class,'deleteView'])->name('manage.training.delete-ml-domestic-service');

Route::post('manage-training-record-ml-domestic-service/delete-submit',[TrainingMlService::class,'deleteSubmit'])->name('manage.training.delete.submit-ml-domestic-service');

Route::get('manage-training-record-ml-domestic-service/edit/{id}',[TrainingMlService::class,'edit'])->name('manage.training.edit-ml-domestic-service');

Route::post('manage-training-record-ml-domestic-service/update',[TrainingMlService::class,'update'])->name('manage.training.update-ml-domestic-service');




// manage-service-ml-domestic-service-yearly

Route::get('manage-service-ml-domestic-service-yearly',[ServiceYearlyMlService::class,'index'])->name('manage.service.manufacture.ml-domestic-service.yearly');

Route::post('manage-service-ml-domestic-service-yearly/save-save-next',[ServiceYearlyMlService::class,'save_next'])->name('manage.service.manufacture.ml-domestic-service.save.save.next.yearly');

Route::get('manage-service-ml-domestic-service-yearly/add',[ServiceYearlyMlService::class,'add'])->name('manage.service.manufacture.add.ml-domestic-service.yearly');
Route::post('manage-service-ml-domestic-service-yearly/insert',[ServiceYearlyMlService::class,'insert'])->name('manage.service.manufacture.insert.ml-domestic-service.yearly');

Route::get('manage-service-ml-domestic-service-yearly/delete/{id}',[ServiceYearlyMlService::class,'deleteView'])->name('manage.service.manufacture.delete.ml-domestic-service.yearly');

Route::post('manage-service-ml-domestic-service-yearly/delete-submit',[ServiceYearlyMlService::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.ml-domestic-service.yearly');

Route::get('manage-service-ml-domestic-service-yearly/edit/{id}',[ServiceYearlyMlService::class,'edit'])->name('manage.service.manufacture.edit.ml-domestic-service.yearly');

Route::post('manage-service-ml-domestic-service-yearly/update',[ServiceYearlyMlService::class,'update'])->name('manage.service.manufacture.update.ml-domestic-service.yearly');


// sales-ml-domestic-service-yearly
Route::get('sales-ml-domestic-service-yearly',[SalesYearlyMlService::class,'index'])->name('manage.sales.export.ml-domestic-service.yearly');
Route::post('sales-ml-domestic-service-yearly/save-save-next',[SalesYearlyMlService::class,'save_next'])->name('manage.sales.export.save.save.next.ml-domestic-service.yearly');
Route::get('sales-ml-domestic-service-yearly/edit/{id}',[SalesYearlyMlService::class,'edit'])->name('manage.sales.export.edit.ml-domestic-service.yearly');

Route::post('sales-ml-domestic-service-yearly/update',[SalesYearlyMlService::class,'update'])->name('manage.sales.export.update.ml-domestic-service.yearly');


// // raw-material-ml-domestic-service-yearly
Route::get('raw-material-ml-domestic-service-yearly',[RawYearlyMlService::class,'index'])->name('manage.raw.material.ml-domestic-service.yearly');

Route::post('raw-material-ml-domestic-service-yearly/save-save-next',[RawYearlyMlService::class,'save_next'])->name('manage.raw.material.ml-domestic-service.save.save.next.yearly.yearly');
Route::get('raw-material-ml-domestic-service-yearly/add',[RawYearlyMlService::class,'add'])->name('manage.raw.material.add.ml-domestic-service.yearly');
Route::post('raw-material-ml-domestic-service-yearly/insert',[RawYearlyMlService::class,'insert'])->name('manage.raw.material.insert.ml-domestic-service.yearly');

Route::get('raw-material-ml-domestic-service-yearly/delete/{id}',[RawYearlyMlService::class,'deleteView'])->name('manage.raw.material.delete.ml-domestic-service.yearly');

Route::post('raw-material-ml-domestic-service-yearly/delete-submit',[RawYearlyMlService::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml-domestic-service.yearly');

Route::get('raw-material-ml-domestic-service-yearly/edit/{id}',[RawYearlyMlService::class,'edit'])->name('manage.raw.material.edit.ml-domestic-service.yearly');

Route::post('raw-material-ml-domestic-service-yearly/update',[RawYearlyMlService::class,'update'])->name('manage.raw.material.update.ml-domestic-service.yearly');


// // manage-cost-details-ml-domestic-service-yearly

Route::get('manage-cost-details-ml-domestic-service-yearly',[CostYearlyMlService::class,'index'])->name('manage.cost.ml-domestic-service.yearly');
Route::post('manage-cost-details-ml-domestic-service-yearly/save-save-next',[CostYearlyMlService::class,'save_next'])->name('manage.cost.save.save.next.ml-domestic-service.yearly');
Route::get('manage-cost-details-ml-domestic-service-yearly/edit/{id}',[CostYearlyMlService::class,'edit'])->name('manage.cost.edit.ml-domestic-service.yearly');

Route::post('manage-cost-details-ml-domestic-service-yearly/update',[CostYearlyMlService::class,'update'])->name('manage.cost.update.ml-domestic-service.yearly');

// manage-employment-record-ml-domestic-service-yearly
Route::get('manage-employment-record-ml-domestic-service-yearly',[EmployeYearlyMlService::class,'index'])->name('manage.employe.manage-employment-record-ml-domestic-service-yearly');
Route::post('manage-employment-record-ml-domestic-service-yearly/save-save-next',[EmployeYearlyMlService::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-ml-domestic-service-yearly');
Route::get('manage-employment-record-ml-domestic-service-yearly/add',[EmployeYearlyMlService::class,'add'])->name('manage.employe.add.manage-employment-record-ml-domestic-service-yearly');
Route::post('manage-employment-record-ml-domestic-service-yearly/insert',[EmployeYearlyMlService::class,'insert'])->name('manage.employe.insert.manage-employment-record-ml-domestic-service-yearly');

Route::get('manage-employment-record-ml-domestic-service-yearly/delete/{id}',[EmployeYearlyMlService::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-ml-domestic-service-yearly');

Route::post('manage-employment-record-ml-domestic-service-yearly/delete-submit',[EmployeYearlyMlService::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-ml-domestic-service-yearly');

Route::get('manage-employment-record-ml-domestic-service-yearly/edit/{id}',[EmployeYearlyMlService::class,'edit'])->name('manage.employe.edit.manage-employment-record-ml-domestic-service-yearly');

Route::post('manage-employment-record-ml-domestic-service-yearly/update',[EmployeYearlyMlService::class,'update'])->name('manage.employe.update.manage-employment-record-ml-domestic-service-yearly');
Route::get('manage-employment-record-ml-domestic-service-yearly/statistics',[EmployeYearlyMlService::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-ml-domestic-service-yearly');


// manage-training-record-ml-domestic-service-yearly
Route::get('manage-training-record-ml-domestic-service-yearly',[TrainingYearlyMlService::class,'index'])->name('manage.training-ml-domestic-service.yearly');
Route::post('manage-training-record-ml-domestic-service-yearly/save-save-next',[TrainingYearlyMlService::class,'save_next'])->name('manage.training.save.save.next-ml-domestic-service.yearly');

Route::get('manage-training-record-ml-domestic-service-yearly/add',[TrainingYearlyMlService::class,'add'])->name('manage.training.add-ml-domestic-service.yearly');
Route::post('manage-training-record-ml-domestic-service-yearly/insert',[TrainingYearlyMlService::class,'insert'])->name('manage.training.insert-ml-domestic-service.yearly');

Route::get('manage-training-record-ml-domestic-service-yearly/delete/{id}',[TrainingYearlyMlService::class,'deleteView'])->name('manage.training.delete-ml-domestic-service.yearly');

Route::post('manage-training-record-ml-domestic-service-yearly/delete-submit',[TrainingYearlyMlService::class,'deleteSubmit'])->name('manage.training.delete.submit-ml-domestic-service.yearly');

Route::get('manage-training-record-ml-domestic-service-yearly/edit/{id}',[TrainingYearlyMlService::class,'edit'])->name('manage.training.edit-ml-domestic-service.yearly');

Route::post('manage-training-record-ml-domestic-service-yearly/update',[TrainingYearlyMlService::class,'update'])->name('manage.training.update-ml-domestic-service.yearly');



// manage-financial-information-ml-domestic-service-yearly
Route::get('manage-financial-information-ml-domestic-service-yearly',[FinanceYearlyMlService::class,'index'])->name('manage.financemanage-financial-information-ml-domestic-service-yearly');

Route::post('manage-financial-information-ml-domestic-service-yearly/save-next',[FinanceYearlyMlService::class,'insert'])->name('manage.finance.insert.csi.pammanage-financial-information-ml-domestic-service-yearly');

Route::get('manage-financial-information-ml-domestic-service-yearly/edit/{id}',[FinanceYearlyMlService::class,'edit'])->name('manage.finance.editmanage-financial-information-ml-domestic-service-yearly');

Route::post('manage-financial-information-ml-domestic-service-yearly/update',[FinanceYearlyMlService::class,'update'])->name('manage.finance.updatemanage-financial-information-ml-domestic-service-yearly');


// manage-other-information-ml-domestic-service-yearly
Route::get('manage-other-information-ml-domestic-service-yearly',[OtherYearlyMlService::class,'index'])->name('manage.other-ml-domestic-service-yearly');

Route::post('manage-other-information-ml-domestic-service-yearly/insert',[OtherYearlyMlService::class,'insert'])->name('manage.other.insert-ml-domestic-service-yearly');
Route::get('manage-other-information-ml-domestic-service-yearly/edit/{id}',[OtherYearlyMlService::class,'edit'])->name('manage.other.edit-ml-domestic-service-yearly');
Route::post('manage-other-information-ml-domestic-service-yearly/update',[OtherYearlyMlService::class,'update'])->name('manage.other.update-ml-domestic-service-yearly');


// manage-revenue-ml-domestic-service-yearly

Route::get('manage-revenue-ml-domestic-service-yearly',[RevenueYearlyMlService::class,'index'])->name('manage.revenue.manage-revenue-ml-domestic-service-yearly');
Route::post('manage-revenue-ml-domestic-service-yearly/insert',[RevenueYearlyMlService::class,'insert'])->name('manage.revenue.insert.manage-revenue-ml-domestic-service-yearly');
Route::get('manage-revenue-ml-domestic-service-yearly/edit/{id}',[RevenueYearlyMlService::class,'edit'])->name('manage.revenue.edit.manage-revenue-ml-domestic-service-yearly');
Route::post('manage-revenue-ml-domestic-service-yearly/update',[RevenueYearlyMlService::class,'update'])->name('manage.revenue.update.manage-revenue-ml-domestic-service-yearly');












// manage-service-csi-construction

Route::get('manage-service-csi-construction',[ServiceCsiConstruction::class,'index'])->name('manage.service.manufacture.csi-construction');

Route::post('manage-service-csi-construction/save-save-next',[ServiceCsiConstruction::class,'save_next'])->name('manage.service.manufacture.csi-construction.save.save.next');

Route::get('manage-service-csi-construction/add',[ServiceCsiConstruction::class,'add'])->name('manage.service.manufacture.add.csi-construction');
Route::post('manage-service-csi-construction/insert',[ServiceCsiConstruction::class,'insert'])->name('manage.service.manufacture.insert.csi-construction');

Route::get('manage-service-csi-construction/delete/{id}',[ServiceCsiConstruction::class,'deleteView'])->name('manage.service.manufacture.delete.csi-construction');

Route::post('manage-service-csi-construction/delete-submit',[ServiceCsiConstruction::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.csi-construction');

Route::get('manage-service-csi-construction/edit/{id}',[ServiceCsiConstruction::class,'edit'])->name('manage.service.manufacture.edit.csi-construction');

Route::post('manage-service-csi-construction/update',[ServiceCsiConstruction::class,'update'])->name('manage.service.manufacture.update.csi-construction');


// sales-market-csi-construction
Route::get('sales-market-csi-construction',[SalesCsiConstruction::class,'index'])->name('manage.sales.export.csi-construction');
Route::post('sales-market-csi-construction/save-save-next',[SalesCsiConstruction::class,'save_next'])->name('manage.sales.export.save.save.next.csi-construction');
Route::get('sales-market-csi-construction/edit/{id}',[SalesCsiConstruction::class,'edit'])->name('manage.sales.export.edit.csi-construction');

Route::post('sales-market-csi-construction/update',[SalesCsiConstruction::class,'update'])->name('manage.sales.export.update.csi-construction');


// // raw-material-csi-construction
Route::get('raw-material-csi-construction',[RawCsiConstruction::class,'index'])->name('manage.raw.material.csi-construction');

Route::post('raw-material-csi-construction/save-save-next',[RawCsiConstruction::class,'save_next'])->name('manage.raw.material.csi-construction.save.save.next.yearly.yearly');
Route::get('raw-material-csi-construction/add',[RawCsiConstruction::class,'add'])->name('manage.raw.material.add.csi-construction');
Route::post('raw-material-csi-construction/insert',[RawCsiConstruction::class,'insert'])->name('manage.raw.material.insert.csi-construction');

Route::get('raw-material-csi-construction/delete/{id}',[RawCsiConstruction::class,'deleteView'])->name('manage.raw.material.delete.csi-construction');

Route::post('raw-material-csi-construction/delete-submit',[RawCsiConstruction::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.csi-construction');

Route::get('raw-material-csi-construction/edit/{id}',[RawCsiConstruction::class,'edit'])->name('manage.raw.material.edit.csi-construction');

Route::post('raw-material-csi-construction/update',[RawCsiConstruction::class,'update'])->name('manage.raw.material.update.csi-construction');


// // manage-cost-details-csi-construction

Route::get('manage-cost-details-csi-construction',[CostCsiConstruction::class,'index'])->name('manage.cost.csi-construction');
Route::post('manage-cost-details-csi-construction/save-save-next',[CostCsiConstruction::class,'save_next'])->name('manage.cost.save.save.next.csi-construction');
Route::get('manage-cost-details-csi-construction/edit/{id}',[CostCsiConstruction::class,'edit'])->name('manage.cost.edit.csi-construction');

Route::post('manage-cost-details-csi-construction/update',[CostCsiConstruction::class,'update'])->name('manage.cost.update.csi-construction');

// // manage-other-cost-details-csi-construction

Route::get('manage-other-cost-details-csi-construction',[OtherCostCsiConstruction::class,'index'])->name('manage.other.cost.other.csi-construction');
Route::post('manage-other-cost-details-csi-construction/save-save-next',[OtherCostCsiConstruction::class,'save_next'])->name('manage.other.cost.other.save.save.next.csi-construction');
Route::get('manage-other-cost-details-csi-construction/edit/{id}',[OtherCostCsiConstruction::class,'edit'])->name('manage.other.cost.other.edit.csi-construction');

Route::post('manage-other-cost-details-csi-construction/update',[OtherCostCsiConstruction::class,'update'])->name('manage.other.cost.other.update.csi-construction');

// manage-employment-record-csi-construction
Route::get('manage-employment-record-csi-construction',[EmployeCsiConstruction::class,'index'])->name('manage.employe.manage-employment-record-csi-construction');
Route::post('manage-employment-record-csi-construction/save-save-next',[EmployeCsiConstruction::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-csi-construction');
Route::get('manage-employment-record-csi-construction/add',[EmployeCsiConstruction::class,'add'])->name('manage.employe.add.manage-employment-record-csi-construction');
Route::post('manage-employment-record-csi-construction/insert',[EmployeCsiConstruction::class,'insert'])->name('manage.employe.insert.manage-employment-record-csi-construction');

Route::get('manage-employment-record-csi-construction/delete/{id}',[EmployeCsiConstruction::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-csi-construction');

Route::post('manage-employment-record-csi-construction/delete-submit',[EmployeCsiConstruction::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-csi-construction');

Route::get('manage-employment-record-csi-construction/edit/{id}',[EmployeCsiConstruction::class,'edit'])->name('manage.employe.edit.manage-employment-record-csi-construction');

Route::post('manage-employment-record-csi-construction/update',[EmployeCsiConstruction::class,'update'])->name('manage.employe.update.manage-employment-record-csi-construction');
Route::get('manage-employment-record-csi-construction/statistics',[EmployeCsiConstruction::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-csi-construction');

// manage-training-record-csi-construction
Route::get('manage-training-record-csi-construction',[TrainingCsiConstruction::class,'index'])->name('manage.training-csi-construction');
Route::post('manage-training-record-csi-construction/save-save-next',[TrainingCsiConstruction::class,'save_next'])->name('manage.training.save.save.next-csi-construction');

Route::get('manage-training-record-csi-construction/add',[TrainingCsiConstruction::class,'add'])->name('manage.training.add-csi-construction');
Route::post('manage-training-record-csi-construction/insert',[TrainingCsiConstruction::class,'insert'])->name('manage.training.insert-csi-construction');

Route::get('manage-training-record-csi-construction/delete/{id}',[TrainingCsiConstruction::class,'deleteView'])->name('manage.training.delete-csi-construction');

Route::post('manage-training-record-csi-construction/delete-submit',[TrainingCsiConstruction::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-construction');

Route::get('manage-training-record-csi-construction/edit/{id}',[TrainingCsiConstruction::class,'edit'])->name('manage.training.edit-csi-construction');

Route::post('manage-training-record-csi-construction/update',[TrainingCsiConstruction::class,'update'])->name('manage.training.update-csi-construction');


// manage-service-csi-construction-yearly

Route::get('manage-service-csi-construction-yearly',[ServiceYearlyCsiConstruction::class,'index'])->name('manage.service.manufacture.csi-construction.yearly');

Route::post('manage-service-csi-construction-yearly/save-save-next',[ServiceYearlyCsiConstruction::class,'save_next'])->name('manage.service.manufacture.csi-construction.save.save.next.yearly');

Route::get('manage-service-csi-construction-yearly/add',[ServiceYearlyCsiConstruction::class,'add'])->name('manage.service.manufacture.add.csi-construction.yearly');
Route::post('manage-service-csi-construction-yearly/insert',[ServiceYearlyCsiConstruction::class,'insert'])->name('manage.service.manufacture.insert.csi-construction.yearly');

Route::get('manage-service-csi-construction-yearly/delete/{id}',[ServiceYearlyCsiConstruction::class,'deleteView'])->name('manage.service.manufacture.delete.csi-construction.yearly');

Route::post('manage-service-csi-construction-yearly/delete-submit',[ServiceYearlyCsiConstruction::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.csi-construction.yearly');

Route::get('manage-service-csi-construction-yearly/edit/{id}',[ServiceYearlyCsiConstruction::class,'edit'])->name('manage.service.manufacture.edit.csi-construction.yearly');

Route::post('manage-service-csi-construction-yearly/update',[ServiceYearlyCsiConstruction::class,'update'])->name('manage.service.manufacture.update.csi-construction.yearly');


// sales-market-csi-construction-yearly
Route::get('sales-market-csi-construction-yearly',[SalesYearlyCsiConstruction::class,'index'])->name('manage.sales.export.csi-construction.yearly');
Route::post('sales-market-csi-construction-yearly/save-save-next',[SalesYearlyCsiConstruction::class,'save_next'])->name('manage.sales.export.save.save.next.csi-construction.yearly');
Route::get('sales-market-csi-construction-yearly/edit/{id}',[SalesYearlyCsiConstruction::class,'edit'])->name('manage.sales.export.edit.csi-construction.yearly');

Route::post('sales-market-csi-construction-yearly/update',[SalesYearlyCsiConstruction::class,'update'])->name('manage.sales.export.update.csi-construction.yearly');


// // raw-material-csi-construction-yearly
Route::get('raw-material-csi-construction-yearly',[RawYearlyCsiConstruction::class,'index'])->name('manage.raw.material.csi-construction.yearly');

Route::post('raw-material-csi-construction-yearly/save-save-next',[RawYearlyCsiConstruction::class,'save_next'])->name('manage.raw.material.csi-construction.save.save.next.yearly.yearly.yearly');
Route::get('raw-material-csi-construction-yearly/add',[RawYearlyCsiConstruction::class,'add'])->name('manage.raw.material.add.csi-construction.yearly');
Route::post('raw-material-csi-construction-yearly/insert',[RawYearlyCsiConstruction::class,'insert'])->name('manage.raw.material.insert.csi-construction.yearly');

Route::get('raw-material-csi-construction-yearly/delete/{id}',[RawYearlyCsiConstruction::class,'deleteView'])->name('manage.raw.material.delete.csi-construction.yearly');

Route::post('raw-material-csi-construction-yearly/delete-submit',[RawYearlyCsiConstruction::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.csi-construction.yearly');

Route::get('raw-material-csi-construction-yearly/edit/{id}',[RawYearlyCsiConstruction::class,'edit'])->name('manage.raw.material.edit.csi-construction.yearly');

Route::post('raw-material-csi-construction-yearly/update',[RawYearlyCsiConstruction::class,'update'])->name('manage.raw.material.update.csi-construction.yearly');


// // manage-cost-details-csi-construction-yearly

Route::get('manage-cost-details-csi-construction-yearly',[CostYearlyCsiConstruction::class,'index'])->name('manage.cost.csi-construction.yearly');
Route::post('manage-cost-details-csi-construction-yearly/save-save-next',[CostYearlyCsiConstruction::class,'save_next'])->name('manage.cost.save.save.next.csi-construction.yearly');
Route::get('manage-cost-details-csi-construction-yearly/edit/{id}',[CostYearlyCsiConstruction::class,'edit'])->name('manage.cost.edit.csi-construction.yearly');

Route::post('manage-cost-details-csi-construction-yearly/update',[CostYearlyCsiConstruction::class,'update'])->name('manage.cost.update.csi-construction.yearly');

// // manage-other-cost-details-csi-construction-yearly

Route::get('manage-other-cost-details-csi-construction-yearly',[OtherCostYearlyCsiConstruction::class,'index'])->name('manage.other.cost.other.csi-construction.yearly');
Route::post('manage-other-cost-details-csi-construction-yearly/save-save-next',[OtherCostYearlyCsiConstruction::class,'save_next'])->name('manage.other.cost.other.save.save.next.csi-construction.yearly');
Route::get('manage-other-cost-details-csi-construction-yearly/edit/{id}',[OtherCostYearlyCsiConstruction::class,'edit'])->name('manage.other.cost.other.edit.csi-construction.yearly');

Route::post('manage-other-cost-details-csi-construction-yearly/update',[OtherCostYearlyCsiConstruction::class,'update'])->name('manage.other.cost.other.update.csi-construction.yearly');


// manage-employment-record-csi-construction-yearly
Route::get('manage-employment-record-csi-construction-yearly',[EmployeYearlyCsiConstruction::class,'index'])->name('manage.employe.manage-employment-record-csi-construction-yearly');
Route::post('manage-employment-record-csi-construction-yearly/save-save-next',[EmployeYearlyCsiConstruction::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-csi-construction-yearly');
Route::get('manage-employment-record-csi-construction-yearly/add',[EmployeYearlyCsiConstruction::class,'add'])->name('manage.employe.add.manage-employment-record-csi-construction-yearly');
Route::post('manage-employment-record-csi-construction-yearly/insert',[EmployeYearlyCsiConstruction::class,'insert'])->name('manage.employe.insert.manage-employment-record-csi-construction-yearly');

Route::get('manage-employment-record-csi-construction-yearly/delete/{id}',[EmployeYearlyCsiConstruction::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-csi-construction-yearly');

Route::post('manage-employment-record-csi-construction-yearly/delete-submit',[EmployeYearlyCsiConstruction::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-csi-construction-yearly');

Route::get('manage-employment-record-csi-construction-yearly/edit/{id}',[EmployeYearlyCsiConstruction::class,'edit'])->name('manage.employe.edit.manage-employment-record-csi-construction-yearly');

Route::post('manage-employment-record-csi-construction-yearly/update',[EmployeYearlyCsiConstruction::class,'update'])->name('manage.employe.update.manage-employment-record-csi-construction-yearly');
Route::get('manage-employment-record-csi-construction-yearly/statistics',[EmployeYearlyCsiConstruction::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-csi-construction-yearly');



// manage-training-record-csi-construction-yearly
Route::get('manage-training-record-csi-construction-yearly',[TrainingYearlyCsiConstruction::class,'index'])->name('manage.training-csi-construction.yearly');
Route::post('manage-training-record-csi-construction-yearly/save-save-next',[TrainingYearlyCsiConstruction::class,'save_next'])->name('manage.training.save.save.next-csi-construction.yearly');

Route::get('manage-training-record-csi-construction-yearly/add',[TrainingYearlyCsiConstruction::class,'add'])->name('manage.training.add-csi-construction.yearly');
Route::post('manage-training-record-csi-construction-yearly/insert',[TrainingYearlyCsiConstruction::class,'insert'])->name('manage.training.insert-csi-construction.yearly');

Route::get('manage-training-record-csi-construction-yearly/delete/{id}',[TrainingYearlyCsiConstruction::class,'deleteView'])->name('manage.training.delete-csi-construction.yearly');

Route::post('manage-training-record-csi-construction-yearly/delete-submit',[TrainingYearlyCsiConstruction::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-construction.yearly');

Route::get('manage-training-record-csi-construction-yearly/edit/{id}',[TrainingYearlyCsiConstruction::class,'edit'])->name('manage.training.edit-csi-construction.yearly');

Route::post('manage-training-record-csi-construction-yearly/update',[TrainingYearlyCsiConstruction::class,'update'])->name('manage.training.update-csi-construction.yearly');




// manage-financial-information-csi-construction-yearly
Route::get('manage-financial-information-csi-construction-yearly',[FinanceYearlyCsiConstruction::class,'index'])->name('manage.financemanage-financial-information-csi-construction-yearly');

Route::post('manage-financial-information-csi-construction-yearly/save-next',[FinanceYearlyCsiConstruction::class,'insert'])->name('manage.finance.insert.csi.pammanage-financial-information-csi-construction-yearly');

Route::get('manage-financial-information-csi-construction-yearly/edit/{id}',[FinanceYearlyCsiConstruction::class,'edit'])->name('manage.finance.editmanage-financial-information-csi-construction-yearly');

Route::post('manage-financial-information-csi-construction-yearly/update',[FinanceYearlyCsiConstruction::class,'update'])->name('manage.finance.updatemanage-financial-information-csi-construction-yearly');


// manage-other-information-csi-construction-yearly
Route::get('manage-other-information-csi-construction-yearly',[OtherYearlyCsiConstruction::class,'index'])->name('manage.other-csi-construction-yearly');

Route::post('manage-other-information-csi-construction-yearly/insert',[OtherYearlyCsiConstruction::class,'insert'])->name('manage.other.insert-csi-construction-yearly');
Route::get('manage-other-information-csi-construction-yearly/edit/{id}',[OtherYearlyCsiConstruction::class,'edit'])->name('manage.other.edit-csi-construction-yearly');
Route::post('manage-other-information-csi-construction-yearly/update',[OtherYearlyCsiConstruction::class,'update'])->name('manage.other.update-csi-construction-yearly');


// manage-revenue-csi-construction-yearly

Route::get('manage-revenue-csi-construction-yearly',[RevenueYearlyCsiConstruction::class,'index'])->name('manage.revenue.manage-revenue-csi-construction-yearly');
Route::post('manage-revenue-csi-construction-yearly/insert',[RevenueYearlyCsiConstruction::class,'insert'])->name('manage.revenue.insert.manage-revenue-csi-construction-yearly');
Route::get('manage-revenue-csi-construction-yearly/edit/{id}',[RevenueYearlyCsiConstruction::class,'edit'])->name('manage.revenue.edit.manage-revenue-csi-construction-yearly');
Route::post('manage-revenue-csi-construction-yearly/update',[RevenueYearlyCsiConstruction::class,'update'])->name('manage.revenue.update.manage-revenue-csi-construction-yearly');





// ml-domestic-construction/////////////////////////////////////////////////////////////

// manage-service-ml-domestic-construction

Route::get('manage-service-ml-domestic-construction',[ServiceMlConstruction::class,'index'])->name('manage.service.manufacture.ml-domestic-construction');

Route::post('manage-service-ml-domestic-construction/save-save-next',[ServiceMlConstruction::class,'save_next'])->name('manage.service.manufacture.ml-domestic-construction.save.save.next');

Route::get('manage-service-ml-domestic-construction/add',[ServiceMlConstruction::class,'add'])->name('manage.service.manufacture.add.ml-domestic-construction');
Route::post('manage-service-ml-domestic-construction/insert',[ServiceMlConstruction::class,'insert'])->name('manage.service.manufacture.insert.ml-domestic-construction');

Route::get('manage-service-ml-domestic-construction/delete/{id}',[ServiceMlConstruction::class,'deleteView'])->name('manage.service.manufacture.delete.ml-domestic-construction');

Route::post('manage-service-ml-domestic-construction/delete-submit',[ServiceMlConstruction::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.ml-domestic-construction');

Route::get('manage-service-ml-domestic-construction/edit/{id}',[ServiceMlConstruction::class,'edit'])->name('manage.service.manufacture.edit.ml-domestic-construction');

Route::post('manage-service-ml-domestic-construction/update',[ServiceMlConstruction::class,'update'])->name('manage.service.manufacture.update.ml-domestic-construction');


// sales-ml-domestic-construction
Route::get('sales-ml-domestic-construction',[SalesMlConstruction::class,'index'])->name('manage.sales.export.ml-domestic-construction');
Route::post('sales-ml-domestic-construction/save-save-next',[SalesMlConstruction::class,'save_next'])->name('manage.sales.export.save.save.next.ml-domestic-construction');
Route::get('sales-ml-domestic-construction/edit/{id}',[SalesMlConstruction::class,'edit'])->name('manage.sales.export.edit.ml-domestic-construction');

Route::post('sales-ml-domestic-construction/update',[SalesMlConstruction::class,'update'])->name('manage.sales.export.update.ml-domestic-construction');

// // raw-material-ml-domestic-construction
Route::get('raw-material-ml-domestic-construction',[RawMlConstruction::class,'index'])->name('manage.raw.material.ml-domestic-construction');

Route::post('raw-material-ml-domestic-construction/save-save-next',[RawMlConstruction::class,'save_next'])->name('manage.raw.material.ml-domestic-construction.save.save.next.yearly');
Route::get('raw-material-ml-domestic-construction/add',[RawMlConstruction::class,'add'])->name('manage.raw.material.add.ml-domestic-construction');
Route::post('raw-material-ml-domestic-construction/insert',[RawMlConstruction::class,'insert'])->name('manage.raw.material.insert.ml-domestic-construction');

Route::get('raw-material-ml-domestic-construction/delete/{id}',[RawMlConstruction::class,'deleteView'])->name('manage.raw.material.delete.ml-domestic-construction');

Route::post('raw-material-ml-domestic-construction/delete-submit',[RawMlConstruction::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml-domestic-construction');

Route::get('raw-material-ml-domestic-construction/edit/{id}',[RawMlConstruction::class,'edit'])->name('manage.raw.material.edit.ml-domestic-construction');

Route::post('raw-material-ml-domestic-construction/update',[RawMlConstruction::class,'update'])->name('manage.raw.material.update.ml-domestic-construction');


// // manage-cost-details-ml-domestic-construction

Route::get('manage-cost-details-ml-domestic-construction',[CostMlConstruction::class,'index'])->name('manage.cost.ml-domestic-construction');
Route::post('manage-cost-details-ml-domestic-construction/save-save-next',[CostMlConstruction::class,'save_next'])->name('manage.cost.save.save.next.ml-domestic-construction');
Route::get('manage-cost-details-ml-domestic-construction/edit/{id}',[CostMlConstruction::class,'edit'])->name('manage.cost.edit.ml-domestic-construction');

Route::post('manage-cost-details-ml-domestic-construction/update',[CostMlConstruction::class,'update'])->name('manage.cost.update.ml-domestic-construction');


// manage-employment-record-ml-domestic-construction
Route::get('manage-employment-record-ml-domestic-construction',[EmployeMlConstruction::class,'index'])->name('manage.employe.manage-employment-record-ml-domestic-construction');
Route::post('manage-employment-record-ml-domestic-construction/save-save-next',[EmployeMlConstruction::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-ml-domestic-construction');
Route::get('manage-employment-record-ml-domestic-construction/add',[EmployeMlConstruction::class,'add'])->name('manage.employe.add.manage-employment-record-ml-domestic-construction');
Route::post('manage-employment-record-ml-domestic-construction/insert',[EmployeMlConstruction::class,'insert'])->name('manage.employe.insert.manage-employment-record-ml-domestic-construction');

Route::get('manage-employment-record-ml-domestic-construction/delete/{id}',[EmployeMlConstruction::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-ml-domestic-construction');

Route::post('manage-employment-record-ml-domestic-construction/delete-submit',[EmployeMlConstruction::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-ml-domestic-construction');

Route::get('manage-employment-record-ml-domestic-construction/edit/{id}',[EmployeMlConstruction::class,'edit'])->name('manage.employe.edit.manage-employment-record-ml-domestic-construction');

Route::post('manage-employment-record-ml-domestic-construction/update',[EmployeMlConstruction::class,'update'])->name('manage.employe.update.manage-employment-record-ml-domestic-construction');
Route::get('manage-employment-record-ml-domestic-construction/statistics',[EmployeMlConstruction::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-ml-domestic-construction');


// manage-training-record-ml-domestic-construction
Route::get('manage-training-record-ml-domestic-construction',[TrainingMlConstruction::class,'index'])->name('manage.training-ml-domestic-construction');
Route::post('manage-training-record-ml-domestic-construction/save-save-next',[TrainingMlConstruction::class,'save_next'])->name('manage.training.save.save.next-ml-domestic-construction');

Route::get('manage-training-record-ml-domestic-construction/add',[TrainingMlConstruction::class,'add'])->name('manage.training.add-ml-domestic-construction');
Route::post('manage-training-record-ml-domestic-construction/insert',[TrainingMlConstruction::class,'insert'])->name('manage.training.insert-ml-domestic-construction');

Route::get('manage-training-record-ml-domestic-construction/delete/{id}',[TrainingMlConstruction::class,'deleteView'])->name('manage.training.delete-ml-domestic-construction');

Route::post('manage-training-record-ml-domestic-construction/delete-submit',[TrainingMlConstruction::class,'deleteSubmit'])->name('manage.training.delete.submit-ml-domestic-construction');

Route::get('manage-training-record-ml-domestic-construction/edit/{id}',[TrainingMlConstruction::class,'edit'])->name('manage.training.edit-ml-domestic-construction');

Route::post('manage-training-record-ml-domestic-construction/update',[TrainingMlConstruction::class,'update'])->name('manage.training.update-ml-domestic-construction');



// manage-service-ml-domestic-construction-yearly

Route::get('manage-service-ml-domestic-construction-yearly',[ServiceYearlyMlConstruction::class,'index'])->name('manage.service.manufacture.ml-domestic-construction.yearly');

Route::post('manage-service-ml-domestic-construction-yearly/save-save-next',[ServiceYearlyMlConstruction::class,'save_next'])->name('manage.service.manufacture.ml-domestic-construction.save.save.next.yearly');

Route::get('manage-service-ml-domestic-construction-yearly/add',[ServiceYearlyMlConstruction::class,'add'])->name('manage.service.manufacture.add.ml-domestic-construction.yearly');
Route::post('manage-service-ml-domestic-construction-yearly/insert',[ServiceYearlyMlConstruction::class,'insert'])->name('manage.service.manufacture.insert.ml-domestic-construction.yearly');

Route::get('manage-service-ml-domestic-construction-yearly/delete/{id}',[ServiceYearlyMlConstruction::class,'deleteView'])->name('manage.service.manufacture.delete.ml-domestic-construction.yearly');

Route::post('manage-service-ml-domestic-construction-yearly/delete-submit',[ServiceYearlyMlConstruction::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.ml-domestic-construction.yearly');

Route::get('manage-service-ml-domestic-construction-yearly/edit/{id}',[ServiceYearlyMlConstruction::class,'edit'])->name('manage.service.manufacture.edit.ml-domestic-construction.yearly');

Route::post('manage-service-ml-domestic-construction-yearly/update',[ServiceYearlyMlConstruction::class,'update'])->name('manage.service.manufacture.update.ml-domestic-construction.yearly');


// sales-ml-domestic-construction-yearly
Route::get('sales-ml-domestic-construction-yearly',[SalesYearlyMlConstruction::class,'index'])->name('manage.sales.export.ml-domestic-construction.yearly');
Route::post('sales-ml-domestic-construction-yearly/save-save-next',[SalesYearlyMlConstruction::class,'save_next'])->name('manage.sales.export.save.save.next.ml-domestic-construction.yearly');
Route::get('sales-ml-domestic-construction-yearly/edit/{id}',[SalesYearlyMlConstruction::class,'edit'])->name('manage.sales.export.edit.ml-domestic-construction.yearly');

Route::post('sales-ml-domestic-construction-yearly/update',[SalesYearlyMlConstruction::class,'update'])->name('manage.sales.export.update.ml-domestic-construction.yearly');

// // raw-material-ml-domestic-construction-yearly
Route::get('raw-material-ml-domestic-construction-yearly',[RawYearlyMlConstruction::class,'index'])->name('manage.raw.material.ml-domestic-construction.yearly');

Route::post('raw-material-ml-domestic-construction-yearly/save-save-next',[RawYearlyMlConstruction::class,'save_next'])->name('manage.raw.material.ml-domestic-construction.save.save.next.yearly.yearly');
Route::get('raw-material-ml-domestic-construction-yearly/add',[RawYearlyMlConstruction::class,'add'])->name('manage.raw.material.add.ml-domestic-construction.yearly');
Route::post('raw-material-ml-domestic-construction-yearly/insert',[RawYearlyMlConstruction::class,'insert'])->name('manage.raw.material.insert.ml-domestic-construction.yearly');

Route::get('raw-material-ml-domestic-construction-yearly/delete/{id}',[RawYearlyMlConstruction::class,'deleteView'])->name('manage.raw.material.delete.ml-domestic-construction.yearly');

Route::post('raw-material-ml-domestic-construction-yearly/delete-submit',[RawYearlyMlConstruction::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml-domestic-construction.yearly');

Route::get('raw-material-ml-domestic-construction-yearly/edit/{id}',[RawYearlyMlConstruction::class,'edit'])->name('manage.raw.material.edit.ml-domestic-construction.yearly');

Route::post('raw-material-ml-domestic-construction-yearly/update',[RawYearlyMlConstruction::class,'update'])->name('manage.raw.material.update.ml-domestic-construction.yearly');



// // manage-cost-details-ml-domestic-construction-yearly

Route::get('manage-cost-details-ml-domestic-construction-yearly',[CostYearlyMlConstruction::class,'index'])->name('manage.cost.ml-domestic-construction.yearly');
Route::post('manage-cost-details-ml-domestic-construction-yearly/save-save-next',[CostYearlyMlConstruction::class,'save_next'])->name('manage.cost.save.save.next.ml-domestic-construction.yearly');
Route::get('manage-cost-details-ml-domestic-construction-yearly/edit/{id}',[CostYearlyMlConstruction::class,'edit'])->name('manage.cost.edit.ml-domestic-construction.yearly');

Route::post('manage-cost-details-ml-domestic-construction-yearly/update',[CostYearlyMlConstruction::class,'update'])->name('manage.cost.update.ml-domestic-construction.yearly');


// manage-employment-record-ml-domestic-construction-yearly
Route::get('manage-employment-record-ml-domestic-construction-yearly',[EmployeYearlyMlConstruction::class,'index'])->name('manage.employe.manage-employment-record-ml-domestic-construction-yearly');
Route::post('manage-employment-record-ml-domestic-construction-yearly/save-save-next',[EmployeYearlyMlConstruction::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-ml-domestic-construction-yearly');
Route::get('manage-employment-record-ml-domestic-construction-yearly/add',[EmployeYearlyMlConstruction::class,'add'])->name('manage.employe.add.manage-employment-record-ml-domestic-construction-yearly');
Route::post('manage-employment-record-ml-domestic-construction-yearly/insert',[EmployeYearlyMlConstruction::class,'insert'])->name('manage.employe.insert.manage-employment-record-ml-domestic-construction-yearly');

Route::get('manage-employment-record-ml-domestic-construction-yearly/delete/{id}',[EmployeYearlyMlConstruction::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-ml-domestic-construction-yearly');

Route::post('manage-employment-record-ml-domestic-construction-yearly/delete-submit',[EmployeYearlyMlConstruction::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-ml-domestic-construction-yearly');

Route::get('manage-employment-record-ml-domestic-construction-yearly/edit/{id}',[EmployeYearlyMlConstruction::class,'edit'])->name('manage.employe.edit.manage-employment-record-ml-domestic-construction-yearly');

Route::post('manage-employment-record-ml-domestic-construction-yearly/update',[EmployeYearlyMlConstruction::class,'update'])->name('manage.employe.update.manage-employment-record-ml-domestic-construction-yearly');
Route::get('manage-employment-record-ml-domestic-construction-yearly/statistics',[EmployeYearlyMlConstruction::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-ml-domestic-construction-yearly');



// manage-training-record-ml-domestic-construction-yearly
Route::get('manage-training-record-ml-domestic-construction-yearly',[TrainingYearlyMlConstruction::class,'index'])->name('manage.training-ml-domestic-construction.yearly');
Route::post('manage-training-record-ml-domestic-construction-yearly/save-save-next',[TrainingYearlyMlConstruction::class,'save_next'])->name('manage.training.save.save.next-ml-domestic-construction.yearly');

Route::get('manage-training-record-ml-domestic-construction-yearly/add',[TrainingYearlyMlConstruction::class,'add'])->name('manage.training.add-ml-domestic-construction.yearly');
Route::post('manage-training-record-ml-domestic-construction-yearly/insert',[TrainingYearlyMlConstruction::class,'insert'])->name('manage.training.insert-ml-domestic-construction.yearly');

Route::get('manage-training-record-ml-domestic-construction-yearly/delete/{id}',[TrainingYearlyMlConstruction::class,'deleteView'])->name('manage.training.delete-ml-domestic-construction.yearly');

Route::post('manage-training-record-ml-domestic-construction-yearly/delete-submit',[TrainingYearlyMlConstruction::class,'deleteSubmit'])->name('manage.training.delete.submit-ml-domestic-construction.yearly');

Route::get('manage-training-record-ml-domestic-construction-yearly/edit/{id}',[TrainingYearlyMlConstruction::class,'edit'])->name('manage.training.edit-ml-domestic-construction.yearly');

Route::post('manage-training-record-ml-domestic-construction-yearly/update',[TrainingYearlyMlConstruction::class,'update'])->name('manage.training.update-ml-domestic-construction.yearly');



// manage-financial-information-ml-domestic-construction-yearly
Route::get('manage-financial-information-ml-domestic-construction-yearly',[FinanceYearlyMlConstruction::class,'index'])->name('manage.financemanage-financial-information-ml-domestic-construction-yearly');

Route::post('manage-financial-information-ml-domestic-construction-yearly/save-next',[FinanceYearlyMlConstruction::class,'insert'])->name('manage.finance.insert.csi.pammanage-financial-information-ml-domestic-construction-yearly');

Route::get('manage-financial-information-ml-domestic-construction-yearly/edit/{id}',[FinanceYearlyMlConstruction::class,'edit'])->name('manage.finance.editmanage-financial-information-ml-domestic-construction-yearly');

Route::post('manage-financial-information-ml-domestic-construction-yearly/update',[FinanceYearlyMlConstruction::class,'update'])->name('manage.finance.updatemanage-financial-information-ml-domestic-construction-yearly');


// manage-other-information-ml-domestic-construction-yearly
Route::get('manage-other-information-ml-domestic-construction-yearly',[OtherYearlyMlConstruction::class,'index'])->name('manage.other-ml-domestic-construction-yearly');

Route::post('manage-other-information-ml-domestic-construction-yearly/insert',[OtherYearlyMlConstruction::class,'insert'])->name('manage.other.insert-ml-domestic-construction-yearly');
Route::get('manage-other-information-ml-domestic-construction-yearly/edit/{id}',[OtherYearlyMlConstruction::class,'edit'])->name('manage.other.edit-ml-domestic-construction-yearly');
Route::post('manage-other-information-ml-domestic-construction-yearly/update',[OtherYearlyMlConstruction::class,'update'])->name('manage.other.update-ml-domestic-construction-yearly');


// manage-revenue-ml-domestic-construction-yearly

Route::get('manage-revenue-ml-domestic-construction-yearly',[RevenueYearlyMlConstruction::class,'index'])->name('manage.revenue.manage-revenue-ml-domestic-construction-yearly');
Route::post('manage-revenue-ml-domestic-construction-yearly/insert',[RevenueYearlyMlConstruction::class,'insert'])->name('manage.revenue.insert.manage-revenue-ml-domestic-construction-yearly');
Route::get('manage-revenue-ml-domestic-construction-yearly/edit/{id}',[RevenueYearlyMlConstruction::class,'edit'])->name('manage.revenue.edit.manage-revenue-ml-domestic-construction-yearly');
Route::post('manage-revenue-ml-domestic-construction-yearly/update',[RevenueYearlyMlConstruction::class,'update'])->name('manage.revenue.update.manage-revenue-ml-domestic-construction-yearly');






// manage-service-csi-construction-fdi

// manage-service-csi-construction-fdi

Route::get('manage-service-csi-construction-fdi',[ServiceCsiConstructionFdi::class,'index'])->name('manage.service.manufacture.csi-construction-fdi');

Route::post('manage-service-csi-construction-fdi/save-save-next',[ServiceCsiConstructionFdi::class,'save_next'])->name('manage.service.manufacture.csi-construction-fdi.save.save.next');

Route::get('manage-service-csi-construction-fdi/add',[ServiceCsiConstructionFdi::class,'add'])->name('manage.service.manufacture.add.csi-construction-fdi');
Route::post('manage-service-csi-construction-fdi/insert',[ServiceCsiConstructionFdi::class,'insert'])->name('manage.service.manufacture.insert.csi-construction-fdi');

Route::get('manage-service-csi-construction-fdi/delete/{id}',[ServiceCsiConstructionFdi::class,'deleteView'])->name('manage.service.manufacture.delete.csi-construction-fdi');

Route::post('manage-service-csi-construction-fdi/delete-submit',[ServiceCsiConstructionFdi::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.csi-construction-fdi');

Route::get('manage-service-csi-construction-fdi/edit/{id}',[ServiceCsiConstructionFdi::class,'edit'])->name('manage.service.manufacture.edit.csi-construction-fdi');

Route::post('manage-service-csi-construction-fdi/update',[ServiceCsiConstructionFdi::class,'update'])->name('manage.service.manufacture.update.csi-construction-fdi');


// sales-market-csi-construction-fdi
Route::get('sales-market-csi-construction-fdi',[SalesCsiConstructionFdi::class,'index'])->name('manage.sales.export.csi-construction-fdi');
Route::post('sales-market-csi-construction-fdi/save-save-next',[SalesCsiConstructionFdi::class,'save_next'])->name('manage.sales.export.save.save.next.csi-construction-fdi');
Route::get('sales-market-csi-construction-fdi/edit/{id}',[SalesCsiConstructionFdi::class,'edit'])->name('manage.sales.export.edit.csi-construction-fdi');

Route::post('sales-market-csi-construction-fdi/update',[SalesCsiConstructionFdi::class,'update'])->name('manage.sales.export.update.csi-construction-fdi');


// // raw-material-csi-construction-fdi
Route::get('raw-material-csi-construction-fdi',[RawCsiConstructionFdi::class,'index'])->name('manage.raw.material.csi-construction-fdi');

Route::post('raw-material-csi-construction-fdi/save-save-next',[RawCsiConstructionFdi::class,'save_next'])->name('manage.raw.material.csi-construction-fdi.save.save.next.yearly.yearly');
Route::get('raw-material-csi-construction-fdi/add',[RawCsiConstructionFdi::class,'add'])->name('manage.raw.material.add.csi-construction-fdi');
Route::post('raw-material-csi-construction-fdi/insert',[RawCsiConstructionFdi::class,'insert'])->name('manage.raw.material.insert.csi-construction-fdi');

Route::get('raw-material-csi-construction-fdi/delete/{id}',[RawCsiConstructionFdi::class,'deleteView'])->name('manage.raw.material.delete.csi-construction-fdi');

Route::post('raw-material-csi-construction-fdi/delete-submit',[RawCsiConstructionFdi::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.csi-construction-fdi');

Route::get('raw-material-csi-construction-fdi/edit/{id}',[RawCsiConstructionFdi::class,'edit'])->name('manage.raw.material.edit.csi-construction-fdi');

Route::post('raw-material-csi-construction-fdi/update',[RawCsiConstructionFdi::class,'update'])->name('manage.raw.material.update.csi-construction-fdi');


// // manage-cost-details-csi-construction-fdi

Route::get('manage-cost-details-csi-construction-fdi',[CostCsiConstructionFdi::class,'index'])->name('manage.cost.csi-construction-fdi');
Route::post('manage-cost-details-csi-construction-fdi/save-save-next',[CostCsiConstructionFdi::class,'save_next'])->name('manage.cost.save.save.next.csi-construction-fdi');
Route::get('manage-cost-details-csi-construction-fdi/edit/{id}',[CostCsiConstructionFdi::class,'edit'])->name('manage.cost.edit.csi-construction-fdi');

Route::post('manage-cost-details-csi-construction-fdi/update',[CostCsiConstructionFdi::class,'update'])->name('manage.cost.update.csi-construction-fdi');

// // manage-other-cost-details-csi-construction-fdi

Route::get('manage-other-cost-details-csi-construction-fdi',[OtherCostCsiConstructionFdi::class,'index'])->name('manage.other.cost.other.csi-construction-fdi');
Route::post('manage-other-cost-details-csi-construction-fdi/save-save-next',[OtherCostCsiConstructionFdi::class,'save_next'])->name('manage.other.cost.other.save.save.next.csi-construction-fdi');
Route::get('manage-other-cost-details-csi-construction-fdi/edit/{id}',[OtherCostCsiConstructionFdi::class,'edit'])->name('manage.other.cost.other.edit.csi-construction-fdi');

Route::post('manage-other-cost-details-csi-construction-fdi/update',[OtherCostCsiConstructionFdi::class,'update'])->name('manage.other.cost.other.update.csi-construction-fdi');

// manage-employment-record-csi-construction-fdi
Route::get('manage-employment-record-csi-construction-fdi',[EmpployeCsiConstructionFdi::class,'index'])->name('manage.employe.manage-employment-record-csi-construction-fdi');
Route::post('manage-employment-record-csi-construction-fdi/save-save-next',[EmpployeCsiConstructionFdi::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-csi-construction-fdi');
Route::get('manage-employment-record-csi-construction-fdi/add',[EmpployeCsiConstructionFdi::class,'add'])->name('manage.employe.add.manage-employment-record-csi-construction-fdi');
Route::post('manage-employment-record-csi-construction-fdi/insert',[EmpployeCsiConstructionFdi::class,'insert'])->name('manage.employe.insert.manage-employment-record-csi-construction-fdi');

Route::get('manage-employment-record-csi-construction-fdi/delete/{id}',[EmpployeCsiConstructionFdi::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-csi-construction-fdi');

Route::post('manage-employment-record-csi-construction-fdi/delete-submit',[EmpployeCsiConstructionFdi::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-csi-construction-fdi');

Route::get('manage-employment-record-csi-construction-fdi/edit/{id}',[EmpployeCsiConstructionFdi::class,'edit'])->name('manage.employe.edit.manage-employment-record-csi-construction-fdi');

Route::post('manage-employment-record-csi-construction-fdi/update',[EmpployeCsiConstructionFdi::class,'update'])->name('manage.employe.update.manage-employment-record-csi-construction-fdi');
Route::get('manage-employment-record-csi-construction-fdi/statistics',[EmpployeCsiConstructionFdi::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-csi-construction-fdi');

// manage-training-record-csi-construction-fdi
Route::get('manage-training-record-csi-construction-fdi',[TrainingCsiConstructionFdi::class,'index'])->name('manage.training-csi-construction-fdi');
Route::post('manage-training-record-csi-construction-fdi/save-save-next',[TrainingCsiConstructionFdi::class,'save_next'])->name('manage.training.save.save.next-csi-construction-fdi');

Route::get('manage-training-record-csi-construction-fdi/add',[TrainingCsiConstructionFdi::class,'add'])->name('manage.training.add-csi-construction-fdi');
Route::post('manage-training-record-csi-construction-fdi/insert',[TrainingCsiConstructionFdi::class,'insert'])->name('manage.training.insert-csi-construction-fdi');

Route::get('manage-training-record-csi-construction-fdi/delete/{id}',[TrainingCsiConstructionFdi::class,'deleteView'])->name('manage.training.delete-csi-construction-fdi');

Route::post('manage-training-record-csi-construction-fdi/delete-submit',[TrainingCsiConstructionFdi::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-construction-fdi');

Route::get('manage-training-record-csi-construction-fdi/edit/{id}',[TrainingCsiConstructionFdi::class,'edit'])->name('manage.training.edit-csi-construction-fdi');

Route::post('manage-training-record-csi-construction-fdi/update',[TrainingCsiConstructionFdi::class,'update'])->name('manage.training.update-csi-construction-fdi');



// manage-service-csi-construction-fdi-yearly

Route::get('manage-service-csi-construction-fdi-yearly',[ServiceYearlyCsiConstructionFdi::class,'index'])->name('manage.service.manufacture.csi-construction-fdi.yearly');

Route::post('manage-service-csi-construction-fdi-yearly/save-save-next',[ServiceYearlyCsiConstructionFdi::class,'save_next'])->name('manage.service.manufacture.csi-construction-fdi.save.save.next.yearly');

Route::get('manage-service-csi-construction-fdi-yearly/add',[ServiceYearlyCsiConstructionFdi::class,'add'])->name('manage.service.manufacture.add.csi-construction-fdi.yearly');
Route::post('manage-service-csi-construction-fdi-yearly/insert',[ServiceYearlyCsiConstructionFdi::class,'insert'])->name('manage.service.manufacture.insert.csi-construction-fdi.yearly');

Route::get('manage-service-csi-construction-fdi-yearly/delete/{id}',[ServiceYearlyCsiConstructionFdi::class,'deleteView'])->name('manage.service.manufacture.delete.csi-construction-fdi.yearly');

Route::post('manage-service-csi-construction-fdi-yearly/delete-submit',[ServiceYearlyCsiConstructionFdi::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.csi-construction-fdi.yearly');

Route::get('manage-service-csi-construction-fdi-yearly/edit/{id}',[ServiceYearlyCsiConstructionFdi::class,'edit'])->name('manage.service.manufacture.edit.csi-construction-fdi.yearly');

Route::post('manage-service-csi-construction-fdi-yearly/update',[ServiceYearlyCsiConstructionFdi::class,'update'])->name('manage.service.manufacture.update.csi-construction-fdi.yearly');


// sales-market-csi-construction-fdi-yearly
Route::get('sales-market-csi-construction-fdi-yearly',[SalesYearlyCsiConstructionFdi::class,'index'])->name('manage.sales.export.csi-construction-fdi.yearly');
Route::post('sales-market-csi-construction-fdi-yearly/save-save-next',[SalesYearlyCsiConstructionFdi::class,'save_next'])->name('manage.sales.export.save.save.next.csi-construction-fdi.yearly');
Route::get('sales-market-csi-construction-fdi-yearly/edit/{id}',[SalesYearlyCsiConstructionFdi::class,'edit'])->name('manage.sales.export.edit.csi-construction-fdi.yearly');

Route::post('sales-market-csi-construction-fdi-yearly/update',[SalesYearlyCsiConstructionFdi::class,'update'])->name('manage.sales.export.update.csi-construction-fdi.yearly');


// // raw-material-csi-construction-fdi-yearly
Route::get('raw-material-csi-construction-fdi-yearly',[RawYearlyCsiConstructionFdi::class,'index'])->name('manage.raw.material.csi-construction-fdi.yearly');

Route::post('raw-material-csi-construction-fdi-yearly/save-save-next',[RawYearlyCsiConstructionFdi::class,'save_next'])->name('manage.raw.material.csi-construction-fdi.save.save.next.yearly.yearly.yearly');
Route::get('raw-material-csi-construction-fdi-yearly/add',[RawYearlyCsiConstructionFdi::class,'add'])->name('manage.raw.material.add.csi-construction-fdi.yearly');
Route::post('raw-material-csi-construction-fdi-yearly/insert',[RawYearlyCsiConstructionFdi::class,'insert'])->name('manage.raw.material.insert.csi-construction-fdi.yearly');

Route::get('raw-material-csi-construction-fdi-yearly/delete/{id}',[RawYearlyCsiConstructionFdi::class,'deleteView'])->name('manage.raw.material.delete.csi-construction-fdi.yearly');

Route::post('raw-material-csi-construction-fdi-yearly/delete-submit',[RawYearlyCsiConstructionFdi::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.csi-construction-fdi.yearly');

Route::get('raw-material-csi-construction-fdi-yearly/edit/{id}',[RawYearlyCsiConstructionFdi::class,'edit'])->name('manage.raw.material.edit.csi-construction-fdi.yearly');

Route::post('raw-material-csi-construction-fdi-yearly/update',[RawYearlyCsiConstructionFdi::class,'update'])->name('manage.raw.material.update.csi-construction-fdi.yearly');


// // manage-cost-details-csi-construction-fdi-yearly

Route::get('manage-cost-details-csi-construction-fdi-yearly',[CostYearlyCsiConstructionFdi::class,'index'])->name('manage.cost.csi-construction-fdi.yearly');
Route::post('manage-cost-details-csi-construction-fdi-yearly/save-save-next',[CostYearlyCsiConstructionFdi::class,'save_next'])->name('manage.cost.save.save.next.csi-construction-fdi.yearly');
Route::get('manage-cost-details-csi-construction-fdi-yearly/edit/{id}',[CostYearlyCsiConstructionFdi::class,'edit'])->name('manage.cost.edit.csi-construction-fdi.yearly');

Route::post('manage-cost-details-csi-construction-fdi-yearly/update',[CostYearlyCsiConstructionFdi::class,'update'])->name('manage.cost.update.csi-construction-fdi.yearly');

// // manage-other-cost-details-csi-construction-fdi-yearly

Route::get('manage-other-cost-details-csi-construction-fdi-yearly',[OtherCostYearlyCsiConstructionFdi::class,'index'])->name('manage.other.cost.other.csi-construction-fdi.yearly');
Route::post('manage-other-cost-details-csi-construction-fdi-yearly/save-save-next',[OtherCostYearlyCsiConstructionFdi::class,'save_next'])->name('manage.other.cost.other.save.save.next.csi-construction-fdi.yearly');
Route::get('manage-other-cost-details-csi-construction-fdi-yearly/edit/{id}',[OtherCostYearlyCsiConstructionFdi::class,'edit'])->name('manage.other.cost.other.edit.csi-construction-fdi.yearly');

Route::post('manage-other-cost-details-csi-construction-fdi-yearly/update',[OtherCostYearlyCsiConstructionFdi::class,'update'])->name('manage.other.cost.other.update.csi-construction-fdi.yearly');


// manage-employment-record-csi-construction-fdi-yearly
Route::get('manage-employment-record-csi-construction-fdi-yearly',[EmployeYearlyCsiConstructionFdi::class,'index'])->name('manage.employe.manage-employment-record-csi-construction-fdi-yearly');
Route::post('manage-employment-record-csi-construction-fdi-yearly/save-save-next',[EmployeYearlyCsiConstructionFdi::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-csi-construction-fdi-yearly');
Route::get('manage-employment-record-csi-construction-fdi-yearly/add',[EmployeYearlyCsiConstructionFdi::class,'add'])->name('manage.employe.add.manage-employment-record-csi-construction-fdi-yearly');
Route::post('manage-employment-record-csi-construction-fdi-yearly/insert',[EmployeYearlyCsiConstructionFdi::class,'insert'])->name('manage.employe.insert.manage-employment-record-csi-construction-fdi-yearly');

Route::get('manage-employment-record-csi-construction-fdi-yearly/delete/{id}',[EmployeYearlyCsiConstructionFdi::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-csi-construction-fdi-yearly');

Route::post('manage-employment-record-csi-construction-fdi-yearly/delete-submit',[EmployeYearlyCsiConstructionFdi::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-csi-construction-fdi-yearly');

Route::get('manage-employment-record-csi-construction-fdi-yearly/edit/{id}',[EmployeYearlyCsiConstructionFdi::class,'edit'])->name('manage.employe.edit.manage-employment-record-csi-construction-fdi-yearly');

Route::post('manage-employment-record-csi-construction-fdi-yearly/update',[EmployeYearlyCsiConstructionFdi::class,'update'])->name('manage.employe.update.manage-employment-record-csi-construction-fdi-yearly');
Route::get('manage-employment-record-csi-construction-fdi-yearly/statistics',[EmployeYearlyCsiConstructionFdi::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-csi-construction-fdi-yearly');

// manage-training-record-csi-construction-fdi-yearly
Route::get('manage-training-record-csi-construction-fdi-yearly',[TrainingYearlyCsiConstructionFdi::class,'index'])->name('manage.training-csi-construction-fdi.yearly');
Route::post('manage-training-record-csi-construction-fdi-yearly/save-save-next',[TrainingYearlyCsiConstructionFdi::class,'save_next'])->name('manage.training.save.save.next-csi-construction-fdi.yearly');

Route::get('manage-training-record-csi-construction-fdi-yearly/add',[TrainingYearlyCsiConstructionFdi::class,'add'])->name('manage.training.add-csi-construction-fdi.yearly');
Route::post('manage-training-record-csi-construction-fdi-yearly/insert',[TrainingYearlyCsiConstructionFdi::class,'insert'])->name('manage.training.insert-csi-construction-fdi.yearly');

Route::get('manage-training-record-csi-construction-fdi-yearly/delete/{id}',[TrainingYearlyCsiConstructionFdi::class,'deleteView'])->name('manage.training.delete-csi-construction-fdi.yearly');

Route::post('manage-training-record-csi-construction-fdi-yearly/delete-submit',[TrainingYearlyCsiConstructionFdi::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-construction-fdi.yearly');

Route::get('manage-training-record-csi-construction-fdi-yearly/edit/{id}',[TrainingYearlyCsiConstructionFdi::class,'edit'])->name('manage.training.edit-csi-construction-fdi.yearly');

Route::post('manage-training-record-csi-construction-fdi-yearly/update',[TrainingYearlyCsiConstructionFdi::class,'update'])->name('manage.training.update-csi-construction-fdi.yearly');



// manage-financial-information-csi-construction-fdi-yearly
Route::get('manage-financial-information-csi-construction-fdi-yearly',[FinanceYearlyCsiConstructionFdi::class,'index'])->name('manage.financemanage-financial-information-csi-construction-fdi-yearly');

Route::post('manage-financial-information-csi-construction-fdi-yearly/save-next',[FinanceYearlyCsiConstructionFdi::class,'insert'])->name('manage.finance.insert.csi.pammanage-financial-information-csi-construction-fdi-yearly');

Route::get('manage-financial-information-csi-construction-fdi-yearly/edit/{id}',[FinanceYearlyCsiConstructionFdi::class,'edit'])->name('manage.finance.editmanage-financial-information-csi-construction-fdi-yearly');

Route::post('manage-financial-information-csi-construction-fdi-yearly/update',[FinanceYearlyCsiConstructionFdi::class,'update'])->name('manage.finance.updatemanage-financial-information-csi-construction-fdi-yearly');


// manage-other-information-csi-construction-fdi-yearly
Route::get('manage-other-information-csi-construction-fdi-yearly',[OtherYearlyCsiConstructionFdi::class,'index'])->name('manage.other-manage-other-information-csi-construction-fdi-yearly');

Route::post('manage-other-information-csi-construction-fdi-yearly/insert',[OtherYearlyCsiConstructionFdi::class,'insert'])->name('manage.other.insert-manage-other-information-csi-construction-fdi-yearly');
Route::get('manage-other-information-csi-construction-fdi-yearly/edit/{id}',[OtherYearlyCsiConstructionFdi::class,'edit'])->name('manage.other.edit-manage-other-information-csi-construction-fdi-yearly');
Route::post('manage-other-information-csi-construction-fdi-yearly/update',[OtherYearlyCsiConstructionFdi::class,'update'])->name('manage.other.update-manage-other-information-csi-construction-fdi-yearly');


// manage-revenue-csi-construction-fdi-yearly

Route::get('manage-revenue-csi-construction-fdi-yearly',[RevenueYearlyCsiConstructionFdi::class,'index'])->name('manage.revenue.manage-revenue-csi-construction-fdi-yearly');
Route::post('manage-revenue-csi-construction-fdi-yearly/insert',[RevenueYearlyCsiConstructionFdi::class,'insert'])->name('manage.revenue.insert.manage-revenue-csi-construction-fdi-yearly');
Route::get('manage-revenue-csi-construction-fdi-yearly/edit/{id}',[RevenueYearlyCsiConstructionFdi::class,'edit'])->name('manage.revenue.edit.manage-revenue-csi-construction-fdi-yearly');
Route::post('manage-revenue-csi-construction-fdi-yearly/update',[RevenueYearlyCsiConstructionFdi::class,'update'])->name('manage.revenue.update.manage-revenue-csi-construction-fdi-yearly');







// ml-construction-fdi



// manage-service-ml-construction-fdi

Route::get('manage-service-ml-construction-fdi',[ServiceMlConstructionFdi::class,'index'])->name('manage.service.manufacture.ml-construction-fdi');

Route::post('manage-service-ml-construction-fdi/save-save-next',[ServiceMlConstructionFdi::class,'save_next'])->name('manage.service.manufacture.ml-construction-fdi.save.save.next');

Route::get('manage-service-ml-construction-fdi/add',[ServiceMlConstructionFdi::class,'add'])->name('manage.service.manufacture.add.ml-construction-fdi');
Route::post('manage-service-ml-construction-fdi/insert',[ServiceMlConstructionFdi::class,'insert'])->name('manage.service.manufacture.insert.ml-construction-fdi');

Route::get('manage-service-ml-construction-fdi/delete/{id}',[ServiceMlConstructionFdi::class,'deleteView'])->name('manage.service.manufacture.delete.ml-construction-fdi');

Route::post('manage-service-ml-construction-fdi/delete-submit',[ServiceMlConstructionFdi::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.ml-construction-fdi');

Route::get('manage-service-ml-construction-fdi/edit/{id}',[ServiceMlConstructionFdi::class,'edit'])->name('manage.service.manufacture.edit.ml-construction-fdi');

Route::post('manage-service-ml-construction-fdi/update',[ServiceMlConstructionFdi::class,'update'])->name('manage.service.manufacture.update.ml-construction-fdi');


// sales-ml-construction-fdi
Route::get('sales-ml-construction-fdi',[SalesMlConstructionFdi::class,'index'])->name('manage.sales.export.ml-construction-fdi');
Route::post('sales-ml-construction-fdi/save-save-next',[SalesMlConstructionFdi::class,'save_next'])->name('manage.sales.export.save.save.next.ml-construction-fdi');
Route::get('sales-ml-construction-fdi/edit/{id}',[SalesMlConstructionFdi::class,'edit'])->name('manage.sales.export.edit.ml-construction-fdi');

Route::post('sales-ml-construction-fdi/update',[SalesMlConstructionFdi::class,'update'])->name('manage.sales.export.update.ml-construction-fdi');

// // raw-material-ml-construction-fdi
Route::get('raw-material-ml-construction-fdi',[RawMlConstructionFdi::class,'index'])->name('manage.raw.material.ml-construction-fdi');

Route::post('raw-material-ml-construction-fdi/save-save-next',[RawMlConstructionFdi::class,'save_next'])->name('manage.raw.material.ml-construction-fdi.save.save.next.yearly');
Route::get('raw-material-ml-construction-fdi/add',[RawMlConstructionFdi::class,'add'])->name('manage.raw.material.add.ml-construction-fdi');
Route::post('raw-material-ml-construction-fdi/insert',[RawMlConstructionFdi::class,'insert'])->name('manage.raw.material.insert.ml-construction-fdi');

Route::get('raw-material-ml-construction-fdi/delete/{id}',[RawMlConstructionFdi::class,'deleteView'])->name('manage.raw.material.delete.ml-construction-fdi');

Route::post('raw-material-ml-construction-fdi/delete-submit',[RawMlConstructionFdi::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml-construction-fdi');

Route::get('raw-material-ml-construction-fdi/edit/{id}',[RawMlConstructionFdi::class,'edit'])->name('manage.raw.material.edit.ml-construction-fdi');

Route::post('raw-material-ml-construction-fdi/update',[RawMlConstructionFdi::class,'update'])->name('manage.raw.material.update.ml-construction-fdi');


// // manage-cost-details-ml-construction-fdi

Route::get('manage-cost-details-ml-construction-fdi',[CostMlConstructionFdi::class,'index'])->name('manage.cost.ml-construction-fdi');
Route::post('manage-cost-details-ml-construction-fdi/save-save-next',[CostMlConstructionFdi::class,'save_next'])->name('manage.cost.save.save.next.ml-construction-fdi');
Route::get('manage-cost-details-ml-construction-fdi/edit/{id}',[CostMlConstructionFdi::class,'edit'])->name('manage.cost.edit.ml-construction-fdi');

Route::post('manage-cost-details-ml-construction-fdi/update',[CostMlConstructionFdi::class,'update'])->name('manage.cost.update.ml-construction-fdi');


// manage-employment-record-ml-construction-fdi
Route::get('manage-employment-record-ml-construction-fdi',[EmployeMlConstructionFdi::class,'index'])->name('manage.employe.manage-employment-record-ml-construction-fdi');
Route::post('manage-employment-record-ml-construction-fdi/save-save-next',[EmployeMlConstructionFdi::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-ml-construction-fdi');
Route::get('manage-employment-record-ml-construction-fdi/add',[EmployeMlConstructionFdi::class,'add'])->name('manage.employe.add.manage-employment-record-ml-construction-fdi');
Route::post('manage-employment-record-ml-construction-fdi/insert',[EmployeMlConstructionFdi::class,'insert'])->name('manage.employe.insert.manage-employment-record-ml-construction-fdi');

Route::get('manage-employment-record-ml-construction-fdi/delete/{id}',[EmployeMlConstructionFdi::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-ml-construction-fdi');

Route::post('manage-employment-record-ml-construction-fdi/delete-submit',[EmployeMlConstructionFdi::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-ml-construction-fdi');

Route::get('manage-employment-record-ml-construction-fdi/edit/{id}',[EmployeMlConstructionFdi::class,'edit'])->name('manage.employe.edit.manage-employment-record-ml-construction-fdi');

Route::post('manage-employment-record-ml-construction-fdi/update',[EmployeMlConstructionFdi::class,'update'])->name('manage.employe.update.manage-employment-record-ml-construction-fdi');
Route::get('manage-employment-record-ml-construction-fdi/statistics',[EmployeMlConstructionFdi::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-ml-construction-fdi');


// manage-training-record-ml-construction-fdi
Route::get('manage-training-record-ml-construction-fdi',[TrainingMlConstructionFdi::class,'index'])->name('manage.training-ml-construction-fdi');
Route::post('manage-training-record-ml-construction-fdi/save-save-next',[TrainingMlConstructionFdi::class,'save_next'])->name('manage.training.save.save.next-ml-construction-fdi');

Route::get('manage-training-record-ml-construction-fdi/add',[TrainingMlConstructionFdi::class,'add'])->name('manage.training.add-ml-construction-fdi');
Route::post('manage-training-record-ml-construction-fdi/insert',[TrainingMlConstructionFdi::class,'insert'])->name('manage.training.insert-ml-construction-fdi');

Route::get('manage-training-record-ml-construction-fdi/delete/{id}',[TrainingMlConstructionFdi::class,'deleteView'])->name('manage.training.delete-ml-construction-fdi');

Route::post('manage-training-record-ml-construction-fdi/delete-submit',[TrainingMlConstructionFdi::class,'deleteSubmit'])->name('manage.training.delete.submit-ml-construction-fdi');

Route::get('manage-training-record-ml-construction-fdi/edit/{id}',[TrainingMlConstructionFdi::class,'edit'])->name('manage.training.edit-ml-construction-fdi');

Route::post('manage-training-record-ml-construction-fdi/update',[TrainingMlConstructionFdi::class,'update'])->name('manage.training.update-ml-construction-fdi');





// manage-service-ml-construction-fdi-yearly

Route::get('manage-service-ml-construction-fdi-yearly',[ServiceYearlyMlConstructionFdi::class,'index'])->name('manage.service.manufacture.ml-construction-fdi.yearly');

Route::post('manage-service-ml-construction-fdi-yearly/save-save-next',[ServiceYearlyMlConstructionFdi::class,'save_next'])->name('manage.service.manufacture.ml-construction-fdi.save.save.next.yearly');

Route::get('manage-service-ml-construction-fdi-yearly/add',[ServiceYearlyMlConstructionFdi::class,'add'])->name('manage.service.manufacture.add.ml-construction-fdi.yearly');
Route::post('manage-service-ml-construction-fdi-yearly/insert',[ServiceYearlyMlConstructionFdi::class,'insert'])->name('manage.service.manufacture.insert.ml-construction-fdi.yearly');

Route::get('manage-service-ml-construction-fdi-yearly/delete/{id}',[ServiceYearlyMlConstructionFdi::class,'deleteView'])->name('manage.service.manufacture.delete.ml-construction-fdi.yearly');

Route::post('manage-service-ml-construction-fdi-yearly/delete-submit',[ServiceYearlyMlConstructionFdi::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.ml-construction-fdi.yearly');

Route::get('manage-service-ml-construction-fdi-yearly/edit/{id}',[ServiceYearlyMlConstructionFdi::class,'edit'])->name('manage.service.manufacture.edit.ml-construction-fdi.yearly');

Route::post('manage-service-ml-construction-fdi-yearly/update',[ServiceYearlyMlConstructionFdi::class,'update'])->name('manage.service.manufacture.update.ml-construction-fdi.yearly');


// sales-ml-construction-fdi-yearly
Route::get('sales-ml-construction-fdi-yearly',[SalesYearlyMlConstructionFdi::class,'index'])->name('manage.sales.export.ml-construction-fdi.yearly');
Route::post('sales-ml-construction-fdi-yearly/save-save-next',[SalesYearlyMlConstructionFdi::class,'save_next'])->name('manage.sales.export.save.save.next.ml-construction-fdi.yearly');
Route::get('sales-ml-construction-fdi-yearly/edit/{id}',[SalesYearlyMlConstructionFdi::class,'edit'])->name('manage.sales.export.edit.ml-construction-fdi.yearly');

Route::post('sales-ml-construction-fdi-yearly/update',[SalesYearlyMlConstructionFdi::class,'update'])->name('manage.sales.export.update.ml-construction-fdi.yearly');

// // raw-material-ml-construction-fdi-yearly
Route::get('raw-material-ml-construction-fdi-yearly',[RawYearlyMlConstructionFdi::class,'index'])->name('manage.raw.material.ml-construction-fdi.yearly');

Route::post('raw-material-ml-construction-fdi-yearly/save-save-next',[RawYearlyMlConstructionFdi::class,'save_next'])->name('manage.raw.material.ml-construction-fdi.save.save.next.yearly.yearly');
Route::get('raw-material-ml-construction-fdi-yearly/add',[RawYearlyMlConstructionFdi::class,'add'])->name('manage.raw.material.add.ml-construction-fdi.yearly');
Route::post('raw-material-ml-construction-fdi-yearly/insert',[RawYearlyMlConstructionFdi::class,'insert'])->name('manage.raw.material.insert.ml-construction-fdi.yearly');

Route::get('raw-material-ml-construction-fdi-yearly/delete/{id}',[RawYearlyMlConstructionFdi::class,'deleteView'])->name('manage.raw.material.delete.ml-construction-fdi.yearly');

Route::post('raw-material-ml-construction-fdi-yearly/delete-submit',[RawYearlyMlConstructionFdi::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml-construction-fdi.yearly');

Route::get('raw-material-ml-construction-fdi-yearly/edit/{id}',[RawYearlyMlConstructionFdi::class,'edit'])->name('manage.raw.material.edit.ml-construction-fdi.yearly');

Route::post('raw-material-ml-construction-fdi-yearly/update',[RawYearlyMlConstructionFdi::class,'update'])->name('manage.raw.material.update.ml-construction-fdi.yearly');


// // manage-cost-details-ml-construction-fdi-yearly

Route::get('manage-cost-details-ml-construction-fdi-yearly',[CostYearlyMlConstructionFdi::class,'index'])->name('manage.cost.ml-construction-fdi.yearly');
Route::post('manage-cost-details-ml-construction-fdi-yearly/save-save-next',[CostYearlyMlConstructionFdi::class,'save_next'])->name('manage.cost.save.save.next.ml-construction-fdi.yearly');
Route::get('manage-cost-details-ml-construction-fdi-yearly/edit/{id}',[CostYearlyMlConstructionFdi::class,'edit'])->name('manage.cost.edit.ml-construction-fdi.yearly');

Route::post('manage-cost-details-ml-construction-fdi-yearly/update',[CostYearlyMlConstructionFdi::class,'update'])->name('manage.cost.update.ml-construction-fdi.yearly');


// manage-employment-record-ml-construction-fdi-yearly
Route::get('manage-employment-record-ml-construction-fdi-yearly',[EmployeYearlyMlConstructionFdi::class,'index'])->name('manage.employe.manage-employment-record-ml-construction-fdi-yearly');
Route::post('manage-employment-record-ml-construction-fdi-yearly/save-save-next',[EmployeYearlyMlConstructionFdi::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-ml-construction-fdi-yearly');
Route::get('manage-employment-record-ml-construction-fdi-yearly/add',[EmployeYearlyMlConstructionFdi::class,'add'])->name('manage.employe.add.manage-employment-record-ml-construction-fdi-yearly');
Route::post('manage-employment-record-ml-construction-fdi-yearly/insert',[EmployeYearlyMlConstructionFdi::class,'insert'])->name('manage.employe.insert.manage-employment-record-ml-construction-fdi-yearly');

Route::get('manage-employment-record-ml-construction-fdi-yearly/delete/{id}',[EmployeYearlyMlConstructionFdi::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-ml-construction-fdi-yearly');

Route::post('manage-employment-record-ml-construction-fdi-yearly/delete-submit',[EmployeYearlyMlConstructionFdi::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-ml-construction-fdi-yearly');

Route::get('manage-employment-record-ml-construction-fdi-yearly/edit/{id}',[EmployeYearlyMlConstructionFdi::class,'edit'])->name('manage.employe.edit.manage-employment-record-ml-construction-fdi-yearly');

Route::post('manage-employment-record-ml-construction-fdi-yearly/update',[EmployeYearlyMlConstructionFdi::class,'update'])->name('manage.employe.update.manage-employment-record-ml-construction-fdi-yearly');
Route::get('manage-employment-record-ml-construction-fdi-yearly/statistics',[EmployeYearlyMlConstructionFdi::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-ml-construction-fdi-yearly');


// manage-training-record-ml-construction-fdi-yearly
Route::get('manage-training-record-ml-construction-fdi-yearly',[TrainingYearlyMlConstructionFdi::class,'index'])->name('manage.training-ml-construction-fdi.yearly');
Route::post('manage-training-record-ml-construction-fdi-yearly/save-save-next',[TrainingYearlyMlConstructionFdi::class,'save_next'])->name('manage.training.save.save.next-ml-construction-fdi.yearly');

Route::get('manage-training-record-ml-construction-fdi-yearly/add',[TrainingYearlyMlConstructionFdi::class,'add'])->name('manage.training.add-ml-construction-fdi.yearly');
Route::post('manage-training-record-ml-construction-fdi-yearly/insert',[TrainingYearlyMlConstructionFdi::class,'insert'])->name('manage.training.insert-ml-construction-fdi.yearly');

Route::get('manage-training-record-ml-construction-fdi-yearly/delete/{id}',[TrainingYearlyMlConstructionFdi::class,'deleteView'])->name('manage.training.delete-ml-construction-fdi.yearly');

Route::post('manage-training-record-ml-construction-fdi-yearly/delete-submit',[TrainingYearlyMlConstructionFdi::class,'deleteSubmit'])->name('manage.training.delete.submit-ml-construction-fdi.yearly');

Route::get('manage-training-record-ml-construction-fdi-yearly/edit/{id}',[TrainingYearlyMlConstructionFdi::class,'edit'])->name('manage.training.edit-ml-construction-fdi.yearly');

Route::post('manage-training-record-ml-construction-fdi-yearly/update',[TrainingYearlyMlConstructionFdi::class,'update'])->name('manage.training.update-ml-construction-fdi.yearly');



// manage-financial-information-ml-construction-fdi-yearly
Route::get('manage-financial-information-ml-construction-fdi-yearly',[FinanceYearlyMlConstructionFdi::class,'index'])->name('manage.financemanage-financial-information-ml-construction-fdi-yearly');

Route::post('manage-financial-information-ml-construction-fdi-yearly/save-next',[FinanceYearlyMlConstructionFdi::class,'insert'])->name('manage.finance.insert.csi.pammanage-financial-information-ml-construction-fdi-yearly');

Route::get('manage-financial-information-ml-construction-fdi-yearly/edit/{id}',[FinanceYearlyMlConstructionFdi::class,'edit'])->name('manage.finance.editmanage-financial-information-ml-construction-fdi-yearly');

Route::post('manage-financial-information-ml-construction-fdi-yearly/update',[FinanceYearlyMlConstructionFdi::class,'update'])->name('manage.finance.updatemanage-financial-information-ml-construction-fdi-yearly');


// manage-other-information-ml-construction-fdi-yearly
Route::get('manage-other-information-ml-construction-fdi-yearly',[OtherYearlyMlConstructionFdi::class,'index'])->name('manage.other-ml-construction-fdi-yearly');

Route::post('manage-other-information-ml-construction-fdi-yearly/insert',[OtherYearlyMlConstructionFdi::class,'insert'])->name('manage.other.insert-ml-construction-fdi-yearly');
Route::get('manage-other-information-ml-construction-fdi-yearly/edit/{id}',[OtherYearlyMlConstructionFdi::class,'edit'])->name('manage.other.edit-ml-construction-fdi-yearly');
Route::post('manage-other-information-ml-construction-fdi-yearly/update',[OtherYearlyMlConstructionFdi::class,'update'])->name('manage.other.update-ml-construction-fdi-yearly');


// manage-revenue-ml-construction-fdi-yearly

Route::get('manage-revenue-ml-construction-fdi-yearly',[RevenueYearlyMlConstructionFdi::class,'index'])->name('manage.revenue.manage-revenue-ml-construction-fdi-yearly');
Route::post('manage-revenue-ml-construction-fdi-yearly/insert',[RevenueYearlyMlConstructionFdi::class,'insert'])->name('manage.revenue.insert.manage-revenue-ml-construction-fdi-yearly');
Route::get('manage-revenue-ml-construction-fdi-yearly/edit/{id}',[RevenueYearlyMlConstructionFdi::class,'edit'])->name('manage.revenue.edit.manage-revenue-ml-construction-fdi-yearly');
Route::post('manage-revenue-ml-construction-fdi-yearly/update',[RevenueYearlyMlConstructionFdi::class,'update'])->name('manage.revenue.update.manage-revenue-ml-construction-fdi-yearly');







// manage-service-ml-services-fdi

Route::get('manage-service-ml-services-fdi',[ServiceMlConstructionFdi::class,'index'])->name('manage.service.manufacture.ml-services-fdi');

Route::post('manage-service-ml-services-fdi/save-save-next',[ServiceMlConstructionFdi::class,'save_next'])->name('manage.service.manufacture.ml-services-fdi.save.save.next');

Route::get('manage-service-ml-services-fdi/add',[ServiceMlConstructionFdi::class,'add'])->name('manage.service.manufacture.add.ml-services-fdi');
Route::post('manage-service-ml-services-fdi/insert',[ServiceMlConstructionFdi::class,'insert'])->name('manage.service.manufacture.insert.ml-services-fdi');

Route::get('manage-service-ml-services-fdi/delete/{id}',[ServiceMlConstructionFdi::class,'deleteView'])->name('manage.service.manufacture.delete.ml-services-fdi');

Route::post('manage-service-ml-services-fdi/delete-submit',[ServiceMlConstructionFdi::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.ml-services-fdi');

Route::get('manage-service-ml-services-fdi/edit/{id}',[ServiceMlConstructionFdi::class,'edit'])->name('manage.service.manufacture.edit.ml-services-fdi');

Route::post('manage-service-ml-services-fdi/update',[ServiceMlConstructionFdi::class,'update'])->name('manage.service.manufacture.update.ml-services-fdi');


// sales-ml-services-fdi
Route::get('sales-ml-services-fdi',[SalesMlServiceFdi::class,'index'])->name('manage.sales.export.ml-services-fdi');
Route::post('sales-ml-services-fdi/save-save-next',[SalesMlServiceFdi::class,'save_next'])->name('manage.sales.export.save.save.next.ml-services-fdi');
Route::get('sales-ml-services-fdi/edit/{id}',[SalesMlServiceFdi::class,'edit'])->name('manage.sales.export.edit.ml-services-fdi');

Route::post('sales-ml-services-fdi/update',[SalesMlServiceFdi::class,'update'])->name('manage.sales.export.update.ml-services-fdi');


// // raw-material-ml-services-fdi
Route::get('raw-material-ml-services-fdi',[RawMlServiceFdi::class,'index'])->name('manage.raw.material.ml-services-fdi');

Route::post('raw-material-ml-services-fdi/save-save-next',[RawMlServiceFdi::class,'save_next'])->name('manage.raw.material.ml-services-fdi.save.save.next.yearly');
Route::get('raw-material-ml-services-fdi/add',[RawMlServiceFdi::class,'add'])->name('manage.raw.material.add.ml-services-fdi');
Route::post('raw-material-ml-services-fdi/insert',[RawMlServiceFdi::class,'insert'])->name('manage.raw.material.insert.ml-services-fdi');

Route::get('raw-material-ml-services-fdi/delete/{id}',[RawMlServiceFdi::class,'deleteView'])->name('manage.raw.material.delete.ml-services-fdi');

Route::post('raw-material-ml-services-fdi/delete-submit',[RawMlServiceFdi::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml-services-fdi');

Route::get('raw-material-ml-services-fdi/edit/{id}',[RawMlServiceFdi::class,'edit'])->name('manage.raw.material.edit.ml-services-fdi');

Route::post('raw-material-ml-services-fdi/update',[RawMlServiceFdi::class,'update'])->name('manage.raw.material.update.ml-services-fdi');


// // manage-cost-details-ml-services-fdi

Route::get('manage-cost-details-ml-services-fdi',[CostlServiceFdi::class,'index'])->name('manage.cost.ml-services-fdi');
Route::post('manage-cost-details-ml-services-fdi/save-save-next',[CostlServiceFdi::class,'save_next'])->name('manage.cost.save.save.next.ml-services-fdi');
Route::get('manage-cost-details-ml-services-fdi/edit/{id}',[CostlServiceFdi::class,'edit'])->name('manage.cost.edit.ml-services-fdi');

Route::post('manage-cost-details-ml-services-fdi/update',[CostlServiceFdi::class,'update'])->name('manage.cost.update.ml-services-fdi');


// manage-employment-record-ml-services-fdi
Route::get('manage-employment-record-ml-services-fdi',[EmployelServiceFdi::class,'index'])->name('manage.employe.manage-employment-record-ml-services-fdi');
Route::post('manage-employment-record-ml-services-fdi/save-save-next',[EmployelServiceFdi::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-ml-services-fdi');
Route::get('manage-employment-record-ml-services-fdi/add',[EmployelServiceFdi::class,'add'])->name('manage.employe.add.manage-employment-record-ml-services-fdi');
Route::post('manage-employment-record-ml-services-fdi/insert',[EmployelServiceFdi::class,'insert'])->name('manage.employe.insert.manage-employment-record-ml-services-fdi');

Route::get('manage-employment-record-ml-services-fdi/delete/{id}',[EmployelServiceFdi::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-ml-services-fdi');

Route::post('manage-employment-record-ml-services-fdi/delete-submit',[EmployelServiceFdi::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-ml-services-fdi');

Route::get('manage-employment-record-ml-services-fdi/edit/{id}',[EmployelServiceFdi::class,'edit'])->name('manage.employe.edit.manage-employment-record-ml-services-fdi');

Route::post('manage-employment-record-ml-services-fdi/update',[EmployelServiceFdi::class,'update'])->name('manage.employe.update.manage-employment-record-ml-services-fdi');
Route::get('manage-employment-record-ml-services-fdi/statistics',[EmployelServiceFdi::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-ml-services-fdi');


// manage-training-record-ml-services-fdi
Route::get('manage-training-record-ml-services-fdi',[TraininglServiceFdi::class,'index'])->name('manage.training-ml-services-fdi');
Route::post('manage-training-record-ml-services-fdi/save-save-next',[TraininglServiceFdi::class,'save_next'])->name('manage.training.save.save.next-ml-services-fdi');

Route::get('manage-training-record-ml-services-fdi/add',[TraininglServiceFdi::class,'add'])->name('manage.training.add-ml-services-fdi');
Route::post('manage-training-record-ml-services-fdi/insert',[TraininglServiceFdi::class,'insert'])->name('manage.training.insert-ml-services-fdi');

Route::get('manage-training-record-ml-services-fdi/delete/{id}',[TraininglServiceFdi::class,'deleteView'])->name('manage.training.delete-ml-services-fdi');

Route::post('manage-training-record-ml-services-fdi/delete-submit',[TraininglServiceFdi::class,'deleteSubmit'])->name('manage.training.delete.submit-ml-services-fdi');

Route::get('manage-training-record-ml-services-fdi/edit/{id}',[TraininglServiceFdi::class,'edit'])->name('manage.training.edit-ml-services-fdi');

Route::post('manage-training-record-ml-services-fdi/update',[TraininglServiceFdi::class,'update'])->name('manage.training.update-ml-services-fdi');




// manage-service-ml-services-fdi-yearly

Route::get('manage-service-ml-services-fdi-yearly',[ServiceYearlyMlServiceFdi::class,'index'])->name('manage.service.manufacture.ml-services-fdi.yearly');

Route::post('manage-service-ml-services-fdi-yearly/save-save-next',[ServiceYearlyMlServiceFdi::class,'save_next'])->name('manage.service.manufacture.ml-services-fdi.save.save.next.yearly');

Route::get('manage-service-ml-services-fdi-yearly/add',[ServiceYearlyMlServiceFdi::class,'add'])->name('manage.service.manufacture.add.ml-services-fdi.yearly');
Route::post('manage-service-ml-services-fdi-yearly/insert',[ServiceYearlyMlServiceFdi::class,'insert'])->name('manage.service.manufacture.insert.ml-services-fdi.yearly');

Route::get('manage-service-ml-services-fdi-yearly/delete/{id}',[ServiceYearlyMlServiceFdi::class,'deleteView'])->name('manage.service.manufacture.delete.ml-services-fdi.yearly');

Route::post('manage-service-ml-services-fdi-yearly/delete-submit',[ServiceYearlyMlServiceFdi::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.ml-services-fdi.yearly');

Route::get('manage-service-ml-services-fdi-yearly/edit/{id}',[ServiceYearlyMlServiceFdi::class,'edit'])->name('manage.service.manufacture.edit.ml-services-fdi.yearly');

Route::post('manage-service-ml-services-fdi-yearly/update',[ServiceYearlyMlServiceFdi::class,'update'])->name('manage.service.manufacture.update.ml-services-fdi.yearly');


// sales-ml-services-fdi-yearly
Route::get('sales-ml-services-fdi-yearly',[SalesYearlyMlServiceFdi::class,'index'])->name('manage.sales.export.ml-services-fdi.yearly');
Route::post('sales-ml-services-fdi-yearly/save-save-next',[SalesYearlyMlServiceFdi::class,'save_next'])->name('manage.sales.export.save.save.next.ml-services-fdi.yearly');
Route::get('sales-ml-services-fdi-yearly/edit/{id}',[SalesYearlyMlServiceFdi::class,'edit'])->name('manage.sales.export.edit.ml-services-fdi.yearly');

Route::post('sales-ml-services-fdi-yearly/update',[SalesYearlyMlServiceFdi::class,'update'])->name('manage.sales.export.update.ml-services-fdi.yearly');

// // raw-material-ml-services-fdi-yearly
Route::get('raw-material-ml-services-fdi-yearly',[RawYearlyMlServiceFdi::class,'index'])->name('manage.raw.material.ml-services-fdi.yearly');

Route::post('raw-material-ml-services-fdi-yearly/save-save-next',[RawYearlyMlServiceFdi::class,'save_next'])->name('manage.raw.material.ml-services-fdi.save.save.next.yearly.yearly');
Route::get('raw-material-ml-services-fdi-yearly/add',[RawYearlyMlServiceFdi::class,'add'])->name('manage.raw.material.add.ml-services-fdi.yearly');
Route::post('raw-material-ml-services-fdi-yearly/insert',[RawYearlyMlServiceFdi::class,'insert'])->name('manage.raw.material.insert.ml-services-fdi.yearly');

Route::get('raw-material-ml-services-fdi-yearly/delete/{id}',[RawYearlyMlServiceFdi::class,'deleteView'])->name('manage.raw.material.delete.ml-services-fdi.yearly');

Route::post('raw-material-ml-services-fdi-yearly/delete-submit',[RawYearlyMlServiceFdi::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.ml-services-fdi.yearly');

Route::get('raw-material-ml-services-fdi-yearly/edit/{id}',[RawYearlyMlServiceFdi::class,'edit'])->name('manage.raw.material.edit.ml-services-fdi.yearly');

Route::post('raw-material-ml-services-fdi-yearly/update',[RawYearlyMlServiceFdi::class,'update'])->name('manage.raw.material.update.ml-services-fdi.yearly');


// // manage-cost-details-ml-services-fdi-yearly

Route::get('manage-cost-details-ml-services-fdi-yearly',[CostYearlyMlServiceFdi::class,'index'])->name('manage.cost.ml-services-fdi.yearly');
Route::post('manage-cost-details-ml-services-fdi-yearly/save-save-next',[CostYearlyMlServiceFdi::class,'save_next'])->name('manage.cost.save.save.next.ml-services-fdi.yearly');
Route::get('manage-cost-details-ml-services-fdi-yearly/edit/{id}',[CostYearlyMlServiceFdi::class,'edit'])->name('manage.cost.edit.ml-services-fdi.yearly');

Route::post('manage-cost-details-ml-services-fdi-yearly/update',[CostYearlyMlServiceFdi::class,'update'])->name('manage.cost.update.ml-services-fdi.yearly');


// manage-employment-record-ml-services-fdi-yearly
Route::get('manage-employment-record-ml-services-fdi-yearly',[EmployeYearlyMlServiceFdi::class,'index'])->name('manage.employe.manage-employment-record-ml-services-fdi-yearly');
Route::post('manage-employment-record-ml-services-fdi-yearly/save-save-next',[EmployeYearlyMlServiceFdi::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-ml-services-fdi-yearly');
Route::get('manage-employment-record-ml-services-fdi-yearly/add',[EmployeYearlyMlServiceFdi::class,'add'])->name('manage.employe.add.manage-employment-record-ml-services-fdi-yearly');
Route::post('manage-employment-record-ml-services-fdi-yearly/insert',[EmployeYearlyMlServiceFdi::class,'insert'])->name('manage.employe.insert.manage-employment-record-ml-services-fdi-yearly');

Route::get('manage-employment-record-ml-services-fdi-yearly/delete/{id}',[EmployeYearlyMlServiceFdi::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-ml-services-fdi-yearly');

Route::post('manage-employment-record-ml-services-fdi-yearly/delete-submit',[EmployeYearlyMlServiceFdi::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-ml-services-fdi-yearly');

Route::get('manage-employment-record-ml-services-fdi-yearly/edit/{id}',[EmployeYearlyMlServiceFdi::class,'edit'])->name('manage.employe.edit.manage-employment-record-ml-services-fdi-yearly');

Route::post('manage-employment-record-ml-services-fdi-yearly/update',[EmployeYearlyMlServiceFdi::class,'update'])->name('manage.employe.update.manage-employment-record-ml-services-fdi-yearly');
Route::get('manage-employment-record-ml-services-fdi-yearly/statistics',[EmployeYearlyMlServiceFdi::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-ml-services-fdi-yearly');


// manage-training-record-ml-services-fdi-yearly
Route::get('manage-training-record-ml-services-fdi-yearly',[TrainingYearlyMlServiceFdi::class,'index'])->name('manage.training-ml-services-fdi.yearly');
Route::post('manage-training-record-ml-services-fdi-yearly/save-save-next',[TrainingYearlyMlServiceFdi::class,'save_next'])->name('manage.training.save.save.next-ml-services-fdi.yearly');

Route::get('manage-training-record-ml-services-fdi-yearly/add',[TrainingYearlyMlServiceFdi::class,'add'])->name('manage.training.add-ml-services-fdi.yearly');
Route::post('manage-training-record-ml-services-fdi-yearly/insert',[TrainingYearlyMlServiceFdi::class,'insert'])->name('manage.training.insert-ml-services-fdi.yearly');

Route::get('manage-training-record-ml-services-fdi-yearly/delete/{id}',[TrainingYearlyMlServiceFdi::class,'deleteView'])->name('manage.training.delete-ml-services-fdi.yearly');

Route::post('manage-training-record-ml-services-fdi-yearly/delete-submit',[TrainingYearlyMlServiceFdi::class,'deleteSubmit'])->name('manage.training.delete.submit-ml-services-fdi.yearly');

Route::get('manage-training-record-ml-services-fdi-yearly/edit/{id}',[TrainingYearlyMlServiceFdi::class,'edit'])->name('manage.training.edit-ml-services-fdi.yearly');

Route::post('manage-training-record-ml-services-fdi-yearly/update',[TrainingYearlyMlServiceFdi::class,'update'])->name('manage.training.update-ml-services-fdi.yearly');



// manage-financial-information-ml-services-fdi-yearly
Route::get('manage-financial-information-ml-services-fdi-yearly',[FinanceYearlyMlServiceFdi::class,'index'])->name('manage.financemanage-financial-information-ml-services-fdi-yearly');

Route::post('manage-financial-information-ml-services-fdi-yearly/save-next',[FinanceYearlyMlServiceFdi::class,'insert'])->name('manage.finance.insert.csi.pammanage-financial-information-ml-services-fdi-yearly');

Route::get('manage-financial-information-ml-services-fdi-yearly/edit/{id}',[FinanceYearlyMlServiceFdi::class,'edit'])->name('manage.finance.editmanage-financial-information-ml-services-fdi-yearly');

Route::post('manage-financial-information-ml-services-fdi-yearly/update',[FinanceYearlyMlServiceFdi::class,'update'])->name('manage.finance.updatemanage-financial-information-ml-services-fdi-yearly');


// manage-other-information-ml-services-fdi-yearly
Route::get('manage-other-information-ml-services-fdi-yearly',[OtherYearlyMlServiceFdi::class,'index'])->name('manage.other-ml-services-fdi-yearly');

Route::post('manage-other-information-ml-services-fdi-yearly/insert',[OtherYearlyMlServiceFdi::class,'insert'])->name('manage.other.insert-ml-services-fdi-yearly');
Route::get('manage-other-information-ml-services-fdi-yearly/edit/{id}',[OtherYearlyMlServiceFdi::class,'edit'])->name('manage.other.edit-ml-services-fdi-yearly');
Route::post('manage-other-information-ml-services-fdi-yearly/update',[OtherYearlyMlServiceFdi::class,'update'])->name('manage.other.update-ml-services-fdi-yearly');


// manage-revenue-ml-services-fdi-yearly

Route::get('manage-revenue-ml-services-fdi-yearly',[RevenueYearlyMlServiceFdi::class,'index'])->name('manage.revenue.manage-revenue-ml-services-fdi-yearly');
Route::post('manage-revenue-ml-services-fdi-yearly/insert',[RevenueYearlyMlServiceFdi::class,'insert'])->name('manage.revenue.insert.manage-revenue-ml-services-fdi-yearly');
Route::get('manage-revenue-ml-services-fdi-yearly/edit/{id}',[RevenueYearlyMlServiceFdi::class,'edit'])->name('manage.revenue.edit.manage-revenue-ml-services-fdi-yearly');
Route::post('manage-revenue-ml-services-fdi-yearly/update',[RevenueYearlyMlServiceFdi::class,'update'])->name('manage.revenue.update.manage-revenue-ml-services-fdi-yearly');





// manage-service-csi-service-fdi///////////////////////////////////////////////////////////////////////////////
 


// manage-service-csi-service-fdi

Route::get('manage-service-csi-service-fdi',[ServiceCsiServiceFdi::class,'index'])->name('manage.service.manufacture.csi-service-fdi');

Route::post('manage-service-csi-service-fdi/save-save-next',[ServiceCsiServiceFdi::class,'save_next'])->name('manage.service.manufacture.csi-service-fdi.save.save.next');

Route::get('manage-service-csi-service-fdi/add',[ServiceCsiServiceFdi::class,'add'])->name('manage.service.manufacture.add.csi-service-fdi');
Route::post('manage-service-csi-service-fdi/insert',[ServiceCsiServiceFdi::class,'insert'])->name('manage.service.manufacture.insert.csi-service-fdi');

Route::get('manage-service-csi-service-fdi/delete/{id}',[ServiceCsiServiceFdi::class,'deleteView'])->name('manage.service.manufacture.delete.csi-service-fdi');

Route::post('manage-service-csi-service-fdi/delete-submit',[ServiceCsiServiceFdi::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.csi-service-fdi');

Route::get('manage-service-csi-service-fdi/edit/{id}',[ServiceCsiServiceFdi::class,'edit'])->name('manage.service.manufacture.edit.csi-service-fdi');

Route::post('manage-service-csi-service-fdi/update',[ServiceCsiServiceFdi::class,'update'])->name('manage.service.manufacture.update.csi-service-fdi');


// sales-market-csi-service-fdi
Route::get('sales-market-csi-service-fdi',[SalesCsiServiceFdi::class,'index'])->name('manage.sales.export.csi-service-fdi');
Route::post('sales-market-csi-service-fdi/save-save-next',[SalesCsiServiceFdi::class,'save_next'])->name('manage.sales.export.save.save.next.csi-service-fdi');
Route::get('sales-market-csi-service-fdi/edit/{id}',[SalesCsiServiceFdi::class,'edit'])->name('manage.sales.export.edit.csi-service-fdi');

Route::post('sales-market-csi-service-fdi/update',[SalesCsiServiceFdi::class,'update'])->name('manage.sales.export.update.csi-service-fdi');


// // raw-material-csi-service-fdi
Route::get('raw-material-csi-service-fdi',[RawCsiServiceFdi::class,'index'])->name('manage.raw.material.csi-service-fdi');

Route::post('raw-material-csi-service-fdi/save-save-next',[RawCsiServiceFdi::class,'save_next'])->name('manage.raw.material.csi-service-fdi.save.save.next.yearly');
Route::get('raw-material-csi-service-fdi/add',[RawCsiServiceFdi::class,'add'])->name('manage.raw.material.add.csi-service-fdi');
Route::post('raw-material-csi-service-fdi/insert',[RawCsiServiceFdi::class,'insert'])->name('manage.raw.material.insert.csi-service-fdi');

Route::get('raw-material-csi-service-fdi/delete/{id}',[RawCsiServiceFdi::class,'deleteView'])->name('manage.raw.material.delete.csi-service-fdi');

Route::post('raw-material-csi-service-fdi/delete-submit',[RawCsiServiceFdi::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.csi-service-fdi');

Route::get('raw-material-csi-service-fdi/edit/{id}',[RawCsiServiceFdi::class,'edit'])->name('manage.raw.material.edit.csi-service-fdi');

Route::post('raw-material-csi-service-fdi/update',[RawCsiServiceFdi::class,'update'])->name('manage.raw.material.update.csi-service-fdi');


// // manage-cost-details-csi-service-fdi

Route::get('manage-cost-details-csi-service-fdi',[CostCsiServiceFdi::class,'index'])->name('manage.cost.csi-service-fdi');
Route::post('manage-cost-details-csi-service-fdi/save-save-next',[CostCsiServiceFdi::class,'save_next'])->name('manage.cost.save.save.next.csi-service-fdi');
Route::get('manage-cost-details-csi-service-fdi/edit/{id}',[CostCsiServiceFdi::class,'edit'])->name('manage.cost.edit.csi-service-fdi');

Route::post('manage-cost-details-csi-service-fdi/update',[CostCsiServiceFdi::class,'update'])->name('manage.cost.update.csi-service-fdi');

// // manage-other-cost-details-csi-service-fdi

Route::get('manage-other-cost-details-csi-service-fdi',[OtherCostCsiServiceFdi::class,'index'])->name('manage.other.cost.other.csi-service-fdi');
Route::post('manage-other-cost-details-csi-service-fdi/save-save-next',[OtherCostCsiServiceFdi::class,'save_next'])->name('manage.other.cost.other.save.save.next.csi-service-fdi');
Route::get('manage-other-cost-details-csi-service-fdi/edit/{id}',[OtherCostCsiServiceFdi::class,'edit'])->name('manage.other.cost.other.edit.csi-service-fdi');

Route::post('manage-other-cost-details-csi-service-fdi/update',[OtherCostCsiServiceFdi::class,'update'])->name('manage.other.cost.other.update.csi-service-fdi');



// manage-employment-record-csi-service-fdi
Route::get('manage-employment-record-csi-service-fdi',[EmployeCsiServiceFdi::class,'index'])->name('manage.employe.manage-employment-record-csi-service-fdi');
Route::post('manage-employment-record-csi-service-fdi/save-save-next',[EmployeCsiServiceFdi::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record-csi-service-fdi');
Route::get('manage-employment-record-csi-service-fdi/add',[EmployeCsiServiceFdi::class,'add'])->name('manage.employe.add.manage-employment-record-csi-service-fdi');
Route::post('manage-employment-record-csi-service-fdi/insert',[EmployeCsiServiceFdi::class,'insert'])->name('manage.employe.insert.manage-employment-record-csi-service-fdi');

Route::get('manage-employment-record-csi-service-fdi/delete/{id}',[EmployeCsiServiceFdi::class,'deleteView'])->name('manage.employe.delete.manage-employment-record-csi-service-fdi');

Route::post('manage-employment-record-csi-service-fdi/delete-submit',[EmployeCsiServiceFdi::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record-csi-service-fdi');

Route::get('manage-employment-record-csi-service-fdi/edit/{id}',[EmployeCsiServiceFdi::class,'edit'])->name('manage.employe.edit.manage-employment-record-csi-service-fdi');

Route::post('manage-employment-record-csi-service-fdi/update',[EmployeCsiServiceFdi::class,'update'])->name('manage.employe.update.manage-employment-record-csi-service-fdi');
Route::get('manage-employment-record-csi-service-fdi/statistics',[EmployeCsiServiceFdi::class,'statistics'])->name('manage.employe.statistics.manage-employment-record-csi-service-fdi');


// manage-training-record-csi-service-fdi
Route::get('manage-training-record-csi-service-fdi',[TrainingCsiServiceFdi::class,'index'])->name('manage.training-csi-service-fdi');
Route::post('manage-training-record-csi-service-fdi/save-save-next',[TrainingCsiServiceFdi::class,'save_next'])->name('manage.training.save.save.next-csi-service-fdi');

Route::get('manage-training-record-csi-service-fdi/add',[TrainingCsiServiceFdi::class,'add'])->name('manage.training.add-csi-service-fdi');
Route::post('manage-training-record-csi-service-fdi/insert',[TrainingCsiServiceFdi::class,'insert'])->name('manage.training.insert-csi-service-fdi');

Route::get('manage-training-record-csi-service-fdi/delete/{id}',[TrainingCsiServiceFdi::class,'deleteView'])->name('manage.training.delete-csi-service-fdi');

Route::post('manage-training-record-csi-service-fdi/delete-submit',[TrainingCsiServiceFdi::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-service-fdi');

Route::get('manage-training-record-csi-service-fdi/edit/{id}',[TrainingCsiServiceFdi::class,'edit'])->name('manage.training.edit-csi-service-fdi');

Route::post('manage-training-record-csi-service-fdi/update',[TrainingCsiServiceFdi::class,'update'])->name('manage.training.update-csi-service-fdi');







// manage-service-csi-service-fdi-yearly

Route::get('manage-service-csi-service-fdi-yearly',[ServiceYearlyCsiServiceFdi::class,'index'])->name('manage.service.manufacture.csi-service-fdi.yearly');

Route::post('manage-service-csi-service-fdi-yearly/save-save-next',[ServiceYearlyCsiServiceFdi::class,'save_next'])->name('manage.service.manufacture.csi-service-fdi.save.save.next.yearly');

Route::get('manage-service-csi-service-fdi-yearly/add',[ServiceYearlyCsiServiceFdi::class,'add'])->name('manage.service.manufacture.add.csi-service-fdi.yearly');
Route::post('manage-service-csi-service-fdi-yearly/insert',[ServiceYearlyCsiServiceFdi::class,'insert'])->name('manage.service.manufacture.insert.csi-service-fdi.yearly');

Route::get('manage-service-csi-service-fdi-yearly/delete/{id}',[ServiceYearlyCsiServiceFdi::class,'deleteView'])->name('manage.service.manufacture.delete.csi-service-fdi.yearly');

Route::post('manage-service-csi-service-fdi-yearly/delete-submit',[ServiceYearlyCsiServiceFdi::class,'deleteSubmit'])->name('manage.service.manufacture.delete.submit.csi-service-fdi.yearly');

Route::get('manage-service-csi-service-fdi-yearly/edit/{id}',[ServiceYearlyCsiServiceFdi::class,'edit'])->name('manage.service.manufacture.edit.csi-service-fdi.yearly');

Route::post('manage-service-csi-service-fdi-yearly/update',[ServiceYearlyCsiServiceFdi::class,'update'])->name('manage.service.manufacture.update.csi-service-fdi.yearly');


// sales-market-csi-service-fdi-yearly
Route::get('sales-market-csi-service-fdi-yearly',[SalesYearlyCsiServiceFdi::class,'index'])->name('manage.sales.export.csi-service-fdi.yearly');
Route::post('sales-market-csi-service-fdi-yearly/save-save-next',[SalesYearlyCsiServiceFdi::class,'save_next'])->name('manage.sales.export.save.save.next.csi-service-fdi.yearly');
Route::get('sales-market-csi-service-fdi-yearly/edit/{id}',[SalesYearlyCsiServiceFdi::class,'edit'])->name('manage.sales.export.edit.csi-service-fdi.yearly');

Route::post('sales-market-csi-service-fdi-yearly/update',[SalesYearlyCsiServiceFdi::class,'update'])->name('manage.sales.export.update.csi-service-fdi.yearly');


// // raw-material-csi-service-fdi-yearly
Route::get('raw-material-csi-service-fdi-yearly',[RawYearlyCsiServiceFdi::class,'index'])->name('manage.raw.material.csi-service-fdi.yearly');

Route::post('raw-material-csi-service-fdi-yearly/save-save-next',[RawYearlyCsiServiceFdi::class,'save_next'])->name('manage.raw.material.csi-service-fdi.save.save.next.yearly.yearly');
Route::get('raw-material-csi-service-fdi-yearly/add',[RawYearlyCsiServiceFdi::class,'add'])->name('manage.raw.material.add.csi-service-fdi.yearly');
Route::post('raw-material-csi-service-fdi-yearly/insert',[RawYearlyCsiServiceFdi::class,'insert'])->name('manage.raw.material.insert.csi-service-fdi.yearly');

Route::get('raw-material-csi-service-fdi-yearly/delete/{id}',[RawYearlyCsiServiceFdi::class,'deleteView'])->name('manage.raw.material.delete.csi-service-fdi.yearly');

Route::post('raw-material-csi-service-fdi-yearly/delete-submit',[RawYearlyCsiServiceFdi::class,'deleteSubmit'])->name('manage.raw.material.delete.submit.csi-service-fdi.yearly');

Route::get('raw-material-csi-service-fdi-yearly/edit/{id}',[RawYearlyCsiServiceFdi::class,'edit'])->name('manage.raw.material.edit.csi-service-fdi.yearly');

Route::post('raw-material-csi-service-fdi-yearly/update',[RawYearlyCsiServiceFdi::class,'update'])->name('manage.raw.material.update.csi-service-fdi.yearly');


// // manage-cost-details-csi-service-fdi-yearly

Route::get('manage-cost-details-csi-service-fdi-yearly',[CostYearlyCsiServiceFdi::class,'index'])->name('manage.cost.csi-service-fdi.yearly');
Route::post('manage-cost-details-csi-service-fdi-yearly/save-save-next',[CostYearlyCsiServiceFdi::class,'save_next'])->name('manage.cost.save.save.next.csi-service-fdi.yearly');
Route::get('manage-cost-details-csi-service-fdi-yearly/edit/{id}',[CostYearlyCsiServiceFdi::class,'edit'])->name('manage.cost.edit.csi-service-fdi.yearly');

Route::post('manage-cost-details-csi-service-fdi-yearly/update',[CostYearlyCsiServiceFdi::class,'update'])->name('manage.cost.update.csi-service-fdi.yearly');

// // manage-other-cost-details-csi-service-fdi-yearly

Route::get('manage-other-cost-details-csi-service-fdi-yearly',[OtherCostYearlyCsiServiceFdi::class,'index'])->name('manage.other.cost.other.csi-service-fdi.yearly');
Route::post('manage-other-cost-details-csi-service-fdi-yearly/save-save-next',[OtherCostYearlyCsiServiceFdi::class,'save_next'])->name('manage.other.cost.other.save.save.next.csi-service-fdi.yearly');
Route::get('manage-other-cost-details-csi-service-fdi-yearly/edit/{id}',[OtherCostYearlyCsiServiceFdi::class,'edit'])->name('manage.other.cost.other.edit.csi-service-fdi.yearly');

Route::post('manage-other-cost-details-csi-service-fdi-yearly/update',[OtherCostYearlyCsiServiceFdi::class,'update'])->name('manage.other.cost.other.update.csi-service-fdi.yearly');



// manage-employment-record--csi-service-fdi-yearly
Route::get('manage-employment-record--csi-service-fdi-yearly',[EmployeYearlyCsiServiceFdi::class,'index'])->name('manage.employe.manage-employment-record--csi-service-fdi-yearly');
Route::post('manage-employment-record--csi-service-fdi-yearly/save-save-next',[EmployeYearlyCsiServiceFdi::class,'save_next'])->name('manage.employe.save.save.next.manage-employment-record--csi-service-fdi-yearly');
Route::get('manage-employment-record--csi-service-fdi-yearly/add',[EmployeYearlyCsiServiceFdi::class,'add'])->name('manage.employe.add.manage-employment-record--csi-service-fdi-yearly');
Route::post('manage-employment-record--csi-service-fdi-yearly/insert',[EmployeYearlyCsiServiceFdi::class,'insert'])->name('manage.employe.insert.manage-employment-record--csi-service-fdi-yearly');

Route::get('manage-employment-record--csi-service-fdi-yearly/delete/{id}',[EmployeYearlyCsiServiceFdi::class,'deleteView'])->name('manage.employe.delete.manage-employment-record--csi-service-fdi-yearly');

Route::post('manage-employment-record--csi-service-fdi-yearly/delete-submit',[EmployeYearlyCsiServiceFdi::class,'deleteSubmit'])->name('manage.employe.delete.submit.manage-employment-record--csi-service-fdi-yearly');

Route::get('manage-employment-record--csi-service-fdi-yearly/edit/{id}',[EmployeYearlyCsiServiceFdi::class,'edit'])->name('manage.employe.edit.manage-employment-record--csi-service-fdi-yearly');

Route::post('manage-employment-record--csi-service-fdi-yearly/update',[EmployeYearlyCsiServiceFdi::class,'update'])->name('manage.employe.update.manage-employment-record--csi-service-fdi-yearly');
Route::get('manage-employment-record--csi-service-fdi-yearly/statistics',[EmployeYearlyCsiServiceFdi::class,'statistics'])->name('manage.employe.statistics.manage-employment-record--csi-service-fdi-yearly');


// manage-training-record-csi-service-fdi-yearly
Route::get('manage-training-record-csi-service-fdi-yearly',[TrainingYearlyCsiServiceFdi::class,'index'])->name('manage.training-csi-service-fdi.yearly');
Route::post('manage-training-record-csi-service-fdi-yearly/save-save-next',[TrainingYearlyCsiServiceFdi::class,'save_next'])->name('manage.training.save.save.next-csi-service-fdi.yearly');

Route::get('manage-training-record-csi-service-fdi-yearly/add',[TrainingYearlyCsiServiceFdi::class,'add'])->name('manage.training.add-csi-service-fdi.yearly');
Route::post('manage-training-record-csi-service-fdi-yearly/insert',[TrainingYearlyCsiServiceFdi::class,'insert'])->name('manage.training.insert-csi-service-fdi.yearly');

Route::get('manage-training-record-csi-service-fdi-yearly/delete/{id}',[TrainingYearlyCsiServiceFdi::class,'deleteView'])->name('manage.training.delete-csi-service-fdi.yearly');

Route::post('manage-training-record-csi-service-fdi-yearly/delete-submit',[TrainingYearlyCsiServiceFdi::class,'deleteSubmit'])->name('manage.training.delete.submit-csi-service-fdi.yearly');

Route::get('manage-training-record-csi-service-fdi-yearly/edit/{id}',[TrainingYearlyCsiServiceFdi::class,'edit'])->name('manage.training.edit-csi-service-fdi.yearly');

Route::post('manage-training-record-csi-service-fdi-yearly/update',[TrainingYearlyCsiServiceFdi::class,'update'])->name('manage.training.update-csi-service-fdi.yearly');


// manage-financial-information-csi-service-fdi-yearly
Route::get('manage-financial-information-csi-service-fdi-yearly',[FinanceYearlyCsiServiceFdi::class,'index'])->name('manage.financemanage-financial-information-csi-service-fdi-yearly');

Route::post('manage-financial-information-csi-service-fdi-yearly/save-next',[FinanceYearlyCsiServiceFdi::class,'insert'])->name('manage.finance.insert.csi.pammanage-financial-information-csi-service-fdi-yearly');

Route::get('manage-financial-information-csi-service-fdi-yearly/edit/{id}',[FinanceYearlyCsiServiceFdi::class,'edit'])->name('manage.finance.editmanage-financial-information-csi-service-fdi-yearly');

Route::post('manage-financial-information-csi-service-fdi-yearly/update',[FinanceYearlyCsiServiceFdi::class,'update'])->name('manage.finance.updatemanage-financial-information-csi-service-fdi-yearly');


// manage-other-information-csi-service-fdi-yearly
Route::get('manage-other-information-csi-service-fdi-yearly',[OtherYearlyCsiServiceFdi::class,'index'])->name('manage.other-csi-service-fdi-yearly');

Route::post('manage-other-information-csi-service-fdi-yearly/insert',[OtherYearlyCsiServiceFdi::class,'insert'])->name('manage.other.insert-csi-service-fdi-yearly');
Route::get('manage-other-information-csi-service-fdi-yearly/edit/{id}',[OtherYearlyCsiServiceFdi::class,'edit'])->name('manage.other.edit-csi-service-fdi-yearly');
Route::post('manage-other-information-csi-service-fdi-yearly/update',[OtherYearlyCsiServiceFdi::class,'update'])->name('manage.other.update-csi-service-fdi-yearly');


// manage-revenue-csi-service-fdi-yearly

Route::get('manage-revenue-csi-service-fdi-yearly',[RevenueYearlyCsiServiceFdi::class,'index'])->name('manage.revenue.manage-revenue-csi-service-fdi-yearly');
Route::post('manage-revenue-csi-service-fdi-yearly/insert',[RevenueYearlyCsiServiceFdi::class,'insert'])->name('manage.revenue.insert.manage-revenue-csi-service-fdi-yearly');
Route::get('manage-revenue-csi-service-fdi-yearly/edit/{id}',[RevenueYearlyCsiServiceFdi::class,'edit'])->name('manage.revenue.edit.manage-revenue-csi-service-fdi-yearly');
Route::post('manage-revenue-csi-service-fdi-yearly/update',[RevenueYearlyCsiServiceFdi::class,'update'])->name('manage.revenue.update.manage-revenue-csi-service-fdi-yearly');