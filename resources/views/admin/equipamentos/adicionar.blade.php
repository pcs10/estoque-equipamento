@extends('layout.site')

{{-- 
  @section('titulo','Cursos') 
  Serve como o titulo la em cima da pagina 
--}}
@section('titulo','Equipamentos') 

@section('conteudo')
<div class="container">
  <h3 class="center">Adicionar Equipamento</h3>
  <div class="row">
    <form class="" action="{{  route('admin.equipamentos.salvar')  }}" method="post"
     enctype="multipart/form-data">
      {{ csrf_field() }}
      @include('admin.equipamentos._form')
      <button class="btn deep-orange">Salvar</button>
    </form>
  </div>
</div>
@endsection