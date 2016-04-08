Android has been ported to UDOO Neo.

## Technical specifications

Android for UDOO Neo is based on Android 5.1

SD card images can be downloaded from the [image section of the website](http://www.udoo.org/downloads/).

## Installation

Instructions to download and flash the SD card image are available on [this page](../Getting_Started/Create_A_Bootable_MicroSD_card_for_UDOO_Neo.html).

## Development

UDOO Neo Android SD card image is generated automatically using the official Android build system. Download the sources from our GitHub repo:

    cd ~
    mkdir myandroid bin
    curl http://commondatastorage.googleapis.com/git-repo-downloads/repo > ~/bin/repo
    chmod a+x ~/bin/repo
    cd myandroid
    ~/bin/repo init -u https://github.com/UDOOboard/android_udoo_platform_manifest -b android-5.1.1
    ~/bin/repo sync
