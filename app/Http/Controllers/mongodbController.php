<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class mongodbController extends Controller
{
    //
    function mongoConnect()
    {

        
        $client = new Mongo(
            'mongodb+srv://dbUser:12345abc@textbooks.3gxa8.mongodb.net/products_availability?retryWrites=true&w=majority');

        $db = $client->products_availability;

        $collection = $db->product;        
        $cursor = $collection->find();    
        $names=array();
        $availables=array();

        foreach ($cursor as $document) {
            $currName= $document["Product Name"];
            array_push($names,$currName);
            $currAvailable = $document["Total Available"];
            array_push($availables,$currAvailable);

        }

        return view('loader_table',['names'=>$names,'availables'=>$availables]);


    }
}
