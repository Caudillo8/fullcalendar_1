<?php
 include('conexion.php');
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.13/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'listWeek',//dayGridMonth'',''timeGridWeek// 
        timeZone: 'UTC',
        events: [  

          {       
            id   :'<?php echo 'mensaje'?>',
            title:'<?php echo 'mensaje 4 de junio PRUEBA'?>',
            start:'<?php echo '2024/06/04'  ;?>',         
          }
        ]//----------------- EVENTS ------------

            });
            calendar.render();
          });

    </script>

  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html>
<!----------------------------CIERRRO CONEXION-------->
<?php
mysqli_close($conexion);
?>
