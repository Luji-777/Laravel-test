<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = [
            ['id' => 1, 'name' => "lujain"],
            ['id' => 2, 'name' => "taha"],
            ['id' => 3, 'name' => "aya"]
        ];
        // foreach ($users as $user) {
        //  echo $user['id'] . ") " . $user['name'] . "\n";
        return response()->json($users);
    }
    function checkUser(int $id) {
        if($id>10){
        return response()->json(['message'=>"no tabels"],403);
    }
    else
                return response()->json(['message'=>"welcome to our resturante"]);

}
}
