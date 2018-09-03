<html>
   <body>
      
    {{Form::open(array('url'=>'abc'))}}


    {{Form::text("anb",null,['placeholder'=>'abc','class'=>"form-control",'id'=>"5"])}}
    
    
    {{Form::close()}}




         {{ Form::open(array('url' => 'foo/bar'))}}
            {{ Form::text("username",null,['placeholder'=>"username"])}}
           
         {{ Form::close()}}
      
   
   </body>
</html>