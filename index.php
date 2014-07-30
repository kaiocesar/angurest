<!DOCTYPE html>
<html ng-app>
<head>
	<meta charset="utf-8">
	<title>Angu Rest</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.21/angular.min.js"></script>	
</head>
<body>

<div class="enderecamento" ng-controller="EnderecamentoController">
	<div class="endereco">
		<strong>Endereço:</strong> {{items.endereco}}<br/>
		<strong>Bairro:</strong> {{items.bairro}}<br/>
		<strong>Cidade:</strong> {{items.cidade}}<br/>
		<strong>Email:</strong> {{items.email}}<br/>
	</div>
</div>

<script type="text/javascript">
	function EnderecamentoController($scope)
	{
		$scope.items = {"endereco":"Avenida Saldanha da Gama",
						"bairro":"Embaré",
						"cidade":"Santos",
						"email":"kaio.cesar@gmail.com"};
	}
</script>

</body>
</html>