@extends('admin/layout')

@section('content')
    <h3>Edit person</h3>

    <div class="row">
        <div class="col-md-3">
            <form action="{{ route('person.store') }}" method="POST">
           
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                        id="name" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-danger">
                            {{ $errors->first('name') }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="firstsurname" class="form-label">First surname</label>
                    <input class="form-control @error('firstsurname') is-invalid @enderror" type="text" name="firstsurname"
                        id="firstsurname" value="{{ old('firstsurname') }}">

                    @error('firstsurname')
                        <div class="text-danger">
                            {{ $errors->first('firstsurname') }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="secondsurname" class="form-label">Second surname</label>
                    <input class="form-control @error('secondsurname') is-invalid @enderror" type="text" name="secondsurname"
                        id="secondsurname" value="{{ old('secondsurname') }}">

                    @error('secondsurname')
                        <div class="text-danger">
                            {{ $errors->first('secondsurname') }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="document" class="form-label">Document</label>
                    <input class="form-control @error('document') is-invalid @enderror" type="text" name="document"
                        id="document" value="{{ old('document') }}">

                    @error('document')
                        <div class="text-danger">
                            {{ $errors->first('document') }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="idTypeDocument" class="form-label">Type Document</label>
                    <select name="idTypeDocument" id="idTypeDocument" class="form-select">
                        <option value="">SELECCIONAR</option>
                        @foreach ($typeDocuments as $typeDocument)
                            <option value="{{$typeDocument->id}}" {{  old('idTypeDocument')  == $typeDocument->id ? 'selected' : '' }}>
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
                    <label for="idRole" class="form-label">Role</label>
                    <select name="idRole" id="idRole" class="form-select">
                        <option value="">SELECCIONAR</option>
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}" {{ old('idRole')  == $typeDocument->id ? 'selected' : '' }}>
                                {{ $role->description }}</option>
                        @endforeach
                    </select>
                    @error('idRole')
                        <div class="text-danger">
                            {{ $errors->first('idRole') }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="birth" class="form-label">birth</label>
                    <input class="form-control @error('birth') is-invalid @enderror" type="date" name="birth"
                        id="birth" value="{{ old('birth') }}">

                    @error('birth')
                        <div class="text-danger">
                            {{ $errors->first('birth') }}
                        </div>
                    @enderror
                </div>
             
                <br>

                <button class="btn btn-success" type="submit">Enviar</button>
            </form>
        </div>
    </div>
@endsection
