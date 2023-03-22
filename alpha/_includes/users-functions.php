<?php

// get all users from the database

function get_users()
{
    global $db_connection;
    $query = 'SELECT * FROM users';
    $result = mysqli_query($db_connection, $query);
    return $result;
}


/**
 * Insert a user into the database
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 * @param string $phone
 * @return object - mysqli result
 */

function add_user ($username, $password)
{
    global $db_connection;

    $query = 'INSERT INTO users';
    $query .= ' (username, phone, pass)';
    $query .= " VALUES ('{$username}', '{$password}')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}


/**
 * Get user by id
 * @param integer $id
 * @return Array or false
 */
function get_user_by_id($id)
{
    global $db_connection;
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        return false;
    }
}

/**
 * Edit existing user
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @param string $id_value - user ID
 * @return object - mysqli_result
 */


// function get_user_by_username($username, $password)
// {
//     global $db_connection;
//     $query = "SELECT id FROM users WHERE pass = '$password' AND username = '$username'";
//     $result = mysqli_query($db_connection, $query);

//     if ($result->num_rows > 0) {
//         echo "Returning Customer";

//         while($row = $result->fetch_assoc()) {
//             echo "<br>" . "id: " . $row["id"];
//           }

//         // redirect_to('/main.php');
//     } 
//     else {
//         $query = "INSERT INTO users (username, pass) VALUES ('$username', '$password')";
//         $result2 = mysqli_query($db_connection, $query);

//         if ($result2) {
//             echo "New Customer";
//             // redirect_to('/main.php');
//         } 
//         else {
//             $error_message = 'User was not created';
//             redirect_to('/admin/recipes?error=' . $error_message);
//         }
//     }
// }

function get_user_by_username($username, $password)
{
    global $db_connection;
    $query = "SELECT id FROM users WHERE pass = '$password' AND username = '$username'";
    $result = mysqli_query($db_connection, $query);

    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user; 

    } 
    else {
        $query = "INSERT INTO users (username, pass, isGuest) VALUES ('$username', '$password', 0)";
        $result2 = mysqli_query($db_connection, $query);

        // var_dump($query);
        // var_dump($result);
        // die;

        if ($result2) {
            $recentId = $db_connection->insert_id;
            $newUser = get_user_by_id($recentId);
            add_user_to_session($newUser);
            return $newUser;
        } 
        else {
            return false;
        }
    }
}
//ADDED FOR LOGIN
function create_guest_user(){
    global $db_connection;
    $query = 'INSERT INTO users';
        $query .= ' (isGuest)';
        $query .= " VALUES ('1')";
        $result = mysqli_query($db_connection, $query);
        if ($result) {
           $recentId = $db_connection->insert_id;
           $newGuestUser = get_user_by_id($recentId);
           add_user_to_session($newGuestUser);
           return get_user_by_id($recentId);
            // Create a user array in the SESSION variable and assign values to it
        }

         
    }

function add_user_to_session($user) {
    $_SESSION['user'] = [
        'id' => $user['id'],
    ];
}

/**
 * Delete user by the user id
 *
 * @param integer $id
 * @return object - mysqli_result
 */
function delete_user_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM users WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function delete_cart_item_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM cart_item WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

?>

