<?php

namespace app\models;

class TodoactivitiesCategory{
    
    private $id;
	private $category;
	private $added_date;
	private $modified_date;
	private $status;
	

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
            $this->id=$id;
	}
	public function setCategory($category){
            $this->category=$category;
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