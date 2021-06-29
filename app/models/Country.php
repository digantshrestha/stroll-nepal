<?php

namespace app\models;

class Country{
    
    protected $id;
	protected $country_name;
	protected $country_lat;
	protected $country_long;
	protected $country_status;
	

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
            return $this->id;
	}
	public function setCountryName($country_name){
            return $this->country_name;
	}
	public function setCountryLat($country_lat){
            return $this->country_lat;
	}
	public function setCountryLong($country_long){
            return $this->country_long;
	}
	public function setCountryStatus($country_status){
            return $this->country_status;
	}
	
}