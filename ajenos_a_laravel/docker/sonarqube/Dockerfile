FROM sonarqube

# Usar el root para poder descargar extensiones de linux
USER root
RUN apt-get update -y
RUN  apt-get install -y \
     nano \
     telnet

USER sonarqube