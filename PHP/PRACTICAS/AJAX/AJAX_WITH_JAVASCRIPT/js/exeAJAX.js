/*
	Esta libreria fue creada con OOP para el mejor manejo de
	los metodos de AJAX.

	Autor: Gustavo Gonzales Davalos
	Twitter: @gagdgonda
	mail: gustavo.gonda@gmail.com
*/
!function(){

			var exeAJAX=function(){
						this.req=null;
						this.rpta=null;
			}
			exeAJAX.prototype={
				statusRequest:{
					UNINITIALIZED:0,//objeto creado,pero no se ha invocado al objeto open
					LOADING:1,//Canrgando(objeto creado, pero no se ha invocado al metodo send)
					LOADED:2,//Cargado(se ha invocado al metodo send, pero el servidor aun no ha respondido)
					INTERACTIVE:3,//Interactivo(se han recibido algunos datos, aunque no se puede emplear la propiedad responseText)
					COMPLETE:4,//Completo(se han recibido todos los datos de la respuesta del servidor)
				}
				,statusServer:{
					CORRECT:[0,200],//Respuesta correcta
					NO_FIND:404,//No encontrado
					ERROR_SERVER:500,//Error de servidor
				}
				,Init: function(){
					var self=this;
					request = new XMLHttpRequest() || new ActiveXObject('Microsoft.XMLHTTP');
					return request;
				}
				,Pedir:function(options){
						if(typeof(options)=="object"){
							var defaults ={
								method:'GET'
								,pathFile:null
								,queryString:null
								,asincronus:true
								,fallback:null//is a function(){}
								,callback:function(request){
									alert(request.responseText);
								}
								,contentType:"application/x-www-form-urlencoded"
								
							}
							options=Extends(defaults,options);
							this.options=options;//las options es el namespace que contiene a los atributos que pueden ser pasados como parametros.
							this.options.fallback();//ejecutando el fallback()
							console.log(this.options);

						}else{
							console.error("parametros incorrectos, debe ser un objeto JSON");
						}
					var self=this;
					var method=this.options.method,
					pathFile=this.options.pathFile,
					asincronus=this.options.asincronus,
					queryString=this.options.queryString,
					contentType=this.options.contentType,
					callback=this.options.callback;
					console.log(
						"method: "+method
						+"\npathFile: "+pathFile
						+"\nasincronus: "+this.options.asincronus
						+"\nqueryString: "+queryString
						+"\ncontentType: "+contentType
						+"\ncallback: "+callback
					);

					//queryString= (queryString==undefined)?null:queryString;
					if(queryString==undefined){
						queryString=null;

					}else if(typeof(queryString)=="object"){
						var cad="";
						for(key in queryString){
								cad=cad+((cad)?"&":"")+key+"="+encodeURIComponent(queryString[key]);
						}
						cad=cad+"&nocache=" + Math.random();
						queryString=cad;
					}else{
							console.error("queryString deve ser un objeto JSON");
					}
					/*
						:(typeof(queryString)=="object")?
						!function(p){
							var cad="";
							for(key in p){
								cad=cad+((cad)?"&":"")+key+"="+encodeURIComponent(p[key]);
							}
							return cad;
						}(queryString)
						:!function(){
							console.error("queryString deve ser un objeto JSON");
							return null;
						}();
					*/
					console.log("queryString : "+queryString);
					this.req=this.Init();
					if(this.req){
						try{
							this.req.open(method,pathFile,asincronus);
							if(contentType){
								this.req.setRequestHeader("Content-type",contentType);
							}
							this.req.send(queryString);
								this.req.addEventListener('readystatechange',
									function(){
										self.Execute();
										//self.rpta = self.Execute();
										//console.log(self.rpta);
									}
								,false);
							//return this.rpta;
						}catch(error){
							console.log("error: "+error.message);
						}
					}else{
						console.error("Tu navegador no da soporte a AJAX, cambiate a uno nuevo!!!");
					}
				}
				,Execute:function(){
					var request=this.req;
					console.log(request.readyState);
					//console.log(document.readyState);
					if(request.readyState==this.statusRequest.COMPLETE){
						if(request.status==this.statusServer.CORRECT[0] || request.status==this.statusServer.CORRECT[1]){
							this.options.callback(request);
							//return this.options.callback(request);
						}else{
							this.defaulError();
						}
					}
				}
				,defaultError:function(){
					console.log(
						"Error al traer los datos"
						+"\n\nreadyState: "+this.req.readyState
						+"\nstatus: "+this.req.status
						+"\nheaders: "+this.req.getAllResponseHeaders()
					);
				}
			}//end class
			window.exeAJAX=exeAJAX;
}();