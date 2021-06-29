<?php

namespace classes;

class StringHelper
{
    public function deleteSpaces(string $string): string
    {
        // Удаление символов из начала
        while ($string[0] === '_') {
            $string = substr($string, 1);
        }
        // Удаление символов из конца
        while ($string[mb_strlen($string) - 1] === '_') {
            $string = substr($string, 0, -1);
        }
        // Удаление символов из середины
        $i = 0;
        while (mb_strlen($string) > $i) {
            if ($string[$i] === '_' and $string[$i + 1] === '_') {
                $string = substr_replace($string, '', $i, 1);
            } else {
                $i++;
            }
        }

        return $string;
    }

}