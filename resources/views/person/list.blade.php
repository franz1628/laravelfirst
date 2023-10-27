@extends('admin/layout')

@section('content')


    <h3>person List</h3>
    <hr>
    <div>
        @if (session('msg'))
            {!! session('msg') !!}
        @endif
    </div>
    <a href="{{ route('person.create') }}" class="btn btn-warning">Add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>First surname</th>
                <th>Second surname</th>
                <th>Document</th>
                <th>Type Document</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($persons as $key => $person)
                <tr>
                    <td>
                        
                        {{ $person->id }}
                    </td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->firstsurname }}</td>
                    <td>{{ $person->secondsurname }}</td>
                    <td>{{ $person->document }}</td>
                    <td>{{ $person->typedocument->description }}</td>
                    <td>{{ $person->role->description }}</td>
                    <td>{{ $person->birth }}</td>
                 
                    <td>
                        <a class="btn btn-warning" href="{{ route('person.show', $person) }}">Show</a>
                        <a class="btn btn-info" href="{{ route('person.edit', $person) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $persons->links() }}
@endsection
