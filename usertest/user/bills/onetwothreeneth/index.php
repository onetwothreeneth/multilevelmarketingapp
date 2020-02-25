<!doctype html>
<html class="no-js " lang="en"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

	<title>Pay Bills & Payment</title>
	<!-- Favicon-->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../../../assets/plugins/bootstrap/css/bootstrap.min.css">
	<link href="../../../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
	<link href="../../../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
	<!-- Custom Css -->
	<link rel="stylesheet" href="../../../assets/css/main.css">
	<link rel="stylesheet" href="../../../assets/css/color_skins.css">
</head>
<body class="theme-cyan" ng-app="app" ng-controller="app" >
 	<div class="row">
 		<div class="col-md-12 col-lg-12">
 			<img src="https://www.bpiexpressonline.com/media/uploads/5a4f0e35d68e5_496_BPI_EOL_Inside_Banner_Personal-Banking_BillsPayment_FA.jpg" width="100%">

 			<br><br>
 			<br><br>
 			<div style="padding-left:10%; padding-right: 10%;" >
 				<h5>Choose Billers</h5> 
 				<hr><br>
 			</div>
 			<div style="padding-left:10%; padding-right: 10%;" class="col-md-12 col-lg-12">
 				<div class="row"> 
 					<div class="col-md-2" ng-repeat="x in bills">
 						<img src="paybills/{{ x.img }}" width="100%">
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<br><br><br>
 	<hr>
 	<center><small>LML BILLS & PAYMENT FACILITY &copy 2018</small></center>
 	<br><br>
	<style type="text/css">
		::-webkit-scrollbar{
			display: none;
		}
		.sidebar{
			background-color: white;
		}
		xbody{
			background-color:#ecebeb;
		}
		.navbar{
			background-color:#13aabb;
		}
	</style>   
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script type="text/javascript">
		angular.module("app",[]).controller("app",function($scope){
			$scope.bills = [{"type":"Utilities","img":"CIGNAL.png","title":"CIGNAL"},{"type":"Utilities","img":"COTABATO-LIGHT.png","title":"COTABATO LIGHT"},{"type":"Utilities","img":"DAVAO-LIGHT.png","title":"DAVAO LIGHT"},{"type":"Utilities","img":"LAGUNA-WATER.png","title":"LAGUNA WATER"},{"type":"Utilities","img":"MAYNILAD.png","title":"MAYNILAD"},{"type":"Utilities","img":"MERALCO.png","title":"MERALCO"},{"type":"Utilities","img":"SUBIC-ENERZONE.png","title":"SUBIC ENERZONE"},{"type":"Utilities","img":"SONY-LIFE.png","title":"SONY LIFE"},{"type":"Telecom","img":"ABS-CBN-MOBILE.png","title":"ABS-CBN MOBILE"},{"type":"Telecom","img":"GLOBE.png","title":"GLOBE"},{"type":"Telecom","img":"GLOBE_.png","title":"GLOBE Broadband"},{"type":"Telecom","img":"SMART.png","title":"Smart Broadband"},{"type":"Telecom","img":"SUN.png","title":"SUN Cellular"},{"type":"Telecom","img":"SKY.png","title":"SKY Broadband"},{"type":"Credit Cards","img":"RCBC-BANKARD.png","title":"RCBC BANKARD"},{"type":"Credit Cards","img":"EQUICOM.png","title":"EQUICOM"},{"type":"Credit Cards","img":"FINASWIDE.png","title":"FINASWIDE"},{"type":"Credit Cards","img":"FIRST-ADVANCE_.png","title":"FIRST ADVANCE"},{"type":"Credit Cards","img":"GLOBAL-DOMINION.png","title":"GLOBAL DOMINION"},{"type":"Credit Cards","img":"TANAY-R-BANK.png","title":"TANAY R BANK"},{"type":"Cable & Internet","img":"GLOBAL-DESTINY.png","title":"GLOBAL DESTINY"},{"type":"Cable & Internet","img":"BAYAN.png","title":"Bayan Tel"},{"type":"Cable & Internet","img":"SKY_.png","title":"SKY Cable"},{"type":"Cable & Internet","img":"PLDT.png","title":"PLDT"},{"type":"Cable & Internet","img":"PLDT_.png","title":"PLDT ULTERA"},{"type":"Government Services","img":"NBI.png","title":"NBI"},{"type":"Government Services","img":"NSO.png","title":"NSO"},{"type":"Government Services","img":"UNICEF.png","title":"UNICEF"},{"type":"Government Services","img":"WORLD-VISION.png","title":"WORLD VISION"},{"type":"Toll Services","img":"sweep.png","title":"Auto Sweep RFID"},{"type":"Real Estate","img":"MANILA-M-PARK.png","title":"MANILA M PARK"},{"type":"Schools","img":"ST-THERES.png","title":"ST THERESE"},{"type":"Insurance","img":"CARITAS.png","title":"Caritas Financial"},{"type":"Insurance","img":"FORTUNE.png","title":"FORTUNE CARE"},{"type":"Insurance","img":"CARITAS-B.png","title":"Caritas"},{"type":"Insurance","img":"ETERNAL-PLANS.png","title":"ETERNAL PLANS"},{"type":"Insurance","img":"LOYOLA.png","title":"LOYOLA"},{"type":"Insurance","img":"MANULIFE.png","title":"MANULIFE Financial Plans"},{"type":"Insurance","img":"MANULIFE_.png","title":"MANULIFE"},{"type":"Insurance","img":"MANULIFE-CHINA.png","title":"MANULIFE CHINA"},{"type":"Insurance","img":"PRUDENTIAL.png","title":"PRUDENTIAL LIFE"},{"type":"Insurance","img":"PRULIFE.png","title":"PRULIFE U.K."},{"type":"Insurance","img":"SUINLIFE_.png","title":"SUINLIFE"},{"type":"Insurance","img":"MAXICARE.png","title":"Maxicare"}];
		});
	</script>
</body> 
</html>