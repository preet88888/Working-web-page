// JavaScript Document
$(document).ready(function(){
	$('.h1 img').click(function()
	{
	var x=$(this).attr("src");
	$('body').append('<div class="curtain"></div>');
	$('body').append('<img src="'+x+'" class="light" />')
	$('.light').animate({'opacity':'1'},1500);// if we want to apply animation on pic apply
	//$('.light').animate({'opacity':'1','top':'130px'},1500)//if we want picture will come from top side apply this*/
	$('.light,.curtain').click(function()
	{
	$('.light').remove();//when we click on body pic on curtain remove we can show all body pics
	$('.curtain').remove();	
	});	
	});
	});
		$(document).ready(function(){
	$('.h2 img').click(function()
	{
	var x=$(this).attr("src");
	$('body').append('<div class="curtain"></div>');
	$('body').append('<img src="'+x+'" class="light" />')
	$('.light').animate({'opacity':'1'},1500);// if we want to apply animation on pic apply
	//$('.light').animate({'opacity':'1','top':'130px'},1500)//if we want picture will come from top side apply this*/
	$('.light,.curtain').click(function()
	{
	$('.light').remove();//when we click on body pic on curtain remove we can show all body pics
	$('.curtain').remove();	
	});	
	});
	});
	
		