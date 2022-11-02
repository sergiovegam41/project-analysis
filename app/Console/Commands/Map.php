<?php

namespace App\Console\Commands;

use App\Models\Events;
use App\Models\Matches;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class Map extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Analize:MapController';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        $data = Matches::get();

        $PARTIDOS = [];


        foreach  ( $data as $clave => $valor) {


            $exist = false;
            try {

                $PARTIDOS[$valor->stadium['country']['name']];
                $exist = true;

            }catch ( \Exception $e){

            }

            if ( $exist ){

                $PARTIDOS[$valor->stadium['country']['name']] += 1;

            }else{

                $PARTIDOS[$valor->stadium['country']['name']]  = 1;

            }


        }

        Cache::put("MAPA",$PARTIDOS);
//            $this->info($ESTADIOS);


        $this->info(count($data));

    }
}
