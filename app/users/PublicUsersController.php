<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class PublicUsersController{

    public function addUC(){ 
        $class = new Users();
        $class -> addUC();     
    //level=3&user_type=user&image=1.jpg&nickname=nik&rating=2&description=text1
    }
    
    public function addUPD(){ 
        $class = new Users();
        $class -> addUPD(); //password=12345&phone=893365563893&phone_token=54321&phone_token_data=543&doc_photo=photo&surname=surname&name=name&patronymic=patronymic&date_of_birth=000000&gender=male&other_data=texttext
    
    }
    
    public function apUPD(){ 
        $class = new Users();
        $class -> upUPD();         //password=54321&phone=13&phone_token=54321&phone_token_data=543&doc_photo=photo&surname=surname&name=name&patronymic=patronymic&date_of_birth=000000&gender=male&other_data=texttext&id=2
    }
    
    public function upUC(){ 
        $class = new Users();
        $class -> upUC();         
    //level=3&user_type=user&image=0&nickname=nik&rating=2&description=text1$id=1        
    }
    
    
    public function viewUC(){ 
        $class = new Users();
        $class -> viewUC();     
    }
    
    public function viewUPD(){ 
        $class = new Users();
        $class -> viewUPD();     
    }
    
    
    public function viewUCId(){ 
        $class = new Users();
        $class -> viewUCSel();     
    } 
    
    
    public function insUPD(){ 
        $class = new Users();
        $class -> insUPD();
    }
    
    public function insUC(){
        $class = new Users();
        $class -> insUC();
        
    }
    
    public function delUPD(){
        $class = new Users();
        $class -> delUPD();
        
    }
    
    public function delUC(){
        $class = new Users();
        $class -> delUC();
        
    }
    
    public function addUPDforUC(){
        $class = new Users();
        $class -> addUPDforUC();
        
    }
    
    public function editUPDfree({
        $class = new Users();
        $class -> editUPDfree();
    })
}
    