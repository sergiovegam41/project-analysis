<?php

namespace App\Console\Commands;

use App\Models\Matches;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use PHPUnit\Exception;

class EstadiosBarras extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Analize:Barras';

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

        $BARRAS = [];


        foreach  ( $data as $clave => $valor) {


//
            $exist = false;
            $fecha =  str_replace("-","/", substr($valor->match_date, 0, 4));


           if(intval($fecha)>= 2018){
               try {

                   $this->info( $fecha );
                   $BARRAS[$fecha];

                   $exist = true;

               }catch ( \Exception $e){

                   $BARRAS[$fecha] = [

                       "La Liga"=> 0,
                       "Indian Super league" => 0,
                       "UEFA Women's Euro"=> 0,
                       "Champions League" => 0,
                       "FA Women's Super League" => 0,
                       "Women's World Cup"=> 0,
                       "FIFA World Cup" => 0,
                       "NWSL" => 0,
                       "UEFA Euro"=> 0,
                       "Premier League"=> 0

                   ];

               }
//
               if ( $exist ){

                   try {

                       $BARRAS[$fecha][$valor->competition['competition_name']] = $BARRAS[$fecha][$valor->competition['competition_name']] + 1 ;

                   }catch (\Exception $e){
                       $BARRAS[$fecha][$valor->competition['competition_name']] =  1 ;

                   }

               }else{

                   try {
                       $BARRAS[$fecha][$valor->competition['competition_name']] =  $BARRAS[$fecha][$valor->competition['competition_name']] + 1 ;



                   }catch (\Exception $e){
                       $BARRAS[$fecha][$valor->competition['competition_name']] = 1 ;

                   }



               }
           }


        }



        Cache::put("BARRAS",$BARRAS);


//        $this->info($BARRAS);

        return Command::SUCCESS;
    }
}
