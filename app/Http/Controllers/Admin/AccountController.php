<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use DB;
use Input;
use Hash;
use Validator;
use App;
use View;
use Excel;
use Storage;
use NumberFormatter;
use DateTime;
use App\Download;
use App\Official;



use App\Role;
use App\User;
use App\Account;
use App\SubCommittee;
use App\Contribution;


use App\Classes\Extension\UserExt;
use App\Classes\Extension\RoleExt;
use App\Classes\Extension\ApplicationExt;



use App\Classes\Control\UserCtr;

use App\Classes\Control\RoleCtr;
use App\Classes\Control\ApplicationsCtr;
use App\Jobs\AccountJob;









class AccountController extends Controller
{
	private $userExt;
	private $applicationExt;
	private $roleExt;
	
	
	private $userCtr;
	
	private $applicationsCtr;
	
	private $roleCtr;
	
	
	
	
	
	
	public function __construct(){
		$this->userExt = new UserExt();
		
		
		$this->roleExt = new RoleExt();
		$this->applicationExt = new ApplicationExt();
		
		$this->userCtr = new UserCtr();
		
		$this->roleCtr = new RoleCtr();
		$this->applicationsCtr = new ApplicationsCtr();
		
		
		
		
		
		
	
	}
	
    public function index(){
		
		$user = Auth::user();
		
		$role = $user->roles()->first();
		if(is_null($role)){
			return back();
		}
		
		
      
		
		
		return view('index.admin.home'
		);
	}
	
	public function downloadsList(){
		
		
		
		$downloads=Download::orderBy('id','DESC')->get();	
		
		
		
		
		
		
		return view('index.admin.downloads', compact('downloads')
		);
		
	}
	public function officialsList(){
		
		
		
		$officials=Official::orderBy('id','DESC')->get();	
		
		
		
		
		
		
		return view('index.admin.officials', compact('officials')
		);
		
	}
	public function editDownload($en){
		
		try {
		$id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
		
		$download=Download::find($id);	
		
		
		
		
		
		
		return view('edit.admin.download', compact('download')
		);
		
	}
	public function editOfficial($en){
		
		try {
		$id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
		
		$official=Official::find($id);	
		
		
		
		
		
		
		return view('edit.admin.official', compact('official')
		);
		
	}
	public function updateDownload(Request $request,$id){
		
		
		$validator = $this->applicationExt->validateUpdateDownload($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		
		$this->status = $this->applicationsCtr->updateDownload($request->all(),$id);
		return redirect('/administrator/downloads-list')->with($this->status[$this->applicationsCtr->notificationKey], $this->status[$this->applicationsCtr->messageKey]);
	
	}
	
	public function updateOfficial(Request $request,$id){
		
		
		$validator = $this->applicationExt->validateUpdateOfficial($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		
		$this->status = $this->applicationsCtr->updateOfficial($request->all(),$id);
		return redirect('/administrator/officials-list')->with($this->status[$this->applicationsCtr->notificationKey], $this->status[$this->applicationsCtr->messageKey]);
	
	}
	
	public function destroyDownload(Request $request)
	{
		$download_id = $request->input('download_id');
		$download=Download::find($download_id);
		
		$destination_path = '/uploads/files/downloads/';
		    if(isset($download)){
		    $file = $download->url;
			$path=$destination_path.$file;
			
			$exam_env = (new \App\Classes\Data\AfrakenData())->GetAfrakenEnv();
			$disk = null;
			if ($exam_env === 'production') {
				
			if(Storage::disk('s3')->exists($path)) {
                Storage::disk('s3')->delete($path);
                   }
				
			}else{
			if (file_exists(public_path($path))) {
			unlink(public_path($path));		
			}	
			
			}
			
			
			
			
			
		    }
		
		DB::table('downloads')->where('id',$download_id)->delete();
		
		
		return back()->with('success_notification' , 'Deleted successfully.');
	}
	
	public function destroyOfficial(Request $request)
	{
		$official_id = $request->input('official_id');
		$download=Official::find($official_id);
		
		$destination_path = '/uploads/files/officials/';
		    if(isset($download)){
		    $file = $download->url;
			$path=$destination_path.$file;
			
			$exam_env = (new \App\Classes\Data\AfrakenData())->GetAfrakenEnv();
			$disk = null;
			if ($exam_env === 'production') {
				
			if(Storage::disk('s3')->exists($path)) {
                Storage::disk('s3')->delete($path);
                   }
				
			}else{
			if (file_exists(public_path($path))) {
			unlink(public_path($path));		
			}	
			
			}
			
			
			
			
			
		    }
		
		DB::table('officials')->where('id',$official_id)->delete();
		
		
		return back()->with('success_notification' , 'Deleted successfully.');
	}
	public function deleteDownload($id)
	{
		$download =Download::find($id);
		
		
		return '<span id="delete-item-label"><strong>Download:</strong></span> '.$download->description;
	}
	
	public function deleteOfficial($id)
	{
		$download =Official::find($id);
		
		
		return '<span id="delete-item-label"><strong>Official:</strong></span> '.$download->title.' '.$download->name;
	}
	public function createDownload(){
		
		
		
		
		
		
		return view('create.admin.download');

	}
	
	public function createOfficial(){
		
		
		
		
		
		
		return view('create.admin.official');

	}
	
	public function uploadDownload(Request $request){
		
		
		$validator = $this->applicationExt->validateDownload($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		
		$this->status = $this->applicationsCtr->UploadDownload($request->all());
		return redirect('/administrator/downloads-list')->with($this->status[$this->applicationsCtr->notificationKey], $this->status[$this->applicationsCtr->messageKey]);
	
	}
	
	public function storeOfficial(Request $request){
		
		
		$validator = $this->applicationExt->validateOfficial($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		
		$this->status = $this->applicationsCtr->storeOfficial($request->all());
		return redirect('/administrator/officials-list')->with($this->status[$this->applicationsCtr->notificationKey], $this->status[$this->applicationsCtr->messageKey]);
	
	}
		public function createContribution(){
		
		return view('create.admin.contribution');
	}
	public function administratorMemberAutocomplete(Request $request)
    {
		
        $data = Account::select(DB::raw("concat(accounts.first_name, ' ',accounts.last_name, ' ',accounts.phone_number) as name"),'accounts.id')->where("first_name","LIKE","%{$request->input('query')}%")->orWhere("last_name","LIKE","%{$request->input('query')}%")->get();
        return response()->json($data);
    }
	
	public function contributions(){
		$contributions=Contribution::orderBy('date','DESC')->get();
		
		
		return view('index.admin.contributions', compact('contributions'));

	}
	/*public function universities(){
		
		$user = Auth::user();
		
		$role = $user->roles()->first();
		if(is_null($role)){
			return back();
		}
	$data = json_decode($this->applicationExt->getUniversities());
	
	//return $this->applicationExt->getUniversities();
	
	//return $this->applicationExt->getUniversities();
	
	return view('index.admin.universities', compact('data'));
	}*/
	
	public function universities(){
		
		$user = Auth::user();
		
		$role = $user->roles()->first();
		if(is_null($role)){
			return back();
		}
	$data = json_decode($this->applicationExt->getData());
	$cataloges=$data->datacatalog;
	//return $data->datacatalog;
	foreach($cataloges as $catalog){
		
		$metatypes=$catalog->metatype;
		
		return $metatypes;
		
	}
	
	//return $this->applicationExt->getData();
	
	return view('index.admin.universities', compact('data'));
	}
	
	public function editContribution($en){
		try {
		$id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
		$contribution=Contribution::find($id);
		
		
	   
	    
		
		
		
		return view('edit.admin.contribution', compact('contribution'));

	}
	public function showCommitteeMembers($en){
		try {
		$committee_id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
	   $committee=SubCommittee::find($committee_id);
	   
	    $members=Account::where('sub_committee_id',$committee_id)->get();
		
		
		
		return view('index.admin.committe_members', compact('committee','members'));

	}
	
	public function showMemberContributions($en){
		try {
		$account_id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
	   $account=Account::find($account_id);
	   $contributions=$account->contributions()->orderBy('date','ASC')->get();
		
		return view('index.admin.member-contributions', compact('account','contributions'));

	}
	
	public function activateMember($en){
		try {
		$account_id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
	   
	   $account=Account::find($account_id)->update(['status'=>'Active']);
	   
	   $msg="Your account has been activated.";
	   $this->dispatch(new AccountJob($msg,$account_id));
	   
	     return back();
        }
		
	public function deactivateMember($en){
		try {
		$account_id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
	   
	  $account= Account::find($account_id)->update(['status'=>'Inactive']);
	   
	   $msg="Your account has been deactivated.";
	   $this->dispatch(new AccountJob($msg,$account_id));
	   
	     return back();
        }
		
		public function moreDetails($en){
		try {
		$account_id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
	   
	   $account=Account::find($account_id);
	   
	    return view('show.admin.member-summary', compact('account'));
        }
		
		public function showMemberProfile($en){
		try {
		$account_id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
	   
	   $account=Account::find($account_id);
	   
	    return view('show.admin.member-profile', compact('account'));
        }
		
		public function makeChairman($en){
		try {
		$account_id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
	   
	   
	   
	   $this->status = $this->userCtr->addChairman($account_id);
		
	   
	     return back();
        }
		
		public function RemoveChairman($en){
		try {
		$account_id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/administrator');
       }
	   
	  
		DB::table('chairmen')->where('account_id',$account_id)->delete();
		
		$account=Account::find($account_id);
		$user=$account->user()->first();
		$role = Role::where('name', 'Chairman')->first(); 
		$user->detachRole($role);
		
	   
	     return back();
        }
		
		
		
		

	
	
	public function members(){
		$members=DB::table('accounts')
		    ->join('sub_committees', 'accounts.sub_committee_id', '=', 'sub_committees.id')
			->select(DB::raw('count(accounts.id) as total_members'),'sub_committees.id','sub_committees.name')
			->orderBy('id','DESC')
			->groupBy('id')
			->get();
		
		
		return view('index.admin.members', compact('members'));

	}
	public function storeContribution(Request $request){
		
		$validator = $this->applicationExt->validateContribution($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		$this->status = $this->applicationsCtr->addContribution($request->all());
		
		return redirect('/administrator/contributions')->with('success_notification','Added successfully.');
		
	}
	
	
	public function updateContribution(Request $request,$id){
		
		$validator = $this->applicationExt->validateUpdateContribution($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		$this->status = $this->applicationsCtr->updateContribution($request->all(),$id);
		
		return redirect('/administrator/contributions')->with('success_notification','Added successfully.');
		
	}
	
	public function deleteContribution($id)
	{
		$contribution = Contribution::find($id);
		
		
		return '<span id="delete-item-label"><strong>Contribution:</strong></span> '.$contribution->account->first_name.' '.$contribution->account->last_name.' '.$contribution->amount;
	}
	
	public function destroyContribution(Request $request)
	{
		$id = $request->input('contribution_id');
		
		
		DB::table('contributions')->where('id',$id)->delete();
		
		return back()->with('success_notification' , 'Removed successfully.');
	}
	
	
	

	

	
	
}
