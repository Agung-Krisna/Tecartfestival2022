#include <sys/mman.h>
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

char* createExecutableMemoryRegion(){
    char a = mmap(NULL, 0x1000, PROT_READ | PROT_WRITE | PROT_EXEC, MAP_PRIVATE | MAP_ANONYMOUS, 0, 0);
    if(a == MAP_FAILED) {
        puts("MMAP failed");
        exit(-1);
    }
    return a;
}

int main() {
    void (func_ptr)();
    func_ptr = createExecutableMemoryRegion();
    read(0, func_ptr, 0x1000);
    func_ptr();
}