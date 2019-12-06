<?php 

namespace App\Classes\Control;

use Illuminate\Support\Facades\DB as DB;

use App\Classes\DB\ApplicationsDb;
use App\Classes\Data\ApplicationData;
use App\Jobs\EventJob;


class ApplicationsCtr extends ApplicationsDb{

	public function UploadDownload(array $data){
		
		$this->data = $data;
		DB::beginTransaction();
  
		$path = $this->uploadDownloadFile();
		if(is_null($path)) {
			DB::rollback();
			return $this->getStatus();
		}
		$cv = $this->createDownload($path);
		if(is_null($cv)) {
			DB::rollback();
			return $this->getStatus();
		}
		
			
		DB::commit();
		return $this->getStatus();	
	}
	
	public function storeOfficial(array $data){
		
		$this->data = $data;
		DB::beginTransaction();
  
		$path = $this->uploadOfficialFile();
		if(is_null($path)) {
			DB::rollback();
			return $this->getStatus();
		}
		$cv = $this->createOfficial($path);
		if(is_null($cv)) {
			DB::rollback();
			return $this->getStatus();
		}
		
			
		DB::commit();
		return $this->getStatus();	
	}
	
	public function updateDownload(array $data,$id){
		
		$this->data = $data;
		DB::beginTransaction();
  
		
		$cv = $this->editDownload($id);
		if(is_null($cv)) {
			DB::rollback();
			return $this->getStatus();
		}
		
			
		DB::commit();
		return $this->getStatus();	
	}
	
	public function updateOfficial(array $data,$id){
		
		$this->data = $data;
		DB::beginTransaction();
  
		
		$cv = $this->editOfficial($id);
		if(is_null($cv)) {
			DB::rollback();
			return $this->getStatus();
		}
		
			
		DB::commit();
		return $this->getStatus();	
	}
  
	
	
	public function addEvent(array $data){
		$this->data = $data;
		
		DB::beginTransaction();
		
		$event = $this->createEvent();
		if(is_null($event)){
			DB::rollback();
			return null;
		}
		
		dispatch(new EventJob($event->id));
		
		
		DB::commit();
		return $event;
		
	}
	
	public function addContribution(array $data){
		$this->data = $data;
		
		DB::beginTransaction();
		
		$contribution = $this->createContribution();
		if(is_null($contribution)){
			DB::rollback();
			return null;
		}
		
		
		DB::commit();
		return $contribution;
		
	}
	
	
	public function updateContribution(array $data,$id){
		$this->data = $data;
		
		DB::beginTransaction();
		
		$contribution = $this->editContribution($id);
		if(is_null($contribution)){
			DB::rollback();
			return null;
		}
		
		
		DB::commit();
		return $contribution;
		
	}
	
	public function updateEvent(array $data,$id){
		$this->data = $data;
		
		DB::beginTransaction();
		
		$event = $this->editEvent($id);
		if(is_null($event)){
			DB::rollback();
			return null;
		}
		
		
		DB::commit();
		return $event;
		
	}
	
	
	public function uploadImage(array $data){
		
		$this->data = $data;
		DB::beginTransaction();
		
		$gallery = $this->createGallery();
		if(is_null($gallery)) {
			DB::rollback();
			return $this->getStatus();
		}
  
		$path = $this->uploadImageFile();
		if(is_null($path)) {
			DB::rollback();
			return $this->getStatus();
		}
		
		$card = $this->createImage($path,$gallery);
		if(is_null($card)) {
			DB::rollback();
			return $this->getStatus();
		}
		
			
		DB::commit();
		return $this->getStatus();	
	}
	
	
	
	
	
}

?>