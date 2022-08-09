// sticky header
var stickyEl = $('.me_sticky');
$(window).on('scroll load', function() {
    if ($(window).scrollTop() >= 80) {
        $('.me_sticky').addClass('fixed_header');
    } else {
        $('.me_sticky').removeClass('fixed_header');
    }
})


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1100:{
            items:2
        }
    }
})

$('#testimonials').owlCarousel({
    stagePadding: 0,
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1300: {
            items: 2
        }
    }
})


$(function(){

    $("#contact-form").submit(function(e){
        e.preventDefault();
        const form = $(this);
        const submit_button = form.find("button[type='submit']");
        const button_text = submit_button.html();
        submit_button.prop('disabled', true);
        submit_button.html("Please wait ...");

        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            dataType: 'json',
            success: function(data){
                if(data.status){
                    $("#exampleModalToggle2").modal('show');
                    form.trigger('reset');
                }else{
                    alert(data.message);
                }
                submit_button.prop('disabled', false);
                submit_button.html(button_text);
            }
        });
    });

});

$(function(){

    $("#contact-form1").submit(function(e){
        e.preventDefault();
        const form = $(this);
        const submit_button = form.find("button[type='submit']");
        const button_text = submit_button.html();
        submit_button.prop('disabled', true);
        submit_button.html("Please wait ...");

        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            dataType: 'json',
            success: function(data){
                if(data.status){
                    $("#exampleModalToggle2").modal('show');
                    form.trigger('reset');
                }else{
                    alert(data.message);
                }
                submit_button.prop('disabled', false);
                submit_button.html(button_text);
            }
        });
    });

});