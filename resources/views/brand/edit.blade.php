@extends('admin/layout')

@section('content')
<h3>Edit Brand</h3>
<form action="{{route('brand.update',$brand->id)}}" method="POST">
    @method("PUT")
    @csrf
    <input class="form-control" type="text" name="description" value="{{$brand->description}}">
    <br>
    <button class="btn btn-success" type="submit">Enviar</button>
</form>
@endsection
