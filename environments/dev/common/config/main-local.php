<?php
return [ //将覆盖main.php中的相同配置
    'components' => [
        'db' => [ //db配置
            'class'    => 'yii\db\Connection',
            'dsn'      => 'mysql:host=127.0.0.1;dbname=yii2_demo',
            'username' => 'root',
            'password' => 'vagrant',
            'charset'  => 'utf8',
        ],
        'redis' => [ //redis配置
            'class'    => 'yii\redis\Connection',
            'host'     => '127.0.0.1',
            'port'     => '6379',
            // 'password' => '',
            'database' => 1,
        ],
        'memcache' => [ //memcache配置
            'class' => 'yii\caching\MemCache',
            'useMemcached' => 1, //是否使用memecached，0-memcache 1-memcached
            'servers' => [
                [
                    'host'   => '127.0.0.1',
                    'port'   => 11211,
                    'weight' => 100,
                ],
            ]
        ],
        'mailer' => [ //邮件配置
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
            'transport' => [
                'class'      => 'Swift_SmtpTransport',
                'host'       => 'smtp.126.com', //电子邮箱服务器地址
                'username'   => 'xxxx@126.com', //申请的邮箱
                'password'   => 'xxxxxxx', //发送邮箱密码，这个是独立的，不是邮箱密码
                'port'       => '465', //smtp邮箱端口
                'encryption' =>  'ssl', //加密方式
            ],
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from' => ['xxxxx@126.com'=>'admin'], //设置别称
            ],
        ],
        'sms' => [ //短信组件(自定义)
            'class' => 'common\components\sms',
        ],
        'nickname' => [ //中文昵称生成组件(自定义)
            'class' => 'common\components\nickname',
        ],
        'ipaddress' => [ //IP纯真组件(自定义)
            'class' => 'common\components\ipaddress',
        ],
        'wechat' => [ //微信组件配置(自定义)
            'class' => 'common\components\wechat',
            'config' => [  
                'token'          => 'xxxxx',
                'appid'          => 'xxxxx',
                'appsecret'      => 'xxxxx',
                'encodingaeskey' => 'xxxxx',
                'mch_id'         => 'xxxxx',
                'mch_key'        => 'xxxxx',
                'ssl_cer'        => 'xxxxx',
                'ssl_key'        => 'xxxxx',
                'cache_path'     => __DIR__.'/../../backend/runtime/wechat', //微信公众号缓存路径
            ]
        ]
    ],
];
