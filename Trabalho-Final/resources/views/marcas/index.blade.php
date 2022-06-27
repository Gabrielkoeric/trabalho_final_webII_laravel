<x-layout title="Marcas">
    <a href="/5%20semestre/Laravel/Trabalho-Final/public/home" class="btn btn-dark mb-2">Home</a>
    <a href="/5%20semestre/Laravel/Trabalho-Final/public/marca/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($marcas as $marca)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$marca->marcas_nome}}
                @csrf
                <form action="{{route('marca.destroy', $marca->id)}}" method="get">
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>
