## On-premises Surveillance with motion and owncloud, by ansible

This is the Ansible playbook for the camera surveillance system at one of our facilities.

### Hardware
- Intel(R) Core(TM)2 Duo CPU E6850 @ 3.00GHz
- 8GB RAM
- 2 pcs http://www.zoneminder.com/wiki/index.php/Kodicom_8800

### Software
- [Ubuntu 12.04](https://wiki.ubuntu.com/PrecisePangolin/)
- [motion](https://github.com/sackmotion/motion)
- [Owncloud](http://owncloud.org/)

## Usage
1. Insert two Kodicom 8800-based video capture cards into a computer
2. Install Ubuntu server with SSH server and a static IP address
3. Install [ansible](http://www.ansibleworks.com/docs/gettingstarted.html) on your workstation
4. Run ```ansible-playbook -k -K your-ip-address```
5. Open https://your-ip-address/owncloud to setup Owncloud

## Notes
* This playbook only configures 11 channels, as that's all we are using.
* files/thread1.conf is different from the rest, due to local conditions.
* Live cameras are found at https://your-ip-address:8081-8091
* See the [MotionGuide](http://www.lavrsen.dk/foswiki/bin/view/Motion/MotionGuide) for tweaking.
* See the [ZoneMinder HCL](http://www.zoneminder.com/wiki/index.php/Hardware_Compatibility_List) for other hardware.

## Copyright
Feel free to make use of this playbook for any purpose.

/ringe

http://voit.no
