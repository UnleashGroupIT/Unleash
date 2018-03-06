<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use App\Delegates;
use Illuminate\Support\Facades\DB;

class swoogo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unleash:swoogo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch the delegates from swoogo';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        DB::table('delegates')->truncate();


            $client = new Client();

         $response = $client->request('POST', 'https://www.swoogo.com/api/v1/oauth2/token.json', [
            'headers' => [
                'Authorization' => 'Basic '.env('SWOOGO'), 
                'Content-Type' => 'application/x-www-form-urlencoded;charset=UTF-8',
                'Content-Length' => 29      
            ],
            'form_params' => [
                'grant_type' => 'client_credentials'
                ]
            
        ]);
          
         if ($response){
            $res = json_decode($response->getBody());
            $token = $res->access_token;

        /*
        GET EVENTS: 

            return $data = $client->request('GET', 'https://www.swoogo.com/api/v1/events.json', [
                'headers' => [
                    'Authorization' => 'Bearer '.$token 
                ]

            ]);
        */

            

             $data = $client->request('GET', 'https://www.swoogo.com/api/v1/registrants.json?event_id='.env('SWOOGO_EVENT').'&fields=first_name,last_name,company,job_title,registration_status&per-page=200&expand=billingAddress', [
                'headers' => [
                    'Authorization' => 'Bearer '.$token,
                ]
            ]);

             $userData = json_decode($data->getBody());

        //dd($userData);

            if ($userData->_meta->pageCount){
                for ($i=1; $i <= $userData->_meta->pageCount; $i++) { 
                     $data = $client->request('GET', 'https://www.swoogo.com/api/v1/registrants.json?event_id='.env('SWOOGO_EVENT').'&fields=first_name,last_name,company,job_title,registration_status&per-page=200&expand=billingAddress&page='.$i, [
                        'headers' => [
                            'Authorization' => 'Bearer '.$token,
                        ]
                    ]);

                     $endResult = json_decode($data->getBody());
					

                     foreach ($endResult->items as $key => $value) {
                        if (isset($value->billingAddress->country->name)){
                            $country = $value->billingAddress->country->name;
                        }else {
                            $country = null;
                        }
					   if($value->registration_status == "confirmed"){
							$delegate = Delegates::create([
								'first_name' => ltrim($value->first_name),
								'last_name' => ltrim($value->last_name),
								'job_title' => $value->job_title,
								'company' => $value->company,
								'country' => $country,

							]);						   
						   
					   }

                        
                     }
                }// for end

            }//if pagecount


         }//if response end
    }
}
