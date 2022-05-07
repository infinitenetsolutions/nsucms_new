<x-layout>
    @slot('title', 'Netaji Subhas Univversity')
    @slot('body')
        <div class="bg-dark text-center  "><br>

            <img class="logo" src="{{ asset('img/logo.png') }}" alt="NSU">
        </div>
        <section class="contact-section ">
            <div class="form__container">
                <div class="title__container">
                    <h1> Prospectus Form {{ date('Y') }} </h1>
                    <p>Follow the 4 simple steps to complete your admission proccess </p>
                </div>
                <div class="body__container">
                    <div class="left__container">
                        <div class="side__titles">
                            <div class="title__name">
                                <h3> Fill form </h3>
                                <p>Enter & press next</p>
                            </div>

                            <div class="title__name">
                                <h3>Confirmation</h3>
                                <p>check & press pay </p>
                            </div>
                            <div class="title__name">
                                <h3>Pay the Amount</h3>
                                <p> Card & others payment menthod</p>
                            </div>
                            <div class="title__name">
                                <h3>Complete</h3>
                                <p>Print && check email </p>
                            </div>
                        </div>
                        <div class="progress__bar__container">
                            <ul>
                                <li class="active" id="icon1">
                                    <ion-icon name="person-outline"></ion-icon>
                                </li>

                                <li id="icon3">
                                    <ion-icon name="layers-outline"></ion-icon>
                                </li>
                                <li id="icon4">
                                    <ion-icon name="pricetag-outline"></ion-icon>
                                </li>
                                <li id="icon5">
                                    <i class="fa fa-print" aria-hidden="true"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right__container">
                        <fieldset id="form2">
                            <div class="sub__title__container ">
                                <p>Step 1/4</p>
                                <h2>Let's start with prospectus number </h2>
                                <p>Please fill the details below so that you have to go into the next step </p>
                            </div>
                            @if(session('error'))

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    alert  </strong>  {{ session('error') }}
                              
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                           
                            @endif
                            <div class="input__container prospectus">
                                <form method="POST" action="{{ route('prospectus') }}">
                                    @csrf
                                    <div class="  mb-3">
                                        <div class="row">
                                            <div class=" bg-dark p-2 mb-4">
                                                <h5 class="-title   text-white">1. Program Details </h5>
                                            </div>
                                            <div class="form-group col-md-4 ">
                                                <label for="">Select Course <span class="text-danger" > * </span> </label>
                                                <select id="prospectus_course" onchange="check_semester(this.value)"
                                                    name="prospectus_course_name" class="form-control" required>
                                                    <option  selected disabled> Select Course </option>
                                                    @foreach ($data as $course)
                                                        <option value="{{ $course->course_id }}" >
                                                            {{ $course->course_name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="">Session <span class="text-danger">*</span> </label>
                                                <input required readonly id="session" name="prospectus_session"
                                                    class="form-control" value="" placeholder="">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Amount <span class="text-danger">*</span></label>
                                                <input required readonly id="amount" class="form-control" value="" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="  mb-3">
                                        <div class="row">
                                            <div class=" bg-dark p-2 mb-4">
                                                <h5 class="card-title   text-white">2. Personal Details
                                                </h5>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="">Applicant Name <span class="text-danger">*</span></label>
                                                <input id="prospectus_applicant_name" name="prospectus_applicant_name"
                                                    class="form-control" placeholder="Enter Name" type="text" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Father's Name <span class="text-danger">*</span></label>
                                                <input id="prospectus_fathers_name" name="prospectus_father_name"
                                                    class="form-control" placeholder="Father's Name" type="text"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Mother's Name <span class="text-danger">*</span></label>
                                                <input id="prospectus_mothers_name" name="prospectus_mother_name"
                                                    class="form-control" placeholder="Mother's Name" type="text"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Referred By</label>
                                                <input  type="text" id="" name="revert_by" placeholder="Counselor Name"
                                                    class="form-control" value="">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="">Select Gender <span class="text-danger">*</span></label>
                                                <select id="prospectus_gender" name="prospectus_gender"
                                                    class="form-control" required>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="">Date Of Birth <span class="text-danger">*</span></label>
                                                <input id="prospectus_dob" name="prospectus_dob" class="form-control"
                                                    placeholder="Enter DOB" type="date" required>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="">Postal Code <span class="text-danger">*</span></label>
                                                <input onkeyup="check_pincode(this.value)" maxlength="6"
                                                    id="prospectus_postal_code" name="prospectus_postal_code"
                                                    class="form-control" placeholder="Enter Postal Code" type="text"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="">Country <span class="text-danger">*</span></label>
                                                <input id="prospectus_country" name="prospectus_country"
                                                    class="form-control" value="" type="text" readonly="">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for=""> State <span class="text-danger">*</span></label>
                                                <input required readonly id="prospectus_state" value="" class="form-control"
                                                    name="prospectus_state" />

                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for=""> City <span class="text-danger">*</span></label>
                                                <input id="prospectus_city" name="prospectus_city" class="form-control"
                                                    required />
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="">Address <span class="text-danger">*</span></label>
                                                <textarea id="prospectus_address" name="prospectus_address" class="form-control" placeholder="Enter Your Address"
                                                    required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- OTP Section Starts -->

                                    <div class="  mb-3">
                                        <div class="row">
                                            <div class=" bg-dark p-2 mb-4">
                                                <h5 class="card-title   text-white">3. Varification Details </h5>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Email Address <span class="text-danger">*</span></label>
                                                <input id="email" name="prospectus_emailid"
                                                    class="form-control" placeholder="Enter Email" type="email"
                                                    required>
                                                <small class="form-text text-muted">We'll never share your email with anyone
                                                    else.</small>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Phone Number <span class="text-danger">*</span></label>
                                                <input id="prospectus_phone" name="mobile"
                                                    onkeyup="check_number(this.value)" class="form-control"
                                                    placeholder="Enter Phone Number" type="text" maxlength="10"
                                                    minlength="10" required>
                                                <small id="prospectus_phone_err" class="form-text text-muted text-success">
                                                </small>
                                            </div>
                                            <div class="form-group col-md-4" id="vaild_otp" style="display: none">
                                                <label for="">OTP <span class="text-danger">*</span></label>
                                                <input required id="prospectus_otp" name="prospectus_otp" class="form-control"
                                                    placeholder="Enter 6 Digit OTP" type="number" maxlength="6" minlength="6">
                                                <small id="prospectus_otp_err"
                                                    class="form-text text-muted color-orange">Please
                                                    Enter Your OTP.</small>
                                            </div>
                                         

                                        </div>
                                    </div>
                                    <div class="  mb-3">
                                        <div class="row">
                                            <div class="col-sm-12 mt-4">
                                                <input type="checkbox" name="" required id=""> <span
                                                    style="color:#3d3c3fe8;"><b> Yes I have
                                                        read all the
                                                        instructions, by clicking the button <a href=""
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal">Accept &
                                                            Go</a> </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mt-4">
                                            <button type="submit" class="btn bg-dark btn-warning  "><i
                                                    class="fa fa-paper-plane" aria-hidden="true"></i>
                                                Next</button>
                                            <a href="already" class="btn btn-secondary "><i
                                                    class="fa fa-angle-double-right"></i> Already
                                                Apply</a>
                                        </div>
                                    </div>
                                    <div class="form-group  col-md-12">
                                        <span style="color:#c70013;"><b>Note : </b>If you are facing some Technical Issues
                                            during
                                            form submission, Feel Free to contact us on this number - +91-933 483 3167,
                                            +91-938 681
                                            7857</span>
                                    </div>
                                </form>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        </section>
    @endslot
</x-layout>

<script>
    function check_semester(course) {
        console.log(course);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            data = this.responseText;
            var data = JSON.parse(data);
            document.getElementById('amount').value = data[0].prospectus_rate
            session = data[0].duration;
            document.getElementById('session').value = new Date().getFullYear() + ' - ' + (parseInt(new Date()
                .getFullYear()) + Number(session));
        }
        xmlhttp.open("GET", window.location.href + "course/" + course);
        xmlhttp.send();
    }

    function check_pincode(pincode) {
        console.log(pincode);
        if (pincode.length == 6) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                data = this.responseText;
                var data = JSON.parse(data);
                document.getElementById('prospectus_state').value = data[0].PostOffice[0].State
                document.getElementById('prospectus_city').value = data[0].PostOffice[0].Block
                document.getElementById('prospectus_country').value = data[0].PostOffice[0].Country
                document.getElementById('prospectus_postal_code').style.borderColor = 'green';
            }
            xmlhttp.open("GET", "https://api.postalpincode.in/pincode/" + pincode);
            xmlhttp.send();
        } else {
            document.getElementById('prospectus_state').value = '';
            document.getElementById('prospectus_city').value = '';
            document.getElementById('prospectus_postal_code').style.borderColor = 'red';
        }
    }

    function check_number(number) {
        if (number.length > 9 && number.length < 12) {
            email = document.getElementById('email').value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                document.getElementById('vaild_otp').style.display = 'block';
                document.getElementById('prospectus_phone_err').innerHTML =
                    '<smal class="text-success">Otp Sent on ' + number +  ' and '+email+'</small>';
            }
            xmlhttp.open("GET", window.location.href + "otp/" + number + "/" + email);
            xmlhttp.send();
            document.getElementById('prospectus_phone').style.borderColor = 'green';

        } else {
            document.getElementById('prospectus_phone').style.borderColor = 'red';

        }
    }
</script>
