<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','ak');
$i=1;
$res=mysqli_query($con,"select * from reg where `id`='" . $_GET['id'] . "'");
if(mysqli_num_rows($res)>0){
	$html='<style>
		.table{
			border-collapse: collapse;
			width:100%;
		} 
		td,th{
			border: 1px solid #000;
			padding: 0.5rem;
			text-align: center;
			font-size: 1rem;
		}
		h5,h4,h2{
			text-align: center;
		}
		</style>
		<h5>M.S.P., Mandal&apos;s</h5>
		<h2>Deogiri College, Aurangabad</h2>
		<h4>Event Registration Report</h4>
		<table class="table">';
		$html.='<tr><th>Sr.No.</th><th>Name</th><th>Email</th><th>Phone Number</th><th>PRN Number</th><th>Class</th><th>Year</th></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$i++.'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['number'].'</td><td>'.$row['prn'].'</td><td>'.$row['class'].'</td><td>'.$row['year'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file= time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>
