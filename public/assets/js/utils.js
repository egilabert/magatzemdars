$(document).ready(function(){ 

    // Quickie PubSub
    var o = $({});
    $.subscribe = function() { o.on.apply(o, arguments) };
    $.publish = function() { o.trigger.apply(o, arguments) };


    // Async submit a form's input.
    var submitLaravelRequest = function(e) {
        var form = $(this);
        var method = form.find('input[name="_method"]').val() || 'POST';

        $.ajax({
            type: method,
            url: form.prop('action'),
            data: form.serialize(),
            success: function() {
                $.publish('ajax.request.success', form);
            }
        });

        e.preventDefault();
    };


    // Offer flash notification messages.
    // 'data-remote-success-message' => 'Yay. All Done.'
    $.subscribe('ajax.request.success', function(e, form) {
        var message = $(form).data('remote-success-message');

        if (message) {
            $('.flash').html(message).fadeIn(500).delay(3500).fadeOut(500);
        }
    })


    // Handle success callbacks. To trigger Task.foo(), do:
    // 'data-model' => 'Task', 'data-remote-on-success' => 'foo'
    $.subscribe('ajax.request.success', function(e, form) {
        triggerClickCallback.apply(form, [e, $(form).data('remote-on-success')]);
    });


    // Confirm an action before proceeding.
    var confirmAction = function(e) {
        var input = $(this);

        input.prop('disabled', 'disabled');

        // Or, much better, use a dedicated modal.
        if ( ! confirm(input.data('confirm'))) {
            e.preventDefault();
        }

        input.removeAttr('disabled');
    };


    // Trigger the registered callback for a click or form submission.
    var triggerClickCallback = function(e, method) {
        var that = $(this);

        // What's the name of the parent model/scope/object.
        if ( ! (model = that.closest('*[data-model]').data('model'))) {
            return;
        }


        // As long as the object and method exist, trigger it and pass through the form.
        if (typeof window[model] == 'object' && typeof window[model][method] == 'function') {
            window[model][method](that);
        } else {
            console.error('Could not call method ' + method + ' on object ' + model);
        }

        e.preventDefault();
    }

    // Dom bindings.
    $('form[data-remote]').on('submit', submitLaravelRequest);
    $('input[data-confirm], button[data-confirm], a[data-confirm]').on('click', confirmAction);
    $('*[data-click]').on('click', function(e) {
        triggerClickCallback.apply(this, [e, $(this).data('click')]);
    });

    $('.flash_modal').modal();

// -----------------------------------------------------------//
// ----------  PÁGINA DE LA EMPRESES -------------------------//
// -----------------------------------------------------------//

    $('.carousel_promo').carousel({
      interval: 3000
    });
    
    $('#carousel_sala').carousel({
      interval: 10000
    });


// -----------------------------------------------------------//
// ----------  PÁGINA DE LA EMPRESES -------------------------//
// -----------------------------------------------------------//

    $('#animacio_link').on('click', function() {
        $('#teamBuilding').hide();
        $('#soparsEmpreses').hide();
        $('#espectacleAMida').hide();
        $('#animacio').fadeToggle(1000);
    });

    $('#teamBuilding_link').on('click', function() {
        $('#soparsEmpreses').hide();
        $('#espectacleAMida').hide();
        $('#animacio').hide();
        $('#teamBuilding').fadeToggle(1000);
    });

    $('#soparsEmpreses_link').on('click', function() {
        $('#espectacleAMida').hide();
        $('#animacio').hide();
        $('#teamBuilding').hide();
        $('#soparsEmpreses').fadeToggle(1000);
    });

    $('#espectacleAMida_link').on('click', function() {
        $('#animacio').hide();
        $('#teamBuilding').hide();
        $('#soparsEmpreses').hide();
        $('#espectacleAMida').fadeToggle(1000);
    });

// -----------------------------------------------------------//
// ----------  PÁGINA DE LA ESCOLA ---------------------------//
// -----------------------------------------------------------//

    $('#professionals_link').on('click', function() {
        $('#infantils').hide();
        $('#juvenils').hide();
        $('#adults').hide();
        $('#intensius').hide();
        $('#casals').hide();
        $('#professionals').fadeToggle(1000);
    });

    $('#infantils_link').on('click', function() {
        $('#professionals').hide();
        $('#juvenils').hide();
        $('#adults').hide();
        $('#intensius').hide();
        $('#casals').hide();
        $('#infantils').fadeToggle(1000);
    });

    $('#juvenils_link').on('click', function() {
        $('#professionals').hide();
        $('#infantils').hide();
        $('#adults').hide();
        $('#intensius').hide();
        $('#casals').hide();
        $('#juvenils').fadeToggle(1000);
    });

    $('#adults_link').on('click', function() {
        $('#professionals').hide();
        $('#infantils').hide();
        $('#juvenils').hide();
        $('#intensius').hide();
        $('#casals').hide();
        $('#adults').fadeToggle(1000);
    });

    $('#intensius_link').on('click', function() {
        $('#professionals').hide();
        $('#infantils').hide();
        $('#juvenils').hide();
        $('#adults').hide();
        $('#casals').hide();
        $('#intensius').fadeToggle(1000);
    });

    $('#casals_link').on('click', function() {
        $('#professionals').hide();
        $('#infantils').hide();
        $('#juvenils').hide();
        $('#adults').hide();
        $('#intensius').hide();
        $('#casals').fadeToggle(1000);
    });

// -----------------------------------------------------------//
// ----------  PÁGINA DE LA COMPANYIA ------------------------//
// -----------------------------------------------------------//

    $('#qui_som_link').on('click', function() {
        $('#trajectoria').hide();
        $('#com_neix').hide();
        $('#reconeixements').hide();
        $('#qui_som').fadeToggle(1000);
    });

    $('#com_neix_link').on('click', function() {
        $('#trajectoria').hide();
        $('#reconeixements').hide();
        $('#qui_som').hide();
        $('#com_neix').fadeToggle(1000);
    });

    $('#trajectoria_link').on('click', function() {
        $('#reconeixements').hide();
        $('#com_neix').hide();
        $('#qui_som').hide();
        $('#trajectoria').fadeToggle(1000);
    });

    $('#reconeixements_link').on('click', function() {
        $('#qui_som').hide();
        $('#com_neix').hide();
        $('#trajectoria').hide();
        $('#reconeixements').fadeToggle(1000);
    });

    $('.circular').on('click', function(e) {
        $('.cv').fadeToggle(1000);
        e.preventDefault();
    });

// -----------------------------------------------------------//
// ----------  BASE DE DADES TAULA ---------------------------//
// -----------------------------------------------------------//

    $(".clickableRow").click(function() {
        if ($(this).data('url'))
        {
            window.document.location = $(this).data('url');
        }
    });

    $(".clickableRow").on("mouseover", function() {
        $(this).css("background-color", "#f5f5f5");
        $(this).css('cursor', 'pointer');
    });

    $(".clickableRow").on("mouseout", function() {
        $(this).css("background-color", "white");
    });

    $(".subcamp").dblclick(function() {
        $('.info_subcamp', this).hide();
        $('.edit_form_subcamp', this).show();
    });

// -----------------------------------------------------------//
// ----------  PESTANYES DE CADA CLIENT ----------------------//
// -----------------------------------------------------------//

    $('#details a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    $("#comunicacions").click(function() {
        $('#details a[href="#comunicacions_tab"]').tab('show');
        $('#new_comm').fadeToggle(1000);
    });

    $("#consums").click(function() {
        $('#details a[href="#consums_tab"]').tab('show');
        $('#new_consum').fadeToggle(1000);
    });

    $("#incidencies").click(function() {
        $('#details a[href="#incidencies_tab"]').tab('show');
        $('#new_incidencia').fadeToggle(1000);
    });

    $("#observacions").click(function() {
        $('#details a[href="#observacions_tab"]').tab('show');
        $('#new_observacio').fadeToggle(1000);
    });

    $("#cita_button").click(function() {
        $('#new_cita').fadeToggle(1000);
    });

    // Javascript to enable link to tab
    /*var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
    } 

    // Change hash for page-reload
    $('.nav-tabs a').on('shown', function (e) {
        window.location.hash = e.target.hash;
    })*/

    
    if (location.hash !== '') $('a[href="' + location.hash + '"]').tab('show');
    return $('a[data-toggle="tab"]').on('shown', function(e) {
      return location.hash = $(e.target).attr('href').substr(1);
    });


// -----------------------------------------------------------//
// ----------  LINKS DINTRE DE LA MATEIXA PAGINA -------------//
// -----------------------------------------------------------//


    $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $("html, body").animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
    });


// -----------------------------------------------------------//
// ----------  FILTRES DEL PERFIL PER VEURE CONSUMS ----------//
// -----------------------------------------------------------//


    $('#FiltreComunicacions').change(function(){
        var val = $(this).val();
        $("body").html() = val;
        var period;
        if (typeof val !== 'undefined') {
            period = val;
        }
        window.location.href = '/egilabert?period='+period;
        return true;
    });
    
});

