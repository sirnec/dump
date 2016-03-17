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
    'se.knowit.mobile.bluewater-1.1.0-2-minAPI18.apk',
    'se.knowit.mobile.christmas-1.1.0-3-minAPI18.apk',
    'se.knowit.mobile.cleanfoggy-1.1.0-3-minAPI18.apk',
    'se.knowit.mobile.triflat-1.1.0-3-minAPI18.apk',
    'se.knowit.mobile.wintersnow-1.1.0-3-minAPI18.apk',
    'se.knowit.mobile.woody-1.1.0-3-minAPI18.apk',
    'simple.reboot.com_5.0-1510242252_minAPI15(nodpi).apk',
    'simple.reboot.com_5.0-1510250110_minAPI15(nodpi).apk',
    'stericson.busybox_40-190_minAPI4(nodpi).apk',
    'tunein.player-13.1-3202-minAPI14.apk',
    'tunein.player-13.2.1-3237-minAPI14.apk',
    'tunein.player-13.2.2-3241-minAPI14.apk',
    'tunein.player-13.3.1-6247-minAPI14.apk',
    'tunein.player-13.3.2-3250-minAPI14.apk',
    'tunein.player-13.4.1-3299-minAPI14.apk',
    'tunein.player-13.6.1-3321-minAPI14.apk',
    'tunein.player-13.7-3329-minAPI14.apk',
    'tunein.player-13.8-3337-minAPI14.apk',
    'tunein.player_13.9.1-3360_minAPI14(armeabi-v7a)(nodpi).apk',
    'tunein.player_13.9.2-3377_minAPI14(armeabi-v7a)(nodpi).apk',
    'tunein.player-13.9-3341-minAPI14.apk',
    'tunein.player_13.9.4-3380_minAPI14(armeabi-v7a)(nodpi).apk',
    'tunein.player_14.1.1-3385_minAPI14(armeabi-v7a)(nodpi).apk',
    'tunein.player_14.1.1-6385_minAPI14(x86)(nodpi).apk',
    'tunein.player_14.1-3382_minAPI14(armeabi-v7a)(nodpi).apk',
    'tunein.player_14.1-6382_minAPI14(x86)(nodpi).apk',
    'tunein.player_14.2-3388_minAPI14(armeabi-v7a)(nodpi).apk',
    'tunein.player_14.2-6388_minAPI14(x86)(nodpi).apk',
    'tunein.player_14.4-3395_minAPI14(armeabi-v7a)(nodpi).apk',
    'tunein.player_14.5-3398_minAPI14(armeabi-v7a)(nodpi).apk',
    'tunein.player_14.7-13402_minAPI14(armeabi-v7a)(nodpi).apk',
    'tunein.player_14.9-13409_minAPI14(armeabi-v7a)(nodpi).apk',
    'tv.peel.app-8.2.6-82009-minAPI16.apk',
    'tv.peel.app-8.3.4-83010-minAPI21.apk',
    'tv.peel.app_8.6.1-86222_minAPI21(nodpi).apk',
    'tv.peel.app_8.6.6-86606_minAPI21(nodpi).apk',
    'tv.peel.smartremote-8.4.8-83119-minAPI16.apk',
    'tv.peel.smartremote_8.6.3-86359_minAPI16(nodpi).apk',
    'tv.peel.smartremote_8.6.6-86607_minAPI16(nodpi).apk',
    'tv.periscope.android-1.0.1-1900049-minAPI19.apk',
    'tv.periscope.android-1.0-1900044-minAPI19.apk',
    'tv.periscope.android-1.0-1900045-minAPI19.apk',
    'tv.periscope.android-1.0-1900046-minAPI19.apk',
    'tv.periscope.android-1.0.2.1-1900067-minAPI19.apk',
    'tv.periscope.android-1.0.2-1900061-minAPI19.apk',
    'tv.periscope.android-1.0.2-1900062-minAPI19.apk',
    'tv.periscope.android-1.0.2-1900065-minAPI19.apk',
    'tv.periscope.android-1.0.2.2-1900070-minAPI19.apk',
    'tv.periscope.android-1.0.3-1900082-minAPI19.apk',
    'tv.periscope.android-1.0.4.1-1900096-minAPI19.apk',
    'tv.periscope.android-1.1-1900108-minAPI19.apk',
    'tv.periscope.android-1.2.1.1-1900131-minAPI19.apk',
    'tv.periscope.android_1.2.1.1-1900134_minAPI19(armeabi-v7a,mips,x86)(nodpi).apk',
    'tv.periscope.android-1.2.1-1900129-minAPI19.apk',
    'tv.periscope.android-1.2.1-1900130-minAPI19.apk',
    'tv.periscope.android-1.2-1900119-minAPI19.apk',
    'tv.periscope.android-1.2-1900121-minAPI19.apk',
    'tv.periscope.android-1.2-1900123-minAPI19.apk',
    'tv.periscope.android_1.3.0.1-1900147_minAPI19(armeabi-v7a,mips,x86)(nodpi).apk',
    'tv.periscope.android_1.3.1-1900154_minAPI19(armeabi-v7a,mips,x86)(nodpi).apk',
    'tv.periscope.android_1.3-1900143_minAPI19(armeabi-v7a,mips,x86)(nodpi).apk',
    'tv.periscope.android_1.3.2.1-1900165_minAPI19(armeabi-v7a,mips,x86)(nodpi).apk',
    'tv.periscope.android_1.3.2-1900162_minAPI19(armeabi-v7a,mips,x86)(nodpi).apk',
    'tv.periscope.android_1.3.3.1-1900173_minAPI19(armeabi-v7a,mips,x86)(nodpi).apk',
    'tv.periscope.android_1.3.3-1900172_minAPI19(armeabi-v7a,mips,x86)(nodpi).apk',
    'tv.periscope.android_1.3.3.2-1900177_minAPI19(armeabi-v7a,mips,x86)(nodpi).apk',
    'tv.pluto.android-1.27.26-400127026-minAPI16.apk',
    'tv.pluto.android-2.0.27-400200027-minAPI16.apk',
    'tv.pluto.android_2.2.1-400202001_minAPI16(armeabi-v7a)(nodpi).apk',
    'tv.pluto.android_2.2.1-leanback-500202001_minAPI21(armeabi-v7a)(nodpi).apk',
    'tv.pluto.android_2.2.1-leanback-510202001_minAPI21(x86)(nodpi).apk',
    'tv.pluto.android_2.2.6-leanback-500202006_minAPI21(armeabi-v7a)(nodpi).apk',
    'tv.twitch.android.app-4.0.0-68-minAPI16.apk',
    'tv.twitch.android.app-4.0.1-69-minAPI16.apk',
    'tv.twitch.android.app-4.1.0-70-minAPI16.apk',
    'tv.twitch.android.app-4.1.1-71-minAPI16.apk',
    'tv.twitch.android.app-4.2.3-77-minAPI16.apk',
    'tv.twitch.android.app-4.3.0-81-minAPI16.apk',
    'tv.twitch.android.app-4.3.1-84-minAPI16.apk',
    'tv.twitch.android.app-4.3.2-86-minAPI16.apk',
    'tv.twitch.android.app-4.3.3-87-minAPI16.apk',
];

$domains = "ru\.|de\.es\.|eu\.|io\.|jp\.co\.|jp\.|me\.|net\.|org\.|se\.";
$regexp = "/^($domains)?([^-^_]+)[-_]((?:(?!([-_]minAPI)).)+)[-_](minAPI[^\.]+)/";

echo "<pre>";

$a_regexp = "/<a[^>]*>((?:(?!(<\/a>)).)+)<\/a>/";

preg_match($a_regexp, '<a href="href"><span style="color: green;">l</span><span style="color: blue;">o</span><span style="color: red;">g</span></a>', $m);

var_dump($m);

foreach($haystacks as $haystack){

    if(preg_match($regexp, $haystack, $matches))
    {
        $name = $matches[2];
        $version = $matches[3];
        $requirements = $matches[5];

        $name = str_replace('.', ' ', $name);

        $api = null;
        $architecture = null;
        $dpi = null;

        if(preg_match("/(minAPI[^(]+)([(]([^)]+)[)])?([(]([^)]+)[)])?/", $requirements, $supported)) {

            $api = $supported[1];

            if (strpos($supported[3], 'dpi')) {
                $dpi = $supported[3];
            } else {
                $architecture = $supported[3];
                $dpi = $supported[5];
            }
        }

        $soft = [
            'name' => $name,
            'version' => $version,
            'os' => [
                'api' => $api,
                'architecture' => split(',', $architecture),
                'dpi' => $dpi,
            ],
        ];

        var_dump($soft);

    } else {
        echo "$haystack\n";
    }
}