<?php 
namespace App\Classes\Data;

class CategoriesData{
	public $nameKey = 'name';
	
	
	
	

	public $nameReq = 'required|max:64';
	
	
	public $applicationValidationErrorMsgs = [
	    
		'name.required'=>'Please specify',
		
		
	];
	
	public $statusKey = 'status';
	
	public $warningNotification = 'warning_notification';
	public $successNotification = 'success_notification';
	
	public $successfulInput = 'Changes made successfully.';
	public $unsuccessfulInput = 'Your data has not been submitted successfully';
	
	public $categories = array(
array('name'=>'Ordinary Member'),
array('name'=>'Honorary Member'),
array('name'=>'Friend of Afraken '),

						
						
						
								
					);

}
?>