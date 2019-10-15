jQuery(document).ready(function ($) {
    function isMobileWidth() {
        return $('#mobile-indicator').is(':visible');
    }
    function closeMenu() {
        $(".hamburger--collapse").removeClass('is-active');
        $('#main-menu-container').slideUp();
        $('.dimmer-background').fadeTo("fast", 0, function () {
            $(this).removeClass('dimmer-effect');
            $(this).removeAttr('style');
        });
    }

    $('html').click(function (e) {
        // e.stopPropagation();
        closeMenu();
        if (isMobileWidth()) {
            $('#searchform .field').fadeOut();
        }
    });



    $('#main-menu-container').on('click', function (event) {
        event.stopPropagation();
        event.stopImmediatePropagation();
    })

    $(".hamburger, .mglass").on('click', function (event) {
        event.stopPropagation();

        if ($('#main-menu-container').css('display') == 'block') {
            closeMenu();
            if (isMobileWidth()) {
                $('#searchform .field').fadeOut('normal');
            }
        } else {

            $('#main-menu-container').slideDown();
            $('.hamburger').addClass('is-active');
            $('#searchform .field').fadeIn('normal');
            $('.dimmer-background').addClass('dimmer-effect');

        }
    });


    $('#searchform .field').on('click', function (e) {
        e.stopPropagation();

    });

// ads
    let lastScrollTopHash = 0;
    let show = false;
    $(window).scroll(function () {


        let currentScroll = $(this).scrollTop(); // get current position
        let menu = $('#menu').height(),
            end = $('footer').height(),
            adsHeight = $('#ads').height(),
            sidebar = $('.sidebar').offset().top,
            sidebarHeight = $('.sidebar').height(),
            header = $('#header').height(),
            rest= $(document).height()-menu-end-header-138;

        if (sidebarHeight < rest){

            if (currentScroll > lastScrollTopHash) {

                if(currentScroll > sidebar - menu) {
                    if(!show) {

                        show = true;
                        if (!$('#ads').hasClass('ads-fixed')) {
                            $('#ads').addClass('ads-fixed');
                        }
                    }
                }

                if(currentScroll >($(document).height() -  $(window).height()) - end){
                    

                    if($('#ads').hasClass('ads-fixed')) {
                        $('#ads').removeClass('ads-fixed');
                        // $('#ads').css({'top': ($(document).height() - $(window).height()) - (adsHeight + end -10) / 2 + 'px'});
                        $('#ads').css({'top': ($('footer').offset().top - $('.ads').offset().top) - adsHeight + 'px'});
                        console.log(($('footer').offset().top - $('.ads').offset().top) - adsHeight);
                    }
                }
            } else {
                if(currentScroll < ($(document).height() -  $(window).height()) - end) {
                    if(currentScroll < sidebar - menu){
                        show = false;
                        $('#ads').removeClass('ads-fixed');
                    } else {
                        $('#ads').removeAttr('style');
                        $('#ads').addClass('ads-fixed');
                    }
                }
            }
            lastScrollTopHash = currentScroll;

        }

    });




});

if (document.querySelector('.gallery') !== null) {
    let allGlleries = document.querySelectorAll(".gallery");
    let i;
    for (i = 0; i < allGlleries.length; i++) {

        lightGallery(allGlleries[i], {selector: ".gallery-icon a", thumbnail: true});
    }
}