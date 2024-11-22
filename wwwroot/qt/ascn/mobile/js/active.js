      $(document).ready(function() {
        $('#cp .cp').click(function() {
          $(this).siblings().removeClass('active-game');
          $(this).addClass('active-game');
        })
      });
	  $(document).ready(function() {
        $('#top .top').click(function() {
          $(this).siblings().removeClass('active-top');
          $(this).addClass('active-top');
        })
      });
	  $(document).ready(function() {
        $('#jk .jk').click(function() {
          $(this).siblings().removeClass('active-jk');
          $(this).addClass('active-jk');
        })
      });
	  
	var myclick = function(v) {
        var divs = document.getElementsByClassName("tab");
        for (var i = 0; i < divs.length; i++) {
          var divv = divs[i];
          if (divv == document.getElementById("tab" + v + "_content")) {
            divv.style.display = "block";
          } else {
            divv.style.display = "none";
          }
        }
      }
	var myclicks = function(v) {
        var divs = document.getElementsByClassName("tabs");
        for (var i = 0; i < divs.length; i++) {
          var divv = divs[i];
          if (divv == document.getElementById("tabs" + v + "_contents")) {
            divv.style.display = "block";
          } else {
            divv.style.display = "none";
          }
        }
      }
	var myclicks1 = function(v) {
        var divs = document.getElementsByClassName("tabs1");
        for (var i = 0; i < divs.length; i++) {
          var divv = divs[i];
          if (divv == document.getElementById("tabs1" + v + "_contents1")) {
            divv.style.display = "block";
          } else {
            divv.style.display = "none";
          }
        }
      }