@extends('admin/layout')

@section('content')
    <h3>Edit person</h3>

    <div class="row">
        <div class="col-md-3">
            <form action="{{ route('person.update', $person->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                        id="name" value="{{ $person->name }}">

                    @error('name')
                        <div class="text-danger">
                            {{ $errors->first('name') }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="firstsurname" class="form-label">First surname</label>
                    <input class="form-control @error('firstsurname') is-invalid @enderror" type="text" firstsurname="firstsurname"
                        id="firstsurname" value="{{ $person->firstsurname }}">

                    @error('firstsurname')
                        <div class="text-danger">
                            {{ $errors->first('firstsurname') }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="secondsurname" class="form-label">Second surname</label>
                    <input class="form-control @error('secondsurname') is-invalid @enderror" type="text" secondsurname="secondsurname"
                        id="secondsurname" value="{{ $person->secondsurname }}">

                    @error('secondsurname')
                        <div class="text-danger">
                            {{ $errors->first('secondsurname') }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="document" class="form-label">Document</label>
                    <input class="form-control @error('document') is-invalid @enderror" type="text" document="document"
                        id="document" value="{{ $person->document }}">

                    @error('document')
                        <div class="text-danger">
                            {{ $errors->first('document') }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="typeDocument" class="form-label">Type Document</label>
                    <select name="idTypeDocument" id="" class="form-select">
                        <option value="">SELECCIONAR</option>
                        @foreach ($typeDocuments as $typeDocument)
                            <option {{ $person->idTypeDocument == $typeDocument->id ? 'selected' : '' }} value="{{ $typeDocument->id }}">
                                {{ $typeDocument->description }}</option>
                        @endforeach
                    </select>
                    @error('idTypeDocument')
                        <div class="text-danger">
                            {{ $errors->first('idTypeDocument') }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Type Document</label>
                    <select name="idRole" id="" class="form-select">
                        <option value="">SELECCIONAR</option>
                        @foreach ($roles as $role)
                            <option {{ $person->idRole == $role->id ? 'selected' : '' }} value="{{ $role->id }}">
                                {{ $role->description }}</option>
                        @endforeach
                    </select>
                    @error('idRole')
                        <div class="text-danger">
                            {{ $errors->first('idRole') }}
                        </div>
                    @enderror
                </div>
             
                <br>

                <button class="btn btn-success" type="submit">Enviar</button>
            </form>
        </div>
    </div>
@endsection
