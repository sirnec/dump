<?php
/**
 * Created by PhpStorm.
 * User: rhinoda
 * Date: 16.03.16
 * Time: 10:28
 */

$haystacks = [
    'eu.chainfire.lumen_3.10-310_minAPI19(arm64-v8a,armeabi-v7a,x86,x86_64)(nodpi).apk',
    'eu.chainfire.lumen_3.15-315_minAPI19(arm64-v8a,armeabi-v7a,x86,x86_64)(nodpi).apk',
    'eu.chainfire.lumen_3.16-316_minAPI19(arm64-v8a,armeabi-v7a,x86,x86_64)(nodpi).apk',
    'eu.chainfire.lumen_3.51-351_minAPI21(nodpi).apk',
    'eu.chainfire.lumen_3.52-352_minAPI21(nodpi).apk',
    'eu.chainfire.lumen_3.60-360_minAPI21(nodpi).apk',
    'eu.chainfire.lumen_3.61-361_minAPI21(nodpi).apk',
    'eu.chainfire.lumen_3.62-362_minAPI21(nodpi).apk',
    'eu.chainfire.mobileodin.lite-4.20-420-minAPI7.apk',
    'eu.chainfire.recently-1.00-100-minAPI21.apk',
    'eu.chainfire.recently-1.10-110-minAPI21.apk',
    'eu.chainfire.recently-1.16-116-minAPI21.apk',
    'eu.chainfire.recently_1.30-130_minAPI21(arm64-v8a,armeabi,armeabi-v7a,mips,mips64,x86,x86_64)(nodpi).apk',
    'eu.chainfire.stickmount_3.33-333_minAPI14(nodpi).apk',
];

$domains = "ru\.|de\.es\.|eu\.|io\.|jp\.co\.|jp\.|me\.|net\.|org\.";
$regexp = "/^($domains)?([^-^_]+)[-_]((?:(?!([-_]minAPI)).)+)[-_](minAPI[^\.]+)/";

echo "<pre>";

foreach($haystacks as $haystack){

    if(preg_match($regexp, $haystack, $matches))
    {
        $name = $matches[2];
        $version = $matches[3];
        $os = $matches[5];

        $name = str_replace('.', ' ', $name);

        preg_match("/(minAPI[^(]+)([(]([^)]+)[)])?([(]([^)]+)[)])?/", $os, $supported);

        $os = $supported[1];

        if(strpos($supported[3], 'dpi')) {
            $architecture = null;
            $dpi = $supported[3];
        } else {
            $architecture = $supported[3];
            $dpi = $supported[5];
        }

        $soft = [
            'name' => $name,
            'version' => $version,
            'os' => [
                'api' => $os,
                'architecture' => $architecture,
                'dpi' => $dpi,
            ],
        ];

        var_dump($soft);

    } else {
        echo "$haystack\n";
    }
}