<?php
namespace App\Http\Controllers\Global\Profile;

use App\Http\Controllers\Controller;
use App\Models\EmployeeDetail;
use Illuminate\Http\Request;
use App\Models\EmployeeAddress;
use App\Models\SocialMediaLink;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function index()
    {
		$userId = auth()->user()->id;
		$employeeDetails = EmployeeDetail::where('user_id', $userId)->first();
		$employeeAddress = EmployeeAddress::where('user_id', $userId)->first();
		$socialMediaLinks = SocialMediaLink::where('uid', $userId)->first();
        return view('global.profile.index', compact('employeeDetails','employeeAddress','socialMediaLinks'));
    }
	
	public function updateGender(Request $request)
    {
        $employeeDetail = EmployeeDetail::where('user_id', $request->user()->id)->first();
        
        if ($employeeDetail) {
            $employeeDetail->gender = $request->input('gender');
            $employeeDetail->save();
            
            return redirect()->back()->with('success', 'Gender updated successfully.');
        }
        
        return redirect()->back()->with('error', 'Employee details not found.');
    }
	
	public function updateCallerName(Request $request)
    {
        $employeeDetail = EmployeeDetail::where('user_id', $request->user()->id)->first();
        
        if ($employeeDetail) {
            $employeeDetail->caller_name = $request->input('caller_name');
            $employeeDetail->save();
            
            return redirect()->back()->with('success', 'Caller name updated successfully.');
        }
        
        return redirect()->back()->with('error', 'Employee details not found.');
    }
	
	public function updateProfile(Request $request)
	{
		// Get the form inputs
		$facebook = $request->input('facebook');
		$github = $request->input('github');
		$twitter = $request->input('twitter');
		$instagram = $request->input('instagram');
		$linkedin = $request->input('linkedin');
		$bio = $request->input('bio');
		$dob = Carbon::createFromFormat('d/m/Y', $request->input('dob'))->format('Y-m-d');
		$emergency_contact = $request->input('emergency_contact');
		
		// Get the authenticated user ID
		$userId = auth()->id();
		
		// Update or create the SocialMediaLink record
		SocialMediaLink::updateOrCreate(['uid' => $userId], [
			'facebook' => $facebook,
			'github' => $github,
			'twitter' => $twitter,
			'instagram' => $instagram,
			'linkedin' => $linkedin,
		]);
		
		// Update the EmployeeDetail record
		$employeeDetail = EmployeeDetail::where('user_id', $userId)->first();
		if ($employeeDetail) {
			$employeeDetail->bio = $bio;
			$employeeDetail->emergency_contact = $emergency_contact;
			$employeeDetail->dob = $dob;
			$employeeDetail->save();
		}
		
		// Redirect back or to a success page
		return redirect()->back()->with('success', 'Profile updated successfully');
	}
}

