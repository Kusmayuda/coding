<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url();?>/assets/bootstrap/post/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/summernote/summernote-bs4.css">
    <title>Post</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Add New Post</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <label>Contents</label>
                    <textarea name="contents" id="summernote"></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
                <a class="btn btn-success" href="<?= base_url('post/daftarPost'); ?>">Daftar Post</a>
            </form>
        </div>
    </div>
</div>


<script src="<?= base_url();?>/assets/bootstrap/post/jquery/jquery3.js"></script>
    <script src="<?= base_url();?>/assets/bootstrap/post/popper/popper.js"></script>
    <script src="<?= base_url();?>/assets/bootstrap/post/js/bootstrap.js"></script>
    <script src="<?= base_url();?>/assets/summernote/summernote-bs4.js"></script>
    <script>
        $(document).ready(function(){
            $('#summernote').summernote({
                height: "300px",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete : function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });

            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image);
                $.ajax({
                    url: "<?php base_url(); ?>/admin/post/upload_image",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(url) {
                        $('#summernote').summernote("insertImage", url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }

            function deleteImage(src) {
                $.ajax({
                    data: {src : src},
                    type: "POST",
                    url: "<?php base_url(); ?>/admin/post/delete_image",
                    cache: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            }

        });

    </script>
</body>
</html>
    