#include <stdio.h>

void init()
{
    setvbuf(stdin, NULL, _IONBF, 0);
    setvbuf(stdout, NULL, _IONBF, 0);
    setvbuf(stderr, NULL, _IONBF, 0);
}

int main(){
    init();
    char buffer[32];
    printf("Sebelum tidur, aku minta inputanmu dong: ");
    gets(buffer);
    return 0;
}

void shell(){
    return system("/bin/bash");
}
