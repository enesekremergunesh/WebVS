class UI {

  static navbar_toggle() {
    if ($('#navbarToggler').attr('aria-expanded') == 'true') {
      console.log('collapse: ' + $('#navbarToggler').attr('aria-expanded'));
      $('#collapsableNavbar').attr('class', 'navbar-collapse collapse');
      $('#navbarToggler').attr('aria-expanded', 'false');
    }
    else {
      console.log('expand: ' + $('#navbarToggler').attr('aria-expanded'));
      $('#collapsableNavbar').attr('class', 'navbar-collapse collapse show');
      $('#navbarToggler').attr('aria-expanded', 'true');
    }
  }

  static user_canvas_toggle() {
    if ($('#userCanvasToggler').attr('aria-expanded') == 'true') {
      // console.log('collapse: ' + $('#userCanvasToggler').attr('aria-expanded'));

      $('#userCanvas').attr('class', 'offcanvas-lg offcanvas-end');
      $('#userCanvasBackdrop').attr('class', '');
      $('#userCanvasToggler').attr('aria-expanded', 'false');
    }
    else {
      // console.log('expand: ' + $('#userCanvasToggler').attr('aria-expanded'));

      $('#userCanvas').attr('class', 'offcanvas-lg offcanvas-end show');
      $('#userCanvasBackdrop').attr('class', 'offcanvas-backdrop fade show');
      $('#userCanvasToggler').attr('aria-expanded', 'true');
    }

  }

  static screen_size_change_listener() {

    $(window).resize(function () {
      // show_size();
      remove_user_canvas_backdrop();
    });

    function show_size() {
      // var canvasWidth = $('#userCanvasBodyContainer').width();
      var canvasWidth = $(window).width();
      if (canvasWidth >= 992) {
        console.log("canvas width: " + canvasWidth);
      }
    }

    function remove_user_canvas_backdrop() {      
      var backdropClass = $('#userCanvasBackdrop').attr('class');
      var togglerClass = $('#userCanvasToggler').attr('aria-expanded');
      if(togglerClass == 'true'){
        if(backdropClass == 'offcanvas-backdrop fade show' && $(window).width() >= 992){
          $('#userCanvas').attr('class', 'offcanvas-lg offcanvas-end');
          $('#userCanvasBackdrop').attr('class', '');
        }
        else if(backdropClass == '' && $(window).width() < 992){
          $('#userCanvas').attr('class', 'offcanvas-lg offcanvas-end show');
          $('#userCanvasBackdrop').attr('class', 'offcanvas-backdrop fade show');
        }
      }
    }

  }

}