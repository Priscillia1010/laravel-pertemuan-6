<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('flight.store') }}">
        @csrf
        <label for="departures">Departure:</label>
        <input type="date" name="departures" id="departures">
        <br>
        <br>
        <label for="passengers">Passenger:</label>
        <input type="number" name="passengers" id="passengers">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>