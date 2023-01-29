<style>
    body {
        background-image: url('http://localhost/live1/mvc/public/image/xbox-one-scaled.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>

<?php
if ($_SESSION['Ten'] != 'admin') { ?>
    <div style="height: 544px;">
        <br>
        <p style="font-size: 30px; text-align: center; color: white; font-weight: bold">Bạn không có quyền quản lí <br>
            bấm vào
            <a href="http://localhost/live1/home">đây</a> để trở về trang chủ
        </p>
    <?php
} else { ?>
    </div>

    <body>
        <div id="admin" style="float: right;text-align: center; width: 1300px; height: 600px">
            <br>
            <div id="chitietadm">
                <?php if (isset($_POST['xem'])) : ?>
                    <h2 style="color: black;">Chi Tiết Admin</h2>
                    <br>
                    <form method="POST">
                        <table class="flat-table flat-table-1">
                            <thead>
                                <th>Họ Tên</th>
                                <th>Quyền</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Mật Khẩu</th>
                                <th>Giới Tính</th>
                                <th>Email</th>
                                <th></th>
                            </thead>

                            <?php
                            while ($showid = mysqli_fetch_assoc($data['Getadid'])) : ?>
                                <tr>
                                    <td><input style="width: 100px;" type="text" name="ho" value="<?php echo $showid['ho'] ?>"> <input style="width: 100px;" type="text" name="ten" value="<?php echo $showid['ten'] ?>"> </td>
                                    <td>
                                        <select style="width: 150px;" name="quyen">
                                            <option value="<?php echo $showid['level'] ?>">--<?php echo $showid['level'] ?>--</option>
                                            <option value="admin">admin</option>
                                            <option value="user">user</option>
                                        </select>
                                    </td>
                                    <td><input style="width: 150px;" type="text" name="tendn" value="<?php echo $showid['ten_dn'] ?>"></td>
                                    <td><input style="width: 150px;" type="text" name="matkhau" value="<?php echo $showid['mat_khau'] ?>"></td>
                                    <td>
                                        <select style="width: 110px;" name="gioi">
                                            <option value="<?php echo $showid['gioi_tinh'] ?>">--<?php echo $showid['gioi_tinh'] ?>--</option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Không biết">Không biết</option>
                                        </select>
                                    <td><input style="width: 200px;" type="text" name="email" value="<?php echo $showid['email'] ?>"></td>
                                    </td>
                                    <td><button type="submit" class="button2" name="suaad" class="button2" value="<?php echo $showid['ma_adm'] ?>">Sửa</button>
                                        <button type="submit" class="button" name="xoaad" value="<?php echo $showid['ma_adm'] ?>">Xóa</button>
                                    </td>
                                </tr>
                            <?php
                            endwhile;
                            ?>

                        </table>
                    </form>
                <?php endif; ?>
            </div>
            <br>
            <div id="themadm">
                <?php if (isset($_POST['them'])) : ?>
                    <div id="formthem" style="color: black; padding-top: 10px">
                        <h2>Thêm Admin</h2>
                        <br>
                        <form method="post">
                            <table style="width: 100%" class="flat-table flat-table-1">

                                <tr>
                                    <th>Họ </th>
                                    <th>Tên</th>
                                    <th>Quyền</th>
                                    <th>Tên Đăng Nhập</th>
                                    <th>Mật Khẩu</th>
                                    <th>Giới Tính</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                                <tr>

                                    <td><input style="width: 100px;" type="text" name="ho" required></td>
                                    <td>
                                        <input style="width: 100px;" type="text" name="ten" required>
                                    </td>
                                    <td>
                                        <select style="width: 100px;" name="quyen" style="width:130%">
                                            <option value="admin">admin</option>
                                            <option value="user">user</option>
                                        </select>
                                    </td>
                                    <td><input style="width: 150px;" type="text" name="tendn" required></td>
                                    <td><input style="width: 150px;" type="text" name="matkhau" required></td>
                                    <td>
                                        <select style="width: 100px;" name="gioi">
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Không biết">Không biết</option>
                                        </select>
                                    </td>
                                    <td><input style="width: 200px;" type="text" name="email" required></td>
                                    <td><button type="submit" name="themad" class="button1">Thêm</button>
                                        <button type="reset" class="button" value="Reset">Clear</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
            <div id="TB_admin" style=" width: auto; height: auto">
                <h2 style="color: black;">Danh Sách Admin</h2>
                <form method="POST">
                    <input type="submit" name="them" value="Thêm Admin" style="width: 15%; margin-left: 10px "></input>
                    <input type="search" name="tukhoa" style="width: 190px;  height: 40px " placeholder="Tìm theo tên đăng nhập">
                    <input type="submit" name="Tim" value="Tìm Kiếm" style="width: 15%; margin-left: 10px ">
                </form>
                <form method="POST">
                    <br>
                    <table class="flat-table flat-table-1" style="margin-left: 450px">
                        <thead>
                            <th>Họ Tên</th>
                            <th>Quyền</th>
                            <th>Tên Đăng Nhập</th>
                            <th></th>
                        </thead>

                        <?php
                        while ($show = mysqli_fetch_assoc($data['dataad'])) : ?>
                            <tr>
                                <td><?php echo $show['ho'] ?> <?php echo $show['ten'] ?></td>
                                <td><?php echo $show['level'] ?></td>
                                <td><?php echo $show['ten_dn'] ?></td>
                                <td><button type="submit" class="button1" name="xem" value="<?php echo $show['ma_adm'] ?>">Chi tiết</button></td>
                            </tr>
                        <?php
                        endwhile;
                        ?>

                    </table>
                </form>
            </div>



        <?php  } ?>
        </div>
    </body>