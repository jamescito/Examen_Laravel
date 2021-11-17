@extends('layouts.plantillabase')

@section('contenido')
<a href="compras/create" class="btn btn-primary">CREAR</a>

<label id="dato"></label>
<table class="table table-dark table-striped mt-4">
<thead>
     <tr>
     <th>id</th>
     <th>producto</th>
     <th>precio</th>
     <th>Cantidad</th>
     <th></th>

     </tr> 
 </thead>
<tbody>
@foreach($compras as $compra)
<tr>

<td>{{$compra->id}}</td>
<td>{{$compra->producto}}</td>
<td>{{$compra->precio}}</td>
<td>{{$compra->cantidad}}</td>

 <td><div class="btn-group" role="group" aria-label="Basic example">
  
  
</div></td>
 <td>
 <form action="{{route('compras.destroy',$compra->id)}}" method="post">
 @csrf
@method('DELETE')
 <a href="/compras/{{ $compra->id }}/edit" class="btn btn-info">Editar</a>\
<button type="submit" class="btn btn-danger">Eliminar</button>
<button onclick="pasar('{{$compra->descripcion}}')" class="btn btn-primary">ejemplo</button>
 </form>
</td>

</tr>
@endforeach




<script>



function pasar(codigo) {
    var ob=codigo;
    var mostrar= document.getElementById('dato');

    mostrar.innerHTML=ob;
}
</script>








</tbody>
</table>
@endsection