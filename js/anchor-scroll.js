function backToTop() {

    let button = $('.back-to-top');
    $(window).on('scroll', () => {
        if ($(this).scrollTop() >= 50) {
            button.fadeIn();
        } else {
            button.fadeOut();
        }
    });

    button.on('click', (e) => {
        e.preventDefault();
        $('html').animate({ scrollTop: 0 }, 1000);
    })

}

backToTop();



 $("a.scrollto").click(function() {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({
        scrollTop: destination
    }, 500);
    return false;
 });

var $page = $('html, body');
$('a[href*="#"]').click(function () {
  $page.animate(
    {
      scrollTop: $($.attr(this, 'href')).offset().top,
    },
    900,
  );
  return false;
});