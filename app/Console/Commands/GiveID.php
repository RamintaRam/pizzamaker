<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 5/18/2017
 * Time: 1:25 PM
 */

namespace App\Console\Commands;


use App\models\DTIngredients;
use Illuminate\Console\Command;

class GiveID extends Command
{
    protected $signature = "view:id";

    protected $description = "Give ID";

    public function handle()
    {
        cache()->put('super-ingredient', DTIngredients::all()->random(1)->first()->id, 120);

        /*$id = DTIngredients::all()->random(1)->first()->id;

        $this->comment("Giving ID");

        $this->info($id);


        dd(Cache::has('super-ingredient'));*/
    }

}