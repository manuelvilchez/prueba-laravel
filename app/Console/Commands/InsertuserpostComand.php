<?php

namespace App\Console\Commands;

use App\Models\Userpost;
use Illuminate\Console\Command;
use GuzzleHttp\Client;

class InsertuserpostComand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'userpost:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insertar desde la api';

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
     * @return int
     */
    public function handle()
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://jsonplaceholder.typicode.com/users";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $rpt_users = json_decode($response->getBody());

        foreach($rpt_users as  $value){
            // $value = (array) $value;
            Userpost::create([
                'name'        => $value->name,
                'username'        => $value->username,
                'email'        => $value->email,
                'street'        => $value->address->street,
                'suite'        => $value->address->suite,
                'city'        => $value->address->city,
                'zipcode'        => $value->address->zipcode,
                'lat'        => $value->address->geo->lat,
                'lng'        => $value->address->geo->lng,
                'phone'        => $value->phone,
                'website'        => $value->website,
                'company_name'        => $value->company->name,
                'company_catchPhrase'        => $value->company->catchPhrase,
                'bs'        => $value->company->bs
            ]);
        }
        $this->info('Insertado correctamente, exitoso');
        return 0;
    }
}
