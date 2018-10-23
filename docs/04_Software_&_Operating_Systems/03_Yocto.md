Yocto is an unofficial distribution for UDOO boads.
It is developed maintained by the community, almost entirely by [Christian Ege](https://github.com/graugans) who also started the porting of Yocto for UDOO boards.
For problems you may encounter with this distribution your go-to place is the [Yocto Subforum](https://www.udoo.org/forum/forums/yocto.46/) in UDOO Forum
Also, Christian Ege is aso a [user](https://www.udoo.org/forum/members/graugans.37591/) of the UDOO Forum, as well as admin of the Yocto Subforum.

## What is Yocto
The Yocto Project is a Linux Foundation workgroup whose goal is to produce tools and processes that will enable the creation of Linux
distributions for embedded software that are independent of the underlying architecture of the embedded software itself.
The project was announced by the Linux Foundation in 2010.
In March 2011, the project aligned itself with OpenEmbedded, an existing framework with similar goals, with the result being The OpenEmbedded-Core Project.
The Yocto Project is an open source project whose focus is on improving the software development process for embedded Linux distributions.
The Yocto Project provides interoperable tools, metadata, and processes that enable the rapid, repeatable development of Linux-based embedded systems.

## Project Scope
The Yocto Project has the aim and objective of attempting to improve the lives of developers of customised Linux systems supporting the ARM, MIPS, PowerPC and x86/x86 64 architectures. A key part of this is an open source build system, based around the OpenEmbedded architecture, that enables developers to create their own Linux distribution specific to their environment.
This reference implementation of OpenEmbedded is called Poky.
There are several other sub-projects under the project umbrella which include EGLIBC, pseudo, cross-prelink, Eclipse integration, ADT/SDK, the matchbox suite of applications, and many others. One of the central goals of the project is interoperability among these tools.
The project offers different sized targets from "tiny" to fully featured images which are configurable and customisable by the end user. The project encourages interaction with upstream projects and has contributed heavily to OpenEmbedded-Core and BitBake as well as to numerous upstream projects, including the Linux kernel.[citation needed] The resulting images are typically useful in systems where embedded Linux would be used, these being single-use focused systems or systems without the usual screens/input devices associated with desktop Linux systems.
As well as building Linux systems, there is also an ability to generate a toolchain for cross compilation and a software development kit (SDK) tailored to their own distribution, also referred to as the Application Developer Toolkit (ADT). The project tries to be software and vendor agnostic. Thus, for example, it is possible to select which package manager format to use (deb, rpm, or ipk).
Within builds, there are options for various build-time sanity/regression tests, and also the option to boot and test certain images under QEMU to validate the build.

## UDOO Neo
Here you can find the [Open Embedded meta-layer for UDOO boards] (https://github.com/graugans/meta-udoo).  

Follow the instructions in the README of the github project to know how to use it.  
Thanks to *graugans* for his work.
