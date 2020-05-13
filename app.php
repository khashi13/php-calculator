<?php
$first_number=$_REQUEST['number1'];
$second_number=$_REQUEST['number2'];
$Result=null;
$operation=$_REQUEST['op'];


switch ( $operation) {
    case '+' :
      $Result=$first_number+$second_number;
        break;
    case '-' :
       $Result=$first_number-$second_number;
        break;
    case '*' :
       $Result=$first_number*$second_number;
        break;
    case  '/' :
       $Result=$first_number/$second_number;
        break;
    default :
      $Result="Undefined operation!";


}

?>
<form action="" method="post">
    <table cellspacing = "1" cellpadding = "1" border = "1">
        <tr>
            <th style="align: center " >calculator</th>
        </tr>
        <tr>
            <td><label>Numner1:</label></td>
            <td><input name="number1" type="number1" value="<?= @$_POST['number1'] ?>" ></td>
<!--           // <td><div class="error" id="num1Err" ></div></td>-->

        <tr>
            <td><label>Number2:</label></td>
            <td><input type="number" name="number2" value="<?= @$_POST['number2'] ?>"></td>
<!--            //<td><div class="error" id="num2Err" ></div></td>-->

        </tr>
        <tr>
            <td><input name="op" value="+" type="submit">
            <input name="op" value="-" type="submit">
            <input name="op" value="*" type="submit">
            <input name="op" value="/" type="submit">
            </td>

        </tr>
        <tr>
            <td><label>Result:</label></td>
            <td><input name="Result" type="text" value="<?=  $Result ?>"></td>
        </tr>
    </table>

</form>
