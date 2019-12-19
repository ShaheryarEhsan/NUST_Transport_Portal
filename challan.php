<?php include 'connection.php'; ?>
<?php
session_start();    

if(isset($_SESSION['email'])){

    $em = $_SESSION["email"];
    $query1 = "SELECT * FROM `challaan` WHERE `email` LIKE '$em'";
    $info = mysqli_query($mysqli, $query1);
    while($row = mysqli_fetch_array($info)) {
        $month = $row['month'];
        $fee = $row['fee'];
    }

    $query = "SELECT * FROM `users` WHERE `email` LIKE '$em'";
    $select_data = mysqli_query($mysqli,$query);

    while($row = mysqli_fetch_array($select_data)) {
        $fn = $row["firstName"];
        $ln = $row["lastName"];
        $phone = $row["phone"];
        $cms = $row["cms"];
        $em = $row["email"];
        $add = $row['address'];
    }
}


?>

<html>
<head>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!------ Include the above in your HEAD tag ---------->


<style>

	.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
</head>

<body>
    <div class="container no-print" style="position: relative; top: 5%; left: -5%;">
        <a href='profilepage.php'><i class='fa fa-2x fa-arrow-left' style="color: black" aria-hidden='true'></i></a>
    </div>
<div class="container" style="position: relative;">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>NUST Transport Fee</h2><h3 class="pull-right">Month: <?php echo $month; ?> </h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					<?php echo $fn." ".$ln; ?> <br>
    					<?php echo $add; ?><br>
    				</address>
    			</div>
    			
    		</div>

    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Address</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Pending Dues</strong></td>
        							<td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td><?php echo $add; ?></td>
    								<td class="text-center"><?php echo $fee; ?></td>
    								<td class="text-center">1</td>
    								<td class="text-right"><?php echo $fee; ?></td>
    							</tr>
                             
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right"><?php echo $fee; ?></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Discount</strong></td>
    								<td class="no-line text-right">0</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right"><?php echo $fee; ?></td>
    							</tr>
    						</tbody>
    					</table>
    					<input class="no-print" type="button" value="Print" onclick="window.print()" /> 
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
</body>
</html>