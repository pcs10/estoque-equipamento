<div class="input-field">
  <input type="text" name="serial" value="{{isset($registro->serial) ? $registro->serial : ''}}">
  <br>
  <label>Serial</label>
</div>

<div class="input-field">
  <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
  <br>
  <label>Descricao</label>
</div>

<div class="input-field">
  <input type="text" name="aquisicao" value="{{isset($registro->aquisicao) ? $registro->aquisicao : ''}}">
  <br>
  <label>Aquisicao</label>
</div>

<div class="input-field">
  <label>
    <input type="checkbox" id="test5" class="filled-in" name="fl_disponivel" {{isset($registro->fl_disponivel) &&
    $registro->fl_disponivel == 'sim' ? 'checked' : '' }} value="true" />
    <span for="test5">Disponivel?</span>
  </label>
  <br><br>
</div>


@if(@isset($registrosTe))
  <label>Tipo Equipamento</label>
  <select required="required" class="browser-default" name="nome">
    @foreach ($registrosTe as $te)
      @if($te->id == $registro['id_tipo_equipamento'])
        <option selected value="{{ $te->id }}">{{ $te->nome }}</option>
      @else
        <option value="{{ $te->id }}">{{ $te->nome }}</option>
      @endif
    @endforeach
  </select>
@else
  <label>Tipo Equipamento</label>
  <select required="required" class="browser-default" name="nome">
    @foreach ($registros as $te)
      <option value="{{ $te->id }}">{{ $te->nome }}</option>
    @endforeach
  </select>
@endif