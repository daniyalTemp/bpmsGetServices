<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMapDataJob implements ShouldQueue
{
    use Queueable;


    protected $mainOrg;

    protected $prOrg;
    protected $mapData;

    /**
     * Create a new job instance.
     */
    public function __construct( $mainOrg, $prOrg , $mapData)
    {

        $this->mainOrg = $mainOrg;
        $this->prOrg = $prOrg;
        $this->mapData = $mapData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://pm.iraneland.ir/ws/call/getMapData',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    "mainOrg":"' . $this->mainOrg . '",
    "prOrg":"' . $this->prOrg. '",
    "mapData":"' . $this->mapData . '"

}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic MzI0MjM3ODY0NDpBYmNAMTIzNDU2',
            ),
        ));

        $response = curl_exec($curl);
//        dd($response);

        curl_close($curl);
    }
}
