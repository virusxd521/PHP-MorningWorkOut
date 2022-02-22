<?php

class City
{
    public $id = null;
    public $name = null;
    public $country_id = null;
    public $district = null;
    public $population = null;


    public static function getCitiesForCountry($country_id){
        // Simple SQL Query 
        $query_one = "SELECT * FROM cities WHERE `country_id` = ?";

        // Performing the select
        $values = [$country_id];
        $cities = DB::select($query_one, $values, 'City');
        return $cities;
    }
}