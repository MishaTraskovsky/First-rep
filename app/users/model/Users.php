<?php
 
class Users extends Model{
    public function test2() {
        $bd = Model::table("users_person_data")->get()->send();
        $this->viewJSON($bd);
        }
}