<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\user;

class UpdateUserDataJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public $prefix = "";

    public function __construct($prefix)
    {
        $this->prefix = $prefix;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $users = User::get();

        $prefix = $this->prefix;

        $rand = rand(111,999);
        $i = 1;
        foreach($users as $user){            
            $newNumber = $i."-".$rand;
            User::where('id',$user->id)->update(['name' => $prefix."-".$newNumber]);
            $i++;
        }
    }
}
