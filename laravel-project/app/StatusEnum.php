<?php

namespace App;

enum StatusEnum: string
{
    case AKTIF = '1';
    case NONAKTIF = '0';

    public function getLabel(): string
    {
        return match($this) {
            self::AKTIF => 'Aktif',
            self::NONAKTIF => 'Tidak Aktif',
        };
    }
}
