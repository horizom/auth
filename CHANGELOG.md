# CHANGELOG

## Commit 13-03-2022 (1.0.2)

- Rename `UserManager` class to `AuthManager`.
- Fix bug : property visibility
  - `AuthManager::$table` => `protected`.
  - `AuthManager::$passwordHashAlgo` => `protected`.
  
## Commit 04-03-2022 (1.0.1)

- Add method `setPasswordHashAlgorithm()` in `Horizom\Auth\UserManager` class to set the password algorithm. The default algorithm is `PASSWORD_DEFAULT`.

## Commit 21-09-2021 (1.0.0)

- Initial release
