<div style="width:100%" class="box box-primary">
    <div class="box-body">
        <!--form tìm kiếm-->
        <form>
            <div class="input-group">
                <input type="text" name="searchValue" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i> Tìm kiếm
                    </button>
                    <a href="./bosungloai.php" class="btn btn-primary" style="margin-left:5px">
                        <i class="fa fa-plus"></i> Bổ sung
                    </a>
                </div>
            </div>
        </form>
        <!-- kết quả tìm kiếm-->

        <div class="modal-dialog">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th style="width: 100px;" class="text-center">stt</th>
                        <th class="text-center">Tên loại</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        for($i=1;$i<5;$i++) {
                    ?>
                         <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">ao</td>
                            <td class="text-center" style="width: 100px;">
                                <a href="./sualoai.php?id=<?=$value['idloai']?>" class="btn btn-xs btn-primary">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="./xoaloai.php?id=<?=$value['idloai']?>" class="btn btn-xs btn-danger">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                      }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
