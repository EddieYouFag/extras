import os
import binascii
from chacha20poly1305 import ChaCha20Poly1305

key = os.urandom(32) #32byte Secret key
cip = ChaCha20Poly1305(key)
nonce = os.urandom(12)
#msgraw = input('[+] msg : ')                             remove # takes msg input 
ciphertext = cip.encrypt(nonce, b'hello test msg') 

hkey = binascii.hexlify(key)
hnonce = binascii.hexlify(nonce)
hciphertext = binascii.hexlify(ciphertext)

print("")
print(f'[+] key : {hkey}')
print(f'[+] nonce : {hnonce}')
print(f'[+] enc msg : {hciphertext}')
print("")