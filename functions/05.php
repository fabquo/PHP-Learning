<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cone volume</title>
</head>
<body>
    <?php
        function calculVolume($ray,$height){
            return $ray * $ray * 3.14 * $height * (1/3);
        }
    ?>

    <h1>The volume of a cone which ray is 3 and height is 6</h1>

    <?php echo 'the volume of this cone is ' . calculVolume(3,6) . 'cm<sup>3</sup>.'; ?>
</body>
</html>