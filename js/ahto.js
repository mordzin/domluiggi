$( document ).ready(function() {

	//Adiciona .active na aba selecionada no cardápio

	$(".pageHeader_tabs>ul>li").click(function(){
		if ($(".pageHeader_tabs>ul>li").hasClass('active')) {
			$(".pageHeader_tabs>ul>li").removeClass('active');
			$(this).addClass('active');
		}
	});
});