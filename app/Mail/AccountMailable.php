<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Account;


class AccountMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	protected $mess;
	protected $account_id;
	
    public function __construct($msg,$account_id)
    {
        //
		//$this->user = $auth->user();
		$this->mess = $msg;
		$this->account_id = $account_id; 	
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
	
    {
		$account= Account::find($this->account_id);
	   
        return $this->subject('Account Activation')->view('emails.account')->with([
                        'msg' => $this->mess,'account' => $account,
                        
                    ]);
    
    }
}
