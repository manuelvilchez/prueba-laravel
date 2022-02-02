<?php

namespace App\Console\Commands;

use App\Models\Comentario;
use App\Models\Userpost;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Faker;

class TestTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando task de prueba';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         $faker = Faker\Factory::create();
        // Comentario::create([
        //     'posts_id'        => 1,
        //     'name'        => $this->faker->text(),
        //     'email'        => $this->faker->text(),
        //     'body'        => $this->faker->text()
        // ]);
        // $ii = Userpost::orderByRandom()->limit(1)->get();
        
        $randonUser = Userpost::orderByRaw("RAND()")->limit(1)->pluck('id');
        Comentario::create([
            'posts_id'        => $randonUser[0],
            'name'        => $faker->text(),
            'email'        => $faker->text(),
            'body'        => $faker->text()
        ]);
        
        
        return 0;
    }
}
