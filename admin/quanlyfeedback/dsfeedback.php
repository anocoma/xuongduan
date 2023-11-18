<!-- Hiển thị nội dung-->
<div class="row">

    <!-- Hiển thị chi tiết nội dung -->
    <div class="col-xl-12 col-lg-11">
        <div class="card shadow mb-4">
            <!-- tiêu đề -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Quản lý câu hỏi</h6>
            </div>
            <!-- nội dung -->
            <div class="card-body">
                <div class="chart-area">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">ID sinh viên</th>
                            <th scope="col">ID giảng viên</th>
                            <th scope="col">Nội dung</th>
                        </tr>
                        </thead>
                        <?php
                        foreach ($dsfeedback as $feedback) {
                            extract($feedback);
                            echo "<tbody>
                        <tr>
                            <td > $id</td >
                            <td > $id_nguoi_gui </td >
                            <td > $id_nguoi_nhan</td >
                            <td > $noi_dung </td >
                            
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