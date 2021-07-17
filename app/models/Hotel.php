<?php

namespace app\models;

class Hotel{
    
    private $id;
	private $hotel_name;
	private $hotel_ratings;
	private $hotel_especiality;
	private $hotel_reviews;
	private $added_date;
	private $modified_date;
	private $per_night_exp;
	private $place_id;
	private $status;
	

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
            $this->id=$id;
	}
	public function setHotelName($hotel_name){
            $this->hotel_name=$hotel_name;
	}
	public function setHotelRatings($hotel_ratings){
            $this->hotel_ratings=$hotel_ratings;
	}
	public function setHotelEspeciality($hotel_especiality){
            $this->hotel_especiality=$hotel_especiality;
	}
	public function setHotelReviews($hotel_reviews){
            $this->hotel_reviews=$hotel_reviews;
	}
	public function setAddedDate($added_date){
            $this->added_date=$added_date;
	}
	public function setModifiedDate($modified_date){
            $this->modified_date=$modified_date;
	}
	public function setPerNightExp($per_night_exp){
            $this->per_night_exp=$per_night_exp;
	}
	public function setPlaceId($place_id){
            $this->place_id=$place_id;
	}
	public function setStatus($status){
            $this->status=$status;
	}
	
}