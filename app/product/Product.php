<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 23.10.15
 * Time: 23:01
 */

namespace Product;


abstract class Product
{
    public $name;
    public $category;
    public $price;
    public $availability;

    /**
     * Product constructor.
     * @param $name
     * @param $category
     * @param $price
     * @param $availability
     */
    public function __construct($name, $category, $price=null, $availability=False)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->availability = $availability;
    }

    /**
     * @return null
     */
    public function getPrice()
    {
        return (is_null($this->price) ? 'N/A' : $this->price);
    }

    /**
     * @param null $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    abstract function printProperties();

}

