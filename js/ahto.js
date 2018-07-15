/**
 * Author: Fatima Aurelia
 * Date: 01/22/2017
 * Version: 1.0
 */

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

	//Adiciona .active na aba selecionada no cardápio

	$(".pageHeader_tabs>ul>li").click(function(){
		if ($(".pageHeader_tabs>ul>li").hasClass('active')) {
			$(".pageHeader_tabs>ul>li").removeClass('active');
			$(this).addClass('active');
		}
	});

	var thePizza_img = 0;
	var thePizza_title = 0;
	var thePizza_description = 0;

	$('#cardapio>ul>[id^="pizza_"]').click(function(){
		thePizza_img = $(this).children("img").attr('src');
		thePizza_title = $(this).children("item-title").html();
		thePizza_description = $(this).children("item-description").html();
		$('#thePizza>div>.thePizza_img').attr('src', thePizza_img);
		$('#thePizza>div>.thePizza_title').html(thePizza_title);
		$('#thePizza>div>.thePizza_description').html(thePizza_description);
	});

});