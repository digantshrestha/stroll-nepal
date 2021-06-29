<?php

namespace app\models;

class User{
    
    protected $id;
	protected $first_name;
	protected $last_name;
	protected $email;
	protected $username;
	protected $password;
	protected $address;
	protected $description;
	protected $profile_img;
	protected $cover_img;
	protected $added_date;
	protected $modified_date;
	protected $email_verified;
	protected $status;
	

    public function __construct(){}

    public function getId(){
            return $this->id;
	}
	public function getFirstName(){
            return $this->first_name;
	}
	public function getLastName(){
            return $this->last_name;
	}
	public function getEmail(){
            return $this->email;
	}
	public function getUsername(){
            return $this->username;
	}
	public function getPassword(){
            return $this->password;
	}
	public function getAddress(){
            return $this->address;
	}
	public function getDescription(){
            return $this->description;
	}
	public function getProfileImg(){
            return $this->profile_img;
	}
	public function getCoverImg(){
            return $this->cover_img;
	}
	public function getAddedDate(){
            return $this->added_date;
	}
	public function getModifiedDate(){
            return $this->modified_date;
	}
	public function getEmailVerified(){
            return $this->email_verified;
	}
	public function getStatus(){
            return $this->status;
	}
	

    public function setId($id){
            return $this->id;
	}
	public function setFirstName($first_name){
            return $this->first_name;
	}
	public function setLastName($last_name){
            return $this->last_name;
	}
	public function setEmail($email){
            return $this->email;
	}
	public function setUsername($username){
            return $this->username;
	}
	public function setPassword($password){
            return $this->password;
	}
	public function setAddress($address){
            return $this->address;
	}
	public function setDescription($description){
            return $this->description;
	}
	public function setProfileImg($profile_img){
            return $this->profile_img;
	}
	public function setCoverImg($cover_img){
            return $this->cover_img;
	}
	public function setAddedDate($added_date){
            return $this->added_date;
	}
	public function setModifiedDate($modified_date){
            return $this->modified_date;
	}
	public function setEmailVerified($email_verified){
            return $this->email_verified;
	}
	public function setStatus($status){
            return $this->status;
	}
	
}