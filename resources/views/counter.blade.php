<!DOCTYPE html>
<html>

<head>
  <title>Pusher Test</title>

<body>
  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script>
  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;

  var pusher = new Pusher('d3137dd476270dd48d4e', {
    cluster: 'ap1'
  });

  var channel = pusher.subscribe('my-channel');
  channel.bind('form-submitted', function(data) {
    $('p').append('<p>' + JSON.stringify(data.text) + '</p>');
  });
</script>
</head>

<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>

</html>