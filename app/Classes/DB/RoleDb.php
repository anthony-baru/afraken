<?php 
namespace App\Classes\DB;
use App\Role;

use App\Classes\Data\RoleData;
use App\Classes\Status;


class RoleDb extends Status{
	
	protected $data = array();
	
	protected $roleData;
	
    
    public function __construct() {
        $this->roleData = new RoleData();
		
    }
	
	
	
	protected function createRole(){
		try{
			$role = Role::create([
				$this->roleData->nameKey => $this->data[$this->roleData->nameKey],
				$this->roleData->displayNameKey => $this->data[$this->roleData->displayNameKey],
				$this->roleData->descriptionKey => $this->data[$this->roleData->descriptionKey],
				
            ]);
			
			if(is_null($role)){
				$this->url = "";
				$this->notification = $this->roleData->warningNotification;
				$this->message = $this->roleData->unsuccessfulInput;	
					
				return null;
			}
			else{
				$this->url = "";
				$this->notification = $this->roleData->successNotification;
				$this->message = "Successfully added.";		
			}
		}
		catch(Exception $e){
			$this->url = "";
			$this->notification = $this->roleData->warningNotification;
			$this->message = $this->roleData->unsuccessfulInput;	
					
			return null;
		}	
		return $role;
	}
	
	
	
	

	
}

?>