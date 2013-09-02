<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href=""/>
	<script src="js/exeAJAX.js"></script>
	<script src="js/extends.js"></script>
	<script>
		var obj1={
	name:'omar',
	lastname:'gonzales',
	surname:'jesus',
	age:20,
	telefono:'94567456',
	prop1:undefined,
	prop2:'isNaN___',
	prop3:undefined,

}
var obj2={
	name:'erick',
	lastname:'gonzales',
	surname:'aldo',
	age:21,
	domicilio:'av:la paz',
	nacionalidad:'peruana',
	ocupacion:'estudiante',
}
var obj3={
	name:'carlos',
	lastname:'torres',
	surname:'segundo',
	age:25,
	domicilio:'av:dominicos',
	nacionalidad:'peruana',
}
var obj4={
	name:'maria',
	lastname:'torres',
	surname:'de los angeles',
	age:25,
	domicilio:'av:ignacio canales',
	nacionalidad:'peruana',
	estado_civil:'soltero',
}
var obj5={
	name:'antenor',
	lastname:'gonzales',
	surname:'gustavo',
	age:51,
	telefono:'984511513',
	prop1:{
		subProp1:'soy subProp1',
		subProp2:undefined,
	}
	,prop2:'NaN'
	,caracteristicas:['hermosa','saludable','alta']

}
var obj6={
	name:'gloria'
	,lastname:'davalos'
	,surname:'rosa'
	,age:48
	,prop4:'...'
	,prop1:{
		subProp1:'subProp1'
		,subProp2:'NaN'
		,subProp3:{
			subProp31:'soy subProp31'
			,subProp32:'soy subProp32'
		},
	}
	,domicilio:'av:cesar vallejo'
	,nacionalidad:'peruana'
	,prop2:undefined
	,prop3:''
}
console.log(Extends(obj6,obj5));
	</script>
</head>
<body>
	<div id="web">


	</div>
</body>
</html>

