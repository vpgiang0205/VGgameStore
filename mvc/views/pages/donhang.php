<?php
?>
<style>
    body {
        background-image: url('http://localhost/live1/mvc/public/image/ps5-console-design.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    input[type=text] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
    }

    input[type=number] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
    }

    select {
        width: 90%;
        padding: 10px 20px;

        border-radius: 4px;
        ;


    }

    label {
        color: black;
    }

    input[type=submit] {
        width: 50%;
        background-color: #1E90FF;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        color: white;
    }

    .flat-table {
        margin-bottom: 20px;
        border-collapse: collapse;
        font-family: 'Lato', Calibri, Arial, sans-serif;
        border: none;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
    }

    .flat-table th,
    .flat-table td {
        box-shadow: inset 0 -1px rgba(0, 0, 0, 0.25),
            inset 0 1px rgba(0, 0, 0, 0.25);
    }

    .flat-table th {
        font-weight: normal;
        -webkit-font-smoothing: antialiased;
        padding: 1em;
        color: rgba(0, 0, 0, 0.45);
        text-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
        font-size: 1.5em;
    }

    .flat-table td {
        color: black;
        padding: 0.7em 1em 0.7em 1.15em;
        text-shadow: 0 0 1px rgba(255, 255, 255, 0.1);
        font-size: 1.4em;
    }

    .flat-table tr {
        -webkit-transition: background 0.3s, box-shadow 0.3s;
        -moz-transition: background 0.3s, box-shadow 0.3s;
        transition: background 0.3s, box-shadow 0.3s;
    }

    .flat-table-1 {
        background: white;
    }

    .flat-table-1 tr:hover {
        background: rgba(0, 0, 0, 0.19);
    }

    .flat-table-2 tr:hover {
        background: rgba(0, 0, 0, 0.1);
    }

    .flat-table-2 {
        background: #f06060;
    }

    .flat-table-3 {
        background: #52be7f;
    }

    .flat-table-3 tr:hover {
        background: rgba(0, 0, 0, 0.1);
    }

    #hop-thoai-sua {
        visibility: hidden;
        opacity: 0;
    }

    .hien-ra {
        visibility: visible;
        opacity: 1;
    }
</style>

<body>
    <div id="donhang" style="float: right;text-align: center; width: 1300px; height: 600px">
            <div id="chitiet">
                <?php
                if (isset($_POST['chitiet'])) :
                ?>
                <br>
                <h2>Chi tiết đơn hàng</h2>
                <form method="post">
                    <table class="flat-table flat-table-1">

                        <tr>
                            <td>Mã Đơn hàng</td>
                            <td>Tên Khách Hàng</td>
                            <td>Địa Chỉ</td>
                            <td>Ngày Đặt</td>
                            <td>Ngày Giao</td>
                            <td>Hiện Trạng</td>
                            <td>Thao Tác</td>
                            <td></td>
                       
                        </tr>
                        <tr>
                            <?php while ($rowDH = mysqli_fetch_assoc($data['getdh'])) : ?>
                                <td><input type="text" name="madh" value="<?php echo $rowDH['ma_dh']  ?>" readonly /></td>
                                <td><input type="text" name="tenkh" value="<?php echo $rowDH['ten_kh'] ?>" readonly></td>
                                <td><input type="text" name="noigiao" value="<?php echo $rowDH['noi_giao'] ?>"></td>

                                <td><input type="date" name="ngaydh" value="<?php echo $rowDH['ngay_dh'] ?>"></td>

                                <td><input type="date" name="ngaygh" value="<?php echo $rowDH['ngay_gh'] ?>"></td>
                                <td>
                                    <select name="hientrang">
                                        <option value="<?php echo $rowDH['hien_trang'] ?>">--<?php echo $rowDH['hien_trang'] ?>--</option>
                                        <option value="Đã giao">Đã giao</option>
                                        <option value="Chưa giao">Chưa Giao</option>
                                    </select>
                                </td>
                                <td><button type="submit" class = "button2" name="suadh" value="<?php echo $rowDH['ma_dh'] ?>">Sửa</button>
                        </tr>
                    </table>
                <?php endwhile; ?>
                </form> <?php endif; ?>
            </div>

            <div id="TB_DH" style=" width: auto; height: auto;">
            <br>
                <h2>Danh Sách Đơn Hàng</h2>
                <form method="POST">
                    <input type="search" name="tukhoa" style="width: 190px;  height: 40px " placeholder="Tìm đơn hàng">
                    <input type="submit" class="button1" name="Tim" value="Tìm Kiếm" style="width: 15%; margin-left: 10px ">
                </form>
                <form method="POST">
                    <table class="flat-table flat-table-1" style="margin-left:250px">
                        <thead>
                            <th>Mã Đơn Hàng</th>
                            <th>Tên Khách Hàng</th>
                            <th>Địa Chỉ</th>
                            <th>Hiện Trạng</th>
                            <th>Quản Lí</th>
                        </thead>
                        <tbody>
                            <?php
                            while ($show = mysqli_fetch_assoc($data['showdh'])) :

                            ?>
                                <tr>
                                    <td><?php echo $show['ma_dh'] ?></td>
                                    <td><?php echo $show['ten_kh'] ?></td>
                                    <td><?php echo $show['noi_giao'] ?></td>
                                    <td><?php echo $show['hien_trang'] ?></td>
                                    <td><button type="submit" class="button2" name="chitiet" value="<?php echo $show['ma_dh'] ?>">Chi tiết</button></td>
                                </tr>
                            <?php
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
    </div>
</body>