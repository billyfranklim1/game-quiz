<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Usuario;

class EmailNovaSenha extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $novaSenha;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuario, $novaSenha)
    {
        //
        // dd($usuario->stremailusuario);
        $this->email = $usuario->stremailusuario;
        $this->nome  = $usuario->strnomeusuario;
        $this->senha = $novaSenha;

        // dd($this->email);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        // return $this->markdown('emails.resteSenha-markdown');

        return $this->from($this->email)
                    // ->view('emails.resteSenha');
                    ->markdown('emails.resteSenha-markdown')
                    ->with([
                    'nome'     => $this->nome,
                    'senha'    => $this->senha,
                    'url'     => $this->senha,
                ]);
    }
}
