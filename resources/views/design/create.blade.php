@extends('admin/layout')

@section('content')

<h3>Create design</h3>

<form action="{{route('design.store')}}" method="POST">
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

    <div class="mb-3">
        <label for="idBrand" class="form-label">Brand</label>
        <select name="idBrand" id="idBrand" class="form-select">
            <option value="">SELECCIONAR</option>
            @foreach($brands as $brand)
                <option {{old('idBrand')==$brand->id?"selected":""}} value="{{$brand->id}}">{{$brand->description}}</option>
            @endforeach
        </select> 
        @error('idBrand')
        <div class="text-danger">
            {{$errors->first('idBrand')}}
        </div>
        @enderror


    </div>

    
    

    <button class="btn btn-success" type="submit">Enviar</button>
</form>
@endsection