@extends('templates.middleware', ['titulo' => "PACIENTES", 'rota' => "clientes.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') PACIENTES @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')
    <div class="row">
        <div class="col">
            <table class="table align-middle caption-top table-striped">
                <caption>Tabela de <b>Pacientes</b></caption>
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Altura</th>
                    <th scope="col">Dias Internamento</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $item)
                        <tr>
                           <th scope="col">Nome</th>
                           <th scope="col">Idade</th>
                           <th scope="col">Sexo</th>
                           <th scope="col">Altura</th>
                           <th scope="col">Dias Internamento</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection