<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Gudang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
</head>

<body>
    {{-- <div class="container vh-100 d-flex justify-content-center my-5">
        <div class="card d-flex align-items-center p-5 border border-primary">
            <h4>Gudangku</h4>
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="Password">
                        <span>
                            <i class="fa fa-eye-slash mt-2" id="eye" style="color: grey" aria-hidden="true" ></i>
                        </span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> --}}

    <section class="vh-100 gradient-custom">
        <div class="container  h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-primary text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  <div class="mb-md-5 mt-md-4 pb-3">
                    <form action="{{route('auth.login')}} " enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('post')
                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>

                        <div class="form-outline form-white mb-4">
                        <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="username"/>
                        {{-- <label class="form-label" for="typeEmailX">Email</label> --}}
                        </div>

                        <div class="form-outline form-white mb-4">
                        <input type="password" id="pass" name="password" class="form-control form-control-lg" placeholder="password"/>
                        {{-- <label class="form-label" for="typePasswordX">Password</label> --}}
                        </div>

                        <div class="form-outline form-white mb-4 d-flex align-items-start">
                            <input class="form-check-input" type="checkbox" id="showPassword">
                            <label class="form-check-label" for="gridCheck">
                                &nbsp show password
                            </label>
                        </div>
                        <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){

    $('#showPassword').on('click', function(){
        var passInput=$("#pass");

        if(passInput.attr('type')==='password')
        {
            passInput.attr('type','text');
        }else{
        passInput.attr('type','password');
        }
    })
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html> --}}
