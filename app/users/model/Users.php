<?php
 
class Users extends Model{
    public function view_users_cards() {
        $bd = Model::table("users_cards")->get()->send();
        $this->viewJSON($bd);
        }
    
    
    public function view_users_person_data() {
        $bd = Model::table("users_person_data")->get()->send();
        $this->viewJSON($bd);
        }
    
    
    public function add_user_cards(){
        Model::table("users_cards")->add(array("level" => $_GET["level"],
                                               "user_type" => $_GET["user_type"],
                                               "image" => $_GET["image"],
                                               "nickname" => $_GET["nickname"],
                                               "rating" => $_GET["rating"],
                                               "description" => $_GET["description"]))->send();
    }
    
    public function add_users_person_data(){
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
    
        public function update_users_person_data(){
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
    
        public function update_user_cards(){
            Model::table("users_cards")->edit(array("level" => $_GET["level"],
                                                    "user_type" => $_GET["user_type"],
                                                    "image" => $_GET["image"],
                                                    "nickname" => $_GET["nickname"],
                                                    "rating" => $_GET["rating"],
                                                    "description" => $_GET["description"]), array("id" => $_GET["id"]))->send();
        }
    
        public function del_user_cards(){
            Model::table("users_cards")->delete(array("id" => $_GET["id"]))->send();;
        }
    
        public function del_users_person_data(){
            Model::table("users_person_data")->delete(array("id" => $_GET["id"]))->send();;
        }
        
        public function view_users_cards_for_id() {
            $stmt = self::$db->prepare("SELECT * FROM  `users_cards` WHERE id= :id");

            $result_query = $stmt->execute(array(":id" => self::$params_url['id']));

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            $this->viewJSON($rows);
        }
        
        public function view_users_person_data_sql() {
            $stmt = self::$db->prepare("SELECT * FROM  `users_person_data` WHERE 1");

            $result_query = $stmt->execute(array());

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            $this->viewJSON($rows);

        }
        
        public function view_users_cards_sql() {
            $stmt = self::$db->prepare("SELECT * FROM  `users_cards` WHERE 1");

            $result_query = $stmt->execute(array());

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            $this->viewJSON($rows);

        }
    
        public function ins_users_person_data_sql() {
            $stmt = self::$db->prepare("NSERT INTO `users_person_data`(`password`, `phone`, `phone_token`, `phone_token_data`, `doc_photo`, `surname`, `name`, `patronymic`, `date_of_birth`, `gender`, `other_data`) VALUES (":password",":phone",":phone_token",":phone_token_data",":doc_photo",":surname",":name",":patronymic",":date_of_birth",":gender",":other_data")");

            $result_query = $stmt->execute(array(":password" => self::$params_url['password'],
                                                 ":phone" => self::$params_url['phone'],
                                                 ":phone_token" => self::$params_url['phone_token'],
                                                 ":phone_token_data" => self::$params_url['phone_token_data'],
                                                 ":doc_photo" => self::$params_url['doc_photo'],
                                                 ":surname" => self::$params_url['surname'],
                                                 ":name" => self::$params_url['name'],
                                                 ":date_of_birth" => self::$params_url['date_of_birth'],
                                                 ":gender" => self::$params_url['gender'],
                                                 ":other_data" => self::$params_url['other_data'],));

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            $this->viewJSON($rows);

        }

}