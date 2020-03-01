<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YgaMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;

    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // return $this->markdown('emails.yga');

       $filePath1='upload/'.$this->data['pptfile'];
       $filePath2='upload/'.$this->data['cv'];

       return $this->markdown('emails.yga')
       ->attach(public_path($filePath1))
       ->attach(public_path($filePath2));


    }
}
