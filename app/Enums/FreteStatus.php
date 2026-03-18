<?php

namespace App\Enums;

enum FreteStatus: string 
{
    //
    case EM_TRANSITO  = 'Em trânsito';
    case SAIU_PARA_ENTREGA = 'Saiu para entrega';
    case ENTREGUE = 'Entregue';

    public function pegarCorEtiqueta(): string
    {
        return match($this){
            self::EM_TRANSITO => 'bg-yellow-100 text-yellow-800',
            self::SAIU_PARA_ENTREGA => 'bg-blue-500 text-white',
            self::ENTREGUE => 'bg-green-100 text-green-800',
        };
    }
}
