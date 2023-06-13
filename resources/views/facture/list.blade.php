@include('template.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<h1>List facture</h1>
<table border="2">
    <thead>
        <th>ID facture</th>
        <th>Nom client</th>
        <th>Paiment</th>
        <th>Daty</th>
    </thead>
    <tbody>
        @csrf
        @foreach ($facture as $indice)
            <tr>
                <td><a href="{{ url('detail/'.$indice['idfacture']) }}">{{ $indice['idfacture'] }}</a></td>
                <td>{{ $indice['idclient'] }}</td>
                <td>{{ $indice['montant_payer'] }}</td>
                <td>{{ $indice['created_at'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('template.footer')
