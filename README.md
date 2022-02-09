# Codeception Selenium Sample
![Codeception](https://opengraph.githubassets.com/33d76fce74d1897cd9eab838913ac10761e6ef555294492567e7cee75aec05e3/LambdaTest/codeception-selenium-sample)


### Prerequisites
1. Install Php and setup environment variables.
-Windows
  * You can download PHP for Windows from http://windows.php.net/download/
  * Run the installer and follow the setup wizard to install PHP.
  * Make sure you can use PHP with your command line: http://php.net/manual/en/install.windows.php
 -Linux
  * sudo apt-get install curl libcurl3 libcurl3-dev php
 -Mac
  * PHP should already be present on Mac OS X by default
2) Install Composer ([Linux/MacOS](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos), [Windows](https://getcomposer.org/doc/00-intro.md#installation-windows))
3) Install MBstring extension.  

### Run your First Test
1. Clone the Codeception-selenium-sample repository. 
```
git clone https://github.com/LambdaTest/codeception-selenium-sample.git
```
2. Next get into Codeception-selenium-sample folder, and import Lamabdatest Credentials. You can get these from lambdatest automation dashboard.
   <p align="center">
   <b>For Linux/macOS:</b>:
 
```
export LT_USERNAME="YOUR_USERNAME"
export LT_ACCESS_KEY="YOUR ACCESS KEY"
```
<p align="center">
   <b>For Windows:</b>

```
set LT_USERNAME="YOUR_USERNAME"
set LT_ACCESS_KEY="YOUR ACCESS KEY"
```
Step 3. Install dependencies by composer.
```
composer install 
```
Step 4. To run a single test, run
``` 
./vendor/bin/codecept run --steps
```

#####  Routing traffic through your local machine
- Set tunnel value to `true` in test capabilities
> OS specific instructions to download and setup tunnel binary can be found at the following links.
>    - [Windows](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+Windows)
>    - [Mac](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+MacOS)
>    - [Linux](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+Linux)

### Important Note:
Some Safari & IE browsers, doesn't support automatic resolution of the URL string "localhost". Therefore if you test on URLs like "http://localhost/" or "http://localhost:8080" etc, you would get an error in these browsers. A possible solution is to use "localhost.lambdatest.com" or replace the string "localhost" with machine IP address. For example if you wanted to test "http://localhost/dashboard" or, and your machine IP is 192.168.2.6 you can instead test on "http://192.168.2.6/dashboard" or "http://localhost.lambdatest.com/dashboard".

## About LambdaTest

[LambdaTest](https://www.lambdatest.com/) is a cloud based selenium grid infrastructure that can help you run automated cross browser compatibility tests on 2000+ different browser and operating system environments. LambdaTest supports all programming languages and frameworks that are supported with Selenium, and have easy integrations with all popular CI/CD platforms. It's a perfect solution to bring your [selenium automation testing](https://www.lambdatest.com/selenium-automation) to cloud based infrastructure that not only helps you increase your test coverage over multiple desktop and mobile browsers, but also allows you to cut down your test execution time by running tests on parallel.
### Resources

##### [SeleniumHQ Documentation](http://www.seleniumhq.org/docs/)
##### [PhpUnit Documentation](https://phpunit.de/documentation.html)