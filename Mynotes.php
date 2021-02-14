202102141546    - downloaded Yii2 using command "composer create-project --prefer-dist yiisoft/yii2-app-basic sample_gym"
                - set a vhost in my local called secure.sample-gym.com
                    <VirtualHost *:80>
                        ServerName secure.sample-gym.com
                        DocumentRoot "c:/wamp64/www/sample_gym/web"
                        <Directory "c:/wamp64/www/sample_gym">
                            Options +Indexes +Includes +FollowSymLinks +MultiViews
                            AllowOverride All
                            Require local
                        </Directory>
                    </VirtualHost>

                - set a host too. in "C:\Windows\System32\drivers\etc\hosts" - open the file as admin and edit it like a baws.
                    = add this line "127.0.0.1	secure.sample-gym.com"
                - restart my wamp and open "secure.sample-gym.com"
                - it should display the typical yii page with a big sign of "Congratulations!"
                - added web/requirement. (tbh idk what this does)  ( " ._. )

202102141637    - By looking at yii2 documentation, "Saying Hello" create an action and view.
                - create a ```say``` Action that read a ```message``` parameter from the request and display the message in ther view. if there is no message return the message with default message "BYE!"
                - refer to the actionSay in the ```controllers/SiteController.php```
                - refer the view in ```views/site/say.php```

                - run the url like this "http://secure.sample-gym.com/index.php?r=site/say&message=Hello+World" . This URL will result in a page displaying "Hello World"
                - message is passed as a parameter to the actionSay() method.
                - r = stands for route. and it format is ```ControllerID/ActionID``` -> site/say


