#!/bin/bash

cp source-top.html $1.html
cat source-$1.html >> $1.html
cat source-bottom.html >> $1.html
