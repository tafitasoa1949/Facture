@include('template.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<h1>List client</h1>
<table border="2">
    <thead>
        <th>Numero</th>
        <th>Intitule</th>
    </thead>
    <tbody>
        @csrf
        @foreach ($client as $indice)
            <tr>
                <td>{{ $indice['numero'] }}</td>
                <td>{{ $indice['intitule'] }}</td>
                <td><a href="{{ url('detailGrandLivre/'.$indice['numero']) }}">Voir</td>
            </tr>
        @endforeach
    </tbody>
</table>
<h2>Ajouter compte</h2>
<form action="{{ url('/ajoutcompte') }}" method="GET">
    @csrf
    <input type="number" placeholder="numero" name="numero">
    <input type="text" placeholder="intitule" name="intitule">
    <button type="submit">Ajouter</button>
</form>
@include('template.footer')
