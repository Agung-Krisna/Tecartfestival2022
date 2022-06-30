flag = ""
pram = "capek_berharap_bro"
# chris = "mkzouilo|rk|kzil|y"

for c in pram :
    temp = ord(c) + 10 #decryptnya tinggal di - 10
    temp = chr(temp)
    flag += temp

print flag