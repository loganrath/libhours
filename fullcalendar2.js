<script type='text/javascript'>

	$(document).ready(function() {	
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,agendaDay'
			},
columnFormat: {
    month: 'ddd',    // Mon
    week: 'ddd M/D', // Mon 9/7
    day: 'dddd M/D'      // Monday
},
            defaultView: 'basicWeek',
            minTime: '09:00:00',
            nextDayThreshold: '09:00:00',
			events: 'libhours.json'
		});

$(".fc-week").css("cssText", "height: 200px !important;");		
$( document ).on( "click", "button.fc-basicWeek-button", function() {
 $(".fc-week").css("cssText", "height: 200px !important;");		
});
$( document ).on( "click", "button.fc-basicDay-button", function() {
 $(".fc-week").css("cssText", "height: 20px !important;");		
});

      if ($("#calendar").width() < 514){
        $('#calendar').fullCalendar( 'changeView', 'basicDay' );
      } else {
        $('#calendar').fullCalendar( 'changeView', 'basicWeek' );
      }
});
	</script>
