<!DOCTYPE html>
<html>
<head>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 

<p>We Need your Location Details to proceed further.</p>
    <p>please input them</p>

<button onclick="getLocation()">Allow Location</button>

<script>
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(redirectToPosition);
    } else { 
        alert("Geolocation is not supported by this browser.");
    }
}

function redirectToPosition(position) {
    var lat = position.coords.latitude;
    var long = position.coords.longitude;

    // Append latitude and longitude values to the form
    $('#lat').val(lat);
    $('#long').val(long);

    // Submit the form
    $('form').submit();
}

</script>

</body>
</html>
