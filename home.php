<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'root'; // Password
$db_name = 'company'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT * 
		FROM pigeons';

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>


<html>
<head>
    <title>De Pitloze Duif</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<h1>Table 1</h1>
<table class="data-table">
    <caption class="title">Duiven</caption>
    <thead>
    <tr>
        <th>Nummer</th>
        <th>Eigenaar</th>
        <th>Duif</th>
        <th>Gewicht</th>
        <th>Leeftijd</th>
    </tr>
    </thead>
    <tbody>

<!--    PHP Code om ervoor te zorgen dat de DB gegevens zichtbaar worden in de tabel die hierboven is aangemaakt.-->
    <?php
    $no 	= 1;
    $total 	= 0;
    while ($row = mysqli_fetch_array($query))
    {
        $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
        echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['Eigenaar'].'</td>
					<td>'.$row['Duif'].'</td>
					<td>'.$row['Gewicht (duif)'].'</td>
					<td>'.$row['Leeftijd (duif)'].'</td>
				</tr>';
        $total += $row['amount'];
        $no++;
    }?>
    </tbody>
    <tfoot>
    <tr>

    </tr>
    </tfoot>
</table>
</body>
</html>