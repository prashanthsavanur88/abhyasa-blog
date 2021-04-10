if (document.currentScript) { 
document.currentScript.parentNode.insertBefore(s, document.currentScript);
} else {
d.getElementsByTagName('head')[0].appendChild(s);
}function hover(args, arg) {
  document.getElementById(args).className = "hover " + arg;
}
function hoverout(args, arg) {
  document.getElementById(args).className = "hoverout " + arg;
}
(function($) {
  var dropdown = $('.dropdown');
  // Add slidedown animation to dropdown
  dropdown.on('show.bs.dropdown', function(e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown("fast");
  });
  // Add slideup animation to dropdown
  dropdown.on('hide.bs.dropdown', function(e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp("fast");
  });
})(jQuery);

function toggle_sidebar() {
  var sidebar_status = document.getElementById("toggle_sidebar").className;
  function nav_toggle(){
    if (sidebar_status === 'open') {
      var arg = 'closed';
      document.getElementById("toggle_sidebar").className = arg;
    } else if (sidebar_status === 'closed') {
      var arg = 'open';
      document.getElementById("toggle_sidebar").className = arg;
    }
  }
  function content_toggle(){
    if (sidebar_status === 'open') {
      var arg = 'closed';
      document.getElementById("toggle_content").className = arg;
    } else if (sidebar_status === 'closed') {
      var arg = 'open';
      document.getElementById("toggle_content").className = arg;
    }
  }
  content_toggle();
  nav_toggle();
}
$('.count').each(function() {
  $(this).prop('Counter', 0).animate({
    Counter: $(this).text()
  }, {
    duration: 1000,
    easing: 'swing',
    step: function(now) {
      $(this).text(Math.ceil(now));
    }
  });
});

function toggle(id) {
  var item = document.getElementById("toggle_data" + id);
  var state = item.style.display;
  if (state === 'none') {
    item.style.display = "block";
  } else if (state === "block") {
    item.style.display = "none";
  }
}
function toggle_btn(pre, id, pair) {
  var item = document.getElementById(pre + id).className;
  if (pre === 'p') {
    var v = '1';
  } else if (pre === 'a') {
    var v = '0';
  }
  document.getElementById('in' + id).value = v;
  if (item === 'play_button_active') {
    document.getElementById('in' + id).value = '';
  }
  if (item === "play_button") {
    document.getElementById(pre + id).className = "play_button_active";
    document.getElementById(pair + id).className = "play_button";
  } else if (item === "play_button_active") {
    document.getElementById(pre + id).className = "play_button";
    document.getElementById(pair + id).className = "play_button";
  }
}

function toggle_line(args){
  var pills = document.getElementsByClassName("pill");
  var details = document.getElementsByClassName("details");
  document.getElementById('p'+args).className='pill active';
  document.getElementById('rel'+args).className='details active';
  var i = 0;
  while(i < pills.length)
  {
    var pill=pills.item(i).id;
    var detail=details.item(i).id;
    var samepill=document.getElementById('p'+args).id;
    var samedetail=document.getElementById('rel'+args).id;
    i++;
    if (pill!==samepill) {
      document.getElementById(pill).className='pill';
    }
    if (detail!==samedetail) {
      document.getElementById(detail).className='details hidden';
    }
  }
}
