# astrology-webapp-homework

## Introduction
This is the final project for the "Introduction to IT: Operating Systems", "OS:IIT" aka "Operating Systems Administration", "OSA" course at UPB-FILS year 2021. The assignment was to create a functional webapp using the LAMP stack without relying on any styling by using (CSS, SASS, Bootstrap, inline CSS, etc.) and any other frameworks as well as no Javascript. This assignment is an example of what you can do to achieve a maximum grade (10) for the capstone project at the end of the course if the requirements do not change, below you can also find guidelines for the maximum grade.

Used tools :
* PHP
* HTML5 
  >though since I couldn't use any CSS I had to rely on old methods of styling by relying on the HTML4 way of writing websites
* and obvisously an Apache Server with MySQL and Linux

The assignment is as the title said, I had some interesting restrictions to go around while creating this project.

## Video presentation

[![Watch the video](https://i.imgur.com/VOaMqYp.png)](https://www.youtube.com/watch?v=URfg7oWR4pc)

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

At first, I felt repulsive for having to create a website with just HTML and PHP, but afterwards the seemingly "unreasonable" task, some questions popped up in my mind :
* ___How did they do websites back in the day?___ 
* ___How was it possible?___ 
* ___Were they good looking and easy to use?___

The answer to these questions I have found mostly on the Web Design Museum and I am sure you will be amazed by the creativity of the old times as well. While CSS was not advanced enough, many websites were composed merely of a centered image with a map, something which sounds useless by today's standards, but it was a creative approach to design of the past.

## Are there any resources if I am looking to create something similar?
If you are ever found in constraints such as these ones, which is in my opinion very unlikely unless it's a school assignment or challenge <br />
I recommend using these resources for any styling needs:
* https://www.w3.org/TR/html401/
* https://www.htmlhelp.com/reference/html40/olist.html

## How to setup?
To run this website you must download all the files and modify the configuration files according to your situation you can start with dbconfig.php and also creating the database along with the table. You can use XAMPP for an easier setup.

## What does this do?
This application is very simple and it is composed only of a single class named ZodiacFinder.
  What ZodiacFinder does is to compute and return a Zodiac sign based on the input date. 

Another interesting functionality this app has is to fetch the tomorrow's predictions from the website horoscope.com for each respective zodiac sign.
  This functionality however is not embedded in any class but it's written directly in each page of each zodiac sign due to time constraints at the
  making of the app, but the code was written in such a way that it could be easily adjusted for each zodiac sign page. 
  
## Guidelines to get the maximum grade
It is mandatory to understand that going outside the project requirements it's your own choice and that it will NOT be considered as work towards the grade.
Checklist :
* Run the webapp on a Apache Server with MySQL/MariaDB
* Make sure your app does CRUD (Create, Read, Update, Delete) operations in a database; it is a mandatory criteria in achieveing a maximum grade
  > searching PHP CRUD on the internet should provide you with many examples for you to follow through
* Another CRITERIA which will make the difference between receiving the grade 7 or 10 is having a *calculation performed on the data that can be found in the database and assigning it to a table*
  > For example: When I login I enter my date of birth "Person: ID(123), email(abc@mail.com), DateOfBirth(19-12-1900), ZodiacSign(*empty*)". The application will perform a calculation that will correspond my zodiac sign to the entered date and then the person table shall be as it follows "Person: ID(123), email(abc@mail.com), DateOfBirth(19-12-1900), ZodiacSign(Sagittarius)". 
  
*But my application computes already!* Yes, but does it also store the computation inside the database? It is a question you should have in mind.

