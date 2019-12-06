<?php 
namespace App\Classes\Data;

class ApplicationData{
	public $venueKey = 'venue';
	public $officialKey = 'official';
	public $roleKey = 'role';
	public $subCommitteeIdKey = 'sub_committee_id';
	public $galleryIdKey = 'gallery_id';
	public $dateKey = 'date';
	public $accountIdKey = 'account_id';
	public $staffIdKey = 'staff_id';
	public $studentIdKey = 'student_id';
	public $programmeIdKey = 'programme_id';
	public $urlKey = 'url';
	public $bankIdKey = 'bank_id';
	public $amountKey = 'amount';
	public $nameKey = 'name';
	public $bankBranchKey = 'bank_branch';
	public $accountNameKey = 'account_name';
	public $accountNumberKey = 'account_number';
	public $monthKey = 'months';
	public $commentKey = 'comment';
	public $applicationCourseIdKey ='application_course_id';
	public $categoryIdKey = 'category_id';
	//public $codeKey = 'code';
	public $groupDescKey = 'group_desc';
	public $courseCategoryIdKey ='course_category_id';
	public $programCategoryIdKey ='program_category_id';
	public $categoryKey = 'category';
	public $semesterIdKey = 'semester_id';
	public $academicYearIdKey = 'academic_year_id';
	public $groupIdKey = 'group_id';
	public $applicationIdKey='application_id';
	public $paymentIdKey='payment_id';
	public $courseIdKey='course_id';
	public $noOfStudentKey='no_of_students';
	public $noOfScriptKey='no_of_scripts';
	public $contactHoursKey='contact_hours';
    public $deptIdKey = 'dept_id';
	public $schoolIdKey = 'school_id';
	public $departmentIdKey = 'department_id';
	public $fileIdKey = 'file_id';
	public $filePathKey = 'file_path';
	public $descriptionKey = 'description';
	public $readStatusKey = 'read_status';
	public $statusKey = 'status';
	public $designationKey = 'designation';
	public $pfNoKey		= 'pf_no';
	public $completionKey='completion_status';
	public $qualificationKey='qualification';
	public $completionYearKey='completion_year';
	public $employingInstitutionKey='employing_institution';
	public $positionKey='position';
	public $codeKey='code';
	public $titleKey='title';
	public $unitsKey='units';
	public $cvKey='cv';
	public $certificateKey='certificate';
	public $photoKey='photo';
	public $cardKey='card';
	public $monthsKey = 'months';
	public $accountNoKey = 'account_no';
	public $downloadKey = 'download';
	public $filesKey = 'files';
	public $imageKey = 'image';
	
	
	public $urlLecturer = '/lecturer/create-application';
	public $lecturerAddCourseUrlKey='/lecturer/add-application-courses/';
	public $warningNotification = 'warning_notification';
	public $successNotification = 'success_notification';
	
	public $registrationErrorMsg = 'Error occurred while entering your registration';
	public $unsuccessfulRegistrationErrorMsg = 'Registration was not done';
	
	public $successfulInput = 'You have successfully applied';
	public $unsuccessfulInput = 'Your application has not been submitted successfully';
	public $duplicateInputMsg = 'Your profile data already exist';
	public $inputErrorMsg = 'An error occurred while submitting your profile data';
	public $successfulUpdateMsg = 'You have successfully submitted profile update data';
	public $unsuccessfulUpdateMsg = 'Profile update data have not been submitted successfully';
	public $updateErrorMsg = 'An error occurred while submitting your profile updates';
	public $successfulImageUploadMsg = 'You have successfully updated your photo';
	public $unsuccessfulImageUploadMsg = 'You profile photo was not updated successfully';
	public $imageUploadErrorMsg = 'An error occurred while updating your profile picture';
	
	public $courseCategoryIdReq ='required';
	public $bankIdReq ='required';
	public $programCategoryIdReq ='required';
	public $accountIdReq = 'required';
	public $staffIdReq = 'required';
	
	public $designationReq = 'required';
	//public $codeReq = 'required';
	public $nameReq = 'required';
	public $venueReq = 'required';
	public $bankBranchReq = 'required|max:64';
	public $descriptionReq = 'required|max:5000';
	public $accountNoReq = 'required|max:32';
	public $accountNameReq = 'required|max:128';
	public $accountNumberReq = 'required|max:64';
	public $codeReq = 'required|max:8';
	public $groupDescReq = 'required';
	public $amountReq = 'required|numeric';
	public $titleReq = 'required|max:128';
	public $unitsReq='required|integer';
	public $qualificationReq = 'required';
	public $completionYearReq = 'required|integer';
	public $employingInstitutionReq = 'required';
	public $positionReq = 'required';
	public $deptIdReq = 'required';
	public $schoolIdReq = 'required';
	public $departmentIdReq = 'required';
	public $courseIdReq = 'required';
	public $academicYearIdReq = 'required';
	public $groupIdReq = 'required';
	public $semesterIdReq = 'required';
	public $commentReq = 'required';
	public $noOfStudentReq='required|integer';
	public $noOfScriptReq='required|integer';
	public $contactHoursReq='required|integer';
	public $pfNoReq		= 'required|integer';
	public $monthReq		= 'required|integer';
	public $cvReq = 'required|mimes:pdf|max:10000';
	public $certificateReq = 'required|mimes:pdf|max:10000';
	public $cardReq = 'required|mimes:pdf|max:10000';
	public $photoReq = 'required|image';
	public $filesReq = 'required|image';
	public $imageReq = 'required|image';
	public $officialReq = 'required|image';
	public $roleReq = 'required|max:32';
	public $statusReq = 'required|integer';
	public $downloadReq = 'required|mimes:pdf|max:10000';
	public $description2Req = 'required|max:128';
	public $categoryReq = 'required';
	public $programmeIdReq = 'required|integer';
	public $subCommitteeIdReq = 'required|integer';
	public $categoryIdReq = 'required|integer';
	public $dateReq = 'required|date_format:"d-m-Y H:i"';
	public $date2Req = 'required|date_format:"d-m-Y"';
	//public $cvReq = 'required|file|mime:pdf,doc';
	//public $certificateReq = 'required|file|mime:pdf,doc';
	
	
	
	
	public $applicationValidationErrorMsgs = [
	    'account_id.required'=>'Acccount is required',
		'staff_id.required'=>'Acccount is required',
		'category_id.required'=>'Category is required',
		'designation.required'=>'Deignation is required',
		'code.required'=>'Code is required',
		'title.required'=>'Event title is required',
		'qualification.required'=>'Qualification is required',
		'completion_year.required'=>'Completion Year is required',
		'completion_year.integer'=>'Completion Year must be an integer',
		'position.required'=>'Position is required',
		'pf_no.integer'	=> 'Pf number should be an integer',
		'pf_no.required'=> 'Pf number is required',
		'units.integer'	=> 'Units should be an integer',
		'units.required'=> 'Units is required',
		'semester_id.required'=>'Semester is required',
		'acadeic_year_id.required'=>'Academic Year is required',
		'group_id.required'=>'Category is required',
		'dept_id.required'=>'Department applying to is required',
		'school_id.required'=>'School Required',
		'department_id.required'=>'Your department is required',
		'course_id.required'=>'Course Required',
		'no_of_students.required'=>'No of students is required',
		'no_of_scripts.required'=>'No of scripts is required',
		'contact_hours.required'=>'Contact hours per week is Required',
		'certificate.required'=>'Certificate is required',
		'cv.required'=>'CV is Required',
		'name.required'=>'Please specify',
		'amount.required'=>'Amount is required',
		'months.required'=>'No of months is required',
		'amount.numeric'=>'Amount must have the right formart',
		'course_category_id.required'=>'Course category is required',
		'program_category_id.required'=>'Program category is required',
		'status.required'=>'Status Required',
		'status.integer'=>'Status Required',
	];
	
	
	public $imagePath = '/uploads/files/images/';
	public $cvPath = '/uploads/files/cv/';
	public $downloadPath = '/uploads/files/downloads/';
	public $officialPath = '/uploads/files/officials/';
	public $certificatePath = '/uploads/files/certificate/';
	public $photoPath = '/uploads/files/photo/';
	public $cardPath = '/uploads/files/card/';
	
	
	
}
?>