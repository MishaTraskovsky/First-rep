<?php
 
class Users extends Model{
    public function test2() {
        $bd = Model::table("users_person_data")->get()->send();
        $this->viewJSON($bd);
        };
    public function add_user_cards {
        Model::table("users_cards")->add(array("level" => "$_GET[level]", "user_type" => "$_GET[user_type]", "image" => "$_GET[image]", "nickname" => "$_GET[nickname]", "rating" => "$_GET[rating]", "description" => "$_GET[description]"))->send();
    }

}