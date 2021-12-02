# kubeops-exam

# .NET CORE

Required
C# for Visual Studio Code (latest version)
.NET 6.0 SDK

Step 1

dotnet dev-certs https --trust

# GOLANG

docker run -it --rm -v "$(pwd)/src:/go" --name kubops-golang kubops-golang
docker run -it --rm -v "$(pwd)/src:/usr/src/kubops-golang" --name kubops-golang kubops-golang

[GIN-debug] [WARNING] Running in "debug" mode. Switch to "release" mode in production.
 - using env:   export GIN_MODE=release
 
# RUST

run docker run -it --rm --name kubops-rust -v "$(pwd)/src:/usr/src/myapp" kubops-rust