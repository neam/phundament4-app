Deploy
===========

Platform as a Service (Paas)
--------------------------------------

## Step 1 - Start using environment configuration based on environment variables

Most Paas providers will expect your environment configuration to be based on environment variables, and Phundament 4's PaaS deployment scripts will activate this during the build/compile process in your PaaS provider.

To anticipate problems during development with this approach, you are recommended to activate environment configuration based on environment variables locally in your Phundament 4 app:

```
cp config/local/secrets.dist.php config/local/secrets.php
./init --env="Environment configuration based on environment variables"
```

This will activate a application configuration that uses [php-app-config](https://github.com/neam/php-app-config). Read it's readme to understand how it works and how you can use it locally as well as in PaaS deployments.

## Step 2 - Deploy

The basic approach is that you will push the code to a git remote at your PaaS provider, and they will use the "heroku" metadata in composer.json to build a fully working virtual machine running the application.


