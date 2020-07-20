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
    private $ingredients = array();
    private $instructions = array();
    private $yield;
    private $tag = array();
    private $source = 'The Crazy cooker';

    private $measurements = array(
        'liter',
        'g',
        'cup',
        'kg',
        'c. à soupe',
        'c. à café',
        'pc'
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

    public function getInstructions(){
        return $this->instructions;
    }

    public function addInstructions($string){
        $this->instructions[] = $string;
    }

    public function getTags(){
        return $this->tags;
    }

    public function addTag($tag){
        $this->tags[] = strtolower($tag);
    }

    public function getYield(){
        return $this->yield;
    }

    public function setYield($yield){
        $this->yield = $yield;
    }

    public function getSource(){
        return $this->source;
    }

    public function setSource($source){
        $this->source = ucwords($source);
    }

    public function __construct($title) {
	    $this->setTitle($title);
    }

    public function __toString()
    {
	    $output = "Your are calling a " . __CLASS__ . " object withe the title \"";
        $output .= $this->getTitle() . "\".";
        $output .= " It is stored in " . basename(__FILE__) . " at " . __DIR__ . ".";
        $output .= " This display from line " . __LINE__ . " in method " . __METHOD__;
        $output .= " <br/>The following methods are available for objects in this class: <br/>";
        $output .= implode("<br/>", get_class_methods(__CLASS__));
        return $output;
    }

}

// $recipe1 = new Recipe();
// $recipe1->setTitle("my first recipe");
// $recipe1->addIngredients('Sel', 2, 'c. à café');

// echo '<br>' . $recipe1->getTitle();

// echo '<br>' . $recipe1->source;

// echo '<br>' . $recipe1->displayRecipe();

// foreach ($recipe1->getIngredients() as $ing){
    // echo '<br>' . $ing['amount'] . ' ' . $ing['measure'] . ' of ' . $ing['item'] . '<br>';
// }

?>

</body>
</html>