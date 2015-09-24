<div>
    <p><?= __('Quý khách đã gửi thông tin liên hệ nhu cầu hợp tác thành công. Japan Circle sẽ liên hệ quý khách trong thời gian sớm nhất.') ?><br>
        <?= __('Sau đây là thông tin quý khách đã cung cấp cho Japan Circle.') ?></p>
    <h3><?= __('Thông tin liên hệ') ?></h3>
    <table width="100%">
        <tbody><tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Ngày liên hệ') ?></td>
            <td><?= $this->Time->format($created, 'dd/MM/Y') ?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Nhu cầu hợp tác') ?></td>
            <td><?= $inquiry?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Công ty') ?></td>
            <td><?= $company?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Ngành nghề') ?></td>
            <td><?= $industry?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Vốn điều lệ') ?></td>
            <td><?= $capital?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Năm thành lập') ?></td>
            <td><?= $this->Time->format($com_established, 'dd/MM/Y') ?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Số nhân viên') ?></td>
            <td><?= $com_staff?></td>
        </tr>

        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Địa chỉ') ?></td>
            <td><?= $address?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Điện thoại / Fax') ?></td>
            <td><?= $phone.' / '.$fax?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Email') ?></td>
            <td><a href="mailto:<?= $email?>" target="_blank"><?= $email?></a></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Website') ?></td>
            <td><?= $site_url?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Họ tên người đăng ký') ?></td>
            <td><?= $contact_person?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Chức vụ') ?></td>
            <td><?= $division?></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Điện thoại') ?></td>
            <td><?= $contact_phone?></td>
        </tr>

        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Nội dung kinh doanh') ?></td>
            <td><p><?= $com_business?></p></td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#F5F5F5"><?= __('Yêu cầu thông tin') ?></td>
            <td><?= $need_info?></td>
        </tr>

        </tbody></table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a href="<?= $this->Url->build('/',true)?>" target="_blank"><img class="CToWUd" src="http://japan-circle.vn/images/japan-circle-logo.png" border="0"></a></p><div class="yj6qo"></div><div class="adL">
    </div></div>