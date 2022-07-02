#include <stdio.h>
#include <string.h>
#include <sys/mman.h>
#include <unistd.h>
#include <stdlib.h>
#include <seccomp.h>

void initialization()
{
	setvbuf(stdin,0,2,0);
	setvbuf(stdout,0,2,0);
	setvbuf(stderr,0,2,0);
}

void main()
{
	initialization();
	char *rwx = mmap(0,0x1000,PROT_READ|PROT_WRITE|PROT_EXEC,MAP_PRIVATE|MAP_ANONYMOUS,-1,0);
	
	write(1,"Shellcode > ",12);
	read(0,rwx, 0x64);
	((void(*)(void))rwx)();
	exit(0);
}
