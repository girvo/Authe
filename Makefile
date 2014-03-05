all:
	@echo TBD

test:
ifdef W
	vendor/bin/tester -w -j 20 tests
endif
ifdef NS
	vendor/bin/tester -j 20 tests/$(NS)
else
	vendor/bin/tester -j 20 tests
endif

server:
	cd public;php -S localhost:4000 