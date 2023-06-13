@include('template.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div style="margin-top:3%"></div>
    <div>
    <div class="card-title" > <h1 style="text-align: center"> Client</h1></div>
            <div style="margin-top:1%"></div>
                <section class="section">
                  <div class="row">
                    <div class="col-lg-8">
                       <div class="card">
                           <div class="card-body">
                            <div class="card-title" > <h3 class="text-center" style="color:blue">Liste client</h3></div>
                                <table class="table" class="col-lg-8">
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
                                                <td>{{ $indice['nom'] }}</a></td>
                                                <td>{{ $indice['adresse'] }}</td>
                                                <td>{{ $indice['mail'] }}</td>
                                                <td>{{ $indice['telephone'] }}</td>
                                                <td>{{ $indice['nomresponsable'] }}</td>
                                                <td><button class="btn btn-outline-info"><a href="{{ url('facture/'.$indice['id']) }}">Plus</a></button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- comment -->
                    <div class="col-lg-4">
                       <div class="card">
                           <div class="card-body">
                            <div class="card-title" > <h3 class="text-center">Ajouter client</h3></div>
                               <form class="row g-3" method="GET" action="{{ url('/ajoutclient') }}">
                                @csrf
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="nom" name="nom">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="adresse" name="adresse">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="mail" name="mail">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="telephone" name="telephone">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="nomresponsable" name="nomresponsable">
                                    </div>
                                    <button type="submit" class="btn btn-outline-success" >Ajouter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>       
                </section>

<div style="margin-top:11%"></div>            
@include('template.footer')
