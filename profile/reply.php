<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Created by El Amrani Mohamed Reda in 2020 */

//Send Message
include_once("Modale.php");
session_start();
if(!empty($_POST['fname'])&&!empty($_POST['lname'])&&!empty($_POST['email'])&&!empty($_POST['subject'])&&!empty($_POST['message'])){
    if(Modale::checkEmail($_POST['email'])<>0){
        Modale::addMessage($_POST['email'],$_POST['subject'],$_POST['message']);
    }else{
        Modale::addVisitor($_POST['fname'],$_POST['lname'],$_POST['email']);
        Modale::addMessage($_POST['email'],$_POST['subject'],$_POST['message']);
    }
    echo"1";
}else{
    echo"0";    
}
//Connexion Admin
if(isset($_POST['mesadmin'])){
    $_POST['log']=htmlspecialchars(htmlspecialchars($_POST['log'],ENT_QUOTES,'utf-8'));
    if(isset($_POST['log'])&&isset($_POST['pasc'])){
        if(isset($_POST['sou'])){
            if($_POST['sou']!="false"){
                setcookie("logadm",$_POST['log'],time()+(60*60*24*31),"/");
                setcookie("passadm",$_POST['pasc'],time()+(60*60*24*31),"/");
            }
        }
        $r=Modale::authentificationAdmin($_POST['log'],$_POST['pasc']);
        if($r<>0){
            $_SESSION['logadm']=$_POST['log'];
            $_SESSION['passadm']=$_POST['pasc'];
            echo"window.location='index.php'";
        }else{echo"L'email ou mot de pass n'executer pas !";}
    }
}