# Fixtures Loader Symfony Bundle
Symfony bundle with commands for loading fixtures

#### Command
`bin/console kolyya:fixtures:load`

**Run the following commands:**
* `doctrine:database:drop --force`
* `doctrine:database:create`
* `doctrine:schema:update --force`
* `doctrine:fixtures:load --append`

#### Flags
* `--force` - Run the command without confirmation