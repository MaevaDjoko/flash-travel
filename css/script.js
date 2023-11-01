// insertions des elelments dans le pdf
function afficherPDF(){
    //les variables
    var form_nom = document.querySelector('.form-nom').value;
    var form_prenom = document.querySelector('.form-prenom').value;
    var form_tel = document.querySelector('.form-tel').value;
    var form_cni = document.querySelector('.form-cni').value;
    var form_to = document.querySelector('.form-to').value;
    var form_aller = document.querySelector('.form-aller').value;
    var form_DepartureDate = document.querySelector('.form-DepartureDate').value;
    var form_Return = document.querySelector('.form-Return').value;
    var form_Prix = document.querySelector('.form-Prix').value;
    var form_bagage = document.querySelector('.form-bagage').value;
    var form_annee = document.querySelector('.form-annee').value;
    var form_depart = document.querySelector('.form-depart').value;
    var form_arrivee = document.querySelector('.form-arr').value;
    var body = document.querySelector('body');
    //insertion
    body.innerHTML = `
    <div class="piece">
    <div class="logo">
        <img src="img/log.JPG">
    </div>
    <h1> Billet du Client</h1>
    <div>
        <div class="elements">
        <p>Nom: <strong>${form_nom}</strong></p>
        <p>prenom: <strong>${form_prenom}</strong></p>
        <p>tel: <strong>${form_tel}</strong></p>
        <p>cni: <strong>${form_cni}</strong></p>
        <p>Date du jour: <strong>${form_to}</strong></p>
        <p>Type: <strong>${form_aller}</strong></p>
        <p>DepartureDate: <strong>${form_DepartureDate}</strong></p>
        <p>Heure depart: <strong>${form_Return}</strong></p>
        <p>prixticket: <strong>${form_Prix}</strong></p>
        <p>bagage: <strong>${form_bagage}</strong></p>
        <p>id Deplacement: <strong>${form_annee}</strong></p>
        <p>Depart: <strong>${form_depart}</strong></p>
        <p>Arrivee: <strong>${form_arrivee}</strong></p>
                   
        </div>
    </div>
</div>
<div class="generateurBtn">
    <button class="submit">Télécharger le pdf</button>
    <a href="Reservation.php" class="submit"> Générer un autre PDF</a>
</div>
    `
}