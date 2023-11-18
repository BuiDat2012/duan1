<?php 
extract($logo);
$linkimg = '../../view/img/'.$img;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa logo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Sửa logo</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Sửa logo</h3>
            </div>
            <form action="index.php?act=updatelogo" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <input name="id" type="hidden" class="form-control" id="id" placeholder="id" value="<?= $id ?>">
                    </div>
                    <div class="form-group">
                        <label for="img">Ảnh logo</label><br>
                        <img src="<?= $linkimg ?>" alt="" width="100px">
                        <input type="file" name="img" id="img">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="sualg" id="" value="Sửa logo">
                </div>
                <?php
                if (isset($thongbao) && ($thongbao) != "") {
                    echo $thongbao;
                }
                ?>
            </form>

    </section>
    <!-- /.content -->
</div>