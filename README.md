# whatcha-working-on
Laracasts - Whatcha Working On Learning


## Selenium Research Tutorial

#### Download Selenium Standalone Server
Visit http://www.seleniumhq.org/download/

Download the selenium.jar file

#### Boot Selenium Standalone Server
java -jar selenium.jar

#### If Server DOES NOT START
Update the Java SDK by visiting http://www.oracle.com/technetwork/java/javase/downloads/index.html

Download the latest Java platform.

#### If SeleniumTests fails for geckodriver
Install geckodriver with `brew install geckodriver`


## Turbolinks
Visit https://github.com/turbolinks/turbolinks

This is a great way to load pages more quickly using AJAX.

The body is completely removed each time, and styles/scripts in the head are merged. This can cause an issues
with the page being loaded with extra assets. Need to research ways to escape this issue.