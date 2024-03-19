# QArbour

Welcome to QArbour, a mock Harbour system for the purpose of learning automated testing in a simple environment, while waiting for the Nexus transformation project to complete.

## Install

### Linux

* Install git and docker from your repos
* Open a terminal

### Windows

* Download Git for Windows
* Download Docker Desktop
* Run Git Bash from your start menu

## Everyone

* git clone https://github.com/tony3dmc/qarbour-test.git
* cd qarbour-test
* docker-compose up -d
* docker-compose run test-runner pytest tests

## How to do tests

Check out the files in the tests/ folder, make a file for each thing you want to test, write functions for each way you want to test it.

Run individual test classes with: docker-compose run test-runner pytest tests/test_thing.py
