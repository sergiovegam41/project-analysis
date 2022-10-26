<?php

namespace App\Console\Commands;

use App\Models\Matches;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class Partidos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Analize:Partidos';

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

                $PARTIDOS[$valor->competition['competition_name']];
                $exist = true;

            }catch ( \Exception $e){

            }

            if ( $exist ){

                $PARTIDOS[$valor->competition['competition_name']] += 1;

            }else{

                $PARTIDOS[$valor->competition['competition_name']]  = 1;

            }


        }

        Cache::put("PARTIDOS",$PARTIDOS);
//            $this->info($ESTADIOS);


        $this->info(count($data));

        return Command::SUCCESS;
    }
}
