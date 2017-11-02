<!DOCTYPE html>
<?php
    error_reporting(E_ALL & ~E_NOTICE);
    $sum = "";
    if(isset($_POST['sub'])){
        $bz = true;
        $error = "有以下问题不能运行：<br>";
        if($_POST['num1'] == ""){
            $bz = false;
            $error.="第一个数不能为空,<br>";
        }else{
            if(!is_numeric($_POST['num1'])) {
                $bz = false;
                $error.="第一个数不是数字,<br>";
            }
        }
        if($_POST['num2'] == ""){
            $bz = false;
            $error.="第二个数不能为空,<br>";
        }else{
            if(!is_numeric($_POST['num2'])){
                $bz = false;
                $error.="第二个数不是数字,<br>";
            }
        }

        if($bz) {
            switch ($_POST['ysf']) {
                case '+':
                    $sum = $_POST['num1'] + $_POST['num2'];
                    break;
                case '-':
                    $sum = $_POST['num1'] - $_POST['num2'];
                    break;
                case '*':
                    $sum = $_POST['num1'] * $_POST['num2'];
                    break;
                case '/':
                    $sum = $_POST['num1'] / $_POST['num2'];
                    break;
            }
        }
    }
?>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>简单计算器实例</title>
        <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
    <table border="0" width="408" align="center">
        <form action = "index.php" method = "post">
            <caption style="text-align: center"><h1>简单计算器</h1></caption>
            <tr>
                <td>
                    <input type = "text" name="num1" value="<?php echo $_POST['num1']; ?>" /><br>
                </td>
                <td>
                    <select name="ysf">
                        <option <?php echo $_POST['ysf']=='+'?"selected":"" ?> value="+">+</option>
                        <option <?php echo $_POST['ysf']=='-'?"selected":"" ?> value="-">-</option>
                        <option <?php echo $_POST['ysf']=='*'?"selected":"" ?> value="*">*</option>
                        <option <?php echo $_POST['ysf']=='/'?"selected":"" ?> value="/">/</option>
                    </select>
                 </td>
                 <td>
                    <input type="text" name="num2" value="<?php echo $_POST['num2']; ?>"/><br>
                </td>
                <td>
                    <input type="submit" name="sub" value="计算">
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <?php
                    if($bz) {
                        echo "计算结果：{$_POST['num1']}{$_POST['ysf']}{$_POST['num2']}= " . $sum;
                    }else{
                        echo $error;
                    }
                    ?>
                </td>
            </tr>
        </form>
    </table>
    </body>
</html>