<!--html content-->
<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>User form</title>
    <link rel="stylesheet" href="../bs4/bootstrap.min.css">
    <style>#formbox{margin-left:auto;margin-right:auto;width:calc(300px);padding:4%;}</style>
</head>

<body>

    <div class="container">
        <div class="row"><div class="col-lg-5 mx-auto" style="margin-top:4%">

            <div class="jumbotron">

                <!--php-->
                <?php
                if(isset($_GET['upload'])){
                    $upload = $_GET['upload'];
                    if($upload=="1"){
                        echo "<div class='alert alert-success'><strong>Success!</strong> Succesfully uploading the image.</div>";
                    }else if($upload=="2"){
                        echo "<div class='alert alert-danger'><strong>Failed !</strong> Failed uploading the image.</div>";
                    }else if($upload=="3"){
                        echo "<div class='alert alert-danger'><strong>Failed !</strong> All fields are mandatory.</div>";
                    }

                }
                ?>

                <form action="<?php echo htmlspecialchars('upload.php');?>" method="post" enctype="multipart/form-data">
                <div id="formbox" class="card bg-success" >

                    <div class="form-horizontal">
                    <div class="form-group">
                        <label class="text-light" for="caption">Heading:</label>
                        <input type="text" name="caption" class="form-control form-control-sm" placeholder="Enter caption">
                        <label class="text-light" for="image">Image file:</label>
                        <input type="file" name="image" id="image" accept="image/*">
                    </div>

                    <input type="submit" class="form-control btn-primary" id="submit" class="form-control" value="Upload">
                    </div>
                    
                </div>
                
                </form>
            </div>
        


        </div></div>
    </div>



<script src="../bs4/jquery-3.3.1.slim.min.js"></script>
<script src="../bs4/popper.min.js"></script>
<script src="../bs4/bootstrap.min.js"></script>

</body>
</html>
