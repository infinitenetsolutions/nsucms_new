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
                                <h2> Documents Required For Admission form fillup </h2>
                                <p>Please fill the details below so that you have to go into the next step </p>
                            </div>
                            <div class="input__container">
                                <form role="form" action="{{ route('admission.admission_document') }}" method="POST"
                                    id="admission_form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="-body table-responsive p-0">
                                        <div class="-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>10th Marksheet</label>
                                                    <input type="file" name="admission_tenth_marksheet"
                                                        class="form-control">
                                                </div>
                                                <div class="col-4">
                                                    <label>10th Passing Certificate</label>
                                                    <input type="file" name="admission_tenth_passing_certificate"
                                                        class="form-control">
                                                </div>
                                                <div class="col-4">
                                                    <label>12th Marksheet</label>
                                                    <input type="file" name="admission_twelve_markesheet"
                                                        class="form-control">
                                                </div>

                                                <div class="col-4">
                                                    <label>12th Passing Certificate</label>
                                                    <input type="file" name="admission_twelve_passing_certificate"
                                                        class="form-control">
                                                </div>
                                                <div class="col-4">
                                                    <label>Graduation Marksheet</label>
                                                    <input type="file" name="admission_graduation_marksheet"
                                                        class="form-control">
                                                </div>
                                                <div class="col-4">
                                                    <label>Recent Character Certificate</label>
                                                    <input type="file" name="admission_recent_character_certificate"
                                                        class="form-control">
                                                </div>

                                                <div class="col-4">
                                                    <label>Other Certificate (If applicable)</label>
                                                    <input type="file" name="admission_other_certificate"
                                                        class="form-control">
                                                </div>
                                                <div class="col-4">
                                                    <label>Character Certificate (If applicable)</label>
                                                    <input type="file" name="admission_character_certificate"
                                                        class="form-control">
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div id="loader_section"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" id="admission_button" class="btn btn-warning">Submit</button>
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
