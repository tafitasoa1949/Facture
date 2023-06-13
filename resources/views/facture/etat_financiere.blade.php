@include('template.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div style="margin-top:3%"></div>
    <div class="card-title" > <h1 style="text-align: center"> Etat Financière</h1></div>
            <div style="margin-top:1%"></div>
            <div class="container">
            <div class="row" >
                        <div class="col-lg-12" id="titre">
                            <b>Compte de resultat</b>
                            <b>Periode du 000000 au 000000</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table border="2" class="table table-light">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Compte</th>
                                            <th>12 Decembre</th>
                                            <th>20 Decembre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Chiffre d'affaires</td>
                                            <td>70</td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td>Production stockée</td>
                                            <td>70</td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td><b>1. PRODUCTION DE L'EXERCICE</b></td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td>Achat consommés</td>
                                            <td>70</td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td>Services extérieurs et autres consommation</td>
                                            <td>70</td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td><b>2. CONSOMMATION DE L'EXERCICE</b></td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td><b>3. VALEUR AJOUTEE D'EXPLOITATION (1-2)</b></td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td>Charge de personnel</td>
                                            <td>70</td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td>Impot, taxes et versement assimilés</td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td><b>4. EXCEDENT BRUT D'EXPLOITATION</b></td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td>Autres produit opérationnels</td>
                                            <td>70</td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td>Autres charges opérationnels</td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td>Dotations aux amortissement, aux provisions et pertes de valeur</td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td>Reprise sur provisions et pertes de valeurs</td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td><b>5. RESULTAT OPERATIONNEL</b></td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td>Produit financiers</td>
                                            <td>70</td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td>Charges financières</td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td><b>6. RESULTAT FINANCIER</b></td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td><b>7. RESULTAT AVANT IMPOT(5+6)</b></td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td>Impot exigibles sur le resultats</td>
                                            <td>70</td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td>Impots différés</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><b>TOTAL DES PRODUITS DES ACTIVITES ORDINAIRES</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><b>TOTAL DES CHARGES DES ACTIVITES ORDINAIRES</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>8. RESULTAT NET DES ACTIVITES ORDINAIRES</b></td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td>Eléments extraordinaires(produits)</td>
                                            <td>70</td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td>Eléments extraordinaires(charges)</td>
                                            <td>70</td>
                                            <td>300000000</td>
                                            <td>300000000</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>9. RESULTAT EXTRAORDINAIRES</b></td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td></td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>10. RESULTAT NET DE L'EXERCICE</b></td>
                                            <td></td>
                                            <td>300000000</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
 @include('template.footer')