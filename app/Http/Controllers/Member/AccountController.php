<?php

namespace App\Http\Controllers\Member;

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

use App\Role;
use App\User;
use App\SubCommittee;
use App\University;
use App\Category;
use App\Account;
use App\Event;
use App\Gallery;
use App\Download;
use App\Official;
use Carbon\Carbon;

use App\Classes\Extension\UserExt;
use App\Classes\Extension\ApplicationExt;





use App\Classes\Control\UserCtr;





class AccountController extends Controller
{
	private $userExt;
	
	
	
	private $userCtr;
	
	private $applicationExt;
	
	
	
	
	public function __construct(){
		$this->userExt = new UserExt();
		
		
		$this->userCtr = new UserCtr();
		$this->applicationExt = new ApplicationExt();
		
		
	
	}
    public function index(){
		
		$user = Auth::user();
		
		
		
		$account = $user->account()->first();
		

		
		
		return view('index.member.profile', compact('account'));
	}
	
	public function unsubscribe($en){
		try {
		$id=decrypt($en);
		}catch (DecryptException $e) {
        return redirect('/member');
       }
	   $user = Auth::user();
		
		
		
		$account = $user->account()->first();
	   
	  // DB::table('committee_subscriptions')->where('sub_committee_id',$id)->delete();
	  // return $id;
		$account->subcription()->detach($id);
		
		
		 return back()->with('success_notification','Unsubscribed successfully.');

	}
	public function subscriptions(){
		
		$user = Auth::user();
		
		
		
		$account = $user->account()->first();
		$subscriptions=$account->subcription()->get();
		
		
		
//return $subscriptions;
		
		
		return view('index.member.subscriptions', compact('subscriptions','account'));
	}
		public function storeSubscription(Request $request){
		
		$validator = $this->applicationExt->validateSubCommittee($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		$user = Auth::user();
		
		
		
		$account = $user->account()->first();
		$sub_committee_id = $request->input('sub_committee_id');
		$account->subcription()->attach($sub_committee_id);
		
		return redirect('/member/subscriptions')->with('success_notification','Subscribed successfully.');
		
	}
	public function createSubscription(){
		
		$user = Auth::user();
		
		
		
		$account = $user->account()->first();
		$subscriptions=$account->subcription()->get();
		$ids = array();
			foreach($subscriptions as $holder)
			{
				array_push($ids,$holder->id);
			}
		$sub_committees=SubCommittee::orderBy('name','ASC')->whereNotIn('id', $ids)->get();

		//return $subcommittes;
		
		return view('create.member.subscription', compact('sub_committees','account'));
	}
	
	public function members(){
		$user = Auth::user();
		
		
		
		$account = $user->account()->first();
		
		if($account->status==='Inactive'){
			return redirect()->back()->with('warning_notification' , 'Your Account Is Inactive.');
		}
		
	   $committee=$account->sub_committee;
	   
	    $members=Account::where('sub_committee_id',$committee->id)->get();
		
		
		
		return view('index.member.committe_members', compact('committee','members'));

	}
	
	public function contributions(){
		$user = Auth::user();
		
		
		
		$account = $user->account()->first();
		
		if($account->status==='Inactive'){
			return redirect()->back()->with('warning_notification' , 'Your Account Is Inactive.');
		}
		
	   $contributions=$account->contributions()->orderBy('date','ASC')->get();
	   
	   
		
		
		
		return view('index.member.contributions', compact('contributions'));

	}
	
	public function events(){
		
		
		
	   
	    $events=Event::where('date', '>=', \DB::raw('NOW()'))->orderBy('date','ASC')->paginate(9);
		
		
		
		return view('show.events', compact('events'));

	}
	
	public function downloads(){
		
		
		
	   
	    $downloads=Download::orderBy('description','ASC')->get();
		
		
		
		return view('show.downloads', compact('downloads'));

	}
	
	public function officials(){
		
		
		
	   
	    $officials=Official::orderBy('id','ASC')->get();
		
		
		
		return view('show.officials', compact('officials'));

	}
	
	
	public function gallery(){
		
		
		
	   
	    $galleries=Gallery::orderBy('created_at','DESC')->paginate(12);
		
		
		
		return view('show.gallery', compact('galleries'));

	}
	
	public function home(){
		
		
		
	   
	    $events=Event::where('date', '>=', \DB::raw('NOW()'))->orderBy('date','ASC')->take(3)->get();
		$galleries=Event::where('date', '<',\DB::raw('NOW()'))->orderBy('date','DESC')->take(3)->get();
		
		
		
		return view('index', compact('events','galleries'));

	}
	
	public function singleEvent($id){
		
		
		
	   
	    $event=Event::find($id);
		
		
		
		return view('show.single-event', compact('event'));

	}
	
	public function singleGallery($id){
		
		
		
	   
	    $gallery=Gallery::find($id);
		
		
		
		return view('show.single-gallery', compact('gallery'));

	}
	
	public function editPassword(){
		
		return view('edit.user.password');
	}
	
	public function changePassword(Request $request){
		$user = Auth::user();
		$validation = Validator::make($request->all(), [
		'password' => 'hash:' . $user->password,
		'new_password' => 'required|different:password|min:6|max:16',
		'password_confirmation' => 'required|min:6|max:16|same:new_password',
		]);
		if ($validation->fails()) {
			return redirect()->back()->withErrors($validation->errors());
         }
		 $user->password = Hash::make($request->input('new_password'));
		 $user->save();
		 return redirect('/user')->with('success_notification','Changed succesfully.');

  
		
	}
	
	public function editProfile(){
		$user = Auth::user();
		
		
		
		$account = $user->account()->first();
		
		
		$sub_committees=SubCommittee::get();
		$universities=University::orderBy('name','ASC')->get();
		$categories=Category::orderBy('name','ASC')->get();
		
		
		return view('edit.member.profile', compact( 'account','sub_committees','universities','categories')
		);
	}
	public function updateProfile(Request $request){
		
		$validator = $this->userExt->validateProfile($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		$user = Auth::user();
		$this->status =$this->userCtr->update($request->all(),$user);
		return redirect('/member')->with($this->status[$this->userCtr->notificationKey], $this->status[$this->userCtr->messageKey]);
		
	}
	
	
	
	
	
	
}
