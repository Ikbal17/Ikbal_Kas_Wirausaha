<?php
include "../koneksi.php";
include "../header.php";
?>

<?php
        $result1 = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_addmision_fee'); 
        $row = mysqli_fetch_assoc($result1); 
        $sum1 = $row['saldo'];

        // beda tabel
        $result2 = mysqli_query($conn, 'SELECT SUM(saldo) AS saldo FROM tb_money_out'); 
        $row = mysqli_fetch_assoc($result2); 
        $sum2 = $row['saldo'];
        $sum3 = $sum1-$sum2;

// chart

$dataPoints = array( 
	array("label"=>"Pemasukan", "y"=>($sum1/$sum3)*(1/100)),
	array("label"=>"Pengeluaran", "y"=>($sum2/$sum3)*(1/100)),
	array("label"=>"Total Saldo", "y"=>$sum3*(1/100))
	
)
 
?>

<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

<link rel="stylesheet" href="../style.css"><br><br>
   <div class="container pt-5">
   <div class="row pt-5">

    <div class="col-lg-4 col-md-6">
    <div class="kotak2  card shadow">
   
        <h5 class="offset-2 pt-5 fw-bold">Rp <?php echo $sum1;?></h5>
        <img class="g1" src="../image/pemasukan.png" alt="" height="100px">
        <h4>Pemasukan</h4>
</div>
    </div>

    <div class="col-lg-4 col-md-6">
    <div class="kotak3 card shadow">

    

    <h5 class="offset-2 pt-5 fw-bold">Rp <?php echo $sum2;?></h5>
        <img class="g1" src="../image/pengeluaran.png" alt="">
        <h4>Pengeluaran</h4>
    </div>
    </div>

    <div class="col-lg-4 col-md-6">
   <div class="kotak1  card shadow">
   <h5 class="offset-2 pt-5 fw-bold">Rp <?php echo $sum1 - $sum2;?></h5>
        <img class="g1" src="../image/total.png" alt="">
        <h4>Total</h4>
    </div>
   </div>

   </div>

   <div class="row">
   <div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   </div>
   </div>
<?php
include "../footer.php";
?>