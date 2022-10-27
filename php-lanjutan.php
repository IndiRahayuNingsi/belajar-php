<?php
$nama = "rahayu";

/*
echo "$nama";
echo "<br/>";
echo "$nama";
echo "<br/>";
echo "$nama";
echo "<br/>";
echo "$nama";
echo "<br/>";
echo "$nama";
echo "<br/>";
*/

/*
$no = 10;

for ($i=0; $i<5; $i++)
$n = $i + 1;
    echo $i. " " $nama. "br/>"
*/

/*
$no = 10;
$i = 0;

while ($i < $no){
    $n = $i + 1;
    echo $n. " ".$nama. "<br/>";
    $i++;
}
*/

/*
$no = 10
$i = 0
    
do{ 
    $n + 1;
    echo $n. " ".$nama. "<br/>";
    $i++;
} while ($i < $no)
*/

/*
$data = array('avanza', 'laborghini', 'tesla', 'xenia', 'xpander', 'rubicon' )
$i = 0;
while ($i < count ($data)) {
    echo $data[$i]."<br/>;
    $i++;
}

*/

// PERCABANGAN
/*
if (nama == "indi"){
    echo $nama."adalah orang sulawesi barat";
} else if($nama == "greshia"){
    echo $nama."berasal dari pula sulawesi";
} else {
    echo $nama."darimana ya?";
}
*/
/*
switch($nama) {
    case "indi":
        $pesan = $nama."adalah orang sulawei";
    break;
    case "rahayu":
        $pesan = $nama." berasal dari pulau bali";
    break;
    default:
        $pesan = $nama."dari mana ya?";
}

echo $pesan
*/


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
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>nama</label>
        <input type="text" nama="nama">
        <label>jumlah</label>
        <input type="text" nama="no">
        <input type="submit" nama="submit" value="submit">
    </form>
    <?php
        if(!empty($_POST['submit'])){

            switch($_POST['nama']){
                case "indi":
                    $pesan = $nama."adalah orang sulawei";
                break;
                case "rahayu":
                    $pesan = $nama." berasal dari pulau bali";
                break;
                default:
                    $pesan = $nama."dari mana ya?";
            }
            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br/>";
            }
        } else{
            echo "anda belum input nama dan jumlah";
        }
 ?>
</body>
</html>