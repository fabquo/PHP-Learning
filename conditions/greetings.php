<html>
<head>
    <title>
        Greetings
    </title>
</head>
<body>

<h1>Enter your age please !</h1>

<?php
$hour = date(H);
$minutes = date(i);
$test = $hour.$minutes;
$greeting = "";


if ($test >= 500 and $test <= 900){
    $greeting = "Good morning !";
} else if ($test > 900 and $test <= 1200){
    $greeting = "Good day";
} else if ($test > 1200 and $test <= 1600){
    $greeting = "Good afternoon";
} else if ($test > 1600 and $test <= 2100){
    $greeting = "Good evening !";
} else {
    $greeting = "Good night !";
}

if (isset($_GET['age']) and isset ($_GET['gender']) and isset($_GET['english'])){
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $english = $_GET['english'];
    if ($age < 12 ){
        if ($gender == "woman"){
            echo $message = ($english == "yes") ? $message = "<p>" . $greeting . " little girl !</p>": $message = "<p>Aloha little girl !</p>";
        } else {
            echo $message = ($english == "yes") ? $message = "<p>" . $greeting . " little boy !</p>": $message = "<p>Aloha little boy !</p>";
        }
    } else if ($age >= 12 and $age < 18){
        if ($gender == "woman"){
            echo $message = ($english == "yes") ? $message = "<p>" . $greeting . " miss Teen !</p>": $message = "<p>Aloha miss Teen !</p>";
        } else {
            echo $message = ($english == "yes") ? $message = "<p>" . $greeting . " mister Teen !</p>": $message = "<p>Aloha mister Teen !</p>";
        }
    } else if ($age >= 18 and $age <= 115){
        if ($gender == "woman"){
            echo $message = ($english == "yes") ? $message = "<p>" . $greeting . " Madade !</p>": $message = "<p>Aloha Madame !</p>";
        } else {
            echo $message = ($english == "yes") ? $message = "<p>" . $greeting . " Sir !</p>": $message = "<p>Aloha Sir !</p>";
        }
    } else if ($age > 115){
        echo "<p>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?</p>";
    }
}
?>

<form method="get" action="">
    <label for="age">Enter your age please !</label>
    <br>
    <input type="number" name="age">
    <p>Are your a man or a woman ?</p>
    <input type="radio" name="gender" value="man" checked>
    <label for="man">Man</label>
    <input type="radio" name="gender" value="woman">
    <label for="woman">woman</label>
    <br>
    <p>Do you speak English ?</p>
    <input type="radio" name="english" value="yes" checked>
    <label for="yes">Yes</label>
    <input type="radio" name="english" value="no">
    <label for="no">No</label>
    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>

</body>
</html>

