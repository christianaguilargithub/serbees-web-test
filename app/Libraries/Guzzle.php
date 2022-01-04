<?php

namespace App\Libraries;

use GuzzleHttp\Client;

class Guzzle
{
    public static function get(string $url, array $data = [], $debug = false) : array
    {
        if(!empty($data)) $data = static::data($data);

        return static::send('get', $url, $data, $debug);
    }

    public static function post(string $url, array $data = [], $debug = false) : array
    {
        if(!empty($data)) $data = static::data($data);

        return static::send('post', $url, $data, $debug);
    }

    private static function data($param) : array
    {
        $data = [];
        if(isset($guzzle['json'])) {
            $data['json'] = $param['json'];
        }

        if (isset($guzzle['query'])) {
            $data['query'] = $param['query'];
        }

        if (isset($guzzle['headers'])) {
            $data['headers'] = $param['headers'];
        }

        if (isset($guzzle['multipart'])) {
            $data['multipart'] = $param['multipart'];
        }

        return $data;
    }

    private static function send($method, $url, $data, $debug) : array
    {
        try {
            $client  = new Client(['verify' => false]);
            $result  = json_decode($client->request($method, $url, $data)->getBody());
            $status  = 200;
        } catch(\GuzzleHttp\Exception\ClientException $exception) {
            $result  = null;
            $status  = $exception->getCode();
        } catch (\GuzzleHttp\Exception\ConnectException $exception) {
            $result  = null;
            $status  = $exception->getCode();
            $message = $debug ? $exception->getMessage() : "Cannot connect to server";
            $success = false;
        } catch(\GuzzleHttp\Exception\ServerException $exception) {
            $result  = null;
            $status  = $exception->getCode();
            $message = $debug ? $exception->getMessage() : "Internal server error";
            $success = false;
        }

        if($result->success) {
            return [
                'status'  => $status,
                'data'  => $result->data
            ];
        }

        return [
            'status'  => $status,
            'message' => $message,
            'data' => [],
        ];
    }
}
