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

/**
 * Form validation
 */

$(document).ready(function() {
    var cNumber = document.getElementById('CNumber').value;
    var cMdate = new Date('2018-12-31');
    var errorMessage = '<blockquote class="emphasis-alert"><p>Wrong</p></blockquote>';
    $('#PublicationDateDue').on('change', function(e) {
        var pubDate = e.target.value;
        var date = new Date(pubDate);
        if ( cNumber.match(/CM/)  ) {
            console.log('CM match');
            if ( date > cMdate ) {
                console.log('wrong');
                if ( $('.emphasis-alert').length === 0 ) {
                    $('#PublicationDateDue').after(errorMessage);
                }
            } else {
                console.log('correct');
                $('.emphasis-alert').remove();
            }
        } else if ( cNumber.match(/CP/)  ) {
            console.log('CP match');
            if ( date <= cMdate ) {
                console.log('wrong');
                if ( $('.emphasis-alert').length === 0 ) {
                    $('#PublicationDateDue').after(errorMessage);
                }
            } else {
                console.log('correct');
                $('.emphasis-alert').remove();
            }
        }
    });
});