<?php

namespace App\Console\Commands;

use App\Models\Events;
use App\Models\Matches;
use Illuminate\Console\Command;

class toAnalyze extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'toAnalize';

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


        $data = Events::get();

        foreach  ( $data as $clave => $valor) {

            $this->info($valor->id);

        }

        $this->info(count($data));

        return Command::SUCCESS;
    }
}
