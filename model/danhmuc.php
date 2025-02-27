<?php
// load danh muc
function loadall_danhmuc(){
    $sql = "select * from danhmuc where trang_thai = '0' order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
// //load ten danh muc
// function load_name_danhmuc($iddm){
//     $sql = "select * from danhmuc where id=".$iddm;
//     $danhmuc = pdo_query_one($sql);
//     extract($danhmuc);
//     return $name;
// }

// load danh muc xoa mem
function loadall_danhmuc_xoamem(){
    $sql = "select * from danhmuc where trang_thai = '1' order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

// them danh muc 
function insert_danhmuc($tenloai){
    $sql = "insert into danhmuc(ten_danh_muc) values ('$tenloai')";
    pdo_execute($sql);
}

// load one danh muc de sua
function loadone_danhmuc($id){
    $sql = "select * from danhmuc where id = '$id'";
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}

// xoa danh muc
function delete_danhmuc($id){
    $sql = "delete from danhmuc where id = '$id'";
    pdo_execute($sql);
}

// xoa mem
function delete_mem($id){
    $sql = "update danhmuc set trang_thai = '1' where id = '$id'";
    pdo_execute($sql);
}

// khoi phuc danh muc
function restore_danhmuc($id){
    $sql = "update danhmuc set trang_thai = '0' where id = '$id'";
    pdo_execute($sql);
}

// sua danh muc
function fix_danhmuc($id, $name){
    $sql = "update danhmuc set ten_danh_muc = '$name' where id = '$id'";
    pdo_execute($sql);
}

?>