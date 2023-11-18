<!-- Hiển thị nội dung-->
<div class="row">

    <!-- Hiển thị chi tiết nội dung -->
    <div class="col-xl-12 col-lg-11">
        <div class="card shadow mb-4">
            <!-- tiêu đề -->
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Quản lý tài khoản</h6>

            </div>
            <!-- nội dung -->
            <div class="card-body">
                <div class="chart-area">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Mã Người dùng</th>
                            <th scope="col">Quyền</th>
                        </tr>
                        </thead>
                        <?php
                        foreach ($dstaikhoan as $taikhoan) {
                            extract($taikhoan);
                            echo "<tbody>
                        <tr>
                            <td > $id</td >
                            <td > $email </td >
                            <td > $password</td >
                            <td > $Ten </td >
                            <td ></td >
                            <td > $Sdt</td >
                            <td > $maNgdung</td >
                            <td > $quyen</td >
                            <td><button class='btn btn-primary me-md-2'>Sửa</button></td>
                            <td><button class='btn btn-danger me-md-2'>Xóa</button></td>
                        </tr>
                        </tbody>";
                        }
                        ?>
                    </table>

                </div>
            </div>

        </div>
    </div>


</div>
<!-- end Hiển thị nội dung-->