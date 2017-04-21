$(document).ready(function(){
      $('.nav-link').on('click',function(){
          var content = $(this).html();
          $('#formulaire').val(content);
      });

});
