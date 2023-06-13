@include('template.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<h1>List facture</h1>
<table border="2">
    <thead>
        <th>ID facture</th>
        <th>Designation</th>
        <th>Unite</th>
        <th>Quantite</th>
        <th>Prix</th>
        <th>Montant</th>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->idfacture }}</td>
                <th>{{ $row->designation }}</th>
                <th>{{ $row->unite }}</th>
                <td>{{ $row->quantite }}</td>
                <td>{{ $row->prix }}</td>
                <td>{{ $row->montant }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('template.footer')
