<?php
namespace FoodItems;

class CheeseBurger extends FoodItem{
    public function __construct(){
        parent::__construct(
            "CheeseBurger",
            "This is a hamburger with cheese added.",
            15.0,
            2
        );
    }
}
