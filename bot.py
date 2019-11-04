#!/bin/env python3
# Code By : th3unkn0n
# youtube.com/c/theunknon
import requests, time, urllib, os, sys
reset="\033[0;0m"
red="\033[1;31m"
cyn="\033[1;36m"
os.system('clear')
print(reset)
print(red+"[*]"+reset+" Web Bot")
x=input(red+"[*]"+reset+" Enter Url : ")
ref_rate=input(red+"[*]"+reset+" Delsy Time (sec) : ")
ref_rate=float(ref_rate)
headers = {'user-agent': 'I_am_a_Bot_!!'}
print(red+"[*]"+reset+" No Output Will Be Shown")
# You Can Use This In user-agent To Look More Realistic 
# Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36
while True:
	time.sleep(ref_rate)
	requests.get("http://"+x, headers=headers)
