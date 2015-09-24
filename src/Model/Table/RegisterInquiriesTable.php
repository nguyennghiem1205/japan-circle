<?php
namespace App\Model\Table;

use App\Model\Entity\RegisterInquiry;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegisterInquiries Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Members
 * @property \Cake\ORM\Association\BelongsTo $Inquiries
 */
class RegisterInquiriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('register_inquiries');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('company', 'create')
            ->notEmpty('company');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('city_code', 'create')
            ->notEmpty('city_code');
        $validator->add('email', 'validFormat', [
            'rule' => 'email',
            'message' => 'E-mail must be valid'
            ])
            ->allowEmpty('email');

        $validator
            ->allowEmpty('prefecture');

        $validator
            ->allowEmpty('phone');

        $validator
            ->allowEmpty('fax');

        $validator
            ->allowEmpty('site_url');

        $validator
            ->requirePresence('industry_code', 'create')
            ->notEmpty('industry_code');

        $validator
            ->requirePresence('contact_person', 'create')
            ->notEmpty('contact_person');

        $validator
            ->requirePresence('contact_phone', 'create')
            ->notEmpty('contact_phone');

        $validator
            ->requirePresence('division_code', 'create')
            ->notEmpty('division_code');

        $validator
            ->allowEmpty('com_department');

        $validator
            ->allowEmpty('need_info');

        return $validator;
    }


    public function sendEmailContent($registerInquiry,$inquiry,$industries,$divisions,$fieldLanguage) {
        $email_stacks = array();
        $email_stacks['content'] = "<h3><?= __('Kính chào Quý Công ty')?> </h3>".
            "<p><?= __('Quý khách đã gửi thông tin liên hệ nhu cầu hợp tác thành công. Japan Circle sẽ liên hệ quý khách trong thời gian sớm nhất.')?><br>
                <?= __('Sau đây là thông tin quý khách đã cung cấp cho Japan Circle.')?></p>".
            "<h3><?= __('Thông tin liên hệ')?></h3>".
            "<table width=\"100%\">".
            "<tbody><tr>".
            "<td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Ngày liên hệ')?></td>".
            "<td>".date('d/m/Y', strtotime($registerInquiry->created))."</td>".
            "</tr><tr>".
            "<td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Nhu cầu hợp tác')?></td>".
            "<td>".$inquiry['title_'.$fieldLanguage]."</td>".
            "</tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Công ty')?></td>".
            "<td>".$registerInquiry->company."</td>".
            "<tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Ngành nghề')?></td><td>".
            $industries[$registerInquiry->industry_code]."</td>".
            "<tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Vốn điều lệ')?></td><td>".
            $registerInquiry->capital."</td>".
            "<tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Năm thành lập')?></td><td>".
            date('d/m/Y', strtotime($registerInquiry->com_established))."</td>".
            "</tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Số nhân viên')?></td><td>".
            $registerInquiry->com_staff.
            "</td></tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Địa chỉ')?></td><td>".
            $registerInquiry->address.
            "</td></tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Điện thoại / Fax')?></td><td>".
            $registerInquiry->phone." / ".$registerInquiry->fax.
            "</td></tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\">Email</td><td>".
            "<a href=\"mailto:".$registerInquiry->email."\" target=\"_blank\">".$registerInquiry->email.
            "</a></td></tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\">Website</td><td>".
            $registerInquiry->site_url.
            "</td></tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Họ tên người đăng ký')?></td><td>".
            $registerInquiry->contact_person.
            "</td></tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Chức vụ')?></td><td>".
            $divisions[$registerInquiry->division_code].
            "</td></tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Điện thoại')?></td><td>".
            $registerInquiry->contact_phone.
            "</td></tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Nội dung kinh doanh')?></td><td>".
            $registerInquiry->com_inquiry.
            "</td></tr><tr><td width=\"30%\" bgcolor=\"#F5F5F5\"><?= __('Yêu cầu thông tin')?></td><td>".
            $registerInquiry->need_info.
            "</td></tr>tbody></table>>&nbsp;</p>><?= __('Chân thành cảm ơn!')?><br><?= __('Trân trọng,')?></p>>&nbsp;</p>>&nbsp;</p><p>
            <a href=\"http://japan-circle.vn\" target=\"_blank\"><img class=\"CToWUd\" src=\"https://ci6.googleusercontent.com/proxy/ovif3YwB3QbkKffzsU9KYJ7z8Pf5lcCBZi0CkYkDfoH6zWQUdqzZrr7BAZxYhptpRt7zW1zCSRKA9O_j2UI3nrMGQ0f3oojykQ=s0-d-e1-ft#http://japan-circle.vn/images/japan-circle-logo.png\" border=\"0\"></a></p><div class=\"yj6qo\"></div><div class=\"adL\"></div>";
        $email_stacks['email'] = $registerInquiry->email;
        $email_stacks['subject'] = 'info';
        return $email_stacks;
    }
}
