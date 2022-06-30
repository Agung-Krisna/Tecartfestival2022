#include <stdio.h>
#include <string.h>

int main()
{
    char f[29] = "mkzouilo|rk|kzil|y";
    char inp[29];

    printf("%s", "Input: ");
    scanf("%s", inp);

    for (int i = 0; i < 29; i++)
    {
        f[i] = (char)((int)f[i] - 10);
    }

    if (!strncmp(f, inp, 29))
    {
        printf("%s\n", "BANG!!");
    }
    else
    {
        printf("%s\n", "Whoosh...");
    }
}