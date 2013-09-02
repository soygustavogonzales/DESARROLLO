/*
Esta libreria fue creada segun el manual de INTRODUCCION A AJAX

*/

!function(){
	var net={};//creao un objeto literal o JSON, hara la funcion de implementar un namespace en tiempo de ejecucion.
		net.READY_STATE_UNINITIALIZED=0;
		net.READY_STATE_LOADING=1;
		net.READY_STATE_INTERACTIVE=3;
		net.READY_STATE_COMPLETE=4;
		//CONSTRUCTOR
		net.CargadorContenidos=function(url,funcion,funcionError){
			this.url=url;
			this.req=null;
			this.onload=funcion;
			this.onerror=(funcionError)? funcionError : this.defaulError;
			this.cargaContenidoXML();//se ejecuta el metodo caragaContenidoXML()
		}
		net.CargadorContenidos.prototype = {
			cargaContenidoXML : function(){
				this.req= new XMLHttpRequest|| new ActiveXObject('Microsoft.XMLHTTP');
				if(this.req){
					try{
						var self=this;
						this.req.onreadystatechange=function(){
							self.onReadyState.call(self);//igual a self.onReadyState();
						}
						this.req.open('GET',this.url,true);
						this.req.send(null);
					} catch(err){
						this.onerror.call(this);//igaul a this.onerror();
					}
				}
			},
			onReadyState:function(){
				var req=this.req;
				var ready=req.readyState;
				console.log(ready);
				console.log(document.readyState);
				if(ready==net.READY_STATE_COMPLETE){
					var httpStatus=req.status;
					if(httpStatus==200 || httpStatus==0){
						console.log(this.onload.call(this));
					}else{
						this.onerror.call(this);
					}
				}
			},
			defaulError: function(){
				alert("Se produjo un error al obtener datos"
					+"\n\nreadyState: "+this.req.readyState
					+"\nstatus: "+this.req.status
					+"\nheaders: "+this.req.getAllResponseHeaders()
				);
			}
		};//end prototye
		window.net = net;
}();