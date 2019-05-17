


function myFunction(variab) {

    var formsName = $('.form-container');
    var activeMenue = $('.icon-body-wrapper');

    formsName.removeClass('display-show')
    activeMenue.removeClass('active-border')
    $(".fa-check").css("visibility", "hidden")

    formsName.addClass('display-hide')
    $('#'+variab+'-form').addClass('display-show')
    $('#'+variab+'-menu').addClass('active-border')
    $('#'+variab+'-tick').css("visibility", "visible")
}

function selectMenu(variab) {

    localStorage.setItem("selectedmenu", variab);
    $( "#goto-next" ).prop( "disabled", false );
    $( "#goto-next" ).removeClass('disable-btn')
    var activeMenue = $('.icon-body-wrapper');

    activeMenue.removeClass('active-border')
    $(".fa-check").css("visibility", "hidden")

    $('#'+variab+'-menu').addClass('active-border')
    $('#'+variab+'-tick').css("visibility", "visible")
}

function goToNext(variab) {

    var errors = [];
    $('form').find('.error').remove();
    $( "#home-form input.required" ).each(function( index ) {
        console.log(index);
        if (!$(this).val()) {
            $(this).parent().parent().find('label').append('<span class="error"> Ce champs est requis</span>');
            errors.push(index+1);
        }
    });

    $( ".habitable-required" ).each(function( index ) {
        if($(this).is(':visible') && !$(this).val()) {
            $(this).parent().parent().find('.m2-errors').remove();
            $(this).parent().css('border','1px solid red');
            $(this).parent().after('<span class="m2-errors">Ce champ est requis</span>');
            errors.push(index+1)
        }
        else {
            $(this).parent().parent().find('.m2-errors').remove();
            $(this).parent().css('border','1px solid #284a70');
        }
    });


    if(errors.length > 0)
        return;

    var formsName = $('.form-container');
    formsName.removeClass('display-show')
    formsName.addClass('display-hide')
    hideMenu();

    if(variab == 'last') {
        progressBar(75, 25)
        $('#'+variab+'-form').addClass('display-show')
        $('#selected-menu').val(localStorage.getItem("selectedmenu"));
        $('.step-two-text').text('Étape 3 : Découvrez votre estimation');

    } else {
        progressBar(50, 50)
        variab = localStorage.getItem("selectedmenu");
        resetFormValues(variab);
        $('#'+variab+'-form').addClass('display-show');
        $('.step-two-text').text('Étape 2 : À propos de ce bien');
    }
}
function resetFormValues(variab) {
    if (variab === 'maison') {
        $(".appart-form-input").val("");
        $(".terrian-form-input").val("");

        $('.appart-form-checkbox').prop('checked',false);
        $('.terrian-form-checkbox').prop('checked',false);
    }
    if (variab === 'appart') {
        $(".maison-form-input").val("");
        $(".terrian-form-input").val("");

        $('.maison-form-checkbox').prop('checked',false);
        $('.terrian-form-checkbox').prop('checked',false);
    }
    if (variab === 'terrian') {
        $(".maison-form-input").val("");
        $(".appart-form-input").val("");

        $('.appart-form-checkbox').prop('checked',false);
        $('.maison-form-checkbox').prop('checked',false);
    }
}

function progressBar(line_one, line_two) {
    $("#hr-progress-left").css("width", ""+line_one+"%"+"");
    $("#hr-progress-right").css("width", ""+line_two+"%"+"");
}
function hideMenu() {
    $('.icon-header-container').addClass('display-hide')
    $('.icon-body-conatiner').addClass('display-hide')
}
function displayMenu() {
    $('.icon-header-container').removeClass('display-hide')
    $('.icon-body-conatiner').removeClass('display-hide')
}
function retuor(variab) {

    var formsName = $('.form-container');
    var activeMenue = $('.icon-body-wrapper');

    formsName.removeClass('display-show')
    activeMenue.removeClass('active-border')
    $(".fa-check").css("visibility", "hidden")

    formsName.addClass('display-hide')
    $('#'+variab+'-form').addClass('display-show')

    $( "#goto-next" ).prop( "disabled", true );
    $( "#goto-next" ).addClass('disable-btn');
    displayMenu()
    progressBar(25, 75)
}

$(function () {
    $( "#goto-next" ).prop( "disabled", true );
    $( "#goto-next" ).addClass('disable-btn')
    $("form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);

        $.ajax({
            type: "POST",
            url: '/form_submit.php',
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                //alert(data); // show response from the php script.
                hideMenu();
                progressBar(100, 0)
                myFunction('submitsuccess')

            }
        });
    });

    $('a.increment-num').click(function() {
        var parent = $(this).parent().find('input').val();
        if (parent == '')
            $(this).parent().find('input').val(1);
        else {
            parent = parseInt(parent) + 1;
            $(this).parent().find('input').val(parseInt(parent));
        }
    });

    $('a.decrement-num').click(function() {
        var parent = $(this).parent().find('input').val();
        if (parent != '' && parseInt(parent) > 0) {
            parent = parseInt(parent) - 1;
            $(this).parent().find('input').val(parseInt(parent));
        }
    });

    $('.habitable-required').focusout(function(){
        if($(this).is(':visible') && !$(this).val()) {
            $(this).parent().parent().find('.m2-errors').remove();
            $(this).parent().css('border','1px solid red');
            $(this).parent().after('<span class="m2-errors">Ce champ est requis</span>');
            errors.push(index+1)
        }
        else {
            $(this).parent().parent().find('.m2-errors').remove();
            $(this).parent().css('border','1px solid #284a70');
        }
    });
});


