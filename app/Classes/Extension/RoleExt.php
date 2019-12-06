<?php 
namespace App\Classes\Extension;

use Validator;
use DB;
use App\Classes\Data\RoleData;
use App\Classes\Get;

class RoleExt extends Get{
	private $data= array();
	private $rules = array();
	public $lecturerUrlKey = '/lecturer/create-application';
	public $lecturerAddCourseUrlKey='/lecturer/add-application-courses/';
	
	public function __construct(){
		$this->roleData = new RoleData();
	}
	
	public function validateRole(array $data){
		$this->data = $data;
		
		$this->rules = [
			$this->roleData->nameKey => $this->roleData->nameReq,
			$this->roleData->displayNameKey => $this->roleData->displayNameReq,
			$this->roleData->descriptionKey => $this->roleData->descriptionReq,
			
		];
		
		return Validator::make($this->data, $this->rules, $this->roleData->applicationValidationErrorMsgs);
	}

	
		
	
	
	
	
		
		 
	

}
?>