<html>
    <title>My page</title>
    <h1>My page</h1>
    <a href="/">Home</a>
    {{ Form::open(array('url'=>'foo')) }}
    {{Form::text('username')}}
    {{Form::close()}}
    </html>