
@component('mail::message',['nome' => $nome,'senha' => $senha])
# Nova Senha

Olá {{ $nome}}, sua nova senha é  <strong> {{$senha}} </strong>


Obrigado,<br>
BICTsys
@endcomponent
