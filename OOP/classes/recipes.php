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

    private $measurements = array(
        'liter',
        'g',
        'cup',
        'kg',
        'c. à soupe',
        'c. à café'
    );

    public function displayRecipe(){
        return $this->title . ' by ' . $this->source;
    }

    public function setTitle($title){
        $this->title = ucwords($title);
    }

    public function getTitle(){
        return $this->title;
    }

    public function addIngredients($item, $amount = null, $measure = null){

        if($amount != null && !is_float($amount) && !is_int($amount)){
            exit('The amount must be a float: ' . gettype($amount) . ' $amount given.');
        }

        if($measure != null && !in_array(strtolower($measure),$this->measurements)){
            exit('please enter a valid measurement :' . implode(', ', $this->measurements));
        }

        $this->ingredients[] = array(
            'item'      =>  ucwords($item),
            'amount'    =>  $amount,
            'measure'   =>  $measure
        );
    }

    public function getIngredients(){
        return $this->ingredients;
    }

}

$recipe1 = new Recipe();
$recipe1->setTitle("my first recipe");
$recipe1->addIngredients('Sel', 2, 'c. à café');

echo '<br>' . $recipe1->getTitle();

echo '<br>' . $recipe1->source;

echo '<br>' . $recipe1->displayRecipe();

foreach ($recipe1->getIngredients() as $ing){
    echo '<br>' . $ing['amount'] . ' ' . $ing['measure'] . ' of ' . $ing['item'] . '<br>';
}

?>

</body>
</html>