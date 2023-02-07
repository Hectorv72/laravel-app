{{-- extends permite convertir el template en una extensión del template padre --}}
@extends('modularization.main')

{{-- declaramos un valor para las secciones del padre --}}
@section('title', 'Ice Creams')
@section('content')
    @php
        $ice_creams = [
            [ "id" => 1, "taste" => "Banana Split" ],
            [ "id" => 2, "taste" => "Crema del Cielo" ],
            [ "id" => 3, "taste" => "Menta Granizada" ],
        ];
    @endphp

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Taste</th>
            </tr>
        </thead>
        <tbody>
            {{-- podemos recorrer una lista de elementos utilizando la directiva @foreach de blade --}}
            @foreach ($ice_creams as $ice_cream)
                @include('modularization.components.icecream_row', ["row" => $ice_cream])
            @endforeach

            {{-- tambien podemos hacer uso de la directiva @each incluyendo un template como base para cada elemento --}}
            {{-- @each('modularization.components.icecream_row', $ice_creams, 'row') --}}
        </tbody>
    </table>
@endsection
