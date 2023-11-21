$('[href^="#"]').on('click', function(){
    let href = $(this).attr('href'), elem = $(document).find(href);
    if(elem.length > 0) {
        let posY = elem.eq(0).offset().top;
        $('html, body').animate({
            scrollTop: posY
        }, 1000);
    }
    return false;
});
$('#consult').on('submit', function (e) {
    e.preventDefault();
    const $form = $(this);
    let formData = new FormData($form[0]);
    $.ajax({
        type: "POST",
        url: "/request.php",
        cache: false,
        contentType: false,
        processData: false,
        data: formData,
        dataType: "json",
        success: function (result) {
            if (result.status) {
                $form.html(result.message);
            } else {
                $form.prepend(result.message);
            }
        },
        error: function (err) {
            console.error(err);
        },
    });
});