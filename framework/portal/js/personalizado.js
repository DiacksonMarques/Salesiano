document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'pt-br',
        plugins: ['interaction', 'dayGrid'],
        //defaultDate: '2019-04-12',
        editable: true,
        eventLimit: false,
        events: '../controller/litasaluas.php',
        extraParams: function() {
            return {
                cachebuster: new Date().valueOf()
            };
        },
        eventClick: function(info) {
            info.jsEvent.preventDefault(); // don't let the browser navigate

            var variaveljs = ("https://drive.google.com/file/d/" + info.event.id + "/preview");
            $('#visualizar #id').val(info.event.id);
            $('#visualizar #title').text(info.event.title);
            $('#visualizar #start').text(info.event.start);
            $('#visualizar #end').text(info.event.end);
            $('#visualizar').modal('show');

            document.getElementById('frame').src = "https://drive.google.com/file/d/" + info.event.id + "/preview";
        
        }
    });

    calendar.render();
});

