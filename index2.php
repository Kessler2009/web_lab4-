<?php
include 'Movie.php';



$mov1 = new Movie('N0001', 'Avengers 1', 20.99);
echo $mov1->title.'<BR>';
echo $mov1->conversion('Japan').'<BR>';
echo Movie::DISCOUNT.'<BR>';

//echo $mov1->id.'<BR>';

echo $mov1->displayHeading('H1');

$mov1->rentalPrice = -20;
echo $mov1->rentalPrice.'<BR>';


echo '<BR>';
echo $mov1;


