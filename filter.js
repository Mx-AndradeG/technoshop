$(document).ready(function(){
    $('.product_check').click(function(){
      var action='data';
      var marca=get_FilterText('marca');
      var ram=get_FilterText('ram');
      var ap=get_FilterText('ap');
      var screen=get_FilterText('screen');
      var proc=get_FilterText('proc');
      var so=get_FilterText('so');
      var p1=get_FilterText('p1');
      var p2=get_FilterText('p2');
      var p3=get_FilterText('p3');
      var p4=get_FilterText('p4');
     
    $.ajax({
      url:'filter.php',
      method:'POST',
      data:{action:action,marca:marca,ram:ram,ap:ap,screen:screen,proc:proc,so:so,p1:p1,p2:p2,p3:p3,p4:p4},
      success:function(data){
        $("#products").html(data);
        console.log(data);
        
      }
    })

   

    });
    function get_FilterText(text_id){
      var filterData=[ ];
      $('#'+text_id+':checked').each(function(){
        filterData.push($(this).val()); 
        console.log(filterData.toString());
        
      })
      return filterData;
    }
  })