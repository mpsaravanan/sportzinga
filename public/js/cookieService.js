var cookieService = function () {

    function checkIsIPV4(entry) {
        if (!entry) {
            return '';
        }
        var blocks = entry.split(".");
        if (blocks.length === 4) {
            return blocks.every(function (block) {
                return parseInt(block, 10) >= 0 && parseInt(block, 10) <= 255;
            });
        }
        return false;
    }

    function getDomain(hostname) {
        if (!hostname) {
            return '';
        }
        var parts = location.hostname.split('.');
        var subdomain = parts.shift();
        var upperleveldomain = parts.join('.');
        return upperleveldomain;
    }

    function cookieExpiry(days) {
        return new Date(Date.now() + days * 24 * 3600 * 1000);
    }

    var docCookies = {
        getItem: function (sKey) {
            if (!sKey) {
                return null;
            }
            return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
        },

        setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
            if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) {
                return false;
            }
            var sExpires = "";
            if (vEnd) {
                switch (vEnd.constructor) {
                    case Number:
                        sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
                        break;
                    case String:
                        sExpires = "; expires=" + vEnd;
                        break;
                    case Date:
                        sExpires = "; expires=" + vEnd.toUTCString();
                        break;
                }
            }
            document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
            return true;
        },

        removeItem: function (sKey, sPath, sDomain) {
            if (!this.hasItem(sKey)) {
                return false;
            }
            document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
            return true;
        },

        hasItem: function (sKey) {
            if (!sKey) {
                return false;
            }
            return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
        },

        keys: function () {
            var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
            for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) {
                aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]);
            }
            return aKeys;
        }
    };

    var cookieSvc = {};

    cookieSvc.setCookie = function (key, value) {
        var domain = checkIsIPV4(location.hostname) ? location.hostname : ('.' + getDomain(location.hostname));
        return docCookies.setItem(key, value, cookieExpiry(365), '/', domain);
    };

    cookieSvc.setCookieWithExpirationHours = function (key, value, expiry) {
        expiry = expiry || (365 * 24);
        expiry = new Date(Date.now() + expiry * 3600 * 1000);
        var domain = checkIsIPV4(location.hostname) ? location.hostname : ('.' + getDomain(location.hostname));
        return docCookies.setItem(key, value, expiry, '/', domain);
    };

    cookieSvc.getCookie = function (key) {
        return docCookies.getItem(key);
    };

    cookieSvc.getAll = function () {
        // TODO: NG TO JS
        return {};
    };

    cookieSvc.removeCookie = function (key, domain) {
        if (!domain) {
            domain = checkIsIPV4(location.hostname) ? location.hostname : ('.' + getDomain(location.hostname));
        }
        docCookies.removeItem(key, '/', domain);
    };

    return cookieSvc;
}();
