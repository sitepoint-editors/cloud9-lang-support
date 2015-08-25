#include <iostream>
#include "Greeter.cpp"

using namespace std;

int main() {
    Greeter *g = new Greeter("SitePoint");
    g->greet();
    
    return 0;
}