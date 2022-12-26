<?php   

$image = config('imagePresents.random_image');
$length = count($image);
$index = $present->id % $length;

$image_carbon = config('imagePresents.carbon_image');
?>


@extends('layouts.app')
@section('content')
<div class="mybody">
        <div class="container">
            <div class="infos">
                <div class="present">
                    <h2 class="kid-name">{{$present->name}} {{$present->surname}}</h2>
                    <div class="box-img-gioco">
                        @if ($present->good_or_evil == 'cattivo')
                        <img src="{{$image_carbon[0]}}" alt="image present">
                        @else
                        <img src="{{$image[$index]}}" alt="image present">
                        @endif
                    </div>
                    <div class="btn-box mt-4">
                        <a href="{{route('presents.edit', $present->id)}}" id="btn-submit" class="my-btn">Modifica</a>
                        <a class="delete myBtn"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
                <div class="details">
                    <div class="s-box">
                        <div class="letter-outline">
                            <div class="letter-title">Consegna Speciale <br> <span class="letter-subtitle">Dal Polo Nord</span> </div>
                            <div class="name s-d-flex separation-line">
                                <span class="index">Nome:</span>
                                <span class="data">{{$present->name}}</span>
                            </div>
                            <div class="surname name s-d-flex separation-line">
                                <span class="index">Cognome:</span>
                                <span class="data">{{$present->surname}}</span>
                            </div>
                            <div class="address name s-d-flex separation-line">
                                <span class="index">Indirizzo:</span>
                                <span class="data">{{Str::limit($present->address, 50)}}</span>
                            </div>
                            <div class="naughty name s-d-flex separation-line">
                                <span class="index">Comportamento:</span>
                                <span class="data text-capitalize">{{$present->good_or_evil}}</span>
                            </div>
                            <div class="elf name s-d-flex separation-line">
                                <span class="index">Elfo n°:</span>
                                <span class="data">{{$present->id_elf}}</span>
                            </div>
                        </div>
                        <div class="timbro">
                            <img src="{{Vite::asset('/resources/img/timbro.PNG')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal myModal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <form action="{{route('presents.destroy', $present->id)}}" method="POST" class="text-center">
                            @csrf
                            @method('DELETE')
                            <p>Sei sicuro di elimiare il regalo per {{$present->name}}?</p> 
                            <div class="mt-4">
                                <button  type="submit" class="my-btn" id="btn-submit">Si</button>
                                <span class="my-btn no" id="btn-close">No</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection