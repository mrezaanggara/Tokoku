<?php
//untuk mengecek user login
function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('usersID');
    if ($user_session != null) {
        redirect('dashboard');
    }
}
function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('usersID');
    if (!$user_session) {
        redirect('');
    }
}

// untuk merubah format harga
function rupiah($harga)
{
    $rupiah = "Rp " . number_format($harga, 2, ',', '.');
    return $rupiah;
}

// untuk menampilkan format tanggal
function formatTanggal($date)
{
    // array hari dan bulan
    $Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    $Bulan = array(
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    );

    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl = substr($date, 8, 2);
    $waktu = substr($date, 11, 5);
    $hari = date("w", strtotime($date));
    $result = $Hari[$hari] . ", " . $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun . " - " . $waktu . " " . "WIB";
    return $result;
}

//generate auto kode barang
function getCode()
{
    $ci = get_instance();
    $query = $ci->db->query('select max(kode_barang) as urut from barang');
    $nourut = $query->row()->urut;
    if ($nourut > 0) {
        $urutan = (int) substr($nourut, 3, 3);
        $urutan++;
    } else {
        $urutan = 1;
    }

    $huruf = "BRG";
    $kodeBarang = $huruf . sprintf("%03s", $urutan);
    return $kodeBarang;
}
