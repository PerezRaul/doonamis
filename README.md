# Doonamis Project

This is the main repo of the doonamis project test.

## Table of contents

- [Setup in local development](#setup-in-local-development)
    - [Requirements](#requirements)
    - [Installation](#installation)
- [Code analysis](#code-analysis)
    - [All code analysis](#all-code-analysis)

## Setup in local development

### Requirements

- [Docker repository](https://github.com/PerezRaul/docker/tree/doonamis) ( `doonamis` branch )

### Installation
1. Add `127.0.0.1 doonamis.localhost` on `/etc/hosts`.
2. Clone repository inside `~/Sites`:
3. Copy the file **.env.example** to **.env**.
    ```shell
    > cp .env.example .env
    ```
4. Go inside the workspace with the following command:
    ```shell
    > dockerbash
    ```
5. Execute the following commands on doonamis folder _/var/www/doonamis_:
    ```shell
    > composer install
    > php artisan migrate:fresh --seed
    ```

## Code analysis

### All code analysis

```shell
> sh analysis.sh
```
