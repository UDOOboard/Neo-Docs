Enter in the kernel sources directory:

    cd udooneo-dev/linux_kernel


## Install the required packages

    sudo apt-get install gawk wget git-core diffstat unzip texinfo gcc-multilib \
         build-essential chrpath socat libsdl1.2-dev xterm picocom lzop \
         gcc-arm-linux-gnueabihf


## Load the default kernel configuration
UDOO Neo has a dedicated default kernel configuration that you can import with:

    ARCH=arm make udoo_neo_defconfig


## Compile sources
To build the kernel image, type:

    ARCH=arm CROSS_COMPILE=arm-linux-gnueabihf- make zImage -j5

You can safely tweak the `-jX` parameter. For instance, on quad core CPUs with two threads per core, you can use `-j8`.

The build can take several minutes, approximately from 2 to 15, depending on your PC host or VM configuration.

``` bash
  Kernel: arch/arm/boot/Image is ready
  LZO     arch/arm/boot/compressed/piggy.lzo
  CC      arch/arm/boot/compressed/decompress.o
  CC      arch/arm/boot/compressed/string.o
  SHIPPED arch/arm/boot/compressed/hyp-stub.S
  SHIPPED arch/arm/boot/compressed/lib1funcs.S
  SHIPPED arch/arm/boot/compressed/ashldi3.S
  SHIPPED arch/arm/boot/compressed/bswapsdi2.S
  AS      arch/arm/boot/compressed/hyp-stub.o
  AS      arch/arm/boot/compressed/lib1funcs.o
  AS      arch/arm/boot/compressed/ashldi3.o
  AS      arch/arm/boot/compressed/bswapsdi2.o
  AS      arch/arm/boot/compressed/piggy.lzo.o
  LD      arch/arm/boot/compressed/vmlinux
  OBJCOPY arch/arm/boot/zImage
  Kernel: arch/arm/boot/zImage is ready
```

## Compile Device Trees

    ARCH=arm CROSS_COMPILE=arm-linux-gnueabihf- make dtbs -j5


## Compile modules

    ARCH=arm CROSS_COMPILE=arm-linux-gnueabihf- make modules -j5


### Copy the kernel to the SD card

    BOOT_PARTITION=/path/to/boot-partition
    ROOT_PARTITION=/path/to/root-partition
    
    cp arch/arm/boot/zImage $BOOT_PARTITION
    cp arch/arm/boot/dts/\*.dtb $BOOT_PARTITION/dts
    ARCH=arm CROSS_COMPILE=arm-linux-gnueabihf- make firmware_install modules_install INSTALL_MOD_PATH=$ROOT_PARTITION

