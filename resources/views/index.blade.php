<x-layout>
    @slot('title', 'Netaji Subhas Univversity')

    @slot('body')


        <div class="bg-dark text-center pb-3 mb-3 "><br>

            <img class="logo" src="{{ asset('img/logo.png') }}" alt="NSU">
        </div>
        <!-- start contact -->
        <div class="bg-black text-center text-white mt-in-3 p-1" data-aos="zoom-in" data-aos-duration="1000">
            <h2>Prospectus Form</h2>
            <div class="divider">
                <span class="fa fa-mortar-board"></span>
            </div>
        </div>
        <section class="contact-section container">


            <form method="POST" action="{{ route('prospectus') }}">
                @csrf
                <div class="card p-4 mt-3 mb-3">
                    <div class="row">
                        <div class="card bg-dark p-2 mb-4">
                            <h5 class="card-title   text-white">1. Program Details </h5>
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="">Select Course</label>
                            <select id="prospectus_course" onchange="check_semester(this.value)"
                                name="prospectus_course_name" class="form-control" required="">
                                <option value="" selected disabled> Select Course </option>
                                @foreach ($data as $course)
                                    <option value="{{ $course->course_id }}" selected=""> {{ $course->course_name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Session</label>
                            <input readonly id="session" name="prospectus_session" class="form-control" value=""
                                placeholder="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Amount</label>
                            <input readonly id="amount" class="form-control" value="" placeholder="">
                        </div>
                    </div>

                </div>
                <div class="card p-4 mt-3 mb-3">
                    <div class="row">
                        <div class="card bg-dark p-2 mb-4">
                            <h5 class="card-title   text-white">2. Personal Details
                            </h5>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Applicant Name</label>
                            <input id="prospectus_applicant_name" name="prospectus_applicant_name" class="form-control"
                                placeholder="Enter Name" type="text" required="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Father's Name</label>
                            <input id="prospectus_fathers_name" name="prospectus_father_name" class="form-control"
                                placeholder="Father's Name" type="text" required="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Mother's Name</label>
                            <input id="prospectus_mothers_name" name="prospectus_mother_name" class="form-control"
                                placeholder="Mother's Name" type="text" required="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Referred By</label>
                            <input type="text" id="" name="revert_by" placeholder="Counselor Name" class="form-control"
                                value="" required="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Select Gender</label>
                            <select id="prospectus_gender" name="prospectus_gender" class="form-control" required="">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Date Of Birth</label>
                            <input id="prospectus_dob" name="prospectus_dob" class="form-control" placeholder="Enter DOB"
                                type="date" required="">
                        </div>


                        <div class="form-group col-md-2">
                            <label for="">Postal Code</label>
                            <input onkeyup="check_pincode(this.value)" maxlength="6" id="prospectus_postal_code"
                                name="prospectus_postal_code" class="form-control" placeholder="Enter Postal Code"
                                type="text" required="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Country</label>
                            <input id="prospectus_country" name="prospectus_country" class="form-control" value=""
                                type="text" readonly="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for=""> State</label>
                            <input readonly id="prospectus_state" value="" class="form-control" name="prospectus_state" />

                        </div>
                        <div class="form-group col-md-2">
                            <label for=""> City</label>
                            <input id="prospectus_city" name="prospectus_city" class="form-control" required="" />


                        </div>




                        <div class="form-group col-md-8">
                            <label for="">Address</label>
                            <textarea id="prospectus_address" name="prospectus_address" class="form-control"
                                placeholder="Enter Your Address" required=""></textarea>
                        </div>
                    </div>
                </div>
                <!-- OTP Section Starts -->

                <div class="card p-4 mt-3 mb-3">
                    <div class="row">
                        <div class="card bg-dark p-2 mb-4">
                            <h5 class="card-title   text-white">3. Varification Details </h5>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Email Address</label>
                            <input id="prospectus_email" name="prospectus_emailid" class="form-control"
                                placeholder="Enter Email" type="email" required="">
                            <small class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Phone Number</label>
                            <input id="prospectus_phone" name="mobile" onkeyup="check_number(this.value)"
                                class="form-control" placeholder="Enter Phone Number" type="text" maxlength="10"
                                minlength="10" required="">
                            <small id="prospectus_phone_err" class="form-text text-muted text-success"> </small>
                        </div>



                        <div class="form-group col-md-4" id="vaild_otp" style="display: none">
                            <label for="">OTP</label>
                            <input id="prospectus_otp" class="form-control" placeholder="Enter 6 Digit OTP" type="text"
                                maxlength="6" minlength="6">
                            <small id="prospectus_otp_err" class="form-text text-muted color-orange">Please
                                Enter Your OTP.</small>
                        </div>

                    </div>
                </div>

                <div class="card p-4 mt-3 mb-3">
                    <div class="row">
                        <div class="col-sm-12 mt-4">
                            <input type="checkbox" name="" required id=""> <span style="color:#3d3c3fe8;"><b> Yes I have
                                    read all the
                                    instructions, by clicking the button <a href="" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Accept & Go</a> </span>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-4">
                        <button type="submit" class="btn bg-dark btn-danger"><i class="fa fa-angle-double-right"></i>
                            Apply</button>
                        <a href="already" class="btn btn-secondary "><i class="fa fa-angle-double-right"></i> Already
                            Apply</a>
                    </div>

                </div>
                <div class="form-group  col-md-12">
                    <span style="color:#c70013;"><b>Note : </b>If you are facing some Technical Issues during
                        form submission, Feel Free to contact us on this number - +91-933 483 3167, +91-938 681
                        7857</span>

                </div>
            </form>

        </section>
        <!-- end contact -->



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
                .getFullYear()) + session);
        }
        xmlhttp.open("GET",  window.location.href+"course/" + course);
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
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                document.getElementById('vaild_otp').style.display = 'block';
                document.getElementById('prospectus_phone_err').innerHTML =
                    '<span class="text-success">Otp sended on ' + number + '</span>';


            }
            xmlhttp.open("GET",  window.location.href+"otp/" + number);
            xmlhttp.send();
            document.getElementById('prospectus_phone').style.borderColor = 'green';

        } else {
            document.getElementById('prospectus_phone').style.borderColor = 'red';

        }
    }
</script>
