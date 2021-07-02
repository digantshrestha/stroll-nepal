<?php

namespace app\models;

class TodoactivitiesCategory{
    
    protected $id;
	protected $category;
	protected $added_date;
	protected $modified_date;
	protected $status;
	

    public function __construct(){}

    public function getId(){
            return $this->id;
	}
	public function getCategory(){
            return $this->category;
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
	public function setCategory($category){
            return $this->category;
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