## Requirements
A first condition to establish a SSH connection with your UDOO Neo is to have previously completed the tutorial about the
[USB Direct Connection](../Basic_Setup/Usb_Direct_Connection.html).
A second condition is to download and install an SSH Client for your system, like [Putty](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html)

## Connection via SSH
Once you have completed these steps, open your SSH client. For the sake of this example, we consider you're using PuTTY on Windows.
Opening PuTTY a window will ask you to specify the destination you want to connect to. In the first blank space, named *Host Name or IP address*, type `192.168.7.2`.

Eventually, a Windows Firewall popup could appear the first time you do this. If this happens, allow PuTTY to bypass the firewall.

When the connection succeeds, a black window will appear. That is the terminal. It will ask you to enter your login credential. Type `udooer`, then press "Enter".
A new line will appear:

    udooer@192.168.7.2's password:

Type `udooer` (if you did not change your default password using the [Web Control Panel](../Basic_Setup/Web_Control_Panel.html) yet, then press "Enter". Do not worry if you don't see what you type in the terminal: it's an expedient to hide your password to eventual onlookers.

At this point you can use your terminal:

```bash
login as: udooer
udooer@192.168.7.2's password:
Welcome to Ubuntu 14.04.3 LTS (GNU/Linux 3.14.56-udooneo-xxxxxxxxxx armv7l)

 * Documentation:  https://www.udoo.org/docs-neo/
Last login: Thu Jan  1 10:22:30 1970 from 192.168.7.1
udooer@udooneo:~$
```

Good job, mate: you are now connected to your UDOO Neo via SSH.
