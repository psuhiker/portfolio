/*
 * Toggle animation class.
 */
(function(){
	jQuery(window).load(function(){
		jQuery('.grid_12.marquee .image, .grid_12.marquee .copy-slider').addClass('loaded');
		var tripleIcons = jQuery('.triple div.image');
		if(tripleIcons.length > 0) {
			var offset = tripleIcons.offset().top + 150;
			var bottomScreen = $(window).height() + $(window).scrollTop();
			if(offset < bottomScreen) {
				tripleIcons.addClass('animated bounce loaded');
			}
			$(window).scroll(function(){			
				offset = tripleIcons.offset().top + 150;
				bottomScreen = $(window).height() + $(window).scrollTop();
				if(offset < bottomScreen) {
					tripleIcons.addClass('animated bounce loaded');
				}
			});
		}
		jQuery('.marquee--blue .copy-slider').addClass('loaded');
		var tripleIcons = jQuery('.triple div.image');
		if(tripleIcons.length > 0) {
			var offset = tripleIcons.offset().top + 150;
			var bottomScreen = $(window).height() + $(window).scrollTop();
			if(offset < bottomScreen) {
				tripleIcons.addClass('animated bounce loaded');
			}
			$(window).scroll(function(){			
				offset = tripleIcons.offset().top + 150;
				bottomScreen = $(window).height() + $(window).scrollTop();
				if(offset < bottomScreen) {
					tripleIcons.addClass('animated bounce loaded');
				}
			});
		}
});
})();

/*
 * Many of OCE's page's have uneven cells. EvenCells makes them an even height.
 */
var EvenCells = {

	/*
	 * Call this method to even out the cells.
	 * 
	 * @param	container	string	jQuery selector to grab element that contains cells. 
	 * @param	cell	string	jQuery selector to grab the cells from the context of your container.
	 * @param	copy	string	jQuery selector to grab the content that is of uneven length from the context of your cell.
	 * @return	null
	 */
	'init' : function(container, cell, copy){
		this.container = container;
		this.cell 	   = cell;
		this.copy      = copy;
		this.setRows();
		if (this.rows != null) {
			// Prevent buildup of spacing divs.
			jQuery('div.evenRows').remove();

			this.setHeight();
		}
	},
	
	'setRows' : function(){
		if (jQuery(EvenCells.container).length > 0 ) {
		    this.rows = jQuery(EvenCells.container);
		} else {
			this.rows = null;
		}
	},
	
	'getMaxHeight' : function( cells ) {
		heights = Array();
		cells.find(EvenCells.cell).each(function(){
			heights.push(jQuery(this).height());
		});
		if (Math.max.apply(null, heights) == Math.min.apply(null, heights)) {
			return null;
		}
		cells.find(EvenCells.cell).each(function(){
			var oldHeight = jQuery(this).height();
			var maxHeight = Math.max.apply(null, heights);
			var heightDiff = maxHeight - oldHeight;
			
			// Add spacer div iff this cell is smaller than biggest cell
			if (heightDiff > 0) {
				var spacer = jQuery("<div class=\"evenRows\" ></div>").height(heightDiff);
				
				// Add spacer immediately after the content that varies in size.
				jQuery(this).find(EvenCells.copy).after(spacer);
			}
	   });
	},
	
	'setHeight' : function() {
		rows = EvenCells.rows;
		rows.each(function(){
			EvenCells.getMaxHeight(jQuery(this));
		});
	}
}

//Even out Special Ed page on load	
jQuery(window).load(function(){
	EvenCells.init(
		'div.grid_12.section.double.border>.container',
		'.copy',
		'p'
	);
});

//Even out Triple section on load	
jQuery(window).load(function(){
	EvenCells.init(
		'div.grid_12.section.triple>.container',
		'.copy',
		'p'
	);
});

//Even out leadership page on load
jQuery(window).load(function(){
	EvenCells.init(
		'div.padding div.container',
		'div.padding',
		'p.title'
	);
});

//Even out Special Ed page on resize
jQuery(window).resize(function(){
	EvenCells.init(
		'div.grid_12.section.double.border>.container',
		'.copy',
		'p'
	);
});

//Even out leadership page on resize
jQuery(window).resize(function(){
	EvenCells.init(
		'div.padding div.container',
		'div.padding',
		'p.title'
	);
});

//Even out Triple section on resize	
jQuery(window).resize(function(){
	EvenCells.init(
		'div.grid_12.section.triple>.container',
		'.copy',
		'p'
	);
});

//FAS Pin Drop
var FasPinDrop = {
	init: function(section, icon, iconShadow){
		this.getSection(section);
		this.iconUrl = icon;
		this.iconShadowUrl = iconShadow;
		if(FasPinDrop.section != null) {
			FasPinDrop.appendOverlay();
			FasPinDrop.appendPins();
			FasPinDrop.dropEvent();
		}
	},
	
	getSection: function(num) {
		if(typeof jQuery('.grid_12.section:nth-of-type(' + num + ')') == 'undefined') {
			FasPinDrop.section = null;
		} else {
			FasPinDrop.section = jQuery(jQuery('.grid_12.section')[num-1]);
		}
	},
	
	appendOverlay: function() {
		FasPinDrop.section.css('position', 'relative');
		FasPinDrop.section.find('.container')
			.css('position', 'relative')
			.css('z-index', '900');
		var height = FasPinDrop.section.outerHeight();
		console.log(height);
		var overlay = jQuery("<div></div>")
			.attr('class', 'pin-overlay')
			.css('height', height)
			.prependTo(FasPinDrop.section);
	},
	
	appendPins: function() {
		var height  = [236,102,164,97,277,355,300,342,200];
		var left    = [1216,396,1578,108,99,399,1119,1266,200];

		for(i = 0; i < 9; i++) {
			FasPinDrop.appendPin(height[i], left[i]);
		}
	},
	
	appendPin: function(top, left) {
		var transDelay = Math.round(Math.random() * 250)/100;
		jQuery("<div></div>")
			.attr('class', 'pin-icon')
			.css('background-image', 'url(' + FasPinDrop.iconUrl + ')')
			.css('left', left)
			.css('top', top - 82)
			
			.prependTo(jQuery('.pin-overlay'));
			
		jQuery("<div></div>")
			.attr('class', 'pin-icon-shadow')
			.css('background-image', 'url(' + FasPinDrop.iconShadowUrl + ')')
			.css('top', top)
			.css('left', left - 2)
			.css('position', 'absolute')
			.css('-webkit-animation-duration', '.3s')
			.css('-webkit-animation-delay', '.3s')
			.prependTo(jQuery('.pin-overlay'));
	},
	
	dropPins: function() {
		jQuery('.pin-icon').each(function(){
			var delay = Math.random()*2000
			var pin = $(this);
			setTimeout(function(){
			pin
				.css('opacity', '1')
				.addClass('animated bounceInDown');
			pin.prev()
				.addClass('animated  bounceInDown').css('opacity', '.5')
				;
		}, delay);
		});
	},
	
	dropEvent: function() {
		var position, threshold;
		$(window).scroll(function(){
			position = $('.pin-overlay').offset().top
				+ $('.pin-overlay').height()
				- $(window).scrollTop()
				- $(window).height();
			threshold = 100;
			if(threshold > position) {
				FasPinDrop.dropPins();
			}	 
		});
		
		$(window).load(function(){
			position = $('.pin-overlay').offset().top
				+ $('.pin-overlay').height()
				- $(window).scrollTop()
				- $(window).height();
			threshold = 100;
			if(threshold > position) {
				FasPinDrop.dropPins();
			}	 
		});
	}
};


/* Leadership Page Hover Overlay */
function resizeOverlay() {
	imageHeight = parseFloat(jQuery('.bios .profile img').css('height'));
	textHeight = parseFloat(jQuery('.bios .profile h3').css('height'));
	textOffset = (imageHeight / 2) - 16;
	jQuery('.bios .profile .overlay').css('height', imageHeight);
	jQuery('.bios .profile .overlay h3').css('margin-top', textOffset );
}

jQuery(window).load(function(){resizeOverlay()});
jQuery(window).resize(function(){resizeOverlay()});


/* Reduce Long Title Size */
function bioTitleResize() {
	jQuery('.bio-info h1').removeClass('too-big');
	titleHeight = parseInt(jQuery('.bio-info h1').outerHeight());
	if (titleHeight > 200) {
		console.log('ha');
		jQuery('.bio-info h1').addClass('too-big')
	}
}
jQuery(window).load(function(){bioTitleResize();});
jQuery(window).resize(function(){bioTitleResize();});

/* Center square panel links because wordpress likes to <p> all over my work */
function squarePanelLinkCenter(){
	jQuery('.copy-parent .copy a').parent().css('text-align', 'center');
}
if(jQuery('.minimalist').length > 0){squarePanelLinkCenter();}

/* Add Modal Popup to Google Map School Link */
function revealModal(event) {
	if(jQuery('div.wpsl-infobox').length !== 0) {
		var modalId = '#' + jQuery('div.wpsl-infobox>div>p>strong>a').attr('data-reveal-id');
		var href = event.href;
		if(jQuery(event).parent().parent().parent().parent().prop('tagName') !== "LI") {
			jQuery(modalId).foundation('reveal', 'open', href);
		}
		return false;
	}
}
