<?php

namespace App\Console\Commands;

use App\Models\Dishes\Dishes;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DishesGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dishes_create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command create dishes data';

    private $dishes;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->dishes = app()->make(Dishes::class);
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        $this->info('['.Carbon::now()->format('Y-m-d H:i:s').'] Start Run: '.self::class.'');
        $this->createDataDishes();
        $this->info('['.Carbon::now()->format('Y-m-d H:i:s').'] Run Success: '.self::class);
        return 0;
    }
    public function createDataDishes()
    {
        $dataJson = \Illuminate\Support\Facades\File::get(storage_path('data/dishes.json'));;
        $data = json_decode($dataJson,true);
        foreach ($data['dishes'] as $key => $value){
            $data['dishes'][$key]['availableMeals'] = implode(',',$value['availableMeals']);
            $data['dishes'][$key]['created_at'] = Carbon::now();
        }
        $this->dishes->insert($data['dishes']);
    }
}
