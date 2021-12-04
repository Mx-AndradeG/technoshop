$(document).ready(function(){
  $('.select-form').click(function(){
      if($('.select-form').val()!=null){
        var action='data';
        var value=$('.select-form').val();
        $.ajax({
        url:'order2.php',
        method:'POST',
        data:{action:action,value:value},
        success:function(data){
          $("#products").html(data);
          
        }
      })
    }
    $(".select-form").prop("selectedIndex", 0);
    
  })
})