<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class PublicUsersController{

    public function gettest(){ 
    $class = new Users();
    $class -> add_users_person_data(); 
    $class -> view_users_person_data();
    }
}