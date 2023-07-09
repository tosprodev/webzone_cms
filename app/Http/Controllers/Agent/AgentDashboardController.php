<?php
namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\EmployeeDetail;
use Illuminate\Http\Request;
use App\Models\EmployeeAddress;
use App\Models\SocialMediaLink;
use Carbon\Carbon;

class AgentDashboardController extends Controller
{
	
	public function index()
    {
		$userId = auth()->user()->id;
		$employeeDetails = EmployeeDetail::where('user_id', $userId)->first();
		$employeeAddress = EmployeeAddress::where('user_id', $userId)->first();
		$socialMediaLinks = SocialMediaLink::where('uid', $userId)->first();
        return view('agent.dashboard.index', compact('employeeDetails','employeeAddress','socialMediaLinks'));
    }
}
