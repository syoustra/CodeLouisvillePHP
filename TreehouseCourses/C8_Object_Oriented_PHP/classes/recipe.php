<?php

class Recipe
{
	public $title;
	public $ingredients = array();
	public $instructions = array();
	public $yield;
	public $tag = array();
	public $source = "Alena Holligan";
}

$recipe1 = new Recipe();

var_dump($recipe1);

