<?php
@session_start(); //start session
include("includes/header_card.php");
include("includes/header_bot.php");
include("includes/banner_top.php");
include("includes/banner.php");
?>
<div style="margin:auto; width:90%">
<table width="90%">
<tr valign="top">
<td width="40%">
<form method="post" name="frmDn">
<fieldset>
<legend>Đăng nhập</legend>
<table width="100%" border="0" cellspacing="2" cellpadding="2" >
  <tr>
    <td width="50%">Email</td>
    <td><input type="email" required="required" placeholder="Nhập Email của bạn"  style="width:300px" name="dn_email" /></td>
  </tr>
  <tr>
    <td>Mật khẩu</td>
    <td>
    <input type="password" required="required" placeholder="Nhập mật khẩu của bạn" name="dn_mat_khau" />
    <button type="submit" name="btnDangnhap">Đăng nhập</button>
    </td>
  </tr>
</table>

</fieldset>
</form>
</td>
<td>
<?php
if(!isset($_SESSION["ma_khach_hang"]))
{
?>
<form method="post" name="frmDk">
<fieldset>
<legend>Đăng ký</legend>
<table width="100%" border="0" cellspacing="2" cellpadding="2" >
  <tr>
    <td width="30%">Họ tên</td>
    <td>
    	<input type="text" required="required" placeholder="Nhập họ tên của bạn"  style="width:300px" name="dk_ten_khach_hang" />			    </td>
 </tr>
  <tr>
    <td>Email</td>
    <td>
    <input type="email" required="required" placeholder="Nhập email của bạn"  style="width:300px" name="dk_email" />
    </td>
  </tr>
  <tr>
    <td>Mật khẩu</td>
    <td>
    <input type="password" required="required" placeholder="Nhập mật khẩu của bạn" name="dk_mat_khau" />
    </td>
  </tr>
  <tr>
    <td>Xác nhận lại mật khẩu</td>
    <td>
    <input type="password" required="required" placeholder="Nhập mật khẩu của bạn" name="dk_mat_khau_xac_nhan" />
    </td>
  </tr>
  <tr>
    <td>Địa chỉ</td>
    <td><input type="text" required="required" placeholder="Nhập địa chỉ của bạn"  style="width:300px" name="dk_dia_chi" /></td>
  </tr>
  <tr>
    <td>Điện thoại</td>
    <td><input type="text" required="required" placeholder="Nhập số địa thoại của bạn"  style="width:300px" name="dk_dien_thoai" /></td>
 <tr>
    <td>Địa chỉ giao hàng</td>
    <td>
    <textarea name="dk_ghi_chu" cols="50" rows="5"  style="width:300px" placeholder="Tối đa 300 ký tự"></textarea>&nbsp;
    <button type="submit" name="btnDangky">Đăng ký</button>
    </td>   
 </tr>
</table>
</fieldset>
</form>
<?php
}
?>
</td>
</tr>
<tr>
<td colspan="2">
<p><?php echo $thong_bao ?></p>
<hr />
</td>
</tr>
<tr>
<td align="left"><button type="submit" onclick="window.location='.'">Mua hàng</a></td>
<td align="right">
<?php if(isset($_SESSION["ma_khach_hang"])){ ?>
<button type="submit" onclick="window.location='gio_hang.php'">Tiếp &gt;&gt;</button>
<?php }?>
</td>
</tr>
</table>
</div>
<?php
include("includes/footer.php");
include("includes/login.php");
?>
