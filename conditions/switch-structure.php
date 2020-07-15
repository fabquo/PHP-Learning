<html>
<head>
    <title>
        Team
    </title>
</head>
<body>

<?php

$message = "There is no note";

if(isset ($_GET['note'])) {
    $note = $_GET['note'];
    switch ($note) {
        case ($note <= 4);
            $message = "this work is really bad. What a dumb kid !";
            break;
        case ($note >= 5 && $note <= 9);
            $message = "This is not sufficient. More studying is required.";
            break;
        case 10;
            $message = "Barely enough !";
            break;
        case ($note >= 11 && $note <= 14);
            $message = "Not bad !";
            break;
        case ($note >= 15 && $note <= 18);
            $message = "Bravo ! Bravissimo !";
            break;
        case ($note >= 19);
            $message = "Too good to be true : confront the cheater !";
            break;
    }
}
?>
<form method="get" action="">
    <label for="note">Enter a note !</label>
    <br><br>
    <input type="number" name="note">
    <br><br>
    <input type="submit">
</form>
<p><?php echo $message ?></p>
</body>
</html>