<?php
include 'constant_ignore.php';

/* --- System Group --- */
if (!defined('GROUP_ADMIN')) { define('GROUP_ADMIN', 1); } // Default
if (!defined('GROUP_EDITOR')) { define('GROUP_EDITOR', 2); }
if (!defined('GROUP_MODERATOR')) { define('GROUP_MODERATOR', 3); }

/* --- User status --- */
if (!defined('USER_STATUS_ACTIVE')) {define('USER_STATUS_ACTIVE', 1);}
if (!defined('USER_STATUS_BLOCK')) {define('USER_STATUS_BLOCK', 2);}
if (!defined('USER_STATUS_DELETED')) {define('USER_STATUS_DELETED', 3);}

/* --- Email template --- */
if (!defined('EMAIL_TEMPLATE_SIGNUP')) {define('EMAIL_TEMPLATE_SIGNUP', 1);}
if (!defined('EMAIL_TEMPLATE_FORGOT_PASSWORD')) {define('EMAIL_TEMPLATE_FORGOT_PASSWORD', 2);}

/* --- Ajax status --- */
if (!defined('AJAX_STATUS_SUCCESS')) {define('AJAX_STATUS_SUCCESS', 'success');}
if (!defined('AJAX_STATUS_ERROR')) {define('AJAX_STATUS_ERROR', 'error');}

/* --- Static page --- */
if (!defined('PAGE_CONTACT')) {define('PAGE_CONTACT', 'contact');}
if (!defined('PAGE_PRIVACY_POLICY')) {define('PAGE_PRIVACY_POLICY', 'privacy_policy');}

/* --- Settings fields --- */
if (!defined('SETTING_FIELD_ADDRESS_VIE')) {define('SETTING_FIELD_ADDRESS_VIE', 'address_vie');}
if (!defined('SETTING_FIELD_ADDRESS_ENG')) {define('SETTING_FIELD_ADDRESS_ENG', 'address_eng');}
if (!defined('SETTING_FIELD_ADDRESS_JPN')) {define('SETTING_FIELD_ADDRESS_JPN', 'address_jpn');}
if (!defined('SETTING_FIELD_NAME_VIE')) {define('SETTING_FIELD_NAME_VIE', 'company_name_vie');}
if (!defined('SETTING_FIELD_NAME_ENG')) {define('SETTING_FIELD_NAME_ENG', 'company_name_eng');}
if (!defined('SETTING_FIELD_NAME_JPN')) {define('SETTING_FIELD_NAME_JPN', 'company_name_jpn');}

if (!defined('SETTING_FIELD_PHONE')) {define('SETTING_FIELD_PHONE', 'phone_number');}
if (!defined('SETTING_FIELD_FACEBOOK')) {define('SETTING_FIELD_FACEBOOK', 'facebook_link');}
if (!defined('SETTING_FIELD_FOOTER_LEFT_VIE')) {define('SETTING_FIELD_FOOTER_LEFT_VIE', 'footer_left_vie');}
if (!defined('SETTING_FIELD_FOOTER_LEFT_ENG')) {define('SETTING_FIELD_FOOTER_LEFT_ENG', 'footer_left_eng');}
if (!defined('SETTING_FIELD_FOOTER_LEFT_JPN')) {define('SETTING_FIELD_FOOTER_LEFT_JPN', 'footer_left_jpn');}

if (!defined('SETTING_FIELD_FOOTER_RIGHT_VIE')) {define('SETTING_FIELD_FOOTER_RIGHT_VIE', 'footer_right_vie');}
if (!defined('SETTING_FIELD_FOOTER_RIGHT_ENG')) {define('SETTING_FIELD_FOOTER_RIGHT_ENG', 'footer_right_eng');}
if (!defined('SETTING_FIELD_FOOTER_RIGHT_JPN')) {define('SETTING_FIELD_FOOTER_RIGHT_JPN', 'footer_right_jpn');}
if (!defined('SETTING_FIELD_COPY_RIGHT')) {define('SETTING_FIELD_COPY_RIGHT', 'copy_right');}
if (!defined('SETTING_FIELD_EMAIL')) {define('SETTING_FIELD_EMAIL', 'email');}
if (!defined('SETTING_FIELD_WEBSITE')) {define('SETTING_FIELD_WEBSITE', 'website');}
if (!defined('SETTING_FIELD_FAX')) {define('SETTING_FIELD_FAX', 'fax');}


/* --- Settings type --- */
if (!defined('SETTING_TYPE_TEXT')) {define('SETTING_TYPE_TEXT', 'text');}
if (!defined('SETTING_TYPE_FILE')) {define('SETTING_TYPE_FILE', 'file');}
if (!defined('SETTING_TYPE_TEXTAREA')) {define('SETTING_TYPE_TEXTAREA', 'textarea');}
if (!defined('SETTING_TYPE_RICHTEXTAREA')) {define('SETTING_TYPE_RICHTEXTAREA', 'richtextarea');}

/* --- Error type file --- */
if (!defined('FILE_ERROR_MAX_SIZE')) {define('FILE_ERROR_MAX_SIZE', 1);}
if (!defined('FILE_ERROR_EXTENSION')) {define('FILE_ERROR_EXTENSION', 2);}
if (!defined('FILE_ERROR_EMPTY')) {define('FILE_ERROR_EMPTY', 3);}

/* --- Path upload files --- */
if (!defined('PATH_IMAGE_FILE')) {define('PATH_IMAGE_FILE', WWW_ROOT.'upload'.DS);}

/*--- Advertisement type ---*/
if (!defined('ADV_TYPE_IMAGE')) {define('ADV_TYPE_IMAGE', 1);}
if (!defined('ADV_TYPE_VIDEO')) {define('ADV_TYPE_VIDEO', 2);}
if (!defined('ADV_POSITION_LEFT')) {define('ADV_POSITION_LEFT', 1);}
if (!defined('ADV_POSITION_RIGHT')) {define('ADV_POSITION_RIGHT', 2);}

/*--- Banner ---*/
if (!defined('BANNER_POSITION_TOP')) {define('BANNER_POSITION_TOP', 1);}
if (!defined('BANNER_POSITION_BOTTOM')) {define('BANNER_POSITION_BOTTOM',2);}
if (!defined('BANNER_POSITION_ACTIVITY')) {define('BANNER_POSITION_ACTIVITY',3);}
if (!defined('BANNER_POSITION_MEMBER')) {define('BANNER_POSITION_MEMBER',4);}

/*-- Inquiry --*/
if (!defined('INQUIRY_SHOW')) {define('INQUIRY_SHOW',1);}
if (!defined('INQUIRY_PARTNER')) {define('INQUIRY_PARTNER',2);}
if (!defined('INQUIRY_HIDE')) {define('INQUIRY_HIDE',3);}

/*--- Production ---*/
if (!defined('STATUS_APPROVED')) {define('STATUS_APPROVED', 1);}
if (!defined('STATUS_UNAPPROVED')) {define('STATUS_UNAPPROVED', 0);}

/*--- Menu ---*/
if (!defined('HOME_MENU_TYPE_NEWS')) {define('HOME_MENU_TYPE_NEWS', 1);}
if (!defined('HOME_MENU_TYPE_PAGE')) {define('HOME_MENU_TYPE_PAGE', 2);}
if (!defined('HOME_MENU_TYPE_MEMBER')) {define('HOME_MENU_TYPE_MEMBER', 3);}
if (!defined('HOME_MENU_TYPE_INTRODUCE')) {define('HOME_MENU_TYPE_INTRODUCE', 4);}
if (!defined('HOME_MENU_TYPE_INQUIRY')) {define('HOME_MENU_TYPE_INQUIRY', 5);}
if (!defined('HOME_MENU_TYPE_ACTIVITY')) {define('HOME_MENU_TYPE_ACTIVITY', 6);}
if (!defined('HOME_MENU_TYPE_SUPPORTER')) {define('HOME_MENU_TYPE_SUPPORTER', 7);}
if (!defined('HOME_MENU_TYPE_SUPPORTER_REGISTER')) {define('HOME_MENU_TYPE_SUPPORTER_REGISTER', 8);}


/*--- Member ---*/
if (!defined('MEMBER_COMPANY_COUNTRY_VIETNAM')) {define('MEMBER_COMPANY_COUNTRY_VIETNAM', 1);}
if (!defined('MEMBER_COMPANY_COUNTRY_JAPAN')) {define('MEMBER_COMPANY_COUNTRY_JAPAN', 2);}
if (!defined('MEMBER_TYPE_VIP')) {define('MEMBER_TYPE_VIP', 1);}
if (!defined('MEMBER_TYPE_MEMBER')) {define('MEMBER_TYPE_MEMBER', 0);}
if (!defined('MEMBER_LANGUAGE_VIETNAMESE')) {define('MEMBER_LANGUAGE_VIETNAMESE', 1);}
if (!defined('MEMBER_LANGUAGE_ENGLISH')) {define('MEMBER_LANGUAGE_ENGLISH', 3);}
if (!defined('MEMBER_LANGUAGE_JAPANESE')) {define('MEMBER_LANGUAGE_JAPANESE', 2);}


/*--- Company Inquiry ---*/
if (!defined('COM_INQUIRY_PARTNER')) {define('COM_INQUIRY_PARTNER', 1);}
if (!defined('COM_INQUIRY_COOPERATE')) {define('COM_INQUIRY_COOPERATE', 2);}
if (!defined('COM_INQUIRY_SUPPLIER')) {define('COM_INQUIRY_SUPPLIER', 3);}
if (!defined('COM_INQUIRY_FIND_SUPPLIER')) {define('COM_INQUIRY_FIND_SUPPLIER', 4);}


return [
    'Core' => [
        'Users'=> [
            'gender'=>[0=>__('Female'),1=>__('Male')],
            'group'=> [
                GROUP_ADMIN => __('Group Admin'),
                GROUP_EDITOR => __('Group Editor'),
                GROUP_MODERATOR => __('Group Moderator')
            ]
        ],
        'System'=> [
            'active'=> [
                1 => __('True'),
                0 => __('False')
            ],
            'language' => [
                'vie' => [
                    'key' => 'vi_VN',
                    'name' => __('Viet Nam'),
                    'flag' => 'flag-vn'
                ],
                'jap' => [
                    'key' => 'ja_JP',
                    'name' => __('Japan'),
                    'flag' => 'flag-jp'
                ],
                'eng' => [
                    'key' => 'en_US',
                    'name' => __('English (US)'),
                    'flag' => 'flag-us'
                ]
            ]
        ],
        'Settings' => [
            SETTING_FIELD_ADDRESS_VIE => SETTING_TYPE_TEXT,
            SETTING_FIELD_ADDRESS_ENG => SETTING_TYPE_TEXT,
            SETTING_FIELD_ADDRESS_JPN => SETTING_TYPE_TEXT,
            SETTING_FIELD_NAME_VIE => SETTING_TYPE_TEXT,
            SETTING_FIELD_NAME_ENG => SETTING_TYPE_TEXT,
            SETTING_FIELD_NAME_JPN => SETTING_TYPE_TEXT,
            SETTING_FIELD_PHONE => SETTING_TYPE_TEXT,
            SETTING_FIELD_FACEBOOK => SETTING_TYPE_TEXT,
            SETTING_FIELD_FOOTER_LEFT_VIE => SETTING_TYPE_RICHTEXTAREA,
            SETTING_FIELD_FOOTER_LEFT_ENG => SETTING_TYPE_RICHTEXTAREA,
            SETTING_FIELD_FOOTER_LEFT_JPN => SETTING_TYPE_RICHTEXTAREA,
            SETTING_FIELD_FOOTER_RIGHT_VIE => SETTING_TYPE_RICHTEXTAREA,
            SETTING_FIELD_FOOTER_RIGHT_ENG => SETTING_TYPE_RICHTEXTAREA,
            SETTING_FIELD_FOOTER_RIGHT_JPN => SETTING_TYPE_RICHTEXTAREA,
            SETTING_FIELD_COPY_RIGHT => SETTING_TYPE_RICHTEXTAREA,
            SETTING_FIELD_EMAIL => SETTING_TYPE_TEXT,
            SETTING_FIELD_PHONE => SETTING_TYPE_TEXT,
            SETTING_FIELD_FAX => SETTING_TYPE_TEXT,
            SETTING_FIELD_WEBSITE => SETTING_TYPE_TEXT
        ],
        'Pages' => [
            PAGE_CONTACT => __('Contact'),
            PAGE_PRIVACY_POLICY => __('Privacy Policy'),
        ],
        'EmailTemplates' => [
            EMAIL_TEMPLATE_SIGNUP => __('Sign-up'),
            EMAIL_TEMPLATE_FORGOT_PASSWORD => __('Forgot password')
        ],
        'Errors' => [
            'File' => [
                FILE_ERROR_EMPTY => __('This file is require!'),
                FILE_ERROR_MAX_SIZE => __('File size exceeds allowable'),
                FILE_ERROR_EXTENSION => __('This file is not valid')
            ]
        ],
        'Countries' => [
            0 => 'Afghanistan',
            1 => 'Albania',
            2 => 'Algeria',
            3 => 'American Samoa',
            4 => 'Andorra',
            5 => 'Angola',
            6 => 'Anguilla',
            7 => 'Antarctica',
            8 => 'Antigua and Barbuda',
            9 => 'Argentina',
            10 => 'Armenia',
            11 => 'Aruba',
            12 => 'Australia',
            13 => 'Austria',
            14 => 'Azerbaijan',
            15 => 'Bahamas',
            16 => 'Bahrain',
            17 => 'Bangladesh',
            18 => 'Barbados',
            19 => 'Belarus',
            20 => 'Belgium',
            21 => 'Belize',
            22 => 'Benin',
            23 => 'Bermuda',
            24 => 'Bhutan',
            25 => 'Bolivia',
            26 => 'Bosnia and Herzegowina',
            27 => 'Botswana',
            28 => 'Bouvet Island',
            29 => 'Brazil',
            30 => 'British Indian Ocean Territory',
            31 => 'Brunei Darussalam',
            32 => 'Bulgaria',
            33 => 'Burkina Faso',
            34 => 'Burundi',
            35 => 'Cambodia',
            36 => 'Cameroon',
            37 => 'Canada',
            38 => 'Cape Verde',
            39 => 'Cayman Islands',
            40 => 'Central African Republic',
            41 => 'Chad',
            42 => 'Chile',
            43 => 'China',
            44 => 'Christmas Island',
            45 => 'Cocos (Keeling) Islands',
            46 => 'Colombia',
            47 => 'Comoros',
            48 => 'Congo',
            49 => 'Congo, the Democratic Republic of the',
            50 => 'Cook Islands',
            51 => 'Costa Rica',
            52 => 'Cote d\'Ivoire',
            53 => 'Croatia (Hrvatska)',
            54 => 'Cuba',
            55 => 'Cyprus',
            56 => 'Czech Republic',
            57 => 'Denmark',
            58 => 'Djibouti',
            59 => 'Dominica',
            60 => 'Dominican Republic',
            61 => 'East Timor',
            62 => 'Ecuador',
            63 => 'Egypt',
            64 => 'El Salvador',
            65 => 'Equatorial Guinea',
            66 => 'Eritrea',
            67 => 'Estonia',
            68 => 'Ethiopia',
            69 => 'Falkland Islands (Malvinas)',
            70 => 'Faroe Islands',
            71 => 'Fiji',
            72 => 'Finland',
            73 => 'France',
            74 => 'France Metropolitan',
            75 => 'French Guiana',
            76 => 'French Polynesia',
            77 => 'French Southern Territories',
            78 => 'Gabon',
            79 => 'Gambia',
            80 => 'Georgia',
            81 => 'Germany',
            82 => 'Ghana',
            83 => 'Gibraltar',
            84 => 'Greece',
            85 => 'Greenland',
            86 => 'Grenada',
            87 => 'Guadeloupe',
            88 => 'Guam',
            89 => 'Guatemala',
            90 => 'Guinea',
            91 => 'Guinea-Bissau',
            92 => 'Guyana',
            93 => 'Haiti',
            94 => 'Heard and Mc Donald Islands',
            95 => 'Holy See (Vatican City State)',
            96 => 'Honduras',
            97 => 'Hong Kong',
            98 => 'Hungary',
            99 => 'Iceland',
            100 => 'India',
            101 => 'Indonesia',
            102 => 'Iran (Islamic Republic of)',
            103 => 'Iraq',
            104 => 'Ireland',
            105 => 'Israel',
            106 => 'Italy',
            107 => 'Jamaica',
            108 => 'Japan',
            109 => 'Jordan',
            110 => 'Kazakhstan',
            111 => 'Kenya',
            112 => 'Kiribati',
            113 => 'Korea, Democratic People\'s Republic of',
            114 => 'Korea, Republic of',
            115 => 'Kuwait',
            116 => 'Kyrgyzstan',
            117 => 'Lao, People\'s Democratic Republic',
            118 => 'Latvia',
            119 => 'Lebanon',
            120 => 'Lesotho',
            121 => 'Liberia',
            122 => 'Libyan Arab Jamahiriya',
            123 => 'Liechtenstein',
            124 => 'Lithuania',
            125 => 'Luxembourg',
            126 => 'Macau',
            127 => 'Macedonia, The Former Yugoslav Republic of',
            128 => 'Madagascar',
            129 => 'Malawi',
            130 => 'Malaysia',
            131 => 'Maldives',
            132 => 'Mali',
            133 => 'Malta',
            134 => 'Marshall Islands',
            135 => 'Martinique',
            136 => 'Mauritania',
            137 => 'Mauritius',
            138 => 'Mayotte',
            139 => 'Mexico',
            140 => 'Micronesia, Federated States of',
            141 => 'Moldova, Republic of',
            142 => 'Monaco',
            143 => 'Mongolia',
            144 => 'Montserrat',
            145 => 'Morocco',
            146 => 'Mozambique',
            147 => 'Myanmar',
            148 => 'Namibia',
            149 => 'Nauru',
            150 => 'Nepal',
            151 => 'Netherlands',
            152 => 'Netherlands Antilles',
            153 => 'New Caledonia',
            154 => 'New Zealand',
            155 => 'Nicaragua',
            156 => 'Niger',
            157 => 'Nigeria',
            158 => 'Niue',
            159 => 'Norfolk Island',
            160 => 'Northern Mariana Islands',
            161 => 'Norway',
            162 => 'Oman',
            163 => 'Pakistan',
            164 => 'Palau',
            165 => 'Panama',
            166 => 'Papua New Guinea',
            167 => 'Paraguay',
            168 => 'Peru',
            169 => 'Philippines',
            170 => 'Pitcairn',
            171 => 'Poland',
            172 => 'Portugal',
            173 => 'Puerto Rico',
            174 => 'Qatar',
            175 => 'Reunion',
            176 => 'Romania',
            177 => 'Russian Federation',
            178 => 'Rwanda',
            179 => 'Saint Kitts and Nevis',
            180 => 'Saint Lucia',
            181 => 'Saint Vincent and the Grenadines',
            182 => 'Samoa',
            183 => 'San Marino',
            184 => 'Sao Tome and Principe',
            185 => 'Saudi Arabia',
            186 => 'Senegal',
            187 => 'Seychelles',
            188 => 'Sierra Leone',
            189 => 'Singapore',
            190 => 'Slovakia (Slovak Republic)',
            191 => 'Slovenia',
            192 => 'Solomon Islands',
            193 => 'Somalia',
            194 => 'South Africa',
            195 => 'South Georgia and the South Sandwich Islands',
            196 => 'Spain',
            197 => 'Sri Lanka',
            198 => 'St. Helena',
            199 => 'St. Pierre and Miquelon',
            200 => 'Sudan',
            201 => 'Suriname',
            202 => 'Svalbard and Jan Mayen Islands',
            203 => 'Swaziland',
            204 => 'Sweden',
            205 => 'Switzerland',
            206 => 'Syrian Arab Republic',
            207 => 'Taiwan, Province of China',
            208 => 'Tajikistan',
            209 => 'Tanzania, United Republic of',
            210 => 'Thailand',
            211 => 'Togo',
            212 => 'Tokelau',
            213 => 'Tonga',
            214 => 'Trinidad and Tobago',
            215 => 'Tunisia',
            216 => 'Turkey',
            217 => 'Turkmenistan',
            218 => 'Turks and Caicos Islands',
            219 => 'Tuvalu',
            220 => 'Uganda',
            221 => 'Ukraine',
            222 => 'United Arab Emirates',
            223 => 'United Kingdom',
            224 => 'United States',
            225 => 'United States Minor Outlying Islands',
            226 => 'Uruguay',
            227 => 'Uzbekistan',
            228 => 'Vanuatu',
            229 => 'Venezuela',
            230 => 'Vietnam',
            231 => 'Virgin Islands (British)',
            232 => 'Virgin Islands (U.S.)',
            233 => 'Wallis and Futuna Islands',
            234 => 'Western Sahara',
            235 => 'Yemen',
            236 => 'Yugoslavia',
            237 => 'Zambia',
            238 => 'Zimbabwe'
        ]
    ],
    'Adv' => [
        'type' => [
            ADV_TYPE_IMAGE => __('Image'),
            ADV_TYPE_VIDEO => __('Video')],
        'position' => [
            ADV_POSITION_LEFT => __('Menu Left'),
            ADV_POSITION_RIGHT => __('Menu Right')]


    ],
    'Banner' => [
        'position' => [
            BANNER_POSITION_TOP => __('Top'),
            BANNER_POSITION_BOTTOM => __('Bottom'),
            BANNER_POSITION_ACTIVITY => __('Banner Activity'),
            BANNER_POSITION_MEMBER => __('Banner Member'),
        ]
    ],
    'Inquiry' => [
        'type' => [
            1 => __('Japan'),
            2 => __('Việt Nam')
        ],
        'status' => [
            INQUIRY_SHOW => __('Show'),
            INQUIRY_PARTNER => __('Partner'),
            INQUIRY_HIDE => __('Hide'),

        ]
    ],
    'Member' => [
        'language' => [
            MEMBER_LANGUAGE_VIETNAMESE => __('Vietnamese'),
            MEMBER_LANGUAGE_ENGLISH => __('English'),
            MEMBER_LANGUAGE_JAPANESE => __('Japanese')
        ],
        'country' => [
            MEMBER_COMPANY_COUNTRY_VIETNAM => __('Viet Nam'),
            MEMBER_COMPANY_COUNTRY_JAPAN => __('Japan')
        ],
        'gender' => [
            1 => __('Male'),
            2 => __('Female')
        ],
        'type' => [
            MEMBER_TYPE_VIP => __('Vip'),
            MEMBER_TYPE_MEMBER => __('Member Default')
        ],
        'status' => [
            STATUS_APPROVED => __('Approved'),
            STATUS_UNAPPROVED => __('Unapproved')
        ]
    ],
    'Production' => [
        'status' => [
            STATUS_APPROVED => __('Approved'),
            STATUS_UNAPPROVED => __('Unapproved')
        ]
    ],
    'HomeMenu' => [
        'type' => [
            HOME_MENU_TYPE_NEWS => __('Menu News'),
            HOME_MENU_TYPE_PAGE => __('Page'),
            HOME_MENU_TYPE_MEMBER => __('Member'),
            HOME_MENU_TYPE_INTRODUCE => __('Introduce'),
            HOME_MENU_TYPE_INQUIRY => __('Inquiry'),
            HOME_MENU_TYPE_ACTIVITY => __('Activity'),
            HOME_MENU_TYPE_SUPPORTER => __('Supporter'),
            HOME_MENU_TYPE_SUPPORTER_REGISTER => __('Supporter Register')
         ]
    ],
    'CompanyInquiry' => [
        'type' => [
            COM_INQUIRY_PARTNER => __('Partner'),
            COM_INQUIRY_COOPERATE => __('Cooperate'),
            COM_INQUIRY_SUPPLIER => __('Supplier'),
            COM_INQUIRY_FIND_SUPPLIER => __('Find Suppliers')
        ],
        'status' => [
            STATUS_APPROVED => __('Approved'),
            STATUS_UNAPPROVED => __('Unapproved')
        ]
    ],
    'TopListInquiry' => [
        'status' => [
            STATUS_APPROVED => __('Show'),
            STATUS_UNAPPROVED => __('Hidden')
        ]
    ]
];
?>