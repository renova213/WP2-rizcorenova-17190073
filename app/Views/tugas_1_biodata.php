<?php

$namaLengkap = "Rizco Renova";
$namaPanggilan = "Nova/Rizco";
$jurusan = "Teknologi Informasi";
$fakultas = "Teknologi & Informasi";
$kelas = "17.5A.01";
$hobi = "Game, dan membaca komik";
$status = "Jomblo";

?>
<title><?php echo "Tugas Pertemuan 1" ?></title>

<head>
	<h1 align="Center"><?php echo "Biodata Saya"; ?></h1>
</head>
<table>
	<tr>
		<td><?php echo "Nama Lengkap"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $namaLengkap ?></td>
		<td rowspan="9">
			<img src="https://upload-os-bbs.hoyolab.com/upload/2021/07/13/12484712/b0fa3d5c06050fedc173526490874220_7997301836908202150.jpg" width="200" height="300">
		</td>
	</tr>
	<tr>
		<td><?php echo "Nama Panggilan"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $namaPanggilan; ?></td>
	</tr>
	<tr>
		<td><?php echo "Jurusan"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $jurusan; ?></td>
	</tr>
	<tr>
		<td><?php echo "Fakultas"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $fakultas; ?></td>
	</tr>
	<tr>
		<td><?php echo "Kelas"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $kelas; ?></td>
	</tr>
	<tr>
		<td><?php echo "Hobi"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $hobi; ?></td>
	</tr>
	<tr>
		<td><?php echo "Status"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $status; ?></td>
	</tr>
</table>