<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','ak');
$i=1;
$res=mysqli_query($con,"select * from event where `id`='" . $_GET['id'] . "'");
if(mysqli_num_rows($res)>0){
	$html='<style>
		h2{
		
			text-align: center;
			margin:0;
		}
		h3{
			text-align: center;
			margin-top:0;
		}
		h4{
			text-align: center;
			margin: 0;
			margin-bottom: 6px;
			font-weight:600;
			font-size:1rem;
		}
		h5{
			text-align: center;
			margin:0;
			margin-top:1rem;
		}
		p{
			text-align: center;
			margin:0;
			margin-top:1rem;
		}
		img{
			width:50%;
			margin-left:11.5rem;
			margin-bottom: 1rem;
		}
		.hro{
			margin-top:0;
			margin-bottom:0px;
			height:1px;
			color:black;
			width:100%;
			border:0;
		}
		hr{
			margin-top:0;
			margin-bottom:0px;
			height:2px;
			color: #000;
			width:20%;
			border:0;
		}
		.event_name{
			margin-top:6px;
		}
		.event_main_name{
			margin:7px;
		}
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
		.hk{
			text-align:right;
		}
		.hod{
			margin-right:0.6rem;
			margin-bottom:1.6rem
		}
		</style>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='
			<h5>M.S.P., Mandal&apos;s</h5>
			<h2>Deogiri College, Aurangabad</h2>
			<h4>Department of CS, IT & Animation</h4>
			<hr class="hro">
			<h4 class="event_name">Event Name</h4>
			<hr>
			<h2 class="event_main_name">'.$row['event_name'].'</h2>
			<img class="image" src="uploaded_img/'.$row['image'].'" alt="">
			<table>
			<tr>
			<tr>
			<th>Sr No.</th>
			<th>Name of Event</th>
			<th>Date</th>
			<th>Time</th>
			<th>Venu</th>
			<th>Host</th>
			</tr>
			<tr>
			<td>'.$i++.'</td>
			<td>'.$row['event_name'].'</td>
			<td>'.$row['date'].'</td>
			<td>'.$row['time'].'</td>
			<td>Ravindranath Tagor Hall</td>
			<td>'.$row['host_name'].'</td>
			</tr>
			</table>
			<h5>About The Event</h5>
			<hr>
			<p>'.$row['description'].'</p>
			<br>
			<br>
			<h5 class="hod hk">H.O.D</h5>
			';
		}
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