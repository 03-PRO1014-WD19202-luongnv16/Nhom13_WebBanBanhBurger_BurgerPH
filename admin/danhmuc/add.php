    <!-- Trang thao tac chinh MAIN -->     
    <div class="form-container">
        <div class="form-title">Thêm Danh Mục</div>
        <form action="index.php?act=adddm" method="post">
            <div class="form-group">
                <label for="ma-loai">Mã loại:</label>
                <input type="text" id="ma-loai" name="ma-loai" disabled>
            </div>
            <div class="form-group">
                <label for="ten-loai">Tên Danh Mục:</label>
                <input type="text" id="ten-loai" name="ten-loai">
            </div>
            <div class="button-group">
                <input class="btn-add" name="themmoi" type="submit" value="Thêm">
                <input class="btn-update" type="button" value="Sửa">
                <input class="btn-delete" type="button" value="Danh sách">
            </div>
            <?php 
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>

