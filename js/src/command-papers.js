/**
 * Modernizr date picker for IE and Safari
 */
var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
var isIE = !!window.ActiveXObject;
var isIE11 = '-ms-scroll-limit' in document.documentElement.style && '-ms-ime-align' in document.documentElement.style;
if( isIE || isIE11 || isSafari ) {
    $('.picker').datepicker({
        dateFormat: 'yy-mm-dd'
    });
}