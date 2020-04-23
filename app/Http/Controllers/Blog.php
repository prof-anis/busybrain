<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Blog extends Controller
{
    //
    //
    public $dois = [

    	"10.1038/s41928-020-0397-9",
    	"10.1007/s11276-008-0131-4",
    	"10.1038/s41928-020-0399-7",
    	"10.1038/s41928-020-0391-2"

    ];

    public $articles = [];

    public function index()
    {
    	$client = new Client;

    	foreach($this->dois as $each)
    	{
    		 

    	$url = "http://api.springernature.com/metadata/json/doi/".$each."?api_key=ae9e2675809b871660ad4f7fe120e44d";
 

 

    	$res = $client->get($url);
    		
    	//$collection[] =  $res->getBody();

     	$collection = $res->getBody();

     	$collection = json_decode($collection,true);
     	$collection = $collection['records'][0];
     	$abstract = $collection['abstract']; 
     	$content_type = $collection['contentType'];
     	$url=$collection['url'][0]['value'];
     	$title = $collection['title'];
     	$date = $collection['publicationDate'];
     	$creators = $this->getCreators($collection['creators']);

     	 
    	$this->add($abstract,$content_type,$url,$title,$creators,$date);

    	}

    	
 		$articles = $this->articles;

    	return view("index",compact('articles'));
    }


    protected function add($abstract,$contentType,$url,$title,$creators,$date)
    {
    	$this->articles[] = ["abstract"=>$abstract,"type"=>$contentType,"url"=>$url,"title"=>$title,"creators"=>$creators,"date"=>$date];
    }

    protected function getCreators($creators)
    {
    	$all = '';
    	foreach ($creators as $key => $creator) {
    		
    		$all .= $creator['creator']." & ";
    	}

    	return $all;
    }
}
