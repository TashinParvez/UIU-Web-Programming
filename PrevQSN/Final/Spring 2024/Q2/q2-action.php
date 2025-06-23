<?PHP
$seed   = $_POST['seed'];
$terms  = $_POST['terms'];

echo "seed : $seed <br> terms: $terms<br>";

$prev = 0;
for ($i = 1; $i <= $terms; $i++) {
    $prevC = $prev;
    $prevSum =  0;
    while ($prevC) {
        $prevSum += $prevC % 10;
        $prevC /= 10;
    }
    $seed += $prevSum;
    $prev = $seed;
    echo " $seed,";
}
