<?php
$db = new mysqli("localhost","root","","db_sma");
						
						$id = $_POST['id'];
						$judulinfo = $_POST['judulinfo'];
						$info = $_POST['info'];
						$tgl = $_POST['tgl'];
						$namafilefoto =$_FILES['namafilefoto']['name'];
						$namafilefototemp =$_FILES['namafilefoto']['tmp_name'];
						
						
						move_uploaded_file($namafilefototemp,"images/info/".$namafilefoto);
						$mahasiswa = $db->query("INSERT INTO info(id, judulinfo, info, tgl, namafilefoto) VALUES ('$id','$judulinfo','$info', '$tgl','$namafilefoto')");
						if ($mahasiswa) {
							echo "data berhasil dientry";
							//header('location:index.php?content=contact.php');
							echo "<h2>Your Input:</h2>";
							echo $id;
							echo "<br>";
							echo $judulinfo;
							echo "<br>";
							echo $info;
							echo "<br>";
							echo $tgl;
							echo "<br>";
							echo $namafilefoto;
							echo "<br>";
							
						}else {
							echo "gagal entry";
							echo "INSERT INTO info(id, judulinfo, info, tgl,namafilefoto) VALUES ('$id','$judulinfo','$info', '$tgl','$namafilefoto')";
							
						}
?>