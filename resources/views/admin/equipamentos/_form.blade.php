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
  <p>
      <input type="checkbox" id="test5" name="fl_disponivel" 
        {{isset($registro->fl_disponivel) && 
        $registro->fl_disponivel == 'sim' ? 'checked' : '' }} value="true" />
      <label for="test5">Disponivel?</label>
    </p>
    <br><br>
</div>

<div class="input-field">
  <input type="number" name="id_tipo_equipamento" 
  value="{{isset($registro->id_tipo_equipamento) ? $registro->id_tipo_equipamento : ''}}">
<br>
  <label>Id Tipo Equipamento</label>
</div>

