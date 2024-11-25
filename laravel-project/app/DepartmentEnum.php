<?php

namespace App;

enum DepartmentEnum: string
{
    case Sipil = '1';
    case Industri = '2';
    case Informatika = '3';

    public function getLabel(): string
    {
        return match($this) {
            self::Sipil => 'Teknik Sipil',
            self::Industri => 'Teknik Industri',
            self::Informatika => 'Teknik Informatika',
        };
    }

    public function getAlias(): string
    {
        return match($this) {
            self::Sipil => 'SI',
            self::Industri => 'TI',
            self::Informatika => 'IF',
        };
    }
}
