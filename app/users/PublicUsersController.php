<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class PublicUsersController{

    public function gettest(){ 
    echo "$this";
    //$class = new Users();
    //$class -> test2 ();
    }
}