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
                    <p>Follow the 4 simple steps to get the prospectus </p>
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

                                <li class="active" id="icon3">
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
                                <p>Step 2/4</p>
                                <h2> Check and Confirm </h2>
                                <p class="text-danger "> <b> Note :</b> Please check all information are correect <i
                                        class='fa fa-warning' aria-hidden="true"></i></p>
                            </div>
                            <div class="input__container prospectus">
                                <form method="POST" action="{{ route('easebuzz') }}">
                                    @csrf
                                    <div class=" ">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="">Transaction ID</label>
                                                        <input id="txnid" class="form-control" name="txnid"
                                                            value="{{ $txn_id }}" placeholder="" readonly="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Prospectus Amount</label>
                                                        <input class="form-control" id="amount" name="amount"
                                                            value="{{ session('amount') }}" readonly="">
                                                        <small class="form-text color-orange">Please Pay this amount For
                                                            submit this
                                                            Form.</small>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="">Name</label>
                                                        <input id="firstname" class="form-control" name="firstname"
                                                            value="{{ $data->prospectus_applicant_name }}" placeholder=""
                                                            readonly="">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="">Email ID</label>
                                                        <input id="email" class="form-control" name="email"
                                                            value="{{ $data->prospectus_emailid }}" placeholder=""
                                                            readonly="">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="">Father's Name</label>
                                                        <input id="firstname" class="form-control" name="udf1"
                                                            value="{{ $data->prospectus_father_name }}" placeholder=""
                                                            readonly="">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <?php $course = DB::table('tbl_course')
                                                            ->where('course_id', $data->prospectus_course_name)
                                                            ->get(); ?>
                                                        <label for="">Course</label>
                                                        <input id="email" class="form-control" name="udf2"
                                                            value="{{ $course[0]->course_name }}" placeholder=""
                                                            readonly="">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="">Session</label>
                                                        {{-- {{ date('Y').' - '.(date('Y')+$data->prospectus_session) }} --}}
                                                        <input id="firstname" class="form-control" name="udf1"
                                                            value="{{ $data->prospectus_session }}" placeholder=""
                                                            readonly>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="">Phone No</label>
                                                        <input id="phone" class="form-control" name="phone"
                                                            value="{{ $data->mobile }}" placeholder="" readonly="">
                                                    </div>


                                                    <div class="form-group col-md-6 mt-4 mb-3">
                                                        <button class="btn btn-success " type="submit" name="button"><i
                                                                class="fa fa-paper-plane"></i> Pay </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-sm-5">
                                                {{-- <img class="img-fluid" src="{{  asset('img/getway.png') }}" alt=""> --}}
                                            </div> -->
                                            <div class="form-group  col-md-12">
                                                <span style="color:#c70013;"><b>Note : </b>If you are facing some Technical
                                                    Issues during
                                                    form submission, Feel Free to contact us on this number - +91-933 483
                                                    3167, +91-938 681
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
