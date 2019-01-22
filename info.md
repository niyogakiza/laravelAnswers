How MVC WORKS
* MVC allows you to easily manage and separate your app by its purpose
* It prevents us from repeating ourselves in our code

 CONTROLLER
 
 * The controller decides how to handle user request
 * If information is needed from the database, it will talk to the model to get it
 * After it gets data, it process it and then sends it to the view to display the user
 
Model

* The model gets from the database or saves it to the database
* It is your interaction with the database or persistent storage system

View

* The HTML and CSS that is given to the user comes from the view
* The view receives its data from the controller and contains the visual information needed to present it to the user.

CONCLUSION

* The controller is our entry point into a request
* If the controller needs data from the DB, we will request it via the model
* After we have everything and have processed logic in the controller, we pass data to the view which displays it to the user
