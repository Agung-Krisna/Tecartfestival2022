#!/bin/zsh
for i in {0..9}
    for a in {a..z}
        do
        unzip -P BANGAKUNGANTUK${a}${i} flag.zip
done
