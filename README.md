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
- 
- Replace `{username}` with your LambdaTest username. It can be obtained from [LambdaTest dashbaord](https://automation.lambdatest.com/)
- Replace `{token}` with your access key. It can be generated from [LambdaTest dashbaord](https://automation.lambdatest.com/) 

> OS specific instructions to download and setup tunnel binary can be found at the following links.
>    - [Windows](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+Windows)
>    - [Mac](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+MacOS)
>    - [Linux](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+Linux) 

### Run tests
```bash
php artisan dusk
```

### Generate test cases
- Change directory to project root `cd /your/project`
- Execute `php artisan dusk:make {test case name}` 
    e.g:
    ```bash
    php artisan dusk:make TodoTest
    ```
### Note
Our sample test case can be found in `tests/Browser/TodoTest.php` file. It navigates to our sample to-do app.
