## Requirement
A first condition to establish a SSH connection with your UDOO Neo is to have previously completed the tutorial about the 
[USB Direct Connection](http://www.udoo.org/docs-neo/Basic_Setup/Usb_Direct_Connection.html).
A second condition is to download and install an SSH Client for your system, like [Putty](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html)
Once you have completed these steps, open your SSH client. For the sake of this example, we consider you're using PuTTY. 
If you're using PuTTY a window, named PuTTY Configuration, will pop up, asking you to specify the destination you want to connect to.
In the first blank space, named "Host Name or IP address", type: 
192.168.7.2
Eventually, a new window with red words could appear the first time you do this, talking about a firewall. If this happens just repeat the process until you manage to take over this step.
A black window, that is the terminal, will appear, asking you to enter your login credential. Type "udooer", then press "Enter".
A new line will appear, saying: "udooer@192.168.7.2's password:"
You should type "udooer", then press "Enter". Do not worry if you don't see what you type in the terminal: it's an expedient to hide your password to eventual onlookers.
At this point on your terminal you should read:

"login as: udooer
udooer@192.168.7.2's password:
Welcome to Ubuntu 14.04.3 LTS (GNU/Linux 3.14.28-udooneo-04196-gb15f827 armv7l)

 * Documentation:  https://help.ubuntu.com/
Last login: Thu Jan  1 09:28:03 1970 from 192.168.7.1
udooer@sclerotime:~$ ^C
udooer@sclerotime:~$ ^C
udooer@sclerotime:~$"

Good job, mate: you are now connected to your UDOO Neo via SSH.
