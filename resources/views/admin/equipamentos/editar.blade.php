@extends('layout.site')

@section('titulo','Equipamentos')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editar Equipamento</h3>
    <div class="row">
      <form class="" action="{{  route('admin.equipamentos.atualizar', $registro->id)  }}" 
        method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.equipamentos._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>




@endsection
