<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions 1</title>
</head>
<body>
    <?php

        $text = 'According to a researcher (sic) at Cambridge University, it doesn\'t matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.';
 

        $textArray = explode(' ',rtrim($text,'.'));

        $textArrayShuffled = [];

        foreach($textArray as $word){
            array_push($textArrayShuffled, str_shuffle($word));
        }
        
        $textResult = implode(' ',$textArrayShuffled) . '.';

    ?>

    <h2>First the text :</h2>

    <p><?php echo $text ?></p>

    <h2>Then shuffle each word</h2>

    <pre><?php print_r($textArrayShuffled); ?></pre>

    <h2>After make a string with it</h2>

    <p><?php echo $textResult; ?></p>
</body>
</html>