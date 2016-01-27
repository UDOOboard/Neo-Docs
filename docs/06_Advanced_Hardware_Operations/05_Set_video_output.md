## Install required package
The package is istalled by default in UDOObuntu distro greather or equals to RC1.
Otherwise be sure to be connected to Internet and type in a terminal:

``` bash
sudo apt-get install dtweb
```

If it's not at lastest version plaese update the system.

``` bash
sudo apt-get update
sudo apt-get upgrade
```


## Get current output
Open a terminal and run this command as super user:

``` bash
sudo udooscreenctl get
```

to get current output device. Possible outputs are:
- hdmi
- lvds7
- headless


## Set hdmi output
Open a terminal and run this command as super user:

``` bash
sudo udooscreenctl set hdmi
```


## Set lvds 7 inches panel output
Open a terminal and run this command as super user:

``` bash
sudo udooscreenctl set lvds7
```


## Set as headless device - no output
Open a terminal and run this command as super user:

``` bash
sudo udooscreenctl set headless
```
