FROM ubuntu:20.04

# Open port 3333
EXPOSE 3333

# update
RUN apt-get update -y

# install socat
RUN apt-get install socat wget -y

# Set WorkDir
RUN mkdir /app
WORKDIR /app


# Copy binary to workdir
COPY flag.txt /app/flag.txt
COPY chall /app/chall

RUN chown root:root chall flag.txt
RUN chmod 755 chall flag.txt

# Securing Environment
RUN chmod 700 /usr/bin/* /bin/* /tmp /dev/shm
RUN chmod 755 /bin/dash /bin/sh /bin/cat /usr/bin/id /bin/ls

# Run Program
CMD socat TCP-LISTEN:3333,reuseaddr,fork EXEC:./chall
