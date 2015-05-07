FROM ubuntu
RUN yum -y install git
RUN yum -y install vim
RUN yum -y install nano
RUN yum -y install curl
RUN curl -L https://bootstrap.saltstack.com | sh
EXPOSE 80 3306