# astrology-webapp-homework

## Introduction
This is the final project for the "Introduction to IT" course at UPB. The assignment was to create a functional webapp using the LAMP stack without relying on any styling by using (CSS, SASS, Bootstrap, inline CSS, etc.) and any other frameworks as well as no Javascript.

Used tools :
* PHP
* HTML5 
  >though since I couldn't use any CSS I had to rely on old methods of styling by relying on the HTML4 way of writing websites
* and obvisously an Apache Server with MySQL and Linux

The assignment is as the title said, I had some interesting restrictions to go around while creating this project.
## Source of inspiration

For the design I used inspiration from early internet websites from https://www.webdesignmuseum.org/.

Particularly these websites:<br /><br />

 | 1 | 2 | 3 |
| ----------- | ----------- |----------- |
| <img src="https://www.webdesignmuseum.org/uploaded/fullscreen/pixel-industries-1996.png" alt="pixel-industries-1996" width="600"/> | <img src="https://www.webdesignmuseum.org/uploaded/fullscreen/2advanced-2002.png" alt="2advanced-studios-v3-2001" width="600"/> | <img src="https://www.webdesignmuseum.org/uploaded/fullscreen/space-jam-1996.png" alt="space-jam-1996" width="600"/> |

1. https://www.webdesignmuseum.org/gallery/pixel-industries-1996
2. https://www.webdesignmuseum.org/gallery/2advanced-studios-v3-2001
3. https://www.webdesignmuseum.org/gallery/space-jam-1996

## Is this worth the trouble?

At first, I felt repulsive for having to create a website with just HTML and PHP, but after complaining the seemingly "unreasonable" task some questions have to be asked :
* ___How did they do websites back in the day?___ 
* ___How was it possible?___ 
* ___Were they good looking and easy to use?___

The answer to these questions I have found mostly on the Web Design Museum and I am sure you will be amazed by the creativity of the old times as well. While CSS was not advanced enough, many websites were composed merely of a centered image with a map, something which sounds useless by today's standards, but in the past a creative approach to design.

## Are there any resources if I am looking to create something similar?
If you are ever found in constraints such as these ones, which is in my opinion very unlikely unless it's a school assignment or challenge
I recommend using these resources for any styling needs:
* https://www.w3.org/TR/html401/
* https://www.htmlhelp.com/reference/html40/olist.html

## Setup?
To run this website you must download all the files and modify the configuration files according to your situation you can start with dbconfig.php.
You could use XAMPP for an easier setup.

## What does this do?
This application is very simple and it is composed only of a single class named ZodiacFinder.
  What ZodiacFinder does is to compute and return a Zodiac sign based on the input date.

Another interesting functionality this app has is to fetch the tomorrow's predictions from the website horoscope.com for each respective zodiac sign.
  This functionality however is not embedded in any class but it's written directly in each page of each zodiac sign due to time constraints at the
  making of the app, but the code was written in such a way that it could be easily adjusted for each zodiac sign page.

I am expecting in the future to create a more modern version of this application.
