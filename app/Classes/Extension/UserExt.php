<?php 
namespace App\Classes\Extension;

use Validator;

use App\Classes\Data\UsersData;
use App\Classes\Get;

class UserExt extends Get{
	private $data= array();
	private $rules = array();
	
	public function __construct(){
		$this->userData = new UsersData();
	}
	
	public function validateRegistration(array $data){
		$this->data = $data;
		
		$this->rules = [
		    //$this->userData->titleKey => $this->userData->titleReq,
			$this->userData->firstNameKey => $this->userData->firstNameReq,
			$this->userData->lastNameKey => $this->userData->lastNameReq,
			$this->userData->emailKey => $this->userData->emailReq,
			$this->userData->passwordKey => $this->userData->password_confirmReq,
			//$this->userData->roleKey=>$this->userData->roleReq,
			$this->userData->phoneNumberKey => $this->userData->phoneNumberReq,
			$this->userData->subCommitteeIdKey => $this->userData->subCommitteeIdReq,
			$this->userData->categoryIdKey => $this->userData->categoryIdReq,
			$this->userData->universityKey => $this->userData->universityReq,
			$this->userData->degreeKey => $this->userData->degreeReq,
			$this->userData->employerKey => $this->userData->employerReq,
			$this->userData->codeKey => $this->userData->codeReq,
			$this->userData->paymentKey => $this->userData->paymentReq,
			//$this->userData->captchaCodeKey => $this->userData->captchaCodeReq

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	public function validateRegistration2(array $data){
		$this->data = $data;
		
		$this->rules = [
		    //$this->userData->titleKey => $this->userData->titleReq,
			$this->userData->firstNameKey => $this->userData->firstNameReq,
			$this->userData->lastNameKey => $this->userData->lastNameReq,
			$this->userData->emailKey => $this->userData->emailReq,
			$this->userData->passwordKey => $this->userData->password_confirmReq,
			//$this->userData->roleKey=>$this->userData->roleReq,
			$this->userData->phoneNumberKey => $this->userData->phoneNumberReq,
			$this->userData->subCommitteeIdKey => $this->userData->subCommitteeIdReq,
			$this->userData->categoryIdKey => $this->userData->categoryIdReq,
			$this->userData->universityKey => $this->userData->universityReq,
			$this->userData->degreeKey => $this->userData->degreeReq,
			$this->userData->employerKey => $this->userData->employerReq,
			$this->userData->paymentKey => $this->userData->paymentReq,
			//$this->userData->captchaCodeKey => $this->userData->captchaCodeReq

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	public function validateProfile(array $data){
		$this->data = $data;
		
		$this->rules = [
		    
			$this->userData->emailKey => $this->userData->emailUpdateReq,
			$this->userData->firstNameKey => $this->userData->firstNameReq,
			$this->userData->lastNameKey => $this->userData->lastNameReq,
			$this->userData->phoneNumberKey => $this->userData->phoneNumberReq,
			$this->userData->categoryIdKey => $this->userData->categoryIdReq,
			$this->userData->universityKey => $this->userData->universityReq,
			$this->userData->degreeKey => $this->userData->degreeReq,
			$this->userData->employerKey => $this->userData->employerReq,
			//$this->userData->subCommitteeIdKey => $this->userData->subCommitteeIdReq,

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	public function validateDepartmentStaff(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->titleKey => $this->userData->titleReq,
			$this->userData->nameKey => $this->userData->nameReq,
			$this->userData->genderKey => $this->userData->genderReq,
			$this->userData->nationalIdKey => $this->userData->nationalIdReq,
			$this->userData->phoneNumberKey => $this->userData->phoneNumber2Req,
			$this->userData->yearKey => $this->userData->yearReq,
			$this->userData->qualificationKey => $this->userData->qualificationReq,
			$this->userData->pfNumberKey => $this->userData->pfNumberReq,
			$this->userData->institutionKey => $this->userData->institutionReq,
			$this->userData->designationKey => $this->userData->designationReq,
			$this->userData->statusKey => $this->userData->statusReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	public function validateAssignDepartment(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->departmentIdKey => $this->userData->departmentIdReq,
			$this->userData->yearKey => $this->userData->yearReq,
			$this->userData->qualificationKey => $this->userData->qualificationReq,
			$this->userData->pfNumberKey => $this->userData->pfNumberReq,
			$this->userData->institutionKey => $this->userData->institutionReq,
			$this->userData->designationKey => $this->userData->designationReq,
			$this->userData->statusKey => $this->userData->statusReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	public function validateStaffAccountId(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->staffIdKey => $this->userData->staffIdReq,
			
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	public function validateStudentAccount(array $data){
		$this->data = $data;
		
		$this->rules = [
			$this->userData->emailKey => $this->userData->emailReq,
			$this->userData->passwordKey => $this->userData->password_confirmReq
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	public function validateStaffAccount(array $data){
		$this->data = $data;
		
		$this->rules = [
			$this->userData->emailKey => $this->userData->emailReq,
			$this->userData->passwordKey => $this->userData->password_confirmReq
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	public function validateUpdateStudentAccount(array $data){
		$this->data = $data;
		
		$this->rules = [
			$this->userData->emailKey => $this->userData->emailUpdateReq
			
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	
	
	public function validateStudentParameters(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->campusIdKey => $this->userData->campusIdReq,
		    $this->userData->groupIdKey => $this->userData->groupIdReq,
			//$this->userData->departmentIdKey => $this->userData->departmentIdReq,
			$this->userData->programmeIdKey => $this->userData->programmeIdReq,
			$this->userData->specializationIdKey => $this->userData->specializationIdReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	public function validateDirectorStudentParameters(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->groupIdKey => $this->userData->groupIdReq,
			$this->userData->specializationIdKey => $this->userData->specializationIdReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	public function validateNominalParameters(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->campusIdKey => $this->userData->campusIdReq,
		    $this->userData->groupIdKey => $this->userData->groupIdReq,
			$this->userData->programmeIdKey => $this->userData->programmeIdReq,
			$this->userData->sessionStatusIdKey => $this->userData->sessionStatusIdReq,
			
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	public function validateNominalParameters3(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->campusIdKey => $this->userData->campusIdReq,
		    //$this->userData->groupIdKey => $this->userData->groupIdReq,
			//$this->userData->programmeIdKey => $this->userData->programmeIdReq,
			$this->userData->sessionStatusIdKey => $this->userData->sessionStatusIdReq,
			
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	public function validateNominalParameters2(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->schoolIdKey => $this->userData->schoolIdReq,
		    $this->userData->campusIdKey => $this->userData->campusIdReq,
		    $this->userData->groupIdKey => $this->userData->groupIdReq,
			$this->userData->programmeIdKey => $this->userData->programmeIdReq,
			$this->userData->sessionStatusIdKey => $this->userData->sessionStatusIdReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	public function validateMarkLog(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->schoolIdKey => $this->userData->schoolIdReq,
		    
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	public function validateStudentParameters2(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->campusIdKey => $this->userData->campusIdReq,
		    $this->userData->groupIdKey => $this->userData->groupIdReq,
			$this->userData->schoolIdKey => $this->userData->schoolIdReq,
			$this->userData->programmeIdKey => $this->userData->programmeIdReq,
			$this->userData->specializationIdKey => $this->userData->specializationIdReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	public function validateStudent(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->lastNameKey => $this->userData->lastNameReq,
			$this->userData->firstNameKey => $this->userData->firstNameReq,
			$this->userData->otherKey => $this->userData->otherReq,
			$this->userData->regNumberKey => $this->userData->regNumberReq,
			$this->userData->phoneNumberKey => $this->userData->phoneNumberStudentReq,
			$this->userData->categoryKey => $this->userData->categoryReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	public function validateStudentSearch(array $data){
		$this->data = $data;
		
		$this->rules = [
		    
			$this->userData->regNumberKey => $this->userData->regNumberSearchReq,
			
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	public function validateImportStudents(array $data){
		$this->data = $data;
		
		$this->rules = [
		    
			$this->userData->importFileKey => $this->userData->importFileReq,
			
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	
	public function validateUpdateStudent(array $data){
		$this->data = $data;
		
		$this->rules = [
		    $this->userData->campusIdKey => $this->userData->campusIdReq,
		    $this->userData->groupIdKey => $this->userData->groupIdReq,
			//$this->userData->departmentIdKey => $this->userData->departmentIdReq,
			$this->userData->programmeIdKey => $this->userData->programmeIdReq,
			$this->userData->specializationIdKey => $this->userData->specializationIdReq,
		    $this->userData->lastNameKey => $this->userData->lastNameReq,
			$this->userData->firstNameKey => $this->userData->firstNameReq,
			$this->userData->otherKey => $this->userData->otherReq,
			$this->userData->regNumberKey => $this->userData->regUpdateNumberReq,
			$this->userData->phoneNumberKey => $this->userData->phoneNumberStudentReq,
			$this->userData->categoryKey => $this->userData->categoryReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	public function validateUpdateDirectorStudent(array $data){
		$this->data = $data;
		
		$this->rules = [
		    //$this->userData->campusIdKey => $this->userData->campusIdReq,
		    $this->userData->groupIdKey => $this->userData->groupIdReq,
			//$this->userData->departmentIdKey => $this->userData->departmentIdReq,
			$this->userData->programmeIdKey => $this->userData->programmeIdReq,
			$this->userData->specializationIdKey => $this->userData->specializationIdReq,
		    $this->userData->lastNameKey => $this->userData->lastNameReq,
			$this->userData->firstNameKey => $this->userData->firstNameReq,
			$this->userData->otherKey => $this->userData->otherReq,
			$this->userData->regNumberKey => $this->userData->regUpdateNumberReq,
			$this->userData->phoneNumberKey => $this->userData->phoneNumberStudentReq,
			$this->userData->categoryKey => $this->userData->categoryReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	
	public function validateUpdateStudentProfile(array $data){
		$this->data = $data;
		
		$this->rules = [
		    
		    //$this->userData->lastNameKey => $this->userData->lastNameReq,
			//$this->userData->firstNameKey => $this->userData->firstNameReq,
			//$this->userData->otherKey => $this->userData->otherReq,
			$this->userData->emailKey => $this->userData->emailUpdateReq,
			$this->userData->genderKey => $this->userData->genderReq,
			$this->userData->countyIdKey => $this->userData->countyIdReq,
			$this->userData->kcseIndexKey => $this->userData->kcseIndexReq,
			$this->userData->phoneNumberKey => $this->userData->phoneNumberReq,
			$this->userData->addressLineKey => $this->userData->addressLineReq,
			$this->userData->cityKey => $this->userData->cityReq,
			$this->userData->postalCodeKey => $this->userData->postalCodeReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
	
	
	
	public function validateAllocateCourse(array $data){
		$this->data = $data;
		
		$this->rules = [
			$this->userData->campusIdKey => $this->userData->campusIdReq,
			$this->userData->courseIdKey => $this->userData->courseIdReq,
			$this->userData->noOfStudentsKey => $this->userData->noOfStudentsReq,
			$this->userData->groupKey => $this->userData->groupReq,
			

		];
		
		return Validator::make($this->data, $this->rules, $this->userData->registrationValidationErrorMsgs);
	}
}
?>