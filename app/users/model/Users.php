<?php
 
class Users extends Model{
    public function test2() {
        $ar = array( 'id1' => '1',
			         'id2' => '2',
			         'id3' => '3',);
        echo json_incode($ar);
        }
}