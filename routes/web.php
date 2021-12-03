<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/login-2', function () {
    return view('auth.login-2');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/auth-reset-password', function () {
    return view('auth.auth-reset-password');
});
Route::get('/auth-forgot-password', function () {
    return view('auth.auth-forgot-password');
});
Route::get('/general-dashboard', function () {
    return view('general-dashboard');
});
Route::get('/ecom-dashboard', function () {
    return view('index-2');
});
Route::get('/layout-default', function () {
    return view('layouts.layout-default');
});
Route::get('/layout-transparent', function () {
    return view('layouts.layout-transparent');
});
Route::get('/layout-top-navigation', function () {
    return view('layouts.layout-top-navigation');
});
Route::get('/blank', function () {
    return view('blank');
});
Route::get('/bootstrap-alert', function () {
    return view('bootstrap.bootstrap-alert');
});

Route::get('/bootstrap-badge', function () {
    return view('bootstrap.bootstrap-badge');
});

Route::get('/bootstrap-breadcrumb', function () {
    return view('bootstrap.bootstrap-breadcrumb');
});

Route::get('/bootstrap-buttons', function () {
    return view('bootstrap.bootstrap-buttons');
});

Route::get('/bootstrap-card', function () {
    return view('bootstrap.bootstrap-card');
});

Route::get('/bootstrap-carousel', function () {
    return view('bootstrap.bootstrap-carousel');
});
Route::get('/bootstrap-collapse', function () {
    return view('bootstrap.bootstrap-collapse');
});
Route::get('/bootstrap-dropdown', function () {
    return view('bootstrap.bootstrap-dropdown');
});
Route::get('/bootstrap-form', function () {
    return view('bootstrap.bootstrap-form');
});
Route::get('/bootstrap-list-group', function () {
    return view('bootstrap.bootstrap-list-group');
});
Route::get('/bootstrap-media-object', function () {
    return view('bootstrap.bootstrap-media-object');
});
Route::get('/bootstrap-modal', function () {
    return view('bootstrap.bootstrap-modal');
});
Route::get('/bootstrap-nav', function () {
    return view('bootstrap.bootstrap-nav');
});
Route::get('/bootstrap-navbar', function () {
    return view('bootstrap.bootstrap-navbar');
});
Route::get('/bootstrap-pagination', function () {
    return view('bootstrap.bootstrap-pagination');
});
Route::get('/bootstrap-popover', function () {
    return view('bootstrap.bootstrap-popover');
});
Route::get('/bootstrap-progress', function () {
    return view('bootstrap.bootstrap-progress');
});
Route::get('/bootstrap-table', function () {
    return view('bootstrap.bootstrap-table');
});
Route::get('/bootstrap-tooltip"', function () {
    return view('bootstrap.bootstrap-tooltip"');
});
Route::get('/bootstrap-typography', function () {
    return view('bootstrap.bootstrap-typography');
});
Route::get('/components-article', function () {
    return view('components.components-article');
});
Route::get('/components-avatar', function () {
    return view('components.components-avatar');
});
Route::get('/components-chat-box', function () {
    return view('components.components-chat-box');
});
Route::get('/components-empty-state', function () {
    return view('components.components-empty-state');
});
Route::get('/components-gallery', function () {
    return view('components.components-gallery');
});
Route::get('/components-hero', function () {
    return view('components.components-hero');
});
Route::get('/components-multiple-upload', function () {
    return view('components.components-multiple-upload');
});
Route::get('/components-pricing', function () {
    return view('components.components-pricing');
});
Route::get('/components-statistic', function () {
    return view('components.components-statistic');
});
Route::get('/components-tab', function () {
    return view('components.components-tab');
});
Route::get('/components-table', function () {
    return view('components.components-table');
});
Route::get('/components-user', function () {
    return view('components.components-user');
});
Route::get('/components-wizard', function () {
    return view('components.components-wizard');
});
Route::get('/forms-advanced-form', function () {
    return view('forms.forms-advanced-form');
});
Route::get('/forms-editor', function () {
    return view('forms.forms-editor');
});
Route::get('/forms-validation', function () {
    return view('forms.forms-validation');
});
Route::get('/gmaps-advanced-route', function () {
    return view('google-maps.gmaps-advanced-route');
});
Route::get('/gmaps-draggable-marker', function () {
    return view('google-maps.gmaps-draggable-marker');
});
Route::get('/gmaps-geocoding', function () {
    return view('google-maps.gmaps-geocoding');
});
Route::get('/gmaps-geolocation', function () {
    return view('google-maps.gmaps-geolocation');
});
Route::get('/gmaps-marker', function () {
    return view('google-maps.gmaps-marker');
});
Route::get('/gmaps-multiple-marker', function () {
    return view('google-maps.gmaps-multiple-marker');
});
Route::get('/gmaps-route', function () {
    return view('google-maps.gmaps-route');
});
Route::get('/gmaps-simple', function () {
    return view('modules.gmaps-simple');
});

Route::get('/modules-datatables', function () {
    return view('modules.modules-datatables');
});
Route::get('/modules-flag', function () {
    return view('modules.modules-flag');
});
Route::get('/modules-font-awesome', function () {
    return view('modules.modules-font-awesome');
});
Route::get('/modules-ion-icons', function () {
    return view('modules.modules-ion-icons');
});
Route::get('/modules-owl-carousel', function () {
    return view('modules.modules-owl-carousel');
});
Route::get('/modules-sparkline', function () {
    return view('modules.modules-sparkline');
});
Route::get('/modules-sweet-alert', function () {
    return view('modules.modules-sweet-alert');
});
Route::get('/modules-toastr', function () {
    return view('modules.modules-toastr');
});
Route::get('/modules-vector-map', function () {
    return view('modules.modules-vector-map');
});
Route::get('/modules-weather-icon', function () {
    return view('modules.modules-weather-icon');
});

Route::get('/features-activities', function () {
    return view('features.features-activities');
});
Route::get('/features-post-create', function () {
    return view('features.features-post-create');
});
Route::get('/features-posts', function () {
    return view('features.features-posts');
});
Route::get('/features-profile', function () {
    return view('features.features-profile');
});

Route::get('/features-settings', function () {
    return view('features.features-settings');
});

Route::get('/features-setting-detail', function () {
    return view('features.features-setting-detail');
});

Route::get('/features-tickets', function () {
    return view('features.features-tickets');
});


Route::get('/utilities-contact', function () {
    return view('utilities.utilities-contact');
});

Route::get('/utilities-invoice', function () {
    return view('utilities.utilities-invoice');
});

Route::get('/utilities-subscribe', function () {
    return view('utilities.utilities-subscribe');
});


Route::get('/credits', function () {
    return view('credits');
});