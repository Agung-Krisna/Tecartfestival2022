#include <stdio.h>

void vuln() {
    puts("Come get me");

    char buffer[20];
    gets(buffer);
}

void init()
{
    setvbuf(stdin, NULL, _IONBF, 0);
    setvbuf(stdout, NULL, _IONBF, 0);
    setvbuf(stderr, NULL, _IONBF, 0);
}

int main() {
    init();
    vuln();

    return 0;
}
