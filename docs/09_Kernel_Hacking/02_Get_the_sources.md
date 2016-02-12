## Install git
If you do not have git installed, ppen a terminal and type:

    sudo apt-get update
    sudo apt-get install git


## Get kernel sources
Create a develop folder

    mkdir udooneo-dev
    cd udooneo-dev

then download the sources:

    git clone https://github.com/UDOOboard/linux_kernel
    cd linux_kernel


The default branch `3.14-1.0.x-udoo` is the one where we are working on for the UDOO NEO. It is based on 3.14.56 Freescale community kernel.

