# PHP-I2C-Relays-on-Rpi
Php form to control 8 channel relays with Raspberry pi

# Activate i2c
First of all you need to activate i2c on Raspberry pi.
here how to do: https://diyprojects.io/activate-i2c-bus-raspberry-pi-3-zero/

# Hardware used
I built an I2C module with a port expander, I made a mistake wen i ordered it, I used a PCF8574AP instead of a PCF8574A, basically the difference lies in the fact that in the first 0 it is on and 1 is off, while in the second it is the inverse.
https://www.nxp.com/docs/en/data-sheet/PCF8574_PCF8574A.pdf

# Software
Is a simple php script that create 8 buttons to toggle 8 relays. It uses "shell_exec()" (http://php.net/manual/en/function.shell-exec.php) function to execute i2cget and i2cset command on the shell. i will implement a system to autorefresh the page.
