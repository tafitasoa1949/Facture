@include('template.header')
<div style="margin-top:3%"></div>
    <div>
    <div class="card-title" > <h1 style="text-align: center"> Facture</h1></div>
            <div style="margin-top:1%"></div>
                <section class="section">
                  <div class="row">
                    <div class="col-lg-8">
                       <div class="card">
                           <div class="card-body">
                            <div class="card-title" > <h3 class="text-center">Liste Achat</h3></div>
                                <form action="{{ url('/validation') }}" id="form">
                                    @csrf
                                    <input type="hidden" class="from-control" name="idclient" value="{{ $idclient }}">
                                    <!-- <div class="col-md-3">
                                        <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Avance" name="avance">
                                    </div> -->
                                    <table id="table" class="table" class="col-lg-8">
                                        <thead>
                                            <th>Designation</th>
                                            <th>Unité</th>
                                            <th>Quantité</th>
                                            <th>Prix Unitaire</th>
                                            <th>Montant</th>
                                        </thead>
                                        <tbody id="tbody"></tbody>
                                    </table>
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Avance" name="avance">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Libelle" name="Libelle">
                                        </div>
                                    </div>
                                    <div id="validerDiv"></div> <!-- Div pour contenir le bouton "Valider" -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- comment -->
                    <div class="col-lg-4">
                       <div class="card">
                           <div class="card-body">
                            <div class="card-title" > <h3 class="text-center">Ajouter Facture</h3></div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Designation" name="designation" id="designation">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Unité" name="unite" id="unite">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" placeholder="Quantité" name="qunatite" id="quantite">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" placeholder="Prix Unitaire" name="prix" id="prix">
                                </div>
                                <button id="ajouter" class="btn btn-secondary">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>       
                </section>

<script src="{{ asset('js/insert.js') }}"></script>
