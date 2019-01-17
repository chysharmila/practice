<?php
$servername ="localhost";
$username ="sharmila";
$password ="dell";
$dbname ="merosathi";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("Connection Problem:".$conn->connect_error);
}
$sql ="SELECT *FROM registers";
$result =$conn->query($sql);

?>
<?php include('header.php')?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead class="thead-dark">
					<th>ID</th>
					<th>Name</th>
					<th>Address</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Message</th>
					
				</thead>
				<tbody>
					<?php
					if($result->num_rows>0)
					{
						while ($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>".$row["id"]."</td>";
							echo "<td>".$row["name"]."</td>";
							echo "<td>".$row["address"]."</td>";
							echo "<td>".$row["Email"]."</td>";
							echo "<td>".$row["contact"]."</td>";
							echo "<td>".$row["message"]."</td>";
							echo "</tr>";
						}
					}
					?>
				</tbody>
				
			</table>
			
		</div>
		
	</div>
	
</div>
<?php include('footer.php') ?>