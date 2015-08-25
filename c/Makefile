#
# Make this small C project
#

CC = gcc

all:
	$(MAKE) clean
	$(CC) src/app.c src/header.c -o app
	
	echo "Finished"

clean:
	$(RM) *.exe
	$(RM) app

.SILENT: all clean
.PHONY: all clean