@extends('layouts.app')

@section('header')

  @include('home.header')

@endsection


@section('content')

        <div class="container-fluid">
            <div class="block-header">
                <h2>HOLA DASHBOARD</h2>
            </div>

        </div>




@endsection

@section('js')

  @include('home.js')

@endsection