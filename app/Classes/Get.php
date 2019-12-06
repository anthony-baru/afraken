<?php  
namespace App\Classes;

use App\AcademicYear;
use App\Semester;
use App\BudgetGssp;
use App\BudgetPssp;
use App\Staff;
use App\Group;
use App\PTGroup;
use App\Year;
use App\Category;
use App\Campus;
use App\Department;
use App\Management;
use App\TopManagement;
use App\Permission;
use App\PermissionRole;
use App\Programme;
use App\ProgramPssp;
use App\Role;
use App\RoleUser;
use App\School;
use App\User;
use App\UserAccount;
use App\SmsStatus;
use App\SessionStatus;
use App\ProgramGssp;
use App\ApprovalCategory;
use App\TransportInternalPssp;
use App\TransportExternalPssp;
use App\TransportInternalGssp;
use App\TransportExternalGssp;



class Get{
	
	protected function user($id){
		return User::find($id);
	}
	protected function department($id){
		return Department::find($id);
	}
	protected function school($id){
		return School::find($id);
	}
	protected function program($id){
		return Programme::find($id);
	}
	protected function charge($id){
		return Charge::find($id);
	}
	protected function academicYear($id){
		return AcademicYear::find($id);
	}
	
	
	protected function staff($id){
		return Staff::find($id);
	}
	
	//Get all accounts
	public function staffs(){
		return Staff::orderBy('title')->get();
	}
	
	//Get all charges
	public function groups(){
		return Group::orderBy('name','ASC')->get();
	}
	public function ptGroups(){
		return PTGroup::orderBy('id')->get();
	}
	
	//Get all charges
	public function campuses(){
		return Campus::orderBy('id')->get();
	}
	//Get all charges
	public function years(){
		return Year::orderBy('id')->get();
	}
	//Get all departments
	public function departments(){
		return Department::orderBy('school_id')->get();
	}
	public function programs(){
		return Programme::orderBy('department_id')->get();
	}
	
	//Get all countries
	public function countries(){
		return Country::orderBy('id')->get();
	}
	//Get all paginated departments
	public function pagedDepartments (){
		return Department::orderBy('name')->paginate(10);
	}
	//Get all paginated programs
	public function pagedPrograms(){
		return Program::orderBy('name')->paginate(10);
	}
	
	//Get all paginated management
	public function pagedManagements(){
		return Management::orderBy('name')->paginate(10);
	}
	public function pagedTopManagements(){
		return TopManagement::orderBy('name')->paginate(10);
	}
	//Get all paginated schools
	public function pagedSchools (){
		return School::orderBy('name')->paginate(10);
	}
		public function schools (){
		return School::orderBy('id')->get();
	}
	
	//Get all years
	public function academicYears(){
		return AcademicYear::orderBy('name','DESC')->get();
	}
		//Get all years
	public function semesters(){
		return Semester::orderBy('id')->get();
	}
	
	public function sessions(){
		return SessionStatus::orderBy('id')->get();
	}
	
	
	
	public function categories(){
		return Category::orderBy('id')->get();
	}
	public function status(){
		return ApprovalCategory::orderBy('id')->get();
	}
	protected function semester($id){
		return Semester::find($id);
	}
	
	protected function psspTeachingRate($id){
		return ProgramPssp::find($id);
	}
	
	protected function psspInternalTransportRate($id){
		return TransportInternalPssp::find($id);
	}
	protected function psspExternalTransportRate($id){
		return TransportExternalPssp::find($id);
	}
	
	protected function gsspBudgets($id){
		return BudgetGssp::find($id);
	}
	
	protected function psspBudgets($id){
		return BudgetPssp::find($id);
	}
	//Get all sms Status
	public function smsStatus(){
		return SmsStatus::orderBy('id')->get();
	}
	
	protected function gsspTeachingRate($id){
		return ProgramGssp::find($id);
	}
	protected function gsspInternalTransportRate($id){
		return TransportInternalGssp::find($id);
	}
	protected function gsspExternalTransportRate($id){
		return TransportExternalGssp::find($id);
	}

	
}