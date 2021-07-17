<?php

namespace app\models;

class User{
    
    private $id;
	private $first_name;
	private $last_name;
	private $email;
	private $username;
	private $password;
	private $address;
	private $description;
	private $profile_img;
	private $cover_img;
	private $added_date;
	private $modified_date;
	private $email_verified;
	private $status;
	

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
            $this->id=$id;
	}
	public function setFirstName($first_name){
            $this->first_name=$first_name;
	}
	public function setLastName($last_name){
            $this->last_name=$last_name;
	}
	public function setEmail($email){
            $this->email=$email;
	}
	public function setUsername($username){
            $this->username=$username;
	}
	public function setPassword($password){
            $this->password=$password;
	}
	public function setAddress($address){
            $this->address=$address;
	}
	public function setDescription($description){
            $this->description=$description;
	}
	public function setProfileImg($profile_img){
            $this->profile_img=$profile_img;
	}
	public function setCoverImg($cover_img){
            $this->cover_img=$cover_img;
	}
	public function setAddedDate($added_date){
            $this->added_date=$added_date;
	}
	public function setModifiedDate($modified_date){
            $this->modified_date=$modified_date;
	}
	public function setEmailVerified($email_verified){
            $this->email_verified=$email_verified;
	}
	public function setStatus($status){
            $this->status=$status;
	}
	
}