<?php
/**
 * Created by PhpStorm.
 * User: lilit
 * Date: 7/9/17
 * Time: 9:46 PM
 */

$givenDate = $_POST['input'];
$birthDate = date_create("1997-08-14");
$date2=date_create("$givenDate");
$diff=date_diff($birthDate,$date2);
echo $diff->format("%a days");

?>

<html>
    <body>
        <form method="post">
            <input name="input" id="input" placeholder="yyyy-mm-dd">
            <input type="submit">
        </form>
    </body>
</html>