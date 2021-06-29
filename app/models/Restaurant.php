<?php

namespace app\models;

class Restaurant{
    
    protected $id;
	protected $restaurant_name;
	protected $restaurant_ratings;
	protected $restaurant_especiality;
	protected $restaurant_reviews;
	protected $added_date;
	protected $modified_date;
	protected $avg_exp;
	protected $place_id;
	protected $status;
	

    public function __construct(){}

    public function getId(){
            return $this->id;
	}
	public function getRestaurantName(){
            return $this->restaurant_name;
	}
	public function getRestaurantRatings(){
            return $this->restaurant_ratings;
	}
	public function getRestaurantEspeciality(){
            return $this->restaurant_especiality;
	}
	public function getRestaurantReviews(){
            return $this->restaurant_reviews;
	}
	public function getAddedDate(){
            return $this->added_date;
	}
	public function getModifiedDate(){
            return $this->modified_date;
	}
	public function getAvgExp(){
            return $this->avg_exp;
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
	public function setRestaurantName($restaurant_name){
            return $this->restaurant_name;
	}
	public function setRestaurantRatings($restaurant_ratings){
            return $this->restaurant_ratings;
	}
	public function setRestaurantEspeciality($restaurant_especiality){
            return $this->restaurant_especiality;
	}
	public function setRestaurantReviews($restaurant_reviews){
            return $this->restaurant_reviews;
	}
	public function setAddedDate($added_date){
            return $this->added_date;
	}
	public function setModifiedDate($modified_date){
            return $this->modified_date;
	}
	public function setAvgExp($avg_exp){
            return $this->avg_exp;
	}
	public function setPlaceId($place_id){
            return $this->place_id;
	}
	public function setStatus($status){
            return $this->status;
	}
	
}