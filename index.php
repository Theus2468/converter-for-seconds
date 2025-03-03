<?php

@$seconds = (double) $_POST['seconds'];

@$minutes = (double) $_POST['minutes'];

@$hours = (double) $_POST['hours'];

if ($minutes > 0) {
    $minutes = $minutes * 60;
};

if ($hours > 0) {
    $hours = $hours * 3600;
};


$seconds = $seconds + $minutes + $hours;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>converter</title>
</head>
<body>
    <form action="" method="post">

        <input type="text" name="hours" id="hours" placeholder="hours...">

        <input type="text" name="minutes" id="minutes" placeholder="minutes">

        <input type="text" name="seconds" id="seconds" placeholder="seconds...">

        <button type="submit">enter</button>

        <p>it's <?php echo $seconds; ?> seconds</p>

    </form>
</body>
</html>