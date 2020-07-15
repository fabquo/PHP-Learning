<html>
<head><title>Hi!</title></head>
<body>
<?php
    $name = "Fabian";
    $age = 33;
    $eyescolor = "blue";
    $family = array("Gaelle","Luka","Victor");
    $hungry = true;
?>
    <p>Hi, my name is <?php echo "$name" ?>!</p>
    <p>I am <?php echo "$age" ?> years old!</p>
    <p>My eyes are <?php echo "$eyescolor" ?> !</p>
    <p>The first person in my family is <?php echo "$family[0]"?>.</p>
    <p>Am i hungry ? <?php echo "$hungry" ?></p>
</body>
</html>