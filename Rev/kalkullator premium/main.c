#include <stdio.h>

int main(int argc, char const *argv[])
{
    setvbuf(stdin, NULL, _IONBF, 0);
    setvbuf(stdout, NULL, _IONBF, 0);
    setvbuf(stderr, NULL, _IONBF, 0);

    char s[50];
    printf("Enter first string: ");
    gets(s);
    if (strcmp(s, "FEST-UYDH-EKFJ-2022") == 0)
    {
        system("echo \"Mantapp ini gan flagnya\"; cat flag.txt");
    }
    else
    {
        printf("\nEntered strings are not same!");
    }
    return 0;
}
