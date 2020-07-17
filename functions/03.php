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
            
            if(isset($_POST['generate'])){
                $message = 'test';
            }
            
            return $message;
        }
    ?>

    <h1>Generate a new word</h1>

    <?php echo generateWords(); ?>
    <form method="POST">
        <button name="generate" value="true">Generate</button>
    </form>
</body>
</html>