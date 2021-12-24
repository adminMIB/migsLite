<?php

namespace App\Services\Response;

class ResponseService
{
    public static function get($api_version, $api_data)
    {
        return compact("api_version", "api_data");
    }

    public static function store($data)
    {
        return [
            "status" => 201,
            "message" => "Berhasil Menyimpan Data",
            "data" => $data,
        ];
    }
    public static function update($data)
    {
        return [
            "status" => 200,
            "message" => "Berhasil Memperbarui Data",
            "data" => $data,
        ];
    }
    public static function delete($data)
    {
        return [
            "status" => 200,
            "message" => "Berhasil Menghapus Data",
            "data" => $data,
        ];
    }
}
