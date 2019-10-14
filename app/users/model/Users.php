<?php
 
class Users extends Model{
    public function test2() {
     require_once 'include/bd.php';
    }   

    public function get_t(){
        $sql = "SELECT * FROM `users_cards`";
        $result = mysqli_query($l, $sql);
        echo '<pre>';
        var_dump($result)
        echo '</pre>';
    }
} 