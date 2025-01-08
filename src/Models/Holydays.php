<?php

namespace IslamicNetwork\Calendar\Models;

class Holydays
{

    public static array $holydays = [
        1 => [
            10 => [
                'month' => 1,
                'day' => 10,
                'events' => [
                    [
                        'name' => 'Ashura',
                        'link' => '',
                    ]
                ]
            ]
        ],
        2 => [
            1 => [
                'month' => 2,
                'day' => 1,
                'events' => [
                    [
                        'name' => 'End of the holy months',
                        'link' => '',
                    ]
                ]
            ]
        ],
        3 => [
            12 => [
                'month' => 3,
                'day' => 12,
                'events' => [
                    [
                        'name' => 'Mawlid al-Nabi',
                        'link' => '',
                    ]
                ]
            ]
        ],
        7 => [
            1 => [
                'month' => 7,
                'day' => 1,
                'events' => [
                    [
                        'name' => 'Beginning of the holy months',
                        'link' => '',
                    ]
                ]
            ],
            8 => [
                'month' => 7,
                'day' => 8,
                'events' => [
                    [
                        'name' => 'Urs of Mawlana Shaykh Nazim al-Haqqani (ق)',
                        'link' => '',
                    ]
                ]
            ],
            13 => [
                'month' => 7,
                'day' => 13,
                'events' => [
                    [
                        'name' => 'Birth of Sayyidina `Ali ibn Abi Talib (ر)',
                        'link' => '',
                    ]
                ]
            ],
            15 => [
                'month' => 7,
                'day' => 15,
                'events' => [
                    [
                        'name' => 'Urs of Sayyidina Jafar as-Sadiq (ق)',
                        'link' => '',
                    ],
                    [
                        'name' => 'Urs of Zaynab bint Ali (ر)',
                        'link' => '',
                    ]
                ]
            ],
            27 => [
                'month' => 7,
                'day' => 27,
                'events' => [
                    [
                        'name' => 'Lailat-ul-Miraj',
                        'link' => '',
                    ]
                ]
            ],
        ],
        8 => [
            15 => [
                'month' => 8,
                'day' => 15,
                'events' => [
                    [
                        'name' => 'Lailat-ul-Bara\'at',
                        'link' => '',
                    ]
                ]
            ]
        ],
        9 => [
            1 => [
                'month' => 9,
                'day' => 1,
                'events' => [
                    [
                        'name' => '1st Day of Ramadan',
                        'link' => '',
                    ]
                ]
            ],
            21 => [
                'month' => 9,
                'day' => 21,
                'events' => [
                    [
                        'name' => 'Lailat-ul-Qadr',
                        'link' => '',
                    ]
                ]
            ],
            23 => [
                'month' => 9,
                'day' => 23,
                'events' => [
                    [
                        'name' => 'Lailat-ul-Qadr',
                        'link' => '',
                    ]
                ]
            ],
            25 => [
                'month' => 9,
                'day' => 25,
                'events' => [
                    [
                        'name' => 'Lailat-ul-Qadr',
                        'link' => '',
                    ]
                ]
            ],
            27 => [
                'month' => 9,
                'day' => 27,
                'events' => [
                    [
                        'name' => 'Lailat-ul-Qadr',
                        'link' => '',
                    ]
                ]
            ],
            29 => [
                'month' => 9,
                'day' => 29,
                'events' => [
                    [
                        'name' => 'Lailat-ul-Qadr',
                        'link' => '',
                    ]
                ]
            ],
        ],
        10 => [
            1 => [
                'month' => 10,
                'day' => 1,
                'events' => [
                    [
                        'name' => 'Eid-ul-Fitr',
                        'link' => '',
                    ]
                ]
            ]

        ],
        12 => [
            8 => [
                'month' => 12,
                'day' => 8,
                'events' => [
                    [
                        'name' => 'Hajj',
                        'link' => '',
                    ]
                ]
            ],
            9 => [
                'month' => 12,
                'day' => 9,
                'events' => [
                    [
                        'name' => 'Hajj',
                        'link' => '',
                    ],
                    [
                        'name' => 'Arafa',
                        'link' => '',
                    ]
                ]
            ],
            10 => [
                'month' => 12,
                'day' => 10,
                'events' => [
                    [
                        'name' => 'Eid-ul-Adha',
                        'link' => '',
                    ],
                    [
                        'name' => 'Hajj',
                        'link' => '',
                    ]
                ]
            ],
            11 => [
                'month' => 12,
                'day' => 11,
                'events' => [
                    [
                        'name' => 'Hajj',
                        'link' => '',
                    ],
                ]
            ],
            12 => [
                'month' => 12,
                'day' => 12,
                'events' => [
                    [
                        'name' => 'Hajj',
                        'link' => '',
                    ],
                ]
            ],
            13 => [
                'month' => 12,
                'day' => 13,
                'events' => [
                    [
                        'name' => 'Hajj',
                        'link' => '',
                    ],
                ]
            ]
        ]
    ];

    public static function getNames(int $day, int $month): array
    {
        if (isset(self::$holydays[$month][$day])) {
            return array_column(self::$holydays[$month][$day]['events'], 'name');
        }

        return [];

    }
}