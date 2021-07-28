<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\Str;
class UpdateUSer implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $users = User::all();
        foreach($users as $user){
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
