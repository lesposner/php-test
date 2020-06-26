<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Api;

class ApiController extends Controller
{
    protected $api;

    public function __construct(Api $api)
    {
        $this->api = $api;

    }

    public function index()
    {
        //
    }

    public function allCharacters($pagenum)
    {
//        dd($pagenum);
//        echo "pagenum: ", $pagenum, '<br />';
        $characters = [];
        $response = $this->api->allCharacters($pagenum);
        $characters = array_merge($characters, $response->results);

        return view('allcharacters', ['characters' => $characters, 'info' => $response->info]);
    }

    public function showCharacter($id)
    {
        $response = $this->api->character($id);
        $character = $response;

        return view('character', compact('character'));
    }


    public function allLocations($pagenum)
    {
        $locations = [];
        $response = $this->api->allLocations($pagenum);
        $locations = array_merge($locations, $response->results);
        return view('alllocations', ['locations' => $locations, 'info' => $response->info]);
    }

    public function showLocation($id)
    {
        $response = $this->api->location($id);
        $location = $response;

        return view('location', compact('location'));
    }

    public function allEpisodes($pagenum)
    {
        $episodes = [];
        $response = $this->api->allEpisodes($pagenum);
        $episodes = array_merge($episodes, $response->results);
        return view('allepisodes', ['episodes' => $episodes, 'info' => $response->info]);
    }

    public function showEpisode($id)
    {
        $response = $this->api->episode($id);
        $episode = $response;

        return view('episode', compact('episode'));
    }

    public function search(Request $request)
    {
//        dd(request()->all());

        $querystring = "";
        $characters = [];
        $locations = [];
        $episodes = [];

        // build a query string from the request
        $requeststring = http_build_query(request()->all());

//        dd($requeststring);

        // remove the CSRF token and first '&' from the string
        $requeststring = substr($requeststring, strpos($requeststring, '&') + 1);

//        dd($requeststring);

        if (!empty(request()->formName)) {
            // get the formname string from the end of the request string
            $formnamestring = substr($requeststring, strrpos($requeststring, '&'));

//        dd($formnamestring);

            // chop the formname string off the end of the request string
            $requeststring = substr($requeststring, 0, -strlen($formnamestring));
        }

//        dd($requeststring);

        if(request()->formName == 'character') {
            $querystring .= request()->formName.'/';
            $querystring .= '?'.$requeststring;
        }

        if(request()->formName == 'location') {
            $querystring .= request()->formName.'/';
            $querystring .= '?'.$requeststring;
        }

        if(request()->formName == 'episode') {
            $querystring .= request()->formName.'/';
            $querystring .= '?'.$requeststring;
        }


//        dd($querystring);
        $response = $this->api->search($querystring);
//        dd($response);

        if(request()->formName == 'character') {
            if(isset($response->results)) {
                $characters = array_merge($characters, $response->results);
                return view('allcharacters', ['characters' => $characters, 'info' => $response->info]);
            }
//            dd($characters);
            return view('allcharacters', ['characters' => $characters]);
        }

        if(request()->formName == 'location') {
            if(isset($response->results)) {
                $locations = array_merge($locations, $response->results);
                return view('alllocations', ['locations' => $locations, 'info' => $response->info]);
            }
            return view('alllocations', ['locations' => $locations]);
        }

        if(request()->formName == 'episode') {
            if(isset($response->results)) {
                $episodes = array_merge($episodes, $response->results);
                return view('allepisodes', ['episodes' => $episodes, 'info' => $response->info]);
            }
            return view('allepisodes', ['episodes' => $episodes]);
        }
    }

}
