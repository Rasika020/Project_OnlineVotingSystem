<html>
    <head>
        <title>Online voting system - Update User Information</title>
        <link rel="stylesheet" href="../routes/stylesheet.css">
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>eVote Portal</h1>  
            </div>
            <hr>

            <h2>Update your details</h2>
                <form action="../api/updateInfo.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="cmob" placeholder="Current Mobile No" required>&nbsp
                    <input type="text" name="name" placeholder="New Name" required>&nbsp
                    <input type="number" name="mob" placeholder="New Mobile Number" required><br><br>
                    <input type="password" name="pass" placeholder="New Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="email" name="email" placeholder="New Email ID" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                   <br>
                    <button id="loginbtn" type="submit" name="registerbtn">Submit</button><br><br>
                </form>
            </center>
    </body>
</html>