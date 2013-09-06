$(document).ready(function(){
	$('.openlightbox').click(function(){
		$('.backdrop').animate({'opacity':'0.5'},300,'linear');
		$('.lightbox').animate({'opacity':'1.00'},300,'linear');
		$('.lightbox, .backdrop').css('display','block');
	});
	
	$('.close,.backdrop').click(function(){
		$('.backdrop').animate({'opacity':'0'},300,'linear');
		$('.lightbox').animate({'opacity':'0'},300,'linear');
		$('.lightbox, .backdrop').css('display','none');
	});
});