$(document).ready(function () { // Condition pour faire charger le js après le html et css
    $('#button').on("click", function () { // On récupère l'event au click 
        $('#button').empty(); // On vide le contenu du bouton 
        $('#button').append('Les logiciels et les cathédrales,c est un peu la même chose -d abord on les construit,
        ensuite on prie'); // On le remplace par un nouveau contenu
        // $('#button').html('') permet  de faire la même chose que append()
    });

    $('#hide').on("click", function () { // Au click du 2eme bouton 
        $('#button').hide(); // On cache le deuxieme
    });
});