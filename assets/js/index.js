// var myScroll;

// function loaded() {
// 	myScroll = new iScroll('wrapper');
// }

$(window).load(function (){

	//loaded();

	// setTimeout( function(){
	//   myScroll.refresh() ;
	// } , 100 ) ;
	
});
$(document).ready(function (){
	$('.link').click(function (){
		window.open("");
	});

	$('.pop').hide();
	
	photoList(1);

	$('.inningVal li').click(function (){
		$('.selectedVal input').val($(this).text());
		var splitText = $(this).text().split("년");

		var n = splitText[1].split("회");
	
		photoList(n[0]);

		$('.inning').val("제"+splitText[1]);
		$('#wrapper').addClass("hide");
		$('.selectedVal').css("background-image","url('"+base_url+"assets/img/selectOff.png')");
		
	});

	$('.selectedVal').click(function (){

		if($('#wrapper').hasClass("hide")){
			$('.selectedVal').css("background-image","url('"+base_url+"assets/img/selectOn.png')");
			$('#wrapper').removeClass("hide");

		}else{
			$('#wrapper').addClass("hide");
			$('.selectedVal').css("background-image","url('"+base_url+"assets/img/selectOff.png')");
			
		}
	});
	$('.popClose').click(function (){
	
		$('.pop').hide();
	});

	$('.main').click(function (event){

		var picName = event.target.className;

		var picNum = picName.split("_");
		var ext;
		if(picNum[1]){//tag 클릭시
			var dataNum = picNum[2];
			if(picNum[1]<=10){
				ext = ".jpg";
			}else{
				ext = ".PNG";
			}

			$('.popImg').attr("src",base_url+"assets/img/imgPrize/"+picNum[1]+"th/"+dataNum+ext);
			if(picNum[1]==1&&dataNum==1){
				$('.popImg').css("margin-top","90px");
			}else{
				$('.popImg').css("margin-top","0px");
			}

			var pop_title = $("."+picName+" input")[0].value;
			var pop_prize = $("."+picName+" input")[1].value;
			var pop_name = $("."+picName+" input")[2].value;
			var pop_roadName = $("."+picName+" input")[3].value;

			$('.text1').text($('.inning').val()+" "+$('.header_text').val()+" "+pop_prize);	

			if(!pop_name){
				$('.text2').text(pop_title);
			}else{
				$('.text2').text(pop_title+" - "+pop_name);
			}
			
			$('.text3').text(pop_roadName);
			

			$('.pop').show();
			
		}
	
	});

});

function photoList(n){
	
	$.get(base_url+"photo",
		{n:n},
		function(data){
		$('.main').html("");
		$('.main').html(data);
	});
}
