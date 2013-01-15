/* ===================================================
 * bootstrapwp.demo.js v.93
 * ===================================================

// NOTICE!! This JS file is included for reference.
// This code is used to power all the JavaScript
// demos and examples for BootstrapWP
// ++++++++++++++++++++++++++++++++++++++++++*/

!function ($) {

    $(function(){
        var $window = $(window);

        // Adding the needed html to WordPress navigation menus //
        $("ul.dropdown-menu").parent().addClass("dropdown");
        $("ul.nav li.dropdown a").addClass("dropdown-toggle");
        $("ul.dropdown-menu li a").removeClass("dropdown-toggle");
        $('a.dropdown-toggle').attr('data-toggle', 'dropdown');

        // Adding dropdown caret for dropdown menus, if it does not already exist
        $('div.nav-collapse .dropdown-toggle:not(:has(b.caret))').append('<b class="caret"></b>');

        // side bar
        setTimeout(function () {
          $('.bs-docs-sidenav').affix({
            offset: {
              top: function () { return $window.width() <= 980 ? 290 : 210 }
            , bottom: 270
            }
          })
        }, 100)
    });

    // make code pretty
    window.prettyPrint && prettyPrint()

    // add-ons
    $('.add-on :checkbox').on('click', function () {
        var $this = $(this)
            , method = $this.attr('checked') ? 'addClass' : 'removeClass'
        $(this).parents('.add-on')[method]('active')
    })

    // add tipsies to grid for scaffolding
    if ($('#gridSystem').length) {
        $('#gridSystem').tooltip({
            selector: '.show-grid > div:not(.tooltip)'
            , title: function () { return $(this).width() + 'px' }
        })
    }

    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "a[data-toggle=tooltip]"
    })

    $('.tooltip-test').tooltip()
    $('.popover-test').popover()

    // popover demo
    $("a[data-toggle=popover]")
        .popover()
        .click(function(e) {
            e.preventDefault()
      })

    // button state demo
    $('#fat-btn')
        .click(function () {
            var btn = $(this)
            btn.button('loading')
            setTimeout(function () {
                btn.button('reset')
            }, 3000)
    })

    // carousel demo
    $('#myCarousel').carousel()

 });
}(window.jQuery);