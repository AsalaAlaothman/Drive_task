# 1. Install Composer Packages
    composer install

# 2. Init project
    php ./init

# 3. run project 
    php yii serve --docroot="frontend/web/

# 4. at index page you will show your Drive files



## How I did work?!
1. Create Google Cosole Project.
2. Create Consent Screen.
3. Create OAuth2 Credentials => you can show it with path "frontend/sayarah.json".
4. Open Google+ api & Google Drvie Api.
5. Install "google/apiclient" package.
6. Configure Google Client in Index Action  in Site Controller.
7. Show Files in aboutAction in Site Controller. 

## Note if get google error Please Clear Browser Cache By:
1. Open inspect dev tool.
2. long click in reload icon.
3. Choose "Empty cache and hard reload" option.
4. ReOpen http://127.0.0.1:8080
