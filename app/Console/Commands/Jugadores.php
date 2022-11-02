<?php

namespace App\Console\Commands;

use App\Models\Matches;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class Jugadores extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Analize:Jugadores';

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

                $PARTIDOS[$valor->home_team['managers'][0]['name']];
                $exist = true;

            }catch ( \Exception $e){

            }

            if ( $exist ){

                try {

                    $PARTIDOS[$valor->home_team['managers'][0]['name']] += 1;


                }catch ( \Exception $e){

                }


            }else{

                try {

                    $PARTIDOS[$valor->home_team['managers'][0]['name']]  = 1;


                }catch ( \Exception $e){

                }

            }


        }

        Cache::put("JUGADORES",$PARTIDOS);
//            $this->info($ESTADIOS);


        $this->info(count($data));

        return Command::SUCCESS;
    }
}
