<?php
$mahasiswa = [
    [
        "npm"   => "001",
        "nama"  => "Mitya",
        "nilai" => 80
    ],
    [
        "npm"   => "002",
        "nama"  => "Lohen",
        "nilai" => 75
    ],
    [
        "npm"   => "003",
        "nama"  => "Varka",
        "nilai" => 50
    ],
    [
        "npm"   => "004",
        "nama"  => "Alhaitham",
        "nilai" => 90
    ],
    [
        "npm"   => "005",
        "nama"  => "Itto",
        "nilai" => 45
    ]
];

function cekKelulusan($nilai)
{
    if ($nilai <= 50) {
        return "Tidak Lulus";
    } else {
        return "Lulus";
    }
}
