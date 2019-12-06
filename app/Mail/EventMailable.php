<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Account;
use App\Event;


class EventMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	protected $event_id;
	protected $account_id;
	protected $sender_id;
	
    public function __construct($event_id,$account_id,$sender_id)
    {
        //
		//$this->user = $auth->user();
		$this->event_id = $event_id;
		$this->account_id = $account_id;
        $this->sender_id = $sender_id; 		
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
	
    {
		$account= Account::find($this->account_id);
		$sender= Account::find($this->sender_id);
		$event= Event::find($this->event_id);
	   
        return $this->subject('Event')->view('emails.event')->with([
                        'event' => $event,'account' => $account,'sender' => $sender,
                        
                    ]);
    
    }
}
