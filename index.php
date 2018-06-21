<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- EXERCIISE 1 -->
    <?php 
    $vorname = "Mario";
    $nachname = "Schantel";

    echo "<h1> $vorname $nachname</h1>";
    ?>

    <!-- EXERCISE 2 -->
    <?php
    $d= date("D");
    if ($d=="Mon")
    echo "Happy Monday!";
    else
    echo "Have a nice day!";
    ?>

    <!-- EXERCISE 3 -->
    <?php
    $d=date("D");
    switch ($d)
    {
        case "Mon":
        echo "Today is Monday";
        break;
        case "Tue":
        echo "Today is Tuesday";
        break;
        case "Wed":
        echo "Today is Wednesday";
        break;
        case "Thu":
        echo "Today is Thursday";
        break;
        case "Fri":
        echo "Today is Friday";
        break;
        case "Sat":
        echo "Today is Saturday";
        break;
        case "Sun":
        echo "Today is Sunday";
        break;
        default:
        echo "Wonder which day is this?";
    }
?>
    <!-- Exercise 4 -->
    <!-- FOR LOOP -->
    <?php 
    $a= "Mario";
    for ($i=0; $i<=50; $i++)
    {
        echo "$a <br>";
    }
    ?>

    <!-- WHILE LOOP  -->
    <?php
    $i =0;
    $b= "Schantel";
    while($i<50)
    {
        echo "$b <br>";
        $i++;
    }
    ?>

    <!-- DO WHILE LOOP -->
    <?php
    $i= 0;
    $c= "Sabine";
    do
    {
        echo "$c <br>";
        $i++;
    }
    while ($i <50);

    ?>

    <!-- Exercise 5 -->
    <!-- FOR EACH LOOP -->

    <?php $arrayNum = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach( $arrayNum as $value)
    {
        echo "$value <br>";

    }
?>

    <!-- Exercise 6 -->
    <?php
    $superpower['superman']= "flying";
    $superpower['catwoman']= "scratching";
    $superpower['poisonivy']= "poison";
    
    echo "The superpower of Superman is ".$superpower['superman']."<br>";
    echo "The superpower of Catwoman is ".$superpower['catwoman']."<br>";
    echo "The superpower of Poisonivy is ".$superpower['poisonivy']."<br>";
    ?>

    <?php
    $superpower = array(
        "superman" => array
        (
            "strength" => 35,
            "jumpingheight" => 30,
            "defense" => 39
        ),

        "catwoman" => array
        (
            "strength" => 20,
            "jumpingheight" => 25,
            "defense" => 50
        ),

        "poisonivy" => array
        (
            "strength" => 40,
            "jumpingheight" => 10,
            "defense" => 40
        )
        );

        echo "The strength of superman is: " ;
        echo $superpower['superman']['strength'] . "<br>";

        echo "The jumpingheight of catwoman is: " ;
        echo $superpower['catwoman']['jumpingheight'] . "<br>";

        echo "The defense of poisonivy is: " ;
        echo $superpower['poisonivy']['defense'] . "<br>";

?>


</body>
</html>