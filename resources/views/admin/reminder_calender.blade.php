<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calender</title>
</head>
<body>

    <button onclick="addToCalender()">Add To Calender</button>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment-with-locales.min.js" integrity="sha512-4F1cxYdMiAW98oomSLaygEwmCnIP38pb4Kx70yQYqRwLVCs3DbRumfBq82T08g/4LJ/smbFGFpmeFlQgoDccgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript"> 
            function addToCalender()
            {
              var event_name = 'Test Event';
              var start_date = moment('2023-04-11').format('YYYYMMDD');
              var end_date = moment('2023-04-11').format('YYYYMMDD');

              var start_time = moment('13:00:00').format('HHMMSS');
              var end_time = moment('15:00:00').format('HHMMSS');

              var location = "Malaysia"; 

              var details = "This is a test event"; // You can customize this

    var calendarUrl = "https://www.google.com/calendar/render?action=TEMPLATE" +
      "&text=" + encodeURIComponent(event_name) +
      "&dates=" + start_date + "T" + start_time + "Z/" + end_date + "T" + end_time + "Z" +
      "&location=" + encodeURIComponent(location) +
      "&details=" + encodeURIComponent(details);

    window.open(calendarUrl, '_blank');

              
              
            }
    </script>
    
</body>
</html>