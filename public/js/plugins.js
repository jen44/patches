/*!
 * jQuery UI Touch Punch 0.2.3
 *
 * Copyright 2011–2014, Dave Furfero
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * Depends:
 *  jquery.ui.widget.js
 *  jquery.ui.mouse.js
 */
!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);



/*
 * Stretchy: Form element autosizing, the way it should be.
 * by Lea Verou http://lea.verou.me
 * MIT license
 */
(function() {

if (!self.Element) {
	return; // super old browser
}

if (!Element.prototype.matches) {
	Element.prototype.matches = Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector || Element.prototype.oMatchesSelector || null;
}

if (!Element.prototype.matches) {
	return;
}

function $$(expr, con) {
	return expr instanceof Node || expr instanceof Window? [expr] :
	       [].slice.call(typeof expr == "string"? (con || document).querySelectorAll(expr) : expr || []);
}

var _ = self.Stretchy = {
	selectors: {
		base: 'textarea, select:not([size]), input:not([type]), input[type="' + "text url email tel".split(" ").join('"], input[type="') + '"]',
		filter: "*"
	},

	// Script element this was included with, if any
	script: document.currentScript || $$("script").pop(),

	// Autosize one element. The core of Stretchy.
	resize: function(element) {
		if (!_.resizes(element)) {
			return;
		}

		var cs = getComputedStyle(element);
		var offset = 0;

		if (!element.value && element.placeholder) {
			var empty = true;
			element.value = element.placeholder;
		}

		var type = element.nodeName.toLowerCase();

		if (type == "textarea") {
			element.style.height = "0";

			if (cs.boxSizing == "border-box") {
				offset = element.offsetHeight;
			}
			else if (cs.boxSizing == "content-box") {
				offset = -element.clientHeight;
			}

			element.style.height = element.scrollHeight + offset + "px";
		}
		else if(type == "input") {
			element.style.width = "0";

			if (cs.boxSizing == "border-box") {
				offset = element.offsetWidth;
			}
			else if (cs.boxSizing == "padding-box") {
				offset = element.clientWidth;
			}

			// Safari misreports scrollWidth, so we will instead set scrollLeft to a
			// huge number, and read that back to see what it was clipped to
			element.scrollLeft = 1e+10;

			var width = Math.max(element.scrollLeft + offset, element.scrollWidth - element.clientWidth);

			element.style.width = width + "px";
		}
		else if (type == "select") {
			var selectedIndex = element.selectedIndex > 0? element.selectedIndex : 0;

			// Need to use dummy element to measure :(
			var option = document.createElement("_");
			option.textContent = element.options[selectedIndex].textContent;
			element.parentNode.insertBefore(option, element.nextSibling);

			// The name of the appearance property, as it might be prefixed
			var appearance;

			for (var property in cs) {
				if (!/^(width|webkitLogicalWidth|length)$/.test(property)) {
					//console.log(property, option.offsetWidth, cs[property]);
					option.style[property] = cs[property];

					if (/appearance$/i.test(property)) {
						appearance = property;
					}
				}
			}

			option.style.width = "";

			if (option.offsetWidth > 0) {
				element.style.width = option.offsetWidth + "px";

				if (!cs[appearance] || cs[appearance] !== "none") {
					// Account for arrow
					element.style.width = "calc(" + element.style.width + " + 2em)";
				}
			}

			option.parentNode.removeChild(option);
			option = null;
		}

		if (empty) {
			element.value = "";
		}
	},

	// Autosize multiple elements
	resizeAll: function(elements) {
		$$(elements || _.selectors.base).forEach(function (element) {
			_.resize(element);
		});
	},

	active: true,

	// Will stretchy do anything for this element?
	resizes: function(element) {
		return element &&
		       element.parentNode &&
		       element.matches &&
		       element.matches(_.selectors.base) &&
		       element.matches(_.selectors.filter);
	},

	init: function(){
		_.selectors.filter = _.script.getAttribute("data-filter") ||
		                     ($$("[data-stretchy-filter]").pop() || document.body).getAttribute("data-stretchy-filter") || Stretchy.selectors.filter || "*";

		_.resizeAll();
	},

	$$: $$
};

// Autosize all elements once the DOM is loaded

// DOM already loaded?
if (document.readyState !== "loading") {
	_.init();
}
else {
	// Wait for it
	document.addEventListener("DOMContentLoaded", _.init);
}

// Listen for changes
var listener = function(evt) {
	if (_.active) {
		_.resize(evt.target);
	}
};

document.documentElement.addEventListener("input", listener);

// Firefox fires a change event instead of an input event
document.documentElement.addEventListener("change", listener);

// Listen for new elements
if (self.MutationObserver) {
	(new MutationObserver(function(mutations) {
		if (_.active) {
			mutations.forEach(function(mutation) {
				if (mutation.type == "childList") {
					Stretchy.resizeAll(mutation.addedNodes);
				}
			});
		}
	})).observe(document.documentElement, {
		childList: true,
		subtree: true
	});
}

})();







///////////////AVATAR UPLOAD





(function ( root, factory ) {
	if ( typeof define === 'function' && define.amd ) {
		// AMD. Register as an anonymous module.
		define(function () {
			// Also create a global in case some scripts
			// that are loaded still are looking for
			// a global even when an AMD loader is in use.
			return ( root.AvatarUpload = factory() );
		});
	} else {
		// Browser globals
		root.AvatarUpload = factory();
	}
}( this, function () {

	var extend = function(original, extra) {
		return Object.keys(extra).forEach(function(key) {
			original[key] = extra[key];
		});
	};

	var parseJson = function(input) {
		try {
			return JSON.parse(input);
		}
		catch (e) {
			return false;
		}
	};

	var AvatarUpload = function(config) {
		extend(this.config, config);

		if ( ! this.config.el) {
			throw new Error('An element is required to manipulate');
		}

		if ( ! this.config.uploadUrl && ! this.config.pretendUpload) {
			throw new Error('Upload URL not specified');
		}

		this.el = this.config.el;
		this.renderInput();
		this.bindInput();

		this.progressText = this.el.querySelector('span');
		this.imageWrapper = this.el.querySelector('.avatar-upload__image-wrapper');
	};

	AvatarUpload.prototype.config = {
		el: undefined,

		uploadUrl: '',
		uploadMethod: 'post',
		uploadImageKey: 'upload',
		uploadData: {},

		pretendUpload: false,

		onProgress: undefined,
		onSuccess: undefined,
		onError: undefined
	};

	AvatarUpload.prototype.renderInput = function() {
		var imgEl = this.el.querySelector('img'),
			img = imgEl.src;

		var el = document.createElement('div');
		el.className = 'avatar-upload__shell';

		el.innerHTML = [
			'<div class="avatar-upload__wrapper avatar-upload--complete">',
				'<div class="avatar-upload__image-wrapper">',
					'<img src="'+img+'">',
				'</div>',
				'<img src="'+img+'" class="avatar-upload__faded-image">',
				'<div class="avatar-upload__progress-wrapper">',
					'<span>0%</span>',
				'</div>',
				'<input type="file">',
			'</div>',
		].join('');

		imgEl.parentNode.removeChild(imgEl);
		this.el.appendChild(el);

		return this;
	};

	AvatarUpload.prototype.bindInput = function(event) {
		this.el.querySelector('input').addEventListener(
			'change', this.initiateUpload.bind(this), true
		);
	};

	AvatarUpload.prototype.initiateUpload = function(event) {
		var file = event.target.files[0];

		// reset input to allow selecting same file again
		event.target.value = null;

		if ( ! file.type.match(/image.*/)) return;

		// read file & run upload
		var reader = new FileReader;
		reader.onload = this.displayUpload.bind(this);
		reader.readAsDataURL(file);

		this.upload(file);
	};

	AvatarUpload.prototype.displayUpload = function(event) {
		var img = event.target.result;

		this.uiUploadStart(img);
	};

	AvatarUpload.prototype.upload = function(file) {
		var Uploader = this.config.pretendUpload ? FakeUploader : XhrUploader;

		Uploader(file, this.config, {
			progress: this.uploadProgress.bind(this),
			success: this.uploadSuccess.bind(this),
			error: this.uploadError.bind(this),
		});
	};

	AvatarUpload.prototype.uploadProgress = function(progress) {
		this.uiUploadProgress(progress);
		if (this.config.onProgress) this.config.onProgress(progress, this.el, this);
	};

	AvatarUpload.prototype.uploadSuccess = function(xhr, json) {
		this.uiUploadSuccess(xhr, json);
		if (this.config.onSuccess) this.config.onSuccess(xhr, json);
	};

	AvatarUpload.prototype.uploadError = function(xhr, json) {
		this.uiUploadError(xhr, json);
		if (this.config.onError) this.config.onError(xhr, json);
	};

	AvatarUpload.prototype.uiUploadStart = function(img) {
		var origSrc;

		Array.prototype.forEach.call(this.el.querySelectorAll('img'), function(imgEl) {
			origSrc = imgEl.src;
			imgEl.src = img;
		});

		this.origSrc = origSrc;

		this.el.querySelector('.avatar-upload__wrapper').className = 'avatar-upload__wrapper'; // remove complete class
	};

	AvatarUpload.prototype.uiUploadProgress = function(progress) {
		this.progressText.textContent = progress+'%';
		this.imageWrapper.style.width = progress+'%';
	};

	AvatarUpload.prototype.uiUploadSuccess = function(xhr, json) {
		this.progressText.textContent = '0%';
		this.imageWrapper.style.width = null;
		this.el.querySelector('.avatar-upload__wrapper').className = 'avatar-upload__wrapper avatar-upload--complete';
	};

	AvatarUpload.prototype.uiUploadError = function(xhr, json) {
		this.uiUploadSuccess();

		var origSrc = this.origSrc;
		Array.prototype.forEach.call(this.el.querySelectorAll('img'), function(imgEl) {
			imgEl.src = origSrc;
		});
	};

	var FakeUploader = function(file, config, callbacks) {
		var progress = 0;
		var id = setInterval(function() {
			progress += 1;
			// if (progress == 50) {
			// 	callbacks.error();
			// 	return clearInterval(id);
			// }
			if (progress > 100) {
				callbacks.success();
				return clearInterval(id);
			}
			callbacks.progress(progress);
		}, 50);
	};

	var XhrUploader = function(file, config, callbacks) {
		var xhr = new XMLHttpRequest(),
			formData = new FormData();

		xhr.upload.addEventListener('progress', function(transfer) {
			callbacks.progress(parseInt(
				transfer.loaded / transfer.total * 100
			, 10));
		});

		xhr.onreadystatechange = function(e) {
			if (xhr.readyState !== 4) return;

			if (xhr.status === 200) {
				callbacks.success(xhr, parseJson(xhr.response));
			}
			else {
				callbacks.error(xhr, parseJson(xhr.response));
			}
		};

		formData.append(config.uploadImageKey, file);

		for (val in config.uploadData) {
			formData.append(val, config.uploadData[val]);
		}

		xhr.open(config.uploadMethod, config.uploadUrl);
		xhr.send(formData);
	};

	return AvatarUpload;

}));


