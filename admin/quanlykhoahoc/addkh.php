<div class="row2">
    <div class="row2 font_title">
        <h1>Thêm khóa học/h1>
    </div>
    <div class="row2 form_content ">
        <form action="../index.php?act=addkh" method="POST">

            <div class="row2 mb10 form_content_container">
                <label> ID khóa học </label> <br>
                <input disabled type="text" name="id">
            </div>
            <div class="row2 mb10">
                <label>Tên khóa học </label> <br>
                <input type="text" name="tenkh" placeholder="nhập vào tên">
            </div>
            <div class="row2 mb10">
                <label>Hạn đăng kí </label> <br>
                <input type="date"  name="handangki" >
            </div>
            <div class="row2 mb10 form_content_container">
                <label> ID giảng viên </label> <br>
                <input disabled type="text" name="id">
            </div>


            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
                <input  class="mr20" type="reset" value="NHẬP LẠI">

                <a href="../index.php?act=dskhoahoc"><input  class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>