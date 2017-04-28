<!DOCTYPE html>
<html>
<body>

{{--<form method="POST" action="{{route('app.cities.create')}}">--}}
    {{--City Name:<br>--}}
    {{--<input type="city" name="city" placeholder="City">--}}
    {{--<br><br>--}}
    {{--<input type="submit" value="Submit">--}}

    {{--{{csrf_field()}}--}}
{{--</form>--}}


@if(isset($name))
    <div style="background-color: lightblue">Įrašas pridėtas sėkmingai: {{$name . ', id: ' . $id}}</div>

@endif

{!! Form::open(['url' => route('app.cities.create')]) !!}
{{ Form::label('city', 'City')}}
{{Form::text('city')}}
{{Form::submit('Submit')}}


{!! Form::close() !!}

</body>
</html>
