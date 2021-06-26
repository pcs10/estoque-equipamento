@extends('layout.site')

@section('titulo','TiposEquipamentos')

<!--@section('conteudo')
  é como se fosse o valor da variavel @yield('conteudo')
Variavel que permite inserir coisas no meio da pagina em
outras paginas blade.php
Delimitei o inicio e fim da section-->

@section('conteudo')
<div class="container">
  <h3 class="center">Tipos Equipamentos</h3>
  <div class="row">
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
        </tr>
      </thead>
      <tbody>
        @foreach($registros as $registro)
        <tr>
          <td>{{ $registro->id }}</td>
          <td>{{ $registro->nome }}</td>
          <td>
            <a class="btn deep-orange" href="{{ route('admin.tipos-equipamentos.editar',$registro->id) }}">Editar</a>
            <a class="btn red" href="{{ route('admin.tipos-equipamentos.deletar',$registro->id) }}">Deletar</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="row">
    <a class="btn blue" href="{{ route('admin.tipos-equipamentos.adicionar') }}">Adicionar</a>

  </div>

</div>




@endsection