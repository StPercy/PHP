<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<?php

$name = "Dark Matter";
$read = true;

if ($read) {
    $message = "<h1>You have read $name.</h1>";
} else {
    $message = "<h1>You have not read $name.</h1>";
}

?>
<h1>
<?= $message ?>
</h1>
</body>
</html>