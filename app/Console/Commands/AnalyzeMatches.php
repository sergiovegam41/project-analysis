<?php

namespace App\Console\Commands;

use App\Models\Events;
use App\Models\Matches;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class AnalyzeMatches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Analize:Matches';

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

        $ESTADIOS = [];


        foreach  ( $data as $clave => $valor) {


            $exist = false;
            try {
                $ESTADIOS[$valor->stadium['name']];
                $exist = true;
            }catch ( \Exception $e){

            }

            if ( $exist ){

                $ESTADIOS[$valor->stadium['name']] += 1;

            }else{

                $ESTADIOS[$valor->stadium['name']] = 1;

            }


        }

        Cache::put("ESTADIOS",$ESTADIOS);
//            $this->info($ESTADIOS);


        $this->info(count($data));

        return Command::SUCCESS;
    }
}
