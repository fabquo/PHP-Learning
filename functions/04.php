<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decapitalize</title>
</head>
<body>
    <?php

        function decapitalize($text){
            return strtolower($text);
        }

    ?>

    <h1>Decapitalize "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"</h1>

    <?php echo ucfirst(decapitalize('STOP YELLING I CAN\'T HEAR MYSELF THINKING!!'));?>

</body>
</html>