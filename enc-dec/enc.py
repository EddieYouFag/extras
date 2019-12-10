import os
from chacha20poly1305 import ChaCha20Poly1305

key = os.urandom(32) #32byte Secret key
cip = ChaCha20Poly1305(key)
nonce = os.urandom(12)
#msgraw = input('[+] msg : ')                             remove # takes msg input 
ciphertext = cip.encrypt(nonce, b'hello test msg') 

print(f'[+] key : {key}')
print(f'[+] nonce : {nonce}')
print(f'[+] enc msg : {ciphertext}')