Chapter 1 Getting your feet wet
The way JavaScript works
How you’re going to write JavaScript
How to get JavaScript into your page
JavaScript, you’ve come a long way baby...
How to make a statement
Variables and values
Back away from that keyboard!
Express yourself
Doing things more than once
How the while loop works
Making decisions with JavaScript
And, when you need to make LOTS of decisions
Reach out and communicate with your user
A closer look at console.log
Opening the console
Coding a Serious JavaScript Application
How do I add code to my page? (let me count the ways)
We’re going to have to separate you two
Chapter 2 Going further
Let’s build a Battleship game
Our first attempt...
First, a high-level design
A few more details...
Working through the Pseudocode
Oh, before we go any further, don’t forget the HTML!
Writing the Simple Battleship code
Now let’s write the game logic
Step One: setting up the loop, getting some input
How prompt works
Checking the user’s guess
So, do we have a hit?
Adding the hit detection code
Hey, you sank my battleship!
Provide some post-game analysis
And that completes the logic!
Doing a little Quality Assurance
Can we talk about your verbosity...
Finishing the Simple Battleship game
How to assign random locations
The world-famous recipe for generating a random number
Back to do a little more QA
Congrats on your first true JavaScript program, and a short word about reusing code
Chapter 3 Getting functional
What’s wrong with the code anyway?
By the way, did we happen to mention FUNCTIONS?
Okay, but how does it actually work?
What can you pass to a function?
JavaScript is pass-by-value.
Weird Functions
Functions can return things too
Tracing through a function with a return statement
Global and local variables
Knowing the scope of your local and global variables
The short lives of variables
Don’t forget to declare your locals!
Chapter 4 Arrays
Can you help Bubbles-R-Us?
How to represent multiple values in JavaScript
How arrays work
How to access an array item
Updating a value in the array
How big is that array anyway?
The Phrase-O-Matic
Meanwhile, back at Bubbles-R-Us...
How to iterate over an array
But wait, there’s a better way to iterate over an array
It’s that time again.... Can we talk about your verbosity?
Redoing the for loop with the post-increment operator
Quick test drive
Creating an array from scratch (and adding to it)
And the winners are...
A quick survey of the code...
Writing the printAndGetHighScore function
Refactoring the code using printAndGetHighScore
Putting it all together...
Chapter 5 A trip to Objectville
Did someone say “Objects”?!
Thinking about properties...
How to create an object
What is Object-Oriented Anyway?
How properties work
How does a variable hold an object? Inquiring minds want to know...
Comparing primitives and objects
Doing even more with objects...
Stepping through pre-qualification
Let’s talk a little more about passing objects to functions
Oh Behave! Or, how to add behavior to your objects
Improving the drive method
Why doesn’t the drive method know about the started property?
How this works
How behavior affects state... Adding some Gas-o-line
Now let’s affect the behavior with the state
Congrats on your first objects!
Guess what? There are objects all around you! (and they’ll make your life easier)
Chapter 6 Getting to know the DOM
In our last chapter, we left you with a little challenge. The “crack the code challenge.”
So what does the code do?
How JavaScript really interacts with your page
How to bake your very own DOM
A first taste of the DOM
Getting an element with getElementById
What, exactly, am I getting from the DOM?
Finding your inner HTML
What happens when you change the DOM
A test drive around the planets
Don’t even think about running my code until the page is fully loaded!
You say “event handler,” I say “callback”
How to set an attribute with setAttribute
More fun with attributes! (you can GET attributes too)
So what else is a DOM good for anyway?
Chapter 7 Serious types
The truth is out there...
Watch out, you might bump into undefined when you aren’t expecting it...
How to use null
Dealing with NaN
It gets even weirder
We have a confession to make
Understanding the equality operator (otherwise known as ==)
How equality converts its operands (sounds more dangerous than it actually is)
How to get strict with equality
Even more type conversions...
How to determine if two objects are equal
The truthy is out there...
What JavaScript considers falsey
The Secret Life of Strings
How a string can look like a primitive and an object
A five-minute tour of string methods (and properties)
Chair Wars (or How Really Knowing Types Can Change Your Life)
Chapter 8 Building an app
This time, let’s build a REAL Battleship game
Stepping back... to HTML and CSS
Creating the HTML page: the Big Picture
Adding some more style
Using the hit and miss classes
How to design the game
Implementing the View
How displayMessage works
How displayHit and displayMiss work
The Model
How we’re going to represent the ships
Implementing the model object
Setting up the fire method
Implementing the Controller
Processing the player’s guess
Planning the code...
Implementing parseGuess
Counting guesses and firing the shot
How to add an event handler to the Fire! button
Passing the input to the controller
How to place ships
Writing the generateShip method
Generate the starting location for the new ship
Completing the generateShip method
Chapter 9 Handling events
What are events?
What’s an event handler?
How to create your first event handler
Test drive your event
Getting your head around events... by creating a game
Implementing the game
Test drive
Let’s add some more images
Now we need to assign the same event handler to each image’s onclick property
How to reuse the same handler for all the images
How the event object works
Putting the event object to work
Test drive the event object and target
Events and queues
Even more events
How setTimeout works
Finishing the image game
Test driving the timer
Chapter 10 Liberated functions
The mysterious double life of the function keyword
Function declarations versus function expressions
Parsing the function declaration
What’s next? The browser executes the code
Moving on... The conditional
How functions are values too
Did we mention functions have First Class status in JavaScript?
Flying First Class
Writing code to process and check passengers
Iterating through the passengers
Passing a function to a function
Returning functions from functions
Writing the flight attendant drink order code
The flight attendant drink order code: a different approach
Taking orders with first class functions
Webville Cola
How the array sort method works
Putting it all together
Take sorting for a test drive
Chapter 11 Serious functions
Taking a look at the other side of functions...
How to use an anonymous function
We need to talk about your verbosity, again
When is a function defined? It depends...
What just happened? Why wasn’t fly defined?
How to nest functions
How nesting affects scope
A little review of lexical scope
Where things get interesting with lexical scope
Functions Revisited
Calling a function (revisited)
What the heck is a closure?
Closing a function
Using closures to implement a magic counter
Looking behind the curtain...
Creating a closure by passing a function expression as an argument
The closure contains the actual environment, not a copy
Creating a closure with an event handler
How the Click me! closure works
Chapter 12 Creating objects
Creating objects with object literals
Using conventions for objects
Introducing Object Constructors
How to create a Constructor
How to use a Constructor
How constructors work
You can put methods into constructors as well
It’s Production Time!
Let’s test drive some new cars
Don’t count out object literals just yet
Rewiring the arguments as an object literal
Reworking the Car constructor
Understanding Object Instances
Even constructed objects can have their own independent properties
Real World Constructors
The Array object
Even more fun with built-in objects
Chapter 13 Extra strength objects
Hey, before we get started, we’ve got a better way to diagram our objects
Revisiting object constructors: we’re reusing code, but are we being efficient?
Is duplicating methods really a problem?
What are prototypes?
Inheriting from a prototype
How inheritance works
Overriding the prototype
How to set up the prototype
Prototypes are dynamic
A more interesting implementation of the sit method
One more time: how the sitting property works
How to approach the design of the show dogs
Setting up a chain of prototypes
How inheritance works in a prototype chain
Creating the show dog prototype
Creating a show dog instance
A final cleanup of show dogs
Stepping through Dog.call
The chain doesn’t end at dog
Using inheritance to your advantage... by overriding built-in behavior
Using inheritance to your advantage... by extending a built-in object
Grand Unified Theory of
Better living through objects
Putting it all together
What’s next?
