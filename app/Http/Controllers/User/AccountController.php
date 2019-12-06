<?php

namespace App\Http\Controllers\User;

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
use App\School;
use App\Department;
use App\Student;
use App\Group;
use App\Year;
use App\AcademicYear;
use App\Course;
use App\Mark;
use App\Semester;
use App\Programme;
use App\Classes\Extension\UserExt;
use App\Classes\Extension\MarkExt;
use App\Classes\Extension\ProgramExt;
use App\Classes\Extension\DepartmentExt;


use App\Classes\Extension\SchoolExt;
use App\Classes\Control\UserCtr;
use App\Classes\Control\MarkCtr;
use App\Classes\Control\DepartmentCtr;
use App\Classes\Control\SchoolCtr;
use App\Classes\Control\ProgramCtr;




class AccountController extends Controller
{
	private $userExt;
	private $markExt;
	private $departmentExt;
	private $schoolExt;
	private $programExt;
	
	
	private $userCtr;
	private $markCtr;
	private $applicationsCtr;
	private $departmentCtr;
	private $programCtr;
	private $schoolCtr;
	
	
	
	public function __construct(){
		$this->userExt = new UserExt();
		$this->markExt = new MarkExt();
		$this->departmentExt = new DepartmentExt();
		$this->schoolExt = new SchoolExt();
		$this->programExt = new ProgramExt();
		
		$this->userCtr = new UserCtr();
		$this->markCtr = new MarkCtr();
		$this->programCtr = new ProgramCtr();
		$this->departmentCtr = new DepartmentCtr();
		$this->schoolCtr = new SchoolCtr();
		
	
	}
    public function index(){
		
		$user = Auth::user();
		
		
		
		$staff = $user->staff()->first();

		
		
		return view('index.user.profile', compact('staff'));
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
		
		
		
		$account = $user->staff()->first();
		
		
		
		
		
		return view('edit.user.profile', compact( 'account')
		);
	}
	public function updateProfile(Request $request){
		
		$validator = $this->userExt->validateProfile($request->all());
		
		
		if ($validator->fails()) {
            return redirect('/user/edit-profile')
                        ->withErrors($validator)
                        ->withInput();
        }
		$user = Auth::user();
		$this->status =$this->userCtr->update($request->all(),$user);
		return redirect('/user')->with($this->status[$this->userCtr->notificationKey], $this->status[$this->userCtr->messageKey]);
		
	}
	
	
	
	
	
	
}
