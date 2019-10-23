<?php
 
class Users extends Model{
    public function viewUC() {
        $bd = Model::table("users_cards")->get()->send();
        $this->viewJSON($bd);
    }
    
    
    public function viewUPD() {
        $bd = Model::table("users_person_data")->get()->send();
        $this->viewJSON($bd);
    }
    
    
    public function addUC(){
        
        if ( empty($_GET["level"]) 
           or empty($_GET["user_type"]) 
           or empty($_GET["image"]) 
           or empty($_GET["nickname"]) 
           or empty($_GET["rating"]) 
           or empty($_GET["description"])){
            
                echo "Укажите все данные.";
        }
        
        else{        
                $GetID = Model::table("users_cards")->add(array("level" => $_GET["level"],
                                               "user_type" => $_GET["user_type"],
                                               "image" => $_GET["image"],
                                               "nickname" => $_GET["nickname"],
                                               "rating" => $_GET["rating"],
                                               "description" => $_GET["description"]))->send();
            
                echo "Пользователь " . $GetID ." успешно создан!";
        }
    }
    
    public function addUPD(){        
        
         if ( empty($_GET["password"]) 
           or empty($_GET["phone"]) 
           or empty($_GET["phone_token"]) 
           or empty($_GET["phone_token_data"]) 
           or empty($_GET["doc_photo"]) 
           or empty($_GET["surname"])
           or empty($_GET["name"])
           or empty($_GET["patronymic"])
           or empty($_GET["date_of_birth"])
           or empty($_GET["gender"])
           or empty($_GET["other_data"])){
            
                echo "Укажите все данные.";
        }   
        
        else {
                $GetID = Model::table("users_person_data")->add(array(
                                                     "id_card" => $_GET["id_card"],
                                                     "password" => $_GET["password"],
                                                     "phone" => $_GET["phone"],
                                                     "phone_token" => $_GET["phone_token"],
                                                     "phone_token_data" => $_GET["phone_token_data"],
                                                     "doc_photo" => $_GET["doc_photo"],
                                                     "surname" => $_GET["surname"],
                                                     "name" => $_GET["name"],
                                                     "patronymic" => $_GET["patronymic"],
                                                     "date_of_birth" => $_GET["date_of_birth"],
                                                     "gender" => $_GET["gender"],
                                                     "other_data" => $_GET["other_data"]))->send();
                                                     
          
                echo "Пользователь " . $GetID ." успешно создан!"; 
        }
    }
    
    public function upUPD(){
            
             if ( empty($_GET["password"]) 
           or empty($_GET["phone"]) 
           or empty($_GET["phone_token"]) 
           or empty($_GET["phone_token_data"]) 
           or empty($_GET["doc_photo"]) 
           or empty($_GET["surname"])
           or empty($_GET["name"])
           or empty($_GET["patronymic"])
           or empty($_GET["date_of_birth"])
           or empty($_GET["gender"])
           or empty($_GET["other_data"])){
            
            echo "Укажите все данные.";
        }
                else{ 
                        $GetID = Model::table("users_person_data")->edit(array("password" => $_GET["password"],
                                                                               "phone" => $_GET["phone"],
                                                                               "phone_token" => $_GET["phone_token"],
                                                                               "phone_token_data" => $_GET["phone_token_data"],
                                                                               "doc_photo" => $_GET["doc_photo"],
                                                                               "surname" => $_GET["surname"],
                                                                               "name" => $_GET["name"],
                                                                               "patronymic" => $_GET["patronymic"],
                                                                               "date_of_birth" => $_GET["date_of_birth"],
                                                                               "gender" => $_GET["gender"],
                                                                               "other_data" => $_GET["other_data"]), array("id" => $_GET["id"]))->send();
        
                        echo "Пользователь " . $GetID ."изменен!";
                    }
    }
    
    public function upUC(){
        
            if ( empty($_GET["level"]) 
           or empty($_GET["user_type"]) 
           or empty($_GET["image"]) 
           or empty($_GET["nickname"]) 
           or empty($_GET["rating"]) 
           or empty($_GET["description"])){
            
                        echo "Укажите все данные.";
            }
            
            else{
            
                        $GetID = Model::table("users_cards")->edit(array("level" => $_GET["level"],
                                                         "user_type" => $_GET["user_type"],
                                                         "image" => $_GET["image"],
                                                         "nickname" => $_GET["nickname"],
                                                         "rating" => $_GET["rating"],
                                                         "description" => $_GET["description"]), array("id" => $_GET["id"]))->send();
                        echo "Пользователь " . $GetID ."изменен!";
            }
    }
    
    public function delUC(){
        Model::table("users_cards")->delete(array("id" => $_GET["id"]))->send();
        echo "Пользователь " . $_GET["id"] . " успешно удален!";
    }
    
    public function delUPD(){
        Model::table("users_person_data")->delete(array("id" => $_GET["id"]))->send();
        echo "Пользователь " . $_GET["id"] . " успешно удален!";
    }
        
    public function viewUCId() {
            $stmt = self::$db->prepare("SELECT * FROM  `users_cards` WHERE id= :id");

            $result_query = $stmt->execute(array(":id" => self::$params_url['id']));

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            $this->viewJSON($rows);
    }
    
    public function insUPD() {
            
             $stmt = self::$db->prepare("INSERT INTO `users_person_data`(`password`, `phone`, `phone_token`, `phone_token_data`, `doc_photo`, `surname`, `name`, `patronymic`, `date_of_birth`, `gender`, `other_data`) VALUES (:field_password, :phone, :phone_token, :phone_token_data, :doc_photo, :surname, :name, :patronymic, :date_of_birth, :gender, :other_data    )");

             $stmt->bindValue(":field_password", self::$params_url["password"], PDO::PARAM_STR);
             $stmt->bindValue(":phone", self::$params_url['phone'], PDO::PARAM_STR);
             $stmt->bindValue(":phone_token", self::$params_url['phone_token'], PDO::PARAM_STR);
             $stmt->bindValue(":phone_token_data", self::$params_url['phone_token_data'], PDO::PARAM_STR);
             $stmt->bindValue(":doc_photo", self::$params_url['doc_photo'], PDO::PARAM_STR);
             $stmt->bindValue(":surname", self::$params_url['surname'], PDO::PARAM_STR);
             $stmt->bindValue(":name", self::$params_url['name'], PDO::PARAM_STR);
             $stmt->bindValue(":patronymic", self::$params_url['patronymic'], PDO::PARAM_STR);
             $stmt->bindValue(":date_of_birth", self::$params_url['date_of_birth'], PDO::PARAM_STR);
             $stmt->bindValue(":gender", self::$params_url['gender'], PDO::PARAM_STR);
             $stmt->bindValue(":other_data", self::$params_url['other_data'], PDO::PARAM_STR);
             $result_query = $stmt->execute();
             $GetID = self::$db -> lastInsertId();
             echo "Пользователь " . $GetID. " успешно создан";
                                                
    }
  
    public function insUC(){
            $stmt = self::$db->prepare("INSERT INTO `users_cards`(`level`, `user_type`, `image`, `nickname`, `rating`, `description`) VALUES (:level, :user_type, :image, :nickname, :rating, :description)");
            
            $stmt->bindValue(":level", self::$params_url["level"], PDO::PARAM_STR);
            $stmt->bindValue(":user_type", self::$params_url["user_type"], PDO::PARAM_STR);
            $stmt->bindValue(":image", self::$params_url["image"], PDO::PARAM_STR);
            $stmt->bindValue(":nickname", self::$params_url["nickname"], PDO::PARAM_STR);
            $stmt->bindValue(":rating", self::$params_url["rating"], PDO::PARAM_STR);
            $stmt->bindValue(":description", self::$params_url["description"], PDO::PARAM_STR);
            $result_query = $stmt->execute();
            
            $GetID = self::$db -> lastInsertId();
            echo "Пользователь " . $GetID . " успешно создан";
    }
    
    
    public function addUPDforUC(){
        
        $stmt = self::$db->prepare("SELECT EXISTS (SELECT id FROM `users_cards` WHERE id=:id_card) AS value");

        $result_query = $stmt->execute(array(":id_card" => self::$params_url['id_card']));    
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $if = $rows[0]["value"];
        
        if ($if){
        
            Model::table("users_person_data")->add(array("id_card" => $_GET["id_card"],
                                                               "password" => $_GET["password"],
                                                               "phone" => $_GET["phone"],
                                                               "phone_token" => $_GET["phone_token"],
                                                               "phone_token_data" => $_GET["phone_token_data"],
                                                               "doc_photo" => $_GET["doc_photo"],
                                                               "surname" => $_GET["surname"],
                                                               "name" => $_GET["name"],
                                                               "patronymic" => $_GET["patronymic"],
                                                               "date_of_birth" => $_GET["date_of_birth"],
                                                               "gender" => $_GET["gender"],
                                                               "other_data" => $_GET["other_data"]))->send();
        }
        else{
            echo "Такой карточки не существует!";
        }
        
    }
    
    public function editUPDfree(){
       if (!empty($_GET["id_card"])){
           $ar = array("id_card" => $_GET["id_card"]);
       }
                if (!empty($_GET["password"])){
                   $ar = array("password" => $_GET["password"]);
            }
                        if (!empty($_GET["phone"])){
                           $ar = array("phone" => $_GET["phone"]);
                    }       
                                if (!empty($_GET["phone_token"])){
                                   $ar = array("phone_token" => $_GET["phone_token"]);
                            }
                                        if (!empty($_GET["phone_token_data"])){
                                           $ar = array("phone_token_data" => $_GET["phone_token_data"]);
                                    }
                                                if (!empty($_GET["doc_photo"])){
                                                   $ar = array("doc_photo" => $_GET["doc_photo"]);
                                            }
                                                        if (!empty($_GET["surname"])){
                                                           $ar = array("surname" => $_GET["surname"]);
                                                    }
                                                                if (!empty($_GET["name"])){
                                                                   $ar = array("name" => $_GET["name"]);
                                                            }
                                                                        if (!empty($_GET["patronymic"])){
                                                                           $ar = array("patronymic" => $_GET["patronymic"]);
                                                                    }
                                                                                if (!empty($_GET["date_of_birth"])){
                                                                                   $ar = array("date_of_birth" => $_GET["date_of_birth"]);
                                                                            }
                                                                                        if (!empty($_GET["gender"])){
                                                                                           $ar = array("gender" => $_GET["gender"]);
                                                                                    }
                                                                                                if (!empty($_GET["other_data"])){
                                                                                                   $ar = array("other_data" => $_GET["other_data"]);
                                                                                            }
                                                                                                        if (!empty($_GET["id"])){
                                                                                                            $ar = array("id" => $_GET["id"]);
                                                                                                        }
                                                                                                        else{
                                                                                                            echo "Введите id!";
                                                                                                        }
        
        Model::table("users_person_data")->edit($ar, array("id" => $_GET["id"]))->send();
        
    }
}
