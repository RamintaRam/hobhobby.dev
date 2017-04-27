<!DOCTYPE html>
<html>
<body>

<form method="POST" action="{{route('app.cities.create')}}">
    City Name:<br>
    <input type="city" name="city" placeholder="City">
    <br><br>
    <input type="submit" value="Submit">

    {{csrf_field()}}
</form>

</body>
</html>