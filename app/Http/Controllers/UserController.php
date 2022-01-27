<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
    	return view('index');
    }

     public function home()
    {
    	return view('home');
    }


    public function funape($id=1)
    {
        $path=url('metadata').'/'.$id.'.json';
        $json = json_decode(file_get_contents($path), true); 
       
    	$data=array();
     //    $id = $id - 1;
     //    $data['id']=$json[$id]['id'];
     //    $data['dna']=$json[$id]['dna'];
    	// $data['name']=$json[$id]['name'];
    	// $data['description']=$json[$id]['description'];
     //    $data['image']=url('ape').'/'.$id.'.png';
    	// $data['filename']=$json[$id]['filename'];
     //    $data['external_url']='https://www.funnyapeclub.com/';
    	// $data['rarity']=$json[$id]['rarity'];
    	// $data['attributes']=$json[$id]['attributes'];
        $json['image']=url('ape').'/'.$id.'.png';
    	return response()->json($json);
    	
    }


      public function token($id=1)
    {
    	$data['token_id']=$id;
    	return view('token',$data);
    }

    public function mytoken()
    {
    	return view('mytoken');
    }

     public function getrare()
    {
        for($i=5760;$i<=10000;$i++)
        {
        $path=url('metadata').'/'.$i.'.json';
        $json = json_decode(file_get_contents($path), true); 
        foreach ($json['attributes'] as $key => $val) {
          if($val['trait_type']=='Hat' && $val['value']=='nbhb')
          {
            echo $json['edition'];
            echo "<br>";
          }
        }
        }
        
    }
}
