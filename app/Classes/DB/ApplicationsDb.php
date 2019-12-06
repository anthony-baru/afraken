<?php 
namespace App\Classes\DB;
use Auth;
use DB;
use App\Image;
use App\Event;
use App\Contribution;
use App\Gallery;
use App\GalleryPhoto;
use App\Download;
use App\Official;

use Storage;

use App\Classes\Data\ApplicationData;
use App\Classes\Status;
use App\Classes\Extension\ApplicationExt;

class ApplicationsDb extends Status{
	
	protected $data = array();
	
	protected $applicationData;
	protected $applicationExt;
    
    public function __construct() {
        $this->applicationData = new ApplicationData();
		$this->applicationExt = new ApplicationExt();
    }
	
	protected function uploadDownloadFile(){
		
		try{
			$file = array_get($this->data,$this->applicationData->downloadKey);
			
			$this->destination_path = $this->applicationData->downloadPath;
			
			$extension = $file->getClientOriginalExtension();
			
			//$name=$this->data[$this->applicationData->categoryKey];
			
			$path = rand(0,1000).time(). '.' . $extension;
			$exam_env = (new \App\Classes\Data\AfrakenData())->GetAfrakenEnv();
			$disk = null;
			if ($exam_env === 'production') {
				$disk = Storage::disk('s3');
			$upload =$disk->put($this->destination_path.$path,file_get_contents($file));
				
			}else{
			$upload = $file->move(public_path().$this->destination_path, $path);	
			}
			
			
			if(is_null($upload)){
				$this->url = $this->applicationData->lecturerAddCourseUrlKey;
				$this->notification = $this->applicationData->warningNotification;
				$this->message = $this->applicationData->unsuccessfulInput;	
					
				return null;
			}
			
		}catch(Exception $e){
			$this->url = $this->applicationData->lecturerAddCourseUrlKey;
			$this->notification = $this->applicationData->warningNotification;
			$this->message = $this->applicationData->unsuccessfulInput;	
					
			return null;
		}
		return $path;
	}
	
	protected function uploadOfficialFile(){
		
		try{
			$file = array_get($this->data,$this->applicationData->officialKey);
			
			$this->destination_path = $this->applicationData->officialPath;
			
			$extension = $file->getClientOriginalExtension();
			
			//$name=$this->data[$this->applicationData->categoryKey];
			
			$path = rand(0,1000).time(). '.' . $extension;
			$exam_env = (new \App\Classes\Data\AfrakenData())->GetAfrakenEnv();
			$disk = null;
			if ($exam_env === 'production') {
				$disk = Storage::disk('s3');
			$upload =$disk->put($this->destination_path.$path,file_get_contents($file));
				
			}else{
			$upload = $file->move(public_path().$this->destination_path, $path);	
			}
			
			
			if(is_null($upload)){
				$this->url = $this->applicationData->lecturerAddCourseUrlKey;
				$this->notification = $this->applicationData->warningNotification;
				$this->message = $this->applicationData->unsuccessfulInput;	
					
				return null;
			}
			
		}catch(Exception $e){
			$this->url = $this->applicationData->lecturerAddCourseUrlKey;
			$this->notification = $this->applicationData->warningNotification;
			$this->message = $this->applicationData->unsuccessfulInput;	
					
			return null;
		}
		return $path;
	}
	
	protected function createDownload($path){
		try{
			
			$download = Download::create([ 
				$this->applicationData->descriptionKey => $this->data[$this->applicationData->descriptionKey],
				$this->applicationData->urlKey=> $path,
				
            ]);
			
			if(is_null($download)){
				$this->url = "";
				$this->notification = $this->applicationData->warningNotification;
				$this->message = $this->applicationData->unsuccessfulInput;	
					
				return null;
			}
			else{
				$this->url ="Uploaded Successfully";
				$this->notification = $this->applicationData->successNotification;
				$this->message = $this->applicationData->successfulInput;	
			}
		}
		catch(Exception $e){
			$this->url = $this->applicationData->lecturerAddCourseUrlKey;
			$this->notification = $this->applicationData->warningNotification;
			$this->message = $this->applicationData->unsuccessfulInput;	
					
			return null;
		}	
		return $download;
	}
	
	protected function createOfficial($path){
		try{
			
			$download = Official::create([ 
				$this->applicationData->nameKey => $this->data[$this->applicationData->nameKey],
				$this->applicationData->titleKey => $this->data[$this->applicationData->titleKey],
				$this->applicationData->roleKey => $this->data[$this->applicationData->roleKey],
				$this->applicationData->urlKey=> $path,
				
            ]);
			
			if(is_null($download)){
				$this->url = "";
				$this->notification = $this->applicationData->warningNotification;
				$this->message = $this->applicationData->unsuccessfulInput;	
					
				return null;
			}
			else{
				$this->url ="Uploaded Successfully";
				$this->notification = $this->applicationData->successNotification;
				$this->message = $this->applicationData->successfulInput;	
			}
		}
		catch(Exception $e){
			$this->url = $this->applicationData->lecturerAddCourseUrlKey;
			$this->notification = $this->applicationData->warningNotification;
			$this->message = $this->applicationData->unsuccessfulInput;	
					
			return null;
		}	
		return $download;
	}
	
	protected function editDownload($id){
		try{
			
			$download = Download::find($id)->update([ 
				
				$this->applicationData->descriptionKey => $this->data[$this->applicationData->descriptionKey],
				
				
            ]);
			
			if(is_null($download)){
				$this->url = $this->applicationData->lecturerAddCourseUrlKey;
				$this->notification = $this->applicationData->warningNotification;
				$this->message = $this->applicationData->unsuccessfulInput;	
					
				return null;
			}
			else{
				$this->url = $this->applicationData->lecturerAddCourseUrlKey;
				$this->notification = $this->applicationData->successNotification;
				$this->message = "Successfully updated.";	
			}
		}
		catch(Exception $e){
			$this->url = $this->applicationData->lecturerAddCourseUrlKey;
			$this->notification = $this->applicationData->warningNotification;
			$this->message = $this->applicationData->unsuccessfulInput;	
					
			return null;
		}	
		return $download;
	}
	
	
	protected function editOfficial($id){
		try{
			
			$download = Official::find($id)->update([ 
				
				$this->applicationData->nameKey => $this->data[$this->applicationData->nameKey],
				$this->applicationData->titleKey => $this->data[$this->applicationData->titleKey],
				$this->applicationData->roleKey => $this->data[$this->applicationData->roleKey],
				
				
            ]);
			
			if(is_null($download)){
				$this->url = $this->applicationData->lecturerAddCourseUrlKey;
				$this->notification = $this->applicationData->warningNotification;
				$this->message = $this->applicationData->unsuccessfulInput;	
					
				return null;
			}
			else{
				$this->url = $this->applicationData->lecturerAddCourseUrlKey;
				$this->notification = $this->applicationData->successNotification;
				$this->message = "Successfully updated.";	
			}
		}
		catch(Exception $e){
			$this->url = $this->applicationData->lecturerAddCourseUrlKey;
			$this->notification = $this->applicationData->warningNotification;
			$this->message = $this->applicationData->unsuccessfulInput;	
					
			return null;
		}	
		return $download;
	}
	
	
	protected function createImage($path,$gallery){
		try{
			
			$image =GalleryPhoto::create([ 
				$this->applicationData->urlKey=> $path,
				$this->applicationData->galleryIdKey=> $gallery->id,
				
            ]);
			
			if(is_null($image)){
				
					
				return null;
			}
			
		}
		catch(Exception $e){
			
					
			return null;
		}	
		return $image;
	}

	protected function uploadImageFile(){
		
		try{
			$file = array_get($this->data,$this->applicationData->photoKey);
			
			$this->destination_path = $this->applicationData->imagePath;
			
			$extension = $file->getClientOriginalExtension();
			
			$path = rand(0,100).time(). '.' . $extension;
			$exam_env = (new \App\Classes\Data\AfrakenData())->GetAfrakenEnv();
			$disk = null;
			if ($exam_env === 'production') {
				$disk = Storage::disk('s3');
			$upload =$disk->put($this->destination_path.$path,file_get_contents($file));
				
			}else{
			$upload = $file->move(public_path().$this->destination_path, $path);	
			}
			
			
			if(is_null($upload)){

				return null;
			}
			
		}catch(Exception $e){
			
					
			return null;
		}
		return $path;
	}
	
	public function createEvent(){
		try{
			$user = Auth::user();
		    $account = $user->account()->first();
			$date=$this->data[$this->applicationData->dateKey];
			$event_date = date_format(date_create_from_format("d-m-Y H:i",$date), 'Y-m-d H:i');
			$event = Event::create([
				$this->applicationData->dateKey => $event_date,
				$this->applicationData->titleKey => $this->data[$this->applicationData->titleKey],
				$this->applicationData->venueKey => $this->data[$this->applicationData->venueKey],
				$this->applicationData->descriptionKey => $this->data[$this->applicationData->descriptionKey],
				'sub_committee_id' => $account->sub_committee_id,
			]);
			if(is_null($event)){
				
				return null;
			}
			
		}catch(PDOException $e){
			
			return null;
		}
		
		return $event;
	}
	
	public function editEvent($id){
		try{
			$user = Auth::user();
		    $account = $user->account()->first();
			$date=$this->data[$this->applicationData->dateKey];
			$event_date = date_format(date_create_from_format("d-m-Y H:i",$date), 'Y-m-d H:i');
			$event = Event::find($id)->update([
				$this->applicationData->dateKey => $event_date,
				$this->applicationData->titleKey => $this->data[$this->applicationData->titleKey],
				$this->applicationData->venueKey => $this->data[$this->applicationData->venueKey],
				$this->applicationData->descriptionKey => $this->data[$this->applicationData->descriptionKey],
				'sub_committee_id' => $account->sub_committee_id,
			]);
			if(is_null($event)){
				
				return null;
			}
			
		}catch(PDOException $e){
			
			return null;
		}
		
		return $event;
	}
	
	public function createGallery(){
		try{
			$user = Auth::user();
		    $account = $user->account()->first();
			$date=$this->data[$this->applicationData->dateKey];
			$event_date = date_format(date_create_from_format("d-m-Y",$date), 'Y-m-d');
			$event = Gallery::create([
				$this->applicationData->dateKey => $event_date,
				$this->applicationData->titleKey => $this->data[$this->applicationData->titleKey],
				$this->applicationData->descriptionKey => $this->data[$this->applicationData->descriptionKey],
				'sub_committee_id' => $account->sub_committee_id,
			]);
			if(is_null($event)){
				
				return null;
			}
			
		}catch(PDOException $e){
			
			return null;
		}
		
		return $event;
	}
	
	
	
	
	public function createContribution(){
		try{
			
			$date=$this->data[$this->applicationData->dateKey];
			$event_date = date_format(date_create_from_format("d-m-Y",$date), 'Y-m-d');
			$event = Contribution::create([
				$this->applicationData->dateKey => $event_date,
				$this->applicationData->accountIdKey => $this->data[$this->applicationData->accountIdKey],
				$this->applicationData->descriptionKey => $this->data[$this->applicationData->descriptionKey],
				$this->applicationData->amountKey => $this->data[$this->applicationData->amountKey],
			]);
			if(is_null($event)){
				
				return null;
			}
			
		}catch(PDOException $e){
			
			return null;
		}
		
		return $event;
	}
	
	public function editContribution($id){
		try{
			
			$date=$this->data[$this->applicationData->dateKey];
			$event_date = date_format(date_create_from_format("d-m-Y",$date), 'Y-m-d');
			$event = Contribution::find($id)->update([
				$this->applicationData->dateKey => $event_date,
				$this->applicationData->descriptionKey => $this->data[$this->applicationData->descriptionKey],
				$this->applicationData->amountKey => $this->data[$this->applicationData->amountKey],
			]);
			if(is_null($event)){
				
				return null;
			}
			
		}catch(PDOException $e){
			
			return null;
		}
		
		return $event;
	}
	
	
	
	
	



}

?>