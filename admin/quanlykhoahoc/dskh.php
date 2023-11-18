<!-- Hiển thị nội dung-->
<div class="row">

    <!-- Hiển thị chi tiết nội dung -->
    <div class="col-xl-12 col-lg-11">
        <div class="card shadow mb-4">
            <!-- tiêu đề -->
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Quản lý khóa học</h6>

                <div class="row mb-3">
                    <div class="col-auto">
                        <a href="../index.php?act=addkhoahoc">
                            <button type="button" class="btn btn-primary">NHẬP THÊM</button>
                        </a>
                    </div>
                </div>

            </div>
            <!-- nội dung -->
            <div class="card-body">
                <div class="chart-area">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên môn</th>
                            <th scope="col">Hạn đăng kí</th>
                            <th scope="col">ID Giảng viên</th>
                        </tr>
                        </thead>
                        <?php
                        foreach ($dskhoahoc as $khoahoc) {
                            extract($khoahoc);
                            echo "<tbody>
                        <tr>
                            <td > $id</td >
                            <td > $tenmon </td >
                            <td > $handangky</td >
                            <td > $idGv </td >
                            
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