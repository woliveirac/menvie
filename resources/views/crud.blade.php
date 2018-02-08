@extends('layouts.master')

@section('title', 'Menvie')

@section('content')
    <section class="">
        <div class="logo-nav-header">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Lista de pessoas</h1>
                </div>
                <div class="col-md-12 text-right ">
                    <a href="{{ url('add') }}" ><button class="btn btn-primary mr-50"> Adicionar uma nova pessoa</button></a>
                </div>
            </div>
        </div>
        <div class="row p10">
            <div class="col-md-12">
                <table id="people_table" class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($people as $person)
                        <tr data-person-id="{{ $person->id }}">
                            <td>{{ $person->id }}</td>
                            <td>{{ $person->name }}</td>
                            <td>{{ $person->email }}</td>
                            <td>
                                <a href="{{ route('add',['person'=> $person]) }}">
                                    <button class="btn btn-info mr-50"> Editar </button>
                                </a>
                                <button onclick="PeopleFunctions.deletePerson('{{ $person->id }}',$(this))" class="btn btn-danger mr-50"> Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>

@endsection
