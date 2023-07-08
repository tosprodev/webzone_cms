<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\Notification;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
	{
		Paginator::useBootstrap();

		View::composer('*', function ($view) {
			$unreadCount = Notification::where('is_read', false)->count();
			$notifications = Notification::where('created_at', '>=', Carbon::now()->subDays(5))->paginate(8);
			$currentYear = Carbon::now()->year;
			$view->with('unreadCount', $unreadCount)->with('notifications', $notifications)->with('currentYear', $currentYear);
		});
	}
}
