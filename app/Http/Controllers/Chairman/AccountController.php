<?php

namespace App\Http\Controllers\Chairman;

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
use App\Account;
use App\Event;

use App\Classes\Extension\UserExt;

use App\Classes\Extension\ApplicationExt;


use App\Classes\Control\UserCtr;

use App\Classes\Control\ApplicationsCtr;





class AccountController extends Controller
{
	private $userExt;
	
	private $applicationExt;
	
	private $userCtr;
	private $applicationsCtr;
	
	
	
	
	public function __construct(){
		$this->userExt = new UserExt();
		
		$this->applicationExt = new ApplicationExt();
		$this->userCtr = new UserCtr();
		$this->applicationsCtr = new ApplicationsCtr();
		
		
	
	}
    public function index(){
		
		$user = Auth::user();
		
		
		
		$account = $user->account()->first();

		
		
		return view('index.member.profile', compact('account'));
	}
	public function createEvent(){
		
		return view('create.chairman.event');
	}
	
	public function createImage(){
		
		return view('create.chairman.image');
	}
	public function editEvent($id){
		$event=Event::find($id);
		if(Auth::user()->account()->first()->sub_commitee_id!=$event->sub_commitee_id){
			return back();
		}
		
	   
	    
		
		
		
		return view('edit.chairman.event', compact('event'));

	}
	
	
	public function storeEvent(Request $request){
		
		$validator = $this->applicationExt->validateEvent($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		$this->status = $this->applicationsCtr->addEvent($request->all());
		
		return redirect('/events')->with('success_notification','Added successfully.');
		
	}
	
	public function updateEvent(Request $request,$id){
		
		$validator = $this->applicationExt->validateEvent($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		$this->status = $this->applicationsCtr->updateEvent($request->all(),$id);
		
		return redirect('/events')->with('success_notification','Updated successfully.');
		
	}
	
	public function storeImage(Request $request){
		
		$validator = $this->applicationExt->validateImage($request->all());
		
		
		if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
		$this->status = $this->applicationsCtr->uploadImage($request->all());
		
		return redirect('/gallery')->with('success_notification','Added successfully.');
		
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
		
	   $committee=$account->sub_committee;
	   
	    $members=Account::where('sub_committee_id',$committee->id)->get();
		
		
		
		return view('index.member.committe_members', compact('committee','members'));

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
		
		
		return view('edit.member.profile', compact( 'account','sub_committees')
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
