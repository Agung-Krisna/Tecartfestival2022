#include <stdio.h>

int nilai = 0;

void init()
{
    setvbuf(stdin, NULL, _IONBF, 0);
    setvbuf(stdout, NULL, _IONBF, 0);
    setvbuf(stderr, NULL, _IONBF, 0);
}

int main() {
    init();
    char password[100];

    puts("Input nilaimu: ");
    fgets(password, sizeof password, stdin);
    
    printf(password);
    printf("Nilai kamu %i\n", nilai);

    if(nilai == 10) {
        system("cat flag.txt");
    }
}
