<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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

        $users = User::all();
        foreach ($users as $user) {
            $user->delete();
        }

        sleep(20);

        $user = User::Create([
            'name' => 'Sherif',
            'email' => 'mosherif91@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        sleep(20);

        $user = User::where('email', 'mosherif91@gmail.com')->get()->first();
        $user->name = Str::random(20);
        $user->save();
    }
}
