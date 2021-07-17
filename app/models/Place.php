<?php

namespace app\models;

class Place{
    
    private $id;
	private $place_name;
	private $place_lat;
	private $place_long;
	private $place_ratings;
	private $place_details;
	private $place_tips;
	private $added_date;
	private $modified_date;
	private $status;
	private $country_id;
	

    public function __construct(){}

    public function getId(){
            return $this->id;
	}
	public function getPlaceName(){
            return $this->place_name;
	}
	public function getPlaceLat(){
            return $this->place_lat;
	}
	public function getPlaceLong(){
            return $this->place_long;
	}
	public function getPlaceRatings(){
            return $this->place_ratings;
	}
	public function getPlaceDetails(){
            return $this->place_details;
	}
	public function getPlaceTips(){
            return $this->place_tips;
	}
	public function getAddedDate(){
            return $this->added_date;
	}
	public function getModifiedDate(){
            return $this->modified_date;
	}
	public function getStatus(){
            return $this->status;
	}
	public function getCountryId(){
            return $this->country_id;
	}
	

    public function setId($id){
            $this->id=$id;
	}
	public function setPlaceName($place_name){
            $this->place_name=$place_name;
	}
	public function setPlaceLat($place_lat){
            $this->place_lat=$place_lat;
	}
	public function setPlaceLong($place_long){
            $this->place_long=$place_long;
	}
	public function setPlaceRatings($place_ratings){
            $this->place_ratings=$place_ratings;
	}
	public function setPlaceDetails($place_details){
            $this->place_details=$place_details;
	}
	public function setPlaceTips($place_tips){
            $this->place_tips=$place_tips;
	}
	public function setAddedDate($added_date){
            $this->added_date=$added_date;
	}
	public function setModifiedDate($modified_date){
            $this->modified_date=$modified_date;
	}
	public function setStatus($status){
            $this->status=$status;
	}
	public function setCountryId($country_id){
            $this->country_id=$country_id;
	}
	
}