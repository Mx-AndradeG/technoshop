$(document).ready(function(){
    $('#carrito').click(function(){
        var action='data'
        var sku=$('#sku').val();
        var cliente=$('#cliente').val();
        console.log(sku,cliente)
        $.ajax({
            url: "cart.php",
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
                    text: "Ya añadiste este producto a tu carrito de compras!",
                  });
                  return false;
              }
              if(response==2){
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Producto añadido a tu carrito de compras",
                    showConfirmButton: false,
                    timer: 1500,
                  });
              }
          }
    })
   
  })