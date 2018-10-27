avrdude: stk500v2_getsync(): timeout communicating with programmer
avrdude: stk500v2_command(): failed miserably to execute command 0x1d
avrdude: stk500v2_cmd(): failed to send command
avrdude: stk500v2_ReceiveMessage(): timeout
avrdude: stk500v2_ReceiveMessage(): timeout
Dimensione del file binario dello sketch: 46.944 bytes (su un massimo di 258.048 bytes)
avrdude: stk500v2_ReceiveMessage(): timeout
avrdude: stk500v2_cmd(): short reply, len = 0
avrdude: stk500v2_ReceiveMessage(): timeout
avrdude: stk500v2_ReceiveMessage(): timeout
avrdude: stk500v2_cmd(): short reply, len = 0
Dimensione del file binario dello sketch: 46.944 bytes (su un massimo di 258.048 bytes)
Dimensione del file binario dello sketch: 46.944 bytes (su un massimo di 258.048 bytes)

[2]+  Completato              arduino
┌─[pi@hammer][mer apr 25 - 22:25:07][temp=46.5'C][Usr: 1]:~ :)
└─$: sudo reboot
Connection to hammer.servebeer.com closed by remote host.
Connection to hammer.servebeer.com closed.
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y  pi@hammer.servebeer.com -p 82
   .~~.   .~~.
  '. \ ' ' / .'	   _   _
   .~ .~~~..~.	  | | | | __ _ _ __ ___  _ __ ___   ___ _ __
  : .~.'~'.~. :	  | |_| |/ _` | '_ ` _ \| '_ ` _ \ / _ \ '__|
 ~ (   ) (   ) ~  |  _  | (_| | | | | | | | | | | |  __/ |
( : '~'.~.'~' : ) |_| |_|\__,_|_| |_| |_|_| |_| |_|\___|_|
 ~ .~ (   ) ~. ~  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  (  : '~' :  )   ...Noi uccidiamo e moriamo contemporaneamente...
   '~ .~~~. ~'	  ...Noi creiamo e risorgiamo con i nostri sogni.
       '~'	  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

********************************************************************
*       Unauthorized access to this machine is prohibited          *
*       Press <Ctrl-D> if you are not an authorized user           *
*                                                                  *
* This system is for the use of authorized users only.  Usage of   *
* this system may be monitored and recorded by system personnel.   *
*                                                                  *
* Anyone using this system expressly consents to such monitoring   *
* and is advised that if such monitoring reveals possible          *
* evidence of criminal activity, system personnel may provide the  *
* evidence from such monitoring to law enforcement officials.      *
*                                                                  *
********************************************************************
pi@hammer.servebeer.com's password: 
Warning: No xauth data; using fake authentication data for X11 forwarding.
Motd...
Last login: Wed Apr 25 20:52:18 2018 from broadcom.home

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
┃                                                                    ┃
┃       ⋱⋱ ⋰⋰        _   _                                           ┃
┃       ◖ • ◗       | | | | __ _ _ __ ___  _ __ ___   ___ _ __       ┃
┃      ◖ • • ◗      | |_| |/ _` | `_ ` _ \| `_ ` _ \ / _ \ `__|      ┃
┃       ◖ • ◗       |  _  | (_| | | | | | | | | | | |  __/ |         ┃
┃         ●         |_| |_|\__,_|_| |_| |_|_| |_| |_|\___|_|         ┃
┃                                                                    ┃
┃                         Welcome back, pi!                          ┃
┃        Bari, giovedì, 26 aprile 2018, 09:33:24, 22°C, Sunny        ┃
┃                                                                    ┃
┃  Last Login....: mercoledì, 25 aprile 2018, 20:52:00 (broadcom.home)┃
┃  Uptime........: 0 days, 11 hours, 7 minutes (25-04-2018 22:25:26) ┃
┃  Memory........: Total: 465MB, Used: 430MB, Free: 35MB             ┃
┃  Home space....: Total: 30GB, Used: 3,8GB, Free: 25GB              ┃
┃  Temperature...: 41.2ºC                                            ┃
┃                                                                    ┃
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛
┌─[pi@hammer][gio apr 26 - 09:33:26][temp=42.2'C][Usr: 1]:~ :)
└─$: arduino&
[2] 3258
┌─[pi@hammer][gio apr 26 - 09:33:32][temp=41.2'C][Usr: 1]:~ :)
└─$: Dimensione del file binario dello sketch: 46.944 bytes (su un massimo di 258.048 bytes)
packet_write_wait: Connection to 151.26.109.142 port 82: Broken pipe
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y  pi@hammer.servebeer.com -p 82
^C
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y  pi@hammer.servebeer.com -p 82
^C
MacBook-Pro-di-Andrea:httrack Mastro$ history |grep screen
  497  history |grep screen
  498  screen /dev/cu.hammer-SerialPort 115200
  499  screen /dev/cu.hammer-SerialPort-1 115200
  500  screen /dev/cu.hammer-SerialPort-1 115200
  532  screen /dev/cu.hammer-SerialPort-1 115200
  541  history |grep screen
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y  pi@hammer.servebeer.com -p 82
ssh: connect to host hammer.servebeer.com port 82: Operation timed out
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y  pi@192.168.1.17 -p 82
ssh: connect to host 192.168.1.17 port 82: Connection refused
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y  pi@192.168.1.17 -p 22
   .~~.   .~~.
  '. \ ' ' / .'	   _   _
   .~ .~~~..~.	  | | | | __ _ _ __ ___  _ __ ___   ___ _ __
  : .~.'~'.~. :	  | |_| |/ _` | '_ ` _ \| '_ ` _ \ / _ \ '__|
 ~ (   ) (   ) ~  |  _  | (_| | | | | | | | | | | |  __/ |
( : '~'.~.'~' : ) |_| |_|\__,_|_| |_| |_|_| |_| |_|\___|_|
 ~ .~ (   ) ~. ~  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  (  : '~' :  )   ...Noi uccidiamo e moriamo contemporaneamente...
   '~ .~~~. ~'	  ...Noi creiamo e risorgiamo con i nostri sogni.
       '~'	  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

********************************************************************
*       Unauthorized access to this machine is prohibited          *
*       Press <Ctrl-D> if you are not an authorized user           *
*                                                                  *
* This system is for the use of authorized users only.  Usage of   *
* this system may be monitored and recorded by system personnel.   *
*                                                                  *
* Anyone using this system expressly consents to such monitoring   *
* and is advised that if such monitoring reveals possible          *
* evidence of criminal activity, system personnel may provide the  *
* evidence from such monitoring to law enforcement officials.      *
*                                                                  *
********************************************************************
pi@192.168.1.17's password: 

MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y  pi@hammer.servebeer.com -p 82
ssh: connect to host hammer.servebeer.com port 82: Operation timed out
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y  pi@hammer.servebeer.com -p 82
Warning: Permanently added the ECDSA host key for IP address '[151.26.67.188]:82' to the list of known hosts.
   .~~.   .~~.
  '. \ ' ' / .'	   _   _
   .~ .~~~..~.	  | | | | __ _ _ __ ___  _ __ ___   ___ _ __
  : .~.'~'.~. :	  | |_| |/ _` | '_ ` _ \| '_ ` _ \ / _ \ '__|
 ~ (   ) (   ) ~  |  _  | (_| | | | | | | | | | | |  __/ |
( : '~'.~.'~' : ) |_| |_|\__,_|_| |_| |_|_| |_| |_|\___|_|
 ~ .~ (   ) ~. ~  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  (  : '~' :  )   ...Noi uccidiamo e moriamo contemporaneamente...
   '~ .~~~. ~'	  ...Noi creiamo e risorgiamo con i nostri sogni.
       '~'	  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

********************************************************************
*       Unauthorized access to this machine is prohibited          *
*       Press <Ctrl-D> if you are not an authorized user           *
*                                                                  *
* This system is for the use of authorized users only.  Usage of   *
* this system may be monitored and recorded by system personnel.   *
*                                                                  *
* Anyone using this system expressly consents to such monitoring   *
* and is advised that if such monitoring reveals possible          *
* evidence of criminal activity, system personnel may provide the  *
* evidence from such monitoring to law enforcement officials.      *
*                                                                  *
********************************************************************
pi@hammer.servebeer.com's password: 

MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 26 apr 2018, 19:48:06]
Last login: Thu Apr 26 19:48:05 on ttys002
You have new mail.
Restored session: Gio 26 Apr 2018 19:40:59 CEST
MacBook-Pro-di-Andrea:httrack Mastro$ ssh root@andreajatta.it
root@andreajatta.it's password: 
Linux vm0128.cs03.seeweb.it 2.6.32-bpo.5-amd64 #1 SMP Wed Jul 20 09:10:04 UTC 2011 x86_64

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Wed Feb 21 17:05:26 2018 from 151.26.92.110
root@vm0128:~# cd /var/www/vhosts/andreajatta.it/httpdocs/sitemap/  
root@vm0128:/var/www/vhosts/andreajatta.it/httpdocs/sitemap# ls
changelog.txt  default.conf        howto-install.pdf  license.html  mds1/   runcrawl.php
data/          documentation.html  index.php          mds/          pages/
root@vm0128:/var/www/vhosts/andreajatta.it/httpdocs/sitemap# ls -a
./   .DS_Store      data/         documentation.html  index.php     mds/   pages/
../  changelog.txt  default.conf  howto-install.pdf   license.html  mds1/  runcrawl.php
root@vm0128:/var/www/vhosts/andreajatta.it/httpdocs/sitemap# ls -alth
total 492K
drwxr-xr-x  6 andreajatta.it psacln  4.0K Apr 28 12:09 ./
drwxr-xr-x  2 andreajatta.it psacln     6 Apr 28 12:09 mds1/
drwxrwxrwx  2 andreajatta.it psacln  4.0K Apr 28 12:06 data/
drwxrwxrw-  2 root           root      62 Apr 27 16:11 mds/
-rw-r--r--  1 andreajatta.it psacln  2.1K Apr 24 12:09 runcrawl.php
-rw-r--r--  1 andreajatta.it psacln  410K Apr 24 12:08 howto-install.pdf
-rw-r--r--  1 andreajatta.it psacln  3.3K Apr 24 12:08 license.html
-rw-r--r--  1 andreajatta.it psacln  6.1K Apr 24 12:08 index.php
-rw-r--r--  1 andreajatta.it psacln   14K Apr 24 12:08 documentation.html
-rw-r--r--  1 andreajatta.it psacln  4.7K Apr 24 12:08 default.conf
-rw-r--r--  1 andreajatta.it psacln   11K Apr 24 12:08 changelog.txt
-rw-r--r--  1 andreajatta.it psacln  8.1K Apr 24 12:08 .DS_Store
drwxr-xr-x  3 andreajatta.it psacln  4.0K Apr 11 21:34 pages/
drwxr-xr-x 28 andreajatta.it psaserv 4.0K Apr 11 21:34 ../
root@vm0128:/var/www/vhosts/andreajatta.it/httpdocs/sitemap# chown -R andreajatta.it psacln mds/
chown: cannot access `psacln': No such file or directory
[Exit 1]
root@vm0128:/var/www/vhosts/andreajatta.it/httpdocs/sitemap# chown -R andreajatta.it:psacln mds/
root@vm0128:/var/www/vhosts/andreajatta.it/httpdocs/sitemap# packet_write_wait: Connection to 85.94.221.226 port 22: Broken pipe
You have new mail in /var/mail/Mastro
MacBook-Pro-di-Andrea:httrack Mastro$ 

  [Ripristinato: 19 mag 2018, 09:37:55]
Last login: Sat May 19 09:37:54 on ttys002
You have new mail.
Restored session: Sab 19 Mag 2018 09:31:48 CEST
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 22 mag 2018, 12:58:47]
Last login: Tue May 22 12:58:46 on ttys001
You have new mail.
Restored session: Mar 22 Mag 2018 12:56:37 CEST
MacBook-Pro-di-Andrea:httrack Mastro$ history |grep screen
  497  history |grep screen
  498  screen /dev/cu.hammer-SerialPort 115200
  499  screen /dev/cu.hammer-SerialPort-1 115200
  500  screen /dev/cu.hammer-SerialPort-1 115200
  532  screen /dev/cu.hammer-SerialPort-1 115200
  541  history |grep screen
  548  history |grep screen
You have new mail in /var/mail/Mastro
MacBook-Pro-di-Andrea:httrack Mastro$ screen /dev/cu.hammer-SerialPort-1 115200
[screen is terminating]
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 28 mag 2018, 16:43:12]
Last login: Mon May 28 16:43:11 on ttys000
You have new mail.
Restored session: Lun 28 Mag 2018 13:15:37 CEST
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 31 mag 2018, 13:56:32]
Last login: Thu May 31 13:56:31 on ttys001
You have new mail.
Restored session: Gio 31 Mag 2018 13:55:20 CEST
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 20 giu 2018, 19:20:35]
Last login: Wed Jun 20 19:20:33 on ttys001
You have new mail.
Restored session: Mer 20 Giu 2018 15:43:20 CEST
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 26 giu 2018, 18:10:40]
Last login: Tue Jun 26 18:10:39 on ttys001
You have new mail.
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 31 lug 2018, 04:00:49]
Last login: Tue Jun 26 18:10:41 on ttys004
You have mail.
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 03 ago 2018, 17:34:23]
Last login: Fri Aug  3 17:34:21 on ttys001
You have mail.
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 13 ago 2018, 18:05:59]
Last login: Mon Aug 13 18:05:54 on ttys000
You have mail.
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 30 ago 2018, 02:49:14]
Last login: Mon Aug 13 18:06:00 on ttys004
You have mail.
Restored session: Gio 30 Ago 2018 02:48:29 CEST
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 15 set 2018, 11:07:32]
Last login: Sat Sep 15 11:07:31 on ttys000
You have mail.
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 15 ott 2018, 12:48:03]
Last login: Mon Oct 15 12:48:01 on ttys001
You have mail.
Restored session: Lun 15 Ott 2018 12:46:41 CEST
MacBook-Pro-di-Andrea:httrack Mastro$ 
  [Ripristinato: 15 ott 2018, 12:58:22]
Last login: Mon Oct 15 12:58:12 on console
You have mail.
Restored session: Lun 15 Ott 2018 12:56:37 CEST
MacBook-Pro-di-Andrea:httrack Mastro$ ssh pi@raspberrypi.local
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@       WARNING: POSSIBLE DNS SPOOFING DETECTED!          @
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
The ECDSA host key for raspberrypi.local has changed,
and the key for the corresponding IP address fe80::3e49:7a25:f23d:81a2%en0
is unknown. This could either mean that
DNS SPOOFING is happening or the IP address for the host
and its host key have changed at the same time.
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@    WARNING: REMOTE HOST IDENTIFICATION HAS CHANGED!     @
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
IT IS POSSIBLE THAT SOMEONE IS DOING SOMETHING NASTY!
Someone could be eavesdropping on you right now (man-in-the-middle attack)!
It is also possible that a host key has just been changed.
The fingerprint for the ECDSA key sent by the remote host is
SHA256:7igj7qflNhCc6zgVGw1O3TLa2ItvqBOv9agSw2iOy28.
Please contact your system administrator.
Add correct host key in /Users/Mastro/.ssh/known_hosts to get rid of this message.
Offending ECDSA key in /Users/Mastro/.ssh/known_hosts:74
ECDSA host key for raspberrypi.local has changed and you have requested strict checking.
Host key verification failed.
You have mail in /var/mail/Mastro
MacBook-Pro-di-Andrea:httrack Mastro$ ssh pi@raspberrypi.local
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@       WARNING: POSSIBLE DNS SPOOFING DETECTED!          @
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
The ECDSA host key for raspberrypi.local has changed,
and the key for the corresponding IP address fe80::3e49:7a25:f23d:81a2%en0
is unknown. This could either mean that
DNS SPOOFING is happening or the IP address for the host
and its host key have changed at the same time.
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@    WARNING: REMOTE HOST IDENTIFICATION HAS CHANGED!     @
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
IT IS POSSIBLE THAT SOMEONE IS DOING SOMETHING NASTY!
Someone could be eavesdropping on you right now (man-in-the-middle attack)!
It is also possible that a host key has just been changed.
The fingerprint for the ECDSA key sent by the remote host is
SHA256:7igj7qflNhCc6zgVGw1O3TLa2ItvqBOv9agSw2iOy28.
Please contact your system administrator.
Add correct host key in /Users/Mastro/.ssh/known_hosts to get rid of this message.
Offending ECDSA key in /Users/Mastro/.ssh/known_hosts:74
ECDSA host key for raspberrypi.local has changed and you have requested strict checking.
Host key verification failed.
MacBook-Pro-di-Andrea:httrack Mastro$ sudo vi /Users/Mastro/.ssh/known_hosts
Password:
MacBook-Pro-di-Andrea:httrack Mastro$ sudo vi +74  /Users/Mastro/.ssh/known_hosts
MacBook-Pro-di-Andrea:httrack Mastro$ ssh pi@raspberrypi.local
The authenticity of host 'raspberrypi.local (fe80::3e49:7a25:f23d:81a2%en0)' can't be established.
ECDSA key fingerprint is SHA256:7igj7qflNhCc6zgVGw1O3TLa2ItvqBOv9agSw2iOy28.
Are you sure you want to continue connecting (yes/no)? yes
Warning: Permanently added 'raspberrypi.local,fe80::3e49:7a25:f23d:81a2%en0' (ECDSA) to the list of known hosts.
pi@raspberrypi.local's password: 
Linux raspberrypi 4.14.71+ #1145 Fri Sep 21 15:06:38 BST 2018 armv6l

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Thu Oct 25 19:23:07 2018 from 192.168.1.11
pi@raspberrypi:~ $ ls
Desktop    Downloads  MagPi  pcf8574   Public        RaspController  testrelaysi2c.cpp  Videos
Documents  i2crelay   Music  Pictures  python_games  Templates       testrelaysi2c.py   warberry
pi@raspberrypi:~ $ cd /boot/
pi@raspberrypi:/boot $ ls
bcm2708-rpi-0-w.dtb     bcm2709-rpi-2-b.dtb       bootcode.bin   fixup_cd.dat  issue.txt         LICENSE.oracle  start.elf
bcm2708-rpi-b.dtb       bcm2710-rpi-3-b.dtb       cmdline.txt    fixup.dat     kernel7.img       overlays        start_x.elf
bcm2708-rpi-b-plus.dtb  bcm2710-rpi-3-b-plus.dtb  config.txt     fixup_db.dat  kernel.img        start_cd.elf
bcm2708-rpi-cm.dtb      bcm2710-rpi-cm3.dtb       COPYING.linux  fixup_x.dat   LICENCE.broadcom  start_db.elf
pi@raspberrypi:/boot $ sudo vi config.txt 
pi@raspberrypi:/boot $ htop
pi@raspberrypi:/boot $ sudo reboot
Connection to raspberrypi.local closed by remote host.
Connection to raspberrypi.local closed.
MacBook-Pro-di-Andrea:httrack Mastro$ ssh pi@raspberrypi.local
pi@raspberrypi.local's password: 
Linux raspberrypi 4.14.71+ #1145 Fri Sep 21 15:06:38 BST 2018 armv6l

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Fri Oct 26 19:39:24 2018 from fe80::1c22:8f69:6226:b8fc%wlan0
pi@raspberrypi:~ $ vcgencmd measure_clock cpu
frequency(0)=0
pi@raspberrypi:~ $ vcgencmd measure_clock
error=2 error_msg="Invalid arguments"
pi@raspberrypi:~ $ vcgencmd measure_clock arm
frequency(45)=1100114000
pi@raspberrypi:~ $ \
> > for src in arm core h264 isp v3d uart pwm emmc pixel vec hdmi dpi ; do \
-bash: errore di sintassi vicino al token non atteso "do"
pi@raspberrypi:~ $ >     echo -e "$src:\t$(vcgencmd measure_clock $src)" ; \
> > done
-bash: -e: comando non trovato
pi@raspberrypi:~ $ \
> for src in arm core h264 isp v3d uart pwm emmc pixel vec hdmi dpi ; do \
>     echo -e "$src:\t$(vcgencmd measure_clock $src)" ; \
> done
arm:	frequency(45)=1100000000
core:	frequency(1)=400000000
h264:	frequency(28)=300000000
isp:	frequency(42)=300000000
v3d:	frequency(43)=300000000
uart:	frequency(22)=0
pwm:	frequency(25)=0
emmc:	frequency(47)=200000000
pixel:	frequency(29)=74250000
vec:	frequency(10)=0
hdmi:	frequency(9)=163683000
dpi:	frequency(4)=0
pi@raspberrypi:~ $ sudo raspi
raspi-config  raspi-gpio    raspistill    raspivid      raspividyuv   raspiyuv      
pi@raspberrypi:~ $ sudo raspi
raspi-config  raspi-gpio    raspistill    raspivid      raspividyuv   raspiyuv      
pi@raspberrypi:~ $ sudo raspi-config 
Connection to raspberrypi.local closed by remote host.
Connection to raspberrypi.local closed.
MacBook-Pro-di-Andrea:httrack Mastro$ ssh pi@raspberrypi.local
pi@raspberrypi.local's password: 
Linux raspberrypi 4.14.71+ #1145 Fri Sep 21 15:06:38 BST 2018 armv6l

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Fri Oct 26 19:43:34 2018 from fe80::1c22:8f69:6226:b8fc%wlan0
pi@raspberrypi:~ $ exit
logout
Connection to raspberrypi.local closed.
MacBook-Pro-di-Andrea:httrack Mastro$ ping raspberrypi.local
PING raspberrypi.local (192.168.1.111): 56 data bytes
64 bytes from 192.168.1.111: icmp_seq=0 ttl=64 time=5.671 ms
64 bytes from 192.168.1.111: icmp_seq=1 ttl=64 time=6.560 ms
64 bytes from 192.168.1.111: icmp_seq=2 ttl=64 time=6.193 ms
^C
--- raspberrypi.local ping statistics ---
3 packets transmitted, 3 packets received, 0.0% packet loss
round-trip min/avg/max/stddev = 5.671/6.141/6.560/0.365 ms
MacBook-Pro-di-Andrea:httrack Mastro$ ssh pi@raspberrypi.local
pi@raspberrypi.local's password: 
Linux raspberrypi 4.14.71+ #1145 Fri Sep 21 15:06:38 BST 2018 armv6l

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Fri Oct 26 19:48:53 2018 from fe80::1c22:8f69:6226:b8fc%wlan0
pi@raspberrypi:~ $ sudo raspi-config 
Removed /etc/systemd/system/multi-user.target.wants/vncserver-x11-serviced.service.
Connection to raspberrypi.local closed by remote host.
Connection to raspberrypi.local closed.
MacBook-Pro-di-Andrea:httrack Mastro$ ssh pi@raspberrypi.local
pi@raspberrypi.local's password: 

MacBook-Pro-di-Andrea:httrack Mastro$ ssh pi@raspberrypi.local
pi@raspberrypi.local's password: 
Linux raspberrypi 4.14.71+ #1145 Fri Sep 21 15:06:38 BST 2018 armv6l

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Fri Oct 26 19:50:10 2018 from fe80::1c22:8f69:6226:b8fc%wlan0
pi@raspberrypi:~ $ sudo raspi-config 
Created symlink /etc/systemd/system/multi-user.target.wants/vncserver-x11-serviced.service → /usr/lib/systemd/system/vncserver-x11-serviced.service.
pi@raspberrypi:~ $ sudo raspi-config 
pi@raspberrypi:~ $ sudo raspi-config 
Connection to raspberrypi.local closed by remote host.
Connection to raspberrypi.local closed.
MacBook-Pro-di-Andrea:httrack Mastro$ ssh pi@raspberrypi.local
pi@raspberrypi.local's password: 
Linux raspberrypi 4.14.71+ #1145 Fri Sep 21 15:06:38 BST 2018 armv6l

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Fri Oct 26 19:52:04 2018 from fe80::1c22:8f69:6226:b8fc%wlan0
pi@raspberrypi:~ $ ^C
pi@raspberrypi:~ $ exit
logout
Connection to raspberrypi.local closed.
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y pi@raspberrypi.local
pi@raspberrypi.local's password: 
Warning: No xauth data; using fake authentication data for X11 forwarding.
Linux raspberrypi 4.14.71+ #1145 Fri Sep 21 15:06:38 BST 2018 armv6l

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Fri Oct 26 19:53:27 2018 from fe80::1c22:8f69:6226:b8fc%wlan0
pi@raspberrypi:~ $ arduino &
[1] 605
pi@raspberrypi:~ $ -bash: arduino: comando non trovato
sudo apt-get install arduino
Lettura elenco dei pacchetti... Fatto
Generazione albero delle dipendenze       
Lettura informazioni sullo stato... Fatto
The following additional packages will be installed:
  arduino-core avr-libc avrdude binutils-avr extra-xdg-menus gcc-avr libftdi1 libjna-java libjna-jni librxtx-java
Pacchetti suggeriti:
  arduino-mk avrdude-doc task-c-devel gcc-doc libjna-java-doc
I seguenti pacchetti NUOVI saranno installati:
  arduino arduino-core avr-libc avrdude binutils-avr extra-xdg-menus gcc-avr libftdi1 libjna-java libjna-jni librxtx-java
0 aggiornati, 11 installati, 0 da rimuovere e 0 non aggiornati.
È necessario scaricare 21,6 MB di archivi.
Dopo quest'operazione, verranno occupati 132 MB di spazio su disco.
Continuare? [S/n] 
Scaricamento di:1 http://archive.raspberrypi.org/debian stretch/main armhf binutils-avr armhf 2.26.20160125+Atmel3.6.1-1~rpt1 [1.024 kB]
Scaricamento di:2 http://raspbian.mirror.garr.it/mirrors/raspbian/raspbian stretch/main armhf extra-xdg-menus all 1.0-4 [12,7 kB]
Scaricamento di:3 http://raspbian.mirror.garr.it/mirrors/raspbian/raspbian stretch/main armhf libftdi1 armhf 0.20-4 [17,0 kB]
Scaricamento di:4 http://raspbian.mirror.garr.it/mirrors/raspbian/raspbian stretch/main armhf libjna-jni armhf 4.2.2-3 [43,4 kB]
Scaricamento di:5 http://raspbian.mirror.garr.it/mirrors/raspbian/raspbian stretch/main armhf libjna-java all 4.2.2-3 [171 kB]
Scaricamento di:7 http://archive.raspberrypi.org/debian stretch/main armhf gcc-avr armhf 1:5.4.0+Atmel3.6.1-1~rpt1 [13,1 MB]
Scaricamento di:6 http://raspbian.mirror.garr.it/mirrors/raspbian/raspbian stretch/main armhf librxtx-java armhf 2.2pre2-13 [167 kB]
Scaricamento di:8 http://raspbian.mirror.garr.it/mirrors/raspbian/raspbian stretch/main armhf arduino-core all 2:1.0.5+dfsg2-4.1 [649 kB]
Scaricamento di:9 http://raspbian.mirror.garr.it/mirrors/raspbian/raspbian stretch/main armhf arduino all 2:1.0.5+dfsg2-4.1 [1.191 kB]
Scaricamento di:10 http://archive.raspberrypi.org/debian stretch/main armhf avrdude armhf 6.3+r1425-1+rpt1 [284 kB]            
Scaricamento di:11 http://archive.raspberrypi.org/debian stretch/main armhf avr-libc all 1:2.0.0+Atmel3.6.1-1~rpt1 [4.912 kB]  
Recuperati 21,6 MB in 29s (726 kB/s)                                                                                           
Selezionato il pacchetto extra-xdg-menus non precedentemente selezionato.
(Lettura del database... 95401 file e directory attualmente installati.)
Preparativi per estrarre .../00-extra-xdg-menus_1.0-4_all.deb...
Estrazione di extra-xdg-menus (1.0-4)...
Selezionato il pacchetto libftdi1:armhf non precedentemente selezionato.
Preparativi per estrarre .../01-libftdi1_0.20-4_armhf.deb...
Estrazione di libftdi1:armhf (0.20-4)...
Selezionato il pacchetto libjna-jni non precedentemente selezionato.
Preparativi per estrarre .../02-libjna-jni_4.2.2-3_armhf.deb...
Estrazione di libjna-jni (4.2.2-3)...
Selezionato il pacchetto libjna-java non precedentemente selezionato.
Preparativi per estrarre .../03-libjna-java_4.2.2-3_all.deb...
Estrazione di libjna-java (4.2.2-3)...
Selezionato il pacchetto librxtx-java non precedentemente selezionato.
Preparativi per estrarre .../04-librxtx-java_2.2pre2-13_armhf.deb...
Estrazione di librxtx-java (2.2pre2-13)...
Selezionato il pacchetto binutils-avr non precedentemente selezionato.
Preparativi per estrarre .../05-binutils-avr_2.26.20160125+Atmel3.6.1-1~rpt1_armhf.deb...
Estrazione di binutils-avr (2.26.20160125+Atmel3.6.1-1~rpt1)...
Selezionato il pacchetto gcc-avr non precedentemente selezionato.
Preparativi per estrarre .../06-gcc-avr_1%3a5.4.0+Atmel3.6.1-1~rpt1_armhf.deb...
Estrazione di gcc-avr (1:5.4.0+Atmel3.6.1-1~rpt1)...
Selezionato il pacchetto avrdude non precedentemente selezionato.
Preparativi per estrarre .../07-avrdude_6.3+r1425-1+rpt1_armhf.deb...
Estrazione di avrdude (6.3+r1425-1+rpt1)...
Selezionato il pacchetto avr-libc non precedentemente selezionato.
Preparativi per estrarre .../08-avr-libc_1%3a2.0.0+Atmel3.6.1-1~rpt1_all.deb...
Estrazione di avr-libc (1:2.0.0+Atmel3.6.1-1~rpt1)...
Selezionato il pacchetto arduino-core non precedentemente selezionato.
Preparativi per estrarre .../09-arduino-core_2%3a1.0.5+dfsg2-4.1_all.deb...
Estrazione di arduino-core (2:1.0.5+dfsg2-4.1)...
Selezionato il pacchetto arduino non precedentemente selezionato.
Preparativi per estrarre .../10-arduino_2%3a1.0.5+dfsg2-4.1_all.deb...
Estrazione di arduino (2:1.0.5+dfsg2-4.1)...
Configurazione di librxtx-java (2.2pre2-13)...
Elaborazione dei trigger per mime-support (3.60)...
Elaborazione dei trigger per desktop-file-utils (0.23-1)...
Configurazione di extra-xdg-menus (1.0-4)...
Configurazione di libftdi1:armhf (0.20-4)...
Elaborazione dei trigger per libc-bin (2.24-11+deb9u3)...
Elaborazione dei trigger per man-db (2.7.6.1-2)...
Elaborazione dei trigger per shared-mime-info (1.8-1+deb9u1)...
Configurazione di binutils-avr (2.26.20160125+Atmel3.6.1-1~rpt1)...
Elaborazione dei trigger per gnome-menus (3.13.3-9)...
Configurazione di gcc-avr (1:5.4.0+Atmel3.6.1-1~rpt1)...
Elaborazione dei trigger per hicolor-icon-theme (0.15-1)...
Configurazione di libjna-jni (4.2.2-3)...
Configurazione di avrdude (6.3+r1425-1+rpt1)...
Configurazione di avr-libc (1:2.0.0+Atmel3.6.1-1~rpt1)...
Configurazione di libjna-java (4.2.2-3)...
Configurazione di arduino-core (2:1.0.5+dfsg2-4.1)...
Configurazione di arduino (2:1.0.5+dfsg2-4.1)...
Elaborazione dei trigger per libc-bin (2.24-11+deb9u3)...
[1]+  Uscita 127              arduino
pi@raspberrypi:~ $ arduino &
[1] 1476
pi@raspberrypi:~ $ vcgencmd measure_temp
temp=46.5'C
[1]+  Completato              arduino
pi@raspberrypi:~ $ sudo vi config.txt 
pi@raspberrypi:~ $ sudo vi /boot/config.txt 
pi@raspberrypi:~ $ sudo reboot
Connection to raspberrypi.local closed by remote host.
Connection to raspberrypi.local closed.
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y pi@raspberrypi.local
pi@raspberrypi.local's password: 
Warning: No xauth data; using fake authentication data for X11 forwarding.
Linux raspberrypi 4.14.71+ #1145 Fri Sep 21 15:06:38 BST 2018 armv6l

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Fri Oct 26 19:54:29 2018 from fe80::1c22:8f69:6226:b8fc%wlan0
pi@raspberrypi:~ $ sudo raspi-config 
^[[Cpi@raspberrypi:~ $ vncserver
VNC(R) Server 6.3.1 (r36657) ARMv6 (Jul 2 2018 13:40:28)
Copyright (C) 2002-2018 RealVNC Ltd.
RealVNC and VNC are trademarks of RealVNC Ltd and are protected by trademark
registrations and/or pending trademark applications in the European Union,
United States of America and other jurisdictions.
Protected by UK patent 2481870; US patent 8760366; EU patent 2652951.
See https://www.realvnc.com for information on VNC.
For third party acknowledgements see:
https://www.realvnc.com/docs/6/foss.html
OS: Linux 4.14.71+ armv6l

^C
pi@raspberrypi:~ $ sudo htop
pi@raspberrypi:~ $ 
pi@raspberrypi:~ $ ifconfig
lo: flags=73<UP,LOOPBACK,RUNNING>  mtu 65536
        inet 127.0.0.1  netmask 255.0.0.0
        inet6 ::1  prefixlen 128  scopeid 0x10<host>
        loop  txqueuelen 1000  (Local Loopback)
        RX packets 27  bytes 4972 (4.8 KiB)
        RX errors 0  dropped 0  overruns 0  frame 0
        TX packets 27  bytes 4972 (4.8 KiB)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0

wlan0: flags=4163<UP,BROADCAST,RUNNING,MULTICAST>  mtu 1500
        inet 192.168.1.111  netmask 255.255.255.0  broadcast 192.168.1.255
        inet6 fe80::3e49:7a25:f23d:81a2  prefixlen 64  scopeid 0x20<link>
        ether b8:27:eb:f1:e6:70  txqueuelen 1000  (Ethernet)
        RX packets 427  bytes 42329 (41.3 KiB)
        RX errors 0  dropped 0  overruns 0  frame 0
        TX packets 285  bytes 88538 (86.4 KiB)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0

pi@raspberrypi:~ $ arduino
pi@raspberrypi:~ $ sudo vi /boot/config.txt 
pi@raspberrypi:~ $ sudo reboot
Connection to raspberrypi.local closed by remote host.
Connection to raspberrypi.local closed.
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y pi@raspberrypi.local
pi@raspberrypi.local's password: 
Warning: No xauth data; using fake authentication data for X11 forwarding.
Linux raspberrypi 4.14.71+ #1145 Fri Sep 21 15:06:38 BST 2018 armv6l

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Fri Oct 26 20:02:49 2018 from fe80::1c22:8f69:6226:b8fc%wlan0
pi@raspberrypi:~ $ vcgencmd get_config int
aphy_params_current=547
arm_freq=1100
audio_pwm_mode=514
boot_delay=1
config_hdmi_boost=5
core_freq=400
disable_auto_turbo=1
disable_commandline_tags=2
display_hdmi_rotate=-1
display_lcd_rotate=-1
dphy_params_current=547
force_eeprom_read=1
force_pwm_open=1
force_turbo=1
framebuffer_ignore_alpha=1
framebuffer_swap=1
gpu_freq=300
hdmi_force_cec_address=65535
hdmi_force_hotplug=1
hdmi_group=2
hdmi_mode=85
ignore_lcd=1
init_uart_clock=0x2dc6c00
over_voltage=8
over_voltage_avs=0x249f0
pause_burst_frames=1
program_serial_random=1
sdram_freq=500
pi@raspberrypi:~ $ vcgencmd get_config int
aphy_params_current=547
arm_freq=1100
audio_pwm_mode=514
boot_delay=1
config_hdmi_boost=5
core_freq=400
disable_auto_turbo=1
disable_commandline_tags=2
display_hdmi_rotate=-1
display_lcd_rotate=-1
dphy_params_current=547
force_eeprom_read=1
force_pwm_open=1
force_turbo=1
framebuffer_ignore_alpha=1
framebuffer_swap=1
gpu_freq=300
hdmi_force_cec_address=65535
hdmi_force_hotplug=1
hdmi_group=2
hdmi_mode=85
ignore_lcd=1
init_uart_clock=0x2dc6c00
over_voltage=8
over_voltage_avs=0x249f0
pause_burst_frames=1
program_serial_random=1
sdram_freq=500
pi@raspberrypi:~ $ vcgencmd measure_temp
temp=43.3'C
pi@raspberrypi:~ $ vcgencmd measure_temp
temp=43.3'C
pi@raspberrypi:~ $ vcgencmd measure_temp
temp=40.1'C
pi@raspberrypi:~ $ vcgencmd measure_temp
temp=38.5'C
pi@raspberrypi:~ $ sudo halt
Connection to raspberrypi.local closed by remote host.
Connection to raspberrypi.local closed.
MacBook-Pro-di-Andrea:httrack Mastro$ ssh -Y pi@raspberrypi.local
pi@raspberrypi.local's password: 
Warning: No xauth data; using fake authentication data for X11 forwarding.
Linux raspberrypi 4.14.71+ #1145 Fri Sep 21 15:06:38 BST 2018 armv6l

The programs included with the Debian GNU/Linux system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent
permitted by applicable law.
Last login: Sat Oct 27 00:19:28 2018 from 192.168.1.100
pi@raspberrypi:~ $ vcgencmd measure_temp
temp=41.2'C
pi@raspberrypi:~ $ vcgencmd get_config int
aphy_params_current=547
arm_freq=1100
audio_pwm_mode=514
boot_delay=1
config_hdmi_boost=5
core_freq=400
disable_auto_turbo=1
disable_commandline_tags=2
display_hdmi_rotate=-1
display_lcd_rotate=-1
dphy_params_current=547
force_eeprom_read=1
force_pwm_open=1
force_turbo=1
framebuffer_ignore_alpha=1
framebuffer_swap=1
gpu_freq=300
hdmi_force_cec_address=65535
hdmi_force_hotplug=1
hdmi_group=2
hdmi_mode=85
ignore_lcd=1
init_uart_clock=0x2dc6c00
over_voltage=8
over_voltage_avs=0x249f0
pause_burst_frames=1
program_serial_random=1
sdram_freq=500
pi@raspberrypi:~ $ sudo apt-get update -y && sudo apt-get upgrade -y
Scaricamento di:1 http://archive.raspberrypi.org/debian stretch InRelease [25,3 kB]
Scaricamento di:2 http://raspbian.raspberrypi.org/raspbian stretch InRelease [15,0 kB]
Scaricamento di:3 http://raspbian.raspberrypi.org/raspbian stretch/main armhf Packages [11,7 MB]
Scaricamento di:4 http://archive.raspberrypi.org/debian stretch/main armhf Packages [181 kB]
Recuperati 11,9 MB in 49s (240 kB/s)                                                                                           
Lettura elenco dei pacchetti... Fatto
Lettura elenco dei pacchetti... Fatto
Generazione albero delle dipendenze       
Lettura informazioni sullo stato... Fatto
Calcolo dell'aggiornamento... Fatto
I seguenti pacchetti saranno aggiornati:
  python-rpi.gpio python3-rpi.gpio
2 aggiornati, 0 installati, 0 da rimuovere e 0 non aggiornati.
È necessario scaricare 46,9 kB di archivi.
Dopo quest'operazione, verranno occupati 0 B di spazio su disco.
Scaricamento di:1 http://archive.raspberrypi.org/debian stretch/main armhf python-rpi.gpio armhf 0.6.4~stretch-1 [23,4 kB]
Scaricamento di:2 http://archive.raspberrypi.org/debian stretch/main armhf python3-rpi.gpio armhf 0.6.4~stretch-1 [23,5 kB]
Recuperati 46,9 kB in 0s (143 kB/s)    
apt-listchanges: Lettura dei changelog...
(Lettura del database... 101845 file e directory attualmente installati.)
Preparativi per estrarre .../python-rpi.gpio_0.6.4~stretch-1_armhf.deb...
Estrazione di python-rpi.gpio (0.6.4~stretch-1) su (0.6.3~stretch-1)...
Preparativi per estrarre .../python3-rpi.gpio_0.6.4~stretch-1_armhf.deb...
Estrazione di python3-rpi.gpio (0.6.4~stretch-1) su (0.6.3~stretch-1)...
Configurazione di python3-rpi.gpio (0.6.4~stretch-1)...
Configurazione di python-rpi.gpio (0.6.4~stretch-1)...
pi@raspberrypi:~ $ vcgencmd measure_temp
temp=45.5'C
pi@raspberrypi:~ $ glances
You are using Glances version 2.7.1, however version 3.0.2 is available.
You should consider upgrading using: pip install --upgrade glances
pi@raspberrypi:~ $ pip install --upgrade glances
Collecting glances
  Downloading https://files.pythonhosted.org/packages/59/32/3bc36a9198998a4d73d5b19b02e0a59cde96fa1d8dccce05015a9b1929b7/Glances-3.0.2.tar.gz (6.2MB)
    100% |████████████████████████████████| 6.3MB 14kB/s 
Collecting psutil>=5.3.0 (from glances)
  Downloading https://files.pythonhosted.org/packages/7d/9a/1e93d41708f8ed2b564395edfa3389f0fd6d567597401c2e5e2775118d8b/psutil-5.4.7.tar.gz (420kB)
    100% |████████████████████████████████| 430kB 195kB/s 
Building wheels for collected packages: glances, psutil
  Running setup.py bdist_wheel for glances ... done
  Stored in directory: /home/pi/.cache/pip/wheels/b6/6b/89/359243b5a45e4e1d0b11e25ef47f32b153cabadc7b47ba3d95
  Running setup.py bdist_wheel for psutil ... done
  Stored in directory: /home/pi/.cache/pip/wheels/e2/9d/ea/1913d16f19bb927c32197308dec69cd8d10b61be8f7e265524
Successfully built glances psutil
Installing collected packages: psutil, glances
Successfully installed glances-3.0.2 psutil-5.4.7
pi@raspberrypi:~ $ glances
You are using Glances version 2.7.1, however version 3.0.2 is available.
You should consider upgrading using: pip install --upgrade glances
pi@raspberrypi:~ $ apachetop
-bash: apachetop: comando non trovato
pi@raspberrypi:~ $ cd /var/www/html/
pi@raspberrypi:/var/www/html $ ls
index.html  provarelays.php
pi@raspberrypi:/var/www/html $ vi provarelays.php 
pi@raspberrypi:/var/www/html $ /usr/sbin/i2cget -y 1 0x23
0xff
pi@raspberrypi:/var/www/html $ /usr/sbin/i2cget -y 1 0x23
Error: Read failed
pi@raspberrypi:/var/www/html $ vcgencmd measure_temp
temp=42.8'C
pi@raspberrypi:/var/www/html $ vcgencmd measure_temp
temp=42.2'C
pi@raspberrypi:/var/www/html $ vcgencmd measure_temp
temp=42.2'C
pi@raspberrypi:/var/www/html $ vcgencmd measure_temp
temp=41.7'C
pi@raspberrypi:/var/www/html $ vcgencmd measure_temp
temp=41.2'C
pi@raspberrypi:/var/www/html $ vcgencmd measure_temp
temp=42.8'C
pi@raspberrypi:/var/www/html $ vcgencmd measure_temp
temp=42.8'C
pi@raspberrypi:/var/www/html $ 
pi@raspberrypi:/var/www/html $ vcgencmd measure_temp
temp=42.8'C
pi@raspberrypi:/var/www/html $ vcgencmd measure_temp
temp=41.2'C
pi@raspberrypi:/var/www/html $ ls
index.html  provarelays.php
pi@raspberrypi:/var/www/html $ vi provarelays.php 
pi@raspberrypi:/var/www/html $ mkdir i2c_relays
pi@raspberrypi:/var/www/html $ ls
i2c_relays  index.html  provarelays.php
pi@raspberrypi:/var/www/html $ cd i2c_relays/
pi@raspberrypi:/var/www/html/i2c_relays $ git@github.com:Mas7ro/PHP-I2C-Relays-on-Rpi.git
-bash: git@github.com:Mas7ro/PHP-I2C-Relays-on-Rpi.git: File o directory non esistente
pi@raspberrypi:/var/www/html/i2c_relays $ git clone https://github.com/Mas7ro/PHP-I2C-Relays-on-Rpi.git
Cloning into 'PHP-I2C-Relays-on-Rpi'...
remote: Enumerating objects: 24, done.
remote: Counting objects: 100% (24/24), done.
remote: Compressing objects: 100% (23/23), done.
remote: Total 24 (delta 6), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (24/24), done.
pi@raspberrypi:/var/www/html/i2c_relays $ ls
PHP-I2C-Relays-on-Rpi
pi@raspberrypi:/var/www/html/i2c_relays $ rm PHP-I2C-Relays-on-Rpi/
rm: impossibile rimuovere 'PHP-I2C-Relays-on-Rpi/': È una directory
pi@raspberrypi:/var/www/html/i2c_relays $ rm -r PHP-I2C-Relays-on-Rpi/
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/81/d87e0ef682679fdcff76ea53358047d721b8ef'? y       
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/12/7fcc925b57b624f93506be3ab0d22b31ef7882'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/57/505fe88153a7a412fa4bc2fd2c264191e7b7f0'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/57/7325610a69930a488340b82c9e166eed14dd59'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/4b/5459bfc4f44246842bbaa65eca79c90c8d1a6e'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/4b/35e21bd0062021ee6386b97d6e833f85a93abd'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/77/a152f9b18b031c0fc65bd4c4a842d06739a0b8'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/47/3db465118b3a125e6848eb32c5749864e1ba27'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/10/891009037e695e64ac9319d145a5ec86ac9fe3'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/9b/aeb4a95bfba1c5752402e7431546b4f95a64fc'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/ec/cdf5dc08ecf103f7675882377fcb331c3cd5fd'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/9f/5ffd719cc29306045ebe712e74fe2aae03eecd'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/cc/dea12a466652bb4f22ce3981d36df79bea4ef2'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/78/6ea4abfe45009850db65106a01e3bc905a4d65'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/65/045f6aa88de4e52c46f65b715f284134348e42'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/87/968f0e260c5b3829a6ccc0b2f37bb73ada7e8a'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/da/06fa6811810f2c0d39221e2ec64f2e93031e63'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/44/09ed7d7a1ee39746a99086f477ec3d9ed1aec3'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/02/b640a35aeaab8c510a3c7c650213ee46357481'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/02/1f1b75477523e84f5c608b4ab6137440cb9fa8'? y
rm: rimuovere il file regolare protetto dalla scrittura 'PHP-I2C-Relays-on-Rpi/.git/objects/ca/2af55e24e2acb53e575f2681af28131764365f'? y^C
pi@raspberrypi:/var/www/html/i2c_relays $ rm -r -y PHP-I2C-Relays-on-Rpi/
rm: opzione non valida -- "y"
Try 'rm --help' for more information.
pi@raspberrypi:/var/www/html/i2c_relays $ rm --help
Uso: rm [OPZIONE]... [FILE]...
Remove (unlink) the FILE(s).

  -f, --force           ignore nonexistent files and arguments, never prompt
  -i                    prompt before every removal
  -I                    prompt once before removing more than three files, or
                          when removing recursively; less intrusive than -i,
                          while still giving protection against most mistakes
      --interactive[=WHEN]  prompt according to WHEN: never, once (-I), or
                          always (-i); without WHEN, prompt always
      --one-file-system  quando rimuove ricorsivamente una gerarchia, salta ogni
                          directory che è su un file system differente da quello
                          indicato dall'argomento corrispondente della riga di comando
      --no-preserve-root  do not treat '/' specially
      --preserve-root   do not remove '/' (default)
  -r, -R, --recursive   remove directories and their contents recursively
  -d, --dir             remove empty directories
  -v, --verbose         explain what is being done
      --help     mostra questo aiuto ed esce
      --version  stampa le informazioni sulla versione ed esce

In modo predefinito, rm non rimuove le directory. Usare l'opzione --recursive
(-r o -R) per rimuovere ogni directory elencata, insieme ai suoi contenuti.

To remove a file whose name starts with a '-', for example '-foo',
use one of these commands:
  rm -- -foo

  rm ./-foo

Notare che se si usa rm per rimuovere un file, potrebbe essere possibile recuperare
parte del suo contenuto, avendo sufficiente esperienza e tempo. Per avere maggiori garanzie
che il contenuto sia veramente irrecuperabile, si valuti l'uso di shred.

GNU coreutils online help: <http://www.gnu.org/software/coreutils/>
Segnalare i bug di traduzione di rm a <tp@lists.linux.it>
Full documentation at: <http://www.gnu.org/software/coreutils/rm>
or available locally via: info '(coreutils) rm invocation'
pi@raspberrypi:/var/www/html/i2c_relays $ rm -rf PHP-I2C-Relays-on-Rpi/
pi@raspberrypi:/var/www/html/i2c_relays $ ls
pi@raspberrypi:/var/www/html/i2c_relays $ cd ..
pi@raspberrypi:/var/www/html $ rm -rf i2c_relays/
pi@raspberrypi:/var/www/html $ cd i2c_relays/
-bash: cd: i2c_relays/: File o directory non esistente
pi@raspberrypi:/var/www/html $ vi provarelays.php 
pi@raspberrypi:/var/www/html $ vi provarelays.php 
pi@raspberrypi:/var/www/html $ hist
-bash: hist: comando non trovato
pi@raspberrypi:/var/www/html $ history 
    1  ls
    2  history 
    3  history
    4  sudo raspi-config 
    5  sudo halt
    6  i2cdetect -y 1
    7  ./pcf8574
    8  i2cset -y 1 0x23 0x0
    9  i2cset -y 1 0x23 0x1
   10  i2cset -y 1 0x23 0x2
   11  i2cset -y 1 0x23 0x3
   12  i2cset -y 1 0x23 0x4
   13  i2cset -y 1 0x23 0x5
   14  i2cset -y 1 0x23 0x6
   15  i2cset -y 1 0x23 0x7
   16  i2cset -y 1 0x23 0x8
   17  i2cset -y 1 0x23 0x9
   18  i2cset -y 1 0x23 0x10
   19  i2cset -y 1 0x23 0x11
   20  sudo halt
   21  sudo /etc/init.d/apache2 restart
   22  sudo apt-get install lynx
   23  lynx 127.0.0.1
   24  i2cset -y 1 0x23 0x10
   25  i2cset -y 1 0x23 0x11
   26  pwd
   27  /opt/vc/bin/vcgencmd measure_temp
   28  ls
   29  pcf
   30  ./pcf8574 
   31  vi testrelaysi2c.cpp 
   32  history |grep gcc
   33  history |grep testrelaysi2c.cpp 
   34  g++ pcf8574.cpp -o pcf8574 -lwiringPi -std=c++11
   35  g++ testrelaysi2c.cpp -o pcf8574 -lwiringPi -std=c++11
   36  ./pcf8574 
   37  lsmod | grep i2c_
   38  sudo halt
   39  ./pcf8574 
   40  /opt/vc/bin/vcgencmd measure_temp
   41  ls
   42  sudo https://github.com/secgroundzero/warberry.git
   43  sudo git clone https://github.com/secgroundzero/warberry.git
   44  ls
   45  cd warberry/
   46  ls
   47  sudo bash setup.sh
   48  cd ..
   49  ls
   50  cd ..
   51  cd pi/warberry/
   52  ls
   53  iwconfig
   54  Sudo python warberry.py –I wlan0
   55  sudo python warberry.py –I wlan0
   56  sudo python warberry.py -I wlan0
   57  ls
   58  cd Re
   59  cd Results/
   60  ls
   61  cd ..
   62  ls
   63  cd Reporting/
   64  ls
   65  lynx ./index.html 
   66  cd
   67  ls
   68  ./pcf8574 
   69  sudo halt
   70  mysql -u root
   71  ./pcf8574 
   72  sudo halt
   73  ls
   74  cd /boot/
   75  ls
   76  sudo vi config.txt 
   77  htop
   78  sudo reboot
   79  vcgencmd measure_clock cpu
   80  vcgencmd measure_clock
   81  vcgencmd measure_clock arm
   82  > for src in arm core h264 isp v3d uart pwm emmc pixel vec hdmi dpi ; do \
   83  >     echo -e "$src:\t$(vcgencmd measure_clock $src)" ; > done
   84  for src in arm core h264 isp v3d uart pwm emmc pixel vec hdmi dpi ; do     echo -e "$src:\t$(vcgencmd measure_clock $src)" ; done
   85  sudo raspi-config 
   86  exit
   87  sudo raspi-config 
   88  exit
   89  arduino &
   90  sudo apt-get install arduino
   91  arduino &
   92  vcgencmd measure_temp
   93  sudo vi config.txt 
   94  sudo vi /boot/config.txt 
   95  sudo reboot
   96  sudo raspi-config 
   97  vncserver
   98  sudo htop
   99  ifconfig
  100  arduino
  101  sudo vi /boot/config.txt 
  102  sudo reboot
  103  sudo apt-get install glances
  104  glances
  105* 
  106  vcgencmd get_config int
  107  vcgencmd measure_temp
  108  sudo halt
  109  vcgencmd measure_temp
  110  vcgencmd get_config int
  111  sudo apt-get update -y && sudo apt-get upgrade -y
  112  vcgencmd measure_temp
  113  glances
  114  pip install --upgrade glances
  115  glances
  116  apachetop
  117  cd /var/www/html/
  118  ls
  119  vi provarelays.php 
  120  /usr/sbin/i2cget -y 1 0x23
  121  vcgencmd measure_temp
  122  ls
  123  vi provarelays.php 
  124  mkdir i2c_relays
  125  ls
  126  cd i2c_relays/
  127  git@github.com:Mas7ro/PHP-I2C-Relays-on-Rpi.git
  128* git clone https://github.com/Mas7ro/PHP-I2C-Relays-on-Rpi.git 
  129  ls
  130  rm PHP-I2C-Relays-on-Rpi/
  131  rm -r PHP-I2C-Relays-on-Rpi/
  132  rm -r -y PHP-I2C-Relays-on-Rpi/
  133  rm --help
  134  rm -rf PHP-I2C-Relays-on-Rpi/
  135  ls
  136  cd ..
  137  rm -rf i2c_relays/
  138  cd i2c_relays/
  139  vi provarelays.php 
  140  hist
  141  history 
pi@raspberrypi:/var/www/html $ i2cset -y 1 0x23 0x0
pi@raspberrypi:/var/www/html $ i2cset -y 1 0x23 0x0
pi@raspberrypi:/var/www/html $ i2cset -y 1 0x23 0xff
pi@raspberrypi:/var/www/html $ i2cset -y 1 0x23 0x0
pi@raspberrypi:/var/www/html $ vi provarelays.php 

                $changedValue = ( 0 == $arrRelays[ $toggle ] ) ? '1' : '0';
                $arrRelays = array_replace( [], $arrRelays, [ $toggle => $changedValue ] );
                $newrelaystatus = base_convert(implode( $arrRelays ), 2, 16 );
                shell_exec( 'i2cset -y 1 0x23 0x' . $newrelaystatus );
                }
                // !!!!! change 0x23 with I2C addres of your relays board
                caricastatorelays();
                header( 'Location: ' . $_SERVER[ 'PHP_SELF' ] ); // make a redirect to empty post data. in case of reload of the page i don't wont to re-toggle last action
        }
        ?>
        <br>
<table>
<tr>
        <td>

        <?php

        foreach ( $arrRelays as $key => $valore )
        {   //create a form for every relay and his button
                echo( "<p><form  method='post' style='width: 300px;margin: 0mx;'>" );
                $color = ( 0 == $valore ) ? '#f009' : '#fff';
                echo( '<input type="submit" name="ID" id="' . $key . '" style="background-color:' . $color . '" value="Relay ' . ( $key + 1 ) . '">' );
                echo( "</form></p>" );
        }
?>
</td>
<td>
<p><form  method='post' style='width: 300px;margin: 0mx;'>
<input type="submit" name="ID" id="" style="background-color:''" value="OnAll">
</form></p>
<p><form  method='post' style='width: 300px;margin: 0mx;'>
<input type="submit" name="ID" id="" style="background-color:''" value="OffAll">
</form></p>

</td>
</tr>
        <br>
</body>
</html>
