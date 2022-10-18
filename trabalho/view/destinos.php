<?php
require_once "../model/connect.php";

$sql = "SELECT * FROM viagens";
$result = $con->query($sql);
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
    <header>

    </header>

    <main>
<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
?>
        <div>
            <p><?=$row['destino']?></p>
        </div>
<?php
    }
}else{
    echo "Não há destinos";
}
?>
    </main>
</body>
</html>