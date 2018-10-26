function search() {

    var input = $('#inputlaptop').val();
    var marque = $('#marqueselect').val();
    var processeur = $('#proselect').val();
    var stockage = $('#stoselect').val();
    var cg = $('#cgselect').val();
    var ecran = $('#ecranselect').val();
    console.log(input);
    console.log(marque);
    $.ajax({
        url: 'src/controller/search.php',
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'search',
            input: input,
            marque: marque,
            processeur: processeur,
            stockage: stockage,
            cg: cg,
            ecran: ecran,
        },
        success: function (callback) {
            console.log(callback);
            $('#product').html(callback);

        },
        error: function () {
            alert('Le process a rencontré un problème');
        }
    })

}