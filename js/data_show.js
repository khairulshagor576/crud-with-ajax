$(document).ready(function(){
    //$("#table-id").html("Hi");
    $("#showData").on("click",function(e){

        $.ajax({
         url:"ajax-load.php",
         type:"POST",
         success:function(data)
         {
           $("#table-id").html(data);
         }
        });
    });
});