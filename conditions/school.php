<html>
<head>
    <title>
        Team
    </title>
</head>
<body>

<?php

    if(isset ($_GET['note'])){
        $note = $_GET['note'];
        $message = "There is no note !";
        if($note < 4) {
            $message = "This work is really bad. What a dumb kid !";
        } else if ($note >= 5 && $note <= 9){
            $message = "This is not sufficient. More studying is required.";
        } else if ($note == 10){
            $message = "Barely enough !";
        } else if ($note >= 11 && $note <= 14){
            $message = "Not bad !";
        } else if ($note >= 15 && $note <= 18){
            $message = "Bravo, bravissimo !";
        } else if ($note >=19){
            $message = "Too good to be true : confront the cheater !";
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
