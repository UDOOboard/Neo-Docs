Android has been ported to UDOO Neo.

## Technical specifications

Android for UDOO Neo is based on Android 5.1

SD card images can be downloaded from the [image section of the website](http://www.udoo.org/downloads/).

## Installation

Instructions to download and flash the SD card image are available on [this page](../Getting_Started/Create_a_bootable_MicroSD_card_for_UDOO_Neo.html).

## Development

UDOO Neo Android SD card image is generated automatically using the official Android build system.

Regarding the development environment, you need to first make sure to comply with the AOSP requirements. Note that it requires a 64-bit version of Linux. Follow this official link for [Establishing a Build Environment](https://source.android.com/source/initializing.html).

Building Lollipop version or above only requires to have OpenJDK v7.

    ~$ sudo apt-get install openjdk-7-jdk

In addition to the AOSP requirements, the following packages are needed to build Freescale components:

    ~$ sudo apt-get install uuid uuid-dev zip lzop gperf zlib1g-dev \
    liblz-dev liblzo2-2 liblzo2-dev u-boot-tools lib32z1 flex git-core \
    curl mtd-utils android-tools-fsutils

Next step is downloading the source code. To do so you need the repo tool which has been developed especially for Android in order to manage the hundreds of Git repositories this project contains:

    ~$ cd ~
    ~$ mkdir myandroid bin
    ~$ curl http://commondatastorage.googleapis.com/git-repo-downloads/repo > ~/bin/repo
    ~$ chmod a+x ~/bin/repo
    ~$ cd myandroid
    ~$ ~/bin/repo init -u https://github.com/UDOOboard/android_udoo_platform_manifest -b android-5.1.1
    ~$ ~/bin/repo sync -j5

N.B. the `repo sync` loads the repos needed. Therefore, it can take several hours to load. The `-jN` command run `N` job at the same time to speed up this process.

To compile source run the following commands:

    ~$ source build/envsetup.sh
    ~$ lunch udooneo_6sx-eng
    ~$ make -jN

N.B. In the `make` command substitute `N` with the number of available CPU cores of your building machine. This last command could take several hours.
