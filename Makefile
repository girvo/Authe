.PHONY: server test test-ns test-watch all

all: test build

build:
	@echo Building...
	
server:
	@cd public;
	php -S localhost:4000;
	
test:
	vendor/bin/tester -j 20 tests

test-ns:
ifdef NS
	vendor/bin/tester -j 20 tests/$(NS);
else
	@echo Missing namespace, use \`make test-ns NS=target\';
endif

test-watch:
	vendor/bin/tester -w -j 20 tests;