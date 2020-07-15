<html>
    <head>
        <title>Ternary condition</title>
    </head>
    <body>
        <?php

            $hello = "Hello";
            $gender = "M";

            $greetings = ($gender == "M") ? $hello = "Hello Sir !" : $hello = "Hello Madame !";

            echo $hello;
        ?>
    </body>
</html>