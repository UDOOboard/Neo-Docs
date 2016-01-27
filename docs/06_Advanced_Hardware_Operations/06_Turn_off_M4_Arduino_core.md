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


## Get M4 Arduino status at boot

``` bash
sudo udoom4ctl status
```


## Disable M4 Arduino core at boot

``` bash
sudo udoom4ctl disable
```

## Enable M4 Arduino core at boot

``` bash
sudo udoom4ctl enable
```


