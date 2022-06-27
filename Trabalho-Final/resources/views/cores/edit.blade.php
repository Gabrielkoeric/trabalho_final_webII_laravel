<x-layout title="Editar Cor {{$id->cores_nome}}">
    <x-formulario.forms action="{{route('cor.update')}}" :id="$id->cores_nome"></x-formulario.forms>
</x-layout>
