<?php
//Nama	= Lutfi Afriatul Latifah
//NIM	= 12191675

//array
$ikanku = array("teri", "lele", "bawal", "tuna");
$angkringan = array("Ikan Teri sering dijumpai di nasi kucing angkringan dan saya konsumsi pas tanggal tua.");
$tanggal = array("Kalo tanggal muda sering kuliner Lele, Bawal, dan Tuna.");

echo $converted_string = implode(",",$ikanku);
echo "<br>";
echo $converted_string = implode(",",$angkringan);
echo "<br>";
echo $converted_string = implode(",",$tanggal);
echo "<br>";
?>


<?php
$timenow = "2017-03-14";
echo date ("d-m-y", strtotime($timenow));
?>