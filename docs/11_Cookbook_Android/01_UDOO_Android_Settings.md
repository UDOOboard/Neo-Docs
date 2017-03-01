## Overview

Since the 6.0 Marshmallow version, the UDOO Android distro comes with a custom `UDOO` section in Setting App to configure custom options for UDOO boards.

<img style="width:600px; height:338px" src="../img/android_setting/setting_udoo.png">   

In `General` you can find misc custom options to set video output, processor's governor and reboot Android in recovery.

## Select Video Output

In UDOO QUAD/DUAL you have three options as video output.

 * [LVDS 7"](http://shop.udoo.org/accessories/video-kit-7-touch-for-neo.html)
 * HDMI

The default one at boot is HDMI.

<img style="width:700px; height:281px" src="../img/android_setting/setting_udoo_vidout.png">

## Select the Processor's Governor

You can select a CPU governor among one of:

 * `conservative`: Dynamically switch between CPU(s) available if at 75% load.
 * `ondemand`: Dynamically switch between CPU(s) available if at 95% cpu load.
 * `userspace`:	Run the cpu at user specified frequencies.
 * `powersave`:	Run the cpu at the minimum frequency.
 * `interactive`: dynamically scales CPU clockspeed in response to the workload placed on the CPU by the user. Significantly more responsive than ondemand.
 * `performance`:	Run the cpu at max frequency.

<img style="width:700px; height:281px" src="../img/android_setting/setting_udoo_gov.png">

## Reboot in TWRP recovery

Since Android 6.0 Marshmallow version the UDOO Android distro provides [TWRP recovery](https://twrp.me/).

Booting Android in Recovery mode allow you to install zip update packages. For example you can install the [Open GApps](http://opengapps.org/) packages to Google Play Services, Play Store and Google Apps.  

You can find an exhaustive guide of [how to install Gapps](!Cookbook_Android/How_To_Install_Gapps_On_UDOO_Running_Android) here.

<img src="../img/android_setting/setting_udoo_recovery.png">

Another way to boot the Android Distro in Recovery Mode is run the following command in the `U-Boot console` through the [Serial Connection](!Basic_Setup/Serial_Debug_Console):

    run recovery cmd

Alternatively you can use `adb` tools from you external PC using the command:

    adb reboot recovery
