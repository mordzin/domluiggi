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
	
	$('#cardapio>ul>li').click(function(){
		pizza_img = $("img", this).attr('src');
		pizza_title = $(".item-title", this).text();
		pizza_description = $(".item-description", this).text();
		$('#productView_img').attr('src', pizza_img);
		$('#productView_title').text(pizza_title);
		$('#productView_description').text(pizza_description);
	});
});