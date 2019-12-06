<?php 
namespace App\Classes\Data;

class SubCommitteeData{
	public $nameKey = 'name';
	
	
	
	

	public $nameReq = 'required|max:32';
	
	
	public $applicationValidationErrorMsgs = [
	    
		'name.required'=>'Please specify',
		
		
	];
	
	public $statusKey = 'status';
	
	public $warningNotification = 'warning_notification';
	public $successNotification = 'success_notification';
	
	public $successfulInput = 'Changes made successfully.';
	public $unsuccessfulInput = 'Your data has not been submitted successfully';
	
	public $sites = array(
	                    array('name'=>'Academic affairs'),
						array('name'=>'Social affairs'),
						array('name'=>'Finance'),
						array('name'=>'Promotional'),
						array('name'=>'Workshops'),
						array('name'=>'Management'),
						
						
						
								
					);

}
?>