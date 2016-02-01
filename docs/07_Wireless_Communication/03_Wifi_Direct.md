# Wi-Fi Direct

According to the Texas Instrument forum, "Failed to update rate sets in kernel module" is a related to an old hostapd version. 
Thus, in order to get the Access Point up and running you have to upgrade hostapd to v2.6-devel and also build the libnl again.

After turning the wlan interface off for the network manager it is going to work.
Below you can find all steps, as well as configuration files.

<a href="http://udoo.org/forum/attachments/softap-zip.340/" target="_blank">http://udoo.org/forum/attachments/softap-zip.340/</a>

<strong>WARNING</strong>: this is a temporary solution to this problem. We are working to integrate this solution in future builds.
