<html>
    <body>
        <form action="practice.php" method="POST">

        Number1:<input type="text" name="num1"><br>
        Number2:<input type="text" name="num2"><br>
        <input type="submit" name="submit" value="Add"><br>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $Number1=$_POST["num1"];
            $Number2=$_POST["num2"];
            $Sum=$Number1+$Number2;
        
 echo "the sum of $Number1 and $Number2 is:".$sum;
    }
?>
        </body>
        </html>