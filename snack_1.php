<!-- SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina. -->
<?php     
// Array
$NumbersArray = [];

    function get_random_number($min, $max){
        $RandomNumber = rand($min, $max);
        return $RandomNumber;
    };

    // CICLO PER 15 VOLTE
    while (count($NumbersArray) < 15) {
    // NUMERI RANDOM COMPRESI TRA 1, 30
    $number = get_random_number(1,30);

    // CONTROLLO CHE NON SIA GIA' NELL'ARRAY DEFINITIVO
    if (!in_array($number, $NumbersArray)) { 
        array_push($NumbersArray, $number);
    }
  };
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($NumbersArray as $NumberArray) { ?>
        <div> N. 
            <?php print_r($NumberArray) ?>
        </div>
    <?php } ?>
</body>

</html>
