<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 25.10.15
 * Time: 14:54
 */

namespace Book;

use Product\Book;


interface PictureInterface
{
    public function getWidth();

    public function setWidth($company);

    public function getHeight();

    public function setHeight($position);
}

class Picture extends Book implements PictureInterface
{
    protected $height;
    protected $width;

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function printProperties()
    {
        $s = parent::printProperties();
        $s .= 'Ширина: ' . $this->getWidth() . "см<br>\n";
        $s .= 'Висота: ' . $this->getHeight() . "см<br>\n";
        return $s;
    }

    public function discount()
    {
        if ($this->category == 1 && !empty($this->price)) {
            $discount = $this->price - $this->price * 0.2;
        } else {
            if (!empty($this->price)) {
                $discount = $this->price;
            } else {
                $discount = 'N/A';
            }
        }
        return $discount;
    }
}