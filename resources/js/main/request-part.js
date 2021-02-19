$(document).ready(function(){
    $('select').styler();
    $('.choose-country-cont').click(function() {
        $('.choose-country').toggleClass("active");
    });
    $('.choose-country-drop > div').click(function() {
        $(".main-form input[name='phone']").removeAttr('class');
        $('.choose-country').removeClass("active");
        var choose_class = $(this).attr("data-target");
        var choose = $(this).html();
        $('.choose-country-cont').html(choose);
        $(".main-form input[name='phone']").addClass(choose_class);
        $(function() {
            $.mask.definitions['~'] = "[+-]";
            $("input.ru").mask("+ 7 (999) 999 99 99").attr("placeholder", "+ 7 926 000 10 10");
            $("input.uk").mask("+38 099 999 99 99").attr("placeholder", "+38 050 253 19 27");
            $("input.bel").mask("+375 99 999999").attr("placeholder", "+375 17 531927");

            $("input").blur(function() {
                $("#info").html("Unmasked value: " + $(this).mask());
            }).dblclick(function() {
                $(this).unmask();
            });
        });
    });
    $(function() {
        $.mask.definitions['~'] = "[+-]";
        $("input.ru").mask("+ 7 (999) 999 99 99");
        $("input.uk").mask("+38 099 999 99 99");
        $("input.bel").mask("+375 99 999999");

        $("input").blur(function() {
            // todo: need to check where this functionality is used!
            // $("#info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
            $(this).unmask();
        });

        $('#tabs1.tabs-con').addClass("active");
    });


    $('.tabs-nav').on('click', 'li:not(.active)', function() {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('div.tabs-nav').find('div.tab-content').removeClass('active').eq($(this).index()).addClass("active");
    });
    /* toggle */
    $('.toggle').click(function() {
        var toggle_id = $('#' + $(this).attr("data-target"));
        $(this).toggleClass("active");
        $(toggle_id).toggleClass("active");
    });
    /* toggle */
    /* Tabs */
    $('.tabs-navigation li a').click(function() {
        var tabs_id = $('#' + $(this).attr("data-target"));
        $(this).closest("ul").find("li").removeClass("active");
        $(this).closest(".tabs").find(">.tabs-con").removeClass("active");
        $('.del-active .tabs-con').removeClass("active");
        $(this).parent().addClass("active");
        $(tabs_id).addClass("active");
    });
    /* Tabs */

    /* Checkbox */
    $("#check-all-eng").click(function () {
        $(".checkbox-eng").prop('checked', $(this).prop('checked'));
    });
    /* Checkbox */


    /* Datepicker */
    $(function() {
        let reg = 'ru'; // 'uk' // todo: need to check where we get the region parameter from
        $.datepicker.setDefaults($.datepicker.regional[reg]);
        $(".set-datepicker").datepicker();
    });
});
