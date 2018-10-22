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

function acceptproposition(id_laptop,id_user) {

    var laptop = id_laptop;
    var user = id_user;
    if (confirm('Etes vous sur  ?')) {
        $.ajax({
            url: 'src/controller/proposition.php',
            type: 'POST',
            dataType: 'json',
            data: {
                action: 'accept',
                laptop_id: laptop,
                user_id: user,
            },
            success: function () {
                alert('Demande acceptée');
                window.location.href = window.location.href;
            },
            error: function () {
                alert('Le process a rencontré un problème');
            }
        })
    }
}

function declineproposition(id_laptop,id_user) {

    var laptop = id_laptop;
    var user = id_user;

    if (confirm('Etes vous sur  ?')) {
        $.ajax({
            url: 'src/controller/proposition.php',
            type: 'POST',
            dataType: 'json',
            data: {
                action: 'decline',
                laptop_id: laptop,
                user_id: user,
            },
            success: function () {
                alert('Demande Refusée');
                window.location.href = window.location.href;
            },
            error: function () {
                alert('Le process a rencontré un problème');
            }
        })
    }
}