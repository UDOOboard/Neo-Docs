# Boot process

The A9 core at boot load the uboot in RAM memory. Uboot address is stored into an internal ROM.
First of all Uboot loads th uEnv, witch is a plain text file located in first partition. It override uboot environment parameters.
Through various script located in environment variables, Uboot loads the dtb file, sets command line kernel arguments. 

## SD Description
The boot drive it's organized as follow:
* Free unpartitioned space: 1MB
* a FAT partition: 32MB called "boot"
* Filesystem is in a EXT3 partition
