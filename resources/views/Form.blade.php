<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
              @if ($errors->any())
              <div class="alert alert-primary">
                <ul>
                  @foreach ($errors->all() as $err)
                      <li>{{$err}}</li>
                  @endforeach
                </ul>
              </div>
              @endif
                <form action="save" method="post">
                    @csrf
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">First Name</label>
                        <input type="text" class="form-control" value="{{old('fname')}}" id="exampleFormControlInput1" placeholder="First Name" name="fname">
                        {{-- <span>@error('fname')
                            {{$message}}
                        @enderror</span> --}}
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                        <input type="text" class="form-control" value="{{old('lname')}}" id="exampleFormControlInput1" placeholder="Last Name" name="lname">
                        {{-- <span>@error('lname')
                            {{$message}}
                        @enderror</span> --}}
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                        <input type="text" class="form-control" value="{{old('mobile')}}" id="exampleFormControlInput1" placeholder="Mobile Number" name="mobile">
                        {{-- <span>
                          @error('mobile')
                              {{$message}}
                          @enderror
                        </span> --}}
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="text" class="form-control" value="{{old('email')}}" id="exampleFormControlInput1" placeholder="Email Address" name="email">
                        {{-- <span>
                          @error('email')
                              {{$message}}
                          @enderror
                        </span> --}}
                      </div>
                      <div class="mb-3">
                          <button type="submit">save</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>