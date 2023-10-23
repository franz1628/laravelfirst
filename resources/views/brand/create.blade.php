@extends('admin/layout')

@section('content')

<h3>Create Brand</h3>

<form action="{{route('brand.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="description" value="{{ old('description')}}">

        @error('description')
        <div class="text-danger">
            {{$errors->first('description')}}
        </div>
        @enderror


    </div>


    <button class="btn btn-success" type="submit">Enviar</button>
</form>
@endsection