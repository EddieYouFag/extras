#!/bin/env python3
re="\033[1;31m"
cy="\033[1;36m"
import os, time, signal
os.system('clear')
def handler(signum, frame):
	print(re+'[+] You Cant Esacpe Bitch, LoL')
signal.signal(signal.SIGTSTP, handler)
def loop():
	while True:
		print(cy+"[+] You Have Been Fucked up")
		try:
			time.sleep(0.1)
		except KeyboardInterrupt:
			print(re+'[+] You Cant Esacpe Bitch, LOL')
			loop()
loop()
