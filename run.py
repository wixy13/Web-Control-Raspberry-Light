#!/usr/bin/env python
#coding:utf8
import sys
import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
args=sys.argv
PORT=7
ctl=args[1]
if(int(ctl)==1):
		GPIO.setup(PORT,GPIO.LOW)
if(int(ctl)==0):
		GPIO.setup(PORT,GPIO.HIGH)
