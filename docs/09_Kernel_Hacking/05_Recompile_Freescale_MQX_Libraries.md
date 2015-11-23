# System overview
UDOO NEO microcontroller core is based on Cortex-M4 architecture. The manufacter Freescale provides a set of RealTime libraries dedicated to this architecture. Our team connect this low level code to the Arduino headers in order to manage this high performance code.

Is it possible for the users to improve our work downloading original MQX code, apply our patches and contribute to UDOO NEO development.

# Recompile Freescale MQX Libraries

Before start this guide you should prepare your [UDOO NEO Development Environment]().

[Freescale related guide](https://community.freescale.com/docs/DOC-104422)

## Install required packages

``` bash
sudo apt-get install gawk wget git-core diffstat unzip texinfo gcc-multilib build-essential chrpath socat libsdl1.2-dev xterm picocom  
```


## Download sources
Download the last MQX source code from [Freescale's website](http://www.freescale.com/webapp/sps/site/prod_summary.jsp?code=MQX#). I have used the 4.1.0 version in the tests. Do not forget to download the Linux version (*.gz).

## Download the compiler
[Download the gcc compiler 4.9 for 32 bit architecture](https://launchpad.net/gcc-arm-embedded/4.9/4.9-2014-q4-major/+download/gcc-arm-none-eabi-4_9-2014q4-20141203-linux.tar.bz2)

Download and install the required toolchain to compile the MQX application:

``` bash
$ cd udooneo-dev 
$ mkdir -p toolchain && cd toolchain  
$ wget https://launchpad.net/gcc-arm-embedded/4.9/4.9-2014-q4-major/+download/gcc-arm-none-eabi-4_9-2014q4-20141203-linux.tar.bz2
$ tar xfv gcc-arm-none-eabi-4_9-2014q4-20141203-linux.tar.bz2 && rm gcc-arm-none-eabi-4_9-2014q4-20141203-linux.tar.bz2 
```

## Compile the sources
Create a directory and decompress the source code:
``` bash
    $ cd udooneo-dev 
    $ mkdir -p mqx && cd mqx  
    $ tar xfv ~/Downloads/Freescale\ MQX\ RTOS\ 4.1.0\ for\ i.MX\ 6SoloX\ Linux\ Base.gz  
    $ ls  
    build config doc mcc mqx tools  
```

``` bash
    $ cd udooneo-dev/mqx/build/imx6sx_sdb_m4/make  
    $ export TOOLCHAIN_ROOTDIR=udooneo-dev/toolchain/gcc-arm-none-eabi-4_9-2014q4
    $ ./build_gcc_arm.sh  
```

# Apply patches
Clone the patch file into MQX sources root folder.

``` bash
cd udooneo-dev/mqx/
git clone https://github.com/UDOOboard/udooneo_mqx41_patch/
```

Then apply patches to the sources.

``` bash
patch -p1 < ./udooneo_mqx41_patch/mqx4.1_udooneo.patch
```
