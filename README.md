# kubeops-exam

# .NET CORE

Failed

# Golang

docker run -it --rm -v "$(pwd)/src:/go" --name kubops-golang kubops-golang
docker run -it --rm -v "$(pwd)/src:/usr/src/kubops-golang" --name kubops-golang kubops-golang

[GIN-debug] [WARNING] Running in "debug" mode. Switch to "release" mode in production.
 - using env:   export GIN_MODE=release

# Java

OpenJDK 11

access bash
docker run -it --rm --name kubops-java kubops-java bash

run ./mvnw spring-boot:run

# Node

**requires**
1. Node 16

**To install dependencies**
```
cd src
npm install
```

**To test locally**
```
cd src
npm test
```

**To build**
```
docker build -t kupeops-node .
```

**To run**
```
docker run -it --rm -p 8090:8090 -t kubeops-node
```
The application will be available on http://localhost:3000

**To deploy and run on Kubernetes**
1. Make deployment file
```
---
apiVersion: apps/v1
kind: Deployment
metadata:
  name: dev
  namespace: backend
spec:
  replicas: 1
  selector:
    matchLabels:
      app: dev
  strategy:
    type: RollingUpdate
  template:
    metadata:
      labels:
        app: dev
    spec:
      containers:
        - name: dev
          image: kubeops-node
          ports:
            - name: http
              containerPort: 3000
          resources:
            requests:
              cpu: 100m
              memory: 50Mi
            limits:
              cpu: 200m
              memory: 100Mi
```

2. apply the file on **kubectl**
```
kubectl apply -f deployment.yaml
```

**CI/CD**
The Github Actions's workflows and Kubernetes's deployment files can found at (hands-on/ci&cd/).

Note:
1. the managed kubernetes cluster from DigitalOcean is used to host the application.
2. Digitalocean's container registry is used to host the Docker's images.
3. There are 3 environments including development, stagging, and production.
4. The applications are available at

**production** https://www.wasuwat.online/
**stagging** https://stagging.wasuwat.online/
**development** https://dev.wasuwat.online/

# Rust

Failed. I finished preparing the Dockerfile. However, the server kept returning empty response if the application is ran in the container.

**To build**
```
docker build -t kupeops-rust .
```

**To run**
```
docker run -it --rm -p 8090:8090 -t kubeops-rust
```
