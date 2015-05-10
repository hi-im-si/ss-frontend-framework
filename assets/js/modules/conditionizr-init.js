/*!
 * Localhost
 * Tests `location.host` for the `127.0.0.1` IPv4 address as well
 * as the `localhost` address name
 */
conditionizr.add('localhost', function () {
  return /(?:127\.0\.0\.1|localhost)/.test(location.host);
});


/*!
 * Safari
 * The only browser where the HTMLElement
 * contains `Constructor`
 */
conditionizr.add('safari', function () {
  return /Constructor/.test(window.HTMLElement);
});

/*!
 * Chrome
 * We return `!!window.chrome` to test the truthy value,
 * but Opera 14+ responds true to this, so we need to test
 * the `navigator.vendor` to make sure it's from Google
 */
conditionizr.add('chrome', function () {
  return !!window.chrome && /google/i.test(navigator.vendor);
});

/*!
 * Firefox
 * Evaluate the presence of `InstallTrigger`
 */
conditionizr.add('firefox', function () {
  return 'InstallTrigger' in window;
});



/*!
 * IE8
 * @cc_on Conditional Compilation to test the
 * JavaScript versions
 */
conditionizr.add('ie8', function () {
  return (Function('/*@cc_on return (@_jscript_version > 5.7 && !/^(9|10)/.test(@_jscript_version)); @*/')());
});

/*!
 * IE9
 * @cc_on Conditional Compilation to test the
 * JavaScript version and MSIE 9 in the UserAgent
 */
conditionizr.add('ie9', function () {
  return (Function('/*@cc_on return (/^9/.test(@_jscript_version) && /MSIE 9\.0(?!.*IEMobile)/i.test(navigator.userAgent)); @*/')());
});


/*!
 * IE10
 * @cc_on Conditional Compilation to test the
 * JavaScript version and MSIE 10 in the UserAgent
 */
conditionizr.add('ie10', function () {
  return (Function('/*@cc_on return (/^10/.test(@_jscript_version) && /MSIE 10\.0(?!.*IEMobile)/i.test(navigator.userAgent)); @*/')());
});


/*!
 * IE11
 * RegExp to check out the new IE UserAgent:
 * Trident/7.0; rv:11.0
 */
conditionizr.add('ie11', function () {
  return /(?:\sTrident\/7\.0;.*\srv:11\.0)/i.test(navigator.userAgent);
});

/*!
 * Windows
 */
conditionizr.add('windows', function () {
    return /win/i.test(navigator.platform);
});


/*!
 * Mac
 */
conditionizr.add('mac', function () {
    return /mac/i.test(navigator.platform);
});

/*!
 * iOS [iPad, iPhone, iPod]
 * Simple minimal UserAgent test
 */
conditionizr.add('ios', function () {
  return /iP(ad|hone|od)/i.test(navigator.userAgent);
});



(function ( $ ) {
    conditionizr.config({
        assets: '/assets/js/',
        tests: {
            'localhost': ['class'],
            'safari': ['class'],
            'chrome': ['class'],
            'firefox': ['class'],
            'mac': ['class'],
            'windows': ['class'],
            'ios': ['class'],
            'ie11': ['class'],
            'ie10': ['class'],
            'ie9': ['class'],
            'ie8': ['class']
        }
    });
}( jQuery ));




