$(document).ready(function(){
      $('.nav-link').on('click',function(){
          var content = $(this).html();
          $('#formulaire').val(content);
      });

      $('.nav-link').click(function(){
      $(this).css('color','white');

      });

      $("li.one").click( function(){
        $("body").removeClass('bg2 , bg3').addClass("bg1");


			});

			$("li.two").click( function(){
				$("body").removeClass("bg1 , bg3").addClass("bg2");
			});

			$("li.three").click( function(){
				$("body").removeClass("bg1 , bg2").addClass("bg3");
			});

});
