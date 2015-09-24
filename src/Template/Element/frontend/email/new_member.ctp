<p><?= __('Chúc mừng Quý Công ty đã đăng ký thành công và trở thành thành viên chính thức của Japan Circle - Cầu nối giao thương Việt Nam - Nhật Bản.')?></p>
<p><?= __('Hệ thống chúng tôi sẽ kiểm tra và hiện thị thông tin của Quý công ty trên website Japan Circle trong thời gian sớm nhất.')?></p>
<table width="100%">
    <tbody><tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Tên truy cập')?></td>
        <td><a href="<?= $email?>" target="_blank"><?= $email?></a></td>
    </tr>
    </tbody></table>
<h3><?= __('Thông tin doanh nghiệp')?></h3>
<table width="100%">
    <tbody><tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Ngày đăng ký')?></td>
        <td>
            <?= $created?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Công ty')?></td>
        <td><?= $company?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Ngành nghề')?></td>
        <td><?= $industries[$industry_code]?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Loại hình doanh nghiệp')?></td>
        <td><?= $type_business[$type_business_id]?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Doanh nghiệp')?></td>
        <td><?= Cake\Core\Configure::read('Member.country.'.$com_country)?></td>
    </tr>

    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Địa chỉ')?></td>
        <td><?= $address_vie?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Điện thoại công ty')?></td>
        <td><?= $tel?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Website')?></td>
        <td><?= $site_url?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Họ tên người đăng ký')?></td>
        <td><?= $first_name .' '.$last_name?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Chức vụ')?></td>
        <td><?= $divisions[$division]?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Điện thoại')?></td>
        <td><?= $mobile?></td>
    </tr>

    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Nội dung kinh doanh')?></td>
        <td><?= $com_business_vie?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Nhu cầu hợp tác')?></td>
        <td><?= $com_inquiry_vie?></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Hình thức hợp tác mong muốn')?></td>
        <td><ul><?php foreach($business as $item): ?>
                <li><?= $businesses[$item]?></li>
                <?php endforeach?>
            </ul></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Các dịch vụ hỗ trợ đơn vị cần nhất')?></td>
        <td><ul>
                <?php foreach($want_to_get as $need):?>
                    <li><?= $needs[$need]?></li>
                <?php endforeach?>
            </ul></td>
    </tr>
    <tr>
        <td width="30%" bgcolor="#F5F5F5"><?= __('Loại thành viên')?>
        <td> <?= \Cake\Core\Configure::read('Member.type.'.$com_level)?></td>
    </tr>
    </tbody></table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a href="<?= $this->Url->build('/',true)?>" target="_blank"><img src="http://japan-circle.vn/images/japan-circle-logo.png" border="0" class="CToWUd"></a></p><div class="yj6qo ajU"><div id=":571" class="ajR" role="button" tabindex="0" data-tooltip="Hiển thị nội dung bị rút gọn" aria-label="Hiển thị nội dung bị rút gọn"><img class="ajT" src="//ssl.gstatic.com/ui/v1/icons/mail/images/cleardot.gif"></div></div><span class="HOEnZb adL"><font color="#888888">
    </font></span>