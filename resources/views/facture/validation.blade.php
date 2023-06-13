@include('template.header')
<form action="{{ route('accepter') }}" method="POST">
<section class="section">
        <div style="margin-top:3%"></div>
                <div class="row">
                    <div class="col-lg-8">
                       <div class="card">
                           <div class="card-body">
                            <div class="card-title" > <h3 class="text-center">Liste Achat</h3></div>
                                @csrf
                                <table class="table" class="col-lg-8">
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
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                       <div class="card">
                           <div class="card-body">
                            <div class="card-title" > <h3 class="text-center">Details Facture</h3></div>    
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
                                <input type="hidden" name="montant_a_payer" value="{{ $montant_a_payer }}">
                                <p>Montant a payer : {{ $montant_a_payer }} Ar</p>
                                <p>Arrete a la somme TTC {{ $ttc }} Ar</p>
                                <button type="submit" class="btn btn-secondary">Accepter</button>
                            </div>
                        </div>
                </div>
            </div>
</section>
</form>

@include('template.footer')
