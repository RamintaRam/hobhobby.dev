<!DOCTYPE html>
<html>
<body>

@if(isset($name))
    <div style="background-color: lightgreen">Įrašas pridėtas sėkmingai: {{$name . ', ' . $description . ', id: ' . $id}}</div>

@endif

{!! Form::open(['url' => route('app.hobbies.create')]) !!}

{{ Form::label('hobby', 'Hobby')}}
{{ Form::text('hobby') }}

{{ Form::label('description', 'Description')}}
{{ Form::textArea('description')}}

{{ Form::submit('Submit')}}

{!! Form::close() !!}

</body>
</html>
