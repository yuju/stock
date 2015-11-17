$(document).ready(function(){
    $("#produits").click(function(){
        $("#section").load("inc/produits.php");
    });

    $("#main-section").on("click","#produit_add", function(){
        $("#section").load("inc/produit_add.php");
    });

    $("#ingredients").click(function(){
        $("#section").load("inc/ingredients.php");
    });
});