@include('template.header')
<div class="text-center">
    <h2>Ajouter facture</h2>
</div>
<div class="form-group text-center">
    <p>Designation : <input type="text" name="designation" id="designation" required></p>
    <p>Unité : <input type="text" name="unite" id="unite" required></p>
    <p>Quantité : <input type="number" name="quantite" id="quantite" required></p>
    <p>Prix unitaire : <input type="text" name="prix" id="prix" required></p>
    <button id="ajouter">Ajouter</button>
</div>
<div>
    <form action="{{ url('/validation') }}" id="form">
        @csrf
        <input type="hidden" name="idclient" value="{{ $idclient }}">
        <input type="text" placeholder="Libelle" name="intitule">
        <input type="number" placeholder="Avance" name="avance" >
        <table id="table">
            <thead>
                <th>Designation</th>
                <th>Unité</th>
                <th>Quantité</th>
                <th>Prix Unitaire</th>
                <th>Montant</th>
            </thead>
            <tbody id="tbody"></tbody>
        </table>
        <div id="validerDiv"></div> <!-- Div pour contenir le bouton "Valider" -->
    </form>
</div>
<script>
    const ajouter = document.getElementById('ajouter');
    const form = document.getElementById('form');
    const tbody = document.getElementById('tbody');
    let validerCree = false; // Variable pour vérifier si le bouton "Valider" est déjà créé
    let count = 0;
    const taille_input = document.createElement('input');
    ajouter.addEventListener('click', function() {
        // tbody
        var designation = document.getElementById('designation');
        var design_value = designation.value;
        const unite = document.getElementById('unite');
        let unite_value = unite.value;
        const prix = document.getElementById('prix');
        let prix_value = prix.value;
        const quantite = document.getElementById('quantite');
        let quantite_value = quantite.value;
        // tr td
        const tr = document.createElement('tr');
        //
        const td_design = document.createElement('td');
        td_design.textContent = design_value;
        const design_input = document.createElement('input');
        design_input.setAttribute('type','hidden');
        design_input.setAttribute('name','design'+count);
        design_input.setAttribute('value',design_value);
        tr.appendChild(design_input);
        tr.appendChild(td_design);
        //
        const td_unite = document.createElement('td');
        td_unite.textContent = unite_value;
        const unite_input = document.createElement('input');
        unite_input.setAttribute('type','hidden');
        unite_input.setAttribute('name','unite'+count);
        unite_input.setAttribute('value',unite_value);
        tr.appendChild(unite_input);
        tr.appendChild(td_unite);
        //
        const td_quantite = document.createElement('td');
        td_quantite.textContent = quantite_value;
        const quantite_input = document.createElement('input');
        quantite_input.setAttribute('type','hidden');
        quantite_input.setAttribute('name','quantite'+count);
        quantite_input.setAttribute('value',quantite_value);
        tr.appendChild(quantite_input);
        tr.appendChild(td_quantite);
        //
        const td_prix = document.createElement('td');
        td_prix.textContent = prix_value;
        const prix_input = document.createElement('input');
        prix_input.setAttribute('type','hidden');
        prix_input.setAttribute('name','prix'+count);
        prix_input.setAttribute('value',prix_value);
        tr.appendChild(prix_input);
        tr.appendChild(td_prix);
        //
        const montant = quantite_value * prix_value;
        const td_montant = document.createElement('td');
        td_montant.innerHTML = '<span class="montant-span montant">' + montant + '</span>';
        const montant_input = document.createElement('input');
        montant_input.setAttribute('type','hidden');
        montant_input.setAttribute('name','montant'+count);
        montant_input.setAttribute('value',montant);
        tr.appendChild(montant_input);
        tr.appendChild(td_montant);
        // button modifier
        const modifier = document.createElement('button');
        const td_modifier = document.createElement('td');
        modifier.setAttribute('type', 'button');
        modifier.setAttribute('onclick', 'modifierLigne(this.parentNode.parentNode)');
        modifier.textContent = "Modifier";
        td_modifier.appendChild(modifier);
        tr.appendChild(td_modifier);
        tbody.appendChild(tr);
        //incrementer la taille
        taille_input.setAttribute('value',count+1);
        // vide
        designation.value = "";
        unite.value = "";
        quantite.value = "";
        prix.value = "";

        // Créer le bouton "Valider" s'il n'a pas été créé auparavant
        if (!validerCree) {
            const validerDiv = document.getElementById('validerDiv');
            const valider = document.createElement('button');
            valider.setAttribute('type', 'submit');
            valider.textContent = "Valider";
            validerDiv.appendChild(valider);
            validerCree = true;
            //taille tableau
            taille_input.setAttribute('type','hidden');
            taille_input.setAttribute('name','taille');
            taille_input.setAttribute('value',count+1);
            validerDiv.appendChild(taille_input);
        }
        count++;
    });
    function modifierLigne(ligne) {
        // Récupérer tous les éléments td de la ligne
        let tdListe = ligne.getElementsByTagName("td");

        // Itérer sur les éléments td et les rendre modifiables
        for (let i = 0; i < tdListe.length; i++) {
            let td = tdListe[i];

            // Ignorer le champ "Montant"
            if (i !== 4) {
                // Récupérer la valeur actuelle du champ
                let valeurActuelle = td.textContent;

                // Créer un champ d'édition (input) avec la valeur actuelle comme valeur initiale
                let champEdition = document.createElement("input");
                champEdition.type = "text";
                champEdition.value = valeurActuelle;

                // Ajouter le champ d'édition à la cellule <td>
                td.textContent = "";
                td.appendChild(champEdition);
            }
        }

        // Créer un bouton de sauvegarde pour valider les modifications
        let boutonSauvegarde = document.createElement("button");
        boutonSauvegarde.innerText = "Enregistrer";
        boutonSauvegarde.onclick = function() {
            sauvegarderModification(ligne);
        };

        // Ajouter le bouton de sauvegarde à la dernière cellule de la ligne
        let derniereCellule = ligne.lastElementChild;
        derniereCellule.innerHTML = "";
        derniereCellule.appendChild(boutonSauvegarde);
    }

    function sauvegarderModification(ligne) {
        // Récupérer tous les éléments td modifiés dans la ligne
        let tdModifies = ligne.getElementsByTagName("td");
        let inputModifies = ligne.getElementsByTagName("input");

        // Itérer sur les éléments td modifiés et mettre à jour les valeurs
        for (let i = 0; i < tdModifies.length; i++) {
            // Ignorer le champ "Montant"
            if (i !== 4) {
                let td = tdModifies[i];
                let champEdition = td.firstChild; // Récupérer le champ d'édition (input)
                let nouvelleValeur = champEdition.value;

                // Mettre à jour la valeur de la cellule <td> avec la nouvelle valeur
                td.textContent = nouvelleValeur;
                if (inputModifies[i]) {
                    inputModifies[i].setAttribute('value', nouvelleValeur);
                }
            }
        }

        // Recalculer le montant en fonction des valeurs de quantité et de prix
        let quantite = parseInt(tdModifies[2].textContent);
        let prix = parseFloat(tdModifies[3].textContent);
        let montant = quantite * prix;

        // Mettre à jour le champ "Montant"
        let tdMontant = tdModifies[4];
        tdMontant.innerHTML = '<span class="montant-span">' + montant + '</span>';
        inputModifies[4].setAttribute('value',montant);

        // Créer à nouveau le bouton "Modifier"
        let boutonModifier = document.createElement("button");
        boutonModifier.innerText = "Modifier";
        boutonModifier.onclick = function() {
            modifierLigne(ligne);
        };

        // Mettre à jour la dernière cellule de la ligne avec le bouton "Modifier"
        let derniereCellule = ligne.lastElementChild;
        derniereCellule.innerHTML = "";
        derniereCellule.appendChild(boutonModifier);
    }
</script>
