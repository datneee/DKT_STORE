<div id="page-wrapper">
    <div class="container-fluid">
        <div class="profile">
            <!--<figure>
                <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/55758/random-user-31.jpg" alt="" />
            </figure>-->
            <header>
                <h1><?php echo $account->c_username ?>
                    <small>Account of DKT store</small></h1>
            </header>

            <div class="toggle">
                <input type="checkbox" class="view_details" id="view_details">
                <label for="view_details" title="tap here to view full profile">☰</label>
            </div>
            <main>
                <dl>
                    <dt>Full name</dt>
                    <dd><?php echo $account->c_fullname ?></dd>
                    <dt>Phone</dt>
                    <dd><?php echo $account->c_phone ?></dd>
                    <dt>Email</dt>
                    <dd><?php echo $account->c_email ?></dd>
                    <dt>Role</dt>
                    <dd><?php echo $account->c_role ?></dd>
                    <dt>Loves</dt>
                    <dd>Skydiving, Tennis, Romantic dinners</dd>
                    <dt>Hates</dt>
                    <dd>Taxes, bosses instead of leaders</dd>
                    <dt>Social</dt>
                    <dd>
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    </dd>
                </dl>
            </main>
            <a class="btn-link" onclick="handleShowFormChangePassword()">Change password</a>
            <form id="passwordForm" style="display: none" method="POST" enctype="multipart/form-data">
                <input style="margin: 2px 0" class="form-control" type="password" name="yourPass" placeholder="Enter your password">
                <input style="margin: 2px 0" class="form-control" type="password" name="newPass" placeholder="Enter new password">

                <button class="btn-primary" style="margin: 4px 0" type="submit">Submit</button>
            </form>
            <?php if (isset($_GET["message"]))  { ?>
                <div class="alert-success" style="margin: 8px 0;"><?php echo $_GET["message"] ?></div>
            <?php } ?>
        </div> <!-- end profile -->

        <p style="padding: 20px;">Use this for whatever you like. Have fun with it!</p>
    </div>
</div>
<script type="text/javascript">
    function handleShowFormChangePassword() {
        document.getElementById("passwordForm").style.display = "block";
    }
</script>