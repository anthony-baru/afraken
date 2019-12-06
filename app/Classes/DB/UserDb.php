<?php 
namespace App\Classes\DB;
use Validator;
use PDOException;
use App\Role;
use App\User;
use App\Account;
use App\Chairman;
use App\MpesaCode;


use App\Classes\Status;
use App\Classes\Data\UsersData;


class UserDb extends Status{
	protected $data = array();
	protected $userData;
	
	
	
	public function __construct(){
		$this->userData = new UsersData();
		
		
	}
	
	public function createUser(){
		try{
			$user = User::create([
				$this->userData->nameKey => $this->data[$this->userData->firstNameKey],
				$this->userData->emailKey => $this->data[$this->userData->emailKey],
				$this->userData->passwordKey => bcrypt($this->data[$this->userData->passwordKey])
			]);
			if(is_null($user)){
				$this->getStatus($this->userData->registrationUrl,
									$this->userData->warningNotification,
									$this->userData->unsuccessfulRegistrationErrorMsg
								);
				return null;
			}
			
		}catch(PDOException $e){
			$this->getStatus($this->userData->registrationUrl,
									$this->userData->warningNotification,
									$this->userData->registrationErrorMsg
								);
			return null;
		}
		
		return $user;
	}
	
	
	public function createUserStaff($staff){
		try{
			$name = explode(" ", $staff->name);

            $firstname = $name[0];
			$user = User::create([
				$this->userData->nameKey => $firstname,
				$this->userData->emailKey => $this->data[$this->userData->emailKey],
				$this->userData->passwordKey => bcrypt($this->data[$this->userData->passwordKey])
			]);
			if(is_null($user)){
				$this->getStatus($this->userData->registrationUrl,
									$this->userData->warningNotification,
									$this->userData->unsuccessfulRegistrationErrorMsg
								);
				return null;
			}
			
		}catch(PDOException $e){
			$this->getStatus($this->userData->registrationUrl,
									$this->userData->warningNotification,
									$this->userData->registrationErrorMsg
								);
			return null;
		}
		
		return $user;
	}
	public function createUserRole($user){
		$role = Role::where($this->userData->nameKey, $this->data[$this->userData->roleKey])->first(); 
		
		try{
			$user->attachRole($role);
			
		}catch(PDOException $e){
			$this->getStatus($this->userData->registrationUrl,
									$this->userData->warningNotification,
									$this->userData->registrationErrorMsg
								);
			return null;
		}
		return $role;
	}
	
	public function createAccount($user){
		try{
			$account = Account::create([
				$this->userData->firstNameKey => $this->data[$this->userData->firstNameKey],
				$this->userData->lastNameKey => $this->data[$this->userData->lastNameKey],
				$this->userData->subCommitteeIdKey => $this->data[$this->userData->subCommitteeIdKey],
				$this->userData->statusKey => 'Inactive',
				$this->userData->phoneNumberKey => $this->data[$this->userData->phoneNumberKey],
				$this->userData->degreeKey => $this->data[$this->userData->degreeKey],
				$this->userData->universityKey => $this->data[$this->userData->universityKey],
				$this->userData->categoryIdKey => $this->data[$this->userData->categoryIdKey],
				$this->userData->employerKey => $this->data[$this->userData->employerKey],
				$this->userData->paymentKey => $this->data[$this->userData->paymentKey],
								
			]);
			
			if(is_null($account)){
				$this->getStatus($this->userData->registrationUrl, 
								$this->userData->warningNotification,
								$this->userData->unsuccessfulRegistrationErrorMsg
								);
				return null;
			}
		}catch(PDOException $e){
			$this->getStatus($this->userData->registrationUrl,
									$this->userData->warningNotification,
									$this->userData->registrationErrorMsg
								);
			return null;
		}
		
		try{
			$user->account()->attach($account->id);
			$account->subcription()->attach($account->sub_committee_id);
			
		}catch(PDOException $e){
			
			$this->getStatus($this->userData->registrationUrl, 
								$this->userData->warningNotification,
								$this->userData->unsuccessfulRegistrationErrorMsg
								);
			return null;
		}
		
		return $account;
	}
	
	public function createMpesaCode($staff){
		try{
			$code = MpesaCode::create([
				$this->userData->accountIdKey => $staff->id,
				$this->userData->codeKey => $this->data[$this->userData->codeKey],
				
			]);
			
			if(is_null($code)){
				$this->getStatus($this->userData->registrationUrl, 
								$this->userData->warningNotification,
								$this->userData->unsuccessfulRegistrationErrorMsg
								);
				return null;
			}
		}catch(PDOException $e){
			$this->getStatus($this->userData->registrationUrl,
									$this->userData->warningNotification,
									$this->userData->registrationErrorMsg
								);
			return null;
		}
		

		return $code;
	}
	protected function updateAccount($account){
		try{
			$account = $account->update([
				$this->userData->firstNameKey => $this->data[$this->userData->firstNameKey],
				$this->userData->lastNameKey => $this->data[$this->userData->lastNameKey],
				//$this->userData->subCommitteeIdKey => $this->data[$this->userData->subCommitteeIdKey],
				$this->userData->phoneNumberKey => $this->data[$this->userData->phoneNumberKey],
				$this->userData->degreeKey => $this->data[$this->userData->degreeKey],
				$this->userData->universityKey => $this->data[$this->userData->universityKey],
				$this->userData->categoryIdKey => $this->data[$this->userData->categoryIdKey],
				$this->userData->employerKey => $this->data[$this->userData->employerKey]
				
			]);
			
			if(is_null($account)){
			$this->url = '';
			$this->notification = $this->userData->warningNotification;
			$this->message =$this->userData->unsuccessfulUpdateMsg;
			
			return null;
			}
			
		}catch(PDOException $e){
			$this->url = $this->userData->accountIndexUrl;
			$this->notification = $this->userData->warningNotification;
			$this->message = $this->userData->unsuccessfulUpdateMsg;
			
			return null;
		}
		return $account;
	}
	
	protected function updateUser($user){
		try{
			
			$update = User::where('id',$user->id)->update([
				$this->userData->nameKey => $this->data[$this->userData->firstNameKey],
				$this->userData->emailKey => $this->data[$this->userData->emailKey]
			]);
			
			if(is_null($update)){

			$this->url = '';
			$this->notification = $this->userData->warningNotification;
			$this->message = $this->userData->unsuccessfulUpdateMsg;
			
			return null;
			}
			
		}catch(PDOException $e){
			$this->url = $this->userData->accountIndexUrl;
			$this->notification = $this->userData->warningNotification;
			$this->message = $this->userData->unsuccessfulUpdateMsg;
			
			return null;
		}
		return $user;
	}
	
	protected function createChairman($id){
		try{
			$account=Account::find($id);
			$hod = Chairman::create([
				'account_id' => $id,
				'sub_committee_id'=> $account->sub_committee_id,
            ]);
			
			if(is_null($hod)){
				
					
				return null;
			}
			
		}
		catch(Exception $e){
			
					
			return null;
		}	
		return $hod;
	}
	
	protected function createChairmanRole($id){
		$role = Role::where($this->userData->nameKey,'Chairman')->first(); 
		$account=Account::find($id);
		$user=$account->user()->first();
		
		
		try{
			$user->attachRole($role);
			
		}catch(Exception $e){
			
					
			return null;
		}
		return $role;
	}
	
	

}


?>