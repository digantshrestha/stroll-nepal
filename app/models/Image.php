<?php

namespace app\models;

class Image{
    
    private $id;
	private $img_name;
	private $img_path;
	private $details;
	private $user_id;
	private $added_date;
	private $modified_date;
	private $place_id;
	private $status;
	

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
            $this->id=$id;
	}
	public function setImgName($img_name){
            $this->img_name=$img_name;
	}
	public function setImgPath($img_path){
            $this->img_path=$img_path;
	}
	public function setDetails($details){
            $this->details=$details;
	}
	public function setUserId($user_id){
            $this->user_id=$user_id;
	}
	public function setAddedDate($added_date){
            $this->added_date=$added_date;
	}
	public function setModifiedDate($modified_date){
            $this->modified_date=$modified_date;
	}
	public function setPlaceId($place_id){
            $this->place_id=$place_id;
	}
	public function setStatus($status){
            $this->status=$status;
	}
	
}