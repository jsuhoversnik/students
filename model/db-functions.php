<?php
/**
 * Created by PhpStorm.
 * User: Jake
 * Date: 2/13/2019
 * Time: 10:11 AM
 */

require_once('/home2/jsuhover/config.php');

function connect()
{
    try{
        //instantiate a database object
        $dbh = new PDO ( DB_DSN, DB_USERNAME, DB_PASSWORD);
        return $dbh;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

function getStudents()
{

}
