<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
class PropectusEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = DB::table('tbl_prospectus')->find(session('student_id'));
                // $data = DB::table('tbl_prospectus')->find(1);
        return $this->subject('Mail from nsuniv.ac.in')->view('print', ['data' => $data]);
    }
}
