<?php
  /**
   *
   */
  class Googlemap {

    protected $key = '&key=AIzaSyCWA4QozobmmE7xQIYex-sEoUJvOiRMZu0';
    protected $base = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
    protected $url_peticion;

    public function calcular_lat($address) {
      $this->url_peticion = $this->base.urlencode($address).$this->key;
      $response = file_get_contents($this->url_peticion);
      $response = json_decode($response, true);
      $data['lat'] = $response['results'][0]['geometry']['location']['lat'];
      $data['lng'] = $response['results'][0]['geometry']['location']['lng'];

      return $data;
    }

    public function calcular_zona($zona,$address) {
      $respose = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins='.urlencode($zona).'&destinations='.urlencode($address).'&key=YOUR_API_KEYAIzaSyB9NARTZlCRsc4QeaGA0PciA7S_1_QAyUk');
      $reponse = json_decode($response, true);
      return $response['rows'][0]['elements'][0]['distance']['value'];
    }
  }


 ?>
