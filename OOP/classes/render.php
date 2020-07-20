<?php

class Render {
    public static function displayRecipe($recipe) 
    {
        $output = "";
        $output .= $recipe->getTitle() . " by " . $recipe->getSource();
        $output .= "<br/>";
        $output .= implode( ", ", $recipe->getTags());
        $output .= "<br/>";
        foreach ($recipe->getIngredients() as $ing ) {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"] . "</br>";
        }
        $output .= '<br/>';
        $output .= implode(', ',$recipe->getInstructions());
        return $output;
    }
}

?>