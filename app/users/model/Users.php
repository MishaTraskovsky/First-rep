<?php
 
class Users extends Model{
    public function test2() {
       $ar = array(

        '03-13-2012' => 'text1',
        '07-19-2012' => 'text2',

        );
        $this->viewJSON($ar);
        //Model::table("users_person_data")->get()->send()
        }
}