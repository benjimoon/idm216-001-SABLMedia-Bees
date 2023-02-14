<?php

// get all recipes from the database

function get_tacos()
{
    global $db_connection;
    $query = 'SELECT * FROM tacos ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_burritos()
{
    global $db_connection;
    $query = 'SELECT * FROM burritos ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_wraps()
{
    global $db_connection;
    $query = 'SELECT * FROM wraps ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}
function get_hoagies()
{
    global $db_connection;
    $query = 'SELECT * FROM hoagies ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}
function get_quesas()
{
    global $db_connection;
    $query = 'SELECT * FROM quesadillas ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}
function get_bowls()
{
    global $db_connection;
    $query = 'SELECT * FROM bowls ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}
function get_sandwiches()
{
    global $db_connection;
    $query = 'SELECT * FROM sandwiches ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}
function get_drinks()
{
    global $db_connection;
    $query = 'SELECT * FROM drinks ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}
?>