(function($){
  $(function(){

    $('.button-collapse').sideNav({
    	closeOnClick : true
    });
    $('.modal-trigger').leanModal();
    $(".dropdown-button").dropdown();

  }); 

  $('select').material_select();
})(jQuery); 