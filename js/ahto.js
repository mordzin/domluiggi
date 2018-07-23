 document.addEventListener('click', function (e) {
 	e = e || window.event;
 	var target = e.target || e.srcElement;

 	if (target.hasAttribute('data-toggle') && target.getAttribute('data-toggle') == 'modal') {
 		if (target.hasAttribute('data-target')) {
 			var m_ID = target.getAttribute('data-target');
 			document.getElementById(m_ID).classList.add('open');
 			e.preventDefault();
 		}
 	}

    // Close modal window with 'data-dismiss' attribute or when the backdrop is clicked
    if ((target.hasAttribute('data-dismiss') && target.getAttribute('data-dismiss') == 'modal') || target.classList.contains('modal')) {
    	var modal = document.querySelector('[class="modal open"]');
    	modal.classList.remove('open');
    	e.preventDefault();
    }
}, false);

 $( document ).ready(function() {
   echo.init(); //inicia o lazy load

	//Adiciona .active na aba selecionada no cardápio

	$(".pageHeader_tabs>ul>li").click(function(){
		if ($(".pageHeader_tabs>ul>li").hasClass('active')) {
			$(".pageHeader_tabs>ul>li").removeClass('active');
			$(this).addClass('active');
		}
	});

	$('#cardapio>ul>li').click(function(){
		pizza_img = $("img", this).attr('src');
		pizza_title = $(".item-title", this).text();
		pizza_description = $(".item-description", this).text();
		$('#productView_img').attr('src', pizza_img);
		$('#productView_title').text(pizza_title);
		$('#productView_description').text(pizza_description);
	});

  //Mostra/esconde as pizzas correspondentes a aba ativa
  $(".Tradicional, .Nobre, .Doce, .Bebida, .Especiais").hide();
  $(".Tradicional").show();
  $("#tab-trad").click(function(){
    $(".Tradicional, .Nobre, .Doce, .Bebida, .Especiais").hide();
    $(".Tradicional").show();
  });

  $("#tab-nobres").click(function(){
    $(".Tradicional, .Nobre, .Doce, .Bebida, .Especiais").hide();
    $(".Nobre").show();
  });

  $("#tab-doces").click(function(){
    $(".Tradicional, .Nobre, .Doce, .Bebida, .Especiais").hide();
    $(".Doce").show();
  });

  $("#tab-especiais").click(function(){
    $(".Tradicional, .Nobre, .Doce, .Bebida, .Especiais").hide();
    $(".Especiais").show();
  });

  $("#tab-bebidas").click(function(){
    $(".Tradicional, .Nobre, .Doce, .Bebida, .Especiais").hide();
    $(".Bebida").show();
  });

});
