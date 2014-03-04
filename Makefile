all:
	@echo TBD

test:
ifdef W
	vendor/bin/tester -w tests
endif
ifdef NS
	vendor/bin/tester tests/$(NS)
else
	vendor/bin/tester tests
endif

server:
	cd public;php -S localhost:4000 