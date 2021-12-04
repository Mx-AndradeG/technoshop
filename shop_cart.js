$(document).ready(function(){
    $('#wish').click(function(){
        var action='data'
        var sku=$('#sku').val();
        var cliente=$('#cliente').val();
        $.ajax({
            url: "wishlist.php",
            method: "POST",
            data: {
              action: action,
              sku:sku,
              cliente:cliente
            },
            success: function (response) {
              checkResult(response);
              console.log(response);
            },
          });
      

          function checkResult(response){
              if(response==1){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Ya añadiste este producto a tu lista de deseos!",
                  });
                  return false;
              }
              if(response==2){
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Producto añadido a lista de deseos",
                    showConfirmButton: false,
                    timer: 1500,
                  });
              }
          }
    })


    $('#submit').click(function(){
     var  action='data'
      var sku=$('#sku').val();
      var id=$('#cliente').val();
      var calificacion=$('#calificacion').val();
      var review=document.getElementById("reviewtext").value
      $.ajax({
        url: "addreview.php",
        method: "POST",
        data: {
          action: action,
         id:id,
         sku:sku,
          review:review,
          calificacion:calificacion
        },
        success: function (response) {
         if(response==1){
           location.reload()
         }
        },
      });
    })
   
  })

 