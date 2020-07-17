<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate a new word</title>
</head>
<body>
    <?php
        if(isset($_POST['generate'])){
        
            $generate = $_POST['generate'];
        
        }
        
        function generateWords(){
            
            $message = '';
            $randLgt1 = rand(1,5);
            $randLgt2 = rand(7,15);
            
            if(isset($_POST['generate'])){
                
                $word = range('a','z');
                $word2 = range('a','z');
                shuffle($word);
                shuffle($word2);
                $string = implode($word);
                $string2 = implode($word2);
                $message = substr($string,0, $randLgt1) . ' ' . substr($string2,0,$randLgt2);
            }
            
            return $message;
        }
    ?>

    <h1>Generate a new word</h1>

    <?php echo '<p>' . generateWords() . '</p>'; ?>
    <form method="POST">
        <button name="generate" value="true">Generate</button>
    </form>
</body>
</html>