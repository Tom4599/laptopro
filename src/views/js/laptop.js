function sendproposition(id_laptop,prix_min,prix_max) {

    var laptop = id_laptop;
    var prix = $('#prix').val();
    if (prix_max>prix>prix_min) {
            $.ajax({
                url: 'src/controller/proposition.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    action: 'proposition',
                    laptop_id: laptop,
                    prix: prix,
                },
                success: function () {
                    alert('Proposition envoyée');
                    window.location.href = window.location.href;
                },
                error: function () {
                    alert('Le process a rencontré un problème');
                }
            })
    } else {
        alert('N\'entrez pas un prix trop éloigné(moins ou plus de 50 jetons du prix demandé)');
    }
}