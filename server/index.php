<?php

/**
 * This is a simple PHP script that returns a random number. It 
 * processes through PHP, picks a random number, and sends output but 
 * does nothing else. Many servers can run this rand command over 1
 * million times per second.
 */

echo rand(100000, 999999);