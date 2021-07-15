@extends('layout.site')

@section('titulo','Equipamentos')

<!--@section('conteudo')
  é como se fosse o valor da variavel @yield('conteudo')
Variavel que permite inserir coisas no meio da pagina em
outras paginas blade.php
Delimitei o inicio e fim da section-->

@section('conteudo')
<div class="container">
  <h3 class="center">Equipamentos</h3>
  <div class="row">
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Serial</th>
          <th>Descricao</th>
          <th>Aquisicao</th>
          <th>Disponivel</th>
          <th>Id Tipo Equip.</th>
        </tr>
      </thead>
      <tbody>
        @foreach($registros as $registro)
        <tr>
          <td>{{ $registro->id }}</td>
          <td>{{ $registro->serial }}</td>
          <td>{{ $registro->descricao }}</td>
          <td>{{ $registro->aquisicao }}</td>
          <td>{{ $registro->fl_disponivel }}</td>
          <td>{{ $registro->id_tipo_equipamento }}</td>
          <td>
            <a class="btn deep-orange" href="{{ route('admin.equipamentos.editar',$registro->id) }}">Editar</a>
            <a class="btn red" href="{{ route('admin.equipamentos.deletar',$registro->id) }}">Deletar</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="row">
    <a class="btn blue" href="{{ route('admin.equipamentos.adicionar') }}">Adicionar</a>

  </div>

</div>




@endsection