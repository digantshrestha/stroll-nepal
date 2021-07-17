<?php

namespace app\models;

class Todo{
    
    private $id;
	private $todo_activity;
	private $activity_category;
	private $price;
	private $duration;
	private $activity_info;
	private $place_id;
	private $added_date;
	private $modified_date;
	private $status;
	

    public function __construct(){}

    public function getId(){
            return $this->id;
	}
	public function getTodoActivity(){
            return $this->todo_activity;
	}
	public function getActivityCategory(){
            return $this->activity_category;
	}
	public function getPrice(){
            return $this->price;
	}
	public function getDuration(){
            return $this->duration;
	}
	public function getActivityInfo(){
            return $this->activity_info;
	}
	public function getPlaceId(){
            return $this->place_id;
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
	

    public function setId($id){
            $this->id=$id;
	}
	public function setTodoActivity($todo_activity){
            $this->todo_activity=$todo_activity;
	}
	public function setActivityCategory($activity_category){
            $this->activity_category=$activity_category;
	}
	public function setPrice($price){
            $this->price=$price;
	}
	public function setDuration($duration){
            $this->duration=$duration;
	}
	public function setActivityInfo($activity_info){
            $this->activity_info=$activity_info;
	}
	public function setPlaceId($place_id){
            $this->place_id=$place_id;
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
	
}