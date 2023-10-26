@extends('admin/layout')

@section('content')
<h3>design List</h3>
<hr>
<div>
    @if(session('msg'))
        {!!session('msg')!!}
    @endif
</div>
<a href="{{route('design.create')}}" class="btn btn-warning">Add</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Description</th>
            <th>Brand</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($designs as $key => $design)
        <tr>
            <td>
                {{$key+1}}
            </td>
            <td>
                {{$design->description}}

            </td>
            <td>
                {{$design->brand->description}}

            </td>
            <td>
                <a class="btn btn-warning" href="{{ route('design.show',$design) }}">Show</a>
                <a class="btn btn-info" href="{{route('design.edit',$design)}}">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$designs->links()}}
@endsection