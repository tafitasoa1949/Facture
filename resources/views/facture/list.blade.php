@include('template.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div style="margin-top:3%"></div>
    <div class="card-title" > <h1 class="text-center"> Listes Facture</h1></div>
            <div style="margin-top:1%"></div>
            <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body">
                                <table class="table" class="col-lg-12">
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
                            </div>
                        </div>
                    </div>
            </div>
