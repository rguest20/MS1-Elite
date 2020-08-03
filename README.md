# Elite:Dangerous HINTWIZ Project - MS1
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
- As a user who has never played the game, I may want to see a trailer
- As a user who has never played the game, I would like a review to know what the developer's thoughts on the game are
- As a user, I want to know how to start in a new game of Elite quickly
- As a user, I want to know which jobs I take early on in Elite, with advantages and disadvantages of each
- As a user, I want to know how different ships perform different jobs
- As a user, I want to see something eye-catching and professional - designed for
- As a user, I don't like cluttered pages with too much information - designed for
- As a user, I want everything that I can interact with to be obvious - designed for
- As a user, I want clear links that take me to where I need to go - designed for
- As a user, I may want to add the developer to my social media

 are an effective tool to identify and describe the functionality needed from the user’s perspective, and can be used as acceptance criteria. Developers can also use the same domain language as in user stories to develop nomenclature in the software, so taking care to name objects clearly and logically helps ensure that the code correlates with the requirements.

Entity relationship diagrams present users and objects (entities), relationships, and attributes in graphical format. They can be particularly useful for complex projects with large development teams, and help ensure that everyone understands the relationships between the different objects before development begins.

While it’s important to document functional requirements at a high level before moving into the development phase, excessive or overly detailed pre-development documentation can potentially restrict the project team’s options for developing appropriate solutions; it may also become obsolete later in the project life cycle as new requirements, problems, and details emerge during the project. Extensive documentation is also time-consuming to maintain, so it’s best to create more detailed documentation later in the project life cycle.

DOCUMENTATION DURING DEVELOPMENT
It’s important during the development phase to clearly represent the high-level architecture and note any deviations from typical practice as the project progresses. Development documentation at this stage is typically automated through good programming practices rather than manually written into documents. This can be facilitated by the use of frameworks, choice of programming language, and in the messages in your version control/code repositories.

Frameworks are specific software libraries that serve as a filing system in a standard format to store code and procedures. Ruby on Rails was the first framework designed specifically to meet the needs of web application development, and is considered to be the gold standard that other frameworks are modeled upon. Each framework is designed to be used with a particular programming language – e.g., Ruby on Rails with Ruby, Django with Python and Cake with PHP.

Programming languages have various forms of syntax requiring various levels of comments/remarks to be clearly documented and understood. Languages using syntax close to natural English clearly show the intent without the need of excessive documentation or comments. We chose to work in Ruby because it has a very clear syntax and therefore can be described as a self-documenting language (Python is another such language).

Version control/code repositories can also be considered to be part of documentation. To make repositories useful in that way, developers should insert an explanation of what is being “committed” (describing how the updated source code affects the project).

Most of the tools mentioned above support project teams in creating effective documentation easily “as they go,” requiring minimum time and effort, which also means that it is very cost effective for the client.

POST-DEVELOPMENT DOCUMENTATION
Post-development documentation is typically produced in order to support the team of developers responsible for maintaining the software or to teach end-users how to use the software.

Proficient use of some of the tools discussed previously can eliminate the need to pull divergent results and ideas together at the end of a project with additional documentation. However, at the very minimum it is good software project etiquette to document the procedure describing how to set up and run the application, helping future developers to get up and running quickly.

The need for extensive end-user documentation is largely disappearing as software becomes increasingly intuitive, with particular emphasis on User Experience and User Interface design. Moreover, screencasts are now preferred over traditional user manuals.

With the goal of remaining as lean and productive as possible while adequately documenting our work, we favor user stories for pre-development and use frameworks, intuitive programming languages, integration testing, and code repositories during the development phase. Our primary goal in producing any documentation is ease of use for the next person who maintains or builds upon the software.

## Known issues
On window resize the styling does not work with the ships page.  Looking at a JavaScript solution to this. - Fix hacked in.
