<!DOCTYPE html>
<html>
<head>
	<link href="style.css" rel="stylesheet" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

	<title>A-Line</title>

	<script type="text/javascript">
		$(function() {

      //CALL BUTTON TO START & STOP A-LINE
      $('.on').click(function() {
        $('.canvas').show('normal');
      });
      $('.off').click(function() {
        $('.canvas').hide('normal');
      });

      // CALL THE DROP DOWN MENU
        var drop = $('.unit-options');
  
        $('.units').click(function() {
          $(drop).animate({'top' : '0px'});
        });
        // CLOSE THE DROP DOWN MENU
        $('.close, .off').click(function() {
          stop();
            $(drop).animate({'top' : '-500px'});
      });

      // CALL EVENT TO DISPLAY X AND Y LINES
      $('.ruler-top, .ruler-left').click(function() {
        $('.draggable, .draggable2').toggle('slow');
      });

		    //FIRST DRAGGABLE (Y)	
        $( ".draggable" ).draggable({ 
           axis: "y", 
           containment: ".canvas", 
           drag: function() {
                var position = $(this).position();
                var yPos = $(this).css('top');
               $(this).find($('.pos')).text('Y: ' + yPos);
           },
           start: function() {
               $(this).find($('.pos')).css('display','block');
           },
           stop: function() {
               $(this).find($('.pos')).css('display','none');
          }                                   
      });

        //SECOND DRAGGABLE (X)
    	$( ".draggable2" ).draggable({
           axis: "x",
           containment: ".canvas",
           drag: function() {
                var position = $(this).position();
                var xPos = $(this).css('left');
                $(this).find($('.pos')).text('X: ' + xPos);
           },
           start: function() {
               $(this).find($('.pos')).css('display','block');
           },
           stop: function() {
               $(this).find($('.pos')).css('display','none');
          }            
      });
      //CALL IN COLOR OPTION SECTION
      $('.color').click(function() {
        $(this).toggleClass('underline');
        $('.color-list').slideToggle();
      });
      $('.unit').click(function() {
        $(this).toggleClass('underline');
        $('.unit-list').slideToggle();
      });
      //DECLARE COLOR OPTIONS
      var red = $('.red');
      var blue = $('.blue');
      var orange = $('.orange');
      var green = $('.green');
      var yellow = $('.yellow');
      var purple = $('.purple');

      $(red).click(function() {
        $('.draggable').css({'border-top' : '2px solid red'});
        $('.draggable2').css({'border-right' : '2px solid red'});
      });
      $(blue).click(function() {
        $('.draggable').css({'border-top' : '2px solid blue'});
        $('.draggable2').css({'border-right' : '2px solid blue'});
      });
      $(orange).click(function() {
        $('.draggable').css({'border-top' : '2px solid orange'});
        $('.draggable2').css({'border-right' : '2px solid orange'});
      });
      $(green).click(function() {
        $('.draggable').css({'border-top' : '2px solid green'});
        $('.draggable2').css({'border-right' : '2px solid green'});
      });
      $(yellow).click(function() {
        $('.draggable').css({'border-top' : '2px solid yellow'});
        $('.draggable2').css({'border-right' : '2px solid yellow'});
      });
      $(purple).click(function() {
        $('.draggable').css({'border-top' : '2px solid purple'});
        $('.draggable2').css({'border-right' : '2px solid purple'});
      });



	});
</script>

</head>
<body>

<button class="on">
  A-line
</button>

    <div class="canvas">
    	<!-- CALL RULER SECTIONS --> 
    	<div class="ruler-top"></div>
    	<div class="ruler-left"></div>

    	<!-- UNITS SECTION -->
    	<div class='units'></div>
    		<div class='unit-options'>
    			<p>Options</p>
    					<img class='close' src="images/close.png" alt="" />
                <ul>
                  <li class="unit">Units</li>
                    <div class="unit-list">
                      <li>Pixels</li>
                      <li>Ems</li>
                      <li>Percent</li>
                      <li>Inches</li>
                    </div>
                  <li class="color">Color</li>  
                </ul>
                  
                  <div class="color-list">
                    <div class="color-option red"></div>
                    <div class="color-option blue"></div>
                    <div class="color-option orange"></div>
                    <div class="color-option green"></div>
                    <div class="color-option yellow"></div>
                    <div class="color-option purple"></div>
                  </div>
              <button class="off">
                Off
              </button>
    	</div>

    	<!-- CALL X AND Y LINES -->
    	<div class="draggable">
    	    <span class="pos"></span>
    	</div>
    	<div class="draggable2">
    	    <span class="pos"></span>
    	</div>
    </div>

</body>
</html>