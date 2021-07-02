<?php

namespace app\models;

class Todo{
    
    protected $id;
	protected $todo_activity;
	protected $activity_category;
	protected $price;
	protected $duration;
	protected $activity_info;
	protected $place_id;
	protected $added_date;
	protected $modified_date;
	protected $status;
	

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
            return $this->id;
	}
	public function setTodoActivity($todo_activity){
            return $this->todo_activity;
	}
	public function setActivityCategory($activity_category){
            return $this->activity_category;
	}
	public function setPrice($price){
            return $this->price;
	}
	public function setDuration($duration){
            return $this->duration;
	}
	public function setActivityInfo($activity_info){
            return $this->activity_info;
	}
	public function setPlaceId($place_id){
            return $this->place_id;
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
	
}