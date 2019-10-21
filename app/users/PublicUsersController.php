<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class PublicUsersController{

    public function AddUC(){ 
        $class = new Users();
        $class -> AddUC();     
    //level=3&user_type=user&image=0&nickname=nik&rating=2&description=text1
    }
    
    public function AddUPD(){ 
        $class = new Users();
        $class -> AddUPD(); //password=12345&phone=893365563893&phone_token=54321&phone_token_data=543&doc_photo=photo&surname=surname&name=name&patronymic=patronymic&date_of_birth=000000&gender=male&other_data=texttext
    
    }
    
    public function UpUPD(){ 
        $class = new Users();
        $class -> UpUPD();         //password=54321&phone=13&phone_token=54321&phone_token_data=543&doc_photo=photo&surname=surname&name=name&patronymic=patronymic&date_of_birth=000000&gender=male&other_data=texttext&id=2
    }
    
    public function UpUC(){ 
        $class = new Users();
        $class -> UpUC();         
    //level=3&user_type=user&image=0&nickname=nik&rating=2&description=text1$id=1        
    }
    
    public function DelUC(){ 
        $class = new Users();
        $class -> DelUC(); 
    }
    
    public function DelUPD(){ 
        $class = new Users();
        $class -> DelUPD(); 
    }
    
    public function ViewUC(){ 
        $class = new Users();
        $class -> ViewUC();     
    }
    
    public function ViewUPD(){ 
        $class = new Users();
        $class -> ViewUPD();     
    }
    
    public function ViewUCSel(){ 
        $class = new Users();
        $class -> ViewUCSel();     
    } 
    
    public function ViewUCId(){ 
        $class = new Users();
        $class -> ViewUCId();     
    } 
    
    public function ViewUPDSel(){ 
        $class = new Users();
        $class -> ViewUPDSel();     
    }
    
    public function InsUPD(){ 
        $class = new Users();
        $class -> InsUPD();
    }
    
    public function InsUC(){
        $class = new Users();
        $class -> InsUC();
        
    }
    
    public function DelUPD(){
        $class = new Users();
        $class -> DelUPD();
        
    }
    
    public function DelUC(){
        $class = new Users();
        $class -> DelUC();
        
    }
}
    