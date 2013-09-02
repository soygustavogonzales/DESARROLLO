!function(window,undefined) {
	function Extends(){
		function comparar(o1,o2){
			//console.log("comparando : "+JSON.stringify(o1)+" con\n"+JSON.stringify(o2));
			var oMa=o1,oMe=o2,oMa_oMe,oMe_oMa,dif,sim=[];
			if(!(Object.keys(o1).length==Math.max(Object.keys(o1).length,Object.keys(o2).length))){
				oMa=o2;
				oMe=o1;
			}
			oMa_oMe=Object.keys(oMa);
			oMe_oMa=Object.keys(oMe);
			for (var i = 0,elem,longi=Object.keys(oMa).length; i < longi; i++) {
				elem=Object.keys(oMa)[i];
					if(oMe[elem]){
						oMa_oMe.splice(oMa_oMe.indexOf(elem),1);//quito del array con mayor elementos los items que son similares.
						oMe_oMa.splice(oMe_oMa.indexOf(elem),1);//quito del array con menor elementos los items que son repetidos.
						sim.push(elem);//en el array similares inserto el item que esta presente en los dos objetos
					}
			};
				dif=oMa_oMe.concat(oMe_oMa);//dif es un array que contendra la concatenacion de los arrays que contienen a los elementos distintos en ambos objetos.
			return {//retorno un objeto literal o Json
				diferentes:dif,
				similares:sim,
			};
		}
		var l=arguments.length;
		var ul,pul,o,s,d,obj={};
		for(var j=l-1;j>=1;j--){
			ul=arguments[j];//ultimo objeto
			pul=arguments[j-1];//penultimo objeto
			//console.log(ul);
			//console.log(pul);
			o=comparar(obj,ul);
			//console.log("resultado de comparacion: "+JSON.stringify(o));
			s=o.similares;//s es un array
			d=o.diferentes;//d es un array
			for(var i=0,dl=d.length;i<dl;i++){//propiedades diferentes
				obj[d[i]]=ul[d[i]]||obj[d[i]];
			}
			for(var i=0,sl=s.length;i<sl;i++){
				if(typeof(obj[s[i]])=="object"){
					//console.warn(JSON.stringify(obj[s[i]]) +" es un objeto");
					obj[s[i]]=arguments.callee(ul[s[i]],obj[s[i]]);
				}else{
					obj[s[i]]=obj[s[i]];	
				}
				//obj[s[i]]=(typeof(obj[s[i]])=="object")?arguments.callee(obj[s[i]],ul[s[i]]):obj[s[i]];
			}
		}//end for
		return obj;
	}
	window.Extends=Extends;
}(window,undefined);