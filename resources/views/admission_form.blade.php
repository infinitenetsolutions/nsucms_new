<x-layout>
    @slot('title', 'Netaji Subhas University')

    @slot('body')


    <div class="bg-dark text-center"><br>
        <img class="logo" src="{{ asset('img/logo.png') }}" alt="NSU">
    </div>

    <section class="contact-section ">
        <div class="form__container">
            <div class="title__container">
                <h1> Admission Form {{ date('Y') }} </h1>
                <p>Follow the 4 simple steps to complete your admission proccess </p>
            </div>
            <div class="body__container">
                <div class="left__container">
                    <div class="side__titles">
                        <div class="title__name">
                            <h3>Prospectus & Phone</h3>
                            <p>Enter & press next</p>
                        </div>
                        <div class="title__name">
                            <h3>OTP Verification</h3>
                            <p>select & press next</p>
                        </div>
                        <div class="title__name">
                            <h3>Services</h3>
                            <p>select & press next</p>
                        </div>
                        <div class="title__name">
                            <h3>Budget</h3>
                            <p>Select & press next</p>
                        </div>
                        <div class="title__name">
                            <h3>Complete</h3>
                            <p>Finaly press submit</p>
                        </div>
                    </div>
                    <div class="progress__bar__container">
                        <ul>
                            <li class="active" id="icon1">
                                <ion-icon name="person-outline"></ion-icon>
                            </li>
                            <li class="active" id="icon2">
                                <i class="fa fa-key" aria-hidden="true"></i>
                            </li>
                            <li class="active" id="icon3">
                                <ion-icon name="layers-outline"></ion-icon>
                            </li>
                            <li id="icon4">
                                <ion-icon name="pricetag-outline"></ion-icon>
                            </li>
                            <li id="icon5">
                                <ion-icon name="mail-outline"></ion-icon>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right__container">
                    <fieldset id="form2">
                        <div class="sub__title__container ">
                            <p>Step 3/5</p>
                            <h2> Admission form fill up </h2>
                            <p>Please fill the details below so that you have to go into the next step </p>
                        </div>
                        <div class="input__container">
                            <form role="form" action="include/controller.php" method="POST" id="add_admission_form" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12" id="error_section"></div>
                                    <div class="col-4">

                                        <label>Registration No</label>
                                        <input type="text" name="add_admission_id" value="3294" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label>Enter Prospectus No</label>
                                        <input id="form_no" type="text" name="add_admission_form_no" class="form-control" required="">
                                    </div>
                                    <div class="col-4">
                                        <label>Admission No</label>
                                        <input type="text" name="add_admission_no" class="form-control" value="" readonly="" placeholder="Generate By University">
                                    </div>

                                    <div class="col-4">
                                        <label>Title</label>
                                        <select name="add_admission_title" class="form-control">
                                            <option value="0">Select</option>
                                            <option value="Master">Master</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                        </select>
                                    </div>

                                    <div class="col-4">
                                        <label>First Name</label>
                                        <input id="first_name" type="text" name="add_admission_first_name" class="form-control" required="">
                                    </div>

                                    <div class="col-4">
                                        <label>Middle Name</label>
                                        <input type="text" name="add_admission_middle_name" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label>Last Name</label>
                                        <input id="last_name" type="text" name="add_admission_last_name" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label>Course</label>
                                        <select id="course" name="add_admission_course_name" class="form-control" required="">
                                            <option value="0">Select Course</option>
                                            <option value="1">BBA</option>
                                            <option value="2">MBA</option>
                                            <option value="3">B.COM</option>
                                            <option value="4">M.COM</option>
                                            <option value="5">BCA</option>
                                            <option value="6">MCA</option>
                                            <option value="7">B.SC(IT)</option>
                                            <option value="8">M.SC(IT)</option>
                                            <option value="9">B.PHARM</option>
                                            <option value="10">D.PHARM</option>
                                            <option value="11">B.ED</option>
                                            <option value="12">B.Sc in Hotel Management</option>
                                            <option value="13">B.Sc IN Travel &amp; Tourism Management</option>
                                            <option value="14">LLB</option>
                                            <option value="15">BBA LLB</option>
                                            <option value="16">B.Sc (BOTANY)</option>
                                            <option value="17">B.Sc (ZOOLOGY)</option>
                                            <option value="18">B.Sc (MATHEMATICS)</option>
                                            <option value="19">B.SC (PHYSICS)</option>
                                            <option value="20">B.SC (CHEMISTRY)</option>
                                            <option value="21">M.Sc (BOTANY)</option>
                                            <option value="22">M.Sc (ZOOLOGY)</option>
                                            <option value="23">M.Sc (MATHEMATICS)</option>
                                            <option value="24">M.SC (PHYSICS)</option>
                                            <option value="25">M.SC (CHEMISTRY)</option>
                                            <option value="26">B.TECH</option>
                                            <option value="27">POLYTECHNIC</option>
                                            <option value="28">B.A</option>
                                            <option value="29">M.A (ENGLISH)</option>
                                            <option value="30">Event Management</option>
                                            <option value="31">B.A IN JOURNALISM &amp; MASS COMM.</option>
                                            <option value="32">M.A IN JOURNALISM &amp; MASS COMM.</option>
                                            <option value="33">FASHION DESIGNING</option>
                                            <option value="34">INTERIOR DESIGNING</option>
                                            <option value="35">Ph.D</option>
                                            <option value="38">B.A (Economics)</option>
                                            <option value="39">B.A (Geography)</option>
                                            <option value="40">B.A (Political Science)</option>
                                            <option value="41">B.A (English)</option>
                                            <option value="42">Diploma in Engineering</option>
                                            <option value="43">M. Sc.</option>
                                            <option value="44">B.Sc in Agriculture</option>
                                            <option value="45">M.A (ECONOMICS)</option>
                                            <option value="46">M.A (GEOGRAPHY)</option>
                                            <option value="47">M.A (POL. SCIENCE)</option>
                                            <option value="48">M.A (HISTORY)</option>
                                            <option value="49">MA in Education</option>
                                            <option value="50">GNM</option>
                                            <option value="51">ANM</option>
                                            <option value="52">B.Sc. Nursing</option>
                                            <option value="53">DMLT</option>
                                            <option value="54">DOTT</option>
                                            <option value="55">BMLT</option>
                                            <option value="56">B.A (History)</option>
                                            <option value="57">Lol1</option>
                                        </select>
                                    </div>



                                    <div class="col-4">
                                        <label>Session</label>
                                        <select id="session_check" class="form-control" name="add_admission_session">
                                            <option value="0">Select Academic Year</option>
                                            <option value="1">01/04/2019 to 31/03/2021</option>
                                            <option value="2">01/04/2019 to 31/03/2022</option>
                                            <option value="3">01/04/2019 to 31/03/2023</option>
                                            <option value="4">01/04/2019 to 31/03/2024</option>
                                            <option value="5">01/04/2020 to 31/03/2022</option>
                                            <option value="6">01/04/2020 to 31/03/2023</option>
                                            <option value="7">01/04/2020 to 31/03/2024</option>
                                            <option value="8">01/04/2020 to 31/03/2025</option>
                                            <option value="9">01/04/2018 to 31/03/2020</option>
                                            <option value="10">01/04/2018 to 31/03/2021</option>
                                            <option value="11">01/04/2021 to 31/03/2023</option>
                                            <option value="12">01/04/2021 to 31/03/2024</option>
                                            <option value="13">01/04/2021 to 31/03/2025</option>
                                            <option value="14">01/04/2021 to 31/03/2026</option>
                                            <option value="15">01/04/2022 to 01/04/2024</option>
                                            <option value="16">01/04/2022 to 01/04/2025</option>
                                            <option value="17">01/04/2022 to 01/04/2026</option>
                                            <option value="18">01/04/2022 to 01/04/2027</option>
                                            <option value="19">01/04/2022 to 01/04/2028</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Date Of Birth</label>
                                        <input id="dob" type="date" name="add_admission_dob" class="form-control" required="">
                                    </div>

                                    <div class="col-4">
                                        <label>Nationality</label>
                                        <input type="text" name="add_admission_nationality" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label>Aadhar No</label>
                                        <input type="text" name="add_admission_aadhar_no" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label>Date Of Admission</label>
                                        <input type="date" name="add_date_of_admission" class="form-control" value="2022-04-09">
                                    </div>
                                    <div class="col-4">
                                        <label>Religion</label>
                                        <select name="add_admission_religion" class="form-control">
                                            <option value="0">Select</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Category</label>
                                        <select name="add_admission_category" class="form-control">
                                            <option value="0">Select</option>
                                            <option value="General">General</option>
                                            <option value="SC">SC</option>
                                            <option value="ST">ST</option>
                                            <option value="OBC">OBC</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Gender</label>
                                        <select id="gender" name="add_admission_gender" class="form-control">
                                            <option value="0">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>


                                    <div class="col-md-4">
                                        <label>Username</label>
                                        <input type="text" name="add_admission_username" class="form-control" required="">
                                    </div>
                                    <div class="col-4">
                                        <label>Password</label>
                                        <input type="password" name="add_admission_password" class="form-control" required="">
                                    </div>
                                    <div class="col-4">
                                        <label>Blood Group</label>
                                        <input type="text" name="add_admission_blood_group" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label>Hostel</label>
                                        <select name="add_admission_hostel" class="form-control">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Transport</label>
                                        <select name="add_admission_transport" class="form-control">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Image</label>
                                        <input type="file" name="add_admission_profile_image" id="add_admission_profile_image" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <img src="http://www.clipartpanda.com/clipart_images/user-66327738/download" id="photoBrowser" style="margin-top:17px;margin-left:4px;border:solid 1px lightgray" width="120" height="120">
                                    </div>

                                </div>

                                <hr>
                                <div class="sub__title__container ">
                                    <h3 class="text-white">PRESENT ADDRESS</h3>
                                </div>
                                <br>

                                <div class="body table-responsive p-0">
                                    <div class="-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <label>Residential Address</label>
                                                <textarea id="address" name="add_admission_residential_address" class="form-control" style="height: 38px;"></textarea>
                                            </div>
                                            <div class="col-4">
                                                <label>State</label>
                                                <input id="state" type="text" name="add_admission_state" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>City</label>
                                                <input id="city" type="text" name="add_admission_city" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>District</label>
                                                <input type="text" name="add_admission_district" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Pin Code</label>
                                                <input id="postal_code" type="text" name="add_admission_pin_code" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Home Landline no.</label>
                                                <input type="text" name="add_admission_home_landlineno" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Mobile No. (Student)</label>
                                                <input id="mobile_no" type="text" name="add_admission_mobile_student" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Father Phone No.</label>
                                                <input type="text" name="add_admission_father_phoneno" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Email Id (Father)</label>
                                                <input type="email" name="add_admission_emailid_father" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Email Id (Student)</label>
                                                <input id="email_id" type="email" name="add_admission_emailid_student" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>



                                <hr>
                                <div class="sub__title__container ">
                                    <h3 class="text-white">Parent Details</h3>
                                </div>
                                <br>
                                <div class="-body table-responsive p-0">
                                    <div class="-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <label>Father Name</label>
                                                <input id="father_name" type="text" name="add_admission_father_name" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Father Whatsapp No</label>
                                                <input type="text" name="add_admission_father_whatsappno" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Mother Name</label>
                                                <input id="mother_name" type="text" name="add_admission_mother_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <hr>
                                <div class="sub__title__container ">
                                    <h3 class="text-white">Academic Details</h3>
                                </div>
                                <br>
                                <div class="body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Qualification</th>
                                                <th>Board/University</th>
                                                <th>School/College Name</th>
                                                <th>Year Of Passing</th>
                                                <th>Percentage or CGPA</th>
                                                <th>Subjects</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>High School</td>
                                                <td><input type="text" name="add_admission_high_school_board_university" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_high_school_college_name" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_high_school_passing_year" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_high_school_per" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_high_school_subjects" size="15" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Intermediate</td>
                                                <td><input type="text" name="add_admission_intermediate_board_university" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_intermediate_college_name" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_intermediate_passing_year" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_intermediate_per" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_intermediate_subjects" size="15" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Graduation</td>
                                                <td><input type="text" name="add_admission_graduation_board_university" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_graduation_college_name" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_graduation_passing_year" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_graduation_per" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_graduation_subjects" size="15" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Post Graduation</td>
                                                <td><input type="text" name="add_admission_post_graduation_board_university" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_post_graduation_college_name" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_post_graduation_others" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_post_graduation_per" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_post_graduation_subjects" size="15" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Others</td>
                                                <td><input type="text" name="add_admission_others_board_university" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_others_college_name" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_others_passing_year" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_others_per" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_others_subjects" size="15" value=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>





                                <hr>
                                <div class="sub__title__container ">
                                    <h3 class="text-white">Documents Required For Admission</h3>
                                </div>
                                <br>

                                <div class="-body table-responsive p-0">
                                    <div class="-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <label>10th Marksheet</label>
                                                <input type="file" name="add_admission_tenth_marksheet" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>10th Passing Certificate</label>
                                                <input type="file" name="add_admission_tenth_passing_certificate" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>12th Marksheet</label>
                                                <input type="file" name="add_admission_twelve_markesheet" class="form-control">
                                            </div>

                                            <div class="col-4">
                                                <label>12th Passing Certificate</label>
                                                <input type="file" name="add_admission_twelve_passing_certificate" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Graduation Marksheet</label>
                                                <input type="file" name="add_admission_graduation_marksheet" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Recent Character Certificate</label>
                                                <input type="file" name="add_admission_recent_character_certificate" class="form-control">
                                            </div>

                                            <div class="col-4">
                                                <label>Other Certificate (If applicable)</label>
                                                <input type="file" name="add_admission_other_certificate" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label>Character Certificate (If applicable)</label>
                                                <input type="file" name="add_admission_character_certificate" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>
     
                                <hr>
                                    <div class="sub__title__container ">
                                        <h3 class="text-white">TECHNICAL QUALIFICATION (IF ANY)</h3>
                                    </div>
                                    <br>

                                <div class="-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Course</th>
                                                <th>Board / University</th>
                                                <th>Year Of Passing</th>
                                                <th>Percentage or CGPA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><input type="text" name="add_admission_course1" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_board_university1" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_year_of_passing1" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_percentage1" size="15" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><input type="text" name="add_admission_course2" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_board_university2" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_year_of_passing2" size="15" value=""></td>
                                                <td><input type="text" name="add_admission_percentage2" size="15" value=""></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>


                                    <hr>
                                    <div class="sub__title__container ">
                                        <h3 class="text-white">WORK EXPERIENCE (IF ANY)</h3>
                                    </div>
                                    <br>

                                    <div class="-body table-responsive p-0">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name of organisation</th>
                                                    <th>Designation</th>
                                                    <th>Duration</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><input type="text" name="add_admission_name_of_org1" size="15"></td>
                                                    <td><input type="text" name="add_admission_designation1" size="15"></td>
                                                    <td><input type="text" name="add_admission_duration1" size="15"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="col-md-12">
                                        <div id="loader_section"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" id="add_admission_button" class="btn btn-warning">Submit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
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

</script>