<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = addslashes($_POST['name']);
  $address = addslashes($_POST['address']);
  $email = addslashes($_POST['email']);
  $password = addslashes($_POST['password']);
  $date = date('Y-m-d H:i:s');

  $query = "insert into users (email, password, name, address, date) values ('$email','$password','$name', '$address', '$date')";

  $result = mysqli_query($connect, $query);

  header("Location: /login?signup=1");
  die;
}

?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Signup - User System App</title>
</head>

<body>

  <?php require_once __DIR__ . "/parts/header.php"; ?>
  <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div class="mx-auto mt-10 max-w-screen-lg">
        <h3 class="text-2xl mb-2 font-medium leading-6 text-gray-900">User Registration</h3>
        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      </div>

      <form class="mt-8 space-y-6" action="#" method="POST">
        <div class="-space-y-px rounded-md shadow-sm">
          <div>
            <label for="name" class="sr-only">Name</label>
            <input id="name" name="name" type="text" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Full Name">
          </div>

          <div>
            <label for="address" class="sr-only">Address</label>
            <input id="address" name="address" type="text" required class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Address">
          </div>

          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="signup-agreement" name="signup-agreement" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" required>
            <label for="signup-agreement" class="ml-2 block text-sm text-gray-900">Agree with T.O.S</label>
          </div>

          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Login as a existing user.</a>
          </div>
        </div>

        <div>
          <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Sign up
          </button>
        </div>
      </form>
    </div>
  </div>


  <?php require_once __DIR__ . "/parts/footer.php"; ?>
</body>

</html>