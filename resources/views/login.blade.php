<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/login.css">
    
    <title>login page</title>
</head>

<body>

    <div id="enpopup" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container">
                <span onclick="document.getElementById('enpopup').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <h2>English Version</h2>
            </header>
            <div class="w3-container">
                <p>Some text..</p>
            
            </div>
        </div>
    </div>



    <div class="wrapper">

        <form class="form-signin" method="post" action="/login/auth">
            <center>

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <img src="/assets/logokumon.png" alt="Image" />
                <hr class="login-hr" />
                <h4 class="form-signin-heading">Advanced Student Forum</h4>
                <br />
                <h4 class="form-signin-heading">เข้าสู่ระบบสมาชิก / Log in</h4><br />
                <p class="txt-red">ท่านผู้ปกครองจะต้องยืนยันข้อมูลในแบบฟอร์มนี้ กรณีที่บุตร-หลาน ของท่านอายุไม่ถึง 20 ปีบริบูรณ์ <span class="englishversion" onclick="document.getElementById('enpopup').style.display='block'">English Version</span></p>
                
                    <label style="float: left;"><i class="fas fa-user" style="color: lightskyblue; margin-bottom:10px; margin-left:10px;"></i>&nbsp;ชื่อผู้ใช้ / Username</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Username" required="" value="{{user}}">
                    <br />
                    <label style="float: left;"><i class="fas fa-key" style="color: lightskyblue; margin-bottom:10px; margin-left:10px;"></i>&nbsp;รหัสผ่าน / Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"/> Remember me 
                    </label>
                    <a class="txt-black right" href="#">ลืมรหัสผ่าน / Forgot</a>
                    <?php if (isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    </br>
                    </br>
                    <button class="btn btn-primary login" type="submit">เข้าสู่ระบบ / Log in</button></br></br>
                    <p class="txt-black">สำหรับนักเรียนหรือท่านผู้ปกครองที่ต้องการยกเลิกการอนุญาตให้บริษัทฯ นำข้อมูลนักเรียนบนเว็บไซต์ไปใช้ในกิจกรรมประชาสัมพันธ์ ท่านสามารถแจ้งความประสงค์ได้โดยแจ้งที่ E-mail address ด้านล่างนี้ 
                        <br><span class="englishversion" onclick="document.getElementById('enpopup').style.display='block'">English Version</span></p>
                    <a class="btn btn-primary mail" href="mailto:asf@kumon.co.th"><i class="fas fa-envelope">&nbsp;asf@kumon.co.th</i></a></br>
            </center>
        </form>

    </div>
</body>


</html>