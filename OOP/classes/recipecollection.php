<?php

class RecipeCollection
{
	private $title;
    private $recipes = array();
    
    public function setTitle($title){
        $this->title = ucwords($title);
    }

    public function getTitle(){
        return $this->title;
    }

    public function getRecipe(){
        $this->recipes;
    }

    public function addRecipe($str){
        $this->recipes[] = $str;
    }
}

?>