<?php
    require_once('../includes/Client.class.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST' 
        && isset($_POST['id'], $_POST['email']) && isset($_POST['name']) && isset($_POST['city'])  && isset($_POST['telephone'])){
            Client::update_client($_POST['id'], $_POST['email'], $_POST['name'], $_POST['city'], $_POST['telephone']);
        }

?>