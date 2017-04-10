$(document).ready(function () {
    //выпадающее меню навигация
    $("#fa-align-justify").click(function () {
        $(".ul_nav").slideToggle(100);
    });

    //иниц jqurey style forms
    // $("#offer_online_form select").styler();

    //показываем форму поиска
    $("#show_search").click(function () {
        $(".form_search").addClass("slide_search");
    });
    $("#close_search").click(function () {
        $(".form_search").removeClass("slide_search");
    });

    //показываем форму онлайн запроса
    $(".sh_online_offer").click(function () {
        $(".wrapp_offer_online").addClass("open");
        setTimeout (function(){
            $(".bg_offer").css("display", "block");
        }, 200);
    });
    $(".close_offer").click(function () {
        $(".wrapp_offer_online").removeClass("open");
        setTimeout (function(){
            $(".bg_offer").css("display", "none");
        }, 200);
    });

    //вращающийся линк поиска
    $(".down_search_field").mouseenter(function () {
        $("#show_search").addClass('run_show_search');
    });
    $('.down_search_field').mouseleave(function(){
        $("#show_search").removeClass('run_show_search');
    });

    // модальное окно ( заказ звонка )
    $(".call_link").click(function () {
        var modal = $(".modal");
        modal.fadeIn(200);
     });
    $(".close").click(function () {
        $(".modal").fadeOut(200);
    });


    //могоуровневое меню
    $('.side_li').hover(
        function () {
            $('div:first', this).fadeIn(150);
        },
        function () {
            $('div:first', this).fadeOut(10);
        }
    );

    //могоуровневое меню верхний nav
    $('.li_nav').hover(
        function () {
            $('ul:first', this).fadeIn(150);
            // $(this).css("background" , "#4a9dc6");
            $(this).css("background" , "#73919f");
        },
        function () {
            $('ul:first', this).fadeOut(10);
            // $(this).css("background" , "#59b8e8");
            $(this).css("background" , "#73919f");
        }
    );

    //аккордеон
    $(".side_li_mb").click(function(){
            $(this).children('.mb_desc').slideToggle(100);
        });


    // форма отправки онлайн - предложения
    $('#btn_online').click(function (e) {
        e.preventDefault();
        var type = $('#type_of_client').val(),
            delivery = $('#delivery').val(),
            name_data = $('#name_data').val(),
            ad_data = $('#adress_data').val(),
            contacts_data = $('#contacts_data').val(),
            text_field = $('#field_txt').val();

        if ( name_data == "" ) {
            // $('.err_block').css("display", "block");
            alert("не все поля заполнены!");
        }
        // else {
        //     $('.err_block').css("display", "none");
        //     $.ajax({
        //         url: "../../ajax/upload.php",
        //         type: "POST",
        //         data: $('.myform').serialize(),
        //         dataType: "html"
        //     }).done(function () {
        //         // $('#myModlal').css("display" , "none");
        //         $('.modal_forms').css("display", "none");
        //         $('.modal_confirm').css("display", "block");
        //         // alert('data');
        //     });
        // }
        // $('#name, #s_name, #modal_field').focus(function () {
        //     $('.err_block').css("display", "none");
        // });
    });

    //Плавный скролл до блока .div по клику на .scroll
    //Документация: https://github.com/flesler/jquery.scrollTo
    $("#fa-angle-down").click(function () {
        $.scrollTo($("#main_about"), 800, {
            offset: 0
        });
    });

    //modal
    var modal = document.getElementById('myModlal'),
        btnModal = document.getElementsByClassName('send_need')[0],
        close = document.getElementsByClassName('close')[0];

    btnModal.onclick = function (event) {
        event.preventDefault();
        modal.style.display = "block";
    }
    close.onclick = function () {
        modal.style.display = "none";
    }
    //закрытие модал, если юзер кликает на bg
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // показать кнопку наверх
    $(window).scroll(function () {
        if ($(this).scrollTop() > 350) {
            $('#top').fadeIn(100);
        }
        else {
            $('#top').fadeOut(100);
        }
    });

    //Кнопка "Наверх"
    //Документация:
    //http://api.jquery.com/scrolltop/
    //http://api.jquery.com/animate/
    $("#top").click(function () {
        $("body, html").animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    //фиксированный нав
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            $('.nav_bottom').addClass("fixed_down");
            $('.nav').css("margin-bottom", "60px");
        }
        else {
            $('.nav_bottom').removeClass("fixed_down");
            $('.nav').css("margin-bottom", "0");
        }
    });

});
