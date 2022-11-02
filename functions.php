<?php

require __DIR__ . "/db.php";

function checkLoggedIn($redirect = 'login')
{
    if (empty($_SESSION['LOGGED'])) 
    {
        header("Location: /$redirect");
        die;
    }
}

function addPost($user, $postContent) use ($connect)
{
    checkLoggedIn();

    $user = addslashes($user);
    $postContent = addslashes($postContent);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $date = date('Y-m-d H:i:s');

        $query = "INSERT into posts (user, date, content) values ('$user', '$date', '$postContent')";

        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);

            var_dump($row);
            die;
        } else {
            $error = "Somthing went wrong!";
        }
    }
}