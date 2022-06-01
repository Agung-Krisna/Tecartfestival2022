#include <stdio.h>

void init()
{
    setvbuf(stdin, NULL, _IONBF, 0);
    setvbuf(stdout, NULL, _IONBF, 0);
    setvbuf(stderr, NULL, _IONBF, 0);
}

int main(){
    char buffer[32];
    puts("Capek ga sih berjuang cuma sendiri?. Kasi pendapatmu:");
    gets(buffer);
    return 0;
}

void shell(){
    return system("/bin/bash");
}