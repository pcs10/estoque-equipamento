@extends('layout.site')

<!-- @section('titulo','Cursos') 
Serve como o titulo la em cima da pagina-->
@section('titulo','TiposEquipamentos') 

@section('conteudo')
<div class="container">
  <h3 class="center">Adicionar Tipo de Equipamento</h3>
  <div class="row">
    <form class="" action="{{  route('admin.tipos-equipamentos.salvar')  }}" method="post"
     enctype="multipart/form-data">
      {{ csrf_field() }}
      @include('admin.tipos-equipamentos._form')
      <button class="btn deep-orange">Salvar</button>
    </form>
  </div>
</div>
@endsection