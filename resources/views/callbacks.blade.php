@extends('layout.bootstrap')

@section('styles')
<style>
    #calls_filter {
        float: right;
    }
</style>
@endsection
@section('content')
<div class="container">
    <h1 class="text-center">Chamadas para Devolver</h1>
    <table id="calls" class="table" style="width:100%">
        <thead>
            <tr>
                <th>Data</th>
                <th>Número</th>
                <th>Nome Interno</th>
                <th>Duração</th>
                <th>Número para qual foi ligado</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection

@section('javascript')
<script>
    var table = $('#calls').DataTable( {
        ajax: {
            url: "/callbacks.json",
            timeout: 60000
        },
        "columns": [
            { "data": "calldate" },
            { "data": "src" },
            { "data": "clid" },
            { "data": "duration" },
            { "data": "did" }
        ],
        "order": [[0, 'desc']]
    });
    setInterval( function () {
        table.ajax.reload( null, false );
    }, 60000 );
</script>
@endsection