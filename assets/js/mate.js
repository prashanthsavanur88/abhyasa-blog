if (document.currentScript) { 
document.currentScript.parentNode.insertBefore(s, document.currentScript);
} else {
d.getElementsByTagName('head')[0].appendChild(s);
}function toggle_sidebar(){
  var sidebar = document.getElementById('sidebar');
  var body = document.getElementById('main_body');
  var sidebar_class = document.getElementById('sidebar').className;
  if (sidebar_class==='sidebar') {
    sidebar.className='sidebar open';
    body.className='freeze';
  }
  else{
    sidebar.className='sidebar';
    body.className='';
  }
}

$(document).ready(function(){
  $(".smooth_scroll").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});
