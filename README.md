# Elite:Dangerous HINTWIZ Project - MS1

# Pre-development

## Functional specifications - Given by Code Institute
- LO1: Design a front end web application based on the principles of user experience design, accessibility and responsivity.
- LO2: Develop and implement a static front end web application using HTML and CSS
- LO3: Maximize future maintainability through documentation, code structure and organisation
- LO4: Use version control to maintain, upload and share code with developers
- LO5: Test and deploy a front end application to a cloud platform

### What this means
- Think like a user and produce a website that is easy to navigate and understand.
- Keep the backdrop from being distracting.
- Ensure the website is standard in terms of style.
- Ensure that there is accessibility even for those people who use assistive technology
- Make sure the website responds to different devices.  No point in a website that breaks when viewed on mobile.
- Static website produced using HTML (passing quality check)
- Styled using CSS and bootstrap (passing quality check)
- JavaScript not required, but can be implemented. For example, bootstrap will use JQuery.
- No Lorem ipsum text.
- Ensure this is fully documented and commented to be clear to any developer reading through.

## User stories

### First Time Users

- As a user who has never played the game, I may want to see a trailer so that I can decide on my level of interest in the game
- As a user who has never played the game, I would like a review to know what the developer's thoughts on the game are so I can judge whether or not I want to play it.
- As a user, I want to know how to start in a new game of Elite quickly so I do not have to work out the controls for myself
- As a user, I want to know which jobs I take early on in Elite, with advantages and disadvantages of each so I can get going faster
- As a user, I want to know how different ships perform different jobs so I can spend my in game currency more effectively
- As a user, I want to see something eye-catching and professional so my interest is maintained- designed for
- As a user, I don't like cluttered pages with too much information otherwise I may lose the will to continue reading - designed for

### Hitting these targets

- As a user who has never played the game, I may want to see a trailer so that I can decide on my level of interest in the game
    * The trailer for the game is available at the bottom of the page. This will open the YouTube player in a separate window so that people can see this without losing their place on the website

- As a user who has never played the game, I would like a review to know what the developer's thoughts on the game are so I can judge whether or not I want to play it.
    * The first page that users visit is the review page.  
    * This has a summary at the end that helps players quickly see what my opinions of the game would be
    
- As a user, I want to know how to start in a new game of Elite quickly so I do not have to work out the controls for myself
    * One of the first links available to the users is the "walkthrough" link.  This allows players to quickly and easily navigate to the section that would be most helpful.
    
- As a user, I want to know which jobs I take early on in Elite, with advantages and disadvantages of each so I can get going faster
    * One of the first links available to the users is the "walkthrough" link.  This allows players to quickly and easily navigate to the section that would be most helpful.
    
- As a user, I want to know how different ships perform different jobs so I can spend my in game currency more effectively
    * One of the first links available to the users is the "walkthrough" link.  This allows players to quickly and easily navigate to the section that would be most helpful.
    
- As a user, I want to see something eye-catching and professional so my interest is maintained
    * The splash page for the site is particularly eye catching with some nice JavaScript to draw the user in.
    
- As a user, I don't like cluttered pages with too much information otherwise I may lose the will to continue reading 
    * Care was taken to limit the amount of information on each page and add extra pages where necessary.  This was continuously tested with beta users.

### Returning User
- As a user, I want everything that I can interact with to be obvious so I do not waste time looking for things 
- As a user, I want clear links that take me to where I need to go so I can navigate more easily- designed for
- As a user, I may want to add the developer to my social media so I can ask further questions

### Hitting these targets
- As a user, I want everything that I can interact with to be obvious so I do not waste time looking for things 
    * One of the first links available to the users is the "walkthrough" link.  This allows players to quickly and easily navigate to the section that would be most helpful.
    
- As a user, I want clear links that take me to where I need to go so I can navigate more easily- designed for
    * One of the first links available to the users is the "walkthrough" link.  This allows players to quickly and easily navigate to the section that would be most helpful.

- As a user, I may want to add the developer to my social media so I can ask further questions
    * Social media links are available in the footer of each page, allowing the user to navigate to an external page that they can add the developer on.

## Entity relationship
In order for my site to link fully to itself, I intend to put the links into the top nav bar to the right hand side.  This will be consistent across all of the pages to keep the user interface simple. I will also include links at the bottom of the page, which are somewhat prettified.

UPDATE: Due to confusion, links at the bottom of the page have been removed.  There will only be links on the top bar now

UPDATE: With the addition of the title page, I have made it so the logo at the top right now navigates to this page.  This is in keeping with standard user design and is obvious to follow.

UPDATE: Based on test feedback, I have decided to have a dropdown menu from the walkthrough link and put all walkthrough based pages inside that. This will be in keeping with my title page.

## Preliminary Designs
These can be found [here](ms1wireframes.pdf).

UPDATE: Major Change; Title page added to create a landing page for users to come into.

UPDATE: Minor Change; Extra pages added to create a more comprehensive walkthrough

UPDATE: Major Change; PHP page added to create some feedback when a user submits a form.

---

## Features

-   Responsive on all device sizes

-   Interactive elements

-   JavaScript and PHP integration


# Post-Development

To access the page go to your favourite browser and type "<http://r-guest-developer.world>" into the search bar. The code is hosted at "<https://github.com/rguest20/MS1-Elite>".

### Dependencies
#### HTML
I am using HTML 5 and this is shown by the use of the '<!DOCTYPE html>' tag used at the start of each document.  This comes with all of the semantic markup that I need to ensure that the code is easy to read and debug if necessary.

#### PHP
PHP is naturally supported by the webhost that I am using and acts a server side language to deal with the form that is inputted.  I am using PHP Mailer to send an email so that the form is not pointless.

#### JavaScript
There are several JavaScript libraries that are required to ensure the page works, but these are included in the hosted site, so no dependencies are needed for viewing the site. For the sake of clarity, these are the JavaScript libraries that are used:
- JQuery
- JQueryUI
- Animate.js
- Popper.js

There is also some JavaScript included on the pages, but this is bespoke using the dependencies.

#### CSS
Again, several CSS dependencies are used but are included with the site, so do not need anything installing to use. Again, for the sake of clarity these dependencies are listed below:
- Bootstrap 4
- Font-Awesome 5
- Google Fonts
- JQueryUI
- Animate.css

CSS for the pages is included in a separate stylesheet, but this is again hosted and built bespoke to extend the dependencies.

## How to use
### UPDATE: Landing Page
On arrival to the page you will be presented with the following:

![Screenshot of home page](assets/pics/Screenshot1.jpg?raw=true "Landing Page")

Upon clicking on the highlighted area, this will take you to the main page for Elite:Dangerous.  The other similar boxes do nothing as there are no other reviewed games ready to be uploaded.  They do however represent how I would continue the site if time permitted.

### Elite Dangerous Home page
This page includes a large amount of information about the game including the trailer, a review ~~and some hints on how to start the game~~ and a link to the steam page where the game can be bought:
First Screenshot
![Screenshot of review page](assets/pics/Screenshot2.jpg?raw=true "Review Page")
- Yellow: Returns to landing page
- Green: Dropdown menu
- Red: External links to Facebook and Twitter (opens in new pages) suggested by user stories
- Blue: Modal that shows relevant legal information and allows users to send me an email if they believe I have used something that breaches copyright law.

Second Screenshot
![Bottom Screenshot of review page](assets/pics/Screenshot3.jpg?raw=true "Review Page Bottom")
- Red: Links to walkthrough pages about Elite.
- Green: External Links to buy the game or watch the trailer as suggested by user story

note: all external links open in separate window.

### Walkthrough information pages
These pages include the text information to help a person early on in their Elite career. Several pages are given that all show how to progress.  A standard design for this was used where the information was on the left and pictures are given on the right.  A horizontal rule is used to differentiate separate pieces of information.

![Screenshot of walkthrough pages](assets/pics/Screenshot4.jpg?raw=true "Walkthrough Pages")
- Red: Returns to landing page
- Green: Dropdown menu
- Yellow: External links to Facebook and Twitter (opens in new pages) suggested by user stories
- Blue: Modal that shows relevant legal information and allows users to send me an email if they believe I have used something that breaches copyright law.

### Ships Page
The ships page is a little different from the other pages. This has 3 different pictures of early ships where clicking on them will give you more information. To keep UX good, I have made sure that on any size screen, the information will always appear below the ship picture.
This was achieved with JavaScript.

![Screenshot of ships page](assets/pics/Screenshot5.jpg?raw=true "Ships page unclicked")
- Red: Clicking here will give you information about the Ships

![Screenshot of ships page with one picture clicked](assets/pics/Screenshot6.jpg?raw=true "Ships page clicked")
This is what happens when the page is clicked

### Correct Website form
The correct my website form allows users to submit requests for information to be corrected on certain pages.  When complete and submitted this will send an email to my website domain email as well as the user.  Validation is used on the client side to ensure that information is passed into the form before it is submitted. At the bottom, as a reward for keen eyed users, there is a wall of fame for people who helped update the site to be more correct.

![Screenshot of form page](assets/pics/Screenshot7.jpg?raw=true "Form page to inform website owner of mistakes")
- Red: This is where the name of the user is to be entered. A placeholder and label makes this clear. Validation used to ensure it is not empty
- Orange: This is where the email of the user is to be entered. A placeholder and label makes this clear.  Validation used to make sure it looks like an email address.
- Green: User picks a page that needs correcting. Validation used to make sure a page is picked.
- Blue: User explains what the issue with the page is. Validation used to make sure it is not left blank.
-Purple: Submit button. Sends the completed form to a PHP page to be emailed to user/owner.

## UX design
To make the design more user friendly I have done the following:
- I have used a stark colour palette in order to keep the website visually appealing
- My navbar follows the expectations set up in my splash pages
- Information is split into separate pages in order to not overwhelm the user
- Any clickable link will react in some way to make it obvious that it is clickable. The speed of these reactions is kept quick so the feedback to the user is obvious.
- Feedback is accepted via a form which will then send the user and the site owner an email.  This means that the user knows that their request has been seen and may be acted on.
- The feedback submit page will auto redirect to the main page for the game, meaning the user does not feel lost.  A manual redirect is also provided in the event that the automatic redirect fails.
- All pictures have alt text to allow screen readers to explain what the picture is about.  I have tried to work with assistive technology.
- The site is responsive and will resize to different screens.  This means it can be viewed on any device (tested with dev tools)

## Further Testing

-   The Website was tested on Google Chrome, Internet Explorer, Microsoft Edge and Safari browsers.
-   The website was viewed on a variety of devices such as Desktop, Laptop, iPhone7, iPhone 8 & iPhoneX.
-   A large amount of testing was done to ensure that all pages were linking correctly.
-   Friends and family members were asked to review the site and documentation to point out any bugs and/or user experience issues.

## Deployment

### GitHub Pages

The project was deployed to GitHub Pages using the following steps...

1. Log in to GitHub and locate the [GitHub Repository](https://github.com/)
2. At the top of the Repository (not top of page), locate the "Settings" Button on the menu.
    - Alternatively Click [Here](https://raw.githubusercontent.com/) for a GIF demonstrating the process starting from Step 2.
3. Scroll down the Settings page until you locate the "GitHub Pages" Section.
4. Under "Source", click the dropdown called "None" and select "Master Branch".
5. The page will automatically refresh.
6. Scroll back down through the page to locate the now published site [link](https://github.com) in the "GitHub Pages" section.

### Forking the GitHub Repository

By forking the GitHub Repository we make a copy of the original repository on our GitHub account to view and/or make changes without affecting the original repository by using the following steps...

1. Log in to GitHub and locate the [GitHub Repository](https://github.com/)
2. At the top of the Repository (not top of page) just above the "Settings" Button on the menu, locate the "Fork" Button.
3. You should now have a copy of the original repository in your GitHub account.

### Making a Local Clone

1. Log in to GitHub and locate the [GitHub Repository](https://github.com/)
2. Under the repository name, click "Clone or download".
3. To clone the repository using HTTPS, under "Clone with HTTPS", copy the link.
4. Open Git Bash
5. Change the current working directory to the location where you want the cloned directory to be made.
6. Type `git clone`, and then paste the URL you copied in Step 3.

```
$ git clone https://github.com/rguest20/ms1-elite
```

7. Press Enter. Your local clone will be created.

```
$ git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY
> Cloning into `CI-Clone`...
> remote: Counting objects: 10, done.
> remote: Compressing objects: 100% (8/8), done.
> remove: Total 10 (delta 1), reused 10 (delta 1)
> Unpacking objects: 100% (10/10), done.
```

## Credits

### Code

-   [Bootstrap4](https://getbootstrap.com/docs/4.4/getting-started/introduction/): Bootstrap Library used throughout the project mainly to make site responsive using the Bootstrap Grid System.

-   [MDN Web Docs](https://developer.mozilla.org/) : For Pattern Validation code. Code was modified to better fit my needs and to match an Irish phone number layout to ensure correct validation. Tutorial Found [Here](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/tel#Pattern_validation)

### Content

-   All content was written by the developer, except for a short excerpt of code written by Stack Overflow User: Knightkiddo.  This code allowed the creation of the text on the front page.

### Media

-   All Images were used under fair use clauses for the purpose of Review.  The artwork is the property of Frontier and their subsiduaries.

### Acknowledgements

-   My Mentor for continuous helpful feedback.

-   Tutor support at Code Institute for their support. The tutor team also supported in the creation of this README.

## Known issues
- ~~New front page requires styling and a footer~~
- To extend this page I would add extra games and extend the walkthrough even further to cover more topics within the games.
- Email PHP does not function on the GitHub Sample Page.  To see a functional version, please visit [HERE](http://r-guest-developer.world/ms1/submit.html)
