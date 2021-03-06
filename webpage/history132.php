<?php header("Access-Control-Allow-Origin: *"); ?>
<html>
<body>
<font color="#14A692">Old version: </font>  <br/>
    <ul id="ordered">
		<li> 1.8 R1: 
		<ul id="ordered">
		<li>Corrected: Drag/drop and save list on web edit panel.</li>
		</ul></li>
		<li> 1.8 R0: 
		<ul id="ordered">
		<li>Added sys.ledpol command to tune the led polarity,</li>
		<li>Added volume control on the web pages by Ctrl arrow keys</li>
		<li>Please read https://github.com/karawin/Ka-Radio32/blob/master/HardwareConfig.md,</li>
		</ul></li>
		<li> 1.7 R0: 
		<ul id="ordered">
		<li>Added a Joystick device,</li>
		<li>Added the touch screen if the screen has it, with a sys.cali for calibration</li>
		<li>Added configuration of lcd type, lcd rotation, lcd tempo, date format in the hardware configuration partition</li>
		<li>Added the TZO on the setting page</li>
		<li>Please read https://github.com/karawin/Ka-Radio32/blob/master/HardwareConfig.md,</li>
		</ul></li>		
	<li> 1.6 R4: 
		<ul id="ordered">
		<li>Web page look changed (a bit),</li>
		<li>A bug for the vs1053 removed,</li>
		<li>If IR keys are defined in csv, the default keys are ignored.</li>
		</ul></li>		
	<li> 1.6 R3: 
		<ul id="ordered">
		<li>Web update improved,</li>
		<li>Corrected: I2C crash when SDA or SCL = 255,</li>
		 <li> Station name and genre on lcd was sometime not good,</li>
		<li>  Rotary change when pushed was not working,</li>
		<li>  A bug on error counter on stream reception was not resetted.</li>
		<li>   Happy new year 2019.</li>
		</ul></li>
	<li>1.6 R2:
		<ul id="ordered">
		<li> AAC decoding for wrover model (may be unstable), </li>
		<li>Treble for vs1053 corrected,</li>
		<li>Changed cpu speed to 240MHz for AAC,</li>
		<li>Little correction for color lcd.</li>
		</ul></li>
	<li>1.6 R1: 
		<ul id="ordered">
		<li>Optimized B/W code: more free heap,</li>
		<li>mDNS hostname setting added on the web interface.</li>
		</ul></li>
	<li>1.6: 
		<ul id="ordered">
		<li>This release is the first one of a new generation.</li>
		<li>When an external sram is detected (like on a wrover esp32), the heap is now huge (4 GB),</li>
		<li>The first step: the reception buffer is now of more than 10 seconds,</li>
		<li>This release is compatible with the wroom and wrover esp32.</li>
		</ul></li>		<li>1.5 R5: LCD Display corrected.Buttons held computed. </li>
		<li>1.5 R4: Added LCD_SPI_ST7735W lcd and PIN_LCD_BACKLIGHT. </li>
		<li>See <a href="https://github.com/karawin/Ka-Radio32/blob/master/HardwareConfig.md"   target="_blank", document>HardwareConfig.md</a></li>
		<li>1.5 R3: Minor details.</li>
		<li>1.5 R2: lcd ST7789V added</li>
		<li>1.5 R2: lcd ST7735S	(128x128) added</li>
		<li>1.5 R1: lcdout was not working</li>
		<li>1.5 R0: Support of two rotary encoders,</li>
		<li>1.5 R0: Support of two set of three buttons,</li>
		<li>1.5 R0: Support of the ADC keyboard,</li>
		<li>1.5 R0: new command for encoder with 2 steps/notch,</li>
		<li>1.5 R0: Improved display speed,</li>
		<li> </li>
		<li>1.4 R0: Support of two rotary encoders,</li>
		<li>    Hardware configuration tool to adapt your gpio to the software. </li>
		<li>    See <a href="https://github.com/karawin/Ka-Radio32/blob/master/HardwareConfig.md"   target="_blank", document>https://github.com/karawin/Ka-Radio32/blob/master/HardwareConfig.md</a></li>
		<li>See <a href="https://github.com/karawin/Ka-Radio32", download> https://github.com/karawin/Ka-Radio32</a></li>
		<li>1.4 R1: correction for K_SPI 0</li>
		<li>        correction for I2S output with a color lcd (sound perturbed on lcd refresh)</li>
		<li>        Added some special case in HardwareConfig.txt to disable vs1053 and I2C</li>		<li>1.3R6 added greek for color lcd. Thanks to Thanos Karastergios. Title of song on the web page title.</li>
		<li>1.3R5 added greek, coptic, cyrillic supplement and armenian for black&white lcd only. </li>
		<li>1.3R4 errno 11 problem removed. Some little internal enhancements.  </li>
		<li>1.3R3 new optimized code for i2s. Compatible with recent esp-idf. Cleaner sound on dac or pcm..  </li>
		<li>1.3R2 Correction for spi lcd and i2s output. </li>
		<li>1.3R1 Cyrillic support added for B/W & Color lcd </li>
		<li>1.3 command sys.rotat added. You may have to set it for your lcd. </li>
		<li>1.3 Corrected: the scroll on lcd </li>		
		<li>1.3 Corrected: https station loop removed</li>
		<li>1.1 mDNS added. set your hostname with the sys.host command.</li>
		<li>1.1 Doesn't work on android systems and edge on windows.  </li>
		<li>1.0 Web interface commands next and prev added </li>
		<li>1.0 little  improvements</li>
		<li>See <a href="https://github.com/karawin/Ka-Radio32", download> https://github.com/karawin/Ka-Radio32</a></li>
		<li>0.9 R7: Stack increased for debug log. </li>
		<li>0.9 R6: Memory leak corrected. Thanks to Walter Schmunke. </li>
		<li>0.9 R5: Added LCD_SPI_ST7920, stack adjusted, Instant play correction. </li>
		<li>0.9 R4: Corrected: oled spi, sys.led mode was inverted. Esp32 reboot when wifi disconnected. </li>
		<li>0.9 R4: Add command sys.ddmm to choose the date format; 0: MMDD, 1:DDMM . </li>
		<li>0.9 R3: Correction for B/W and color lcd. </li>
		<li>0.9 R1: Correction for stations with the char & in path. </li>
		<li>0.9 Both SSID now have full definitions of ip gateway etc... </li>
		<li>0.9 Minor change on the web page. </li>
		<li>0.9 New commands sys.lcdout: timeout to clear the screen, sys.ledgpio to change the gpio of the status led. Type help command for details </li>
		<li>0.9 Tried to use the helix lib to read aac stream, but it doesn't support the LATM. Failed, I fed  up. </li>
		<li>0.8 rev1: Font size on color lcd depend of the width of the screen </li>
		<li>0.8 rev0: Introducing color lcds.. Encoder actions changed. One click: start/stop, double clicks: toggle main/time, Held: Station change. </li>
		<li>0.7 rev3: a big bug for new installation removed. Sorry for this bug. </li>
		<li>0.7: Add of the rssi (Received Signal Strength Indication -30:best, -99:worst) at top right of the web page. </li>
		<li>0.6 rev1: A mistake for SSD1306 removed. </li>
		<li>0.6 adds the IR remote (nec protocol only) GPIO21 </li>
		<img src="http://karadio.karawin.fr/images/ir2.png" alt="ir2" border=0> 
		<li>B/W LCD or Oled full support </li>
		<li>Encoder: Rotate: volume change </li>
		<li>Encoder: Double click: Start/Stop </li>
		<li>Encoder: click and held: display and change station on rotate </li>
		<li>System: New backup partition of the configuration. Sorry, the ota is not possible from 0.4 to 0.5 .</li>
		<li>You need to flash all bin files or to generate the software with make flash.</li>
		<li>See <a href="https://github.com/karawin/Ka-Radio32", download> https://github.com/karawin/Ka-Radio32</a></li>
		
    </ul>
</body>
</html>


