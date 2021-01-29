## How to run the app

* Unzip folder or clone the repository

### config
make sure you have these config in your .env file with the right value of database credentials 
``` bash
STRIPE_KEY=pk_test_51IDuKHFvxnKmnYt8pB5QyBgzYQbIMAR3cTtYt3dCNFNyFRJuPO2VrEmeiR5mFMClyrHC0QtHlTqwGT574SYQNX4j00lGVQMNfj
STRIPE_SECRET=sk_test_51IDuKHFvxnKmnYt8kah6sOlLD5j6WbO9UtN47vytQFjxP1mzMoE1c7ag2lXd47aFcr1bJTQJuFNl8kwVSlmusdb600YLAzpHKU

MIX_STRIPE_KEY="${STRIPE_KEY}"
MIX_STRIPE_SECRET="${STRIPE_SECRET}"

CASHIER_CURRENCY=gbp

```

### Locally
``` bash

# install using composer locally and make sure you have the right config on .env for database.
$ composer install

# do migration and seed all data 
$ php artisan migrate:fresh --seed

# install js dependencies locally
$ npm install

# build for production and launch server
$ npm run prod

# build for production and launch server
$ php artisan serve 
```

## What I can improve

From the optionals tank in this case I would like to add validation on form and also send email to clients
I have already for structure I have already setup for a large application with a help of Vuex so there is no worry
if the project is getting bigger. 

If I have more time I will write commend and add testing make sure if the project not break anywhere possible.  
