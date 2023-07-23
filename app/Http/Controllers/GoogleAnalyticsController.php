<?php

namespace App\Http\Controllers;

use AkkiIo\LaravelGoogleAnalytics\Facades\LaravelGoogleAnalytics;
use Illuminate\Http\Request;
use AkkiIo\LaravelGoogleAnalytics\Period;

class GoogleAnalyticsController extends Controller
{
    public function googleAnalytics(Request $request)
    {
        // Get total users
        $data = LaravelGoogleAnalytics::getTotalUsers(Period::months(12), $count = 20);
        dd($data);

        // Get total users by date
        // $data = LaravelGoogleAnalytics::getTotalUsersByDate(Period::months(12), $count = 20);
        
        // Get total users by session source
        // $data = LaravelGoogleAnalytics::getTotalUsersBySessionSource(Period::months(12), $count = 20);
        
        // Get most users by date
        $data = LaravelGoogleAnalytics::getMostUsersByDate(Period::months(12), $count = 20);
        
        // Get most users by session source
        $data = LaravelGoogleAnalytics::getMostUsersBySessionSource(Period::months(12), $count = 20);
        
        // Get total users by country
        // $data = LaravelGoogleAnalytics::getTotalUsersByCountry(Period::months(12), $count = 20);
        
        // Get total users by city
        // $data = LaravelGoogleAnalytics::getTotalUsersByCity(Period::months(12), $count = 20);
        
        // Get total users by gender
        // $data = LaravelGoogleAnalytics::getTotalUsersByGender(Period::months(12), $count = 20);
        
        // Get total users by language
        // $data = LaravelGoogleAnalytics::getTotalUsersByLanguage(Period::months(12), $count = 20);
        
        // Get total users by age
        // $data = LaravelGoogleAnalytics::getTotalUsersByAge(Period::months(12), $count = 20);
        
        // Get most users by country
        $data = LaravelGoogleAnalytics::getMostUsersByCountry(Period::months(12), $count = 20);
        
        // Get most users by city
        $data = LaravelGoogleAnalytics::getMostUsersByCity(Period::months(12), $count = 20);
        
        // Get most users by language
        $data = LaravelGoogleAnalytics::getMostUsersByLanguage(Period::months(12), $count = 20);
        
        // Get most users by age
        // $data = LaravelGoogleAnalytics::getMostUsersByAge(Period::months(12), $count = 20);
        
        // Get average session duration
        $data = LaravelGoogleAnalytics::getAverageSessionDuration(Period::months(12), $count = 20);
        
        // Get average session duration by date
        // $data = LaravelGoogleAnalytics::getAverageSessionDurationByDate(Period::months(12), $count = 20);
        
        // Get total views
        $data = LaravelGoogleAnalytics::getTotalViews(Period::months(12), $count = 20);
        
        // Get total views by date
        // $data = LaravelGoogleAnalytics::getTotalViewsByDate(Period::months(12), $count = 20);
        
        // Get total views by page
        // $data = LaravelGoogleAnalytics::getTotalViewsByPage(Period::months(12), $count = 20);
        
        // Get total views by page and user
        $data = LaravelGoogleAnalytics::getTotalViewsByPageAndUser(Period::months(12), $count = 20);
        
        // Get most views by page
        // $data = LaravelGoogleAnalytics::getMostViewsByPage(Period::months(12), $count = 20);
        
        // Get most views by user
        // $data = LaravelGoogleAnalytics::getMostViewsByUser(Period::months(12), $count = 20);
        
        // Get total new and returning users
        $data = LaravelGoogleAnalytics::getTotalNewAndReturningUsers(Period::months(12), $count = 20);
        
        // Get total new and returning users by date
        // $data = LaravelGoogleAnalytics::getTotalNewAndReturningUsersByDate(Period::months(12), $count = 20);
        
        // Get total users by platform
        // $data = LaravelGoogleAnalytics::getTotalUsersByPlatform(Period::months(12), $count = 20);
        
        // Get total users by operating system
        // $data = LaravelGoogleAnalytics::getTotalUsersByOperatingSystem(Period::months(12), $count = 20);
        
        // Get total users by browser
        // $data = LaravelGoogleAnalytics::getTotalUsersByBrowser(Period::months(12), $count = 20);
        
        // Get total users by screen resolution
        // $data = LaravelGoogleAnalytics::getTotalUsersByScreenResolution(Period::months(12), $count = 20);
        
        // Get most users by platform
        // $data = LaravelGoogleAnalytics::getMostUsersByPlatform(Period::months(12), $count = 20);
        
        // Get most users by operating system
        $data = LaravelGoogleAnalytics::getMostUsersByOperatingSystem(Period::months(12), $count = 20);
        
        // Get most users by browser
        $data = LaravelGoogleAnalytics::getMostUsersByBrowser(Period::months(12), $count = 20);
        
        // Get most users by screen resolution
        // $data = LaravelGoogleAnalytics::getMostUsersByScreenResolution(Period::months(12), $count = 20);

    }
}
