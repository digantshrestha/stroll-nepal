<?php

namespace app\models;

class Place{
    
    protected $id;
	protected $place_name;
	protected $place_lat;
	protected $place_long;
	protected $place_ratings;
	protected $place_details;
	protected $place_todos;
	protected $place_tips;
	protected $added_date;
	protected $modified_date;
	protected $status;
	protected $country_id;
	

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
	public function getPlaceTodos(){
            return $this->place_todos;
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
            return $this->id;
	}
	public function setPlaceName($place_name){
            return $this->place_name;
	}
	public function setPlaceLat($place_lat){
            return $this->place_lat;
	}
	public function setPlaceLong($place_long){
            return $this->place_long;
	}
	public function setPlaceRatings($place_ratings){
            return $this->place_ratings;
	}
	public function setPlaceDetails($place_details){
            return $this->place_details;
	}
	public function setPlaceTodos($place_todos){
            return $this->place_todos;
	}
	public function setPlaceTips($place_tips){
            return $this->place_tips;
	}
	public function setAddedDate($added_date){
            return $this->added_date;
	}
	public function setModifiedDate($modified_date){
            return $this->modified_date;
	}
	public function setStatus($status){
            return $this->status;
	}
	public function setCountryId($country_id){
            return $this->country_id;
	}
	
}