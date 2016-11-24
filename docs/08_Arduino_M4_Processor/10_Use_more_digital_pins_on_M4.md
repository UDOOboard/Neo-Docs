As described in this section, all the processor features (gpio, adc, spi, i2c…) can theoretically assigned to both cores.

For example is possible to assign to M4 core, more than 14 gpio as by default.

To do this we need to modify the muxing configuration of both cores.

First of all we need modify the device tree configuration to recompile the dtb, to avoid to assign these pins to A9.
Than we can assign this pins to the M4 and connect it to Arduino Libraries.

## A9 operations

To recompile the kernel please follow this guide to set up the kernel compiling enviroment.

After that i’ll explain how the gpios configuration dts is organized.

In the file imx6sx-udoo-neo-external.dtsi are listed all the external pins that can be used as gpio by the linux kernel. As you see some of the macros are commented.

``` bash
&iomuxc {
    imx6x-udoo-neo {
        // External Pinout GPIOs
        external_hog: hoggrp-2 {
            fsl,pins = <
                MX6SX_PAD_NAND_DATA06__GPIO4_IO_10 0x80000000    // {{external-gpio-16}}
                MX6SX_PAD_NAND_DATA07__GPIO4_IO_11 0x80000000    // {{external-gpio-17}}
                MX6SX_PAD_SD4_DATA6__GPIO6_IO_20 0x80000000    // {{external-gpio-18}}
                MX6SX_PAD_SD4_DATA7__GPIO6_IO_21 0x80000000    // {{external-gpio-19}}
                MX6SX_PAD_SD4_CLK__GPIO6_IO_12 0x80000000    // {{external-gpio-20}}
                MX6SX_PAD_SD4_CMD__GPIO6_IO_13 0x80000000    // {{external-gpio-21}}
                MX6SX_PAD_SD4_RESET_B__GPIO6_IO_22 0x80000000    // {{external-gpio-22}}
                MX6SX_PAD_CSI_PIXCLK__GPIO1_IO_24 0x80000000    // {{external-gpio-23}}

                MX6SX_PAD_CSI_VSYNC__GPIO1_IO_25 0x80000000    // {{external-gpio-24}}
                MX6SX_PAD_CSI_HSYNC__GPIO1_IO_22 0x80000000    // {{external-gpio-25}}
                MX6SX_PAD_CSI_DATA00__GPIO1_IO_14 0x80000000    // {{external-gpio-26}}
                MX6SX_PAD_CSI_DATA01__GPIO1_IO_15 0x80000000    // {{external-gpio-27}}
                MX6SX_PAD_CSI_DATA02__GPIO1_IO_16 0x80000000    // {{external-gpio-28}}
                MX6SX_PAD_CSI_DATA03__GPIO1_IO_17 0x80000000    // {{external-gpio-29}}
                MX6SX_PAD_CSI_DATA04__GPIO1_IO_18 0x80000000    // {{external-gpio-30}}
                MX6SX_PAD_CSI_DATA05__GPIO1_IO_19 0x80000000    // {{external-gpio-31}}
                MX6SX_PAD_CSI_DATA06__GPIO1_IO_20 0x80000000    // {{external-gpio-32}}
                MX6SX_PAD_CSI_DATA07__GPIO1_IO_21 0x80000000    // {{external-gpio-33}}

                //MX6SX_PAD_USB_H_STROBE__GPIO7_IO_11 0x80000000    // {{external-gpio-34}}
                //MX6SX_PAD_USB_H_DATA__GPIO7_IO_10 0x80000000    // {{external-gpio-35}}
                MX6SX_PAD_SD4_DATA3__GPIO6_IO_17 0x80000000    // {{external-gpio-36}}
                MX6SX_PAD_SD4_DATA2__GPIO6_IO_16 0x80000000    // {{external-gpio-37}}
                MX6SX_PAD_SD4_DATA1__GPIO6_IO_15 0x80000000    // {{external-gpio-38}}
                MX6SX_PAD_SD4_DATA0__GPIO6_IO_14 0x80000000    // {{external-gpio-39}}

                MX6SX_PAD_QSPI1A_SS1_B__GPIO4_IO_23 0x80000000    // {{external-gpio-40}}
                MX6SX_PAD_QSPI1B_DQS__GPIO4_IO_28 0x80000000    // {{external-gpio-41}}
                MX6SX_PAD_QSPI1B_SS1_B__GPIO4_IO_31 0x80000000    // {{external-gpio-42}}
                MX6SX_PAD_QSPI1A_DQS__GPIO4_IO_20 0x80000000    // {{external-gpio-43}}
                MX6SX_PAD_GPIO1_IO07__GPIO1_IO_7 0x80000000    // {{external-gpio-44}}
                MX6SX_PAD_GPIO1_IO06__GPIO1_IO_6 0x80000000    // {{external-gpio-45}}
                //MX6SX_PAD_GPIO1_IO05__GPIO1_IO_5 0x80000000    // {{external-gpio-46}}
                //MX6SX_PAD_GPIO1_IO04__GPIO1_IO_4 0x80000000    // {{external-gpio-47}}
            >;
        };
``` 

This is just because these pins are used as:

I2C-4 connected also to internal 9axis motion sensor
``` bash
//MX6SX_PAD_USB_H_STROBE__GPIO7_IO_11 0x80000000    // {{external-gpio-34}}
//MX6SX_PAD_USB_H_DATA__GPIO7_IO_10   0x80000000    // {{external-gpio-35}}
```

UART-1 debug serial
``` bash
//MX6SX_PAD_GPIO1_IO05__GPIO1_IO_5    0x80000000    // {{external-gpio-46}}
//MX6SX_PAD_GPIO1_IO04__GPIO1_IO_4    0x80000000    // {{external-gpio-47}}
```

So we need to comment all the lines that we need to use by the M4 core.

Eg.
If we want to use all the gpio pins closer to UART1 we can comment all the block
``` bash
// MX6SX_PAD_USB_H_STROBE__GPIO7_IO_11 0x80000000   // {{external-gpio-34}}
// MX6SX_PAD_USB_H_DATA__GPIO7_IO_10   0x80000000   // {{external-gpio-35}}
// MX6SX_PAD_SD4_DATA3__GPIO6_IO_17    0x80000000   // {{external-gpio-36}}
// MX6SX_PAD_SD4_DATA2__GPIO6_IO_16    0x80000000   // {{external-gpio-37}}
// MX6SX_PAD_SD4_DATA1__GPIO6_IO_15    0x80000000   // {{external-gpio-38}}
// MX6SX_PAD_SD4_DATA0__GPIO6_IO_14    0x80000000   // {{external-gpio-39}}
```

Ok?

Otherwise, if we are sure that we don’t need any gpio pin from A9 core we can remove the whole block from another file, without touching imx6sx-udoo-neo-external.dtsi.

Open imx6sx-udoo-neo.dtsi and remove the &external_hog reference.

``` bash
&iomuxc {
    pinctrl-names = "default";
    pinctrl-0 = <&pinctrl_hog &external_hog>;

    imx6x-udoo-neo { 
[ ... ]
```

becomes

``` bash
&iomuxc {
    pinctrl-names = "default";
    pinctrl-0 = <&pinctrl_hog>;

    imx6x-udoo-neo { 
[ ... ]
```

Save and close the file an than recompile al the dts files.
Then copy all of them into the /boot/dts folder in your UDOOBuntu  microSD.


Arduino M4 side
To assign all the gpio (digitalOutputs) to M4 cores you need to open edit two files contained on the UDOObuntu filesystem, also directly from UDOO NEO.

These are:
``` bash
/usr/share/arduino/hardware/UDOO/solox/variants/udooneo/wiring_digital.h
/usr/share/arduino/hardware/UDOO/solox/variants/udooneo/wiring_digital.c
```

### wiring_digital.h
In this file we only need to change a define containing the maximum number of gpio.

``` bash
#define ARD_NMAX_DIO  14
```

to be changed depending the number of added gpio. If you add 2 gpio it must be 16.

``` bash
#define ARD_NMAX_DIO  16
```

### wiring_digital.c
Then upgrathe this table with correct pin mux end pin control macros.

``` bash
// Default Arduino pins
#define ARD_DIO0                    (LWGPIO_PORT4 | LWGPIO_PIN10)
#define ARD_DIO0_MUX_GPIO            (LWGPIO_MUX_PORT4_PIN10_GPIO)
#define ARD_DIO1                    (LWGPIO_PORT4 | LWGPIO_PIN11)
#define ARD_DIO1_MUX_GPIO            (LWGPIO_MUX_PORT4_PIN11_GPIO)
#define ARD_DIO2                    (LWGPIO_PORT4 | LWGPIO_PIN8)
#define ARD_DIO2_MUX_GPIO            (LWGPIO_MUX_PORT4_PIN8_GPIO)
#define ARD_DIO3                    (LWGPIO_PORT5 | LWGPIO_PIN15)
#define ARD_DIO3_MUX_GPIO            (LWGPIO_MUX_PORT5_PIN15_GPIO)
#define ARD_DIO4                    (LWGPIO_PORT5 | LWGPIO_PIN14)
#define ARD_DIO4_MUX_GPIO            (LWGPIO_MUX_PORT5_PIN14_GPIO)
#define ARD_DIO5                    (LWGPIO_PORT5 | LWGPIO_PIN13)
#define ARD_DIO5_MUX_GPIO            (LWGPIO_MUX_PORT5_PIN13_GPIO)
#define ARD_DIO6                    (LWGPIO_PORT5 | LWGPIO_PIN12)
#define ARD_DIO6_MUX_GPIO            (LWGPIO_MUX_PORT5_PIN12_GPIO)
#define ARD_DIO7                    (LWGPIO_PORT5 | LWGPIO_PIN21)
#define ARD_DIO7_MUX_GPIO            (LWGPIO_MUX_PORT5_PIN21_GPIO)
#define ARD_DIO8                    (LWGPIO_PORT4 | LWGPIO_PIN9)
#define ARD_DIO8_MUX_GPIO            (LWGPIO_MUX_PORT4_PIN9_GPIO)
#define ARD_DIO9                    (LWGPIO_PORT5 | LWGPIO_PIN20)
#define ARD_DIO9_MUX_GPIO            (LWGPIO_MUX_PORT5_PIN20_GPIO)
#define ARD_DIO10                (LWGPIO_PORT4 | LWGPIO_PIN5)
#define ARD_DIO10_MUX_GPIO            (LWGPIO_MUX_PORT4_PIN5_GPIO)
#define ARD_DIO11                (LWGPIO_PORT4 | LWGPIO_PIN7)
#define ARD_DIO11_MUX_GPIO            (LWGPIO_MUX_PORT4_PIN7_GPIO)
#define ARD_DIO12                (LWGPIO_PORT4 | LWGPIO_PIN4)
#define ARD_DIO12_MUX_GPIO            (LWGPIO_MUX_PORT4_PIN4_GPIO)
#define ARD_DIO13                (LWGPIO_PORT4 | LWGPIO_PIN6)
#define ARD_DIO13_MUX_GPIO            (LWGPIO_MUX_PORT4_PIN6_GPIO)

// All gpios exported
#define ARD_DIO14                (LWGPIO_PORT1 | LWGPIO_PIN3)
#define ARD_DIO14_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN3_GPIO)
#define ARD_DIO15                (LWGPIO_PORT1 | LWGPIO_PIN2)
#define ARD_DIO15_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN2_GPIO)
#define ARD_DIO16                (LWGPIO_PORT4 | LWGPIO_PIN10)
#define ARD_DIO16_MUX_GPIO            (LWGPIO_MUX_PORT4_PIN10_GPIO)
#define ARD_DIO17                (LWGPIO_PORT4 | LWGPIO_PIN11)
#define ARD_DIO17_MUX_GPIO            (LWGPIO_MUX_PORT4_PIN11_GPIO)
#define ARD_DIO18                (LWGPIO_PORT6 | LWGPIO_PIN20)
#define ARD_DIO18_MUX_GPIO            (LWGPIO_MUX_PORT6_PIN20_GPIO)
#define ARD_DIO19                (LWGPIO_PORT6 | LWGPIO_PIN21)
#define ARD_DIO19_MUX_GPIO            (LWGPIO_MUX_PORT6_PIN21_GPIO)
#define ARD_DIO20                (LWGPIO_PORT6 | LWGPIO_PIN12)
#define ARD_DIO20_MUX_GPIO            (LWGPIO_MUX_PORT6_PIN12_GPIO)
#define ARD_DIO21                (LWGPIO_PORT6 | LWGPIO_PIN13)
#define ARD_DIO21_MUX_GPIO            (LWGPIO_MUX_PORT6_PIN13_GPIO)
#define ARD_DIO22                (LWGPIO_PORT6 | LWGPIO_PIN22)
#define ARD_DIO22_MUX_GPIO            (LWGPIO_MUX_PORT6_PIN22_GPIO)
#define ARD_DIO23                (LWGPIO_PORT1 | LWGPIO_PIN24)
#define ARD_DIO23_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN24_GPIO)
#define ARD_DIO24                (LWGPIO_PORT1 | LWGPIO_PIN25)
#define ARD_DIO24_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN25_GPIO)
#define ARD_DIO25                (LWGPIO_PORT1 | LWGPIO_PIN22)
#define ARD_DIO25_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN22_GPIO)
#define ARD_DIO26                (LWGPIO_PORT1 | LWGPIO_PIN14)
#define ARD_DIO26_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN14_GPIO)
#define ARD_DIO27                (LWGPIO_PORT1 | LWGPIO_PIN15)
#define ARD_DIO27_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN15_GPIO)
#define ARD_DIO28                (LWGPIO_PORT1 | LWGPIO_PIN16)
#define ARD_DIO28_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN16_GPIO)
#define ARD_DIO29                (LWGPIO_PORT1 | LWGPIO_PIN17)
#define ARD_DIO29_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN17_GPIO)
#define ARD_DIO30                (LWGPIO_PORT1 | LWGPIO_PIN18)
#define ARD_DIO30_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN18_GPIO)
#define ARD_DIO31                (LWGPIO_PORT1 | LWGPIO_PIN19)
#define ARD_DIO31_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN19_GPIO)
#define ARD_DIO32                (LWGPIO_PORT1 | LWGPIO_PIN20)
#define ARD_DIO32_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN20_GPIO)
#define ARD_DIO33                (LWGPIO_PORT1 | LWGPIO_PIN21)
#define ARD_DIO33_MUX_GPIO            (LWGPIO_MUX_PORT1_PIN21_GPIO)
#define ARD_DIO34                (LWGPIO_PORT7 | LWGPIO_PIN11)
#define ARD_DIO34_MUX_GPIO            (LWGPIO_MUX_PORT7_PIN11_GPIO)
#define ARD_DIO35                (LWGPIO_PORT7 | LWGPIO_PIN10)
#define ARD_DIO35_MUX_GPIO            (LWGPIO_MUX_PORT7_PIN10_GPIO)
```

Than you can add these define to this const array.

``` bash
const DioPinMap arduinoToMqx_Pin[ARD_NMAX_DIO] = {
        {ARD_DIO0,            ARD_DIO0_MUX_GPIO},            // 0
        {ARD_DIO1,            ARD_DIO1_MUX_GPIO},            // 1
        {ARD_DIO2,            ARD_DIO2_MUX_GPIO},            // 2
        {ARD_DIO3,            ARD_DIO3_MUX_GPIO},            // 3
        {ARD_DIO4,            ARD_DIO4_MUX_GPIO},            // 4
        {ARD_DIO5,            ARD_DIO5_MUX_GPIO},            // 5
        {ARD_DIO6,            ARD_DIO6_MUX_GPIO},            // 6
        {ARD_DIO7,            ARD_DIO7_MUX_GPIO},            // 7
        {ARD_DIO8,            ARD_DIO8_MUX_GPIO},            // 8
        {ARD_DIO9,            ARD_DIO9_MUX_GPIO},            // 9
        {ARD_DIO10,        ARD_DIO10_MUX_GPIO},        // 10
        {ARD_DIO11,        ARD_DIO11_MUX_GPIO},        // 11
        {ARD_DIO12,        ARD_DIO12_MUX_GPIO},        // 12
        {ARD_DIO13,        ARD_DIO13_MUX_GPIO},        // 13

        // Pins assigned to A9 (i2C-2)
         // {ARD_DIO14,         ARD_DIO14_MUX_GPIO},            // 14 SDA
        // {ARD_DIO15,        ARD_DIO15_MUX_GPIO},            // 15 SCL */

        {ARD_DIO16,        ARD_DIO16_MUX_GPIO},            // 16
        {ARD_DIO17,        ARD_DIO17_MUX_GPIO},            // 17
        {ARD_DIO18,        ARD_DIO18_MUX_GPIO},            // 18
        {ARD_DIO19,        ARD_DIO19_MUX_GPIO},            // 19
        {ARD_DIO20,        ARD_DIO20_MUX_GPIO},            // 20
        {ARD_DIO21,        ARD_DIO21_MUX_GPIO},            // 21
        {ARD_DIO22,        ARD_DIO22_MUX_GPIO},            // 22
        {ARD_DIO23,         ARD_DIO23_MUX_GPIO},            // 23

        {ARD_DIO24,        ARD_DIO24_MUX_GPIO},        // 24
        {ARD_DIO25,        ARD_DIO25_MUX_GPIO},        // 25
        {ARD_DIO26,        ARD_DIO26_MUX_GPIO},        // 26
        {ARD_DIO27,        ARD_DIO27_MUX_GPIO},        // 27
        {ARD_DIO28,         ARD_DIO28_MUX_GPIO},            // 28
        {ARD_DIO29,         ARD_DIO29_MUX_GPIO},            // 29
        {ARD_DIO30,         ARD_DIO30_MUX_GPIO},            // 30
        {ARD_DIO31,         ARD_DIO31_MUX_GPIO},            // 31 
        {ARD_DIO32,        ARD_DIO32_MUX_GPIO},        // 32
        {ARD_DIO33,        ARD_DIO33_MUX_GPIO},        // 33
        {ARD_DIO34,        ARD_DIO34_MUX_GPIO},        // 34
        {ARD_DIO35,        ARD_DIO35_MUX_GPIO},        // 35
};
```

ATTENTION: when you call Arduino methods 
``` bash
pinMode(X, <INPUT/OUTPUT> )
digitalWrite(X, <LOW/HIGH> )
digitalRead(X)
```

pin numbers ( x ) may differ from pcb.

If you added only the pin 16 gpio, you can access it calling digitalRead(14). Depending the position of the list.
