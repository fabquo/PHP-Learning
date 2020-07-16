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
    
    $gaHobbiesTotal = count($ga['hobbies']);
    
    $meHobbiesTotal = count($me['hobbies']);

    array_push($me['hobbies'],'Taxidermy');
    $me['lastName']='Durand';

    $arrayIntersection = array_intersect($me['hobbies'], $ga['hobbies']);
    $arrayMerge = array_merge_recursive($me['hobbies'], $ga['hobbies']);

    ?>

    <h1>Arrays</h1>
    <h2>Mon array</h2>
    <pre>   
        <?php print_r($me);?>
    </pre>
    <h2>Nombre de Hobbies</h2>
    <p>Pour Gaëlle</p>  
        <?php echo($gaHobbiesTotal);?>
    <p>Pour moi</p>
        <?php echo($gaHobbiesTotal);?>
    <p>Au total</p>
        <?php echo($gaHobbiesTotal + $meHobbiesTotal);?>
    <p>Hobbies by Merge</p>
        <pre>
            <?php print_r($arrayMerge);?>
        </pre>
    <p>Hobbies by Intersect</p>
        <pre>
            <?php print_r($arrayIntersection);?>
        </pre>
</body>
</html>