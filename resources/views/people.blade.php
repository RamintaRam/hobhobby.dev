<!DOCTYPE html>
<html>
<body style="color: darkred; background-color: black">

@if(isset($name))
    <div style="background-color: lightgreen">Įrašas pridėtas
        sėkmingai: {{$name . ', ' . $email . ', ' . $age . ', ' . $gender  . ', id: ' . $id}}</div>

@endif

{!! Form::open(['url' => route('app.people.create')]) !!}

{{ Form::label('name', 'Name') }}
{{ Form::text('name') }}
<br>
{{ Form::label('email', 'Email') }}
{{ Form::text('email') }}
<br>
{{ Form::label('age', 'Age') }}
{{ Form::select('age', ['iki 19', '19-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65-69', '70-74', 'virš 75'], null, ['placeholder' => 'Pick your age']) }}
<br>
{{ Form::label('gender', 'Gender') }}
{{ Form::select('gender', ['F' => 'Female', 'M' => 'Male'], null, ['placeholder' => 'Gender']) }}
<br>

{{ Form::label('city', 'City') }}
{{ Form::select('city_id', $cities) }}

<br>
{{ Form::label('hobbies', 'Hobbies') }}
<br>
@foreach($hobbies as $key => $hobby)
    {{Form::checkbox('hobbies[]', $key)}}
    {{$hobby}}
    <br>
@endforeach

{{ Form::submit('Submit')}}

{!! Form::close() !!}

</body>
</html>
