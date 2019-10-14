<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class PublicUsersController{

    public function add_user_cards(){ 
    $class = new Users();
    $class -> add_user_cards(); 
    $class -> view_users_cards();
    
    //level=3&user_type=user&image=0&nickname=nik&rating=2&description=text1
    }
    
    public function add_users_person_data(){ 
    $class = new Users();
    $class -> add_users_person_data(); 
    $class -> view_users_person_data();
    //password=12345&phone=893365563893&phone_token=54321&phone_token_data=543&doc_photo=photo&surname=surname&name=name&patronymic=patronymic&date_of_birth=000000&gender=male&other_data=texttext
    
    }
    
    public function update_users_person_data(){ 
    $class = new Users();
    $class -> update_users_person_data(); 
    $class -> view_users_person_data();
        //password=54321&phone=13&phone_token=54321&phone_token_data=543&doc_photo=photo&surname=surname&name=name&patronymic=patronymic&date_of_birth=000000&gender=male&other_data=texttext&id=2
    }
    
    public function update_user_cards(){ 
    $class = new Users();
    $class -> update_user_cards(); 
    $class -> view_users_cards();
        
    //level=3&user_type=user&image=0&nickname=nik&rating=2&description=text1$id=1        
    }
    
    public function del_user_cards(){ 
    $class = new Users();
    $class -> del_user_cards(); 
    $class -> view_users_cards();
}
    
    public function del_users_person_data(){ 
    $class = new Users();
    $class -> del_users_person_data(); 
    $class -> view_users_person_data();
}
    
    