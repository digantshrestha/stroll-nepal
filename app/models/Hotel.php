<?php

namespace app\models;

class Hotel{
    
    protected $id;
	protected $hotel_name;
	protected $hotel_ratings;
	protected $hotel_especiality;
	protected $hotel_reviews;
	protected $added_date;
	protected $modified_date;
	protected $per_night_exp;
	protected $place_id;
	protected $status;
	

    public function __construct(){}

    public function getId(){
            return $this->id;
	}
	public function getHotelName(){
            return $this->hotel_name;
	}
	public function getHotelRatings(){
            return $this->hotel_ratings;
	}
	public function getHotelEspeciality(){
            return $this->hotel_especiality;
	}
	public function getHotelReviews(){
            return $this->hotel_reviews;
	}
	public function getAddedDate(){
            return $this->added_date;
	}
	public function getModifiedDate(){
            return $this->modified_date;
	}
	public function getPerNightExp(){
            return $this->per_night_exp;
	}
	public function getPlaceId(){
            return $this->place_id;
	}
	public function getStatus(){
            return $this->status;
	}
	

    public function setId($id){
            return $this->id;
	}
	public function setHotelName($hotel_name){
            return $this->hotel_name;
	}
	public function setHotelRatings($hotel_ratings){
            return $this->hotel_ratings;
	}
	public function setHotelEspeciality($hotel_especiality){
            return $this->hotel_especiality;
	}
	public function setHotelReviews($hotel_reviews){
            return $this->hotel_reviews;
	}
	public function setAddedDate($added_date){
            return $this->added_date;
	}
	public function setModifiedDate($modified_date){
            return $this->modified_date;
	}
	public function setPerNightExp($per_night_exp){
            return $this->per_night_exp;
	}
	public function setPlaceId($place_id){
            return $this->place_id;
	}
	public function setStatus($status){
            return $this->status;
	}
	
}