all: test

test:
	phpunit --bootstrap bin/autoload.php tests

.PHONY: all test
