The iMX 6soloX processor implements a 4 channel Video ADC block. Two of these channels are exported on the external pinout in the J12 JST connector.

Exported channels are:
* VADC_IN0
* VADC_IN1

## Schematics

<img style="width:800px;" src="../img/gionji/DOCS_vadc_sch.PNG">


## J12 Connector
The two video signals are available on the J12 connector, including a ground reference:

<img style="width:200px;" src="../img/gionji/DOCS_vadc_piamont.PNG">


## Connector signals
The signals related to the image below are:
* RED: analog Video Input channel 0
* GRAY: ground signals
* GREEN: analog Video Input channel 1

<img style="width:200px;" src="../img/gionji/DOCS_vadc_piamont2.PNG">


## How to create your connector
As soon as possible you'll be able to buy a specific cable on the shop.

For the moment it is possible to create an RCA cable as in the following picture. 
* External: ground
* Internal: signal

<img style="width:400px;" src="../img/gionji/DOCS_vadc_rca.PNG">

