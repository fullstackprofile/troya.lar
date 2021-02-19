(function($) {
	$.fn.thumbPopup = function(callback, options) {
		//Combine the passed in options with the default settings
		var settings = jQuery.extend({
			popupId: 'popup-hint',
			popupClass: 'popup-hint',
			cursorTopOffset: 15,
			cursorLeftOffset: 15,
			windowRightOffset: 15,
			loadingHtml: '<span style="padding: 5px;">Loading...</span>'
		}, options);

		//Create our popup element
		var popup = $('<div />')
			.attr({id: settings.popupId, className: settings.popupClass})
			.css({position:'absolute'})	//, whiteSpace:'nowrap'
			.appendTo('body').hide();

		var callback = callback;

		//Attach hover events that manage the popup
		$(this)
			.hover(showPopup, hidePopup)
			.mousemove(updatePopupPosition);

		function showPopup(event) {
			/*var str = '';
			for (var i in event) {
				str += i + ' = ' + event[i] + ';\n';
			}*/
			var html = callback(event.currentTarget);
			$(popup).html(html);
			updatePopupPosition(event);
			$(popup).show();
		}

		function hidePopup(event) {
			$(popup).empty().hide();
		}

		function updatePopupPosition(event) {
			var windowSize = getWindowSize();
			var popupSize = getPopupSize();
			if (windowSize.width + windowSize.scrollLeft < event.pageX + popupSize.width + settings.cursorLeftOffset + settings.windowRightOffset){
				//$(popup).css("left", event.pageX - popupSize.width - settings.cursorLeftOffset);
				$(popup).css('left', windowSize.width - popupSize.width - settings.windowRightOffset);
			} else {
				$(popup).css('left', event.pageX + settings.cursorLeftOffset);
			}
			if (windowSize.height + windowSize.scrollTop < event.pageY + popupSize.height + settings.cursorTopOffset){
				$(popup).css('top', event.pageY - popupSize.height - settings.cursorTopOffset);
			} else {
				$(popup).css('top', event.pageY + settings.cursorTopOffset);
			}
		}

		function getWindowSize() {
			return {
				scrollLeft: $(window).scrollLeft(),
				scrollTop: $(window).scrollTop(),
				width: $(window).width(),
				height: $(window).height()
			};
		}

		function getPopupSize() {
			return {
				width: $(popup).width(),
				height: $(popup).height()
			};
		}

		//Return original selection for chaining
		return this;
	};
})(jQuery);