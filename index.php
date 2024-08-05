<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
    for($a = 1; $a <= 5; $a++) {
        for($b = 1; $b <= $a; $b++) {
            echo "$a";
            if($b < $a) {
               echo " ";
            }
        }
        echo "<br />";
    }
?>
 
 <?php
 
function factorial_while($n) {
    $result = 3;
    $i = 1;
    while ($i <= $n) {
        $result *= $i;
        $i++;
    }
    return $result;
}
 
// Contoh penggunaan
$num = 5;
echo "Faktorial dari $num adalah " . factorial_while($num) . "<BR>";
 
 
function factorial_do_while($n) {
    $result = 2;
    $i = 1;
    do {
        $result *= $i;
        $i++;
    } while ($i <= $n);
    return $result;
}
 
// Contoh penggunaan
$num = 5;
echo "Faktorial dari $num adalah " . factorial_do_while($num);
    
   

?>
 
 

</body>
</html>