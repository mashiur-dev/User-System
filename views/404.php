<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION['LOGGED'] = $row;
        header("Location: /profile");
        die;
    } else {
        $error = "Wrong email or password!";
    }
}

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login - User System App</title>
</head>

<body>

    <?php require_once __DIR__ . "/parts/header.php"; ?>

    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <div class="mx-auto mt-10 max-w-screen-lg">
                    <h3 class="text-2xl mb-2 font-medium leading-6 text-red-400">Error</h3>
                    <p class="mt-1 text-sm text-red-900">Request Not Found!</p>
                </div>
            </div>
        </div>
    </div>

    <?php require_once __DIR__ . "/parts/footer.php"; ?>
</body>

</html>