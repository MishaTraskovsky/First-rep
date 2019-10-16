<?php
 
class Users extends Model{
    public function ViewUsersCards() {
        $bd = Model::table("users_cards")->get()->send();
        $this->viewJSON($bd);
        }
    
    
    public function ViewUsersPersonData() {
        $bd = Model::table("users_person_data")->get()->send();
        $this->viewJSON($bd);
        }
    
    
    public function AddUserCards(){
        Model::table("users_cards")->add(array("level" => $_GET["level"],
                                               "user_type" => $_GET["user_type"],
                                               "image" => $_GET["image"],
                                               "nickname" => $_GET["nickname"],
                                               "rating" => $_GET["rating"],
                                               "description" => $_GET["description"]))->send();
    }
    
    public function AddUsersPersonData(){
        Model::table("users_person_data")->add(array("password" => $_GET["password"],
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
    
        public function UpdateUsersPersonData(){
            Model::table("users_person_data")->edit(array(  "password" => $_GET["password"],
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
        }
    
        public function UpdateUserCards(){
            Model::table("users_cards")->edit(array("level" => $_GET["level"],
                                                    "user_type" => $_GET["user_type"],
                                                    "image" => $_GET["image"],
                                                    "nickname" => $_GET["nickname"],
                                                    "rating" => $_GET["rating"],
                                                    "description" => $_GET["description"]), array("id" => $_GET["id"]))->send();
        }
    
        public function DelUserCards(){
            Model::table("users_cards")->delete(array("id" => $_GET["id"]))->send();;
        }
    
        public function DelUsersPersonData(){
            Model::table("users_person_data")->delete(array("id" => $_GET["id"]))->send();;
        }
        
        public function ViewUsersCardsForId() {
            $stmt = self::$db->prepare("SELECT * FROM  `users_cards` WHERE id= :id");

            $result_query = $stmt->execute(array(":id" => self::$params_url['id']));

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            $this->viewJSON($rows);
        }
        
        public function ViewUsersPersonDataSql() {
            $stmt = self::$db->prepare("SELECT * FROM  `users_person_data` WHERE 1");

            $result_query = $stmt->execute(array());

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            $this->viewJSON($rows);

        }
        
        public function ViewUsersCardsSql() {
            $stmt = self::$db->prepare("SELECT * FROM  `users_cards` WHERE 1");

            $result_query = $stmt->execute(array());

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            $this->viewJSON($rows);

        }
    
         public function InsUsersPersonDataSql() {
            
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
                                                  
         }
    
        public function InsUsersCardsSql(){
            $stmt = self::$db->prepare("INSERT INTO `users_cards`(`level`, `user_type`, `image`, `nickname`, `rating`, `description`) VALUES (:level, :user_type, :image, :nickname, :rating, :description)");
            
            $stmt->bindValue(":level", self::$params_url["level"], PDO::PARAM_STR);
            $stmt->bindValue(":user_type", self::$params_url["user_type"], PDO::PARAM_STR);
            $stmt->bindValue(":image", self::$params_url["image"], PDO::PARAM_STR);
            $stmt->bindValue(":nickname", self::$params_url["nickname"], PDO::PARAM_STR);
            $stmt->bindValue(":rating", self::$params_url["rating"], PDO::PARAM_STR);
            $stmt->bindValue(":description", self::$params_url["description"], PDO::PARAM_STR);
            $result_query = $stmt->execute();
        }
    
        public function DelUsersPersonDataSql() {
            
            $stmt = self::$db->prepare("DELETE FROM `users_person_data` WHERE id=:id");
            $stmt = bindValue(":id", self::$params_url["id"]);
            $result_query = $stmt->execute();
        }
}