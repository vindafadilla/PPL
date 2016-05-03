<?php
$db = new mysqli("localhost","root","","db_sma");
$id=$_GET['id'];
echo $id;

$mahasiswa = $db->query("SELECT * FROM info where id='$id'");


							while ($data = $mahasiswa->fetch_assoc()) {
?>
<div class="container">
<div class="row">
<div>
						<h4><?php echo $data['id'];?>-<?php echo $data['judulinfo'];?></h4>
					</div>
					<div>
						<?php echo $data['tgl'];?><br />
						<img src="images/info/<?php echo $data['namafilefoto']; ?>"><p><?php echo $data['info'];?></p>
						
					</div>
</div>
</div>
<?php
//echo "lala";
}
?>