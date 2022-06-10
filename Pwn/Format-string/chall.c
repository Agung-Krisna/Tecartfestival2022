#include <stdio.h>

int nilai = 0;

int main() {
    char password[100];

    puts("Input nilaimu: ");
    fgets(password, sizeof password, stdin);
    
    printf(password);
    printf("Nilai kamu %i\n", nilai);

    if(nilai == 10) {
        system("cat flag.txt");
    }
}
