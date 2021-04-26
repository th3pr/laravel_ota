
$(document).ready(function(){
    
   $(".tperson").click(function(){
    //    $("#person").html("#tperson".val());
    var nperson = $("#numPerson").text();
    var totalPrice = 500 * nperson;


    $('#sCar').on('change',function(){
        if($("#sCar").is(':checked'))
        {
            // var totalPriceC = totalPrice+100;
            $("#totalPrice").text(totalPrice+100);
        }
        else
        $("#totalPrice").text(totalPrice);
        
    } )
    
    $("#totalPrice").text(totalPrice);

   });


  
//    $(".numPersonHotel").click(function(){
//     //    $("#person").html("#tperson".val());
//    var totalPriceHotel=0;

//     var numPerson = $("#numPerson").text();

//     var totalPersonPrice = 300 * numPerson;
//     totalPriceHotel = totalPriceHotel + totalPersonPrice ;
    
//     $("#totalPrice").text(totalPriceHotel);




//    });


$(".numRoomHotel").click(function(){


  var totalPriceHotel=0;

    var numRoom = $("#numRoomHotel").text();

    var totalRoomPrice = 200 * numRoom;
     totalPriceHotel = totalPriceHotel + totalRoomPrice;
    
    $("#totalPrice").text(totalPriceHotel);

 });


 $(".numCar").click(function(){

    var totalPriceHotel=0;

      var numRoom = $("#numCar1").text();
      var totalRoomPrice = 200 * numRoom;
       totalPriceHotel = totalPriceHotel + totalRoomPrice;
      
      $("#totalPrice").text(totalPriceHotel);
  
   });
  











})