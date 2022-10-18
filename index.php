<?php 
$data_file="./love.txt" ;
$data_arr = array();
$f = fopen($data_file, "r");
if ($f){
    while (!feof($f)){
        $line = trim(fgets($f));
        if ($line){
            $data_arr[] = $line;
        }
    }
    fclose($f);
}
$data_count = count($data_arr);
$id = (int) $_REQUEST["id"];
if ($id < 0 || $id > $data_count-1){
    $id = 0;
}
echo "<html><head><link href='./img.png' rel='shorcut icon'><title>I LOVE YOU</title></head><body background='bg.jpg'>";
echo "<div style='border: 1px solid white; color: white; padding: 30px;'>";
echo $data_arr[$id];
echo "</div>";

echo "<div style='text-align: center; padding: 20px;'>";
if ($id > 0){
    $prev_id = $id - 1;
    echo "<a style='color: lightblue;' href='index.php?id=$prev_id'>< Back</a>";
}
echo " ";
if ($id < $data_count-1){
    $next_id = $id + 1;
    echo "<a style='color: lightblue;' href='index.php?id=$next_id'>Lanjut ></a>";
}
echo "</div>";
echo "</body></html>"
 ?>
<div style="text-align: center; color: white ; margin-top: 30%; float: bottom;" size=2>
    Dari <b>Abdul Wachid Al Aziz</b> untuk   <b>Adinda Prameswari Sa'adatun Nisa'</b>
</div>