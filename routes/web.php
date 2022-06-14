<?php

use Illuminate\Support\Facades\Route;


//Homepage Route
Route::get('/', 'App\Http\Controllers\ViewPagesController@homepage')->name('homepage');

//about-us Route
Route::get('/about-us', 'App\Http\Controllers\ViewPagesController@aboutUs')->name('aboutUs');

//portfolio Route
Route::get('/our-portfolio', 'App\Http\Controllers\ViewPagesController@portfolio')->name('ourPortfolio');

//blog Route
Route::get('/blog', 'App\Http\Controllers\ViewPagesController@blog')->name('blog');

//Single Blog Fetch Route
Route::get('/blog/{tag:slug}', 'App\Http\Controllers\ViewPagesController@SinglePost')->name('singleBlogPost');
//sector Route


//Contact-Us Route
Route::get('/contact-us', 'App\Http\Controllers\ViewPagesController@contactUs')->name('contactUs');

//Contact-Us Route store
Route::post('/contact/submit', 'App\Http\Controllers\contactusController@store')->name('contactStore');


//project-proposal Route
Route::get('/project-proposal', 'App\Http\Controllers\ViewPagesController@projectProposal')->name('projectProposal');

//project-proposal Route store
Route::post('/proposalStore', 'App\Http\Controllers\ProjectProposalController@store')->name('storePP');


//sector Route
Route::get('/sectors/{id}', 'App\Http\Controllers\SectosController@sectors')->name('sectors');
//sector Route



// Route for Logout
Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');



//Dashbard Route with the role superadministrator
Route::group(['middleware'=>['auth','role:superadministrator']],function(){    
    Route::get('/technofirm/dashboard', 'App\Http\Controllers\ViewPagesController@dashboard')->name('superadministrator.dashboard');
     
    Route::get('/Banner/create', 'App\Http\Controllers\BannerController@create')->name('Banner.create');
    Route::put('/Banner/create', 'App\Http\Controllers\BannerController@store')->name('Banner.store');
    Route::get('/Banner/list', 'App\Http\Controllers\BannerController@list')->name('Banner.list');
    Route::get('/Banner/edit/{id}', 'App\Http\Controllers\BannerController@edit')->name('Banner.edit');
    Route::post('/Banner/update/{id}', 'App\Http\Controllers\BannerController@update')->name('Banner.update');
    Route::get('/Banner/delete/{id}', 'App\Http\Controllers\BannerController@destroy')->name('Banner.destroy');
    Route::get('/Banner/preview/{id}', 'App\Http\Controllers\BannerController@preview')->name('Banner.preview');
    Route::get('/Banner-status/update', 'App\Http\Controllers\BannerController@updateStatus')->name('BannerStatus');
    Route::get('/Banner/restoreList', 'App\Http\Controllers\BannerController@restoreList')->name('Banner.restoreList');
    Route::get('/Banner/destroyList/{id}', 'App\Http\Controllers\BannerController@restoreData')->name('Banner.restoreData');
    Route::get('/Banner-Permanently-Delete/{id}', 'App\Http\Controllers\BannerController@forceDelete')->name('Banner.forceDelete');

    Route::get('/Company-Details/create', 'App\Http\Controllers\CompanyDetailsController@create')->name('CompanyDetails.create');
    Route::put('/Company-Details/create', 'App\Http\Controllers\CompanyDetailsController@store')->name('CompanyDetails.store');
    Route::get('/Company-Details/list', 'App\Http\Controllers\CompanyDetailsController@list')->name('CompanyDetails.list');
    Route::get('/Company-Details/edit/{id}', 'App\Http\Controllers\CompanyDetailsController@edit')->name('CompanyDetails.edit');
    Route::post('/Company-Details/update/{id}', 'App\Http\Controllers\CompanyDetailsController@update')->name('CompanyDetails.update');
    Route::get('/Company-Details/delete/{id}', 'App\Http\Controllers\CompanyDetailsController@destroy')->name('CompanyDetails.destroy');
    Route::get('/Company-Details/preview/{id}', 'App\Http\Controllers\CompanyDetailsController@preview')->name('CompanyDetails.preview');

    Route::get('/Contact/list', 'App\Http\Controllers\contactusController@list')->name('Contact.list');
    Route::get('/Contact/delete/{id}', 'App\Http\Controllers\contactusController@destroy')->name('Contact.destroy');
    Route::get('/Contact/preview/{id}', 'App\Http\Controllers\contactusController@preview')->name('Contact.preview');
    Route::get('/Contact/restoreList', 'App\Http\Controllers\contactusController@restoreList')->name('Contact.restoreList');
    Route::get('/Contact/destroyList/{id}', 'App\Http\Controllers\contactusController@restoreData')->name('Contact.restoreData');
    Route::get('/Contact-Permanently-Delete/{id}', 'App\Http\Controllers\contactusController@forceDelete')->name('Contact.forceDelete');

    
    Route::get('/Ceo-details/create', 'App\Http\Controllers\CEODetailsController@create')->name('ceoDetails.create');
    Route::put('/Ceo-details/create', 'App\Http\Controllers\CEODetailsController@store')->name('ceoDetails.store');
    Route::get('/Ceo-details/list', 'App\Http\Controllers\CEODetailsController@list')->name('ceoDetails.list');
    Route::get('/Ceo-details/edit/{id}', 'App\Http\Controllers\CEODetailsController@edit')->name('ceoDetails.edit');
    Route::post('/Ceo-details/update/{id}', 'App\Http\Controllers\CEODetailsController@update')->name('ceoDetails.update');
    Route::get('/Ceo-details/delete/{id}', 'App\Http\Controllers\CEODetailsController@destroy')->name('ceoDetails.destroy');
    Route::get('/Ceo-details/preview/{id}', 'App\Http\Controllers\CEODetailsController@preview')->name('ceoDetails.preview');


    Route::get('/Our-Story/create', 'App\Http\Controllers\OurStoriesController@create')->name('ourStory.create');
    Route::put('/Our-Story/create', 'App\Http\Controllers\OurStoriesController@store')->name('ourStory.store');
    Route::get('/Our-Story/list', 'App\Http\Controllers\OurStoriesController@list')->name('ourStory.list');
    Route::get('/Our-Story/edit/{id}', 'App\Http\Controllers\OurStoriesController@edit')->name('ourStory.edit');
    Route::post('/Our-Story/update/{id}', 'App\Http\Controllers\OurStoriesController@update')->name('ourStory.update');
    Route::get('/Our-Story/delete/{id}', 'App\Http\Controllers\OurStoriesController@destroy')->name('ourStory.destroy');
    Route::get('/Our-Story/preview/{id}', 'App\Http\Controllers\OurStoriesController@preview')->name('ourStory.preview');

    
    Route::get('/brands/create', 'App\Http\Controllers\BrandsCollabWithController@create')->name('brands.create');
    Route::put('/brands/create', 'App\Http\Controllers\BrandsCollabWithController@store')->name('brands.store');
    Route::get('/brands/list', 'App\Http\Controllers\BrandsCollabWithController@list')->name('brands.list');
    Route::get('/brands/edit/{id}', 'App\Http\Controllers\BrandsCollabWithController@edit')->name('brands.edit');
    Route::post('/brands/update/{id}', 'App\Http\Controllers\BrandsCollabWithController@update')->name('brands.update');
    Route::get('/brands/delete/{id}', 'App\Http\Controllers\BrandsCollabWithController@destroy')->name('brands.destroy');


    Route::get('/goal/create', 'App\Http\Controllers\MissionVissionController@create')->name('goal.create');
    Route::put('/goal/create', 'App\Http\Controllers\MissionVissionController@store')->name('goal.store');
    Route::get('/goal/list', 'App\Http\Controllers\MissionVissionController@list')->name('goal.list');
    Route::get('/goal/edit/{id}', 'App\Http\Controllers\MissionVissionController@edit')->name('goal.edit');
    Route::post('/goal/update/{id}', 'App\Http\Controllers\MissionVissionController@update')->name('goal.update');
    Route::get('/goal/delete/{id}', 'App\Http\Controllers\MissionVissionController@destroy')->name('goal.destroy');
    Route::get('/goal/preview/{id}', 'App\Http\Controllers\MissionVissionController@preview')->name('goal.preview');


    Route::get('/category/create', 'App\Http\Controllers\CategoryController@create')->name('Category.create');
    Route::put('/category/create', 'App\Http\Controllers\CategoryController@store')->name('Category.store');
    Route::get('/category/list', 'App\Http\Controllers\CategoryController@list')->name('Category.list');
    Route::get('/category/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('Category.edit');
    Route::post('/category/update/{id}', 'App\Http\Controllers\CategoryController@update')->name('Category.update');
    Route::get('/category/delete/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('Category.destroy');


    Route::get('/service-overview/create', 'App\Http\Controllers\ServiceOverViewController@create')->name('ServiceOverviewDetails.create');
    Route::put('/service-overview/create', 'App\Http\Controllers\ServiceOverViewController@store')->name('ServiceOverviewDetails.store');
    Route::get('/service-overview/list', 'App\Http\Controllers\ServiceOverViewController@list')->name('ServiceOverviewDetails.list');
    Route::get('/service-overview/edit/{id}', 'App\Http\Controllers\ServiceOverViewController@edit')->name('ServiceOverviewDetails.edit');
    Route::post('/service-overview/update/{id}', 'App\Http\Controllers\ServiceOverViewController@update')->name('ServiceOverviewDetails.update');
    Route::get('/service-overview/delete/{id}', 'App\Http\Controllers\ServiceOverViewController@destroy')->name('ServiceOverviewDetails.destroy');
    Route::get('/service-overview/preview/{id}', 'App\Http\Controllers\ServiceOverViewController@preview')->name('ServiceOverviewDetails.preview');
    Route::get('/service-overview/restoreList', 'App\Http\Controllers\ServiceOverViewController@restoreList')->name('ServiceOverviewDetails.restoreList');
    Route::get('/service-overview/destroyList/{id}', 'App\Http\Controllers\ServiceOverViewController@restoreData')->name('ServiceOverviewDetails.restoreData');
    Route::get('/service-overview-Permanently-Delete/{id}', 'App\Http\Controllers\ServiceOverViewController@forceDelete')->name('ServiceOverviewDetails.forceDelete');


    
    Route::get('/sector-service-name/create', 'App\Http\Controllers\SectorServicesNamesController@create')->name('SectorServicesNames.create');
    Route::put('/sector-service-name/create', 'App\Http\Controllers\SectorServicesNamesController@store')->name('SectorServicesNames.store');
    Route::get('/sector-service-name/list', 'App\Http\Controllers\SectorServicesNamesController@list')->name('SectorServicesNames.list');
    Route::get('/sector-service-name/edit/{id}', 'App\Http\Controllers\SectorServicesNamesController@edit')->name('SectorServicesNames.edit');
    Route::post('/sector-service-name/update/{id}', 'App\Http\Controllers\SectorServicesNamesController@update')->name('SectorServicesNames.update');
    Route::get('/sector-service-name/delete/{id}', 'App\Http\Controllers\SectorServicesNamesController@destroy')->name('SectorServicesNames.destroy');


    
    Route::get('/sector-services/create', 'App\Http\Controllers\SectorServicesController@create')->name('SectorServices.create');
    Route::put('/sector-services/create', 'App\Http\Controllers\SectorServicesController@store')->name('SectorServices.store');
    Route::get('/sector-services/list', 'App\Http\Controllers\SectorServicesController@list')->name('SectorServices.list');
    Route::get('/sector-services/edit/{id}', 'App\Http\Controllers\SectorServicesController@edit')->name('SectorServices.edit');
    Route::post('/sector-services/update/{id}', 'App\Http\Controllers\SectorServicesController@update')->name('SectorServices.update');
    Route::get('/sector-services/delete/{id}', 'App\Http\Controllers\SectorServicesController@destroy')->name('SectorServices.destroy');
    Route::get('/sector-services/preview/{id}', 'App\Http\Controllers\SectorServicesController@preview')->name('SectorServices.preview');
    Route::get('/sector-services-status/update', 'App\Http\Controllers\SectorServicesController@SectorServicesStatus')->name('SectorServicesStatus');
    Route::get('/sector-services/restoreList', 'App\Http\Controllers\SectorServicesController@restoreList')->name('SectorServices.restoreList');
    Route::get('/sector-services/destroyList/{id}', 'App\Http\Controllers\SectorServicesController@restoreData')->name('SectorServices.restoreData');
    Route::get('/sector-services-Permanently-Delete/{id}', 'App\Http\Controllers\SectorServicesController@forceDelete')->name('SectorServices.forceDelete');


    
    Route::get('/sector-stack-heading/create', 'App\Http\Controllers\Sector_Technologies_Name_Heading@create')->name('SectorTechnologyHeading.create');
    Route::put('/sector-stack-heading/create', 'App\Http\Controllers\Sector_Technologies_Name_Heading@store')->name('SectorTechnologyHeading.store');
    Route::get('/sector-stack-heading/list', 'App\Http\Controllers\Sector_Technologies_Name_Heading@list')->name('SectorTechnologyHeading.list');
    Route::get('/sector-stack-heading/edit/{id}', 'App\Http\Controllers\Sector_Technologies_Name_Heading@edit')->name('SectorTechnologyHeading.edit');
    Route::post('/sector-stack-heading/update/{id}', 'App\Http\Controllers\Sector_Technologies_Name_Heading@update')->name('SectorTechnologyHeading.update');
    Route::get('/sector-stack-heading/delete/{id}', 'App\Http\Controllers\Sector_Technologies_Name_Heading@destroy')->name('SectorTechnologyHeading.destroy');

    
    Route::get('/sector-stack-details/create', 'App\Http\Controllers\SectorStackTechnologiesController@create')->name('sector_technologies_details.create');
    Route::put('/sector-stack-details/create', 'App\Http\Controllers\SectorStackTechnologiesController@store')->name('sector_technologies_details.store');
    Route::get('/sector-stack-details/list', 'App\Http\Controllers\SectorStackTechnologiesController@list')->name('sector_technologies_details.list');
    Route::get('/sector-stack-details/edit/{id}', 'App\Http\Controllers\SectorStackTechnologiesController@edit')->name('sector_technologies_details.edit');
    Route::post('/sector-stack-details/update/{id}', 'App\Http\Controllers\SectorStackTechnologiesController@update')->name('sector_technologies_details.update');
    Route::get('/sector-stack-details/delete/{id}', 'App\Http\Controllers\SectorStackTechnologiesController@destroy')->name('sector_technologies_details.destroy');
    Route::get('/sector-stack-details/preview/{id}', 'App\Http\Controllers\SectorStackTechnologiesController@preview')->name('sector_technologies_details.preview');
    Route::get('/sector-stack-details/update', 'App\Http\Controllers\SectorStackTechnologiesController@sector_technologies_detailsStatus')->name('sector_technologies_details_Status');
    Route::get('/sector-stack-details/restoreList', 'App\Http\Controllers\SectorStackTechnologiesController@restoreList')->name('sector_technologies_details.restoreList');
    Route::get('/sector-stack-details/destroyList/{id}', 'App\Http\Controllers\SectorStackTechnologiesController@restoreData')->name('sector_technologies_details.restoreData');
    Route::get('/sector-stack-details-Permanently-Delete/{id}', 'App\Http\Controllers\SectorStackTechnologiesController@forceDelete')->name('sector_technologies_details.forceDelete');


    
    Route::get('/sector-special-feature/create', 'App\Http\Controllers\SectorSpecialFeaturesController@create')->name('SectorSF.create');
    Route::put('/sector-special-feature/create', 'App\Http\Controllers\SectorSpecialFeaturesController@store')->name('SectorSF.store');
    Route::get('/sector-special-feature/list', 'App\Http\Controllers\SectorSpecialFeaturesController@list')->name('SectorSF.list');
    Route::get('/sector-special-feature/edit/{id}', 'App\Http\Controllers\SectorSpecialFeaturesController@edit')->name('SectorSF.edit');
    Route::post('/sector-special-feature/update/{id}', 'App\Http\Controllers\SectorSpecialFeaturesController@update')->name('SectorSF.update');
    Route::get('/sector-special-feature/delete/{id}', 'App\Http\Controllers\SectorSpecialFeaturesController@destroy')->name('SectorSF.destroy');
    Route::get('/sector-special-feature/preview/{id}', 'App\Http\Controllers\SectorSpecialFeaturesController@preview')->name('SectorSF.preview');


    Route::get('/sector-special-feature-li-list/create', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@create')->name('SectorSFD.create');
    Route::put('/sector-special-feature-li-list/create', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@store')->name('SectorSFD.store');
    Route::get('/sector-special-feature-li-list/list', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@list')->name('SectorSFD.list');
    Route::get('/sector-special-feature-li-list/edit/{id}', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@edit')->name('SectorSFD.edit');
    Route::post('/sector-special-feature-li-list/update/{id}', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@update')->name('SectorSFD.update');
    Route::get('/sector-special-feature-li-list/delete/{id}', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@destroy')->name('SectorSFD.destroy');
    Route::get('/sector-special-feature-li-list/preview/{id}', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@preview')->name('SectorSFD.preview');
    Route::get('/sector-special-feature-li-list/update', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@sector_special_features_dynamic_Status')->name('Sector_SFD_li');
    Route::get('/sector-special-feature-li-list/restoreList', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@restoreList')->name('SectorSFD.restoreList');
    Route::get('/sector-special-feature-li-list/destroyList/{id}', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@restoreData')->name('SectorSFD.restoreData');
    Route::get('/sector-special-feature-li-list-Permanently-Delete/{id}', 'App\Http\Controllers\SectorSpecialFeaturesDynamicController@forceDelete')->name('SectorSFD.forceDelete');




    
    Route::get('/Blog/create', 'App\Http\Controllers\BlogController@create')->name('Blogs.create');
    Route::put('/Blog/create', 'App\Http\Controllers\BlogController@store')->name('Blogs.store');
    Route::get('/Blog/list', 'App\Http\Controllers\BlogController@list')->name('Blogs.list');
    Route::get('/Blog/edit/{id}', 'App\Http\Controllers\BlogController@edit')->name('Blogs.edit');
    Route::post('/Blog/update/{id}', 'App\Http\Controllers\BlogController@update')->name('Blogs.update');
    Route::get('/Blog/delete/{id}', 'App\Http\Controllers\BlogController@destroy')->name('Blogs.destroy');
    Route::get('/Blog/preview/{id}', 'App\Http\Controllers\BlogController@preview')->name('Blogs.preview');
    Route::get('/Blog/update', 'App\Http\Controllers\BlogController@updateStatus')->name('BlogStatus');
    Route::get('/Blogt/restoreList', 'App\Http\Controllers\BlogController@restoreList')->name('Blogs.restoreList');
    Route::get('/Blog/destroyList/{id}', 'App\Http\Controllers\BlogController@restoreData')->name('Blogs.restoreData');
    Route::get('/Blog-Permanently-Delete/{id}', 'App\Http\Controllers\BlogController@forceDelete')->name('Blogs.forceDelete');



    Route::get('/project-proposal/list', 'App\Http\Controllers\ProjectProposalController@list')->name('ProjectProposal.list');
    Route::get('/project-proposa/delete/{id}', 'App\Http\Controllers\ProjectProposalController@destroy')->name('ProjectProposal.destroy');
    Route::get('/project-proposa/preview/{id}', 'App\Http\Controllers\ProjectProposalController@preview')->name('ProjectProposal.preview');
    Route::get('/project-proposa/restoreList', 'App\Http\Controllers\ProjectProposalController@restoreList')->name('ProjectProposal.restoreList');
    Route::get('/project-proposa/destroyList/{id}', 'App\Http\Controllers\ProjectProposalController@restoreData')->name('ProjectProposal.restoreData');
    Route::get('/project-proposa-Permanently-Delete/{id}', 'App\Http\Controllers\ProjectProposalController@forceDelete')->name('ProjectProposal.forceDelete');

});

require __DIR__.'/auth.php';
