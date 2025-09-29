@extends ('layouts.app')

@section ('title','Halaman praktikum')

@section ('content')
    <h1>ini adalah halaman praktikum</h1>
    <h1>selamat datang {{ $nama }}</h1>
    <p>isi alert : {{$alertMessage}}</p>
    <p>isi alert : {{$alertType}}</p>
    <x-alert message="{{$alertMessage}" type= "{{$alertType}}" />
@endsection