$(document).ready( function () {
    $('#user_table').DataTable();
} );

function deleteuser(userid) {
    $.ajax({
        url: '../src/controller/admin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'delete',
            user_id: userid,
        },
        success: function () {
            alert('Utilisateur suprimé');
            window.location.href = window.location.href;
        },
        error: function () {
            alert('Le process a rencontré un problème');
        }
    })
}

function deletelaptop(laptop) {
    $.ajax({
        url: '../src/controller/admin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'laptop',
            laptop_id: laptop,
        },
        success: function () {
            alert('laptop suprimé');
            window.location.href = window.location.href;
        },
        error: function () {
            alert('Le process a rencontré un problème');
        }
    })
}

var ctx = document.getElementById("chartmarque").getContext('2d');
var chartmarque = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
var cty = document.getElementById("chartdalle").getContext('2d');
var chartdalle = new Chart(cty, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: 'Utilisateurs inscrits',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(0, 0, 0, 0)',
            ],
            borderWidth: 5
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
