<html>
    <title>My page</title>
    <h1>My page</h1>
    <a href="/">Home</a>
    {{ Form::open(array('url'=>'p')) }}
    {{Form::text('username')}}
    {{
    Form::submit("submit")
    }}
    {{Form::close()}}
    </html>