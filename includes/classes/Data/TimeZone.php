<?php
namespace Data;

class TimeZone {
  public static function getTimeZones() {
    return [
      'Pacific/Midway'                  => '(UTC-11:00) American Samoa',
      'Pacific/Honolulu'                => '(UTC-10:00) Hawaii',
      'Pacific/Marquesas'               => '(UTC-09:30) Marquesas Islands',
      'America/Anchorage'               => '(UTC-09:00) Alaska',
      'America/Los_Angeles'             => '(UTC-08:00) Pacific Time (US & Canada)',
      'America/Santa_Isabel'            => '(UTC-08:00) Baja California',
      'America/Tijuana'                 => '(UTC-08:00) Tijuana',
      'America/Denver'                  => '(UTC-07:00) Mountain Time (US & Canada)',
      'America/Chihuahua'               => '(UTC-07:00) Chihuahua, La Paz, Mazatlan',
      'America/Phoenix'                 => '(UTC-07:00) Arizona',
      'America/Chicago'                 => '(UTC-06:00) Central Time (US & Canada)',
      'America/Belize'                  => '(UTC-06:00) Saskatchewan, Central America',
      'America/Mexico_City'             => '(UTC-06:00) Guadalajara, Mexico City, Monterrey',
      'Pacific/Easter'                  => '(UTC-06:00) Easter Island',
      'America/New_York'                => '(UTC-05:00) Eastern Time (US & Canada)',
      'America/Havana'                  => '(UTC-05:00) Cuba',
      'America/Bogota'                  => '(UTC-05:00) Bogota, Lima, Quito',
      'America/Caracas'                 => '(UTC-04:30) Caracas',
      'America/Halifax'                 => '(UTC-04:00) Atlantic Time (Canada)',
      'America/Goose_Bay'               => '(UTC-04:00) Atlantic Time (Goose Bay)',
      'America/Asuncion'                => '(UTC-04:00) Asuncion',
      'America/Santiago'                => '(UTC-04:00) Santiago',
      'America/Cuiaba'                  => '(UTC-04:00) Cuiaba',
      'America/La_Paz'                  => '(UTC-04:00) Georgetown, La Paz, Manaus, San Juan',
      'America/St_Johns'                => '(UTC-03:30) Newfoundland',
      'America/Argentina/Buenos_Aires'  => '(UTC-03:00) Buenos Aires',
      'America/Argentina/San_Luis'      => '(UTC-03:00) San Luis',
      'America/Argentina/Mendoza'       => '(UTC-03:00) Argentina, Cayenne, Fortaleza',
      'Atlantic/Stanley'                => '(UTC-03:00) Falkland Islands',
      'America/Godthab'                 => '(UTC-03:00) Greenland',
      'America/Montevideo'              => '(UTC-03:00) Montevideo',
      'America/Sao_Paulo'               => '(UTC-03:00) Бразилия',
      'America/Miquelon'                => '(UTC-03:00) Saint Pierre and Miquelon',
      'America/Noronha'                 => '(UTC-02:00) Mid-Atlantic',
      'Atlantic/Cape_Verde'             => '(UTC-01:00) Cape Verde Is.',
      'Atlantic/Azores'                 => '(UTC-01:00) Azores',
      'Europe/London'                   => '(UTC) Dublin, Edinburgh, Lisbon, London',
      'Africa/Casablanca'               => '(UTC) Casablanca',
      'Atlantic/Reykjavik'              => '(UTC) Monrovia, Reykjavik',
      'Europe/Amsterdam'                => '(UTC+01:00) Central European Time',
      'Africa/Algiers'                  => '(UTC+01:00) West Central Africa',
      'Africa/Windhoek'                 => '(UTC+01:00) Windhoek',
      'Africa/Tunis'                    => '(UTC+01:00) Tunis',
      'Europe/Athens'                   => '(UTC+02:00) Eastern European Time',
      'Africa/Johannesburg'             => '(UTC+02:00) South Africa Standard Time',
      'Europe/Kaliningrad'              => '(UTC+02:00) Kaliningrad',
      'Asia/Amman'                      => '(UTC+02:00) Amman',
      'Asia/Beirut'                     => '(UTC+02:00) Beirut',
      'Africa/Cairo'                    => '(UTC+02:00) Cairo',
      'Asia/Jerusalem'                  => '(UTC+02:00) Jerusalem',
      'Asia/Gaza'                       => '(UTC+02:00) Gaza',
      'Asia/Damascus'                   => '(UTC+02:00) Syria',
      'Europe/Moscow'                   => '(UTC+03:00) Moscow, St. Petersburg, Volgograd',
      'Europe/Minsk'                    => '(UTC+03:00) Minsk',
      'Africa/Nairobi'                  => '(UTC+03:00) Nairobi, Baghdad, Kuwait, Qatar, Riyadh',
      'Asia/Tehran'                     => '(UTC+03:30) Tehran',
      'Asia/Dubai'                      => '(UTC+04:00) Abu Dhabi, Muscat, Tbilisi',
      'Asia/Yerevan'                    => '(UTC+04:00) Yerevan',
      'Asia/Baku'                       => '(UTC+04:00) Baku',
      'Indian/Mauritius'                => '(UTC+04:00) Mauritius',
      'Asia/Kabul'                      => '(UTC+04:30) Kabul',
      'Asia/Yekaterinburg'              => '(UTC+05:00) Ekaterinburg',
      'Asia/Tashkent'                   => '(UTC+05:00) Tashkent, Karachi',
      'Asia/Kolkata'                    => '(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi',
      'Asia/Kathmandu'                  => '(UTC+05:45) Kathmandu',
      'Asia/Novosibirsk'                => '(UTC+06:00) Novosibirsk',
      'Asia/Dhaka'                      => '(UTC+06:00) Astana, Dhaka',
      'Asia/Almaty'                     => '(UTC+06:00) Almaty, Bishkek, Qyzylorda',
      'Asia/Rangoon'                    => '(UTC+06:30) Yangon (Rangoon)',
      'Asia/Krasnoyarsk'                => '(UTC+07:00) Krasnoyarsk',
      'Asia/Bangkok'                    => '(UTC+07:00) Bangkok, Hanoi, Jakarta',
      'Asia/Irkutsk'                    => '(UTC+08:00) Irkutsk',
      'Asia/Hong_Kong'                  => '(UTC+08:00) Beijing, Chongqing, Hong Kong, Urumqi',
      'Asia/Singapore'                  => '(UTC+08:00) Kuala Lumpur, Singapore',
      'Australia/Perth'                 => '(UTC+08:00) Perth',
      'Asia/Yakutsk'                    => '(UTC+09:00) Yakutsk',
      'Asia/Tokyo'                      => '(UTC+09:00) Osaka, Sapporo, Tokyo',
      'Asia/Seoul'                      => '(UTC+09:00) Seoul',
      'Australia/Adelaide'              => '(UTC+09:30) Adelaide',
      'Australia/Darwin'                => '(UTC+09:30) Darwin',
      'Asia/Vladivostok'                => '(UTC+10:00) Vladivostok',
      'Asia/Magadan'                    => '(UTC+10:00) Magadan',
      'Australia/Brisbane'              => '(UTC+10:00) Brisbane, Guam',
      'Australia/Sydney'                => '(UTC+10:00) Sydney, Melbourne, Hobart',
      'Pacific/Noumea'                  => '(UTC+11:00) Solomon Is., New Caledonia',
      'Pacific/Norfolk'                 => '(UTC+11:30) Norfolk Island',
      'Asia/Anadyr'                     => '(UTC+12:00) Anadyr, Kamchatka',
      'Pacific/Auckland'                => '(UTC+12:00) Auckland, Wellington',
      'Pacific/Fiji'                    => '(UTC+12:00) Fiji',
      'Pacific/Chatham'                 => '(UTC+12:45) Chatham Islands',
      'Pacific/Tongatapu'               => '(UTC+13:00) Nuku\'alofa',
      'Pacific/Apia'                    => '(UTC+13:00) Apia, Samoa',
      'Pacific/Kiritimati'              => '(UTC+14:00) Kiritimati',
    ];
  }
}