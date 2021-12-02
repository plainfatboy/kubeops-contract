FROM golang:1.17.3

WORKDIR /usr/src/kubops-golang

COPY ./src .

RUN go get -u github.com/gin-gonic/gin

RUN go build

EXPOSE 8080

CMD ["./kubops-golang"]