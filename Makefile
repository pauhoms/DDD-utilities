#!/bin/bash

OS := $(shell uname)

ifeq ($(OS),Linux)
	UID = $(shell id -u)
else
	UID = 1000
endif

