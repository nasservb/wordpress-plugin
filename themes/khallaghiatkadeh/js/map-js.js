/*
 * Iran map - SVG format and full responsive - Free and open source.
 * Version 1.0.0
 * Copyright © 2014.
 * By: MohammadReza Pourmohammad.
 * Email: mohammadrpm@gmail.com
 * Web: http://mrpm.ir - http://aysuweb.com
 */

$(function() {

    $(window).resize(function() {
        resposive();
    });

    function resposive() {
        var height = $('#map .list').height();
        var width = $('#map .list').width();
        if (height > width) {
            $('#map .map').height(width).width(width);
        } else if (height < width) {
            $('#map .map').height(height).width(height);
        } else {
            $('#map .map').height(height).width(height);
        }
    }
    resposive();

    $('#map svg g path').hover(function() {
        var className = $(this).attr('class');
        var parrentClassName = $(this).parent('g').attr('class');
        var itemName = $('#map .list .' + parrentClassName + ' .' + className + ' a').html();
        if (itemName) {
            $('#map .list .' + parrentClassName + ' .' + className + ' a').addClass('hover');
            $('#map .show-title').html(itemName).css({'display': 'block'});
			$('#map .list .' + parrentClassName + ' .' + className + ' a').popover('show');
			
			$('.popover').css('left','');
			
			$('.popover-title').append('<button type="button" class="close">&nbsp;&times;</button>');			
			e.preventDefault();			
			$('.close').click(function(e){
				$('.popover').popover('hide');
			});
        }
    }, function() {
        $('#map .list a').removeClass('hover');
		$('.popover').hide();
        $('#map .show-title').html('').css({'display': 'none'});
    });

    $('#map .list ul li ul li a').hover(function() {		
        var className = $(this).parent('li').attr('class');
        var parrentClassName = $(this).parent('li').parent('ul').parent('li').attr('class');
        var object = '#map svg g.' + parrentClassName + ' path.' + className;
        var currentClass = $(object).attr('class');
        $(object).attr('class', currentClass + ' hover');
    }, function() {
        var className = $(this).parent('li').attr('class');
        var parrentClassName = $(this).parent('li').parent('ul').parent('li').attr('class');
        var object = '#map svg g.' + parrentClassName + ' path.' + className;
        var currentClass = $(object).attr('class');
        $(object).attr('class', currentClass.replace(' hover', ''));
    });

    $('#map').mousemove(function(event) {
        if ($('#map .show-title').html()) {
            var offset = $(this).offset();
            var x = (event.clientX - offset.left + 30) + 'px';
            var y = (event.clientY - offset.top - 5) + 'px';
            $('#map .show-title').css({'left': x, 'top': y});
        }
    });

	 
	          
    $('[data-toggle="popover"]').popover(
		{
			html : true,
			trigger: "hover"
        }).mouseenter(function(e) 
		{
			//$(this).popover('show');
			$('.popover-title').append('<button type="button" class="close">&times;&nbsp;</button>');			
			e.preventDefault();
			
			$('.close').click(function(e){
				$('.popover').popover('hide');
			});
        });
});