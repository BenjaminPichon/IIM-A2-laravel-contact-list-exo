@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <form action="{{route('contacts.store')}}" method="POST">
                    <!-- TODO mise en place de la form pour créer un contact -->
                    @csrf
                <div class="form-group">
                    <label for="Name">Nom</label>
                    <input id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="tel">Numéro de téléphone</label>
                    <textarea class="form-control @error('tel') is-invalid @enderror" name="tel" id="tel">{{old('tel')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                </div>
                <button type="submit">Créer un contact</button>
                </form>
            </div>
        </div>
    </div>
@endsection
