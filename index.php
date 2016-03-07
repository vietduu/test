<!DOCTYPE html>
<html lang="en">
	<head>
		<title>QA Test</title>
		<link rel="stylesheet" href="/public/main.css">
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	</head>
	<body>
		<div id="part1">
			<?php echo "My name is Viet Duu" . PHP_EOL; ?>
		</div>

		<div id="part2" data-ng-app="part2" data-ng-controller="part2-controller">
			<p>Please insert the number to sum up: </p>
			<input type="text" data-ng-model="length">
			<p>Result: {{sum()}}</p>
		</div>

		<div id="header">
			<h1>Lazada</h1>
		</div>
		<div id="sidebar">
			<ul>
				<li>Vietnam</li>
				<li>Thailand</li>
				<li>Indonesia</li>
				<li>Singapore</li>
				<li>Philippine</li>
				<li>Malaysia</li>
			</ul>
		</div>
		<div id="main-content">
			<h1>About Lazada</h1>
			<div>
				<span>Southeast Asia's No. 1 Online Shopping and Selling Destination</span>
			</div>
			<div>
				<span>Operationally launched in March 2012, Lazada is Southeast Asia's number one online shopping and selling destination, with presence in Indonesia, Malaysia, Philippines, Singapore, Thailand and Vietnam. Lazada also has offices in HongKong, Korea, UK and Russia.</span>
			</div>
			<div>
				<span>Pioneer eCommerce in the region, Lazada provides customers with an effortless shopping experience with mobile and web access, multiple payment methods including cash-on-delivery, extensive customer care and free returns, and retailers with simple and direct access to approximately 550 million consumers in six countries through one retail channel. Lazada features an extensive product offering in categories ranging from consumer electronics to household goods and fashion.</span>
			</div>
		</div>
		<div id="footer">
			<span>Copyright &copy; Lazada.com</span>
		</div>
		<script>
			var part2 = angular.module("part2",[]);
			
			part2.controller("part2-controller", function($scope){
				$("#part2 input").on("change", function(){
					if (isNaN(parseInt($scope.length)) && $("#validation").length == 0){
					$("#part2").append("<span id='validation'>*The data is not integer</span>");
					} else if (parseInt($scope.length) < 0 && $("#positive-validation").length == 0){
					$("#part2").append("<span id='positive-validation'>*The data should be positive</span>");
					} else if (!isNaN(parseInt($scope.length)) && parseInt($scope.length) >= 0){
						$("#validation").remove();
						$("#positive-validation").remove();
					}
				});
				$scope.length = 1000;
				$scope.sum = function(){
					var idx = 1;
					var sum = 0;
					while (idx <= $scope.length){
						sum += idx;
						idx++;
					}
					return sum;
				};
			});
		</script>
	</body>
</html>
