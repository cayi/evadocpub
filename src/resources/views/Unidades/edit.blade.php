@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Unidades/'.$unidad->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH')}}
    @include('Unidades.form',['modo'=>'Editar'])
</form>
</div>
@endsection