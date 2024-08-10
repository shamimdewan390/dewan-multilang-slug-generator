# dewan-multilang-slug-generator

# README

here is doc


## Installation

> Run this command for install package.

```bash
composer require dewan/dewan-multilang-slug
```

> Run this command for config publish.

```bash
php artisan vendor:publish --tag=dewan-multilang-slug-config --force
```

## Basic use

### Step- 1
> Create folder named "dewan/sql" in database directory 

![My Image](src/images/create_folder.png)

### Step- 2
> Download or export .sql file from database

![My Image](src/images/sql_export.png)


### Step- 3
> Remove extra code.

![My Image](src/images/remove_all_code.png)


### Step- 4
> The code look like:

![My Image](src/images/final_sql.png)


### Step- 5
> Run command:  

```javascript
php artisan dewan:sql-seed
```

> The command copy all sql file to public/sql directory then run migrate:fresh and seed all data form sql file.
