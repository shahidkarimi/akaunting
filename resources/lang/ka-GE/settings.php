<?php

return [

    'company' => [
        'name'              => 'სახელი',
        'email'             => 'ელ-ფოსტა',
        'phone'             => 'ტელეფონი',
        'address'           => 'მისამართი',
        'logo'              => 'ლოგო',
    ],
    'localisation' => [
        'tab'               => 'ლოკალიზაცია',
        'financial_start'   => 'ფინანსური წლის საწყისი',
        'timezone'          => 'დროის ზონა',
        'date' => [
            'format'        => 'თარიღის ფორმატი',
            'separator'     => 'დროის გამყოფი',
            'dash'          => 'ტირე (-)',
            'dot'           => 'წერტილი (.)',
            'comma'         => 'მძიმე (,)',
            'slash'         => 'ფრაქცია (/)',
            'space'         => 'სივრცე ( )',
        ],
        'percent' => [
            'title'         => 'პროცენტი (%) პოზიცია',
            'before'        => 'რიცხვამდე',
            'after'         => 'რიცხვის შემდეგ',
        ],
    ],
    'invoice' => [
        'tab'               => 'ინვოისი',
        'prefix'            => 'პრეფიქს ნომერი',
        'digit'             => 'რიცხვითი ციფრი',
        'next'              => 'შემდეგი ნომერი',
        'logo'              => 'ლოგო',
        'custom'            => 'მორგება',
        'item_name'         => 'საქონლის დასახელება',
        'item'              => 'საქონელი',
        'product'           => 'პროდუქტი',
        'service'           => 'სერვისები',
        'price_name'        => 'ფასის დასახელება',
        'price'             => 'ფასი',
        'rate'              => 'კურსი',
        'quantity_name'     => 'რაოდენობის სახელი',
        'quantity'          => 'რაოდენობა',
    ],
    'default' => [
        'tab'               => 'სტანდარტი',
        'account'           => 'ნაგულისხმევი ანგარიში',
        'currency'          => 'ნაგულისხმევი ვალუტა',
        'tax'               => 'ნაგულისხმევი საგადასახადო განაკვეთი',
        'payment'           => 'ნაგულისხმევი გადახდის მეთოდი',
        'language'          => 'ნაგულისხმები ენა',
    ],
    'email' => [
        'protocol'          => 'პროტოკოლი',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP ჰოსტი',
            'port'          => 'SMTP პორტი',
            'username'      => 'SMTP მომხმარებლის სახელი',
            'password'      => 'SMTP პაროლი',
            'encryption'    => 'SMTP უსაფრთხოება',
            'none'          => 'არცერთი',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'გზა Sendmail-ისკენ',
        'log'               => 'ელ-ფოსტის ლოგები',
    ],
    'scheduling' => [
        'tab'               => 'განრიგი',
        'send_invoice'      => 'ინვოისის შეხსენების გაგზავნა',
        'invoice_days'      => 'გაგზავნა მითითებული დღის გსვლის შემდგომ',
        'send_bill'         => 'ანგარიშის შეხსენების გაგზავნა',
        'bill_days'         => 'გაგზავნა მითითებულ დღემდე',
        'cron_command'      => 'განრიგის ბრძანება',
        'schedule_time'     => 'დაწყების საათი',
        'send_item_reminder'=> 'საქონლის შეხსენების გაგზავნა',
        'item_stocks'       => 'გაგზავნა როცა საქონელი საწყობშია',
    ],
    'appearance' => [
        'tab'               => 'იერი',
        'theme'             => 'თემა',
        'light'             => 'ნათელი',
        'dark'              => 'ბნელი',
        'list_limit'        => 'ჩანაწერები ფურცელზე',
        'use_gravatar'      => 'გამოიყენეთ გრავატარი',
    ],
    'system' => [
        'tab'               => 'სისტემა',
        'session' => [
            'lifetime'      => 'სესიის ხანგრძლივობა (წუთები)',
            'handler'       => 'სესიის დამმუშავებელი',
            'file'          => 'ფაილი',
            'database'      => 'მონაცემთა ბაზა',
        ],
        'file_size'         => 'ფაილის მაქს ზომა (MB)',
        'file_types'        => 'დაშვებული ფაილის ტიპი',
    ],

];