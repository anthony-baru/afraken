<?php

namespace App\Jobs;
use Validator;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountMailable;
use App\Account;



class AccountJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
	
	protected $msg;
	protected $account_id;
	
	
    public function __construct($msg,$account_id)
    {
      
      $this->msg = $msg;
      $this->account_id = $account_id; 	  
    
    }

    /**
     * Execute the job.
     *
     * @return void
     */
	
    public function handle()
    {
		
		$account= Account::find($this->account_id);
	   $user=$account->user()->first();
		Mail::to($user->email)->send(new AccountMailable($this->msg,$this->account_id));
       
    }
	 
	
	
	
	
	
	
		
	
	
	
	
}
