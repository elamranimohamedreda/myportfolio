<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Modale
 *
 * @author Dell Vostro
 */

// Created by El Amrani Mohamed Reda in 2020
include"Dataaccess.php";
class Modale {
    //put your code here
    public static function checkEmail($email){
        return Dataaccess::select("select*from visitors where email='$email'")->rowCount();
    }
    public static function addMessage($email,$subject,$message){
        Dataaccess::update("insert into message(email,subject,message) values('$email','$subject','$message')");
    }
    public static function addVisitor($fname,$lname,$email){
        Dataaccess::update("insert into visitors(fname,lname,email) values('$fname','$lname','$email')");
    }
    public static function authentificationAdmin($login,$password){
        return Dataaccess::select("select*from admin where login='$login' and password='$password'")->rowCount();
    }
}
