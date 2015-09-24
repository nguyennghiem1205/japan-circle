<div style="font-family:Helvetica Neue,Helvetica,Arial">
    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
        <tbody><tr>
            <td align="center">
                <center>
                    <table style="margin-left:auto;margin-right:auto;width:600px;text-align:center" width="600" border="0" cellpadding="25" cellspacing="0">
                        <tbody><tr>
                            <td valign="top" align="center">&nbsp;</td>
                        </tr>
                        </tbody></table>
                </center>
            </td>
        </tr>
        <tr>
            <td align="center">
                <center>
                    <table style="margin-left:auto;margin-right:auto;width:600px;text-align:center" width="600" border="0" cellpadding="30" cellspacing="0">
                        <tbody><tr>
                            <td style="background:#ffffff;border:1px solid #dce1e5" valign="top" width="" align="left">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                        <td valign="top" align="center">
                                            <h2 style="color:#e74c3c!important"><?= __('Đổi mật khẩu thành công')?></h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-top:1px solid #dce1e5;border-bottom:1px solid #dce1e5" valign="top" align="center">
                                            <p style="margin:1em 0">
                                                <b><?= __('Thành viên')?> :</b>
                                                <?= $name ?>
                                            </p>
                                            <p style="margin:1em 0">
                                                <b>E-mail:</b>
                                                <a href="mailto:<?= $email ?>" target="_blank"><?= $email ?></a>
                                            </p>
                                            <p style="margin:1em 0">
                                                <b><?= __('Mật khẩu')?>:</b>
                                                <?= $password ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" align="center">
                                            <p style="margin:1em 0">
                                                <br>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" align="center" bgcolor="#e74c3c">
                                            <h3><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'memberLogin'], true) ?>" style="color:#ffffff!important" target="_blank"><?= __('Đăng nhập')?></a></h3>
                                        </td>
                                    </tr>
                                    </tbody></table>
                            </td>
                        </tr>
                        </tbody></table>
                </center>
            </td>
        </tr>
        </tbody></table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a href="<?= $this->Url->build('/',true)?>" target="_blank">
            <img src="http://japan-circle.vn/images/japan-circle-logo.png" border="0" class="CToWUd"></a></p>
</div>