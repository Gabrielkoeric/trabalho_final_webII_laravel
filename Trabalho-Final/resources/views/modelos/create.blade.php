<x-layout title="Novo Modelo">
    <form action="/5%20semestre/Laravel/Trabalho-Final/public/modelo/salvar" method="get">
        @csrf
        <div class="mb-3">
            <label for="nome" class=form-label>Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="/5%20semestre/Laravel/Trabalho-Final/public/modelo" class="btn btn-primary">Cancelar</a>
    </form>
</x-layout>
