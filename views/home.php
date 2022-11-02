<?php
checkLoggedIn();
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?php echo $_SESSION['LOGGED']['name']; ?>'s Newsfeed</title>
</head>
<body>

<?php require_once __DIR__ . "/parts/header.php"; ?>



<?php require_once __DIR__ . "/parts/footer.php"; ?>
</body>
</html>