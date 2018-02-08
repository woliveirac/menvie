@extends('layouts.master')

@section('title', 'ERRO 404')

@section('content')
    <section class="error404">
        <div class="container">
            <div class="content-error">
                <div class="text-error">
                    <a href="{{ url('/') }}">
                        <h1><span>OOPS! Página não encontra.</span> Clique aqui para retornar a página inicial</h1>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
