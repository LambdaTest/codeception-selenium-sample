![LambdaTest Logo](https://www.lambdatest.com/static/images/logo.svg)
---

# codeception-selenium-sample
A Sample codeception app to run selenium automation tests on LambdaTest grid. 

### Prerequisites
- Install php and composer on your system. Setup Instructions for the same can be found  [here](https://www.lambdatest.com/support/docs/display/TD/Quick+Guide+To+Run+PHP+Tests+on+LambdaTest+Selenium+Grid) 

### Installation
```bash
# setup project dependencies
composer install
```

### Configuration steps
- Create go to tests/acceptance.suite.yml
- Replace `{username}` with your LambdaTest username. It can be obtained from [LambdaTest dashboard](https://automation.lambdatest.com/)
- Replace `{token}` with your access key. It can be generated from [LambdaTest dashboard](https://automation.lambdatest.com/) 

#####  Routing traffic through your local machine
- Set tunnel value to `true` in test capabilities
> OS specific instructions to download and setup tunnel binary can be found at the following links.
>    - [Windows](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+Windows)
>    - [Mac](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+MacOS)
>    - [Linux](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+Linux)

### Important Note:
Some Safari & IE browsers, doesn't support automatic resolution of the URL string "localhost". Therefore if you test on URLs like "http://localhost/" or "http://localhost:8080" etc, you would get an error in these browsers. A possible solution is to use "localhost.lambdatest.com" or replace the string "localhost" with machine IP address. For example if you wanted to test "http://localhost/dashboard" or, and your machine IP is 192.168.2.6 you can instead test on "http://192.168.2.6/dashboard" or "http://localhost.lambdatest.com/dashboard".

### Run tests
```bash
./vendor/bin/codecept run --steps
```
 
## About LambdaTest
[LambdaTest](https://www.lambdatest.com/) is a cloud based selenium grid infrastructure that can help you run automated cross browser compatibility tests on 2000+ different browser and operating system environments. All test data generated during testing including Selenium command logs, screenshots generated in testing, video logs, selenium logs, network logs, console logs, and metadata logs can be extracted using [LambdaTest automation APIs](https://www.lambdatest.com/support/docs/api-doc/). This data can then be used for creating custom reports.
