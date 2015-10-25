
<?php
require_once "vendor/autoload.php";

use Product\Book;

echo "Книги<br>";
$history = new Book();
$history->setName("Історія України");
$history->setCategory(1);
$history->setAuthor("Грушевський");
$history->setPrice(546);
$history->setAvailability(false);
$properties = $history->printProperties();
echo $properties;
$category=$history->getCategory();
echo $category. "<br>";
echo "Ціна зі знижкою:";
$discount=$history->discount();
echo "$discount <br>\n";
echo "<br>";
$history = new Book();
$history->setName("Php.Обучение на примерах");
$history->setCategory(0);
$history->setAuthor("А.Кухарчик");
$history->setPrice(700);
$history->setAvailability(true);
$properties = $history->printProperties();
echo $properties;
$category=$history->getCategory();
echo $category. "<br>";
echo "Ціна зі знижкою:";
$discount=$history->discount();
echo "$discount <br>\n";
echo "<br\n";








