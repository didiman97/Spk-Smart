<?php
@$menu = $_GET['menu'];
@$aksi = $_GET['aksi'];

if ($menu == "dtalternatif") {
    if($aksi == ""){
        include "menu/dtalternatif/alt.php";
    }
    if($aksi == "add"){
        include "menu/dtalternatif/add.php";
    }
    if($aksi == "change"){
        include "menu/dtalternatif/change.php";
    }
    if($aksi == "updateprocess"){
        include "menu/dtalternatif/updateprocess.php";
    }
    if($aksi == "del"){
        include "menu/dtalternatif/del.php";
    }
}
elseif ($menu == "dtkriteria") {
    if($aksi == ""){
        include "menu/dtkriteria/kriteria.php";
    }
    if($aksi == "add"){
        include "menu/dtkriteria/add.php";
    }
    if($aksi == "change"){
        include "menu/dtkriteria/change.php";
    }
    if($aksi == "updateprocess"){
        include "menu/dtkriteria/updateprocess.php";
    }
    if($aksi == "del"){
        include "menu/dtkriteria/del.php";
    }
}
elseif ($menu == "hasil") {
    if($aksi == ""){
        include "menu/hasil/hasil.php";
    }
    if($aksi == "print"){
        include "menu/hasil/print.php";
    }
}
elseif ($menu == "user") {
    if($aksi == "logout"){
        include "menu/user/logout.php";
    }
}
elseif ($menu == "") {
    include "home.php";
}

?>