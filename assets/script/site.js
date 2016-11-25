function notDone() {
	alert('Bu eklenti şuan hazır değil.');
}

$(document).ready(function(){
// Slider Başlangıcı

$(".Slider_Sol ul li:first").show();
$(".Slider_Sag ul li:first").show();
$(".rastgele ul li:first").show();

sliderAdet 	= $(".Slider_Sol ul").children().size()-1;
sliderAdet1 = $(".Slider_Sag ul").children().size()-1;
sliderAdet2 	= $(".rastgele ul").children().size()-1;

$('.Slider_Sol ul li').fadeOut(0);
$('.Slider_Sag ul li').fadeOut(0);
$('.rastgele ul li').fadeOut(0);

$('.Slider_Sol ul li:eq(0)').fadeIn(0);
$('.Slider_Sag ul li:eq(0)').fadeIn(0);
$('.rastgele ul li:eq(0)').fadeIn(0);

sliderTimer = setInterval('sliderGecis_sol()',4000);
sliderTimer = setInterval('sliderGecis_sag()',5000);
sliderTimer = setInterval('sliderGecis_rastgele()',3000);

// Kullanıcı Paneli
$(".sayfalama a:last").css({"border": "none"});
$(".profil ul li a:last").css({"color": "#e03d3d"});
$(".profil ul li:last").css({"border-bottom":"none"});
$("#profil span").click(function(){
	$(".profil").slideToggle();
});
/* Yukarı Çık Alanı */
$("#top").click(function(){$("html,body").stop().animate({scrollTop: "0"}, 1000);});
$(window).scroll(function(){
	var uzunluk	= $(document).scrollTop();
		if(uzunluk > 5){
			$("#top").fadeIn(1000);
		}else{
			$("#top").fadeOut(1000);
		}
});
/* Hakkımda Alanı */
$("#alanim div").hide();
$("#alanim span").click(function(){
 var index = $(this).next("div"); 
 $("#alanim div").not(index).slideUp(300);
 $(index).slideToggle(300);
});
// Profil Alanı Tab
$('#tabs div').hide();
	$('#tabs div:first').show();
	$('#tabs ul li:first').addClass('aktif');
	$('#tabs ul li a').click(function(){
	  $('#tabs ul li').removeClass('aktif'); 
	  $(this).parent().addClass('aktif'); 
	  var currentTab = $(this).attr('href'); 
	  $('#tabs div').hide(); 
	  $(currentTab).show();
	  return false;
});
// Css
$(".yorumlar:last").css("border-bottom","none");
$(".yorumlar:last").css("margin-bottom","-10px");
});
// Dışarıda Kalanlar 
var sayac 		= 1;
var sayac2 		= 1;
var sayac3 		= 1;
function sliderGecis_sol(){
  if (sayac > sliderAdet){sayac=0};
  $(".Slider_Sol ul li").fadeOut(0);
  $(".Slider_Sol ul li:eq(" + sayac + ")").fadeIn("show");
  sayac++;
};
function sliderGecis_sag(){
  if (sayac2 > sliderAdet1){sayac2=0};
  $(".Slider_Sag ul li").fadeOut(0);
  $(".Slider_Sag ul li:eq(" + sayac2 + ")").fadeIn("show");
  sayac2++;
};
function sliderGecis_rastgele(){
  if (sayac3 > sliderAdet2){sayac3=0};
  $(".rastgele ul li").fadeOut(0);
  $(".rastgele ul li:eq(" + sayac3 + ")").fadeIn("show");
  sayac3++;
};
// Slide Sonu