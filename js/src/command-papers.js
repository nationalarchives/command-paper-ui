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
    var prefix = document.getElementById('cmd_prefix').value;
    var cmDdate = new Date('2018-12-31');
    var errorMessage = '<blockquote class="emphasis-alert"><p>' +
        'You have tried to change a publication date. The publication date entered' +
        ' is invalid for Command Papers with the prefix <strong>' +
        prefix +
        '</strong>.  Please contact <a href="mailto:official.publishing@nationalarchives.gov.uk">' +
        'official.publishing@nationalarchives.gov.uk</a> ' +
        'to cancel the paper against the <strong>' +
        prefix +
        '</strong> prefix. After The National Archives has confirmed cancellation please use the ' +
        'system again to request a new number prefix for the rescheduled publication date.' +
        '</p></blockquote>';
    $('#PublicationDateDue').on('change', function(e) {
        var pubDate = e.target.value;
        var date = new Date(pubDate);
        if ( prefix === 'CM'  ) {
            if ( date > cmDdate ) {
                if ( $('.emphasis-alert').length === 0 ) {
                    $('#PublicationDateDue').after(errorMessage);
                }
            } else {
                $('.emphasis-alert').remove();
            }
        } else if ( prefix === 'CP'  ) {
            if ( date <= cmDdate ) {
                if ( $('.emphasis-alert').length === 0 ) {
                    $('#PublicationDateDue').after(errorMessage);
                }
            } else {
                $('.emphasis-alert').remove();
            }
        }
    });
});