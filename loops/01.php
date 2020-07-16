<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

        foreach($pronouns as $el){
            
            if ($el == 'He/She'){
                echo $el . ' codes.<br>';
            } else {
            echo $el . ' code.<br>';
            }
        }
    ?>
</body>
</html>