<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;

    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    public function build()
    {
        $mail = $this
        ->subject('Novo contato pelo site');
        if (!empty($this->dados['email'])) {
            $mail->replyTo($this->dados['email'], $this->dados['name']);
        }
        return $mail->view('emails.contato');
    }
}