<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dataaccess
 *
 * @author Dell Vostro
 */

// Created by El Amrani Mohamed Reda in 2020
class Dataaccess {
    //put your code here
    static function connexion(){
        try{
        $bd=new PDO("mysql:host=localhost;dbname=myportfolio;encode=ascii","root","");
        $bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $bd;
        }catch(Exception $ex){
            echo"Connexion Issue: ".$ex->getMessage();
        }
    }
    static function select($req){
        try{
            return self::connexion()->query($req);
        } catch (Exception $ex) {
            echo"Selection Issue: ".$ex->getMessage();
        }
    }
    static function update($req){
        try{
            return self::connexion()->exec($req);
        } catch (Exception $ex) {
            echo"Update Issue: ".$ex->getMessage();
        }
    }
}
