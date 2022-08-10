<?php


namespace App\Http\Controllers;


use App\Helper\CustomController;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class TrackingController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function track()
    {
        try {
            $id = $this->postField('id');
            $endpoint = 'https://api.envio.co.id/v1/tracking/'.$id;
            $client = new Client();
            $response = $client->request('GET', $endpoint);
            $status = $response->getStatusCode();
            $content = json_decode($response->getBody());
            return $this->jsonResponse('success', $status, $content);
        }catch (\Exception $e) {
            return $this->jsonResponse($e->getMessage(), 500);
        } catch (GuzzleException $e) {
            return $this->jsonResponse($e->getMessage(), 500);
        }
    }
}
