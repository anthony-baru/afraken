<?php

namespace App\Jobs;
use Validator;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventMailable;
use App\Mail\AccountMailable;
use App\Account;
use Auth;
use App\SubCommittee;
use App\Event;



class EventJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
	
	protected $event_id;
	//protected $account_id;
	
	
    public function __construct($event_id)
    {
      
      $this->event_id = $event_id;
      //$this->account_id = $account_id; 	  
    
    }

    /**
     * Execute the job.
     *
     * @return void
     */
	
    public function handle()
	
    {
		$user = Auth::user();
		$sender = $user->account()->first();
		$event=Event::find($this->event_id );
		$sub_committee_id=$event->sub_committee_id;
		if(isset($sub_committee_id)){
		$sub_committee=SubCommittee::find($sub_committee_id);
		$subscriptions=$sub_committee->subcription1()->get();
		
		foreach($subscriptions as $subscription){
		$account= Account::find($subscription->id);
	    $user=$account->user()->first();
		Mail::to($user->email)->send(new EventMailable($this->event_id,$account->id,$sender->id));
		 
		}
		}
       
    }
	 
	
	
	
	
	
	
		
	
	
	
	
}
