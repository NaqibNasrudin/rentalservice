# Rental Service
Website for vehicle rental service for any tourist

Group Project Proposal <br>


Name and Matric No of the group members<br>

Muhammad Naqib Bin Nasrudin 1912549<br>
Muhammad Adib Bin Jamaluddin 1915889<br>
Nur Aisyah Syahirah binti Osman 1819266<br>
Yasmin Hana binti Zulkifli 1914198<br>

Title of the project<br>

Vehicle Rental Service System.<br>

Introduction<br>

Pulau Pangkor is a small island located in Manjung District,Perak. Many local tourists started to flood this island when the government announced that this island is a duty free island and of course due to the pandemic as well because of restrictions to travel overseas. Many of the tourists would prefer to rent a motorcycle to explore the island. Some of them also would go for a taxi. However, they are only able to rent it manually once they arrive on the island. This is because the rental provider does not have a proper channel to advertise their services and enable renters to book the vehicles they want. Thus, we decided to come out with a project to provide a system where rental providers in Pulau Pangkor can have a proper platform for customers all around Malaysia to reserve their vehicles.<br> 

Objectives<br>

The objectives to our system are :<br>

To manage and tracks the information details of customers, vehicles, payments and dates of rental<br>
To allow customers to see the details of the vehicles needed as well as the location of the rental<br>
To enable renters to check the vehicles availability and reserve the desired vehicle type from anywhere in Malaysia.<br>

Features and functionalities<br>

Booking - for customers to reserve the vehicles chosen.<br>
Weather API - to help customers decide which type of vehicle is suitable for them based on the weather conditions.<br>

Views, controllers, routes, models. <br>

Views <br>
View contains HTML code required by an application and it is a method in Laravel that separates the controller logic and domain logic from the presentation logic. Four views are required for this project. Those are homepage, listings, booking and booked vehicles. <br>

Controllers<br>
Controller is a mediator between view and model. By using a controller we can handle all the requests from views before it proceeds to models. This pattern is called MVC (Models-Views-Controller). For example, userController might handle all incoming requests related to CRUD operations and send it to Models. For our project, we will use controllers for authentication of users.<br>

Routes<br>
Routes are used for redirecting users when they are using our webpage. Web.php is where we put all our routing for the website. For our project, we set our landing page and also the page that will be redirected when users click the nav bar or button in the routes file.<br>

Models<br>
A Model is a way for querying data to and from the table in the database. For the purpose of the project, we only have one model which is for the data that is input by the user to be passed to the database.<br>


Entity Relationship Diagram






Sequence diagram


References
https://laravel.com/docs/8.x/controllers
https://laravel.com/docs/8.x/routing


