$(document).ready(function() {
    $('#navigation li button.navbar-btn').click(function () {
        location.href = $(this).data('url');
    });
    
    // Configure/customize these variables.
    var showChar = 16;  // How many characters are shown by default
    var ellipsestext = "...";

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + ellipsestext;
 
            $(this).html(html);
        }
 
    });
});