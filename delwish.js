$(".delete-productw").click(function () {
  Swal.fire({
    title: "Estas seguro que deseas eliminar este producto?",

    showCancelButton: true,
    confirmButtonText: `Eliminar`,
    denyButtonText: `Canel`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      var deletewish = "data";
     
      var id = $('#idC').val()
      $tr = $(this).closest("tr");
      var data = $tr
        .children("td")
        .map(function () {
          return $(this).text();
        })
        .get();
      var sku=data[0]
      $.ajax({
        url: "deleteitem.php",
        method: "POST",
        data: {
          deletewish:deletewish,
         id:id,
         sku:sku
        },
        success: function (response) {
         if(response==1){
           location.reload()
           Swal.fire({
            position: "center",
                    icon: "success",
                    title: "Producto borrado de la lista de deseos",
                    showConfirmButton: false,
                    timer: 1500,
         })
         }else{
             Swal.fire({
                con: "error",
                title: "Oops...",
                text: "Lo sentimos, algo salió mal",
             })
             console.log(response)
         }
        },
      });
    }
  });
});
