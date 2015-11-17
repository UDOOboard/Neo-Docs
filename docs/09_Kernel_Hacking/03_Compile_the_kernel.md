# Compile the kernel

Go to the kernel sources directory.
``` bash
cd udooneo-dev/linux_kernel
```

## Install required packages

``` bash 
sudo apt-get install gawk wget git-core diffstat unzip texinfo gcc-multilib build-essential chrpath socat libsdl1.2-dev xterm picocom
```

``` bash
sudo apt-get install gcc-arm-linux-gnueabihf lzop
```
## Load UDOO NEO defconfig file

``` bash
make udoo_neo_defconfig ARCH=arm
```

## Compile sources

``` bash
make zImage -j 5 ARCH=arm CROSS_COMPILE=arm-linux-gnueabihf-
```
Operation can take about 5/15 minutes, depending on your PC host or VM configuration.

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

## Compile dts

``` bash
make dtbs -j 5 ARCH=arm CROSS_COMPILE=arm-linux-gnueabihf-
```

## Compile modules


``` bash
make modules -j 5 ARCH=arm CROSS_COMPILE=arm-linux-gnueabihf-
```
