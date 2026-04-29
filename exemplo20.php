<?php

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