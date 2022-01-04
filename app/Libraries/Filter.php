<?php

namespace App\Libraries;

class Filter
{
    private static $data;
    private static $array_type;

    public static function services(array $services) : object
    {
        self::$data = $services;
        self::$array_type = 'services';
        return new self;
    }

    public function get(array $data)
    {
        $filtered_data = [];
        if(self::$array_type === 'services') {
            for($i = 0; $i < count($data); $i++) {
                for($y = 0; $y < count(self::$data); $y++) {
                    if($data[$i] !== self::$data[$y]->name) continue;
                    array_push($filtered_data, self::$data[$y]);
                }
            }
        }

        return $filtered_data;
    }
}
