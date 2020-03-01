<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
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
      //return $this->markdown('emails.welcome');

      //return $this->markdown('emails.welcome')
     // ->with('data', $this->data);



         $filePath1='upload/'.$this->data['fullabstract'];
        echo $filePath2='upload/'.$this->data['abstractnoauthor'];
        $filePath3='upload/'.$this->data['eposter'];

        

        if(file_exists(public_path($filePath1))){

            return $this->markdown('emails.welcome')
            ->attach(public_path($filePath1));

        }
        
        

        elseif(file_exists(public_path($filePath2))){

            return $this->markdown('emails.welcome')
            ->attach(public_path($filePath2));

        }
        

        elseif(file_exists(public_path($this->data['eposter']))){

            return $this->markdown('emails.welcome')
            ->attach(public_path($filePath3));

        }

     
    }

     

}
