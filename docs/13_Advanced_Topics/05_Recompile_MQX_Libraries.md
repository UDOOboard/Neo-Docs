The Arduino software stack runs on a base real-time operating system (RTOS) installed on the Cortex-M4 of i.MX 6SoloX. The RTOS is [MQX&trade;](http://www.nxp.com/products/software-and-tools/run-time-software/mqx-software-solutions/mqx-real-time-operating-system-rtos/mqx-classic-software-solutions:MQX#) from NXP.

This section help you to compile the [MQX&trade;](http://www.nxp.com/products/software-and-tools/run-time-software/mqx-software-solutions/mqx-real-time-operating-system-rtos/mqx-classic-software-solutions:MQX#) software stacks.

First of all you need to download and uncompress the [**MQX 4.1 for i.MX6SX**](https://community.nxp.com/external-link.jspa?url=http%3A%2F%2Fwww.freescale.com%2Fwebapp%2Fsps%2Fsite%2Fprod_summary.jsp%3Fcode%3DMQX) (Linux hosted). You need to have an NXP account to accept the license and download the source package.

<span class="label label-warning">Heads up!</span> Be sure to download this version `MQX RTOS for i.MX 6SoloX v4.1.0 releases and patches` specific for i.MX 6SoloX processor. You can download from the `Previous` section.

## Apply the UDOO patches

In this repo [udooneo_mqx41_patch](https://github.com/UDOOboard/udooneo_mqx41_patch) you can find the changes made on the MQX stack to make the UDOO NEO's M4 core behave like an Arduino.

Enter in the MQX source directory and clone the udoo patch.

    git clone https://github.com/UDOOboard/udooneo_mqx41_patch

Then apply patches to the sources.

    patch -p1 < ./udooneo_mqx41_patch/mqx4.1_udooneo.patch

## Compile MQX&trade;

### Compilation

Makefile are here:
 * to Compile:  Freescale_MQX_4_1_IMX6SX/build/imx6sx_sdb_m4/make/build_gcc_arm.sh,
 * to Clean:    Freescale_MQX_4_1_IMX6SX/build/imx6sx_sdb_m4/make/clean_gcc_arm.sh

### Compiler version

Version 4.8 doesn't let PWM works. Should be used version 4.9.

Should be edited `Freescale_MQX_4_1_IMX6SX/build/common/make/global.mak` setting the toolchain path depending of your configuration:

    TOOLCHAIN_ROOTDIR = /usr/local/gcc-arm-none-eabi-4_9-2014q4
