$(document).ready(function($){
    // hide messages 
    $("#error").hide();
    $("#show_message").hide();
    // on submit...
    $('#ajax-form').submit(function(e){
    e.preventDefault();
    $("#error").hide();
    //name required
    var action = $("input#action").val();
    if(action == ""){
    $("#error").fadeIn().text("Name required.");
    $("input#action").focus();
    return false;
    }
    // email required
    var produit_id = $("input#produit_id").val();
    if(produit_id == ""){
    $("#error").fadeIn().text("Email required");
    $("input#produit_id").focus();
    return false;
    }
    // command
    var command_id = $("input#command_id").val();
    if(command_id == ""){
    $("#error").fadeIn().text("Mobile number required");
    $("input#command_id").focus();
    return false;
    }
// quantite
    var quantite = $("input#quantite").val();
    if(quantite == ""){
    $("#error").fadeIn().text("Mobile number required");
    $("input#quantite").focus();
    return false;
    }
    // ajax
    $.ajax({
    type:"POST",
    url: "sanitCommand.php",
    data: $(this).serialize(), // get all form field value in serialize form
    success: function(){
    $("#show_message").fadeIn();
    //$("#ajax-form").fadeOut();
    }
    });
    });  
    return false;
    });




    ////


    $(document).ready(function(){
        $("#search").keyup(function(){
            search_on_table($(this).val());
        });
        function search_on_table(value){
          $("#myProductTable tr").each(function(){
            var  found = 'false';
            $(this).each(function(){
              if($(this).text().toLocaleLowerCase().indexOf(value.toLocaleLowerCase()) >= 0)
              {
                found = 'true';
              }
            });
            if(found == 'true'){
              $(this).show();
            }
            else{
              $(this).hide();
            }
          });
        }
      });