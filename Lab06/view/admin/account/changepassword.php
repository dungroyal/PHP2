<form method="POST" action="index.php?ctrller=user&act=changepassword">
        <table style="margin: 0px auto;">
            <tr>
                <td colspan="2"><span style="font-weight:bold;font-size:20px;"><center style="margin-bottom: 20px;">ĐỔI MẬT KHẨU</center></span></td>
            </tr>
            <tr>
                <td>Mật khẩu cũ: </td>
                <td><input type="oldpassword" name="oldPass" size="20"></td>
            </tr>
            <tr>
                <td>Mật khẩu mới: </td>
                <td><input type="newpassword" name="newPass" size="20"></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                <input name="btn-changepassword" type="submit" value="ĐỔI MẬT KHẨU">
                </td>
            </tr>
        </table>
    </form>