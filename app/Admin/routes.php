<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('home-banners', HomeBannerController::class);
    $router->resource('budgets', BudgetController::class);
    $router->resource('durations', DurationController::class);
    $router->resource('experience-types', ExperienceTypeController::class);
    $router->resource('regions', RegionController::class);
    $router->resource('traveler-types', TravelerTypeController::class);

    $router->resource('destinations', DestinationDetailsController::class);

    $router->resource('tourdetails', TourListController::class);

    $router->resource('packagedetails', PackagedetailsController::class);
    $router->resource('packages', PackageController::class);



});
