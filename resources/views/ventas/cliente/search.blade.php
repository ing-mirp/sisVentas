{!! Form::open(array('url'=>'ventas/cliente','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

<div class="from-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar por nombre o DNI ..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

{{Form::close()}}