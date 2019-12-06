<?php 
namespace App\Classes\Data;

class UsersData{
	public $specializationIdKey = 'specialization_id';
	public $categoryIdKey = 'category_id';
	public $accountIdKey = 'account_id';
	public $specializationKey='specialization';
	public $universityKey='university';
	public $degreeKey='degree';
	public $employerKey='employer';
	public $groupIdKey = 'group_id';
	public $campusIdKey = 'campus_id';
	public $staffIdKey = 'staff_id';
	public $courseIdKey = 'course_id';
	public $schoolIdKey = 'school_id';
	public $departmentIdKey = 'department_id';
	public $programmeIdKey = 'programme_id';
	public $academicYearIdKey = 'academic_year_id';
	public $sessionStatusIdKey='session_status_id';
	public $semesterIdKey = 'semester_id';
	public $titleKey = 'title';
	public $nameKey = 'name';
	public $emailKey = 'email';
	public $passwordKey = 'password';
	public $roleKey = 'role';
	public $nationalIdKey = 'national_id';
	public $countryIdKey = 'country_id';
	public $countyIdKey = 'county_id';
	public $subCommitteeIdKey = 'sub_committee_id';
	public $postalCodeKey = 'postal_code';
	public $cityKey = 'city';
	public $stateKey = 'state';
	public $addressLine1Key = 'address_line_1';
	public $addressLine2Key = 'address_line_2';
	public $genderKey 	= 'gender';
	public $pfNoKey		= 'pf_no';
	public $phoneNumberKey = 'phone_number';
	public $firstNameKey = 'first_name';
	public $lastNameKey = 'last_name';
	public $otherKey = 'other';
	public $regNumberKey = 'reg_number';
	public $kcseIndexKey = 'kcse_index';
	public $categoryKey = 'category';
	public $addressLineKey = 'address_line';
	public $studentIdKey = 'student_id';
	public $captchaCodeKey = 'CaptchaCode';
	public $importFileKey = 'import_file';
	public $noOfStudentsKey = 'no_of_students';
	public $groupKey = 'group';
	public $codeKey = 'code';
	public $paymentKey = 'payment';
	
	
	public $yearKey = 'year';
	public $qualificationKey = 'qualification';
	public $pfNumberKey = 'pf_number';
	public $institutionKey = 'institution';
	public $designationKey = 'designation';
	public $statusKey = 'status';
	
	
	public $accountIndexUrl = 'account';
	public $registrationUrl='/register';
	public $warningNotification = 'warning_notification';
	public $successNotification = 'success_notification';
	
	public $registrationErrorMsg = 'Error occurred while entering your registration';
	public $unsuccessfulRegistrationErrorMsg = 'Registration was not done';
	
	public $successfulInputMsg = 'You have successfully submitted your profile data';
	public $unsuccessfulInputMsg = 'Your profile data have not been submitted successfully';
	public $duplicateInputMsg = 'Your profile data already exist';
	public $inputErrorMsg = 'An error occurred while submitting your profile data';
	public $successfulUpdateMsg = 'You have successfully submitted profile update data';
	public $unsuccessfulUpdateMsg = 'Profile update data have not been submitted successfully';
	public $updateErrorMsg = 'An error occurred while submitting your profile updates';
	public $successfulImageUploadMsg = 'You have successfully updated your photo';
	public $unsuccessfulImageUploadMsg = 'You profile photo was not updated successfully';
	public $imageUploadErrorMsg = 'An error occurred while updating your profile picture';
	
	public $nameReq = 'required|max:100|regex:/^[\pL\s\-]+$/u';
	public $email_confirmReq = 'required|confirmed|email|max:255|unique:users';
	public $emailReq = 'required|email|max:255|unique:users';
	public $emailUpdateReq = 'required|email|max:255';
	public $passwordReq = 'required|min:6|max:20';
    public $password_confirmReq = 'required|confirmed|min:6|max:20';
	public $roleReq = 'required';
	public $titleReq = 'required';
	public $genderReq = 'required|alpha';
	public $nationalIdReq = 'required|integer';
	public $categoryIdReq = 'required|integer';
	public $staffIdReq = 'required|integer';
	public $subCommitteeIdReq = 'required|integer';
	public $courseIdReq = 'required|integer';
	public $noOfStudentsReq = 'integer';
	public $countryIdReq = 'required';
	public $countyIdReq = 'required';
	
	public $stateReq = 'max:64';
	
	public $addressLine1Req = 'required|max:64';
	public $degreeReq = 'required|max:32';
	public $universityReq = 'required|max:128';
	public $employerReq = 'required|max:64';
	
	public $addressLine2Req = 'max:64';
	public $kcseIndexReq = 'required|max:30';
	public $cityReq = 'required|max:64';
	public $postalCodeReq = 'required|max:16';
	public $addressLineReq = 'required|max:64';
	public $pfNoReq		= 'integer';
	public $phoneNumberReq	= 'required|digits:10';
	public $phoneNumber2Req	= 'required|max:32';
	public $phoneNumberStudentReq	= 'digits:10';
	
	public $programmeIdReq = 'required|integer';
	public $specializationIdReq = 'required|integer';
	public $schoolIdReq = 'required|integer';
	public $campusIdReq = 'required|integer';
	public $departmentIdReq = 'required|integer';
	public $groupIdReq = 'required|integer';
	public $firstNameReq = 'required|max:32';
	public $lastNameReq = 'required|max:32';
	public $categoryReq = 'required';
	public $otherReq = 'max:32';
	public $groupReq = 'max:64';
	public $semesterIdReq = 'required|integer';
	public $sessionStatusIdReq='required|integer';
	public $academicYearIdReq = 'required|integer';
	public $regNumberReq = 'required|max:32|unique:students';
	public $regNumberSearchReq = 'required|max:32';
	public $regUpdateNumberReq = 'required|max:32';
	public $captchaCodeReq = 'required|valid_captcha';
	public $importFileReq = 'required|mimes:csv,txt';
	
	
	public $yearReq = 'integer';
	public $qualificationReq = 'required|max:64';
	public $codeReq = 'required|max:16';
	public $paymentReq = 'required|max:8';
	public $pfNumberReq = 'max:16';
	public $institutionReq = 'max:64';
	public $designationReq = 'max:64';
	public $statusReq = 'max:64';
	
	
	public $registrationValidationErrorMsgs = [
	    'title.required'=>'Title is required',
		
		'email.required'=>'You have not entered the email',
		'email.email'=>'The email should be in email format',
		'email.max'=>'The email should not be more than 255 characters',
		'email.unique'=>'The email has already been used by another user',
		'password.required'=>'You have not entered the password',
		'password.confirmed'=>'You should confirm the password',
		'password.min'=>'Password should be more or up to 6 characters',
		'role.required'=>'Role is missing',
		'pf_no.integer'	=> 'Pf number should be an integer',
		
		'phone_number.required'=>'Phone number is required',
		'phone_number.digits'=>'phone number is 10 digits',
		'reg_number.unique'=>'This reg no has already been registered.'
	];
	
	public $users = array(
						array('name'=>'Administrator', 'email'=>'exam@gmail.com', 'password'=>'exam', 'role'=>'Administrator')
					);
					
	 public function __construct()
	{   
            $examData = new \App\Classes\Data\AfrakenData();
            $this->users = array(
                array('name'=>'Administrator', 'email' => $examData->getAFRAKENAdminEmail(), 'password' => $examData->getAFRAKENAdminPassword(), 'role' => 'Administrator')
            );
	}				
	
}
?>