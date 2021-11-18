<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            LOG-IN PAGE
        </title>
    </head>
    <body>
    <center>
        <div class="container" style="background-color: mediumaquamarine; margin-top: 50px; border-radius: 100px; padding: 50px; width:30%;">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-primary text-light" style="font-family: cursive; font-size: 48px; font-weight: bolder;">News User Login</h1>
                    <form class="form-vertical" action="foto.php" method="post">

                        <div class="form-group">
                            <label for="Email" style="font-family: cursive; font-size: 36px;">EMAIL ADDRESS</label><br>
                            <input type="email" name="s1" style="width: 250px; padding: 20px 40px; border-radius: 50px;">
                        </div> 
                        <div class="form-group">
                            <label for="password" style="font-family: cursive; font-size: 36px;">USER PASSWORD</label><br>
                            <input type="password" name="s2" style="width: 250px; padding: 20px 40px; border-radius: 50px;">
                        </div> 
                        <input type="submit" class="btn btn-primary" style="width: 250px; margin-top: 25px; background-color: blanchedalmond; padding: 20px 40px; border-radius: 50px;" name="submit" value="LOG-IN">
                    </form>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
