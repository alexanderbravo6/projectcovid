<?php
namespace Tasks\Http\Controllers;

use Illuminate\Http\Request;
use Tasks\Tasks;
use Tasks\Http\Services\MessageServices;

class V1Controller extends Controller
{
    public function getAll(){
        $tasks = MessageServices::all();
        return $tasks;

    }
 
}
