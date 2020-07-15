<!DOCTYPE html>
<html lang="en">
<head>
    <title>array</title>
</head>
<body>
    <?php

        $ga = array (
            'firstName'     => 'Gaelle',
            'lastName'      => 'Delvaux',
            'city'          => 'Ans',
            'country'       => 'Belgium',
            'favmovies'     => array('Suicid Squad','Gossip Girl'),
            'hobbies'       => array('work','social media','youtube watching')
        );

        $me = array (
            'firstName'     => 'Fabian',
            'lastName'      => 'Quoidbach',
            'city'          => 'Ans',
            'country'       => 'Belgium',
            'favmovies'     => array('Matrix','Back to the Future','Interstellar','Inception'),
            'hobbies'       => array('dev','eat','sleep'),
            'wife'          => $ga
        );

    echo "<pre>";
    print_r($me);
    echo "</pre>";

    ?>
</body>
</html>