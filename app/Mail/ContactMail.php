<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
public $data;
public $pdfPath;

    /**
     * Create a new message instance.
     *
     * @param  array  $data
     * @return void
     */
    public function __construct($data, $pdfPath)
    {
       $this->data = $data;
        $this->pdfPath = $pdfPath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('exploright52032@gmail.com', 'Exploright')
            ->cc('omkarkadam466@gmail.com')
            ->subject('Contact US - ' . 'Exploright')
            ->view('pdf.title') // Make sure 'contact' is the correct view name
            ->attach($this->pdfPath);
    }
}

