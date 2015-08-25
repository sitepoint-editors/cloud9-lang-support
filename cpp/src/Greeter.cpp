#ifndef _GREETER_
#define _GREETER_

#include <iostream>

class Greeter {
    private:
    std::string name;
    
    public:
    Greeter(std::string name) {
        this->name = name;
    }
    
    Greeter() {
        this->name = "World";
    }
    
    void greet() {
        std::cout<<"Hello, "<<this->name<<"!"<<std::endl;
    }
    
};

#endif