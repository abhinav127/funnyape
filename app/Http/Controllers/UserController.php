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
        $path=url('/').'/metadata.json';
        $json = json_decode(file_get_contents($path), true); 
       
    	$data=array();
        $id = $id - 1;
        $data['id']=$json[$id]['id'];
        $data['dna']=$json[$id]['dna'];
    	$data['name']=$json[$id]['name'];
    	$data['description']=$json[$id]['description'];
        $data['image']=url('ape').'/'.$id.'.png';
    	$data['filename']=$json[$id]['filename'];
        $data['external_url']='https://www.funnyapeclub.com/';
    	$data['rarity']=$json[$id]['rarity'];
    	$data['attributes']=$json[$id]['attributes'];
    	return response()->json($data);
    	
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

    public function getimage()
    {
    	header('Content-Type: image/png');

$bg = imagecreatefrompng(url('punk').'/2.png');
$img = imagecreatefrompng(url('punk').'/black-army-cap.png');
$img2 = imagecreatefrompng(url('punk').'/black-yellow-jacket.png');

imagecopymerge($bg, $img, 0, 0, 0, 0, imagesx($bg), imagesy($bg), 75);
imagecopymerge($bg, $img2, 0, 0, 0, 0, imagesx($bg), imagesy($bg), 75);

imagepng($bg, null, 9);
    }
}
