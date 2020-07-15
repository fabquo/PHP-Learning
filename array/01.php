<!DOCTYPE html>
<html lang="en">
<head>
    <title>array</title>
</head>
<body>
    <?php
        $familly = ['Gaelle','Luka','Victor'];
        $recipe = ['Pates','Frites','Barbecue'];
        $films = ['matrix','back to the future','Inception','Interstellar'];
        array_push($familly, 'Tsuki');
        $familly[] = 'Zoé';
        echo '<pre>';
        print_r($familly);
        print_r($recipe);
        var_dump($films);
        print_r($films[1]);
        echo '</pre>';

        $person['function'] = 'Junior Web Developer';

        // array_push($person,'Jeanne');
        echo '<pre>';
        print_r($person);
        echo '</pre>';

    $user = array (
        'firstName' => 'Fabian',
        'lastName' => 'Quoidbach',
        'city' => 'Ans',
        'country' => 'Belgium'
    );

    echo $user['city'];
    ?>
</body>
</html>