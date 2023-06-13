@include('template.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div style="margin-top:3%"></div>
    <div class="card-title" > <h1 style="text-align: center"> Details Facture</h1></div>
            <div style="margin-top:1%"></div>
            <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body">
                                <table class="table" class="col-lg-12">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
