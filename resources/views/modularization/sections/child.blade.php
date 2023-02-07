{{-- extends permite convertir el template en una extensión del template padre --}}
@extends('modularization.main')

{{-- declaramos un valor para las secciones del padre --}}
@section('title', 'Child template')
@section('content')
    <h3>Seccion de contenido</h3>
@endsection
