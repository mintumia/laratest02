<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Page</title>
    <link rel="stylesheet" href="/libraries/bootstrap.min.css">
    <link rel="stylesheet" href="/libraries/style.css">
</head>
<body class="bg-secondary">

<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-center">
        <form action="{{route('customer.signup')}}" method="post" class="col-sm-12 col-md-6 col-lg-4 needs-validation bg-white p-3 mt-5 rounded-3">
           @csrf
            <h2 class="text-dark text-center">Customer Signup Form...</h2>
            <div class="form-group mb-2 was-validated">
                <label for="name" class="form-label">Name : </label>
                <input type="text" name="name" id="name" class="form-control" required>
                <div class="invalid-feedback">
                    Please Input Name.
                </div>
            </div>
            <div class="form-group mb-2 was-validated">
                <label for="email" class="form-label">Email : </label>
                <input type="email" name="email" id="email" class="form-control" required>
                <div class="invalid-feedback">
                    Please Input Email.
                </div>
            </div>
            <div class="form-group mb-2 was-validated">
                <label for="password" class="form-label">Password : </label>
                <input type="password" name="password" id="password" class="form-control" required>
                <div class="invalid-feedback">
                    Please Input Password.
                </div>
            </div>
            <div class="form-group mb-2 was-validated">
                <label for="password" class="form-label">Confirm Password : </label>
                <input type="password" name="confirm_pass" id="password" class="form-control" required>
                <div class="invalid-feedback">
                    Please Input Cofirm Password.
                </div>
            </div>
            <div class="form-check mb-2 was-validated">

                <input type="checkbox" name="status" id="check" class="form-check-input" required>
                <label for="check" class="form-check-label">Status</label>
                <div class="invalid-feedback">
                    Please Tick Status.
                </div>
            </div>
            <div class="form-control mb-2 was-validated">
               <p class="form-group"> Select Gender :  </p>
                <input type="radio" name="gender" id="flexRadioDefault1" value="M" class="form-check-input">
                <label for="flexRadioDefault1" class="form-check-label me-2">Male</label>

                <input type="radio" name="gender" id="flexRadioDefault2" value="F" class="form-check-input">
                <label for="flexRadioDefault2" class="form-check-label me-2">Female</label>

                <input type="radio" name="gender" id="flexRadioDefault3" value="O" class="form-check-input">
                <label for="flexRadioDefault3" class="form-check-label me-2">Other</label>


               {{-- <input type="checkbox" name="status" id="check" class="form-check-input" required>
                <label for="check" class="form-check-label">Status</label>
                <div class="invalid-feedback">
                    Please Tick Status.
                </div>--}}
            </div>

            <input type="submit" value="Signup" class="btn btn-primary mt-2 w-100">


          <div class="form-group m-3">
              <span class="text-primary"><a href="{{route('customer')}}">Goto Customer Page</a></span>
          </div>


        </form>
    </div>


</div>


<script src="/libraries/bootstrap.min.js"></script>
</body>
</html>
