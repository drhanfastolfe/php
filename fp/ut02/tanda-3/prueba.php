$n = 3;
$anteFibo = 0;
$postFibo = 1;
$nFibo = 0;

if ($n > 0)
{
    echo '0';
}

for ($i = 2; $i <= $n; $i++)
{
    $nFibo = $anteFibo + $postFibo;
    echo ', ' . $nFibo;
    $anteFibo = $postFibo;
    $postFibo = $nFibo; 
}