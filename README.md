# Elite:Dangerous HINTWIZ Project - MS1

# Pre-development

## Functional specifications - Given by Code Institute
- LO1: Design a front end web application based on the principles of user experience design, accessibility and responsivity.
- LO2: Develop and implement a static front end web application using HTML and css
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
- As a user who has never played the game, I may want to see a trailer so that I can decide on my level of interest in the game
- As a user who has never played the game, I would like a review to know what the developer's thoughts on the game are so I can judge whether or not I want to play it.
- As a user, I want to know how to start in a new game of Elite quickly so I do not have to work out the controls for myself
- As a user, I want to know which jobs I take early on in Elite, with advantages and disadvantages of each so I can get going faster
- As a user, I want to know how different ships perform different jobs so I can spend my in game currency more effectively
- As a user, I want to see something eye-catching and professional so my interest is maintained- designed for
- As a user, I don't like cluttered pages with too much information otherwise I may lose the will to continue reading - designed for
- As a user, I want everything that I can interact with to be obvious so I do not waste time looking for things - designed for
- As a user, I want clear links that take me to where I need to go so I can navigate more easily- designed for
- As a user, I may want to add the developer to my social media so I can ask further questions - designed for

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
### UPDATE: Landing Page page
On arrival to the page you will be presented with the following:

![Screenshot of home page](assets/pics/Screenshot1.jpg?raw=true "Landing Page")

Upon clicking on the highlighted area, this will take you to the main page for Elite:Dangerous.  The other similar boxes do nothing as there are no other reviewed games ready to be uploaded.  They do however represent how I would continue the site if time permitted.

### Elite Dangerous Home page
This page includes a large amount of information about the game including the trailer, a review and some hints on how to start the game.

## UX design
To make the design more user friendly I have done the following:

## Known issues
~~New front page requires styling and a footer~~
