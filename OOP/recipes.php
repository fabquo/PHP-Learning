<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
</head>
<body>
    
<?php

class Recipe{
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = 'The Crazy cooker';

    public function displayRecipe(){
        return $this->title . ' by ' . $this->source;
    }

    public function setTitle($title){
        $this->title = ucwords($title);
    }

    public function getTitle(){
        return $this->title;
    }
}

$recipe1 = new Recipe();
$recipe1->setTitle("my first recipe");

echo '<br>' . $recipe1->getTitle();

echo '<br>' . $recipe1->source;

echo '<br>' . $recipe1->displayRecipe();

?>

</body>
</html>