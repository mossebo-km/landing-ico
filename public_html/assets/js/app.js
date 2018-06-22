webpackJsonp([0],{

/***/ "./src/js/app.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__bootstrap__ = __webpack_require__("./src/js/bootstrap.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__bootstrap___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__bootstrap__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__components_heightToogle__ = __webpack_require__("./src/js/components/heightToogle.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__components_heightToogle___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__components_heightToogle__);

/**
 * Imports
 */



/**
 * Components
 */


/**
 * APP
 */
$(document).ready(function () {

  heightToggle('.js-ht', {
    bindCloseEvents: true
  });
});
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__("./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./src/js/bootstrap.js":
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(__webpack_provided_window_dot_jQuery) {
/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
  window.$ = __webpack_provided_window_dot_jQuery = __webpack_require__("./node_modules/jquery/dist/jquery.js");
} catch (e) {}
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__("./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./src/js/components/heightToogle.js":
/***/ (function(module, exports) {

// Всплывашки.

;(function () {
    "use strict";

    var pluginName = 'heightToggle';

    var defaultOptions = {
        containerQuery: '.ht-container',
        innerQuery: '.ht-inner',
        bindCloseEvents: false,
        isOpened: false,
        toggleCaption: false
    };

    function Plugin(el, options) {
        if (pluginName in el) return;

        var _ = this,
            href;

        _.eventDestroyers = [];

        _.loadOptions(options || {});

        _.els = {};

        try {
            _.els.trigger = el;

            if (href = el.getAttribute('data-href')) {
                _.els.container = document.querySelector(href);
            } else if (_.opt.containerQuery !== defaultOptions.containerQuery) {
                _.els.container = document.querySelector(_.opt.containerQuery);
            } else {
                _.els.container = _.els.trigger.parentNode.querySelector(_.opt.containerQuery);
            }

            _.els.inner = _.els.container.querySelector(_.opt.innerQuery);
        } catch (e) {
            console.log('HT init error: (1)');
            return;
        }

        el[pluginName] = this;

        if (el.classList.contains('is-active')) {
            _.opt.isOpened = true;
            el.classList.remove('is-active');
        }

        _.init();
    }

    Plugin.prototype.loadOptions = function (options) {
        var _ = this;

        _.opt = {};

        for (var i in defaultOptions) {
            if (i in options) {
                _.opt[i] = options[i];
            } else {
                _.opt[i] = defaultOptions[i];
            }
        }
    };

    Plugin.prototype.bindEvent = function (obj, name, cb, options) {
        cb = cb.bind(this);

        this.eventDestroyers.push(function () {
            obj.removeEventListener(name, cb);
        });

        obj.addEventListener(name, cb, options);
    };

    Plugin.prototype.init = function () {
        var _ = this;

        _.mutationObserver = new MutationObserver(_.update.bind(_));

        _.mutationObserver.observe(_.els.container, { attributes: false, childList: true, characterData: true, subtree: true });

        _.bindEvent(window, 'resize', _.update, { passive: true });
        _.bindEvent(document, 'click', _.windowClick, { passive: true });

        if (_.opt.bindCloseEvents) {
            _.bindEvent(document, 'keydown', _.keydown, { passive: true });
        }

        _.update();

        if (_.opt.isOpened) {
            _.els.container.classList.add('no-transition');
            _.open();

            setTimeout(function () {
                _.els.container.classList.remove('no-transition');
            });
        }

        _.bindEvent(_.els.container, 'transitionend', function (e) {
            e.stopPropagation();

            if (_.active) {
                _.dispatchEvent('HT::opened');
            } else {
                _.dispatchEvent('HT::closed');
            }
        }, { passive: true });
    };

    Plugin.prototype.close = function () {
        var _ = this;

        if (_.active) {
            _.active = false;
            _.els.trigger.classList.remove('is-active');
            _.els.container.classList.remove('is-active');
        }

        if (_.opt.minH) {
            _.els.container.style.maxHeight = _.opt.minH + 'px';
        } else {
            _.els.container.removeAttribute('style');
        }
    };

    Plugin.prototype.open = function () {
        var _ = this;

        if (!_.active) {
            _.active = true;
            _.els.trigger.classList.add('is-active');
            _.els.container.classList.add('is-active');
        }

        _.els.container.style.maxHeight = _.maxH + 'px';
    };

    Plugin.prototype.toggle = function () {
        var _ = this;

        _.active ? _.close() : _.open();

        _.toggleCaption();
    };

    Plugin.prototype.toggleCaption = function () {
        var _ = this;

        if (_.opt.toggleCaption) {
            var a = _.els.trigger.getAttribute('data-caption');
            var b = _.els.trigger.innerText;

            _.els.trigger.innerText = a;
            _.els.trigger.setAttribute('data-caption', b);
        }
    };

    Plugin.prototype.update = function () {
        var _ = this;

        var styles = window.getComputedStyle(_.els.inner);
        var margin = parseFloat(styles['marginTop']) + parseFloat(styles['marginBottom']);

        var h = Math.ceil(_.els.inner.scrollHeight + margin);
        h = _.opt.maxH ? Math.min(h, _.opt.maxH) : h;

        if (_.maxH != h) {
            _.maxH = h;
            _.active ? _.open() : _.close();
        }
    };

    Plugin.prototype.windowClick = function (e) {
        var _ = this,
            el = e.target;

        if (_.els.trigger.contains(el)) {
            _.toggle();
            e.stopPropagation();
        } else if (_.els.container.contains(el)) {
            e.stopPropagation();
        } else if (_.opt.bindCloseEvents) {
            _.close();
        }
    };

    Plugin.prototype.keydown = function (e) {
        var _ = this;

        var code = e.keyCode || e.which;
        if (_.active && code === 27) {
            _.close();
        }
    };

    Plugin.prototype.dispatchEvent = function (eventName) {
        var _ = this;

        if (typeof CustomEvent === 'undefined') {
            var myEvent = document.createEvent(eventName);
            myEvent.initCustomEvent(eventName, false, true);
        } else {
            var myEvent = new CustomEvent(eventName, {
                bubbles: false,
                cancelable: true
            });
        }

        _.els.trigger.dispatchEvent(myEvent);
    };

    Plugin.prototype.destroy = function () {
        var _ = this;

        _.close();
        _.eventDestroyers.forEach(function (destroyer) {
            return destroyer();
        });
        _.els.trigger[pluginName] = undefined;
        delete _.els.trigger[pluginName];

        if (_.mutationObserver) {
            _.mutationObserver.disconnect();
            _.mutationObserver = undefined;
            delete _.mutationObserver;
        }
    };

    window[pluginName] = function (el, options) {
        if (el instanceof Element) {
            return new Plugin(el, options);
        }

        if (!(el instanceof NodeList)) {
            el = document.querySelectorAll(el);
        }

        if (!el.length) return false;

        var set = [];

        [].forEach.call(el, function (el) {
            set.push(new Plugin(el, options));
        });

        return set;
    };
})();

/***/ }),

/***/ "./src/scss/app.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./src/js/app.js");
module.exports = __webpack_require__("./src/scss/app.scss");


/***/ })

},[0]);
//# sourceMappingURL=app.js.map