<?php

namespace App\Services;

class VersioningApiService
{
    public static function version_1_0()
    {
        $data["version"] = "1.0";
        $data["deprecated"] = false;
        $data["release"] = "22 Desember 2021";
        $data["note"] = "-";
        return $data;
    }
}
