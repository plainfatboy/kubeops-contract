const express = require('express')
const square = require('./square')
const app = express()
const port = 3000

app.get('/', (req, res) => {
  res.send('Hello, this is Kubops\'s test app. (development environment)')
})

app.get('/square/:number', (req, res) => {
  res.send("squear of " + req.params.number + " = " + square(req.params.number))
})

app.listen(port, () => {
  console.log(`[1] The app listening at http://localhost:${port}`)
})