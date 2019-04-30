FROM nginx

# ARG AGENT_UID=1000
RUN usermod -u 1000 nginx
# RUN adduser --no-create-home -shell /bin/sh -u ${AGENT_UID} app-agent

COPY ./docker/dev/web/nginx.conf /etc/nginx/conf.d/default.conf
# RUN sed -e "s/user  nginx/user root/g" /etc/nginx/nginx.conf

RUN mkdir -p /app/public
ADD ./public/ /app/public/
