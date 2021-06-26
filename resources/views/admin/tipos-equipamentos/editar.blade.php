@extends('layout.site')

@section('titulo','TiposEquipamentos')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editar Tipo Equipamento</h3>
    <div class="row">
      <form class="" action="{{  route('admin.tipos-equipamentos.atualizar', $registro->id)  }}" 
        method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.tipos-equipamentos._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>




@endsection
