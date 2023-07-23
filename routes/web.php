<?php

use Illuminate\Support\Facades\Route;
use AkkiIo\LaravelGoogleAnalytics\Facades\LaravelGoogleAnalytics;
use AkkiIo\LaravelGoogleAnalytics\Period;
use App\Http\Controllers\GoogleAnalyticsController;
use Google\Analytics\Data\V1beta\Filter\StringFilter\MatchType;
use Google\Analytics\Data\V1beta\MetricAggregation;
use Google\Analytics\Data\V1beta\Filter\NumericFilter\Operation;

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


/* 
// https://github.com/akki-io/laravel-google-analytics/wiki/4.-Using-avaliable-methods

Step 1 --> Install Google analytics | composer require akki-io/laravel-google-analytics
Step 2 --> published vendor file    | php artisan vendor:publish --provider="AkkiIo\LaravelGoogleAnalytics\LaravelGoogleAnalyticsServiceProvider"
step 3 --> setup analytics account
step 4 --> get GOOGLE_ANALYTICS_PROPERTY_ID 
step 5 --> download analytics credentail.json file
step 6 --> setup path in config/analytics.php file
step 7 --> follow this code | customize this

*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('google-analytics', [GoogleAnalyticsController::class, 'googleAnalytics'])->name('getTotalUsers');


Route::get('analytics', function () {
    $data = LaravelGoogleAnalytics::dateRanges(Period::days(30), Period::days(90))
        ->metrics('active1DayUsers', 'active7DayUsers')
        ->dimensions('browser', 'language')
        ->metricAggregations(MetricAggregation::TOTAL, MetricAggregation::MINIMUM)
        // ->whereDimension('browser', MatchType::CONTAINS, 'firefox')
        // ->whereMetric('active7DayUsers', Operation::GREATER_THAN, 50)
        ->orderByDimensionDesc('language')
        ->get();
    // $data = Analytics::fetchVisitorsAndPageViews(Period::days(7));

    // get the total users by top 20 countries
    // $data = LaravelGoogleAnalytics::getTotalUsersByCountry(Period::days(30), $count = 20);

    // get the top 20 most viewed pages for last 30 days
    // $data = LaravelGoogleAnalytics::getMostViewsByPage(Period::days(30), $count = 20);

    // get the top 20 dates with most users for last 12 months
    // $data = LaravelGoogleAnalytics::getMostUsersByDate(Period::months(12), $count = 20);

    dd($data);
    return view('analytics');
});
