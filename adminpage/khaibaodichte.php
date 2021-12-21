<?php
?>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRANG QUẢN LÝ</title>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type ="text/css" href = "css/banner.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <meta charset=utf-8 />
  </head>
 
  <body>
    <?php
      require_once("lib/connection.php");
    ?>
<nav>
  <ul>
    <li><a href="index.php">DS KHAI BÁO Y TẾ KHỎE MẠNH</a></li>
    <li><a href="khaibaotrieuchung.php">DS KHAI BÁO Y TẾ CÓ TRIỆU CHỨNG</a></li>
    <li><a href="khaibaodichte.php">DS KHAI BÁO CÓ YẾU TỐ DỊCH TỂ</a></li>
    <li><a href="tiemchungmui1.php">DS ĐĂNG KÝ TIÊM CHỦNG MŨI 1</a></li>
    <li><a href="tiemchungmui2.php">DS ĐĂNG KÝ TIÊM CHỦNG MŨI 2</a></li>
    <li><a href="tiemchungcobenh.php">DS ĐĂNG KÝ TIÊM CHỦNG NHÓM CÓ TIỀN SỬ BỆNH</a></li>
    <li><a href="tiemchunguutien.php">DS ĐĂNG KÝ TIÊM CHỦNG NHÓM ƯU TIÊN CAO</a></li>
  </ul>
</nav>
    <h4 style="text-align: center;margin-top:20px;margin-bottom:20px;">DANH SÁCH KHAI BÁO Y TẾ NHÓM NGƯỜI CÓ XUẤT HIỆN YẾU TỐ DỊCH TỂ</h4>
        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="th-sm">STT</th>
              <th class="th-sm">Loại khai báo</th>
              <th class="th-sm">Họ và tên</th>
              <th class="th-sm">Ngày sinh</th>
              <th class="th-sm">Số điện thoại</th>
              <th class="th-sm">Giới Tính</th>
              <th class="th-sm">Địa chỉ</td>
              <th class="th-sm">Tình trạng sức khỏe</td>
            </tr>
          </thead>
          <tbody>
          <?php
            $stt = 1 ;
            $sql = "SELECT * FROM khai_bao_y_te where F0='Có' or F1_F2='Có' or Di_chuyen_xuyen_quoc_gia='Có' or Cach_ly='Có' or Nguoi_than_mac_benh='Có' or Da_dieu_tri_covid='Có'";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?php echo $stt++ ?></th>
              <td class="td-sm"><?php echo $data["Loai_khai_bao"]; ?></td>
              <td class="td-sm"><?php echo $data["Ho_ten"]; ?></td>
              <td class="td-sm"><?php echo $data["Ngay_sinh"]; ?></td>
              <td class="td-sm"><?php echo $data["So_dien_thoai"]; ?></td>
              <td class="td-sm"><?php echo $data["Gioi_tinh"]; ?></td>
              <td class="td-sm"><?php echo $data["Sonha_tenduong"]; ?>, <?php echo $data["Xa_phuong"]?>, <?php echo $data["Quan_huyen"]; ?>, <?php echo $data["Tinh_thanh"]; ?></td>
              <th style="color:red;">
                <?php
                    if($data["F0"] == "Có"){
                        echo "Dương tính F0 ";
                    } if($data["F1_F2"] == "Có"){
                        echo "Là F1 hoặc F2 ";
                    } if($data["Di_chuyen_xuyen_quoc_gia"] == "Có"){
                        echo "Di chuyển xuyên quốc gia ";
                    } if($data["Cach_ly"] == "Có"){
                        echo "Đang cách ly ";
                    } if($data["Nguoi_than_mac_benh"] == "Có"){
                        echo "Có người thân có triệu chứng bệnh ";
                    } if($data["Da_dieu_tri_covid"] == "Có"){
                        echo "Đã điều trị Covid trong vòng 14 ngày ";
                    }
                ?>
            </td>
            </tr>
          <?php
            }
          ?>
          </tbody>
            <tfoot>
            <tr>
              <th class="th-sm">STT</th>
              <th class="th-sm">Loại khai báo</th>
              <th class="th-sm">Họ và tên</th>
              <th class="th-sm">Ngày sinh</th>
              <th class="th-sm">Số điện thoại</th>
              <th class="th-sm">Giới Tính</th>
              <th class="th-sm">Địa chỉ</td>
              <th class="th-sm">Tình trạng sức khỏe</td>
            </tr>
            </tfoot>
        </table>
</body>
</html>