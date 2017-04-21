$(document).ready(function(){

        $("body > #about").mouseover(function(){
            $("section > div.sec_1 > .left").show({ effect: "scale"});
        });

       $('#top > a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 700);
			return false;
		});
	});
        
