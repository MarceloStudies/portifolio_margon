<?php
namespace model\OpenWeather;

class   OpenWeather
{
    private $apiKey;
    private $city;
    private $country;
    private $url;
    private $data;

    public function __construct($apiKey, $city,$state, $country)
    {
        $this->apiKey = $apiKey;
        $this->city = $city;
        $this->country = $country;
        $this->state = $state;
        $this->url = "http://api.openweathermap.org/data/2.5/weather?q=$city,'BR-'.$state,$country&appid=$apiKey&lang=pt_br&units=metric";
    }

    public function getData()
    {
        $this->data = json_decode(file_get_contents($this->url), true);
        return $this->data;
    }
}
