<?php 
namespace App\Classes\Data;

class RoleData{
	public $nameKey = 'name';
	public $displayNameKey = 'display_name';
	public $descriptionKey = 'description';
	
	public $nameReq = 'required|max:255';
	public $displayNameReq = 'required|max:255';
	public $descriptionReq = 'required|max:255';
	
	
	public $applicationValidationErrorMsgs = [
	    
		'name.required'=>'Please specify',
		
		
	];
	
	public $statusKey = 'status';
	public $warningNotification = 'warning_notification';
	public $successNotification = 'success_notification';
	
	public $successfulInput = 'Changes made successfully.';
	public $unsuccessfulInput = 'Your data has not been submitted successfully';
	
	public $roles = array(
						array('name'=>'Administrator', 'display_name'=>'Administrator', 'description'=>'Administrator'),
						array('name'=>'Chairman', 'display_name'=>'Chairman', 'description'=>'Chairman'),
						array('name'=>'Member', 'display_name'=>'Member', 'description'=>'Member'),
						
					);
					
}
?>