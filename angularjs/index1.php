<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Learning AngularJS</title>
		<meta name="Generator" content="EditPlus">
		<meta name="Author" content="">
		<meta name="Keywords" content="">
		<meta name="Description" content="">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!-- <script src="js/angular.min.js" type="text/javascript"></script> -->
		<script>
			var app=angular.module('myapp',[]);
			app.controller('mycontroller',function ($scope,$http) {
				$scope.formData = {};
				$scope.formData.user_name='';
				$scope.formData.email_address='';
				$scope.SaveData=function() {
					//alert($scope.user_name);
					if($scope.user_name!='' && $scope.email_address!='') {
						//alert($scope.formData.user_name);
						//$http.get('api/index.php?name='+$scope.user_name+'&email='+$scope.email_address).success(function(data) {
						//$http.post('api/index.php',params:{ name:$scope.user_name,email:$scope.email_address } {
						$http({
							url: 'api/index.php',
							method: "put",
							//data    : $.param($scope.formData),
							data    :{ name:$scope.formData.user_name,email:$scope.formData.email_address },
							//headers: {'Content-Type': 'application/x-www-form-urlencoded'}
						}).success(function(data) {
							//console.log(data);
							alert(data);
							if(data!='Email Address Already Exists.') {
								$scope.formData.user_name='';
								$scope.formData.email_address='';
							}
						}).error(function() {
							alert('Error ');
						});
					} else {
						alert('Please fill all information.')
					}
					
				}
			});
		</script>
		<style>
			.space{padding:10px 0px;}
		</style>
	</head>
	<body ng-app="myapp" ng-controller='mycontroller'>
		<form ng-submit="SaveData()" name="formexample" >
			<div class='space'>Name : <input type="text" ng-model='formData.user_name' /></div>
			<div class='space'>Email Address : <input type="email" ng-model='formData.email_address' /></div>
			<button>Submit</button>
		</form>
	</body>
</html>
