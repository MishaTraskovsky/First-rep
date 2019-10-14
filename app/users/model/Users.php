<?php
 
class Users extends Model{
    public function test2() {
        public $ar = array( 'id1' => '1',
			         'id2' => '2',
			         'id3' => '3',);
        echo json_incode($ar);
        //Model::table("users_person_data")->get()->send()
    } 