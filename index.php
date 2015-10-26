<meta charset="UTF-8">
<?php
use app\Book\Book;
use app\Picture\Picture;

require(__DIR__ . '/app/BaseApp.php');


echo "Книги<br>";
$history = new Book();
$history->setName("Історія України");
$history->setCategory(1);
$history->setAuthor("Грушевський");
$history->setAvailability(false);
$properties = $history->printProperties();
echo $properties;
$history->getCategory();
echo "Ціна зі знижкою:";
$discount = $history->discount();
echo $discount . "<br>";
echo "<br>\n";
$history = new Book();
$history->setName("Історія України");
$history->setCategory(0);
$history->setAuthor("Б.Ковальов");
$history->setAvailability(true);
$properties = $history->printProperties();
echo $properties;
$history->getCategory();
echo "Ціна зі знижкою:";
$discount = $history->discount();
echo $discount . "<br>";
echo "<br>\n";
$history = new Book();
$history->setName("Історія");
$history->setCategory(0);
$history->setAuthor("З.Усова");
$history->setPrice(400);
$history->setAvailability(true);
$properties = $history->printProperties();
echo $properties;
$history->getCategory();
echo "Ціна зі знижкою:";
$discount = $history->discount();
echo $discount . "<br>";
echo "<br>\n";
$history = new Book();
$history->setName("Php.Обучение на примерах");
$history->setCategory(1);
$history->setAuthor("А.Кухарчик");
$history->setPrice(700);
$history->setAvailability(true);
$properties = $history->printProperties();
echo $properties;
$history->getCategory();
echo "Ціна зі знижкою:";
$discount = $history->discount();
echo $discount . "<br>";
echo "<br>\n";
echo "Картини<br>";
$picture = new Picture();
$picture->setName("Ліс");
$picture->setAuthor("Корольов");
$picture->setAvailability(false);
$picture->setCategory(0);
$picture->setHeight(500);
$picture->setWidth(250);
$picture->setPrice(200);
$string = $picture->printProperties();
echo $string;
$picture->getCategory();
echo "Ціна зі знижкою:";
$discount = $picture->discount();
echo $discount . "<br>";
echo "<br>\n";
$picture = new Picture();
$picture->setName("Осінь");
$picture->setAuthor("О.Шемшур");
$picture->setAvailability(true);
$picture->setCategory(1);
$picture->setHeight(200);
$picture->setWidth(250);
$picture->setPrice(150);
$string = $picture->printProperties();
echo $string;
$picture->getCategory();
echo "Ціна зі знижкою:";
$discount = $picture->discount();
echo $discount;
echo "<br>\n";











