<!DOCTYPE html>
<html>

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/menuStyle.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <title>Creche</title>
  </head>

<body>

  <div class="container">
    <div id='calendar'></div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {

      /*------------------------------------------
      --------------------------------------------
      Get Site URL
      --------------------------------------------
      --------------------------------------------*/
      var SITEURL = "{{ url('/') }}";

      /*------------------------------------------
      --------------------------------------------
      CSRF Token Setup
      --------------------------------------------
      --------------------------------------------*/
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      /*------------------------------------------
      --------------------------------------------
      FullCalender JS Code
      --------------------------------------------
      --------------------------------------------*/
      var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: SITEURL + "/fullcalender",
        displayEventTime: false,
        editable: true,
        eventRender: function(event, element, view) {
          if (event.allDay === 'true') {
            event.allDay = true;
          } else {
            event.allDay = false;
          }
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
          var title = prompt('Titulo do evento:');
          if (title) {
            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
            $.ajax({
              url: SITEURL + "/fullcalenderAjax",
              data: {
                title: title,
                start: start,
                end: end,
                type: 'add'
              },
              type: "POST",
              success: function(data) {
                displayMessage("Evento criado com sucesso!");

                calendar.fullCalendar('renderEvent', {
                  id: data.id,
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                }, true);

                calendar.fullCalendar('unselect');
              }
            });
          }
        },
        eventDrop: function(event, delta) {
          var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
          var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

          $.ajax({
            url: SITEURL + '/fullcalenderAjax',
            data: {
              title: event.title,
              start: start,
              end: end,
              id: event.id,
              type: 'update'
            },
            type: "POST",
            success: function(response) {
              displayMessage("Evento atualizado com sucesso!");
            }
          });
        },
        eventClick: function(event) {
          var deleteMsg = confirm("Você realmente quer deletar esse evento?");
          if (deleteMsg) {
            $.ajax({
              type: "POST",
              url: SITEURL + '/fullcalenderAjax',
              data: {
                id: event.id,
                type: 'delete'
              },
              success: function(response) {
                calendar.fullCalendar('removeEvents', event.id);
                displayMessage("Evento deletado com sucesso!");
              }
            });
          }
        }

      });


    });

    /*------------------------------------------
    --------------------------------------------
    Toastr Success Code
    --------------------------------------------
    --------------------------------------------*/
    function displayMessage(message) {
      toastr.success(message, 'Event');
    }
  </script>