<!DOCTYPE html>
<html>
    <head>
        <title>Verify your BVN with us!</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
        <div class="midBox">
            <img src="images/0.png">
            <div class="container">
                <h3 style="color: #3D434A; margin-bottom: 20px;">BVN Verification</h3>
                <form method="post">
                    <label>Fullname:</label>
                    <input type="text" name="name" class="inputControl" required="" />
                    <br>
                    <label>BVN:</label>
                    <input type="text" name="bvn" class="inputControl" required="" />
                    <br>
                    <button type="submit" class="btn" name="btnVerify" value="Verify">Verify</button>
                </form>

                <?php
                    if (isset($_POST['btnVerify'])) {
                        $url = "https://ravesandboxapi.flutterwave.com/v2/kyc/bvn/".$_POST['bvn']."?seckey=FLWSECK-e6db11d1f8a6208de8cb2f94e293450e-X";
                        header("location: ".$url."");
                    }
                ?>
            </div>
        </div>
    </body>
</html>