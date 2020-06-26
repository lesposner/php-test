<?php
namespace App\Helpers;

use GuzzleHttp\Client;

class Api
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function allCharacters($pagenum)
    {
        return $this->endpointRequest('character/?page='.$pagenum);
    }

    public function character($id)
    {
        return $this->endpointRequest('character/'.$id);
    }

    public function allLocations($pagenum)
    {
        return $this->endpointRequest('location/?page='.$pagenum);
    }

    public function location($id)
    {
        return $this->endpointRequest('location/'.$id);
    }

    public function allEpisodes($pagenum)
    {
        return $this->endpointRequest('episode/?page='.$pagenum);
    }

    public function episode($id)
    {
        return $this->endpointRequest('episode/'.$id);
    }

    public function search($querystring)
    {
        return $this->endpointRequest($querystring);
    }

    public function endpointRequest($url)
    {
        try {
            $response = $this->client->request('GET', $url);
        } catch (\Exception $e) {
            return [];
        }

        return $this->response_handler($response->getBody()->getContents());
    }

    public function response_handler($response)
    {
        if ($response) {
            return json_decode($response);
        }

        return [];
    }
}