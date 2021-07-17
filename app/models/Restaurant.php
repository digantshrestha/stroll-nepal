<?php

namespace app\models;

class Restaurant{
    
    private $id;
	private $restaurant_name;
	private $restaurant_ratings;
	private $restaurant_especiality;
	private $restaurant_reviews;
	private $added_date;
	private $modified_date;
	private $avg_exp;
	private $place_id;
	private $status;
	

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
            $this->id=$id;
	}
	public function setRestaurantName($restaurant_name){
            $this->restaurant_name=$restaurant_name;
	}
	public function setRestaurantRatings($restaurant_ratings){
            $this->restaurant_ratings=$restaurant_ratings;
	}
	public function setRestaurantEspeciality($restaurant_especiality){
            $this->restaurant_especiality=$restaurant_especiality;
	}
	public function setRestaurantReviews($restaurant_reviews){
            $this->restaurant_reviews=$restaurant_reviews;
	}
	public function setAddedDate($added_date){
            $this->added_date=$added_date;
	}
	public function setModifiedDate($modified_date){
            $this->modified_date=$modified_date;
	}
	public function setAvgExp($avg_exp){
            $this->avg_exp=$avg_exp;
	}
	public function setPlaceId($place_id){
            $this->place_id=$place_id;
	}
	public function setStatus($status){
            $this->status=$status;
	}
	
}