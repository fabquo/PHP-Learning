<html>
    <head>
        <title>Ternary condition</title>
    </head>
    <body>

        <?php

        $gender = isset($_GET['choice']) ? $_GET['choice'] : "You must make a choice";

        $image = NULL;

        $image = ($gender == "cat" ? "https://media.giphy.com/media/v6aOjy0Qo1fIA/giphy.gif": ($gender == "human" ? "https://media.giphy.com/media/AEsUINFBsRVN6/giphy.gif" : ($gender == "unicorn" ? "https://media.giphy.com/media/26AHG5KGFxSkUWw1i/giphy.gif":"")));
        
        ?>


        <form method="get" action="">
            <label for="choice">Make a choice !</label>
            <br><br>
            <input type="radio" name="choice" value="human" checked>
            <label for="human">Human</label><br>
            <input type="radio" name="choice" value="cat">
            <label for="cat">Cat</label><br>
            <input type="radio" name="choice" value="unicorn">
            <label for="unicorn">Unicorn</label>
            <br><br>
            <input type="submit">
        </form>
        <img src= <?php echo $image; ?>>
    </body>
</html>