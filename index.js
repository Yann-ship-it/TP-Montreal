document.addEventListener('DOMContentLoaded', function() {
    window.onscroll = function(ev) {
      document.getElementById("scrollTop").className = (window.pageYOffset > 100) ? "visible" : "none";
    };
  });