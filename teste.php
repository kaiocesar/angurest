<!DOCTYPE html>
<html ng-app>
<head>
	<title>Angu Rest</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.21/angular.min.js"></script>
</head>
<body>


<div class="endereco">
	<strong>{{yourName}}</strong>
</div>

<input type="text" name="yourName" ng-model="yourName" />

<script type="text/javascript">
	
	// [{"endereco":"Ruta dos Almeidas","bairro":"Aparecida","cidade":"Santos","email":"email@gmail.com"}]

</script>

</body>
</html>