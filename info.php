<?php
	$sql = new mysqli("localhost","root","","db_sma");
	//buat nentuin paging perhalaman, dicontoh ini limit 2, data yg ditampilin maksimal 2 ga usah paling atas dimana aja
	$start=0;
	$limit=3;

	//buat ngambil id pas pagingnya biar pindah halaman, sama kaya switch case
	$id= isset($_GET['id']) ? $_GET['id'] : null;

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$start=($id-1)*$limit;
	}
	//end copy sampe siniiii
?>
<div class="divider"></div>
	
	<div class="content">
		<div class="container">

			<div class="main-content">
				<h1>News</h1>
				<section class="posts-con">
					
					<article>
						<?php
						$index=0;

						//query ambil data tambah limit yang udah didefinisiin di atas
						$mahasiswa = $sql->query("SELECT * FROM info LIMIT $start, $limit");
						while($data = $mahasiswa->fetch_assoc()){ 
					?>
					<div>
						<br /><br />
						<h4><?php echo $data['id'];?>-<?php echo $data['judulinfo'];?></h4>
					</div>
					<div>
						<?php echo $data['tgl'];?><br />
					</div>
					<div>
						<img class="img-float" height="130px" width="110px" src="images/info/<?php echo $data['namafilefoto']; ?>">
					</div>
					<div>
						<p><?php $text = substr($data['info'],0,200).'...';
						echo $text;?></p>
						<a href="index.php?content=<?php echo "viewdetail.php&id=".$data['id']; ?>" class="btn btn-primary">View Detail</a><br /> <br />
					</div>
					
					<?php 
						}
						//buat ngitung ada berapa data di tabel 
						$mhs = $sql->query("SELECT * FROM info");
						$rows = mysqli_num_rows($mhs);
						$total=ceil($rows/$limit);
					?>
					<?php
						if($id>1) //kalo idnya lebih dari 1 bakal ada tombol previous
						{
							?>

							<a href="index.php?content=<?php echo "info.php&id=".($id-1); ?>" class="btn btn-primary">PREVIOUS</a><br /><br />
						<?php
						}
						if($id!=$total) // selama idnya ga sama dengan total semua baris tampilin tombol next
						{
							?>
							<a href="index.php?content=<?php echo "info.php&id=".($id+1); ?>" class="btn btn-primary">NEXT</a><br> <br>

							<?php
						}
						echo "<ul class='page'>";
						for($i=1;$i<=$total;$i++) //ngelooping banyaknya page
						{
							if($i==$id) { echo "<li class='btn btn-primary'><h4>".$i."</h4></li> &nbsp"; }
							else { 
								?>

								<li class="btn btn-primary"><a href="index.php?content=<?php echo "info.php&id=".$i; ?>"><h4><?php echo "$i"?></h4></a></li> &nbsp
								<?php
								}
								}	
					?>
					</article>
				</section>
			</div>
			
			<aside id="sidebar">
				<div class="widget clearfix calendar">
					<h2>Event calendar</h2>
					<div class="head">
						<a class="prev" href="#"></a>
						<a class="next" href="#"></a>
						<h4>May 2016</h4>
					</div>
					<div class="table">
						<table>
							<tr>
								<th class="col-1">Sun</th>
								<th class="col-2">Mon</th>
								<th class="col-3">Tue</th>
								<th class="col-4">Wed</th>
								<th class="col-5">Thu</th>
								<th class="col-6">Fri</th>
								<th class="col-7">Sat</th>
							</tr>
							<tr>
								<td class="col-1"><div>1</div></td>
								<td class="col-2"><div>2</div></td>
								<td class="col-3"><div>3</div></td>
								<td class="col-4"><div>4</div></td>
								<td class="col-5 archival"><div>5</div></td>
								<td class="col-6"><div>6</div></td>
								<td class="col-7"><div>7</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>8</div></td>
								<td class="col-2"><div>9</div></td>
								<td class="col-3 archival"><div>10</div></td>
								<td class="col-4"><div>11</div></td>
								<td class="col-5"><div>12</div></td>
								<td class="col-6"><div>13</div></td>
								<td class="col-7"><div>14</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>15</div></td>
								<td class="col-2 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>16</div></td>
								<td class="col-3"><div>17</div></td>
								<td class="col-4 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>18</div></td>
								<td class="col-5"><div>19</div></td>
								<td class="col-6"><div>20</div></td>
								<td class="col-7"><div>21</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>22</div></td>
								<td class="col-2"><div>23</div></td>
								<td class="col-3"><div>24</div></td>
								<td class="col-4"><div>25</div></td>
								<td class="col-5 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>26</div></td>
								<td class="col-6"><div>27</div></td>
								<td class="col-7"><div>28</div></td>
							</tr>
							<tr>
								<td class="col-1"><div>29</div></td>
								<td class="col-2 upcoming"><div><div class="tooltip"><div class="holder">
									<h4>Omnis iste natus error sit voluptatem dolor</h4>
									<p class="info-line"><span class="time">10:30 AM</span><span class="place">Lincoln High School</span></p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique.</p>
								</div></div>30</div></td>
								<td class="col-3"><div>31</div></td>
								<td class="col-4 disable"><div>1</div></td>
								<td class="col-5 disable"><div>2</div></td>
								<td class="col-6 disable"><div>3</div></td>
								<td class="col-7 disable"><div>4</div></td>
							</tr>
						</table>
					</div>
					<div class="note">
						<p class="upcoming-note">Upcoming event</p>
						<p class="archival-note">Archival event</p>
					</div>
				</div>
				
			</aside>
			<!-- / sidebar -->
	
		</div>
		<!-- / container -->
	</div>
	