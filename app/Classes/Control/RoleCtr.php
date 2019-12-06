<?php 

namespace App\Classes\Control;

use Illuminate\Support\Facades\DB as DB;

use App\Classes\DB\RoleDb;


class RoleCtr extends RoleDb{
	
	
	
	public function addRole(array $data){
		
		$this->data = $data;
		DB::beginTransaction();
		
  
		$role = $this->createRole();
		if(is_null($role)) {
			DB::rollback();
			return $this->getStatus();
		}
		
		
			
		DB::commit();
		return $this->getStatus();	
	}

	
	
	
	
}

?>