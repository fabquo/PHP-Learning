<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $amount_of_lines = 1;

    while ($amount_of_lines <= 100)
    {
        echo $amount_of_lines . '. : I shall not watch flies fly when I\'m learning PHP.<br />';
        // shorthand writing for 
        // $amount_of_lines = $amount_of_lines +1;
        $amount_of_lines ++; 
    
    }

    for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)
{
    echo $amount_of_lines . '. : I shall not watch flies fly when I\'m learning PHP.<br />';
}

    ?>
</body>
</html>