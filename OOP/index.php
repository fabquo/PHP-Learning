<?php

include 'classes/recipes.php';
include 'classes/render.php';
include 'inc/cookbook.php';
include "classes/recipecollection.php";

$cookbook = new RecipeCollection("Becode recipe");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);

var_dump($cookbook);