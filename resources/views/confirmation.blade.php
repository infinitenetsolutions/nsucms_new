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
            <form method="POST" action="{{ route('easebuzz') }}">
                @csrf
                <div class="card p-4 mt-3 mb-3">
                    <div class="card bg-dark p-2 mb-4">
                        <h5 class="card-title   text-white">1. Prospectus confirmation </h5>
                    </div>
                    <p class="text-danger text-center"> <b> Note :</b> Please check all information are correect <i
                            class='fa fa-warning' aria-hidden="true"></i></p>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Transaction ID</label>
                                    <input id="txnid" class="form-control" name="txnid" value="{{ $txn_id }}" placeholder=""
                                        readonly="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Prospectus Amount</label>
                                    <input class="form-control" id="amount" name="amount" value="{{ session('amount') }}" readonly="">
                                    <small class="form-text color-orange">Please Pay this amount For submit this
                                        Form.</small>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Name</label>
                                    <input id="firstname" class="form-control" name="firstname" value="{{ $data->prospectus_applicant_name }}"
                                        placeholder="" readonly="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Email ID</label>
                                    <input id="email" class="form-control" name="email" value="{{ $data->prospectus_emailid }}"
                                        placeholder="" readonly="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Father's Name</label>
                                    <input id="firstname" class="form-control" name="udf1" value="{{ $data->prospectus_father_name }}"
                                        placeholder="" readonly="">
                                </div>

                                <div class="form-group col-md-6">
                                    <?php $course=DB::table('tbl_course')->where('course_id',$data->prospectus_course_name)->get() ?>
                                    <label for="">Course</label>
                                    <input id="email" class="form-control" name="udf2" value="{{ $course[0]->course_name }}" placeholder=""
                                        readonly="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Session</label>
                                    {{-- {{ date('Y').' - '.(date('Y')+$data->prospectus_session) }} --}}
                                    <input id="firstname" class="form-control" name="udf1" value="{{ $data->prospectus_session }}" placeholder=""
                                        readonly>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Phone No</label>
                                    <input id="phone" class="form-control" name="phone" value="{{ $data->mobile }}" placeholder=""
                                        readonly="">
                                </div>

                             
                                <div class="form-group col-md-6 mt-4">
                                    <button class="btn btn-success " type="submit" name="button"><i
                                            class="fa fa-paper-plane"></i> Pay </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <img class="img-fluid" src="{{ asset('img/getway.png') }}" alt="">
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
