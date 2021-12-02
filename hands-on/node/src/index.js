const express = require('express')
const square = require('./square')
const app = express()
const port = 3000

app.get('/', (req, res) => {
  res.send('Hello, this is Kubops\'s test app.')
})

app.get('/square/:number', (req, res) => {
    res.send("squear of " + req.params.number + " = " + square(req.params.number))
})

app.listen(port, () => {
  console.log(`The app listening at http://localhost:${port}`)
})