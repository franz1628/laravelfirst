@extends('admin/layout')

@section('content')
<h3>Brand List</h3>
<hr>
<div>
    @if(session('msg'))
        {!!session('msg')!!}
    @endif
</div>
<a href="{{route('brand.create')}}" class="btn btn-warning">Add</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $key => $brand)
        <tr>
            <td>
                {{$key+1}}
            </td>
            <td>
                {{$brand->description}}

            </td>
            <td>
                <a class="btn btn-warning" href="{{ route('brand.show',$brand) }}">Show</a>
                <a class="btn btn-info" href="{{route('brand.edit',$brand)}}">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$brands->links()}}
@endsection