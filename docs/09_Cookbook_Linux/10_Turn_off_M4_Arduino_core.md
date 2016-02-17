Sometimes it may be convenient to disable the M4 core. Doing this, all the devices normally used by M4 can be used under Linux from the A9 core.

Possible use cases for disabling the M4 core are:
 * you want to use of `A0`-`A5` analog inputs from Linux;
 * Arduino is not needed.


## Disable the M4 Arduino core

    sudo udoom4ctl disable


## Enable the M4 Arduino core

    sudo udoom4ctl enable

## Get the M4 Arduino core status

    sudo udoom4ctl status

