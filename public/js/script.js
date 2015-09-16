$(document).ready(function(){
    
    $(function(){
      $('#antiquesForm').hide();
      $('#carsForm').hide();
      $('#tribalForm').hide();
      $('#sportingForm').hide();
      $('#metalsForm').hide();
      $('#instrumentsForm').hide();
      $('#carpetsForm').hide();
      $('#tapestryForm').hide();
      $('#musicForm').hide();
      $('#artForm').hide();
      $('#metalwareForm').hide();
      $('#lightingForm').hide();
      $('#jewelryForm').hide();
      $('#glassForm').hide();
      $('#mirrorsForm').hide();
      $('#furnituresForm').hide();
      $('#toysForm').hide();
      $('#clocksForm').hide();
      $('#ceramicsForm').hide();
      $('#booksForm').hide();
      $('#militaryForm').hide();
      $('#architecturalForm').hide();
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'antiques'){
            $('#antiquesForm').show();
          }else {
            $('#antiquesForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'cars'){
            $('#carsForm').show();
          }else {
            $('#carsForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'tribalarts'){
            $('#tribalForm').show();
          }else {
            $('#tribalForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'sporting'){
            $('#sportingForm').show();
          }else {
            $('#sportingForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'metals'){
            $('#metalsForm').show();
          }else {
            $('#metalsForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'instruments'){
            $('#instrumentsForm').show();
          }else {
            $('#instrumentsForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'carpets'){
            $('#carpetsForm').show();
          }else {
            $('#carpetsForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'art'){
            $('#artForm').show();
          }else {
            $('#artForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'music'){
            $('#musicForm').show();
          }else {
            $('#musicForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'metalware'){
            $('#metalwareForm').show();
          }else {
            $('#metalwareForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'lighting'){
            $('#lightingForm').show();
          }else {
            $('#lightingForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'jewelry'){
            $('#jewelryForm').show();
          }else {
            $('#jewelryForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'glass'){
            $('#glassForm').show();
          }else {
            $('#glassForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'mirrors'){
            $('#mirrorsForm').show();
          }else {
            $('#mirrorsForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'furnitures'){
            $('#furnituresForm').show();
          }else {
            $('#furnituresForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'clocks'){
            $('#clocksForm').show();
          }else {
            $('#clocksForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'toys'){
            $('#toysForm').show();
          }else {
            $('#toysForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'ceramics'){
            $('#ceramicsForm').show();
          }else {
            $('#ceramicsForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'books'){
            $('#booksForm').show();
          }else {
            $('#booksForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'military'){
            $('#militaryForm').show();
          }else {
            $('#militaryForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'archicetural'){
            $('#architecturalForm').show();
          }else {
            $('#architecturalForm').hide();
          }
      });
      $('#regRequests').change(function(){
          if($('#regRequests').val() == 'tapestry'){
            $('#tapestryForm').show();
          }else {
            $('#tapestryForm').hide();
          }
      });
    });
    $('.handle').on('click', function(){
        $('#mainNav').toggleClass('showing');
    });
    $("#slideshow > div:gt(0)").hide();
    setInterval(function() { 
      $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    },  3000);
});


