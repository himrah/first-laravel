<html>

    <title></title>
    <head>


</head>

    <body>
        {{--
            {{ Form::open(array('url' => 'foo/bar')) }}
            //
        {{ Form::close() }

            --}}

            

            {{Form::open(array('url' => 'foo')) }}

             {{Form::text('username')}}<br><br><br>

             {{ Form::password('password')}}
                <br><br>
             <span>FEMALE</span>  {{
              Form::radio('name','male',true)
             
             }}
            <span>MALE</span> {{
             Form::radio('name','female',true) }}<br><br>
            {{
                 Form::submit("submit")
             }}


            {{ Form::close()}}



            

    </body>
</html>