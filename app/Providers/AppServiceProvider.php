<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\HashValidator;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobProcessing;
use Illuminate\Support\Facades\Queue;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
		Validator::resolver(function($translator, $data, $rules, $messages) {
      return new HashValidator($translator, $data, $rules, $messages);
  });
    /*Queue::before(function (JobProcessing $event) {
		$name = $event->job->resolveName();
		if($name==='App\Jobs\Consolidated'){
			//echo "name: $name \r\n";
			//return redirect('/administrator/show-loading-page');
		}
		//return redirect('/administrator/show-loading-page');
            // $event->connectionName
            // $event->job
            // $event->job->payload()
        });

        Queue::after(function (JobProcessed $event) {
            // $event->connectionName
            // $event->job
            //$eve= $event->job->payload();
			//echo "event: $eve \r\n";
			echo "ok";
        });*/
  
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
