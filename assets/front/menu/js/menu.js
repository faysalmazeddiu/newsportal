/*!
 * jQuery Cookie Plugin v1.3.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as anonymous module.
		define(['jquery'], factory);
	} else {
		// Browser globals.
		factory(jQuery);
	}
}(function ($) {

	var pluses = /\+/g;

	function raw(s) {
		return s;
	}

	function decoded(s) {
		return decodeURIComponent(s.replace(pluses, ' '));
	}

	function converted(s) {
		if (s.indexOf('"') === 0) {
			// This is a quoted cookie as according to RFC2068, unescape
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}
		try {
			return config.json ? JSON.parse(s) : s;
		} catch(er) {}
	}

	var config = $.cookie = function (key, value, options) {

		// write
		if (value !== undefined) {
			options = $.extend({}, config.defaults, options);

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setDate(t.getDate() + days);
			}

			value = config.json ? JSON.stringify(value) : String(value);

			return (document.cookie = [
				config.raw ? key : encodeURIComponent(key),
				'=',
				config.raw ? value : encodeURIComponent(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// read
		var decode = config.raw ? raw : decoded;
		var cookies = document.cookie.split('; ');
		var result = key ? undefined : {};
		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			var name = decode(parts.shift());
			var cookie = decode(parts.join('='));

			if (key && key === name) {
				result = converted(cookie);
				break;
			}

			if (!key) {
				result[name] = converted(cookie);
			}
		}

		return result;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) !== undefined) {
			// Must not alter options, thus extending a fresh object...
			$.cookie(key, '', $.extend({}, options, { expires: -1 }));
			return true;
		}
		return false;
	};

}));


//Title: Custom DropDown plugin by PC
//Documentation: http://designwithpc.com/Plugins/ddslick
//Author: PC 
//Website: http://designwithpc.com
//Twitter: http://twitter.com/chaudharyp

(function ($) {

    $.fn.ddslick = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + method + ' does not exists.');
        }
    };

    var methods = {},

    //Set defauls for the control
    defaults = {
        data: [],
        keepJSONItemsOnTop: false,
        width: 260,
        height: null,
        background: "#eee",
        selectText: "",
        defaultSelectedIndex: null,
        truncateDescription: true,
        imagePosition: "left",
        showSelectedHTML: true,
        clickOffToClose: true,
        onSelected: function () { }
    },

    ddSelectHtml = '<div class="dd-select form-control"><input class="dd-selected-value" type="hidden" /><a class="dd-selected"></a><span class="dd-pointer dd-pointer-down"></span></div>',
    ddOptionsHtml = '<ul class="dd-options"></ul>',

    //CSS for ddSlick
    ddslickCSS = '<style id="css-ddslick" type="text/css">' +
                '.dd-select{ border-radius:4px; border:solid 1px #ccc; position:relative; cursor:pointer; background:none !important; }' +
                '.dd-desc { color:#aaa; display:block; overflow: hidden; font-weight:normal; line-height: 1.4em; }' +
                '.dd-selected{ overflow:hidden; display:block; font-weight:normal !important;}' +
                '.dd-selected label{font-weight:normal !important;}' +
                '.dd-pointer{ width:0; height:0; position:absolute; right:10px; top:50%; margin-top:-3px;}' +
                '.dd-pointer-down{ border:solid 5px transparent; border-top:solid 5px #000; }' +
                '.dd-option-color{ height:20px; width:50px;display:block;float:right}' +
                '.dd-selected-color{ height:20px; width:50px;display:block;float:right; margin-right:20px}' +
                '.dd-pointer-up{border:solid 5px transparent !important; border-bottom:solid 5px #000 !important; margin-top:-8px;}' +
                '.dd-options{ border:solid 1px #ccc; border-top:none; list-style:none; box-shadow:0px 1px 5px #ddd; display:none; position:absolute; z-index:2000; margin:0; padding:0;background:#fff; overflow:auto;}' +
                '.dd-option{ padding:10px 32px 10px 12px; display:block; border-bottom:solid 1px #ddd; overflow:hidden; text-decoration:none; color:#333; cursor:pointer;-webkit-transition: all 0.25s ease-in-out; -moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;-ms-transition: all 0.25s ease-in-out; }' +
                '.dd-options > li:last-child > .dd-option{ border-bottom:none;}' +
                '.dd-option:hover{ background:#f3f3f3; color:#000;}' +
                '.dd-selected-description-truncated { text-overflow: ellipsis; white-space:nowrap; }' +
                '.dd-option-selected { background:#f6f6f6; }' +
                '.dd-option-image, .dd-selected-image { vertical-align:middle; float:left; margin-right:5px; max-width:64px;}' +
                '.dd-image-right { float:right; margin-right:15px; margin-left:5px;}' +
                '.dd-container{ position:relative;}? .dd-selected-text { font-weight:bold}?</style>';

    //CSS styles are only added once.
    if ($('#css-ddslick').length <= 0) {
        $(ddslickCSS).appendTo('head');
    }

    //Public methods 
    methods.init = function (options) {
        //Preserve the original defaults by passing an empty object as the target
        var options = $.extend({}, defaults, options);

        //Apply on all selected elements
        return this.each(function () {
            var obj = $(this),
                data = obj.data('ddslick');
            //If the plugin has not been initialized yet
            if (!data) {

                var ddSelect = [], ddJson = options.data;

                //Get data from HTML select options
                obj.find('option').each(function () {
                    var $this = $(this), thisData = $this.data();
                    ddSelect.push({
                        text: $.trim($this.text()),
                        value: $this.val(),
                        selected: $this.is(':selected'),
                        description: thisData.description,
                        color: thisData.color,
                        imageSrc: thisData.imagesrc //keep it lowercase for HTML5 data-attributes
                    });
                });

                //Update Plugin data merging both HTML select data and JSON data for the dropdown
                if (options.keepJSONItemsOnTop)
                    $.merge(options.data, ddSelect);
                else options.data = $.merge(ddSelect, options.data);

                //Replace HTML select with empty placeholder, keep the original
                var original = obj, placeholder = $('<div id="' + obj.attr('id') + '"></div>');
                obj.replaceWith(placeholder);
                obj = placeholder;

                //Add classes and append ddSelectHtml & ddOptionsHtml to the container
                obj.addClass('dd-container').append(ddSelectHtml).append(ddOptionsHtml);

                //Get newly created ddOptions and ddSelect to manipulate
                var ddSelect = obj.find('.dd-select'),
                    ddOptions = obj.find('.dd-options');

                //Set widths
                ddOptions.css({ width: options.width });
                ddSelect.css({ width: options.width, background: options.background });
                obj.css({ width: options.width });

                //Set height
                if (options.height != null)
                    ddOptions.css({ height: options.height, overflow: 'auto' });

                //Add ddOptions to the container. Replace with template engine later.
                $.each(options.data, function (index, item) {
                    if (item.selected) options.defaultSelectedIndex = index;
                    ddOptions.append('<li>' +
                        '<a class="dd-option">' +
                            (item.value ? ' <input class="dd-option-value" type="hidden" value="' + item.value + '" />' : '') +
                            (item.imageSrc ? ' <img class="dd-option-image' + (options.imagePosition == "right" ? ' dd-image-right' : '') + '" src="' + item.imageSrc + '" />' : '') +
                            (item.text ? ' <label class="dd-option-text">' + item.text + '</label>' : '') +
                            (item.description ? ' <small class="dd-option-description dd-desc">' + item.description + '</small>' : '') +
                            (item.color ? ' <span class="dd-option-color" style="background-color:' + item.color + '"></span>' : '') +
                        '</a>' +
                    '</li>');
                });

                //Save plugin data.
                var pluginData = {
                    settings: options,
                    original: original,
                    selectedIndex: -1,
                    selectedItem: null,
                    selectedData: null
                }
                obj.data('ddslick', pluginData);

                //Check if needs to show the select text, otherwise show selected or default selection
                if (options.selectText.length > 0 && options.defaultSelectedIndex == null) {
                    obj.find('.dd-selected').html(options.selectText);
                }
                else {
                    var index = (options.defaultSelectedIndex != null && options.defaultSelectedIndex >= 0 && options.defaultSelectedIndex < options.data.length)
                                ? options.defaultSelectedIndex
                                : 0;
                    selectIndex(obj, index);
                }

                //EVENTS
                //Displaying options
                obj.find('.dd-select').on('click.ddslick', function () {
                    open(obj);
                });

                //Selecting an option
                obj.find('.dd-option').on('click.ddslick', function () {
                    selectIndex(obj, $(this).closest('li').index());
                });

                //Click anywhere to close
                if (options.clickOffToClose) {
                    ddOptions.addClass('dd-click-off-close');
                    obj.on('click.ddslick', function (e) { e.stopPropagation(); });
                    $('body').on('click', function () {
                        $('.dd-click-off-close').slideUp(50).siblings('.dd-select').find('.dd-pointer').removeClass('dd-pointer-up');
                    });
                }
            }
        });
    };

    //Public method to select an option by its index
    methods.select = function (options) {
        return this.each(function () {
            if (options.index)
                selectIndex($(this), options.index);
        });
    }

    //Public method to open drop down
    methods.open = function () {
        return this.each(function () {
            var $this = $(this),
                pluginData = $this.data('ddslick');

            //Check if plugin is initialized
            if (pluginData)
                open($this);
        });
    };

    //Public method to close drop down
    methods.close = function () {
        return this.each(function () {
            var $this = $(this),
                pluginData = $this.data('ddslick');

            //Check if plugin is initialized
            if (pluginData)
                close($this);
        });
    };

    //Public method to destroy. Unbind all events and restore the original Html select/options
    methods.destroy = function () {
        return this.each(function () {
            var $this = $(this),
                pluginData = $this.data('ddslick');

            //Check if already destroyed
            if (pluginData) {
                var originalElement = pluginData.original;
                $this.removeData('ddslick').unbind('.ddslick').replaceWith(originalElement);
            }
        });
    }

    //Private: Select index
    function selectIndex(obj, index) {

        //Get plugin data
        var pluginData = obj.data('ddslick');

        //Get required elements
        var ddSelected = obj.find('.dd-selected'),
            ddSelectedValue = ddSelected.siblings('.dd-selected-value'),
            ddOptions = obj.find('.dd-options'),
            ddPointer = ddSelected.siblings('.dd-pointer'),
            selectedOption = obj.find('.dd-option').eq(index),
            selectedLiItem = selectedOption.closest('li'),
            settings = pluginData.settings,
            selectedData = pluginData.settings.data[index];

        //Highlight selected option
        obj.find('.dd-option').removeClass('dd-option-selected');
        selectedOption.addClass('dd-option-selected');

        //Update or Set plugin data with new selection
        pluginData.selectedIndex = index;
        pluginData.selectedItem = selectedLiItem;
        pluginData.selectedData = selectedData;

        //If set to display to full html, add html
        if (settings.showSelectedHTML) {
            ddSelected.html(
                    (selectedData.imageSrc ? '<img class="dd-selected-image' + (settings.imagePosition == "right" ? ' dd-image-right' : '') + '" src="' + selectedData.imageSrc + '" />' : '') +
                    (selectedData.text ? '<label class="dd-selected-text">' + selectedData.text + '</label>' : '') +
                    (selectedData.color ? '<span class="dd-selected-color" style="background-color: '+selectedData.color+'"></span>' : '') +
                    (selectedData.description ? '<small class="dd-selected-description dd-desc' + (settings.truncateDescription ? ' dd-selected-description-truncated' : '') + '" >' + selectedData.description + '</small>' : '')
                );

        }
        //Else only display text as selection
        else ddSelected.html(selectedData.text);

        //Updating selected option value
        ddSelectedValue.val(selectedData.value);

        //BONUS! Update the original element attribute with the new selection
        pluginData.original.val(selectedData.value);
        obj.data('ddslick', pluginData);

        //Close options on selection
        close(obj);

        //Adjust appearence for selected option
        adjustSelectedHeight(obj);

        //Callback function on selection
        if (typeof settings.onSelected == 'function') {
            settings.onSelected.call(this, pluginData);
        }
    }

    //Private: Close the drop down options
    function open(obj) {

        var $this = obj.find('.dd-select'),
            ddOptions = $this.siblings('.dd-options'),
            ddPointer = $this.find('.dd-pointer'),
            wasOpen = ddOptions.is(':visible');

        //Close all open options (multiple plugins) on the page
        $('.dd-click-off-close').not(ddOptions).slideUp(50);
        $('.dd-pointer').removeClass('dd-pointer-up');

        if (wasOpen) {
            ddOptions.slideUp('fast');
            ddPointer.removeClass('dd-pointer-up');
        }
        else {
            ddOptions.slideDown('fast');
            ddPointer.addClass('dd-pointer-up');
        }

        //Fix text height (i.e. display title in center), if there is no description
        adjustOptionsHeight(obj);
    }

    //Private: Close the drop down options
    function close(obj) {
        //Close drop down and adjust pointer direction
        obj.find('.dd-options').slideUp(50);
        obj.find('.dd-pointer').removeClass('dd-pointer-up').removeClass('dd-pointer-up');
    }

    //Private: Adjust appearence for selected option (move title to middle), when no desripction
    function adjustSelectedHeight(obj) {

        //Get height of dd-selected
        var lSHeight = obj.find('.dd-select').css('height');

        //Check if there is selected description
        var descriptionSelected = obj.find('.dd-selected-description');
        var imgSelected = obj.find('.dd-selected-image');
        if (descriptionSelected.length <= 0 && imgSelected.length > 0) {
            obj.find('.dd-selected-text').css('lineHeight', lSHeight);
        }
    }

    //Private: Adjust appearence for drop down options (move title to middle), when no desripction
    function adjustOptionsHeight(obj) {
        obj.find('.dd-option').each(function () {
            var $this = $(this);
            var lOHeight = $this.css('height');
            var descriptionOption = $this.find('.dd-option-description');
            var imgOption = obj.find('.dd-option-image');
            if (descriptionOption.length <= 0 && imgOption.length > 0) {
                $this.find('.dd-option-text').css('lineHeight', lOHeight);
            }
        });
    }

})(jQuery);



(function(f){var i;var j=f(window).width();var e,l,o,p,d,m,r,n;var c,q,h,a,b,k;f.cssEase={"default":"ease","in":"ease-in",out:"ease-out","in-out":"ease-in-out",snap:"cubic-bezier(0,1,.5,1)",easeOutCubic:"cubic-bezier(.215,.61,.355,1)",easeInOutCubic:"cubic-bezier(.645,.045,.355,1)",easeInCirc:"cubic-bezier(.6,.04,.98,.335)",easeOutCirc:"cubic-bezier(.075,.82,.165,1)",easeInOutCirc:"cubic-bezier(.785,.135,.15,.86)",easeInExpo:"cubic-bezier(.95,.05,.795,.035)",easeOutExpo:"cubic-bezier(.19,1,.22,1)",easeInOutExpo:"cubic-bezier(1,0,0,1)",easeInQuad:"cubic-bezier(.55,.085,.68,.53)",easeOutQuad:"cubic-bezier(.25,.46,.45,.94)",easeInOutQuad:"cubic-bezier(.455,.03,.515,.955)",easeInQuart:"cubic-bezier(.895,.03,.685,.22)",easeOutQuart:"cubic-bezier(.165,.84,.44,1)",easeInOutQuart:"cubic-bezier(.77,0,.175,1)",easeInQuint:"cubic-bezier(.755,.05,.855,.06)",easeOutQuint:"cubic-bezier(.23,1,.32,1)",easeInOutQuint:"cubic-bezier(.86,0,.07,1)",easeInSine:"cubic-bezier(.47,0,.745,.715)",easeOutSine:"cubic-bezier(.39,.575,.565,1)",easeInOutSine:"cubic-bezier(.445,.05,.55,.95)",easeInBack:"cubic-bezier(.6,-.28,.735,.045)",easeOutBack:"cubic-bezier(.175, .885,.32,1.275)",easeInOutBack:"cubic-bezier(.68,-.55,.265,1.55)"};f.fn.menu3d=function(s){i=f(this);var t=f.extend({},f.fn.menu3d.defaults,s);t.easing=f.cssEase[t.easing];e=t.responsive;l=t.clickable;o=t.skin;p=t.speed;d=t.vertical;m=t.easing;r=t.hoverIn;n=t.hoverOut;if(l){f(document).click(function(v){var u=f(v.target).parents();if(!f(u).hasClass("open")){f.fn.menu3d.closeDropdown()}})}if(t.responsive){i.addClass("responsive")}else{i.removeClass("responsive")}f.fn.menu3d.init(i);f.fn.menu3d.setVertical(i,t.vertical,j);i.removeClass(function(u,v){return(v.match(/\bskin-\S+/g)||[]).join(" ")});i.addClass(t.skin);c=i.outerHeight();q=i.outerWidth();h=i.offset().top;a=i.offset().left;b=a+q;k=h+c;i.find("li > ul.sub").parent().prepend('<span class="arrow-icon"></span>');if(t.clickable){i.find("> ul > li:not(.menu-non-dropdown):not(.no-link)").find(">a,>span").click(function(){var u=f(this).parent();var v=f(u).hasClass("open");if(!v){f.fn.menu3d.closeDropdown(u);f.fn.menu3d.hoverIn(u);f(u).addClass("open");return false}else{f.fn.menu3d.closeDropdown();return false}});i.find("li > ul.sub").parent().click(function(){var u=f(this);var v=f(u).hasClass("open");var w=f(u).find("> ul");f(w).click(function(){v=false;f(u).removeClass("open")});if(v){f.fn.menu3d.hoverOutSub(this);f(u).removeClass("open");f(u).find("ul.dropdown-menu").hide()}else{f.fn.menu3d.hoverInSub(this);f(u).addClass("open")}})}else{i.find("li > ul.sub").parent().hover(function(){f.fn.menu3d.hoverInSub(this)},function(){f.fn.menu3d.hoverOutSub(this)});i.find("> ul > li:not(.menu-non-dropdown):not(.no-link)").hover(function(){f.fn.menu3d.hoverIn(this)},function(){f.fn.menu3d.hoverOut(this)})}};f.fn.menu3d.init=function(s){i=f(s);i.prepend('<div class="menuToggle">Menu <span class="megaMenuToggle-icon"></span></div>');i.find(".txtSearch").focus(function(){f(this).val("")}).blur(function(){f(this).val("Search...")});i.find("> ul > li:not(.menu-non-dropdown):not(.no-link):last").addClass("last");i.find("> ul > li:first").addClass("first");i.find(".menuToggle").click(function(){i.find("> ul").toggle()})};f.fn.menu3d.closeDropdown=function(s){var t=i.find(" > ul > .open");if(s){t=i.find(" > ul > .open").not(s)}f(t).removeClass("open");f.fn.menu3d.hoverOut(t);f(t).find(".open").removeClass("open");f(t).find("ul.dropdown-menu").hide()};f.fn.menu3d.hoverIn=function(C){var w=f(C).find("> div:not(.movingout)");var y=r;var A=n;if(f(w).attr("animate-in")!=undefined&&f(w).attr("animate-in").length!=0){y=f(w).attr("animate-in")}if(f(w).attr("animate-out")!=undefined&&f(w).attr("animate-out").length!=0){A=f(w).attr("animate-in")}if(y=="slideDown"){f(w).css("z-index",100).removeClass(A).slideDown(p/2).addClass(y)}else{f(w).css("z-index",100).show().removeClass(A).css({"animation-fill-mode":"both","animation-duration":p+"ms","animation-timing-function":m}).addClass(y);var t=f(C).find("> .dropdown-menu");var u=f(t).outerWidth();var D=f(t).outerHeight();var v=f(t).parent().offset().left;var B=v+u;var z=f(t).parent().offset().top;var s=z+D;f(t).css("left","");if(j>768){if(d){if(s>=k){var x=s-k+1;if(D>c){f(C).css("position","static");f(t).css("top","0px")}else{f(t).css("top",-x)}}}else{if(B>=b){f(t).css("right","-1px")}}}}};f.fn.menu3d.hoverOut=function(A){if(f(A).length>0){var t=f(A).find("> div");var x=r;var y=n;if(f(t).attr("animate-in")!=undefined&&f(t).attr("animate-in").length!=0){x=f(t).attr("animate-in")}if(f(t).attr("animate-out")!=undefined&&f(t).attr("animate-out").length!=0){y=f(t).attr("animate-out")}var w=f(A).find("> div."+x);if(y=="none"){f(w).removeClass(x).hide((p/2))}else{if(y=="slideUp"){f(w).removeClass(x).slideUp((p/2))}else{f(w).css("z-index",1).removeClass(x).css({"animation-fill-mode":"both","animation-duration":(p/2)+"ms","animation-timing-function":m}).addClass(y+" movingout")}}g(w,y,p);var s=f(A).find(".dropdown-menu");var v=f(s).offset().left;var u=f(s).outerWidth();var z=v+u;if(j>768){if(z>=j){f(s).css("left","-1px")}}f(s).parent().width("");f(s).width("")}};f.fn.menu3d.hoverInSub=function(s){f(s).find("> ul").stop(true,true).slideDown(100);var v=f(s).find("> ul");var x=f(s).offset().left;var u=f(s).outerWidth();var t=x+u+u+80;var w=f(window).width();if(w>768){if(t>w){f(v).css("left","auto");f(v).css("right","100%")}else{f(v).css("left","100%");f(v).css("right","auto")}}};f.fn.menu3d.hoverOutSub=function(s){f(s).find("> ul").stop(false,false).slideUp(100)};f.fn.menu3d.setVertical=function(u,s,t){i=f(u);if(s&&t>768){i.addClass("vertical");i.find("> ul > li").css({"float":"none",display:"block"})}else{i.removeClass("vertical")}};f.fn.menu3d.defaults={responsive:true,clickable:false,skin:"skin-gray",speed:600,vertical:false,easing:"default",hoverIn:"flipInX",hoverOut:"slideUp"};function g(v,t,u){setTimeout(function(){f(v).removeClass("movingout "+t).hide()},u/2)}})(jQuery);