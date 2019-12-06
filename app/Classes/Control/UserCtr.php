<?php 
namespace App\Classes\Control;

use DB;

use App\Classes\DB\UserDb;
use App\Student;
use App\Staff;


class UserCtr extends UserDb{
	
	public function create(array $data){
		$this->data = $data;
		
		DB::beginTransaction();
		
		$user = $this->createUser();
		if(is_null($user)){
			DB::rollback();
			return null;
		}
		
		$role = $this->createUserRole($user);
		if(is_null($role)){
			DB::rollback();
			return null;
		}
		$account = $this->createAccount($user);
		if(is_null($account)){
			DB::rollback();
			return $this;
		}
		$payment=$data['payment'];
		if($payment==="Mpesa"){
		$code = $this->createMpesaCode($account);
		if(is_null($code)){
			DB::rollback();
			return $this;
		}
		}
		
		DB::commit();
		return $user;
		
	}
	public function addChairman($id){
		
		
		DB::beginTransaction();
		
        
		$hod = $this->createChairman($id);
		if(is_null($hod)) {
			DB::rollback();
			return $this->getStatus();
		}
		$role = $this->createChairmanRole($id);
		if(is_null($role)) {
			DB::rollback();
			return $this->getStatus();
		}
		
			
		DB::commit();
		return $this->getStatus();	
	}
	
	public function update(array $data, $user){
		$this->data = $data;
		
		DB::beginTransaction();
		
		$update_user = $this->updateUser($user);
		if(is_null($update_user)){
			DB::rollback();
			return $this->getStatus();
		}
		
		$account = $user->account()->first();
		
		$update_account = $this->updateAccount($account);
		if(is_null($account)){
			DB::rollback();
			return $this->getStatus();
		}
		
		
		DB::commit();
		return $this->getStatus();
		
		
	}
	
	
}
?>