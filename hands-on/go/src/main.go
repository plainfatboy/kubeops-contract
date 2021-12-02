package main

import(
	"github.com/gin-gonic/gin"
	"kubops-golang/square"
	"strconv"
	"log"
)

func main() {
	r := gin.Default()
	r.GET("/", func(c *gin.Context) {
		c.JSON(200, gin.H{
			"message": "Hello, this is Kubops's test app.",
		})
	});
	r.GET("/square/:number", func(c *gin.Context) {
		sNumber := c.Param("number")
		iNumber, err := strconv.Atoi(sNumber)

		if err != nil {
			log.Fatal(err)
		}
		
		c.JSON(200, gin.H{
			"message": "squear of " + sNumber + " = " + strconv.Itoa(square.Square(iNumber)),
		})
	});
	r.Run() // listen and serve on 0.0.0.0:8080 (for windows "localhost:8080")
}