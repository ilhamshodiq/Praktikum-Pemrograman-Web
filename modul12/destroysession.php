<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destroy session</title>
</head>

<body>
    <?php
    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();
    ?>
</body>

</html>