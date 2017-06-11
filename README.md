# YeePHP
PHP Page to control YeeCLI.
Primarily built to allow the control of Yee bulbs via an HTTP call in HA-Bridge

# Requirements

* YeeCLI - https://pypi.python.org/pypi/yeecli
* Yeelights or bulbs in developer mode
* PHP 7

# To Do 
* Status page
* Database to hold bulbs and simplify 

# Usage

* Turn On Bulb - http://<IPADDRESS>/yeephp.php?bulb=192.168.x.x&action=turn%20on
* Turn Off Bulb - http://<IPADDRESS>/yeephp.php?bulb=192.168.x.x&action=turn%20off
* Control Brightness - http://<IPADDRESS>/yeephp.php?bulb=192.168.x.x&action=brightness%2050