<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Contact Form Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container pt-5" style="max-width: 500px">

        <!-- Alert User -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form action="" method="post" action="{{ route('contact.save') }}">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">

                <!-- Show error -->
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">

                <!-- Show error -->
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif                
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">

                <!-- Show error -->
                @if ($errors->has('phone'))
                    <div class="alert alert-danger">
                        {{ $errors->first('phone') }}
                    </div>
                @endif                                
            </div>

            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">

                <!-- Show error -->
                @if ($errors->has('subject'))
                    <div class="alert alert-danger">
                        {{ $errors->first('subject') }}
                    </div>
                @endif                 
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" rows="5"></textarea>

                <!-- Show error -->
                @if ($errors->has('message'))
                    <div class="alert alert-danger">
                        {{ $errors->first('message') }}
                    </div>
                @endif                    
            </div>

            <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>