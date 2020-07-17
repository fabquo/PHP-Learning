<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices 2</title>
</head>

<body>

    <?php

    function capitalize($name)
    {
        return ucfirst($name);
    }

    $test = 'gaelle';

    // End of 1st exercice

    function addition($num1, $num2)
    {

        if (is_numeric($num1) && is_numeric($num2)) {
            return $num1 + $num2;
        } else {
            echo ('Error: argument is not a number.');
        }
    }

    // End of 5th exercice

    function acronym($text)
    {
        $textArray = explode(' ', $text);
        $result = '';

        foreach ($textArray as $word) {
            $result .= ucfirst($word[0]);
        }

        return $result;
    }

    // End of the 6th exercice

    function replaceLetter($text)
    {

        $test = str_replace('ae', 'æ', $text);
        return $test;
    }

    // End of the 7th exercice

    function replaceLetterInv($text)
    {

        $test = str_replace('æ', 'ae', $text);
        return $test;
    }

    function feedback($message,$class = 'info'){

                return '<div class ="'. $class . '">' . ucfirst($class) . ' : ' . $message . '.</div>';

    }

    ?>

    <h2>Capitalize the first letter of gaelle</h2>

    <pre>
        function capitalize($name){
        return ucfirst($name);
        }

        $test = 'gaelle';
    </pre>

    <?php echo capitalize($test); ?>

    <h2>Use Native function to display current year</h2>

    <pre>
        echo date('Y');
    </pre>

    <?php echo date('Y'); ?>

    <h2>Use Native function to display current year time minutes and secondes</h2>

    <pre>
        echo date('l jS \of F Y H:i:s');
    </pre>

    <?php echo date('l jS \of F Y H:i:s'); ?>

    <h2>Create a function to make sum of 2 numbers</h2>

    <pre>
        function addition($num1,$num2){

            if(is_numeric($num1) && is_numeric($num2)){
            
            return $num1 + $num2;
            
            } else {
            
            echo('Error: argument is not a number.');
            
            }
        }

echo addition(3,5);
    </pre>

    <?php echo addition(3, 5); ?>

    <h2>Create a function to make a acronym of string</h2>

    <pre>
        function acronym($text){
            $textArray = explode(' ',$text);
            $result = '';

            foreach($textArray as $word){
                $result .= ucfirst($word[0]);
            }

            return $result;
        }

        tested with : this is a test.
    </pre>

    <?php echo acronym('this is a test'); ?>

    <h2>Create a function to ae for æ</h2>

    <pre>
        function replaceLetter($text){

            $test = str_replace('ae','æ',$text);
            return $test;
        }
    </pre>

    <?php echo replaceLetter('caecotrophie, chaenichthys, microsphaera, sphaerotheca'); ?>

    <h2>Create a function to do the invert operation</h2>

    <pre>
        function replaceLetterInv($text){

            $test = str_replace('æ','ae',$text);
            return $test;
        }
    </pre>

    <?php echo replaceLetterInv('cæcotrophie, chænichthys, microsphæra, sphærotheca'); ?>

    <h2>Create a function to add class to div tag and display error message</h2>

    <?php echo feedback('Incorrect email address');?>

</body>

</html>