<?php

namespace Product;

class Book extends Product
{
    protected $author;
    protected $name;
    protected $category;
    protected $price;
    protected $availability;

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    function getPrice()
    {
        return (is_null($this->price) ? 'N/A' : $this->price);
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getAvailability()
    {
        if ($this->availability) {
            echo "Наявна на складі <br>";
        } else {
            echo "Відсутня на складі <br>";
        }
    }

    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCategory()
    {
        if ($this->category == 1) {
            echo "Товар зі знижкою <br>";
        } else {
            echo "Товар без знижки <br>";
        }
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function discount()
    {
        if ($this->category == 1 && !empty($this->price)) {
            $discount = $this->price - $this->price * 0.5;
        } else {
            if (!empty($this->price)) {
                $discount = $this->price;
            } else {
                $discount = 'N/A';
            }
        }
        return $discount;
    }

    public function printProperties()
    {
        $s = '';
        $s .= 'Назва: ' . $this->getName() . "<br>\n";
        $s .= 'Ціна: ' . $this->getPrice() . "<br>\n";
        $s .= 'Автор: ' . $this->getAuthor() . "<br>\n";
        return $s;
    }

}


