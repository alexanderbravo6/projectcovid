<?php

namespace App\Http\Services;
use GuzzleHttp\Client;
Class MessageServices 
{


 
    public function all(){

        $validate=['auth' => ['elastic', 'Qx6gSNQaKiiJQg4VW0aROH4d']];

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://e12a17a5b5cf4085af48cb7447f7c060.us-central1.gcp.cloud.es.io:9243',
            // You can set any number of default request options.
        
        ]);
    
        $response= $client->request('GET', '/api.covid19api.countries/_doc/default', $validate);

        return response()->json(json_decode($response->getBody()->getContents(),JSON_PRETTY_PRINT));
        
    }
}
