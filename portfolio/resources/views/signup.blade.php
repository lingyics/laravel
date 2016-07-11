<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-Up: A Laravel Form</title>
    <style>
        body{
            width: 800px;
            margin:20px auto;
        }
        label{
            display:block;
            padding-top: 1em;
        }
        input[type="submit"]{
            display:block;
            margin-top: 2em;
        }
        textarea{
            display:block;
            margin-top: 1em;
        }

        input[type="checkbox"]{
            display:inline-block;
            margin-top: 1em;
        }

        label[for="agree"]{
            display: inline;
        }



    </style>


</head>
<body>
<h1>Newsletter Sign Up</h1>
{!!Form::open(array('url'=>'thanks'))!!}

{!!Form::label('email','Email Address')!!}
{!!Form::text('email')!!}

{!!Form::label('os','Operating System')!!}
{!!Form::select('os',array('linux'=>'Linux','mac'=>'Mac OS X','windows'=>'Windows'))!!}

{!!Form::label('comment','Comments')!!}
{!!Form::textarea('comment','',array('placeholder'=>'What are your interest'))!!}

{!!Form::checkbox('agree','yes',false)!!}
{!!Form::label('agree','I agree with the term and the conditions')!!}

{!!Form::submit('Signup')!!}

{!!Form::close()!!}


</body>
</html>


