if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}

function ready() {
  carritoDB();
  updateTotal();
 
}

function updateTotal() {
  var cartRows = document.getElementsByClassName("product-row");
  var total = 0;
  for (var i = 0; i < cartRows.length; i++) {
    var cartRow = cartRows[i];
    var priceElement = cartRow.getElementsByClassName("product-price")[0];
    var quantityElement = cartRow.getElementsByClassName("quantity")[0];
    var quantity = quantityElement.value;
    var price = parseInt(priceElement.innerHTML.replace(",", ""));
    total = total + price * quantity;
  }
  document.getElementsByClassName("total-products")[0].innerHTML =
    "$" + new Intl.NumberFormat("en-US").format(total);
  sessionStorage(total);
}

function carritoDB() {
  var ids = [];
  var cartRows = document.getElementsByClassName("product-row");
  for (var i = 0; i < cartRows.length; i++) {
    var cartRow = cartRows[i];
    var idElement = cartRow.getElementsByClassName("product-sku")[0];
    var id = idElement.innerHTML;
    ids[i] = id;
  }

  localStorage.setItem("idKey", JSON.stringify(ids));

  localStorage.setItem("idC", document.getElementById('idC').value)
 
}

var quantityInputs = document.getElementsByClassName("quantity");
for (var i = 0; i < quantityInputs.length; i++) {
  var input = quantityInputs[i];
  input.addEventListener("change", quantityChanged);
}

function quantityChanged(event) {
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updateTotal();
}

function sessionStorage(price) {
  localStorage.setItem("price", price);
}

$(".delete-product").click(function () {
  Swal.fire({
    title: "Estas seguro que deseas eliminar este producto?",
    showCancelButton: true,
    confirmButtonText: `Eliminar`,
    cancelButtonText: `Cancelar`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      var deletecart = "data";

      var id = $("#idC").val();
      $tr = $(this).closest("tr");
      var data = $tr
        .children("td")
        .map(function () {
          return $(this).text();
        })
        .get();
      var sku = data[0];
      $.ajax({
        url: "deleteitem.php",
        method: "POST",
        data: {
          deletecart: deletecart,
          id: id,
          sku: sku,
        },
        success: function (response) {
          if (response == 1) {
            location.reload();
            Swal.fire({
              position: "center",
              icon: "success",
              title: "Producto borrado de la lista de deseos",
              showConfirmButton: false,
              timer: 1500,
            });
          } else {
            Swal.fire({
              con: "error",
              title: "Oops...",
              text: "Lo sentimos, algo salió mal",
            });
            console.log(response);
          }
        },
      });
    }
  });
});
