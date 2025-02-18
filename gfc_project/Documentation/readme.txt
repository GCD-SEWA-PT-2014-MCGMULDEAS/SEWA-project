SEWA-project
============
College - Griffith College Dublin Higher Diploma in Science in Computing 2013-2015
Module - Software Engineering for Web Applications
Lecturer - Mark Scanlon
Final Year Project
Submission Date: January 1st 2015

SEWA Project Name - GAA Player Stats Database

Team Members: Gavin McGovern, Frank Deasy, Cathal Mulkere
-------------
-------------

This site has been primarily designed to run is Chrome but has been tested on a number of browsers including Firefox, Safari, and Internet Explorer 


File Guidance
=============

HTML / PHP WebPages Accessible to the User:
-------------------------------------------
Index (Home) - Home Page display explaining the reason for and benefits of the site
About Us - Information Page explains the details of the project in question, the people behind it and also explains how the site works for interested users and the likely outcomes they can achieve.
Contact Us - Information Page detailing how the user can make contact with GFC-Stats through various media with a location map of where to find us(Griffith College Dublin). We have also included a javascript enquiry form here where users can submit specific enquires via email.
Register + Login Forms - Details form, where user inputs their critical data required for the functionality of the site - e.g. name, email, username, password, club, etc. Some of this data is used for comparative and profile purposes.
Profile (Analysis) - Query / JS Form Pages where the user inputs either Training or Match Data which 
(Users) Training Records - Query page, where users can review the data they previously entered on their training. A JS Pie Chart populates with averages on how their training time is spent.
(Users) Match Records - Query page, where users can review the data they previously entered on their matches.
Update (Users) Details - A JS Query form users can populate to update non-key data. Note the user cannot change their username / name as this is core to the functionality of the website.

Index, About Us and Contact Us Pages contain a link to the Login form.
Login Page contains a link to the Register form if User is new.
Index, About Us and Contact Us Pages contain a link to the Profile Page which, if clicked, will bring the user to the Login Page firstly.
Once logged in the User must Logout to get back to the Index, About Us and Contact Us pages as the session automatically closes.
The Profile Page contains links to the Training Records, Match Records and Update Details Page which cannot be accessed from the front-end Home Page, About Us Page and Contact Us Page.
-------------
-------------

User Step-by-Step Guidance
==========================

For the benefit of prospective users, a ReadMe.txt file for more detailed granular information and process steps is available as part of our documentations. This will provided some guidance and directions for users new to the Site design on how to use / access the different pages, functionality and interfaces of the Website design.

Home Page
Linking on this page displays a number of images rotating in the centre of the screen with a live twitter feed on the column on the right and a number of links to points on the home page in the column to the left.
Across the top of the page is a navigation bar with a 5 options to link with the key pages. On hovering over these menu headings a submenu will appear offering links to a number of points on the various pages.
Scrolling down the page will allow the reader access to content according to the headings on the panel on the left hand side.
On the footer there are a number of �Sample links� which are not connected for the purposes of this project as well as logos for connecting to twitter, facebook etc.


About us Page
This page has details on the project team and gives the user an understanding of how the site is used and how it can benefit them. Towards the end of the page are a few sample resources including pdf downloads(*** Selected pdfs were too large to load onto site for this exercise), links to websites and a sample video embedded. The idea would be to grow the resource library for users giving them a variety of tools that could improve their performance. 

Contact us Page
This page includes a form which the user can complete to send an enquiry as well as an embedded google map to find our base (GCD).

Registration
This page must be completed before the user can get into the site proper and use the analysis tools. The user must complete their details including selecting a username and password which is sha1 coded. The details the user includes become part of their initial profile and will be stored on the database for future reference.

Login 
Once registered or if a user is previously registered they can go directly into the login page. Here they need to complete their username and password.

Profile Analysis Page
Once logged in the user will land on the Profile page. This page is the landing page for the back end site giving access to the main functionality of the site.
On the right hand side panel the details previously entered by the user will appear. On the left hand side there are a selection of links that the user can connect to for feedback on the input they have completed on the current visit as well as their historical data that can be retrieved.
In the centre of the page are two forms. These have been kept deliberately short to allow the user complete them quickly and get immediate feedback on their input. 

Training Details
The first form relates to training data which offers a daily input. It was considered better to complete daily inputs to encourage constant return to the site and generate greater relationship with the users. 
Each panel in the form must be completed in order:

Date: A date popup offers an easy way to fill in the day the training relates to

Type of training: A dropdown menu to choose whether the training was individual, with their club, or with their county.

Injury Status: Asks if the player had an injury at the time of the training or if they were ok.

Skills Training: Fill in the time spent doing skills training in minutes.

Fitness Training: Fill in the time spent doing fitness training in minutes.

Gym Training: Fill in the time spent doing Strength and Conditioning training.

Recovery Time: Fill in the time used for recovery after training.

How would you like to compare your details: Choose here if you want to compare against others that play in the same position as the user or compared to all the players.

Would you like to save these changes: Tick if yes. **NB If the box is not ticked no record will be added to the historical data for comparison purposes.

Evaluate Training Button: Once the form data has been filled and the relevant comparison and save buttons clicked this button can be used to display your results as compared with those against whom you have chosen to be measured. 
�	The output will appear below the form and will include a table and graph comparing averages per minute. 


Match Details
The second form relates to key performance indicators for matches.

Date of Match: Record the date of the match which the data relates to.

Type of Match: Dropdown menu gives the option of club or county

Minutes Played: Records the time spent on the pitch during the match

Distance covered in Meters: Records the amount of running done during the match

Number of Possessions: How many possessions held by the player

Passes Complete: Records the number of successful passes made during the match

Passes Incomplete: Records the number of missed passes made

Attempts: Records the number of shots attempted by player

Goals: Records the number of goals scored

Points: Records the number of points scored

How would you like to compare your details: Choose here if you want to compare against others that play in the same position as the user or compared to all the players.

Would you like to save these changes: Tick if yes. **NB If the box is not ticked no record will be added to the historical data for comparison purposes.

Evaluate Match Performance Button: Once the form data has been filled and the relevant comparison and save buttons clicked this button can be used to display your results as compared with those against whom you have chosen to be measured. 
�	The output will appear below the form in and will include a table and graph comparing averages per minute

On the panel on the left hand side there are 3 options the user can click.

Your Training Records: This link will bring the user to a new page that brings up the training records the user has previously entered in a table format with an accompanying pie chart. If no records have been saved nothing will be displayed.

Your Match Records: This link will bring the user to a new page that brings up the match records the user has previously entered in a table format with an accompanying pie chart. If no records have been saved nothing will be displayed.

Update User Details: This link will bring the user to a new form similar to the one first completed on registration. It allows the user to update some of the static data that profiles the user.

Logout Button: When the user is finished using the analysis section of the site they must logout. Once logged out the user will be diverted to the Home page once more.

