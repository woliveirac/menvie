@extends('layouts.master')

@section('title', 'Menvie - Adicionar')

@section('content')
    <section class="">
        <div class="logo-nav-header">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">{{ (isset($person) ? 'Editar Pessoa' : 'Adicionar uma nova pessoa')}}</h1>
                </div>
                <div class="col-md-12 text-right ">
                    <a href="{{ url('/') }}" ><button class="btn btn-primary mr-50"> Voltar para a listagem de pessoas</button></a>
                </div>
            </div>
        </div>
        <div class="row p10">
            <div class="col-md-3 text-right">
                @include('partials.forms.form',['person'=>$person])
            </div>
        </div>

    </section>

@endsection
