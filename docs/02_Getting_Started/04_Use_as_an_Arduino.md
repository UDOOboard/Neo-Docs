All the **UDOO Neo** board versions are equipped with a NXP® iMX 6SoloX processor, which embeds on single chip an ARM Cortex-A9 and an ARM Cortex-M4 microcontroller. The Cortex-M4 allows easy access to a full-stack Arduino&trade; environment

To develop sketches for Arduino&trade; M4 cores we provide the same way to program Arduino&trade; Uno.
You can use the internal Arduino&trade; IDE preinstalled on UDOObuntu 2 running on the Cortex-A9 core of UDOO NEO, or connect the board and use the Arduino&trade; IDE running on external PC.

## Overview
Take a look at the [Arduino M4 Processor](../Arduino_M4_Processor/Overview.html) section to find all the information about the Arduino&trade; side of the UDOO NEO.

## Internal Arduino IDE
Follow the guide [Programming Arduino M4 from Internal Processor(Cortex-A9)](../Arduino_M4_Processor/Programming_Arduino_M4_from_Internal_Processor\(Cortex-A9\).html) to load a sketch on the Arduino M4 Processor from the Arduino&trade; IDE preinstalled on UDOOBuntu 2.

## External Arduino IDE
Follow the guide [Programming Arduino M4 Processor from External PC](../Arduino_M4_Processor/Programming_Arduino_M4_from_External_PC.html) to load a sketch on the Arduino M4 Processor from the Arduino&trade; IDE installed on your External PC.  
<span class="label label-warning">Heads up!</span>A microSD with a with UDOOBuntu2 have to be up and running to program the Arduino&trade; M4 from an external PC.

## Communication and examples

To learn more about the communication between the two SoloX cores take a look to the [Communication](../Arduino_M4_Processor/Communication.html) section.

You can find some example of how to make two software communicate through the two SoloX cores in the [Serial Libraries](../Serial_Libraries/index.html) section.
