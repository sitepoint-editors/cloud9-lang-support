#
# Make this small C++ Greeter
#

CPP = g++

all:
	$(MAKE) clean
	$(CPP) src/app.cpp src/Greeter.cpp -o app
	
	echo "Finished"

clean:
	$(RM) app
	
.SILENT: all clean
.PHONY: all clean