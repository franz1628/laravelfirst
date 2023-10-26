@extends('admin/layout')

@section('content')
<h3>Edit design</h3>

<div class="row">
   <div class="col-md-3">
       <form action="{{route('design.update',$design->id)}}" method="POST">
           @method("PUT")
           @csrf
           <div class="mb-3">
               <label for="description" class="form-label">Description</label>
               <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="description" value="{{$design->description}}">
       
               @error('description')
               <div class="text-danger">
                   {{$errors->first('description')}}
               </div>
               @enderror
           </div>
           <br>
           <select name="idBrand" id="" class="form-select">
               <option value="">SELECCIONAR</option>
               @foreach($brands as $brand)
                   <option {{($design->idBrand==$brand->id)?"selected":""}} value="{{$brand->id}}">{{$brand->description}}</option>
               @endforeach
           </select> 
           <br>
       
           <button class="btn btn-success" type="submit">Enviar</button>
       </form>
   </div> 
</div>
@endsection
