<?php
    require "../../global.php";
    require "../../dao/hanghoa.php";

    extract($_REQUEST);
    if(exsist_param("add")){
        $lisDanhMuc = danhMuc_selectAll();
        $view_name="add.php";
    }
    else if(exsist_param("btn-insert")){
        $ten_hh = $_POST['ten_hh'];
        $don_gia =  $_POST['don_gia'];
        $giam_gia =  $_POST['giam_gia'];
        // $hinh =  $_POST['hinh'];
        $hinh = "img";
        $ngay_nhap =  $_POST['ngay_nhap'];
        $mo_ta =  $_POST['mo_ta'];
        $dac_biet =  $_POST['dac_biet'];
        $ma_loai =  $_POST['ma_loai'];
        hanghoa_add($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai);

        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    else if(exsist_param("btn_edit")){
        $lisDanhMuc = danhMuc_selectAll();
        $idHangHoa = $_GET['ma_hh'];
        $thisHangHoa = hanghoa_select_by_id($idHangHoa);

        $view_name="edit.php";
    }
    else if(exsist_param("btn-update")){
        $ma_hh = $_POST['ma_hh'];
        $ten_hh = $_POST['ten_hh'];
        $don_gia =  $_POST['don_gia'];
        $giam_gia =  $_POST['giam_gia'];
        // $hinh =  $_POST['hinh'];
        $hinh = "img";
        $ngay_nhap =  $_POST['ngay_nhap'];
        $mo_ta =  $_POST['mo_ta'];
        $dac_biet =  $_POST['dac_biet'];
        $ma_loai =  $_POST['ma_loai'];
        hanghoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai);

        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    else if(exsist_param("btn-delete")){
        $id_hh=$_GET['ma_hh'];
        hanghoa_delete($id_hh);

        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    else{
        $items = hanghoa_selectAll();
        $view_name="list.php";
    }
    require "../layout.php";
?>