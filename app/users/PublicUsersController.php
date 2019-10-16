<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class PublicUsersController{

    public function AddUserCards(){ 
        $class = new Users();
        $class -> AddUserCards(); 
        $class -> ViewUsersCards();
    
    //level=3&user_type=user&image=0&nickname=nik&rating=2&description=text1
    }
    
    public function AddUsersPersonData(){ 
        $class = new Users();
        $class -> AddUsersPersonData(); 
        $class -> ViewUsersPersonData();
    //password=12345&phone=893365563893&phone_token=54321&phone_token_data=543&doc_photo=photo&surname=surname&name=name&patronymic=patronymic&date_of_birth=000000&gender=male&other_data=texttext
    
    }
    
    public function UpdateUsersPersonData(){ 
        $class = new Users();
        $class -> UpdateUsersPersonData(); 
        $class -> ViewUsersPersonData();
        //password=54321&phone=13&phone_token=54321&phone_token_data=543&doc_photo=photo&surname=surname&name=name&patronymic=patronymic&date_of_birth=000000&gender=male&other_data=texttext&id=2
    }
    
    public function UpdateUserCards(){ 
        $class = new Users();
        $class -> UpdateUserCards(); 
        $class -> ViewUsersCards();
        
    //level=3&user_type=user&image=0&nickname=nik&rating=2&description=text1$id=1        
    }
    
    public function DelUserCards(){ 
        $class = new Users();
        $class -> DelUserCards(); 
        $class -> ViewUsersCards();
    }
    
    public function DelUsersPersonData(){ 
        $class = new Users();
        $class -> DelUsersPersonData(); 
        $class -> ViewUsersPersonData();
    }
    
    public function ViewBd(){ 
        $class = new Users();
        $class -> ViewUsersCards();     
    }
    
    public function ViewUsersPersonDataSql(){ 
        $class = new Users();
        $class -> ViewUsersPersonDataSql();     
    }
    
    public function ViewUsersCardsSql(){ 
        $class = new Users();
        $class -> ViewUsersCardsSql();     
    }
    
    public function InsUsersPersonDataSql(){ 
        $class = new Users();
        $class -> InsUsersPersonDataSql();
    }
    
    public function InsUsersCardsSql(){
        $class = new Users();
        $class -> InsUsersCardsSql();
        
    }
}
    