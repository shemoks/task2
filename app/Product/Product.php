<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 23.10.15
 * Time: 23:01
 */

namespace app\Product;


abstract class Product
{
    public abstract function getName();

    public abstract function setName($name);

    public abstract function getCategory();

    public abstract function setCategory($category);

    public abstract function getPrice();

    public abstract function setPrice($price);

    public abstract function printProperties();

    public abstract function discount();

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }

}

