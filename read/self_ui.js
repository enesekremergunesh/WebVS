class selfUI {

  static init_listeners() {
    this.window_size_change_listener();
    this.window_size_change_listener_reinforcement();
  }

  static window_size_change_listener_reinforcement(){

    $(window).resize(function () {
      console.log("windows resized");

      document.getElementById("bookReaderContainer").style.height = document.getElementById("bookContainer").clientHeight - document.getElementById("bookContainerTitleRow").clientHeight + "px";

      document.getElementsByTagName("main")[0].style.height = document.getElementsByTagName("body")[0].clientHeight - document.getElementsByTagName("header")[0].clientHeight - 20 + "px";
    });
  }

  static window_size_change_listener(){

    document.getElementById("bookReaderContainer").style.height = document.getElementById("bookContainer").clientHeight - document.getElementById("bookContainerTitleRow").clientHeight + "px";

    document.getElementsByTagName("main")[0].style.height = document.getElementsByTagName("body")[0].clientHeight - document.getElementsByTagName("header")[0].clientHeight - 20 + "px";

    $(window).resize(function () {

      document.getElementById("bookReaderContainer").style.height = document.getElementById("bookContainer").clientHeight - document.getElementById("bookContainerTitleRow").clientHeight + "px";

      document.getElementsByTagName("main")[0].style.height = document.getElementsByTagName("body")[0].clientHeight - document.getElementsByTagName("header")[0].clientHeight - 20 + "px";

    });
  }

  static content_toggler_onclick(){
    if($('#bookContents').attr("class")=== "col-3 fit collapse-horizontal collapse show"){
      $('#bookContents').attr("class", "col-3 fit collapse-horizontal collapse");
      $('#bookContentsToggler').html(`
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path>
                  </svg>
      `);
    }
    else{
      $('#bookContents').attr("class", "col-3 fit collapse-horizontal collapse show");
      $('#bookContentsToggler').html(`
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"></path>
                  </svg>
      `);
    }
  }

  static pages_toggler_onclick(){
    if($('#bookPages').attr("class")=== "col-3 fit collapse-horizontal collapse show"){
      $('#bookPages').attr("class", "col-3 fit collapse-horizontal collapse");
      $('#bookPagesToggler').html(`
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"></path>
                  </svg>
      `);
    }
    else{
      $('#bookPages').attr("class", "col-3 fit collapse-horizontal collapse show");
      $('#bookPagesToggler').html(`
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path>
                  </svg>
      `);
    }
  }

}