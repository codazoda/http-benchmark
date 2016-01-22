# HTTP Benchmark in PHP

This is a very simple HTTP request benchmarking tool. I've had questions about the number of HTTP requests that could be made between various servers in my orginization in a synchronus PHP application. I wrote this simple benchmarking tool to find out how many of those requests could be made if the PHP applications we build were very simple.

My primary concern was the number of requests that could be made from one machine to itself or from one machine that is part of a load balanced cluster to another member of that same cluster. Turns out that the number of around 500 requests per second in my particular situation.

## Client / Server

There is a client and a server here. The server is installed on the server machine that is being tested and the client is installed on the client that is making the requests. Each is just a single PHP file.

    client/benchmark.php
    server/index.php

## Tests

There is a `tests` directory, but sorry, I don't have any unit tests there. Just a random file or two for something I wanted to test separately.

## Results

Here are some of the results I got.

  - On Localhost:
    - Completed 10000 passes to http://stage-v2.ksl.com/benchmark in 15 seconds (666.67 per second).
    - Completed 1000 passes to http://www.joeldare.com/benchmark in 21 seconds (47.62 per second).
    - Completed 1000 passes to http://www.ksl.com/benchmark in 2 seconds (500 per second).
    - Completed 100 passes to https://www.ksl.com/benchmark in 11 seconds (9.09 per second).

  - Wired to KSL Dev Network:
    - Completed 100 passes to http://www.joeldare.com/benchmark in 18 seconds (5.56 per second).
    - Completed 1000 passes to http://www.joeldare.com/benchmark in 183 seconds (5.46 per second).
    - Completed 1000 passes to http://stage-v2.ksl.com/benchmark in 10 seconds (100 per second).
    - Completed 1000 passes to http://www.ksl.com/benchmark in 13 seconds (76.92 per second).
    - Completed 1000 passes to https://www.ksl.com/benchmark in 159 seconds (6.29 per second).

  - Teathered to TMobile 4G:
    - Completed 100 passes to http://www.joeldare.com/benchmark in 42 seconds (2.38 per second).
    - Completed 100 passes to http://www.ksl.com/benchmark in 53 seconds (1.89 per second).
    - Completed 100 passes to https://www.ksl.com/benchmark in 126 seconds (0.79 per second).
 
  - Wifi to DDMGuest:
    - Completed 100 passes to http://www.joeldare.com/benchmark in 11 seconds (9.09 per second).
    - Completed 1000 passes to http://www.ksl.com/benchmark in 22 seconds (45.45 per second).
    - Completed 100 passes to https://www.ksl.com/benchmark in 17 seconds (5.88 per second).