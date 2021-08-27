function mostrar(){
	$.ajax({
		type:"POST",
		url:"mostrarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}

function obtenerDatos(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"obtenerDatos.php",
		success:function(r){
			r=jQuery.parseJSON(r);

			$('#id').val(r['id']);
			$('#emailu').val(r['email']);
			$('#paswordu').val(r['pasword']);
			$('#nombreu').val(r['nombre']);
			$('#apellidou').val(r['apellido']);
			$('#aliasu').val(r['alias']);
		}
	});
}

function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"actualizarDatos.php",
		data:$('#frminsertu').serialize(),
		success:function(r){
			if(r==1){
				mostrar();
				swal("actualizado con exito:",":D","success");
			}else{
				swal("Fallo la insersion:","X","error");
			}
		}
	});

	return false;
}

function eliminarDatos(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"eliminarDatos.php",
				data:"id="+ id,
				success:function(r){
					if(r==1){
						mostrar();
						swal("Eliminado con exito:",":D","info");
					}else{
						swal("Fallo la insersion:","X","error");
					}
				}
			});
		} 
	});
}


































function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"insertarDatos.php",
		data:$('#frminsert').serialize(),
		success:function(r){
			if(r==1){
				$('#frminsert')[0].reset();
				mostrar();
				swal("agregado con exito:",":D","success");
			}else{
				swal("Fallo la insersion:","X","error");
			}
		}
	});

	return false;
}