@extends('layouts.__includes.basic_lay')
@section('tittle','Empresas')
@section('content')
@component('layouts.__components.top_navbar', ['tela'=>'empresas','varContent'=>$empresas])
@endcomponent('layouts.__components.top_navbar')
@endsection