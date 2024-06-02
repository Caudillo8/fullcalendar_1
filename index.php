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
        <?php 
              $query = "SELECT * FROM mensajes WHERE 1;";
              $rtdo = mysqli_query($conexion , $query);
              while($fila = mysqli_fetch_assoc($rtdo) ){ 
        ?>,
          {       
            id   :'<?php echo $fila['mensaje'];?>',
            title:'<?php echo $fila['mensaje'];?>',
            start:'<?php echo $fila['fecha'  ];?>',         
          }
        <?PHP } ?>
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
