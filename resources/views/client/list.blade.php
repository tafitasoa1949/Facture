@include('template.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<h1>List client</h1>
<table border="2">
    <thead>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Nom de Responsable</th>
    </thead>
    <tbody>
        @csrf
        @foreach ($client as $indice)
            <tr>
                <td><a href="{{ url('facture/'.$indice['id']) }}">{{ $indice['nom'] }}</a></td>
                <td>{{ $indice['adresse'] }}</td>
                <td>{{ $indice['mail'] }}</td>
                <td>{{ $indice['telephone'] }}</td>
                <td>{{ $indice['nomresponsable'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<h2>Ajouter client</h2>
<form action="{{ url('/ajoutclient') }}" method="GET">
    @csrf
    <input type="text" placeholder="nom" name="nom">
    <input type="text" placeholder="adresse" name="adresse">
    <input type="email" placeholder="mail" name="mail">
    <input type="number" placeholder="telephone" name="telephone">
    <input type="text" placeholder="nomresponsable" name="nomresponsable">
    <button type="submit">Ajouter</button>
</form>
@include('template.footer')
