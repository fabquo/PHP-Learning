<?php
// include 'classes/recipes.php';
// include 'classes/render.php';

$recipe1 = new Recipe('Oeufs durs');
$recipe1->setSource('Grand-Ma');
$recipe1->addTag('Test');
$recipe1->addTag('Test2');
$recipe1->addTag('Test3');
$recipe1->addIngredients('Eggs',6,'pc');
$recipe1->addInstructions('Faire cuir dans de l\'eau bouillant pendant 9 minutes');
// $recipe1->

// echo Render::displayRecipe($recipe1);

// echo '<br/><br/><br/>';

// echo $recipe1->__toString();
?>