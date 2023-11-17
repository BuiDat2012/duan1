<?php

// hiển thị 9 sản phẩm home
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 and trang_thai='0' order by luot_xem desc limit 0,12;";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

//load top 10 sản phẩm có lượt xem cao nhất
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by view desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

// load 1 sản phẩm cùng loại
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id = '$id'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

// load các sản phẩm cùng loại trừ sản phẩm đang xem
function loadallsp_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where id != '2' and iddm = '2' && trang_thai='0' order by luot_xem desc limit 0,4;";
    $sanpham = pdo_query($sql);
    return $sanpham;
}

// load all san pham cung danh muc
function loadallsp_cungdanhmuc($iddm)
{
    $sql = "select * from sanpham where iddm = '$iddm' && trang_thai='0';";
    $sanpham = pdo_query($sql);
    return $sanpham;
}

function san_pham()
{
    $sql = "SELECT * FROM `sanpham` WHERE trang_thai='0'";
    $sanpham = pdo_query($sql);
    return $sanpham;
}
// load tất cả các sản phẩm
function loadall_sanpham($keyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where trang_thai='0' ";
    if ($keyw != "") {
        $sql .= "and name like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= "and iddm = '" . $iddm . "'";
    }
    $sql .= "order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

// sửa sản phẩm đã sửa
function update_sanpham($tensanpham, $giasanpham, $anhdaidien, $mota, $soluongsanpham, $anh1, $anh2, $anh3, $iddm, $id)
{
    $sql = "UPDATE sanpham set 
        ten_san_pham = '$tensanpham', gia_san_pham = '$giasanpham'";
    if ($anhdaidien != '') {
        $sql .= ", img_dai_dien = '$anhdaidien'";
    }
    if ($anh1 != '') {
        $sql .= ", img_san_pham1 = '$anh1'";
    }
    if ($anh2 != '') {
        $sql .= ", img_san_pham2 = '$anh2'";
    }
    if ($anh3 != '') {
        $sql .= ", img_san_pham3 = '$anh3'";
    }
    $sql .= ", mo_ta_san_pham = '$mota', so_luong = '$soluongsanpham', iddm = '$iddm' WHERE id = '$id';";
    pdo_execute($sql);
}

// thêm sản phẩm đã sửa
function add_sanpham($tensanpham, $giasanpham, $anhdaidien, $mota, $soluongsanpham, $anh1, $anh2, $anh3, $iddm)
{
    $sql = "INSERT INTO sanpham(ten_san_pham, gia_san_pham, img_dai_dien, mo_ta_san_pham, so_luong, img_san_pham1, img_san_pham2, img_san_pham3, iddm) 
        VALUES('$tensanpham', '$giasanpham', '$anhdaidien', '$mota', '$soluongsanpham', '$anh1', '$anh2', '$anh3', '$iddm');";
    pdo_execute($sql);
}


// xóa cứng
function hard_delete_sanpham($id)
{
    $sql = "delete from sanpham where id = '$id'";
    pdo_execute($sql);
}

// xóa mềm đã sửa
function soft_delete_sanpham($id)
{
    $sql = "update sanpham set trang_thai='1' where id = '$id'";
    pdo_execute($sql);
}
// khôi phục sản phẩm xóa mềm đã sửa
function restore_sanpham($id)
{
    $sql = "update sanpham set trang_thai='0' where id = '$id'";
    pdo_execute($sql);
}
// loadall các sản phẩm xóa mềm
function loadall_sanpham_soft($keyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where trang_thai!='0' ";
    if ($keyw != "") {
        $sql .= "and name like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= "and iddm = '" . $iddm . "'";
    }
    $sql .= "order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// luot xem ++
function update_view($idsp)
{
    $sql = "update sanpham set luot_xem = luot_xem+1 where id='$idsp'";
    pdo_execute($sql);
}

// check trùng sản phẩm
function checktrungsp($id)
{
    $vitri = -1;
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($_SESSION['giohang'][$i][0] == $id) {
            $vitri = $i;
        }
    }
    return $vitri;
}

// update số lượng sản phẩm giỏ hàng
function updateslsp($vitrisptrung, $soluong)
{
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($i == $vitrisptrung) {
            $_SESSION['giohang'][$i][4] += $soluong;
            break;
        }
    }
}
