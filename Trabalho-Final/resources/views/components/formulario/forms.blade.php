<form action="{{$action}}" method="get">
    @csrf
    <div class="mb-3">
        <label for="nome" class=form-label>Nome:</label>
        <input type="text"
               id="nome"
               name="nome"
               class="form-control" @isset($id) value="{{$id}}" @endisset>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{route('cor.index')}}" class="btn btn-primary">Cancelar</a>
</form>
