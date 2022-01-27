<?php

//ex(1):


$age=20;

if($age>=18)
{
    echo "You Can login here <br>";
}
else
{
    echo "you can't login here, your age less than 18y <br>";
}

echo "ex(2): <br><br>";

$films=array("Fast","Predestination","Persuit","Prestige");
$keyword="avatar";
$keyword2="Persuit";

function searchFilms($films , $keyword)
{
    $res ="NO, not found <br>";
    foreach($films as $film)
    {
        if($keyword==$film)
            $res= "YES, found <br>";   
    }
    return $res;
}

echo searchFilms($films , $keyword);
echo searchFilms($films , $keyword2);

echo "ex(3): <br><br>";
$tests=array(5,4,9,3,1,7,5,8,6);

function maxNum($tests)
{
    $max=0;
    foreach($tests as $test)
    {
        if($test>$max)
        {
            $max=$test;
        }
    }
    return $max;
}

echo "the max number in array is ".maxNum($tests)."<br>";


echo "ex(4): <br><br>";

$movies=array("avatar","Prestige","avatar","Prestige");
$key="avatar";

function countFilms($movies , $key)
{
    $counter=0;
    foreach($movies as $movie)
    {
        if($key==$movie)
        {
            $counter++;
        }
    }
    return $counter;
}

echo "the number of movies are repeated = " .countFilms($movies , $key)."<br>";