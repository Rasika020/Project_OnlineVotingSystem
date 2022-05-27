<html>
    <head>
    <title>
        Delete Record 
    </title>
    <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
    <center>
            <div id="headerSection">
            <h1>eVote Portal</h1>  
            </div>
            <hr>

            <form action="../api/delete.php" method=POST>
                <h2>Enter mobile number of voter to be deleted</h2>
            <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
            <input type="password" name="pass" placeholder="Enter password" required><br><br>
            <input type="submit" name="submit" >  
            </form>
</center>

    </body>
</html>