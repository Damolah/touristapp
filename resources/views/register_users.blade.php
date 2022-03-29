<!doctype html>
<html lang="en">

    <head>
        <title>Story Time</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
        <style>
            .card-registration .select-input.form-control[readonly]:not([disabled]) {
                font-size: 1rem;
                line-height: 2.15;
                padding-left: .75em;
                padding-right: .75em;
            }
            .card-registration .select-arrow {
                top: 13px;
            }
        </style>
    </head>

    <body>
        <section class="h-100 bg-dark">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <div class="card card-registration my-4">
                    <div class="row g-0">
                      <div class="col-xl-6 d-none d-xl-block">
                        <img
                          src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                          alt="Sample photo"
                          class="img-fluid"
                          style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                        />
                      </div>
                      <div class="col-xl-6">
                        <div class="card-body p-md-5 text-black">
                          <h3 class="mb-5 text-uppercase">Register</h3>
                          <form action="{{ route('register_user') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{old('email')}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control form-control-lg" value="{{old('password')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" required>
                                            <span id='message'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="bmd-label-floating">Mobile No</label>
                                            <input type="tel" name="mobile_no" value="{{old('mobile_no')}}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="bmd-label-floating">Gender</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="">Select Gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="bmd-label-floating">Date of Birth</label>
                                            <input type="date" name="date_of_birth" value="{{old('gender')}}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="bmd-label-floating">Location</label>
                                            <input type="text" name="location" class="form-control" value="{{old('location')}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="fileinput fileinput-new text-center col-md-6 mb-4" data-provides="fileinput">
                                        <br/>
                                        <br/>
                                        <input type="file" name="profile_image"/>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="bmd-label-floating">Writing Preference / Genre</label>
                                            <input type="text" name="writing_preference" class="form-control" value="{{old('writting_preference')}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <label class="bmd-label-floating">Register as Story Seeker/Teller</label><br>
                                                    <input class="radiobattle" type="radio" name="is_story_teller" value="yes"> <span>Story Teller</span>
                                                    <input class="radiobattle" type="radio" name="is_story_seeker" value="yes"><span>Story Seeker</span><br>
                                                </ul>

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Register</button>
                                <br/>
                                <h5>Already have an account<a href="{{route('login')}}"> Login</a></h5>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        {{-- <div class="wrapper ">
            <div class="">
                <!-- your content here -->
                <div class="content">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <img src="{{asset('assets/img/login_img.png')}}"
                                 class="w-100 " >
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Register</h4>
                                    </div>
                                    <div class="card-body">
                                        @include('errors.list')
                                        <form action="{{ route('register_user') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="bmd-label-floating">Name</label>
                                                        <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="bmd-label-floating">Email</label>
                                                        <input type="email" name="email" class="form-control" value="{{old('email')}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label for="password">Password</label>
                                                        <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label for="password_confirmation">Confirm Password</label>
                                                        <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" required>
                                                        <span id='message'></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="bmd-label-floating">Mobile No</label>
                                                        <input type="tel" name="mobile_no" value="{{old('mobile_no')}}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="bmd-label-floating">Gender</label>
                                                        <select name="gender" id="gender" class="form-control">
                                                            <option value="">Select Gender</option>
                                                            <option value="M">Male</option>
                                                            <option value="F">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="bmd-label-floating">Date of Birth</label>
                                                        <input type="date" name="date_of_birth" value="{{old('gender')}}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="bmd-label-floating">Location</label>
                                                        <input type="text" name="location" class="form-control" value="{{old('location')}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="fileinput fileinput-new text-center col-md-6 mb-4" data-provides="fileinput">
                                                    <br/>
                                                    <br/>
                                                    <input type="file" name="profile_image"/>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="bmd-label-floating">Writing Preference / Genre</label>
                                                        <input type="text" name="writing_preference" class="form-control" value="{{old('writting_preference')}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-outline">
                                                        <label class="bmd-label-floating">Register as Story Seeker/Teller</label><br>
                                                                <input class="radiobattle" type="radio" name="is_story_teller" value="yes"> <span>Story Teller</span>
                                                                <input class="radiobattle" type="radio" name="is_story_seeker" value="yes"><span>Story Seeker</span><br>
                                                            </ul>

                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary pull-right">Register</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="copyright float-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </div>
                        <!-- your footer here -->
                    </div>
                </footer>
            </div>
        </div> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            $('#password, #password_confirmation').on('keyup', function () {
            if ($('#password').val() == $('#password_confirmation').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
            });
        </script>
    </body>
</html>
