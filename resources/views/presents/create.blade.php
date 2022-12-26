@extends('layouts.app')

@section('content')
    <section class="container my-5">
        <a href="{{route('presents.index')}}" class="indietro"><i class="fa-solid fa-circle-left"></i> Torna indietro</a>
        <form action="{{ route('presents.store') }}" method="POST" class="my-form">
        @csrf
            <h1 class="text-center fs-1">Aggiungi un Regalo</h1>
            <div>
                <label for="name">Nome</label>
                <input type="text" class="form-controll @error('name') is-invalid @enderror" name="name" id="name" placeholder="Mario" required minlength="5" maxlength="50">
                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="surname">Cognome</label>
                <input type="text" class="form-controll @error('surname') is-invalid @enderror" name="surname" id="surname" placeholder="Rossi"  minlength="5" maxlength="50">
                @error('surname')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="present">Regalo</label>
                <input type="text" class="form-controll @error('surname') is-invalid @enderror" name="present" id="present" required maxlength="100">
                @error('present')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="address">Indirizzo di Consegna</label>
                <input type="text" class="form-controll @error('address') is-invalid @enderror" name="address" id="address" required maxlength="255">
                @error('address')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="good_or_evil">Comportamento</label>
                <select class="form-controll @error('good_or_evil') is-invalid @enderror" name="good_or_evil" id="good_or_evil" required>
                    <option value="buono" selected>Buono</option>
                    <option value="cattivo">Cattivo</option>
                </select>
                @error('good_or_evil')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="id_elf">Matricola Elfo</label>
                <input type="text" class="form-controll" name="id_elf" id="id_elf" maxlength="10">
            </div>
            <div class="d-flex">
                <button type="submit" class="my-btn rounded-pill" id="btn-submit">Invia</button>
                <button type="reset" class="my-btn  rounded-pill" id="btn-reset">Resetta</button>
            </div>

        </form>

    </section>
@endsection