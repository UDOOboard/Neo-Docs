## Overview

UDOO NEO board ships with a custom build of vanilla Android operating system, the original **Android Open Source Project (AOSP)**. Like you may have noticed when you run Android for the first time, there is no trace of any [Google Mobile Services](http://www.google.com/mobile/) or applications such as Google Play Store, Gmail or others, usually known as **Google Apps**.

You can easily install Google Apps in the newest Android 6.0.1 Marshmallow for UDOO NEO using the `Install from zip` function of the [TWRP recovery](https://twrp.me/) we provide with the image.

First of all you need to download the `OpenGApps` package. You can download the package directly on the UDOO Android image running the `Browser` App.   
Navigate to [OpenGApps](http://opengapps.org) and download the right package version choosing:

 * **Platform**: `ARM`
 * **Android**: `6.0`
 * **Variant**: You can choose different variants depending on the apps you want to install. We usually use and test the `nano` variants that contains only Play Services, Play Store and few Apps to not overburdening the system.

<img style="width:600px; height:338px" src="../img/gapps_install_opengapps.png">   

Alternatively you can download GApps package on your external PC and copy it in Android using an USB Drive. When you connect an USB Drive you'll find the partition mounted in a folder like: `/mnt/media_rw/<Partition_Name>/`.  
Navigate in this folders with the App `CMFileManager` (the *Root Access* option is needed) and copy the package in the Android SD partition, for example in the path: `/storage/emulated/0/Download/`.

Once you have the .zip file in the Android SD card partition you can reboot the board in **Recovery Mode** to run the `TWRP recovery`.
You can find info about how to reboot the board in **Recovery Mode** reading the `Reboot in TWRP recovery` section of the [UDOO Android Settings](!Cookbook_Android/UDOO_Android_Settings) page.

<img style="width:600px; height:338px" src="../img/android_recovery_menu.jpg">   

Once the `TWRP recovery` is loaded, enter in the `Install` menu. Navigate the folder list on the left to find the open_gapps zip package downloaded and click on it.

<img style="width:600px; height:338px" src="../img/android_recovery_install_flash.jpg">   

You need to `Swipe to confirm Flash`. The procedure that install the GApps will start and will take few minutes. Once the procedure end  successful you can press the `Reboot System`.

<span class="label label-warning">Heads up!</span> The first time you reboot the system after GApps installation a Setup Wizard will start. The wizard will fail but this is an expected behavior(this Google wizard is through to be executed after a fresh Android installation). Just ignore the message by clicking `ok`.

At this point the Google Apps are installed in you system. You can check it navigate the App Menu. Enjoy.

<span class="label label-warning">Heads up!</span> The first time you reboot the system after GApps installation, and after you set a Google Account, the system could appear slowed because the Google Services and Apps are updating itselfs.   

<img style="width:600px; height:338px" src="../img/gapps_installed.png">
