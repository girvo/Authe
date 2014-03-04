all:
	@echo TBD

tests:
	./vendor/bin/tester ./tests

server:
	@cd public;php -S localhost:4000 index.php