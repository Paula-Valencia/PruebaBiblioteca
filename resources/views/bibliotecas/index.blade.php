@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mis Bibliotecas</h1>
    <a href="{{ route('bibliotecas.create') }}" class="btn btn-primary">Añadir Biblioteca</a>
    <ul>
        @foreach ($bibliotecas as $biblioteca)
            <li>{{ $biblioteca->nombre }} - {{ $biblioteca->ubicacion }}</li>
        @endforeach
    </ul>
</div>
@endsection

