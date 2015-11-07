$(document).ready(function(){
    $("#produits").click(function(){
        $("#section").load("inc/produits.php");
    });
    $("#ingredients").click(function(){
        $("#section").load("inc/ingredients.php");
    });
});