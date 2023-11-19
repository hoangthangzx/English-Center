<?php 
function kh_theo_dm(){
    if(isset($_GET['id_danh_muc'])){
        $id_danh_muc = $_GET['id_danh_muc'];
        $sql = "SELECT * FROM khoa_hoc WHERE id_danh_muc = '$id_danh_muc'";
        $result = pdo_query($sql);
        return $result;
    }
}
function top_15_khoa_hoc(){
    $sql = "SELECT * FROM khoa_hoc order by id_khoa_hoc DESC LIMIT 15";
    $result = pdo_query($sql);
    return $result;
}
function khoahoc() {
    $sql = "SELECT *,khoa_hoc.id_khoa_hoc,khoa_hoc.mo_ta, khoa_hoc.trang_thai,giang_vien.ma_giang_vien,khoa_hoc.avt, avg(binh_luan.danh_gia) as avg_rate
    FROM khoa_hoc
    JOIN danh_muc_khoa_hoc ON khoa_hoc.id_danh_muc = danh_muc_khoa_hoc.id_danh_muc
    LEFT JOIN binh_luan ON binh_luan.id_khoa_hoc = khoa_hoc.id_khoa_hoc
    JOIN giang_vien ON giang_vien.id_giang_vien = khoa_hoc.id_giang_vien GROUP BY khoa_hoc.id_khoa_hoc";
    $result = pdo_query($sql);
    return $result;
}
function khoahocnhieuluotxem () {
    $sql ="SELECT * FROM khoa_hoc ORDER BY so_luot_xem DESC";
    $result = pdo_query($sql);
    return $result;
}
function updateview() {
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $sql = "UPDATE khoa_hoc SET so_luot_xem = so_luot_xem + 1 WHERE id_khoa_hoc = '$id_khoa_hoc'";
    pdo_execute($sql);
}
function chitietkhoahoc(){
    $id_khoa_hoc = $_GET['id_khoa_hoc'];
    $sql = "SELECT khoa_hoc.*, khoa_hoc.avt as avt_kh, giang_vien.avt as avt_gv, giang_vien.mo_ta as mota_gv, khoa_hoc.trang_thai, danh_muc_khoa_hoc.ten_danh_muc
            FROM khoa_hoc
            JOIN danh_muc_khoa_hoc ON danh_muc_khoa_hoc.id_danh_muc = khoa_hoc.id_danh_muc 
            JOIN giang_vien ON khoa_hoc.id_giang_vien = giang_vien.id_giang_vien
            WHERE khoa_hoc.id_khoa_hoc = '$id_khoa_hoc'";
    $result = pdo_query($sql);
    return $result;
}
