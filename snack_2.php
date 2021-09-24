<!-- SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php $students = [
    [
        'nome' => 'Andrea',
        'cognome' => 'Rizzotto',
        'voti' => [4, 7, 8],   
    ],
    [
        'nome' => 'Giovanni',
        'cognome' => 'Magnini',
        'voti' => [8, 7, 9],   
    ],
    [
        'nome' => 'Elisa',
        'cognome' => 'Zogni',
        'voti' => [6, 7, 5],   
    ],
    [
        'nome' => 'Arnaud',
        'cognome' => 'Nzaji',
        'voti' => [8, 7, 7],   
    ],
]; 

    $media_voti = $students[0]['voti'];
    $sum = 0;
    foreach($media_voti as $i) {
    $sum += $i;
    }
    $media = $sum/count($media_voti);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_2</title>
</head>

<body>
    <ul>
        <?php foreach ($students as $student) { ?>
            <li> 
            Nome Alunno: <?php echo $student['nome'] ?> <?php echo $student['cognome'] ?> <br> Media voti: <?php echo  $media ?>
            </li>
        <?php } ?>
    </ul>
    
</body>

</html>
