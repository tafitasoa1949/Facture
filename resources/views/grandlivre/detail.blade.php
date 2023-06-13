@include('template.header')
<h1>Grand livre</h1>
<h3>Compte : {{ $numero }}</h3>
<table border="2">
    <thead>
        <th>Compte</th>
        <th>Date</th>
        <th>Reference</th>
        <th>Intitule</th>
        <th>Libelle</th>
        <th>Debit</th>
        <th>Credit</th>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <th>{{ $row->created_at }}</th>
                <th>{{ $row->reference }}</th>
                <td>{{ $row->intitule }}</td>
                <td>{{ $row->libelle }}</td>
                <td>{{ $row->debit }}</td>
                <td>{{ $row->credit }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('template.footer')
