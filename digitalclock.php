<?php 

class Clock{
	public $num;
	function set_digit($min){
		$this->num = $min; 
	}
	function get_digit(){
		if($this->num==0){
			$this->segment0();
		}
		elseif($this->num==1){
			$this->segment1();
		}
		elseif($this->num==2){
			$this->segment2();
		}
		elseif($this->num==3){
			$this->segment3();
		}
		elseif($this->num==4){
			$this->segment4();
		}
		elseif($this->num==5){
			$this->segment5();
		}
		elseif($this->num==6){
			$this->segment6();
		}
		elseif($this->num==7){
			$this->segment7();
		}
		elseif($this->num==8){
			$this->segment8();
		}
		else{
			$this->segment9();
		}
	}
	function segment1(){
		echo '<div class="lin1" style="opacity:0.1"></div>';
		echo '<div class="column lin2" style="opacity:0.1"></div>';
		echo '<div class="lin3"></div>';
		echo '<div class="lin4" style="opacity:0.1"></div>';
		echo '<div class="lin4-1" style="opacity:0.1"></div>';
		echo '<div class="column lin5" style="opacity:0.1"></div>';
		echo '<div class="lin6"></div>';
		echo '<div class="lin7" style="opacity:0.1"></div>';
	}

	function segment2(){
		echo '<div class="lin1"></div>';
		echo '<div class="column lin2" style="opacity:0.1"></div>';
		echo '<div class="lin3"></div>';
		echo '<div class="lin4"></div>';
		echo '<div class="lin4-1"></div>';
		echo '<div class="column lin5"></div>';
		echo '<div class="lin6" style="opacity:0.1"></div>';
		echo '<div class="lin7"></div>';
	}

	function segment3(){
		echo '<div class="lin1"></div>';
		echo '<div class="column lin2" style="opacity:0.1"></div>';
		echo '<div class="lin3"></div>';
		echo '<div class="lin4"></div>';
		echo '<div class="lin4-1"></div>';
		echo '<div class="column lin5" style="opacity:0.1"></div>';
		echo '<div class="lin6"></div>';
		echo '<div class="lin7"></div>';
	}

	function segment4(){
		echo '<div class="lin1" style="opacity:0.1"></div>';
		echo '<div class="column lin2"></div>';
		echo '<div class="lin3"></div>';
		echo '<div class="lin4"></div>';
		echo '<div class="lin4-1"></div>';
		echo '<div class="column lin5" style="opacity:0.1"></div>';
		echo '<div class="lin6"></div>';
		echo '<div class="lin7"style="opacity:0.1"></div>';
	}

	function segment5(){
		echo '<div class="lin1"></div>';
		echo '<div class="column lin2"></div>';
		echo '<div class="lin3" style="opacity:0.1"></div>';
		echo '<div class="lin4"></div>';
		echo '<div class="lin4-1"></div>';
		echo '<div class="column lin5" style="opacity:0.1"></div>';
		echo '<div class="lin6"></div>';
		echo '<div class="lin7"></div>';
	}

	function segment6(){
		echo '<div class="lin1"></div>';
		echo '<div class="column lin2"></div>';
		echo '<div class="lin3" style="opacity:0.1"></div>';
		echo '<div class="lin4"></div>';
		echo '<div class="lin4-1"></div>';
		echo '<div class="column lin5"></div>';
		echo '<div class="lin6"></div>';
		echo '<div class="lin7"></div>';
	}
	function segment7(){
		echo '<div class="lin1"></div>';
		echo '<div class="column lin2" style="opacity:0.1"></div>';
		echo '<div class="lin3"></div>';
		echo '<div class="lin4" style="opacity:0.1"></div>';
		echo '<div class="lin4-1" style="opacity:0.1"></div>';
		echo '<div class="column lin5" style="opacity:0.1"></div>';
		echo '<div class="lin6"></div>';
		echo '<div class="lin7" style="opacity:0.1"></div>';
	}

	function segment8(){
		echo '<div class="lin1"></div>';
		echo '<div class="column lin2"></div>';
		echo '<div class="lin3"></div>';
		echo '<div class="lin4"></div>';
		echo '<div class="lin4-1"></div>';
		echo '<div class="column lin5"></div>';
		echo '<div class="lin6"></div>';
		echo '<div class="lin7"></div>';
	}

	function segment9(){
		echo '<div class="lin1"></div>';
		echo '<div class="column lin2"></div>';
		echo '<div class="lin3"></div>';
		echo '<div class="lin4"></div>';
		echo '<div class="lin4-1"></div>';
		echo '<div class="column lin5" style="opacity:0.1"></div>';
		echo '<div class="lin6"></div>';
		echo '<div class="lin7"></div>';
	}

	function segment0(){
		echo '<div class="lin1"></div>';
		echo '<div class="column lin2"></div>';
		echo '<div class="lin3"></div>';
		echo '<div class="lin4" style="opacity:0.1"></div>';
		echo '<div class="lin4-1" style="opacity:0.1"></div>';
		echo '<div class="column lin5"></div>';
		echo '<div class="lin6"></div>';
		echo '<div class="lin7"></div>';
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
	@keyframes fade{
		0%{
			opacity: 0.1;
		}
		100%{
			opacity: 1;
		}
	}
	body{
		background: #2980B9;
		height: auto;
		background: -webkit-linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9);  
		background: linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9)
	}
	.column {
	  float: left;
	  width: 15%;
	}
	.col1{
		float: left;
		width: 5%;
	}
	.col2{
		float: left;
		width: 33%;
	}
	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}
	.text{
		font-family: 'Roboto', sans-serif;
		font-size: 32px;
		color:#00537F;
		text-transform:uppercase;
	}
	.glass{
		padding: 20px 20px 20px 20px;
		background: rgba( 255, 255, 255, 0.20 );
		box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
		backdrop-filter: blur( 3.0px );
		-webkit-backdrop-filter: blur( 3.0px );
		border-radius: 10px;
		top:50%;
		left: 50%;
		position: absolute;
	    margin-right: -50%;
    	transform: translate(-50%, -50%);
		width: 70%;
		min-height: 300px;
	}
	.lin1{
		border-top: 15px solid #00537F;
		border-left: 10px solid transparent;
		border-right: 10px solid transparent;
		height: 0;
		width: 100px;
		/*top right bottom left*/
		margin: 5px 0px 0px 10px; 

	}
	.lin2{
		border-left: 15px solid #00537F;
		border-top: 15px solid transparent;
		border-bottom: 5px solid transparent;
		height: 100px;
		width: 0;
		/*top right bottom left*/
		margin: -10px 0px 0px 5px; 
	}

	.lin3{
		border-right: 15px solid #00537F;
		border-top: 15px solid transparent;
		border-bottom: 15px solid transparent;
		height: 100px;
		width: 0;
		/*top right bottom left*/
		margin: -10px 0px 0px 120px; 
	}
	.lin4{
		/*top right bottom left*/
		margin: -10px 0px 0px 7px; 
		border-bottom: 7.5px solid #00537F;
		border-left: 10px solid transparent;
		border-right: 10px solid transparent;
		height: 0;
		width: 100px;

	}
	.lin4-1{
		/*top right bottom left*/
		margin: 0px 0px 0px 7px; 
		border-top: 7.5px solid #00537F;
		border-left: 10px solid transparent;
		border-right: 10px solid transparent;
		height: 0;
		width: 100px;
	}

	.lin5{

		/*top right bottom left*/
		margin: 0px 0px 0px 5px; 
		border-left: 15px solid #00537F;
		border-top: 15px solid transparent;
		border-bottom: 5px solid transparent;
		height: 100px;
		width: 0;

	}
	.lin6{
		/*top right bottom left*/
		margin: 0px 0px 0px 120px; 
		
		border-right: 15px solid #00537F;
		border-top: 15px solid transparent;
		border-bottom: 5px solid transparent;
		height: 100px;
		width: 0;
	}
	.lin7{
		/*top right bottom left*/
		margin: 0px 0px 0px 8px;
		border-bottom: 15px solid #00537F;
		border-left: 10px solid transparent;
		border-right: 10px solid transparent;
		height: 0;
		width: 100px;
	}
	</style>
</head>
<body>
<div id="time">
<div class="glass">

<?php 
date_default_timezone_set("Asia/Manila");

$mins0 = new Clock();
$mins1 = new Clock();
$secs0 = new Clock();
$secs1 = new Clock();
$hours0 = new Clock();
$hours1 = new Clock();

$secs0->set_digit(date("s")[0]);
$secs1->set_digit(date("s")[1]);
$mins0->set_digit(date("i")[0]);
$mins1->set_digit(date("i")[1]);
$hours1->set_digit(date("h")[1]);
$hours0->set_digit(date("h")[0]);


echo '<div class="row"><div class="column">';
$hours0->get_digit();
echo '</div><div class="column">';
$hours1->get_digit();

echo '</div><div class="col1" style="font-size:200px;color:#00537F;">:';

echo '</div><div class="column">';
$mins0->get_digit();

echo '</div><div class="column">';
$mins1->get_digit();

echo '</div><div class="col1" style="font-size:200px;color:#00537F;">:';

echo '</div><div class="column">';
$secs0->get_digit();

echo '</div><div class="column">';
$secs1->get_digit();
echo '</div></div>';
?>

	<div class="row">
		<div class="col2" style="text-align:left">
			<sapn class="text">
				<?php echo date('l') ?>
			</span>
		</div>
		<div class="col2" style="text-align:center">
			<span class="text">
				<?php echo date('M j, Y'); ?>
			</span>
		</div>
		<div class="col2" style="text-align:right">
			<sapn class="text">
				<?php echo date('A') ?>
			</span>
		</div>
	</div>
	</div>
	</div>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

<script>
$(document).ready(function() {
  $.ajaxSetup({ cache: false }); 
  setInterval(function() {
    $('#time').load('Activity1-6MODELING-REYES.php');
  }, 1000); 
});
</script>
</html>
