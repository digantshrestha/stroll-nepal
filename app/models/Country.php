<?php

namespace app\models;

class Country{
    
    private $id;
	private $country_name;
	private $country_lat;
	private $country_long;
	private $country_status;
	

    public function __construct(){}

    public function getId(){
            return $this->id;
	}
	public function getCountryName(){
            return $this->country_name;
	}
	public function getCountryLat(){
            return $this->country_lat;
	}
	public function getCountryLong(){
            return $this->country_long;
	}
	public function getCountryStatus(){
            return $this->country_status;
	}
	

    public function setId($id){
            $this->id=$id;
	}
	public function setCountryName($country_name){
            $this->country_name=$country_name;
	}
	public function setCountryLat($country_lat){
            $this->country_lat=$country_lat;
	}
	public function setCountryLong($country_long){
            $this->country_long=$country_long;
	}
	public function setCountryStatus($country_status){
            $this->country_status=$country_status;
	}
	
}