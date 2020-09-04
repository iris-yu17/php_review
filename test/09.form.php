<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-info" role="alert">
                    <pre>
                    <?php
                    print_r($_GET);
                    // print_r($_POST);
                    ?>
                    </pre>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!--若用post改成 <form method="post"> -->
                <form>
                    <div class="form-group">
                        <!-- label的for是對應input的id -->
                        <!-- 沒有name就不會送出 -->
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../lib/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>