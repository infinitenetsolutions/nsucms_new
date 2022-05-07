<x-layout>
    @slot('title', 'Netaji Subhas Univversity')

    @slot('body')

        <style>
            p {
                margin-top: 0;
                margin-bottom: 0.25rem;
            }

            .card-title {
                margin-bottom: 0rem;
            }

        </style>
        <div class="container">
            <!-- app invoice View Page -->
            <section class="invoice-view-wrapper section mt-5">
                <div class="row ">
                    <!-- invoice view page -->
                    <div class="col-sm-12">
                    </div>

                    <div class="col-sm-12 ">
                        <div class="card">
                            <div class="card-content " id="print_pdf_file">
                                <div class="row container">
                                    <div class="col-sm-12" style="text-align: center; width: 100%;">
                                        <nav class="whitenav" style="background-color: white; box-shadow: none;">
                                            <div class="nav-wrapper">
                                                <img width="250" class="img-fluid" src="img/logo.png"
                                                    alt="netaji subhas university Logo">
                                            </div>
                                        </nav>

                                        <h6> <strong>Online Application Form </strong></h6>
                                    </div>
                                    <div class="row container ">
                                        <div class="col-10">
                                            <strong> Referance No : {{ $data->id }}</strong>
                                        </div>
                                        <div class="col-2">

                                            <div class="invoice-action-btn ">
                                                <button id="printbutton" onclick="printdata()"
                                                    class="btn btn-success btn-sm ">
                                                    <span>Print</span> </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card bg-dark p-1 mb-3 col-sm-12  ">
                                <h5 class="card-title container  text-white">1. Program Details </h5>
                            </div>
                            <div class="row container ">

                                <div class="col-4">
                                    <p><strong>Session</strong></p>

                                    <p><?php // $session = DB::table('tbl_university_details')
                                        //->where('university_details_id', $data->prospectus_session)
                                        //->first();
                                    //echo explode('-', $session->university_details_academic_start_date)[0] . ' - ' . explode('-', $session->university_details_academic_end_date)[0];
                                    echo $data->prospectus_session;
                                    ?></p>
                                </div>
                                <div class="col-4">
                                    <p><strong>Course</strong></p>
                                    <p>{{ DB::table('tbl_course')->where('course_id', $data->prospectus_course_name)->first()->course_name }}
                                    </p>
                                </div>
                            </div>
                            <div class="invoice-product-details">
                                <div class="card bg-dark p-1 mb-3 col-sm-12 ">
                                    <h5 class="card-title container  text-white">2. Personal Details </h5>
                                </div>
                                <div class="row container">
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Your Name</strong></p>
                                        <p>{{ $data->prospectus_applicant_name }}</p>
                                    </div>
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Mobile Number</strong></p>
                                        <p>{{ $data->mobile }}</p>
                                    </div>
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Email</strong></p>
                                        <p>{{ $data->prospectus_emailid }}</p>
                                    </div>
                                </div>
                                <div class="row container">

                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Gender</strong></p>
                                        <p>{{ $data->prospectus_gender }}</p>
                                    </div>
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Date Of Birth</strong></p>
                                        <p>{{ $data->prospectus_dob }}</p>
                                    </div>
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Refered BY</strong></p>
                                        <p>{{ $data->revert_by }}</p>
                                    </div>
                                </div>
                                <div class="row container">
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Father's Name</strong></p>
                                        <p>{{ $data->prospectus_father_name }}</p>
                                    </div>

                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Mother's Name</strong></p>
                                        <p>{{ $data->prospectus_mother_name }}</p>
                                    </div>

                                </div>

                                <div class="card bg-dark p-1 mb-3 col-sm-12 ">
                                    <h5 class="card-title container  text-white">3. Address Details </h5>
                                </div>
                                <div class="row container">

                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong> Address</strong></p>
                                        <p>{{ $data->prospectus_address }}</p>

                                    </div>
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Country</strong></p>
                                        <p>{{ $data->prospectus_country }}</p>
                                    </div>

                                </div>
                                <div class="row container">
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>City</strong></p>
                                        <p>{{ $data->prospectus_city }}</p>
                                    </div>

                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>State/Province</strong></p>
                                        <p>{{ $data->prospectus_state }}</p>
                                    </div>
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Postal Code</strong></p>
                                        <p>{{ $data->prospectus_postal_code }}</p>
                                    </div>
                                </div>


                                <div class="card bg-dark p-1 mb-3 col-sm-12 ">
                                    <h5 class="card-title container  text-white">4. Payment Details </h5>
                                </div>
                                <div class="row container">
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Payment mode</strong></p>
                                        <p>{{ $data->prospectus_postal_code }}</p>
                                    </div>
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Amount </strong></p>
                                        <p>{{ $data->prospectus_postal_code }}</p>
                                    </div>
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Deposit To</strong></p>
                                        <p>{{ $data->prospectus_postal_code }}</p>
                                    </div>

                                </div>
                                <div class="row container">
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Transaction Date</strong></p>
                                        <p>{{ $data->prospectus_postal_code }}</p>
                                    </div>
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Transaction Id</strong></p>
                                        <p>{{ $data->prospectus_postal_code }}</p>
                                    </div>
                                    <div class="col-sm-4" style="width: 33.33%">
                                        <p><strong>Easebuzz Id</strong></p>
                                        <p>{{ $data->prospectus_postal_code }}</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- START RIGHT SIDEBAR NAV -->
        </div>
    @endslot
</x-layout>

<script>
    function printdata() {
        document.getElementsByClassName('bg-black')[0].style.display = "none"
        document.getElementsByClassName('bg-black')[1].style.display = "none"
        document.getElementById('printbutton').style.display = "none"

        print()
    }
</script>
