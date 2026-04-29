<?php

// interface é um contrato que criamos, onde definimos os métodos que as classes que implementarem essa interface devem ter.
interface INotificador {
    public function enviar($destinatario, $mensagem);
}

// Implementação concreta do INotificador para enviar notificações por email
class NotificadorEmail implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementação concreta do INotificador para enviar notificações por SMS
class NotificadorSMS implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "SMS enviado para {destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar concreta do INotificador para enviar notificações por Whatsapp
class NotificadorWhatsapp implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "Whatsapp enviado para {destinatario}. Mensagem: {$mensagem}.";
    }
}

// Classe que usa a interface
class SistemaDeNotificacoes {
    private $notificador;

    public function __construct(INotificador $notificador)
    {
        $this->notificador = $notificador;
    }

    public function notificarUsuario($destinatario, $mensagem)
    {
        $this->notificador->enviar($destinatario, $mensagem);
    }
}

$sistemaEmail = new SistemaDeNotificacoes(new NotificadorEmail());
$sistemaSMS = new SistemaDeNotificacoes(new NotificadorSMS());
$sistemaWhatsapp = new SistemaDeNotificacoes(new NotificadorWhatsapp());

$sistemaEmail->notificarUsuario("joao@email.com", "Seu Pedido foi confirmado");
$sistemaSMS->notificarUsuario("17997651234", "Seu Pedido foi confirmado");
$sistemaWhatsapp->notificarUsuario("17997651234", "Seu Pedido foi confirmado");