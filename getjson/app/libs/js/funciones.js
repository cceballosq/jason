
	function getUserData(){
		var valor = document.getElementById("valor").value;
  $.getJSON( window.path+'index/getUserData/' + valor, function(data) {	
		$.each(data, function(key, val) {	
			id= val.user_id;
			$("#imprecion").append(val.name);	 
			});
	});
}
	
	function hola(){
		var valor = document.getElementById("valor").value;
		alert(valor);
	};
