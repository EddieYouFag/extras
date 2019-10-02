#!/bin/env python3
import os, time, signal
os.system('clear')
def handler(signum, frame):
	print('[+] You Cant Esacpe Bitch, LoL')
	time.sleep(3)
signal.signal(signal.SIGTSTP, handler)
def loop():
	while True:
		print("[+] You Have Been Fucked up")
		try:
			time.sleep(0.1)
		except KeyboardInterrupt:
			print('[+] You Cant Esacpe Bitch, LoL')
			time.sleep(3)
			loop()
loop()