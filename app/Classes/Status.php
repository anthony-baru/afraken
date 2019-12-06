<?php 
namespace App\Classes;

class Status{
	
	protected $notification;
	protected $message;
	protected $url;
	public $urlKey = 'url';
	public $notificationKey = 'notification';
	public $messageKey = 'message';
	public $success = array();
	public $error = array();
	public $status = array();
	
	
	
	protected function getStatus(){
		$this->status[$this->urlKey] = $this->url;
		$this->status[$this->notificationKey] = $this->notification;
		$this->status[$this->messageKey] = $this->message;
		
		return $this->status;
	}
}
?>