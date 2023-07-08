<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\Paginator;

class AdminDashboardController extends Controller
{
    public function index()
    {
		$notify = "";
        return view('admin.dashboard.index', compact('notify'));
    }
    
    public function markAsRead(Request $request, Notification $notification)
    {
        $notification->update(['is_read' => true]);
        return redirect()->back()->with('success', 'Notification marked as read.');
    }
	
	public function clearAllNotifications()
	{
		Notification::truncate(); // Delete all notifications

		return redirect()->back()->with('success', 'All notifications cleared.');
	}
	
	public function deleteLastFiveNotifications()
	{
		$notifications = Notification::oldest()->take(5)->get(); // Get the first 5 notifications
		foreach ($notifications as $notification) {
			$notification->delete(); // Delete each notification
		}

		return redirect()->back()->with('success', 'Last 5 notifications cleared.');
	}

    // Add more methods for other admin dashboard routes here
}

