<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $countFromOneWhile = 1;
        
        echo '<table><tr>';

        while ($countFromOneWhile <= 120)
        {
            echo '<td>' . $countFromOneWhile . '</td>';
            $countFromOneWhile ++;
        }
        
        echo '</tr><tr>';

        for ($i=1; $i <= 120; $i++){
            echo '<td>' . $i . '</td>';
        }
        
        echo '</tr></table><br>';



        $startupBeCode = Array('Fabian','Ahmed' , 'Nicolas' , 'Donovan','Céline','Said','Laetitia','Artjom','Mehdi','Kim','Christophe','Florian','Anne-Sophie','Michael','Greg','Mathieu','Caroline','Arnaud','Antonio','Bryan','Arthur','Mikye','Simon','Ruben');

        foreach($startupBeCode as $key => $name){
            echo $startupBeCode[$key] . '<br>';
        }
        echo '<br>';

        $countries = ['BE'=>'Belgium','FR'=>'Frace','IT'=>'Italy','SP'=>'Spain','LU'=>'Luxembourg','LT'=>'Lituania','GR'=>'Greece','BR'=>'Brazil','AU'=>'Austria','CA'=>'Canada'];
        asort($countries);

        echo '<form> <select name = \'country\' size = \'1\'>';
            foreach($countries as $key => $country){
                echo '<option value=\''. $key . '\'>' . $country;
            }
    ?>

</body>
</html>