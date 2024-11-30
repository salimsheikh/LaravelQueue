<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Jobs\UpdateUserDataJob;

class UserController extends Controller
{
    public function createUser(){        

        //$uniqueToken = Str::uuid(); // Generates a unique string (UUID)
        $uniqueToken = Str::random(4); // Generates a 4-character random string
        
        for($i=1; $i<= 1000; $i++){
            $new_tokent = $i."-".$uniqueToken;
            $user = new User();
            $user->name = "Salim Shaikh - {$new_tokent}";
            $user->email = "salimshaikh{$new_tokent}@gmail.com";
            $user->password = "password";
            $user->save();

        }
    }

    public function dispatchJob(){
        UpdateUserDataJob::dispatch('Hasan');
    }
}
