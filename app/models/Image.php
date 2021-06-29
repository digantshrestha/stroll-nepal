<?php

namespace app\models;

class Image{
    
    protected $id;
	protected $img_name;
	protected $img_path;
	protected $details;
	protected $user_id;
	protected $added_date;
	protected $modified_date;
	protected $place_id;
	protected $status;
	

    public function __construct(){}

    public function getId(){
            return $this->id;
	}
	public function getImgName(){
            return $this->img_name;
	}
	public function getImgPath(){
            return $this->img_path;
	}
	public function getDetails(){
            return $this->details;
	}
	public function getUserId(){
            return $this->user_id;
	}
	public function getAddedDate(){
            return $this->added_date;
	}
	public function getModifiedDate(){
            return $this->modified_date;
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
	public function setImgName($img_name){
            return $this->img_name;
	}
	public function setImgPath($img_path){
            return $this->img_path;
	}
	public function setDetails($details){
            return $this->details;
	}
	public function setUserId($user_id){
            return $this->user_id;
	}
	public function setAddedDate($added_date){
            return $this->added_date;
	}
	public function setModifiedDate($modified_date){
            return $this->modified_date;
	}
	public function setPlaceId($place_id){
            return $this->place_id;
	}
	public function setStatus($status){
            return $this->status;
	}
	
}