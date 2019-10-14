<?php
$l = mysqli_connect('localhost','m_login','m_QWsr67jn','m_db');

if(mysqli_connect_errno()){
    echo'ошибка в подключении к бд ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}