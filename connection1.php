<?php
require 'connection.php';
$pkl = query("SELECT * FROM siswa  ");
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
    <h1>Menampilkan Data View</h1>
<table border="1">
		<tr>
			<th>id</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jurusan</th>
		</tr>
        </tr>
        <?php foreach( $pkl as $row) :?>
    </thead>
    <tbody>
		<div>
			<tr>				
				<td><?= $row["id"];?></td>
				<td><?= $row["nama"];?></td>
				<td><?= $row["kelas"];?></td>
				<td><?= $row["jurusan"];?></td>
    		</tr>
		</div>
        <?php endforeach;?>
	</table>
</body>
</html>