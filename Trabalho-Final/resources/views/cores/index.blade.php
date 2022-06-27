<x-layout title="Cores">
    <a href="{{route('home.index')}}" class="btn btn-dark mb-2">Home</a>
    <a href="{{route('cor.create')}}" class="btn btn-dark mb-2">Adicionar</a>



    <ul class="list-group">
        @foreach ($cores as $cor)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$cor->cores_nome}}
                <span class="d-flex">


                    <form action="{{route('cor.destroy', $cor->id)}}" method="get" class="ms-2">
                        @csrf
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
