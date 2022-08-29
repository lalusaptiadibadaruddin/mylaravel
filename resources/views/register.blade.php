<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
 
    <title>Register</title>
</head>
 
<body>
    <div class="container"><br>
            <div class="col-md-4 col-md-offset-4">
                <h2 class="text-center">Tutorial Register Laravel</h2>
                <hr>

                <form action="/registeraksi" method="POST">
                    @csrf
                    <div class="form-floating">
                        <label for="name">Name</label>
                        <input type="text" class="form-control rounded-top" name="name" id="name" required
                            value="{{ old('name') }}" placeholder="Name">
                        
                    </div>
                    <div class="form-floating">
                         <label for="email">Email address</label>
                        <input type="email" class="form-control " name="email" id="email" required
                            value="{{ old('email') }}" placeholder="name@example.com">
                       
                    </div>
                    <div class="form-floating">
                         <label for="password">Password</label>
                        <input type="password" class="form-control rounded-bottom" name="password" id="password" required
                            placeholder="Password">
                       
                    </div>

                    <div class="form-floating">
                        

                        <input type="hidden" value="user" class="form-control rounded-bottom" name="role" id="role" >
                       
                    </div>
 
                    <button class="btn btn-primary btn-block"  type="submit">Register</button>
                </form>
                <small class="d-block mt-3">Sudah Punya Akun? <a class="text-danger" href="{{ url('/home')}}"> Login disini</a></small>
            
        </div>
    </div>
 
   
</body>
 
</html>


