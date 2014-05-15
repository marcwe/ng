$(document).ready(function(){

	$(".expand_heading").css('cursor', 'pointer');
        $(".icon1").css('cursor', 'pointer');
        $(".icon1").css('text-decoration', 'none');
        $(".details").hide();
         var originalFontSize = $('a.expand_heading').css('font-size');
         $("a.expand_heading").css('font-weight', 'bold');
         $("a.expand_heading").css('text-decoration', 'none');
         $("a.expand_heading").css('font-size', '14px');

        $(".expand_heading").click(function(){
                $(this).css('font-weight', 'bold');
                var $icon1 = $(this).prev('.icon1');
                var $current = $(this).next('div[class="details"]');
                var $desc = $current.next('div[class="desc"]');
                var isVisible = $current.is(':visible');
                var isHidden = $current.is(':hidden');
                if(isVisible == true) {
                $icon1.html('&#9658; ');
                isVisible == false; isVisible == true; }
                else {
                $icon1.html('&#9660; ');
                isVisible == true; isVisible == false; }
                $desc.slideToggle("fast");
                $current.slideToggle("slow");

        });


        $(".icon1").click(function(){
                var $link = $(this).next('.expand_heading');
                $link.css('font-weight', 'bold');
                var $current = $link.next('div[class="details"]');
                var $desc = $current.next('div[class="desc"]');
                var isVisible = $current.is(':visible');
                var isHidden = $current.is(':hidden');
                if(isVisible == true) {
                $(this).html('&#9658; ');
                isVisible == false; isVisible == true; }
                else {
                $(this).html('&#9660; ');
                isVisible == true; isVisible == false; }
                $desc.slideToggle("fast");
                $current.slideToggle("slow");
        });


});


