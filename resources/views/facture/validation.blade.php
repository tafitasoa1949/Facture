@include('template.header')
<form action="{{ route('accepter') }}" method="POST">
    @csrf
    <table>
        <thead>
            <th>Designation</th>
            <th>Unité</th>
            <th>Quantité</th>
            <th>Prix Unitaire</th>
            <th>Montant</th>
        </thead>
        <tbody>
            @foreach ($data as $index => $indice)
                <tr>
                    <input type="hidden" name="data[{{ $index }}][designation]" value="{{ $indice['designation'] }}">
                    <td>{{ $indice['designation'] }}</td>
                    <input type="hidden" name="data[{{ $index }}][unite]" value="{{ $indice['unite'] }}">
                    <td>{{ $indice['unite'] }}</td>
                    <input type="hidden" name="data[{{ $index }}][quantite]" value="{{ $indice['quantite'] }}">
                    <td>{{ $indice['quantite'] }}</td>
                    <input type="hidden" name="data[{{ $index }}][prix]" value="{{ $indice['prix'] }}">
                    <td>{{ $indice['prix'] }}</td>
                    <input type="hidden" name="data[{{ $index }}][montant]" value="{{ $indice['montant'] }}">
                    <td>{{ $indice['montant'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <input type="hidden" name="idclient" value="{{ $idclient }}">
    <p>{{ $idclient }}</p>
    <input type="hidden" name="hors_taxe" value="{{ $hors_taxe }}">
    <p>Prix hors taxe : {{ $hors_taxe }} Ar</p>
    <input type="hidden" name="tva" value="{{ $tva }}">
    <p>TVA : {{ $tva }} Ar</p>
    <input type="hidden" name="ttc" value="{{ $ttc }}">
    <p>TTC : {{ $ttc }} Ar</p>
    <input type="hidden" name="avance" value="{{ $avance }}">
    <p>Avance : {{ $avance }} Ar</p>
    <input type="hidden" name="intitule" value="{{ $intitule }}">
    <p>Intitule : {{ $intitule }} </p>
    <input type="hidden" name="montant_a_payer" value="{{ $montant_a_payer }}">
    <p>Montant a payer : {{ $montant_a_payer }} Ar</p>
    <p>Arrete a la somme TTC {{ $ttc }} Ar</p>
    <button type="submit">Accepter</button>
</form>

@include('template.footer')
