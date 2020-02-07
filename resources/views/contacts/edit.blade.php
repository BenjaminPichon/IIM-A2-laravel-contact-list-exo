@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h3>Modification du contact <b><!-- TODO Afficher le nom du contact -->{{$contact->name}}</b></h3>

                    <!-- TODO mise en place de la form pour modifier un contact -->
                    <form action="{{route('contacts.update', $contact->id)}}" method="POST">
                        <!-- TODO mise en place de la form pour créer un contact -->
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="Name">Nom</label>
                        <input id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name', $contact->name)}}">
                    </div>
                    <div class="form-group">
                        <label for="tel">Numéro de téléphone</label>
                        <input type="text" id="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{old('tel', $contact->tel)}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $contact->email)}}">
                    </div>
                    <button type="submit">Mettre à jour un contact</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
