

$(document).ready(function(){
    $("#reg_material_form").bind("submit",function(){
        $.ajax({
          type: $(this).attr("method"),
          url:  "../php/material.MaterialControlador.php",
          data: $(this).serialize(),
          succes:function(){

          },
          error:function(){

          }
        });

    });
});
