/**
 * Created by Shady on 2017-05-07.
 */

function smoothScroll(){
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 2000, function(){
                window.location.hash = hash;
            });
        }
    });
}
