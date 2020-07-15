<html>
<head>
    <title>
        Team
    </title>
</head>
<body>

<?php

    if(isset ($_GET['age']) and isset ($_GET['gender']) and isset ($_GET['name'])){
        $gender = $_GET['gender'];
        $age = $_GET['age'];
        $name = $_GET['name'];
        $message = "Sorry " . $name .". You don't fit the criteria.";
        if ($gender == "woman" and $age >= 21 and $age <= 40){
                $message = "Congratulation " . $name . ". Welcome to the team.";
            }
    }
?>

<form method="get" action="">
    <label for="age">Enter your age please !</label>
    <br><br>
    <input type="number" name="age">
    <p>Are your a man or a woman ?</p>
    <input type="radio" name="gender" value="man" checked>
    <label for="man">Man</label>
    <input type="radio" name="gender" value="woman">
    <label for="woman">woman</label>
    <br>
    <p>What's your name</p>
    <input type="text" name="name">
    <br><br>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php echo $message ?>

</body>
</html>
