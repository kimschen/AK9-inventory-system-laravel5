<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;


class FirebaseController extends Controller
{
    public function index() {

        $serviceAccount = ServiceAccount::fromJsonFile(storage_path().'/json/ak9-ims-firebase-adminsdk-ymmhq-bc27c12355.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://ak9-ims.firebaseio.com/')
        ->create();

        // $database = $firebase->getDatabase();
        //
        // $newPost = $database
        // ->getReference('product/upload')
        // ->push([
        //     'name' => 'abc',
        //     'cost' => '1.00'
        // ]);
        //
        // echo"<pre>";
        // print_r($newPost->getValue());
    }
}
